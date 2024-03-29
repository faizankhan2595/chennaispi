( function( $ ) {
	var EkitSticky = function( element, userSettings ) {
		var $element,
			isSticky = false,
			isFollowingParent = false,
			isReachedEffectsPoint = false,
			elements = {},
			settings,
			lastScrollY = -1;

		var defaultSettings = {
			to: 'top',
			offset: 0,
			effectsOffset: 0,
			parent: false,
			classes: {
				sticky: 'ekit-sticky',
				stickyActive: 'ekit-sticky-active',
				stickyEffects: 'ekit-sticky-effects',
				spacer: 'ekit-sticky-spacer',
				up: 'ekit-sticky--up',
				down: 'ekit-sticky--down'
			},
		};

		var initElements = function() {
			$element = $( element ).addClass( settings.classes.sticky );

			elements.$window = $( window );

			if ( settings.parent ) {
				if ( 'parent' === settings.parent ) {
					elements.$parent = $element.parent();
				} else {
					elements.$parent = $element.closest( settings.parent );
				}
			}
		};

		var initSettings = function() {
			settings = jQuery.extend( true, defaultSettings, userSettings );
		};

		var bindEvents = function() {
			elements.$window.on( {
				scroll: onWindowScroll,
				resize: onWindowResize,
			} );
		};

		var unbindEvents = function() {
			elements.$window
				.off( 'scroll', onWindowScroll )
				.off( 'resize', onWindowResize );
		};

		var init = function() {
			initSettings();

			initElements();

			bindEvents();

			checkPosition();
		};

		var backupCSS = function( $elementBackupCSS, backupState, properties ) {
			var css = {},
				elementStyle = $elementBackupCSS[ 0 ].style;

			properties.forEach( function( property ) {
				css[ property ] = undefined !== elementStyle[ property ] ? elementStyle[ property ] : '';
			} );

			$elementBackupCSS.data( 'css-backup-' + backupState, css );
		};

		var getCSSBackup = function( $elementCSSBackup, backupState ) {
			return $elementCSSBackup.data( 'css-backup-' + backupState );
		};

		var addSpacer = function() {
			elements.$spacer = $element.clone()
				.addClass( settings.classes.spacer )
				.css( {
					visibility: 'hidden',
					transition: 'none',
					animation: 'none',
				} );

			$element.after( elements.$spacer );
		};

		var removeSpacer = function() {
			elements.$spacer.remove();
		};

		var stickElement = function() {
			backupCSS( $element, 'unsticky', [ 'position', 'width', 'margin-top', 'margin-bottom', 'top', 'bottom' ] );

			var css = {
				position: 'fixed',
				width: getElementOuterSize( $element, 'width' ),
				marginTop: 0,
				marginBottom: 0,
			};

			css[ settings.to ] = settings.offset + 'px';

			css[ 'top' === settings.to ? 'bottom' : 'top' ] = '';

			$element
				.css( css )
				.addClass( settings.classes.stickyActive );
		};

		var unstickElement = function() {
			$element
				.css( getCSSBackup( $element, 'unsticky' ) )
				.removeClass( settings.classes.stickyActive );
		};

		var followParent = function() {
			backupCSS( elements.$parent, 'childNotFollowing', [ 'position' ] );

			elements.$parent.css( 'position', 'relative' );

			backupCSS( $element, 'notFollowing', [ 'position', 'top', 'bottom' ] );

			var css = {
				position: 'absolute',
			};

			css[ settings.to ] = '';

			css[ 'top' === settings.to ? 'bottom' : 'top' ] = 0;

			$element.css( css );

			isFollowingParent = true;
		};

		var unfollowParent = function() {
			elements.$parent.css( getCSSBackup( elements.$parent, 'childNotFollowing' ) );

			$element.css( getCSSBackup( $element, 'notFollowing' ) );

			isFollowingParent = false;
		};

		var getElementOuterSize = function( $elementOuterSize, dimension, includeMargins ) {
			var computedStyle = getComputedStyle( $elementOuterSize[ 0 ] ),
				elementSize = parseFloat( computedStyle[ dimension ] ),
				sides = 'height' === dimension ? [ 'top', 'bottom' ] : [ 'left', 'right' ],
				propertiesToAdd = [];

			if ( 'border-box' !== computedStyle.boxSizing ) {
				propertiesToAdd.push( 'border', 'padding' );
			}

			if ( includeMargins ) {
				propertiesToAdd.push( 'margin' );
			}

			propertiesToAdd.forEach( function( property ) {
				sides.forEach( function( side ) {
					elementSize += parseFloat( computedStyle[ property + '-' + side ] );
				} );
			} );

			return elementSize;
		};

		var getElementViewportOffset = function( $elementViewportOffset ) {
			var windowScrollTop = elements.$window.scrollTop(),
				elementHeight = getElementOuterSize( $elementViewportOffset, 'height' ),
				viewportHeight = innerHeight,
				elementOffsetFromTop = $elementViewportOffset.offset().top,
				distanceFromTop = elementOffsetFromTop - windowScrollTop,
				topFromBottom = distanceFromTop - viewportHeight;

			return {
				top: {
					fromTop: distanceFromTop,
					fromBottom: topFromBottom,
				},
				bottom: {
					fromTop: distanceFromTop + elementHeight,
					fromBottom: topFromBottom + elementHeight,
				},
			};
		};

		var stick = function() {
			addSpacer();

			stickElement();

			isSticky = true;

			$element.trigger( 'sticky:stick' );
		};

		var unstick = function() {
			unstickElement();

			removeSpacer();

			isSticky = false;

			$element[0].style.transform = null;
			$element.trigger( 'sticky:unstick' );
		};

		var checkParent = function() {
			var elementOffset = getElementViewportOffset( $element ),
				isTop = 'top' === settings.to;

			if ( isFollowingParent ) {
				var isNeedUnfollowing = isTop ? elementOffset.top.fromTop > settings.offset : elementOffset.bottom.fromBottom < -settings.offset;

				if ( isNeedUnfollowing ) {
					unfollowParent();
				}
			} else {
				var parentOffset = getElementViewportOffset( elements.$parent ),
					parentStyle = getComputedStyle( elements.$parent[ 0 ] ),
					borderWidthToDecrease = parseFloat( parentStyle[ isTop ? 'borderBottomWidth' : 'borderTopWidth' ] ),
					parentViewportDistance = isTop ? parentOffset.bottom.fromTop - borderWidthToDecrease : parentOffset.top.fromBottom + borderWidthToDecrease,
					isNeedFollowing = isTop ? parentViewportDistance <= elementOffset.bottom.fromTop : parentViewportDistance >= elementOffset.top.fromBottom;

				if ( isNeedFollowing ) {
					followParent();
				}
			}
		};

		var checkEffectsPoint = function( distanceFromTriggerPoint ) {
			if ( isReachedEffectsPoint && -distanceFromTriggerPoint < settings.effectsOffset ) {
				$element.removeClass( settings.classes.stickyEffects );

				isReachedEffectsPoint = false;
			} else if ( ! isReachedEffectsPoint && -distanceFromTriggerPoint >= settings.effectsOffset ) {
				$element.addClass( settings.classes.stickyEffects );

				isReachedEffectsPoint = true;
			}
		};

		var checkPosition = function() {
			var offset = settings.offset,
				distanceFromTriggerPoint;

			if ( settings.stopAt || settings.column ) {
				var targetEl = $element[0],
					$parent = settings.stopAt || $element.parent(),
					parentOffset = $parent.offset().top,
					remainningHeight = $parent[0].clientHeight - targetEl.clientHeight,
					offsetParent = (this.scrollY - parentOffset) + settings.offset,
					isOffParent = offsetParent >= remainningHeight,
					bottomOffParent = 0;

				if ( 'bottom' === settings.to ) {
					remainningHeight = parentOffset - (this.innerHeight - targetEl.clientHeight);
					offsetParent = this.scrollY + settings.offset;
					isOffParent = offsetParent <= remainningHeight;
					bottomOffParent = offsetParent == (remainningHeight - targetEl.clientHeight);
				}

				if ( isOffParent && settings.column && 'widget' === targetEl.dataset.element_type ) {
					if ( isSticky ) unstick();
					targetEl.style.transform = 'translateY('+ remainningHeight +'px)';
					return;
				} else {
					targetEl.style.transform = null;
				}
			}

			if ( isSticky ) {
				var spacerViewportOffset = getElementViewportOffset( elements.$spacer );

				distanceFromTriggerPoint = 'top' === settings.to ? spacerViewportOffset.top.fromTop - offset : -spacerViewportOffset.bottom.fromBottom - offset;

				if ( settings.parent ) {
					checkParent();
				}

				if ( distanceFromTriggerPoint > 0 ) {
					unstick();
				}
			} else {
				var elementViewportOffset = getElementViewportOffset( $element );

				distanceFromTriggerPoint = 'top' === settings.to ? elementViewportOffset.top.fromTop - offset : -elementViewportOffset.bottom.fromBottom - offset;

				if ( distanceFromTriggerPoint <= 0 ) {
					stick();

					if ( settings.parent ) {
						checkParent();
					}
				}
			}

			if ( settings.stopAt || settings.column ) {
				if ( isOffParent && settings.stopAt ) {
					offsetParent = ('top' === settings.to) ? -(offsetParent - remainningHeight) : (remainningHeight - offsetParent);
					targetEl.style.transform = 'translateY('+ offsetParent +'px)';
				}
			}

			checkEffectsPoint( distanceFromTriggerPoint );

			setScrollDirection();
		};

		var setScrollDirection = function () {
			if ( settings.isShowOnScrollUp && lastScrollY != -1 ) {
				if ( lastScrollY > window.scrollY ) {
					$element.addClass( settings.classes.up ).removeClass( settings.classes.down );
				} else {
					$element.addClass( settings.classes.down ).removeClass( settings.classes.up );
				}
			}

			lastScrollY = window.scrollY;
		}

		var onWindowScroll = function() {
			checkPosition();
		};

		var onWindowResize = function() {
			if ( ! isSticky ) {
				return;
			}

			unstickElement();

			stickElement();
		};

		this.destroy = function() {
			if ( isSticky ) {
				unstick();
			}

			unbindEvents();

			$element.removeClass( settings.classes.sticky );
		};

		init();
	};

	$.fn.ekit_sticky = function( settings ) {
		var isCommand = 'string' === typeof settings;

		this.each( function() {
			var $this = $( this );

			if ( ! isCommand ) {
				$this.data( 'ekit_sticky', new EkitSticky( this, settings ) );

				return;
			}

			var instance = $this.data( 'ekit_sticky' );

			if ( ! instance ) {
				throw Error( 'Trying to perform the `' + settings + '` method prior to initialization' );
			}

			if ( ! instance[ settings ] ) {
				throw ReferenceError( 'Method `' + settings + '` not found in sticky instance' );
			}

			instance[ settings ].apply( instance, Array.prototype.slice.call( arguments, 1 ) );

			if ( 'destroy' === settings ) {
				$this.removeData( 'ekit_sticky' );
			}
		} );

		return this;
	};

	window.EkitSticky = EkitSticky;
} )( jQuery );
