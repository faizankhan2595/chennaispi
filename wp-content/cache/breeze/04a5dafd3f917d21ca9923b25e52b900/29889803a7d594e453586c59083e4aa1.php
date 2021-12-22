a:2:{s:4:"body";s:242115:"<!DOCTYPE html>
<html lang="en-US"
	prefix="og: https://ogp.me/ns#" >
<head><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>class RocketLazyLoadScripts{constructor(e){this.triggerEvents=e,this.eventOptions={passive:!0},this.userEventListener=this.triggerListener.bind(this),this.delayedScripts={normal:[],async:[],defer:[]},this.allJQueries=[]}_addUserInteractionListener(e){this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventListener,e.eventOptions)))}_removeUserInteractionListener(e){this.triggerEvents.forEach((t=>window.removeEventListener(t,e.userEventListener,e.eventOptions)))}triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}async _loadEverythingNow(){this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async),await this._triggerDOMContentLoaded(),await this._triggerWindowLoad(),window.dispatchEvent(new Event("rocket-allScriptsLoaded"))}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._requestAnimFrame(),new Promise((t=>{const n=document.createElement("script");let i;[...e.attributes].forEach((e=>{let t=e.nodeName;"type"!==t&&("data-rocket-type"===t&&(t="type",i=e.nodeValue),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")&&this._isValidScriptType(i)?(n.addEventListener("load",t),n.addEventListener("error",t)):(n.text=e.text,t()),e.parentNode.replaceChild(n,e)}))}_isValidScriptType(e){return!e||""===e||"string"==typeof e&&["text/javascript","text/x-javascript","text/ecmascript","text/jscript","application/javascript","application/x-javascript","application/ecmascript","application/jscript","module"].includes(e.toLowerCase())}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){var e=document.createDocumentFragment();[...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async].forEach((t=>{const n=t.getAttribute("src");if(n){const t=document.createElement("link");t.href=n,t.rel="preload",t.as="script",e.appendChild(t)}})),document.head.appendChild(e)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){const n=e[t];Object.defineProperty(e,t,{get:n||function(){},set:n=>{e["rocket"+t]=n}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._requestAnimFrame(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-load")),await this._requestAnimFrame(),window.rocketonload&&window.rocketonload(),await this._requestAnimFrame(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),window.dispatchEvent(new Event("rocket-pageshow")),await this._requestAnimFrame(),window.rocketonpageshow&&window.rocketonpageshow()}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,i=document.createRange(),r=n.parentElement;let a=e.get(n);void 0===a&&(a=n.nextSibling,e.set(n,a));const o=document.createDocumentFragment();i.setStart(o,0),o.appendChild(i.createContextualFragment(t)),r.insertBefore(o,a)}}async _requestAnimFrame(){return new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts(["keydown","mousemove","touchmove","touchstart","touchend","touchcancel","touchforcechange","wheel"]);e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <title>Best Orthopaedic Spine Surgeon &amp; Neuro Specialist Doctor in Chennai</title><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3Aregular%2C400%2C700%2C900%7CExo%3A700%2C400%2C900%7CRoboto%3A400%2C500%2C700%7CExo%3A300%2C300i%2C400%2C700%2C700i%2C900%7CExo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPlayfair%20Display%3A700%2C700italic%7CRoboto%3A400%7CExo%3A700%2C500&#038;display=swap" /><link rel="stylesheet" href="https://www.chennaispinecare.com/wp-content/cache/min/1/a7a76a145aac5eaf15740bd8d75f85ac.css" media="all" data-minify="1" />

		<!-- All in One SEO 4.1.3.3 -->
		<meta name="description" content="Dr Vignesh Pushparaj is one of the Best Consultant Orthopaedic Spine Surgeons &amp; Neuro Specialist Doctor at Annaamalai Ortho in Chennai. He is an Expert in Key Hole Spine Fracture Surgery, Scoliosis Correction, Spine Tumour."/>
		<link rel="canonical" href="https://www.chennaispinecare.com/" />
		<meta property="og:site_name" content="Chennai Spine Care - Chennai Spine Care" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Best Orthopaedic Spine Surgeon &amp; Neuro Specialist Doctor in Chennai" />
		<meta property="og:description" content="Dr Vignesh Pushparaj is one of the Best Consultant Orthopaedic Spine Surgeons &amp; Neuro Specialist Doctor at Annaamalai Ortho in Chennai. He is an Expert in Key Hole Spine Fracture Surgery, Scoliosis Correction, Spine Tumour." />
		<meta property="og:url" content="https://www.chennaispinecare.com/" />
		<meta property="article:published_time" content="2019-08-20T08:31:33Z" />
		<meta property="article:modified_time" content="2021-09-07T11:16:39Z" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:domain" content="www.chennaispinecare.com" />
		<meta name="twitter:title" content="Best Orthopaedic Spine Surgeon &amp; Neuro Specialist Doctor in Chennai" />
		<meta name="twitter:description" content="Dr Vignesh Pushparaj is one of the Best Consultant Orthopaedic Spine Surgeons &amp; Neuro Specialist Doctor at Annaamalai Ortho in Chennai. He is an Expert in Key Hole Spine Fracture Surgery, Scoliosis Correction, Spine Tumour." />
		<script type="application/ld+json" class="aioseo-schema">
			{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebSite","@id":"https:\/\/www.chennaispinecare.com\/#website","url":"https:\/\/www.chennaispinecare.com\/","name":"Chennai Spine Care","description":"Chennai Spine Care","publisher":{"@id":"https:\/\/www.chennaispinecare.com\/#organization"},"potentialAction":{"@type":"SearchAction","target":"https:\/\/www.chennaispinecare.com\/?s={search_term_string}","query-input":"required name=search_term_string"}},{"@type":"Organization","@id":"https:\/\/www.chennaispinecare.com\/#organization","name":"Chennai Spine Care","url":"https:\/\/www.chennaispinecare.com\/","logo":{"@type":"ImageObject","@id":"https:\/\/www.chennaispinecare.com\/#organizationLogo","url":"https:\/\/www.chennaispinecare.com\/wp-content\/uploads\/2021\/07\/annamalai-logo.png","width":"250","height":"150"},"image":{"@id":"https:\/\/www.chennaispinecare.com\/#organizationLogo"},"contactPoint":{"@type":"ContactPoint","telephone":"+919150955655","contactType":"Customer Support"}},{"@type":"BreadcrumbList","@id":"https:\/\/www.chennaispinecare.com\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/www.chennaispinecare.com\/#listItem","position":"1","item":{"@type":"WebPage","@id":"https:\/\/www.chennaispinecare.com\/","name":"Home","description":"Dr Vignesh Pushparaj is one of the Best Consultant Orthopaedic Spine Surgeons & Neuro Specialist Doctor at Annaamalai Ortho in Chennai. He is an Expert in Key Hole Spine Fracture Surgery, Scoliosis Correction, Spine Tumour.","url":"https:\/\/www.chennaispinecare.com\/"}}]},{"@type":"WebPage","@id":"https:\/\/www.chennaispinecare.com\/#webpage","url":"https:\/\/www.chennaispinecare.com\/","name":"Best Orthopaedic Spine Surgeon & Neuro Specialist Doctor in Chennai","description":"Dr Vignesh Pushparaj is one of the Best Consultant Orthopaedic Spine Surgeons & Neuro Specialist Doctor at Annaamalai Ortho in Chennai. He is an Expert in Key Hole Spine Fracture Surgery, Scoliosis Correction, Spine Tumour.","inLanguage":"en-US","isPartOf":{"@id":"https:\/\/www.chennaispinecare.com\/#website"},"breadcrumb":{"@id":"https:\/\/www.chennaispinecare.com\/#breadcrumblist"},"datePublished":"2019-08-20T08:31:33+00:00","dateModified":"2021-09-07T11:16:39+00:00"}]}
		</script>
		<!-- All in One SEO -->

<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
<link rel="alternate" type="application/rss+xml" title="Chennai Spine Care &raquo; Feed" href="https://www.chennaispinecare.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Chennai Spine Care &raquo; Comments Feed" href="https://www.chennaispinecare.com/comments/feed/" />
		<!-- This site uses the Google Analytics by MonsterInsights plugin v7.18.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
		<!-- Note: MonsterInsights is not currently configured on this site. The site owner needs to authenticate with Google Analytics in the MonsterInsights settings panel. -->
					<!-- No UA code set -->
				<!-- / Google Analytics by MonsterInsights -->
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	
<style id='wp-block-library-theme-inline-css' type='text/css'>
#start-resizable-editor-section{display:none}.wp-block-audio figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-audio figcaption{color:hsla(0,0%,100%,.65)}.wp-block-code{font-family:Menlo,Consolas,monaco,monospace;color:#1e1e1e;padding:.8em 1em;border:1px solid #ddd;border-radius:4px}.wp-block-embed figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-embed figcaption{color:hsla(0,0%,100%,.65)}.blocks-gallery-caption{color:#555;font-size:13px;text-align:center}.is-dark-theme .blocks-gallery-caption{color:hsla(0,0%,100%,.65)}.wp-block-image figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-image figcaption{color:hsla(0,0%,100%,.65)}.wp-block-pullquote{border-top:4px solid;border-bottom:4px solid;margin-bottom:1.75em;color:currentColor}.wp-block-pullquote__citation,.wp-block-pullquote cite,.wp-block-pullquote footer{color:currentColor;text-transform:uppercase;font-size:.8125em;font-style:normal}.wp-block-quote{border-left:.25em solid;margin:0 0 1.75em;padding-left:1em}.wp-block-quote cite,.wp-block-quote footer{color:currentColor;font-size:.8125em;position:relative;font-style:normal}.wp-block-quote.has-text-align-right{border-left:none;border-right:.25em solid;padding-left:0;padding-right:1em}.wp-block-quote.has-text-align-center{border:none;padding-left:0}.wp-block-quote.is-large,.wp-block-quote.is-style-large{border:none}.wp-block-search .wp-block-search__label{font-weight:700}.wp-block-group.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}.wp-block-separator{border:none;border-bottom:2px solid;margin-left:auto;margin-right:auto;opacity:.4}.wp-block-separator:not(.is-style-wide):not(.is-style-dots){width:100px}.wp-block-separator.has-background:not(.is-style-dots){border-bottom:none;height:1px}.wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots){height:2px}.wp-block-table thead{border-bottom:3px solid}.wp-block-table tfoot{border-top:3px solid}.wp-block-table td,.wp-block-table th{padding:.5em;border:1px solid;word-break:normal}.wp-block-table figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-table figcaption{color:hsla(0,0%,100%,.65)}.wp-block-video figcaption{color:#555;font-size:13px;text-align:center}.is-dark-theme .wp-block-video figcaption{color:hsla(0,0%,100%,.65)}.wp-block-template-part.has-background{padding:1.25em 2.375em;margin-top:0;margin-bottom:0}#end-resizable-editor-section{display:none}
</style>




<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>

<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='https://www.chennaispinecare.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=5.6.0' type='text/css' media='only screen and (max-width: 768px)' />

<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>




<style id='elementor-frontend-inline-css' type='text/css'>
@font-face{font-family:eicons;src:url(https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);src:url(https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"),url(https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"),url(https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"),url(https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"),url(https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");font-weight:400;font-style:normal}
</style>
















<style id='medizco-master-inline-css' type='text/css'>

        body{ font-family:"Roboto";font-size:15px;font-weight:400; }

        h1,h2{
            font-family:"Exo";font-weight:700;
        }
        h3{
            font-family:"Exo";font-weight:700;
        }

        h4{
            font-family:"Exo";font-weight:700;
        }
            .footer_copyright {
                background: ;
                background: #474747;
            }
</style>



<style id='rocket-lazyload-inline-css' type='text/css'>
.rll-youtube-player{position:relative;padding-bottom:56.23%;height:0;overflow:hidden;max-width:100%;}.rll-youtube-player iframe{position:absolute;top:0;left:0;width:100%;height:100%;z-index:100;background:0 0}.rll-youtube-player img{bottom:0;display:block;left:0;margin:auto;max-width:100%;width:100%;position:absolute;right:0;top:0;border:none;height:auto;cursor:pointer;-webkit-transition:.4s all;-moz-transition:.4s all;transition:.4s all}.rll-youtube-player img:hover{-webkit-filter:brightness(75%)}.rll-youtube-player .play{height:72px;width:72px;left:50%;top:50%;margin-left:-36px;margin-top:-36px;position:absolute;background:url(https://www.chennaispinecare.com/wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat;cursor:pointer}
</style>



<script type='text/javascript' src='https://www.chennaispinecare.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.3.5' id='tp-tools-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.3.5' id='revmin-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js?ver=3.4.3' id='font-awesome-4-shim-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/medizco-essential/modules/parallax/assets/js/jarallax.js?ver=1.0.2' id='jarallax-js' defer></script>
<link rel="https://api.w.org/" href="https://www.chennaispinecare.com/wp-json/" /><link rel="alternate" type="application/json" href="https://www.chennaispinecare.com/wp-json/wp/v2/pages/2" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.chennaispinecare.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.chennaispinecare.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.8.1" />
<meta name="generator" content="WooCommerce 5.6.0" />
<link rel='shortlink' href='https://www.chennaispinecare.com/' />
<noscript><style type="text/css">.mptt-shortcode-wrapper .mptt-shortcode-table:first-of-type{display:table!important}.mptt-shortcode-wrapper .mptt-shortcode-table .mptt-event-container:hover{height:auto!important;min-height:100%!important}body.mprm_ie_browser .mptt-shortcode-wrapper .mptt-event-container{height:auto!important}@media (max-width:767px){.mptt-shortcode-wrapper .mptt-shortcode-table:first-of-type{display:none!important}}</style></noscript>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	
			<script type="text/javascript">
				var elementskit_section_parallax_data = {};
				var elementskit_module_parallax_url = "https://www.chennaispinecare.com/wp-content/plugins/medizco-essential/modules/parallax/"
			</script>
		<meta name="generator" content="Powered by Slider Revolution 6.3.5 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="https://www.chennaispinecare.com/wp-content/uploads/2021/07/Annaamalai-ortho-and-spine-center--150x60.png" sizes="32x32" />
<link rel="icon" href="https://www.chennaispinecare.com/wp-content/uploads/2021/07/Annaamalai-ortho-and-spine-center-.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://www.chennaispinecare.com/wp-content/uploads/2021/07/Annaamalai-ortho-and-spine-center-.png" />
<meta name="msapplication-TileImage" content="https://www.chennaispinecare.com/wp-content/uploads/2021/07/Annaamalai-ortho-and-spine-center-.png" />
<script type="rocketlazyloadscript" data-rocket-type="text/javascript">function setREVStartSize(e){
			//window.requestAnimationFrame(function() {				 
				window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;	
				window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;	
				try {								
					var pw = document.getElementById(e.c).parentNode.offsetWidth,
						newh;
					pw = pw===0 || isNaN(pw) ? window.RSIW : pw;
					e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
					e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
					e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
					e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
					e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
					e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
					e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
					if(e.layout==="fullscreen" || e.l==="fullscreen") 						
						newh = Math.max(e.mh,window.RSIH);					
					else{					
						e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
						for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
						e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
						e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
						for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
											
						var nl = new Array(e.rl.length),
							ix = 0,						
							sl;					
						e.tabw = e.tabhide>=pw ? 0 : e.tabw;
						e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
						e.tabh = e.tabhide>=pw ? 0 : e.tabh;
						e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
						for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
						sl = nl[0];									
						for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
						var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					
						newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
					}				
					if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
					document.getElementById(e.c).height = newh+"px";
					window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
				} catch(e){
					console.log("Failure at Presize of Slider:" + e)
				}					   
			//});
		  };</script>
		<style type="text/css" id="wp-custom-css">
			
.xs_overflow {
	overflow: hidden !important;
}		</style>
		<noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript>	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="rocketlazyloadscript" async src="https://www.googletagmanager.com/gtag/js?id=UA-207305029-1"></script>
<script type="rocketlazyloadscript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-207305029-1');
</script>
	
	
</head>
<body class="home page-template page-template-template page-template-template-home page-template-templatetemplate-home-php page page-id-2 theme-medizco woocommerce-no-js ehf-footer ehf-template-medizco ehf-stylesheet-medizco sidebar-inactive elementor-default elementor-kit-4824 elementor-page elementor-page-2">

    		<div data-elementor-type="wp-post" data-elementor-id="8" class="elementor elementor-8" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-2774ad2 elementor-section-content-middle medizco_topbar elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2774ad2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3383a13" data-id="3383a13" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-8723ae7 elementor-icon-list--layout-inline elementor-align-left mr-auto elementor-widget__width-auto elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="8723ae7" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items elementor-inline-items">
							<li class="elementor-icon-list-item elementor-inline-item">
											<a href="tel:+919150955655">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-phone-alt"></i>						</span>
										<span class="elementor-icon-list-text">Phone: (+91)9150-955-655</span>
											</a>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="far fa-clock"></i>						</span>
										<span class="elementor-icon-list-text">Mon-Sat (2pm - 8pm)</span>
									</li>
								<li class="elementor-icon-list-item elementor-inline-item">
											<a href="mailto:vigneshpushparaj@hotmail.com">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="far fa-envelope"></i>						</span>
										<span class="elementor-icon-list-text">vigneshpushparaj@hotmail.com</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-d482852 elementor-widget__width-auto ekit-off-canvas-position-right elementor-widget elementor-widget-elementskit-header-offcanvas" data-id="d482852" data-element_type="widget" data-widget_type="elementskit-header-offcanvas.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <div class="ekit-offcanvas-toggle-wraper">
            <a href="#" class="ekit_navSidebar-button ekit_offcanvas-sidebar">
                <i aria-hidden="true" class="fasicon icon-menu-7"></i>            </a>
        </div>
        <!-- offset cart strart -->
        <!-- sidebar cart item -->
        <div class="ekit-sidebar-group info-group">
            <div class="ekit-overlay ekit-bg-black"></div>
            <div class="ekit-sidebar-widget">
                <div class="ekit_sidebar-widget-container">
                    <div class="ekit_widget-heading">
                        <a href="#" class="ekit_close-side-widget">

                            <i aria-hidden="true" class="fasicon icon-cross"></i>
                        </a>
                    </div>
                    <div class="ekit_sidebar-textwidget">
                        
		<div class="widgetarea_warper widgetarea_warper_editable" data-elementskit-widgetarea-key="d482852"  data-elementskit-widgetarea-index="99">
			<div class="widgetarea_warper_edit" data-elementskit-widgetarea-key="d482852" data-elementskit-widgetarea-index="99">
				<i class="eicon-edit" aria-hidden="true"></i>
				<span class="elementor-screen-only">Edit</span>
			</div>

			<div class="elementor-widget-container">
						<div data-elementor-type="wp-post" data-elementor-id="212" class="elementor elementor-212" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-478a8ae elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="478a8ae" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0c54af2" data-id="0c54af2" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-cf2f730 elementor-widget elementor-widget-image" data-id="cf2f730" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
													<a href="https://www.chennaispinecare.com/">
							<img width="150" height="60" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%2060'%3E%3C/svg%3E" title="Annaamalai ortho and spine center" alt="Annaamalai ortho and spine center" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/elementor/thumbs/Annaamalai-ortho-and-spine-center-pdhea9gvc3g5mkvbk7etyr0yplnh1ixrdkyz1iiifs.png" /><noscript><img width="150" height="60" src="https://www.chennaispinecare.com/wp-content/uploads/elementor/thumbs/Annaamalai-ortho-and-spine-center-pdhea9gvc3g5mkvbk7etyr0yplnh1ixrdkyz1iiifs.png" title="Annaamalai ortho and spine center" alt="Annaamalai ortho and spine center" /></noscript>								</a>
														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-4568037 elementor-widget elementor-widget-heading" data-id="4568037" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">About Dr Vignesh Pushparaj</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-e2236e0 elementor-widget elementor-widget-text-editor" data-id="e2236e0" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>About Dr Vignesh Pushparaj an expert in key hole spine surgery (MIS), scoliosis Correction (Spine deformity / Hunch back) and Spine Oncology (Spine tumour / Vertebral body tumours &amp; Intradural tumours)</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-774daf5 elementor-widget elementor-widget-elementskit-button" data-id="774daf5" data-element_type="widget" data-widget_type="elementskit-button.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >		<div class="ekit-btn-wraper">
							<a href="https://www.chennaispinecare.com/contact/" class="elementskit-btn  whitespace--normal" >
					
					
					Consultation				</a>
						</div>
        </div>		</div>
				</div>
				<div class="elementor-element elementor-element-adcb817 elementor-widget elementor-widget-heading" data-id="adcb817" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Contact Info</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-be2e17b elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="be2e17b" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-map-marked-alt"></i>						</span>
										<span class="elementor-icon-list-text">Vignesh pushparaj Annaamalai orthopaedic and spine centre,  No 15-A, kottivakkam kuppam road, valmiki Nagar, Thiruvanmiyur, chennai 600041</span>
									</li>
								<li class="elementor-icon-list-item">
											<a href="tel:+919150955655">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-phone-alt"></i>						</span>
										<span class="elementor-icon-list-text">+91 9150955655</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="mailto:vp87796@gmail.com">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="far fa-envelope"></i>						</span>
										<span class="elementor-icon-list-text">vigneshpushparaj@hotmail.com</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="far fa-clock"></i>						</span>
										<span class="elementor-icon-list-text">Everyday: 2pm to 8pm</span>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-d834e99 elementor-widget elementor-widget-elementskit-social-media" data-id="d834e99" data-element_type="widget" data-widget_type="elementskit-social-media.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >			 <ul class="ekit_social_media">
														<li class="elementor-repeater-item-bb0a9dd">
					    <a
						href="https://facebook.com" target="_blank" class="facebook" >
														
							<i aria-hidden="true" class="fasicon icon-facebook"></i>									
                                                                                                            </a>
                    </li>
                    														<li class="elementor-repeater-item-525770f">
					    <a
						href="https://facebook.com" target="_blank" class="twitter" >
														
							<i aria-hidden="true" class="fasicon icon-twitter"></i>									
                                                                                                            </a>
                    </li>
                    														<li class="elementor-repeater-item-3b5b739">
					    <a
						href="https://facebook.com" target="_blank" class="linkedin" >
														
							<i aria-hidden="true" class="fasicon icon-linkedin"></i>									
                                                                                                            </a>
                    </li>
                    														<li class="elementor-repeater-item-f3e4f69">
					    <a
						href="https://facebook.com" target="_blank" class="instagram1" >
														
							<i aria-hidden="true" class="fasicon icon-instagram1"></i>									
                                                                                                            </a>
                    </li>
                    														<li class="elementor-repeater-item-0d29ad9">
					    <a
						href="https://facebook.com" target="_blank" class="youtube" >
														
							<i aria-hidden="true" class="fasicon icon-youtube"></i>									
                                                                                                            </a>
                    </li>
                    							</ul>
		</div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
						</div>
					</div>
					</div>
		</div>
		                    </div>
                </div>
            </div>
        </div> <!-- END sidebar widget item -->
        <!-- END offset cart strart -->
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2e7172a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2e7172a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-19431bd" data-id="19431bd" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-a28ce9b medizco_logo elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="a28ce9b" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
													<a href="https://www.chennaispinecare.com/">
							<img width="160" height="60" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2060'%3E%3C/svg%3E" title="Annaamalai ortho and spine center" alt="Annaamalai ortho and spine center" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/elementor/thumbs/Annaamalai-ortho-and-spine-center-pdhea9gvghbqqpy9khmpbnbsry87s427pevpgcwqjc.png" /><noscript><img width="160" height="60" src="https://www.chennaispinecare.com/wp-content/uploads/elementor/thumbs/Annaamalai-ortho-and-spine-center-pdhea9gvghbqqpy9khmpbnbsry87s427pevpgcwqjc.png" title="Annaamalai ortho and spine center" alt="Annaamalai ortho and spine center" /></noscript>								</a>
														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-a5e4003 elementor-widget__width-auto medizco_nav tab_ml_auto elementor-widget elementor-widget-ekit-nav-menu" data-id="a5e4003" data-element_type="widget" data-widget_type="ekit-nav-menu.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon="" data-hamburger-icon-type="icon" data-responsive-breakpoint="1024">            <button class="elementskit-menu-hamburger elementskit-menu-toggler">
                                    <span class="elementskit-menu-hamburger-icon"></span><span class="elementskit-menu-hamburger-icon"></span><span class="elementskit-menu-hamburger-icon"></span>
                            </button>
            <div id="ekit-megamenu-menu-style-1" class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_plus_icon ekit-nav-menu-one-page-no"><ul id="menu-menu-style-1" class="elementskit-navbar-nav elementskit-menu-po-left submenu-click-on-icon"><li id="menu-item-174" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-174 nav-item elementskit-mobile-builder-content active" data-vertical-menu=750px><a href="https://www.chennaispinecare.com/" class="ekit-menu-nav-link active">Home</a></li>
<li id="menu-item-5591" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5591 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="https://www.chennaispinecare.com/about-dr-vignesh-pushparaj/" class="ekit-menu-nav-link">About</a></li>
<li id="menu-item-6174" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6174 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content" data-vertical-menu=750px><a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle">Services<i class="icon icon-down-arrow1 elementskit-submenu-indicator"></i></a>
<ul class="elementskit-dropdown elementskit-submenu-panel">
	<li id="menu-item-6613" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6613 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a target="_blank" href="https://www.chennaispinecare.com/service/back-and-neck-pain-management/" class=" dropdown-item">Back and Neck Pain Surgery</a>	<li id="menu-item-6614" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6614 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a target="_blank" href="https://www.chennaispinecare.com/service/cervical-spondylosis/" class=" dropdown-item">Cervical Surgery</a>	<li id="menu-item-6615" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6615 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a target="_blank" href="https://www.chennaispinecare.com/service/chronic-pain-management/" class=" dropdown-item">Chronic Pain Surgery</a>	<li id="menu-item-6616" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6616 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a target="_blank" href="https://www.chennaispinecare.com/service/spine-fracture-management/" class=" dropdown-item">Spine Fractures Surgery</a>	<li id="menu-item-6617" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6617 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a target="_blank" href="https://www.chennaispinecare.com/service/microlumbar-disccectomy-tubular-disccectomy/" class=" dropdown-item">Microlumbar/Tubular Disccectomy</a>	<li id="menu-item-6618" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6618 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a target="_blank" href="https://www.chennaispinecare.com/service/injection-procedures-in-spine/" class=" dropdown-item">Spine Injections Procedures</a>	<li id="menu-item-6619" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6619 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a target="_blank" href="https://www.chennaispinecare.com/service/osteoporotic-spine-fracture-management/" class=" dropdown-item">Osteoporotic Spine Fracture Surgery</a>	<li id="menu-item-6620" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6620 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a target="_blank" href="https://www.chennaispinecare.com/service/minimal-invasive-spine-surgery/" class=" dropdown-item">Minimal Invasive Spine Surgery</a>	<li id="menu-item-6621" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6621 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a target="_blank" href="https://www.chennaispinecare.com/service/scoliosis-spine-deformity-correction/" class=" dropdown-item">Scoliosis Correction Surgery</a>	<li id="menu-item-6622" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6622 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a target="_blank" href="https://www.chennaispinecare.com/service/spine-tumour-surgeries/" class=" dropdown-item">Spine Tumour Surgery</a></ul>
</li>
<li id="menu-item-6904" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6904 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content" data-vertical-menu=750px><a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle">Media<i class="icon icon-down-arrow1 elementskit-submenu-indicator"></i></a>
<ul class="elementskit-dropdown elementskit-submenu-panel">
	<li id="menu-item-6863" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6863 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="https://www.chennaispinecare.com/media/" class=" dropdown-item">News Media</a>	<li id="menu-item-6900" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6900 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="https://www.chennaispinecare.com/videos-interviews/" class=" dropdown-item">Videos &#038; Interviews</a></ul>
</li>
<li id="menu-item-4610" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4610 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="https://www.chennaispinecare.com/blog/" class="ekit-menu-nav-link">Blog</a></li>
<li id="menu-item-5524" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5524 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="https://www.chennaispinecare.com/contact/" class="ekit-menu-nav-link">Contact</a></li>
</ul>
				<div class="elementskit-nav-identity-panel">
					<div class="elementskit-site-title">
						<a class="elementskit-nav-logo" href="https://www.chennaispinecare.com" target="_self" rel="">
                            <img width="160" height="60" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2060'%3E%3C/svg%3E" class="attachment-full size-full" alt="Annaamalai ortho and spine center" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2019/08/Annaamalai-ortho-and-spine-center.png" /><noscript><img width="160" height="60" src="https://www.chennaispinecare.com/wp-content/uploads/2019/08/Annaamalai-ortho-and-spine-center.png" class="attachment-full size-full" alt="Annaamalai ortho and spine center" /></noscript>
						</a> 
					</div>
					<button class="elementskit-menu-close elementskit-menu-toggler" type="button">X</button>
				</div>
			</div><div class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay"></div></div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
						</div>
					</div>
		
<div id="post-2" class="home-page-contents post-2 page type-page status-publish hentry" role="main">
  <div class="builder-content">
    		<div data-elementor-type="wp-post" data-elementor-id="2" class="elementor elementor-2" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-151ff71 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="151ff71" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0004291" data-id="0004291" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-b489bf4 elementor-widget elementor-widget-slider_revolution" data-id="b489bf4" data-element_type="widget" data-widget_type="slider_revolution.default">
				<div class="elementor-widget-container">
			
		<div class="wp-block-themepunch-revslider">
			<!-- START Home Slider 011 REVOLUTION SLIDER 6.3.5 --><p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_8_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:none;">
				<rs-module id="rev_slider_8_1" style="" data-version="6.3.5">
					<rs-slides>
						<rs-slide data-key="rs-22" data-title="Slide" data-thumb="//www.chennaispinecare.com/wp-content/uploads/2019/09/banner-slide-1-bg-100x50.jpg" data-anim="ei:d;eo:d;s:d;r:default;t:curtain-1;sl:d;">
							<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201600%20750'%3E%3C/svg%3E" title="banner-slide-1-bg" width="1600" height="750" class="rev-slidebg" data-no-retina data-lazy-src="//www.chennaispinecare.com/wp-content/uploads/2019/09/banner-slide-1-bg.jpg"><noscript><img src="//www.chennaispinecare.com/wp-content/uploads/2019/09/banner-slide-1-bg.jpg" title="banner-slide-1-bg" width="1600" height="750" class="rev-slidebg" data-no-retina></noscript>
<!--
							--><rs-layer
								id="slider-8-slide-22-layer-4" 
								class="banner_caption_text"
								data-type="text"
								data-rsp_ch="on"
								data-xy="x:l,l,c,c;xo:50px,50px,0,0;y:m,m,t,t;yo:-203px,-203px,83px,83px;"
								data-text="s:26;l:24;fw:700;a:inherit;td:underline;"
								data-frame_0="o:1;"
								data-frame_0_chars="d:5;x:50px;o:0;"
								data-frame_1="e:power4.inOut;sp:1970;sR:10;"
								data-frame_1_chars="d:5;"
								data-frame_999="o:0;st:w;sR:6570;"
								style="z-index:12;font-family:Playfair Display;font-style:italic;"
							>Spine Care Specialist 
							</rs-layer><!--

							--><p
								id="slider-8-slide-22-layer-9" 
								class="rs-layer"
								data-type="text"
								data-rsp_ch="on"
								data-xy="x:l,l,c,c;xo:53px,53px,0,1px;y:t,t,t,m;yo:350px,350px,255px,24px;"
								data-text="w:normal;s:17,17,16,17;l:27,27,27,22;a:inherit,inherit,center,center;"
								data-dim="w:50%,50%,587px,443px;"
								data-padding="r:0,0,0,15;"
								data-frame_0="x:left;o:1;"
								data-frame_1="e:power4.out;st:1720;sp:1600;sR:1720;"
								data-frame_999="o:0;st:w;sR:5680;"
								style="z-index:9;font-family:Roboto;"
							><b>Consultant Orthopaedic Spine Surgeon, Chennai, Tamil Nadu</b><br />
He is an expert in key hole spine surgery (MIS), scoliosis Correction (Spine deformity / Hunch back) and Spine Oncology (Spine tumour / Vertebral body tumours & Intradural tumours)<br />
<br />
. 
							</p><!--

							--><a
								id="slider-8-slide-22-layer-10" 
								class="rs-layer banner-btn rev-btn"
								href="https://www.chennaispinecare.com/contact/" target="_self"
								data-type="button"
								data-color="rgba(255,255,255,1)"
								data-xy="x:l,l,c,c;xo:39px,39px,0,0;yo:476px,476px,391px,350px;"
								data-text="w:normal,normal,normal,nowrap;s:14,14,14,12;l:24,24,24,26;fw:700,700,700,500;a:inherit;"
								data-rsp_bd="off"
								data-padding="t:18,18,18,10;r:53,53,53,30;b:18,18,18,10;l:53,53,53,30;"
								data-border="bor:30px,30px,30px,30px;"
								data-frame_0="x:left;o:1;"
								data-frame_1="st:2200;sp:1160;sR:2200;"
								data-frame_999="o:0;st:w;sR:5640;"
								data-frame_hover="bgc:#1cba9f;boc:#000;bor:30px,30px,30px,30px;bos:solid;oX:50;oY:50;sp:200ms;e:power3.out;"
								style="z-index:10;background-color:#223a66;font-family:Exo;cursor:pointer;"
							>Book Now <i class="fa-angle-right"></i> 
							</a><!--

							--><rs-layer
								id="slider-8-slide-22-layer-12" 
								data-type="text"
								data-rsp_ch="on"
								data-xy="x:l,l,c,c;xo:48px,48px,0,0;yo:197px,197px,134px,118px;"
								data-text="w:normal;s:54,54,34,34;l:64,64,44,44;fw:700;a:inherit,inherit,center,center;"
								data-dim="w:50%,50%,50%,412px;"
								data-frame_0="o:1;"
								data-frame_0_chars="d:5;x:50px;o:0;"
								data-frame_1="e:power4.inOut;sp:1970;sR:10;"
								data-frame_1_chars="d:5;"
								data-frame_999="o:0;st:w;sR:5420;"
								style="z-index:11;font-family:Exo;"
							>Dr Vignesh Pushparaj<br />
 
							</rs-layer><!--

							--><rs-layer
								id="slider-8-slide-22-layer-14" 
								class="banner_img"
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:r,r,c,c;xo:-70px,-70px,0,0;y:b;"
								data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
								data-dim="w:auto,auto,50%,300px;h:auto,auto,auto,341px;"
								data-vbility="t,t,t,f"
								data-frame_1="st:890;sp:1200;sR:890;"
								data-frame_999="o:0;st:w;sR:6910;"
								style="z-index:8;"
							><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20608%20750'%3E%3C/svg%3E" alt="dr-vignesh spine specialist" width="608" height="750" data-no-retina data-lazy-src="//www.chennaispinecare.com/wp-content/uploads/2021/08/dr-vignesh-chennai.png"><noscript><img src="//www.chennaispinecare.com/wp-content/uploads/2021/08/dr-vignesh-chennai.png" alt="dr-vignesh spine specialist" width="608" height="750" data-no-retina></noscript> 
							</rs-layer><!--
-->						</rs-slide>
						<rs-slide data-key="rs-23" data-title="Slide" data-thumb="//www.chennaispinecare.com/wp-content/uploads/2019/09/banner-slide-1-bg-100x50.jpg" data-anim="ei:d;eo:d;s:d;r:default;t:fadefromtop;sl:d;">
							<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201600%20750'%3E%3C/svg%3E" title="banner-slide-1-bg" width="1600" height="750" class="rev-slidebg" data-no-retina data-lazy-src="//www.chennaispinecare.com/wp-content/uploads/2019/09/banner-slide-1-bg.jpg"><noscript><img src="//www.chennaispinecare.com/wp-content/uploads/2019/09/banner-slide-1-bg.jpg" title="banner-slide-1-bg" width="1600" height="750" class="rev-slidebg" data-no-retina></noscript>
<!--
							--><rs-layer
								id="slider-8-slide-23-layer-4" 
								class="banner_caption_text"
								data-type="text"
								data-rsp_ch="on"
								data-xy="x:l,l,c,c;xo:50px,50px,0,0;y:m,m,t,t;yo:-173px,-173px,83px,83px;"
								data-text="s:26;l:24;fw:700;a:inherit;td:underline;"
								data-frame_0="o:1;"
								data-frame_0_chars="d:5;x:50px;o:0;"
								data-frame_1="e:power4.inOut;sp:1970;sR:10;"
								data-frame_1_chars="d:5;"
								data-frame_999="o:0;st:w;sR:6570;"
								style="z-index:12;font-family:Playfair Display;font-style:italic;"
							>Spine Care 
							</rs-layer><!--

							--><p
								id="slider-8-slide-23-layer-9" 
								class="rs-layer"
								data-type="text"
								data-rsp_ch="on"
								data-xy="x:l,l,c,l;xo:50px,50px,0,20px;y:t,t,t,m;yo:383px,383px,255px,24px;"
								data-text="w:normal;s:17,17,16,16;l:27,27,27,22;a:inherit,inherit,center,center;"
								data-dim="w:50%,50%,495px,425px;"
								data-padding="r:0,0,0,15;"
								data-frame_0="x:left;o:1;"
								data-frame_1="e:power4.out;st:1720;sp:1600;sR:1720;"
								data-frame_999="o:0;st:w;sR:5680;"
								style="z-index:9;font-family:Roboto;"
							><b>Consultant Orthopaedic Spine Surgeon, Chennai, Tamil Nadu</b><br />
Ours’s is a multidisciplinary team approach that offers a holistic approach to the management of spinal problems.<br />
<br />
 
							</p><!--

							--><a
								id="slider-8-slide-23-layer-10" 
								class="rs-layer banner-btn rev-btn"
								href="https://www.chennaispinecare.com/contact/" target="_self"
								data-type="button"
								data-color="rgba(255,255,255,1)"
								data-xy="x:l,l,c,c;xo:50px,50px,0,0;yo:496px,496px,391px,350px;"
								data-text="w:normal,normal,normal,nowrap;s:14,14,14,12;l:24,24,24,26;fw:700,700,700,500;a:inherit;"
								data-rsp_bd="off"
								data-padding="t:18,18,18,10;r:53,53,53,30;b:18,18,18,10;l:53,53,53,30;"
								data-border="bor:30px,30px,30px,30px;"
								data-frame_0="x:left;o:1;"
								data-frame_1="st:2200;sp:1160;sR:2200;"
								data-frame_999="o:0;st:w;sR:5640;"
								data-frame_hover="bgc:#1cba9f;boc:#000;bor:30px,30px,30px,30px;bos:solid;oX:50;oY:50;sp:200ms;e:power3.out;"
								style="z-index:10;background-color:#223a66;font-family:Exo;cursor:pointer;"
							>Book Now <i class="fa-angle-right"></i> 
							</a><!--

							--><rs-layer
								id="slider-8-slide-23-layer-12" 
								data-type="text"
								data-rsp_ch="on"
								data-xy="x:l,l,c,c;xo:50px,50px,0,-2px;yo:226px,226px,134px,118px;"
								data-text="w:normal;s:54,54,34,34;l:64,64,44,44;fw:700;a:inherit,inherit,center,center;"
								data-dim="w:630px,630px,561px,434px;"
								data-frame_0="o:1;"
								data-frame_0_chars="d:5;x:50px;o:0;"
								data-frame_1="e:power4.inOut;sp:1970;sR:10;"
								data-frame_1_chars="d:5;"
								data-frame_999="o:0;st:w;sR:5420;"
								style="z-index:11;font-family:Exo;"
							>Best Spine Surgeon In Chennai 
							</rs-layer><!--

							--><rs-layer
								id="slider-8-slide-23-layer-14" 
								class="banner_img"
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:r,r,c,c;xo:-80px,-80px,0,0;y:b;"
								data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
								data-dim="w:auto,auto,50%,50%;"
								data-vbility="t,t,t,f"
								data-frame_1="st:890;sp:1200;sR:890;"
								data-frame_999="o:0;st:w;sR:6910;"
								style="z-index:8;"
							><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20608%20750'%3E%3C/svg%3E" alt="dr-vignesh spine specialist" width="608" height="750" data-no-retina data-lazy-src="//www.chennaispinecare.com/wp-content/uploads/2021/08/dr-vignesh-chennai.png"><noscript><img src="//www.chennaispinecare.com/wp-content/uploads/2021/08/dr-vignesh-chennai.png" alt="dr-vignesh spine specialist" width="608" height="750" data-no-retina></noscript> 
							</rs-layer><!--
-->						</rs-slide>
						<rs-slide data-key="rs-24" data-title="Slide" data-thumb="//www.chennaispinecare.com/wp-content/uploads/2019/09/banner-slide-1-bg-100x50.jpg" data-anim="ei:d;eo:d;s:d;r:default;t:3dcurtain-horizontal;sl:d;">
							<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201600%20750'%3E%3C/svg%3E" title="banner-slide-1-bg" width="1600" height="750" class="rev-slidebg" data-no-retina data-lazy-src="//www.chennaispinecare.com/wp-content/uploads/2019/09/banner-slide-1-bg.jpg"><noscript><img src="//www.chennaispinecare.com/wp-content/uploads/2019/09/banner-slide-1-bg.jpg" title="banner-slide-1-bg" width="1600" height="750" class="rev-slidebg" data-no-retina></noscript>
<!--
							--><rs-layer
								id="slider-8-slide-24-layer-4" 
								class="banner_caption_text"
								data-type="text"
								data-rsp_ch="on"
								data-xy="x:l,l,c,c;xo:50px,50px,0,0;y:m,m,t,t;yo:-173px,-173px,83px,83px;"
								data-text="s:26;l:24;fw:700;a:inherit;td:underline;"
								data-frame_0="o:1;"
								data-frame_0_chars="d:5;x:50px;o:0;"
								data-frame_1="e:power4.inOut;sp:1970;sR:10;"
								data-frame_1_chars="d:5;"
								data-frame_999="o:0;st:w;sR:6570;"
								style="z-index:12;font-family:Playfair Display;font-style:italic;"
							> 
							</rs-layer><!--

							--><p
								id="slider-8-slide-24-layer-9" 
								class="rs-layer"
								data-type="text"
								data-rsp_ch="on"
								data-xy="x:l,l,c,c;xo:50px,50px,0,0;y:t,t,t,m;yo:383px,383px,255px,31px;"
								data-text="w:normal;s:17,17,17,16;l:27,27,27,22;a:inherit,inherit,center,center;"
								data-dim="w:50%,50%,553px,418px;"
								data-padding="r:0,0,0,15;"
								data-frame_0="x:left;o:1;"
								data-frame_1="e:power4.out;st:1720;sp:1600;sR:1720;"
								data-frame_999="o:0;st:w;sR:5680;"
								style="z-index:9;font-family:Roboto;"
							>Your wellness is our focus. We aim to provide safe, high-quality, cost-effective and state-of -the-art, operative and non-operative management for spinal disorders. 
							</p><!--

							--><a
								id="slider-8-slide-24-layer-10" 
								class="rs-layer banner-btn rev-btn"
								href="https://www.chennaispinecare.com/contact/" target="_self"
								data-type="button"
								data-color="rgba(255,255,255,1)"
								data-xy="x:l,l,c,c;xo:50px,50px,0,0;yo:496px,496px,391px,350px;"
								data-text="w:normal,normal,normal,nowrap;s:14,14,14,12;l:24,24,24,26;fw:700,700,700,500;a:inherit;"
								data-rsp_bd="off"
								data-padding="t:18,18,18,10;r:53,53,53,30;b:18,18,18,10;l:53,53,53,30;"
								data-border="bor:30px,30px,30px,30px;"
								data-frame_0="x:left;o:1;"
								data-frame_1="st:2200;sp:1160;sR:2200;"
								data-frame_999="o:0;st:w;sR:5640;"
								data-frame_hover="bgc:#1cba9f;boc:#000;bor:30px,30px,30px,30px;bos:solid;oX:50;oY:50;sp:200ms;e:power3.out;"
								style="z-index:10;background-color:#223a66;font-family:Exo;cursor:pointer;"
							>Book Now <i class="fa-angle-right"></i> 
							</a><!--

							--><rs-layer
								id="slider-8-slide-24-layer-12" 
								data-type="text"
								data-rsp_ch="on"
								data-xy="x:l,l,c,c;xo:50px,50px,0,0;yo:226px,226px,134px,118px;"
								data-text="w:normal;s:54,54,34,34;l:64,64,44,44;fw:700;a:inherit,inherit,center,center;"
								data-dim="w:50%,50%,514px,423px;"
								data-frame_0="o:1;"
								data-frame_0_chars="d:5;x:50px;o:0;"
								data-frame_1="e:power4.inOut;sp:1970;sR:10;"
								data-frame_1_chars="d:5;"
								data-frame_999="o:0;st:w;sR:5420;"
								style="z-index:11;font-family:Exo;"
							>Scoliosis & Disc Replacement Specialist 
							</rs-layer><!--

							--><rs-layer
								id="slider-8-slide-24-layer-14" 
								class="banner_img"
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:r,r,c,c;xo:-100px,-100px,0,0;y:b;"
								data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
								data-dim="w:auto,auto,50%,50%;"
								data-vbility="t,t,t,f"
								data-frame_1="st:890;sp:1200;sR:890;"
								data-frame_999="o:0;st:w;sR:6910;"
								style="z-index:8;"
							><img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20608%20750'%3E%3C/svg%3E" alt="dr-vignesh spine specialist" width="608" height="750" data-no-retina data-lazy-src="//www.chennaispinecare.com/wp-content/uploads/2021/08/dr-vignesh-chennai.png"><noscript><img src="//www.chennaispinecare.com/wp-content/uploads/2021/08/dr-vignesh-chennai.png" alt="dr-vignesh spine specialist" width="608" height="750" data-no-retina></noscript> 
							</rs-layer><!--
-->						</rs-slide>
					</rs-slides>
				</rs-module>
				<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
					setREVStartSize({c: 'rev_slider_8_1',rl:[1240,1240,778,480],el:[750,750,760,500],gw:[1240,1240,778,480],gh:[750,750,760,500],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
					var	revapi8,
						tpj;
					function revinit_revslider81() {
					jQuery(function() {
						tpj = jQuery;
						revapi8 = tpj("#rev_slider_8_1");
						if(revapi8==undefined || revapi8.revolution == undefined){
							revslider_showDoubleJqueryError("rev_slider_8_1");
						}else{
							revapi8.revolution({
								visibilityLevels:"1240,1240,778,480",
								gridwidth:"1240,1240,778,480",
								gridheight:"750,750,760,500",
								spinner:"spinner0",
								perspective:600,
								perspectiveType:"local",
								editorheight:"750,768,760,500",
								responsiveLevels:"1240,1240,778,480",
								progressBar:{disableProgressBar:true},
								navigation: {
									mouseScrollNavigation:false,
									wheelCallDelay:1000,
									onHoverStop:false,
									touch: {
										touchenabled:true,
										touchOnDesktop:true
									},
									arrows: {
										enable:true,
										style:"custom",
										left: {
											h_align:"right",
											h_offset:0,
											v_offset:-31
										},
										right: {
											h_offset:0,
											v_offset:31
										}
									}
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid:true
								},
							});
						}
						
					});
					} // End of RevInitScript
				var once_revslider81 = false;
				if (document.readyState === "loading") {document.addEventListener('readystatechange',function() { if((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider81 ) { once_revslider81 = true; revinit_revslider81();}});} else {once_revslider81 = true; revinit_revslider81();}
				</script>
				<script type="rocketlazyloadscript">
					var htmlDivCss = unescape(".banner_caption_text%20%3E%20.rs_splitted_lines%2C%0A.banner_caption_text%20%3E%20.rs_splitted_lines%20%3E%20.rs_splitted_words%2C%0A.banner_caption_text%20%3E%20.rs_splitted_lines%20%3E%20.rs_splitted_words%20%3E%20.rs_splitted_chars%20%7B%0A%20%20text-decoration%3A%20inherit%3B%0A%7D%0A%0A.banner-btn%20%3E%20i%5Bclass%5E%3D%22fa-%22%5D%20%7B%0A%20%20%20%20margin-left%3A%205px%3B%0A%20%20%20%20font-size%3A%2020px%3B%0A%20%20%20%20vertical-align%3A%20-2px%3B%0A%7D%0A%0A%40media%20%28min-width%3A%20778px%29%20and%20%28max-width%3A%201200px%29%20%7B%0A%20%20.banner_img%20img%20%7B%0A%20%20%20%20float%3A%20right%3B%0A%20%20%20%20max-width%3A%20480px%20%21important%3B%0A%20%20%7D%0A%7D%0A%40media%20%28max-width%3A%20777px%29%20%7B%0A%20%20.banner_img%20img%20%7B%0A%20%20%20%20display%3A%20block%3B%0A%20%20%20%20width%3A%2050%25%20%21important%3B%0A%20%20%20%20margin-left%3A%20auto%3B%0A%20%20%20%20margin-right%3A%20auto%3B%0A%20%20%7D%0A%7D%0A%0A.tparrows.custom%20%7B%0A%20%20%20%20width%3A%2060px%20%21important%3B%0A%20%20%20%20height%3A%2060px%20%21important%3B%0A%20%20%20%20border%3A%201px%20solid%20rgba%28255%2C%20255%2C%20255%2C%200.2%29%3B%0A%20%20%09background-color%3A%20rgba%28255%2C%20255%2C%20255%2C%200.1%29%20%21important%3B%0A%20%20%20%20-webkit-transition%3A%20all%20.25s%20ease-in-out%3B%0A%20%20%20%20transition%3A%20all%20.25s%20ease-in-out%3B%0A%7D%0A.tparrows.custom%3Ahover%20%7B%0A%20%20%20%20border-color%3A%20%23fff%3B%0A%20%20%20%20background-color%3A%20%23fff%20%21important%3B%0A%7D%0A.tparrows.custom%3Ahover%3Abefore%20%7B%0A%20%20%20%20color%3A%20%23558dca%20%21important%3B%0A%7D%0A.tparrows.custom%3Abefore%20%7B%0A%20%20%20%20font-size%3A%2024px%20%21important%3B%0A%20%20%20%20line-height%3A%2060px%20%21important%3B%0A%7D%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
				<script type="rocketlazyloadscript">
					var htmlDivCss = unescape("%23rev_slider_8_1_wrapper%20.custom.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3A%23000%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A1000%3B%0A%7D%0A%23rev_slider_8_1_wrapper%20.custom.tparrows%3Ahover%20%7B%0A%09background%3A%23000%3B%0A%7D%0A%23rev_slider_8_1_wrapper%20.custom.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%27revicons%27%3B%0A%09font-size%3A15px%3B%0A%09color%3A%23fff%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A%23rev_slider_8_1_wrapper%20.custom.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce824%27%3B%0A%7D%0A%23rev_slider_8_1_wrapper%20.custom.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce825%27%3B%0A%7D%0A%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
				<script type="rocketlazyloadscript">
					var htmlDivCss = unescape("%0A%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
</div>

				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-defddc0 elementor-section-content-middle services_cta elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="defddc0" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-cac22e0" data-id="cac22e0" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-ad81fb7 elementor-widget elementor-widget-elementskit-button" data-id="ad81fb7" data-element_type="widget" data-widget_type="elementskit-button.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >		<div class="ekit-btn-wraper">
							<a href="https://www.chennaispinecare.com/contact/" class="elementskit-btn services_cta_btn whitespace--normal" >
					
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm0 4c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm6 12H6v-1.4c0-2 4-3.1 6-3.1s6 1.1 6 3.1V19z"></path></svg>
					Request Appointment				</a>
						</div>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6c35c61" data-id="6c35c61" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-39d3aff elementor-widget elementor-widget-elementskit-button" data-id="39d3aff" data-element_type="widget" data-widget_type="elementskit-button.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >		<div class="ekit-btn-wraper">
							<a href="https://www.chennaispinecare.com/about-dr-vignesh-pushparaj/" class="elementskit-btn services_cta_btn whitespace--normal" >
					
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 426.667 426.667" style="enable-background:new 0 0 426.667 426.667;" xml:space="preserve">
<g>
	<g>
		<g>
			<path d="M405.333,85.333h-64V64c0-36.267-27.733-64-64-64h-128c-36.267,0-64,27.733-64,64v21.333h-64     C8.533,85.333,0,93.867,0,106.667v298.667c0,12.8,8.533,21.333,21.333,21.333h384c12.8,0,21.333-8.533,21.333-21.333V106.667     C426.667,93.867,418.133,85.333,405.333,85.333z M128,64c0-12.8,8.533-21.333,21.333-21.333h128     c12.8,0,21.333,8.533,21.333,21.333v21.333H128V64z M213.333,384c-70.4,0-128-57.6-128-128c0-70.4,57.6-128,128-128     s128,57.6,128,128C341.333,326.4,283.733,384,213.333,384z"></path>
			<polygon points="234.667,170.667 192,170.667 192,234.667 128,234.667 128,277.333 192,277.333 192,341.333 234.667,341.333      234.667,277.333 298.667,277.333 298.667,234.667 234.667,234.667    "></polygon>
		</g>
	</g>
</g>
</svg>
					Meet The Doctor				</a>
						</div>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-10b9628" data-id="10b9628" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-60e1949 services_cta_action ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="60e1949" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="tel:+919150955655" target="_blank" rel="nofollow" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media  ">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  text-center">
                    <i aria-hidden="true" class="elementkit-infobox-icon fas fa-mobile-alt"></i>
                </div>
          </div>
                        <div class="box-body">
                            <span class="elementskit-info-box-title">
                    +91 9150 955 655                </span>
                                            </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-f6a3cd2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f6a3cd2" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-0e8edf4" data-id="0e8edf4" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-c82a493 elementor-widget__width-auto elementor-widget elementor-widget-text-editor" data-id="c82a493" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<h2>Book Online Appointment on our Mobile Application</h2>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-fa0b500" data-id="fa0b500" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-52e5546 elementor-widget elementor-widget-image" data-id="52e5546" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
													<a href="https://play.google.com/store/apps/details?id=com.docterz.connect.annaamalai">
							<img width="300" height="93" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%2093'%3E%3C/svg%3E" class="attachment-medium size-medium" alt="" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/google-play-300x93.jpg 300w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/google-play.jpg 512w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/google-play-300x93.jpg" /><noscript><img width="300" height="93" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/google-play-300x93.jpg" class="attachment-medium size-medium" alt="" srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/google-play-300x93.jpg 300w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/google-play.jpg 512w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>								</a>
														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-aa7a84b" data-id="aa7a84b" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-c996fdc elementor-widget elementor-widget-image" data-id="c996fdc" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
													<a href="https://apps.apple.com/us/app/annaamalai/id1565966319">
							<img width="300" height="93" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20300%2093'%3E%3C/svg%3E" class="attachment-medium size-medium" alt="" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/app-store-300x93.jpg 300w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/app-store.jpg 510w" data-lazy-sizes="(max-width: 300px) 100vw, 300px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/app-store-300x93.jpg" /><noscript><img width="300" height="93" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/app-store-300x93.jpg" class="attachment-medium size-medium" alt="" srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/app-store-300x93.jpg 300w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/app-store.jpg 510w" sizes="(max-width: 300px) 100vw, 300px" /></noscript>								</a>
														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-f58d0f3 equal-info-boxes elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f58d0f3" data-element_type="section" data-settings="{&quot;ekit_section_parallax_multi&quot;:&quot;yes&quot;,&quot;ekit_section_parallax_multi_items&quot;:[{&quot;parallax_style&quot;:&quot;onscroll&quot;,&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/www.chennaispinecare.com\/wp-content\/uploads\/2019\/08\/pattern-1.png&quot;,&quot;id&quot;:331,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;pos_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;pos_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;zindex&quot;:0,&quot;_id&quot;:&quot;1a3419d&quot;,&quot;item_source&quot;:&quot;image&quot;,&quot;shape&quot;:null,&quot;shape_color&quot;:null,&quot;width_type&quot;:&quot;&quot;,&quot;width_type_tablet&quot;:&quot;&quot;,&quot;width_type_mobile&quot;:&quot;&quot;,&quot;custom_width&quot;:null,&quot;custom_width_tablet&quot;:null,&quot;custom_width_mobile&quot;:null,&quot;source_rotate&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;source_rotate_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;source_rotate_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;animation&quot;:null,&quot;animation_tablet&quot;:null,&quot;animation_mobile&quot;:null,&quot;item_opacity&quot;:&quot;1&quot;,&quot;animation_speed&quot;:null,&quot;animation_iteration_count&quot;:null,&quot;animation_direction&quot;:null,&quot;parallax_speed&quot;:null,&quot;parallax_transform&quot;:&quot;translateY&quot;,&quot;parallax_transform_value&quot;:&quot;250&quot;,&quot;smoothness&quot;:&quot;700&quot;,&quot;offsettop&quot;:&quot;0&quot;,&quot;offsetbottom&quot;:&quot;0&quot;,&quot;maxtilt&quot;:null,&quot;scale&quot;:null,&quot;disableaxis&quot;:null}],&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d6e8ab2" data-id="d6e8ab2" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-9829b32 animated-slow ekit-equal-height-disable elementor-invisible elementor-widget elementor-widget-elementskit-icon-box" data-id="9829b32" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:0}" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="#" target="_self" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <i aria-hidden="true" class="elementkit-infobox-icon fas fa-heartbeat"></i>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Our Vision                </h3>
                                    <p>To become a leader in Comprehensive Spine management, committed to innovative treatment methods and positive outcomes. </p>
                                </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a842658" data-id="a842658" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-b084c54 animated-slow ekit-equal-height-disable elementor-invisible elementor-widget elementor-widget-elementskit-icon-box" data-id="b084c54" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:300}" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="#" target="_self" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <i aria-hidden="true" class="elementkit-infobox-icon fas fa-medkit"></i>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Our Mission                </h3>
                                    <p>To relieve pain and improve the quality of life of our patients through personalized/ tailored care at an affordable cost </p>
                                </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e52205f" data-id="e52205f" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-69ba867 animated-slow ekit-equal-height-disable elementor-invisible elementor-widget elementor-widget-elementskit-icon-box" data-id="69ba867" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="#" target="_self" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <i aria-hidden="true" class="elementkit-infobox-icon fasicon icon-doctor"></i>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Continually Improving                </h3>
                                    <p>Dr Vignesh Pushparaj is well acquainted with the recent advances in spine management. </p>
                                </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-cc3a4c5 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="cc3a4c5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;ekit_section_parallax_multi&quot;:&quot;yes&quot;,&quot;ekit_section_parallax_multi_items&quot;:[{&quot;parallax_style&quot;:&quot;mousemove&quot;,&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/www.chennaispinecare.com\/wp-content\/uploads\/2019\/08\/shadow-1.png&quot;,&quot;id&quot;:650,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;pos_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;pos_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;parallax_speed&quot;:60,&quot;zindex&quot;:0,&quot;_id&quot;:&quot;677d1bf&quot;,&quot;item_source&quot;:&quot;image&quot;,&quot;shape&quot;:null,&quot;shape_color&quot;:null,&quot;width_type&quot;:&quot;&quot;,&quot;width_type_tablet&quot;:&quot;&quot;,&quot;width_type_mobile&quot;:&quot;&quot;,&quot;custom_width&quot;:null,&quot;custom_width_tablet&quot;:null,&quot;custom_width_mobile&quot;:null,&quot;source_rotate&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;source_rotate_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;source_rotate_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;animation&quot;:null,&quot;animation_tablet&quot;:null,&quot;animation_mobile&quot;:null,&quot;item_opacity&quot;:&quot;1&quot;,&quot;animation_speed&quot;:null,&quot;animation_iteration_count&quot;:null,&quot;animation_direction&quot;:null,&quot;parallax_transform&quot;:null,&quot;parallax_transform_value&quot;:null,&quot;smoothness&quot;:null,&quot;offsettop&quot;:null,&quot;offsetbottom&quot;:null,&quot;maxtilt&quot;:null,&quot;scale&quot;:null,&quot;disableaxis&quot;:null},{&quot;parallax_style&quot;:&quot;mousemove&quot;,&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/www.chennaispinecare.com\/wp-content\/uploads\/2019\/08\/shadow-2.png&quot;,&quot;id&quot;:649,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;pos_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;pos_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:80,&quot;sizes&quot;:[]},&quot;zindex&quot;:0,&quot;_id&quot;:&quot;5fa457a&quot;,&quot;item_source&quot;:&quot;image&quot;,&quot;shape&quot;:null,&quot;shape_color&quot;:null,&quot;width_type&quot;:&quot;&quot;,&quot;width_type_tablet&quot;:&quot;&quot;,&quot;width_type_mobile&quot;:&quot;&quot;,&quot;custom_width&quot;:null,&quot;custom_width_tablet&quot;:null,&quot;custom_width_mobile&quot;:null,&quot;source_rotate&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;source_rotate_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;source_rotate_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;animation&quot;:null,&quot;animation_tablet&quot;:null,&quot;animation_mobile&quot;:null,&quot;item_opacity&quot;:&quot;1&quot;,&quot;animation_speed&quot;:null,&quot;animation_iteration_count&quot;:null,&quot;animation_direction&quot;:null,&quot;parallax_speed&quot;:&quot;100&quot;,&quot;parallax_transform&quot;:null,&quot;parallax_transform_value&quot;:null,&quot;smoothness&quot;:null,&quot;offsettop&quot;:null,&quot;offsetbottom&quot;:null,&quot;maxtilt&quot;:null,&quot;scale&quot;:null,&quot;disableaxis&quot;:null},{&quot;parallax_style&quot;:&quot;mousemove&quot;,&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/www.chennaispinecare.com\/wp-content\/uploads\/2019\/08\/shadow-3.png&quot;,&quot;id&quot;:652,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;pos_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:5,&quot;sizes&quot;:[]},&quot;pos_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:80,&quot;sizes&quot;:[]},&quot;parallax_speed&quot;:100,&quot;zindex&quot;:0,&quot;_id&quot;:&quot;a42b434&quot;,&quot;item_source&quot;:&quot;image&quot;,&quot;shape&quot;:null,&quot;shape_color&quot;:null,&quot;width_type&quot;:&quot;&quot;,&quot;width_type_tablet&quot;:&quot;&quot;,&quot;width_type_mobile&quot;:&quot;&quot;,&quot;custom_width&quot;:null,&quot;custom_width_tablet&quot;:null,&quot;custom_width_mobile&quot;:null,&quot;source_rotate&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;source_rotate_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;source_rotate_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;animation&quot;:null,&quot;animation_tablet&quot;:null,&quot;animation_mobile&quot;:null,&quot;item_opacity&quot;:&quot;1&quot;,&quot;animation_speed&quot;:null,&quot;animation_iteration_count&quot;:null,&quot;animation_direction&quot;:null,&quot;parallax_transform&quot;:null,&quot;parallax_transform_value&quot;:null,&quot;smoothness&quot;:null,&quot;offsettop&quot;:null,&quot;offsetbottom&quot;:null,&quot;maxtilt&quot;:null,&quot;scale&quot;:null,&quot;disableaxis&quot;:null},{&quot;parallax_style&quot;:&quot;onscroll&quot;,&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/www.chennaispinecare.com\/wp-content\/uploads\/2019\/08\/shadow-3.png&quot;,&quot;id&quot;:652,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;pos_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:90,&quot;sizes&quot;:[]},&quot;pos_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;zindex&quot;:0,&quot;_id&quot;:&quot;1153ade&quot;,&quot;item_source&quot;:&quot;image&quot;,&quot;shape&quot;:null,&quot;shape_color&quot;:null,&quot;width_type&quot;:&quot;&quot;,&quot;width_type_tablet&quot;:&quot;&quot;,&quot;width_type_mobile&quot;:&quot;&quot;,&quot;custom_width&quot;:null,&quot;custom_width_tablet&quot;:null,&quot;custom_width_mobile&quot;:null,&quot;source_rotate&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;source_rotate_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;source_rotate_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;animation&quot;:null,&quot;animation_tablet&quot;:null,&quot;animation_mobile&quot;:null,&quot;item_opacity&quot;:&quot;1&quot;,&quot;animation_speed&quot;:null,&quot;animation_iteration_count&quot;:null,&quot;animation_direction&quot;:null,&quot;parallax_speed&quot;:null,&quot;parallax_transform&quot;:&quot;translateY&quot;,&quot;parallax_transform_value&quot;:&quot;250&quot;,&quot;smoothness&quot;:&quot;700&quot;,&quot;offsettop&quot;:&quot;0&quot;,&quot;offsetbottom&quot;:&quot;0&quot;,&quot;maxtilt&quot;:null,&quot;scale&quot;:null,&quot;disableaxis&quot;:null}]}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-aa57066" data-id="aa57066" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-a06d9b4 elementor-widget elementor-widget-image" data-id="a06d9b4" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="738" height="681" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20738%20681'%3E%3C/svg%3E" class="attachment-large size-large" alt="Doctor Vignesh pushparaj" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/dr-vignesh-chennai.png 738w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/dr-vignesh-chennai-300x277.png 300w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/dr-vignesh-chennai-600x554.png 600w" data-lazy-sizes="(max-width: 738px) 100vw, 738px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/dr-vignesh-chennai.png" /><noscript><img width="738" height="681" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/dr-vignesh-chennai.png" class="attachment-large size-large" alt="Doctor Vignesh pushparaj" srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/dr-vignesh-chennai.png 738w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/dr-vignesh-chennai-300x277.png 300w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/dr-vignesh-chennai-600x554.png 600w" sizes="(max-width: 738px) 100vw, 738px" /></noscript>														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0cb496e" data-id="0cb496e" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-da98fd4 elementor-widget__width-initial elementor-widget-tablet__width-inherit medizco_service_box_4 mw-100 ekit-equal-height-disable elementor-invisible elementor-widget elementor-widget-elementskit-icon-box" data-id="da98fd4" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-   ">
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    National &amp; International Fellowships                </h3>
                                    <p>He had done both National and International Fellowships in Spine Speciality.

 </p>
                                </div>
        
        
                </div>
        </div>		</div>
				</div>
				<div class="elementor-element elementor-element-c8826e2 elementor-widget__width-initial elementor-widget-tablet__width-inherit medizco_service_box_4 mw-100 ekit-equal-height-disable elementor-invisible elementor-widget elementor-widget-elementskit-icon-box" data-id="c8826e2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-   ">
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    ASIA PACIFIC Long Term Fellowship                </h3>
                                    <p>AO spine ASIA PACIFIC long term Fellowship. <br>(Park Clinic, Kolkata)
<br>Fellowship in Spine Surgery Certified by International society for Orthopaedic centre. <br>(Sint Maartenskliniek, Netherlands) </p>
                                </div>
        
        
                </div>
        </div>		</div>
				</div>
				<div class="elementor-element elementor-element-5d3b2e9 elementor-widget__width-initial elementor-widget-tablet__width-inherit medizco_service_box_4 mw-100 ekit-equal-height-disable elementor-invisible elementor-widget elementor-widget-elementskit-icon-box" data-id="5d3b2e9" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:900}" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-left text- icon-lef-right-aligin elementor-animation-   ">
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Chronic Pain Management                </h3>
                                    <p>He has done Fellowship in Chronic Pain Management also. He is one among the few spine specialists with both Spine Surgery &amp; Chronic Pain Management Fellowship. </p>
                                </div>
        
        
                </div>
        </div>		</div>
				</div>
				<div class="elementor-element elementor-element-83ae60f elementor-widget elementor-widget-button" data-id="83ae60f" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="https://www.chennaispinecare.com/about-dr-vignesh-pushparaj/" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Read more</span>
		</span>
					</a>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-1fce90b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1fce90b" data-element_type="section" data-settings="{&quot;ekit_section_parallax_multi&quot;:&quot;yes&quot;,&quot;ekit_section_parallax_multi_items&quot;:[{&quot;parallax_style&quot;:&quot;onscroll&quot;,&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/www.chennaispinecare.com\/wp-content\/uploads\/2019\/08\/pattern-1.png&quot;,&quot;id&quot;:331,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;pos_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;pos_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;zindex&quot;:0,&quot;_id&quot;:&quot;8f22286&quot;,&quot;item_source&quot;:&quot;image&quot;,&quot;shape&quot;:null,&quot;shape_color&quot;:null,&quot;width_type&quot;:&quot;&quot;,&quot;width_type_tablet&quot;:&quot;&quot;,&quot;width_type_mobile&quot;:&quot;&quot;,&quot;custom_width&quot;:null,&quot;custom_width_tablet&quot;:null,&quot;custom_width_mobile&quot;:null,&quot;source_rotate&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;source_rotate_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;source_rotate_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;animation&quot;:null,&quot;animation_tablet&quot;:null,&quot;animation_mobile&quot;:null,&quot;item_opacity&quot;:&quot;1&quot;,&quot;animation_speed&quot;:null,&quot;animation_iteration_count&quot;:null,&quot;animation_direction&quot;:null,&quot;parallax_speed&quot;:null,&quot;parallax_transform&quot;:&quot;translateY&quot;,&quot;parallax_transform_value&quot;:&quot;250&quot;,&quot;smoothness&quot;:&quot;700&quot;,&quot;offsettop&quot;:&quot;0&quot;,&quot;offsetbottom&quot;:&quot;0&quot;,&quot;maxtilt&quot;:null,&quot;scale&quot;:null,&quot;disableaxis&quot;:null}]}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-488b2ba" data-id="488b2ba" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-9a6f750 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9a6f750" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-e7d2323" data-id="e7d2323" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6ae0322" data-id="6ae0322" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-ee43f2c elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="ee43f2c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:0}" data-widget_type="elementskit-heading.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" ><div class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-"><h2 class="ekit-heading--title elementskit-section-title ">
					Our Services
				</h2>				<div class='ekit-heading__description'>
					<p>Treatments done at Anaamalai Ortho &amp; Spine Centre, Chennai</p>
				</div>
			</div></div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7d09e3f elementor-hidden-tablet elementor-hidden-phone" data-id="7d09e3f" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-a7d5b2d equal-info-boxes elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a7d5b2d" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0af4f21" data-id="0af4f21" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-03a07f1 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="03a07f1" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="https://www.chennaispinecare.com/service/back-and-neck-pain-management/" target="_blank" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
                            <div class="elementskit-box-header">
                <div class="elementskit-info-box-icon ">
                    <img width="400" height="338" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20338'%3E%3C/svg%3E" class="attachment- size-" alt="back pain treatment" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/back-pain.jpg 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/back-pain-300x254.jpg 300w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/back-pain.jpg" /><noscript><img width="400" height="338" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/back-pain.jpg" class="attachment- size-" alt="back pain treatment" srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/back-pain.jpg 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/back-pain-300x254.jpg 300w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>                </div>
          </div>
                <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Back &amp; Neck Pain                </h3>
                                    <p>It can be prevented by adequate hydration, routine core strengthening and by maintaining the ergonomic posture. </p>
                                </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c4eb72d" data-id="c4eb72d" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-71f4723 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="71f4723" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="https://www.chennaispinecare.com/service/cervical-spondylosis/" target="_blank" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
                            <div class="elementskit-box-header">
                <div class="elementskit-info-box-icon ">
                    <img width="400" height="338" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20338'%3E%3C/svg%3E" class="attachment- size-" alt="cervical-spondylisis" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/cervical-spondylisis.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/cervical-spondylisis-300x254.png 300w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/cervical-spondylisis.png" /><noscript><img width="400" height="338" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/cervical-spondylisis.png" class="attachment- size-" alt="cervical-spondylisis" srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/cervical-spondylisis.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/cervical-spondylisis-300x254.png 300w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>                </div>
          </div>
                <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Cervical Spondylosis                </h3>
                                    <p>Cervical spondylosis is the most common type of progressive disorder that affects the neck during aging. </p>
                                </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a34ebd9" data-id="a34ebd9" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-08acc62 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="08acc62" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="https://www.chennaispinecare.com/service/scoliosis-spine-deformity-correction/" target="_blank" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
                            <div class="elementskit-box-header">
                <div class="elementskit-info-box-icon ">
                    <img width="400" height="338" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20338'%3E%3C/svg%3E" class="attachment- size-" alt="spine scoliosis" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/scol.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/scol-300x254.png 300w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/scol.png" /><noscript><img width="400" height="338" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/scol.png" class="attachment- size-" alt="spine scoliosis" srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/scol.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/scol-300x254.png 300w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>                </div>
          </div>
                <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Scoliosis                </h3>
                                    <p>It is common in female children, it can be corrected safely with present scientific advances and our surgical expertise. </p>
                                </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-960194d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="960194d" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-741ad98" data-id="741ad98" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-0f14953 equal-info-boxes elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0f14953" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5fabd16" data-id="5fabd16" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-70d6ec1 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="70d6ec1" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="https://www.chennaispinecare.com/service/osteoporotic-spine-fracture-management/" target="_blank" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
                            <div class="elementskit-box-header">
                <div class="elementskit-info-box-icon ">
                    <img width="400" height="338" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20338'%3E%3C/svg%3E" class="attachment- size-" alt="spine fracture management" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/fracture.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/fracture-300x254.png 300w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/fracture.png" /><noscript><img width="400" height="338" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/fracture.png" class="attachment- size-" alt="spine fracture management" srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/fracture.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/fracture-300x254.png 300w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>                </div>
          </div>
                <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Spine Fracture                </h3>
                                    <p>Spine fractures are more serious than the fracture of extremities. It needs emergency attention because these fractures can damage the spinal cord.  </p>
                                </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-05e924a" data-id="05e924a" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-aa2a15e ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="aa2a15e" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="https://www.chennaispinecare.com/service/microlumbar-disccectomy-tubular-disccectomy/" target="_blank" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
                            <div class="elementskit-box-header">
                <div class="elementskit-info-box-icon ">
                    <img width="400" height="338" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20338'%3E%3C/svg%3E" class="attachment- size-" alt="microlumbar disscectomy" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/microlumbar-disscectomy.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/microlumbar-disscectomy-300x254.png 300w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/microlumbar-disscectomy.png" /><noscript><img width="400" height="338" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/microlumbar-disscectomy.png" class="attachment- size-" alt="microlumbar disscectomy" srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/microlumbar-disscectomy.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/microlumbar-disscectomy-300x254.png 300w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>                </div>
          </div>
                <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Microlumbar Disccectomy / Tubular Disccectomy                </h3>
                                    <p>It is a keyhole surgical procedure to remove the damaged portion of a herniated disc only in our spine with disturbing the nerve and spinal cord </p>
                                </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-465c81d" data-id="465c81d" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-f093de3 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="f093de3" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="https://www.chennaispinecare.com/service/injection-procedures-in-spine/" target="_blank" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
                            <div class="elementskit-box-header">
                <div class="elementskit-info-box-icon ">
                    <img width="400" height="338" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20338'%3E%3C/svg%3E" class="attachment- size-" alt="spine injection procedure" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/injection-procedure.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/injection-procedure-300x254.png 300w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/injection-procedure.png" /><noscript><img width="400" height="338" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/injection-procedure.png" class="attachment- size-" alt="spine injection procedure" srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/injection-procedure.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/injection-procedure-300x254.png 300w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>                </div>
          </div>
                <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Injection Procedures in Spine                </h3>
                                    <p>Selective Nerve Root Block (SNRB) in lowback is given to relieve radiating leg pain along the course of a particular nerve which had got pinched due to prolapsed disc. </p>
                                </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-4929862 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4929862" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-65ba246" data-id="65ba246" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-dfa645f equal-info-boxes elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dfa645f" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b097825" data-id="b097825" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-1b18fce ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="1b18fce" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="https://www.chennaispinecare.com/service/osteoporotic-spine-fracture-management/" target="_blank" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
                            <div class="elementskit-box-header">
                <div class="elementskit-info-box-icon ">
                    <img width="400" height="338" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20338'%3E%3C/svg%3E" class="attachment- size-" alt="orthopaedic surgery" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/ortho.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/ortho-300x254.png 300w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/ortho.png" /><noscript><img width="400" height="338" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/ortho.png" class="attachment- size-" alt="orthopaedic surgery" srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/ortho.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/ortho-300x254.png 300w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>                </div>
          </div>
                <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Osteoporotic Fracture                </h3>
                                    <p>It is common in postmenopausal and geriatric population. Can be treated with day care/ percutaneous procedures. </p>
                                </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-0248bb5" data-id="0248bb5" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-228a047 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="228a047" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="https://www.chennaispinecare.com/service/minimal-invasive-spine-surgery/" target="_blank" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
                            <div class="elementskit-box-header">
                <div class="elementskit-info-box-icon ">
                    <img width="400" height="338" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20338'%3E%3C/svg%3E" class="attachment- size-" alt="spine surgery" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/miss.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/miss-300x254.png 300w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/miss.png" /><noscript><img width="400" height="338" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/miss.png" class="attachment- size-" alt="spine surgery" srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/miss.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/miss-300x254.png 300w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>                </div>
          </div>
                <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    MISS                </h3>
                                    <p>Minimally invasive spine surgery is done to treat spine problems with injury to the surrounding/supporting muscles, normal structures in and around the spine. </p>
                                </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-db8ca3f" data-id="db8ca3f" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-273cc1b ekit-equal-height-enable elementor-widget elementor-widget-elementskit-icon-box" data-id="273cc1b" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="https://www.chennaispinecare.com/service/spine-tumour-surgeries/" target="_blank" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_left">
                            <div class="elementskit-box-header">
                <div class="elementskit-info-box-icon ">
                    <img width="400" height="338" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20338'%3E%3C/svg%3E" class="attachment- size-" alt="spine tumour surgery" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/spine-tumour-1.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/spine-tumour-1-300x254.png 300w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/spine-tumour-1.png" /><noscript><img width="400" height="338" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/spine-tumour-1.png" class="attachment- size-" alt="spine tumour surgery" srcset="https://www.chennaispinecare.com/wp-content/uploads/2021/07/spine-tumour-1.png 400w, https://www.chennaispinecare.com/wp-content/uploads/2021/07/spine-tumour-1-300x254.png 300w" sizes="(max-width: 400px) 100vw, 400px" /></noscript>                </div>
          </div>
                <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Spine Tumour                </h3>
                                    <p>Tumor spread to spine needs intervention to maintain the quality of life than tumor curative treatment. </p>
                                </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6b4cda1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6b4cda1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f725996" data-id="f725996" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-03af56e ekit-equal-height-disable elementor-invisible elementor-widget elementor-widget-elementskit-icon-box" data-id="03af56e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:0}" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media  ">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 217.23 250" xml:space="preserve">
<g>
	<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="14.1724" y1="146.7394" x2="193.6281" y2="146.7394">
		<stop offset="0" style="stop-color:#1CBA9F"></stop>
		<stop offset="0.8" style="stop-color:#FFFFFF;stop-opacity:0"></stop>
	</linearGradient>
	<circle opacity="0.1" fill="url(#SVGID_1_)" cx="103.9" cy="146.74" r="89.73"></circle>
	<g>
		<path fill="#2E3192" d="M189.94,141.52c-0.62-11.24-3.26-21.39-7.88-31.04c-15.58-32.52-47.93-51.91-83.98-50.33    c-40.62,1.78-75.84,33.76-81.51,74.03c-6.69,47.53,23.47,90.35,70.68,98.98c28.97,5.3,55.33-2.57,79.22-19.34    c0.68-0.48,1.3-1.27,2.04-1.4c1.06-0.19,2.71-0.31,3.2,0.28c0.63,0.77,0.54,2.29,0.43,3.45c-0.06,0.63-0.82,1.2-1.3,1.76    c-20.16,23.98-46.09,34.5-77.05,31.6c-36.04-3.37-63.46-21.23-80.95-52.8C-20.87,135.91,15,59.91,83.23,46.52    c57.68-11.32,113.65,28.82,121.22,86.94c0.1,0.74,0.25,1.47,0.34,2.2c0.71,5.86,0.71,5.86,6.51,5.86c0.74,0,1.49-0.01,2.23,0    c3.59,0.07,4.64,1.89,2.83,5.04c-5.41,9.41-10.84,18.81-16.3,28.19c-1.84,3.16-3.95,3.18-5.77,0.05    c-5.46-9.38-10.89-18.78-16.29-28.2c-1.88-3.28-0.8-5.05,3.03-5.08C183.88,141.51,186.74,141.52,189.94,141.52z"></path>
		<path fill="#2E3192" d="M57.41,189.79c-0.6-4.61-0.14-8.54,2.2-12.52c9.11-15.52,17.91-31.22,26.73-46.9    c0.77-1.37,1.17-3.11,1.23-4.7c0.16-4.62,0.06-9.26,0.06-14.1c-5.56,0-10.89,0-16.57,0c0,5.34,0,10.69,0,16.26    c-4.45,0-8.55,0-12.79,0c0-7.32-0.23-14.62,0.1-21.9c0.16-3.51,2.63-5.52,6.21-5.57c9.84-0.14,19.68-0.15,29.51,0    c3.96,0.06,6.35,2.49,6.48,6.6c0.21,6.68,0.38,13.39-0.11,20.03c-0.22,3-1.7,6.07-3.21,8.78c-7.43,13.27-15.06,26.43-22.62,39.64    c-0.49,0.86-0.93,1.74-1.6,3c9.35,0,18.22,0,27.32,0c0,3.9,0,7.55,0,11.38C86.06,189.79,71.82,189.79,57.41,189.79z"></path>
		<path fill="#2E3192" d="M122.04,161.67c5.15,0,9.76,0,14.7,0c0-8.9,0-17.67,0-26.67c4.27,0,8.2,0,12.56,0c0,8.82,0,17.66,0,26.75    c2.43,0,4.44,0,6.72,0c0,3.79,0,7.33,0,11.22c-2.11,0-4.19,0-6.62,0c0,5.76,0,11.18,0,16.79c-4.27,0-8.2,0-12.51,0    c0-5.5,0-10.93,0-16.63c-9.98,0-19.59,0-29.89,0c0.27-3.38-0.09-6.66,0.86-9.49c6.84-20.48,13.97-40.87,20.95-61.31    c0.53-1.54,1.22-2.21,2.93-2.15c3.68,0.13,7.37,0.04,11.4,0.04C136.07,120.83,129.12,141.04,122.04,161.67z"></path>
		<path fill="#2E3192" d="M103.13,0.01c8.08,0,16.15-0.02,24.23,0.01c3.29,0.01,4.11,0.83,4.13,4.13c0.03,6.68,0.03,13.37,0,20.05    c-0.02,3.01-0.99,3.95-4.01,4.03c-1.58,0.04-3.16-0.01-4.73,0.02c-3.22,0.06-4.23,1.1-4.28,4.42c-0.01,0.56,0,1.11,0,1.67    c-0.06,3.29-1.03,3.96-4.24,3.83c-7.22-0.28-14.45-0.4-21.68-0.47c-3.9-0.03-4.49-0.5-4.56-4.45c-0.07-4.11-0.98-4.99-5.15-5.01    c-8.04-0.03-8.04-0.03-8.04-8.16c0-5.2-0.01-10.4,0-15.59c0.01-3.58,0.87-4.46,4.4-4.47C87.17-0.01,95.15,0,103.13,0.01z"></path>
		<path fill="#2E3192" d="M192.38,49.18c-0.39,0.87-0.56,1.64-1.01,2.17c-1.96,2.35-3.94,4.67-6.02,6.92    c-1.56,1.68-3.21,1.39-4.91,0.03c-3.81-3.06-4.43-3.03-7.72,0.62c-1.54,1.7-2.96,2.82-5.1,0.89c-1.5-1.35-1.93-2.64-0.3-4.18    c0.6-0.57,1.12-1.23,1.65-1.88c1.9-2.31,1.83-3.73-0.28-5.74c-3.35-3.19-3.39-3.85-0.41-7.25c1.46-1.67,2.92-3.35,4.39-5.02    c1.57-1.78,3.31-1.92,5.1-0.37c4.34,3.76,8.68,7.53,12.95,11.36C191.43,47.36,191.82,48.33,192.38,49.18z"></path>
		<path fill="#2E3192" d="M105.03,71.21c0,1.29,0.13,2.6-0.06,3.85c-0.08,0.52-0.88,1.28-1.35,1.28c-0.47,0-1.32-0.81-1.34-1.29    c-0.11-2.48-0.08-4.97,0.09-7.44c0.03-0.49,0.86-0.92,1.33-1.38c0.46,0.46,1.23,0.88,1.32,1.41c0.2,1.16,0.06,2.38,0.06,3.58    C105.06,71.21,105.04,71.21,105.03,71.21z"></path>
		<path fill="#2E3192" d="M69.27,84.53c-0.41,0.54-0.66,1.19-1.04,1.29c-0.5,0.13-1.41,0-1.63-0.34c-1.42-2.26-2.75-4.59-3.98-6.97    c-0.18-0.36,0.2-1.22,0.58-1.58c0.26-0.25,1.27-0.25,1.42-0.01C66.21,79.39,67.7,81.92,69.27,84.53z"></path>
		<path fill="#2E3192" d="M42.91,182.12c-0.84,1.08-1.07,1.62-1.49,1.87c-2.05,1.25-4.1,2.5-6.25,3.56    c-0.53,0.26-1.41-0.2-2.13-0.34c0.25-0.69,0.29-1.7,0.78-2.02c2-1.32,4.09-2.52,6.25-3.55C40.66,181.37,41.61,181.88,42.91,182.12    z"></path>
		<path fill="#2E3192" d="M34.76,105.38c2.61,1.62,5.14,3.14,7.61,4.77c0.23,0.15,0.21,1.17-0.04,1.43    c-0.36,0.37-1.22,0.72-1.58,0.53c-2.37-1.25-4.69-2.6-6.95-4.05c-0.34-0.22-0.44-1.15-0.3-1.66    C33.61,106.01,34.26,105.76,34.76,105.38z"></path>
		<path fill="#2E3192" d="M173.69,106.83c-0.02,1.91-7.77,6.4-8.61,5.55c-0.4-0.4-0.34-2.04,0.07-2.32c2.04-1.4,4.21-2.64,6.44-3.7    C172.14,106.1,173.09,106.68,173.69,106.83z"></path>
		<path fill="#2E3192" d="M171.67,188.51c-2.53-1.51-4.98-2.94-7.37-4.47c-0.28-0.18-0.41-1.13-0.2-1.43    c0.31-0.43,1.19-0.95,1.49-0.79c2.5,1.34,4.95,2.8,7.34,4.32c0.26,0.16,0.27,1.08,0.07,1.48    C172.82,188.01,172.2,188.19,171.67,188.51z"></path>
		<path fill="#2E3192" d="M62.84,217.39c-0.32-0.75-1.07-1.67-0.85-2.11c1.17-2.39,2.53-4.68,3.96-6.93    c0.23-0.36,1.15-0.49,1.66-0.37c0.35,0.09,0.87,0.99,0.75,1.22c-1.38,2.58-2.87,5.11-4.36,7.63    C63.89,217.02,63.53,217.07,62.84,217.39z"></path>
		<path fill="#2E3192" d="M143.38,217.31c-1.94,0.03-6.46-7.63-5.63-8.54c0.37-0.4,2.03-0.38,2.3,0c1.4,2.04,2.64,4.21,3.72,6.44    C144.03,215.77,143.5,216.71,143.38,217.31z"></path>
		<path fill="#2E3192" d="M144.95,78.41c-1.58,2.6-3.07,5.12-4.67,7.57c-0.16,0.25-1.28,0.26-1.44,0.03    c-0.35-0.51-0.7-1.42-0.47-1.87c1.13-2.21,2.38-4.36,3.74-6.43c0.28-0.43,1.21-0.61,1.83-0.58    C144.27,77.16,144.56,77.89,144.95,78.41z"></path>
		<path fill="#2E3192" d="M104.21,222.58c0,1.2,0.15,2.44-0.06,3.6c-0.11,0.61-0.88,1.09-1.35,1.63c-0.44-0.49-1.23-0.95-1.25-1.46    c-0.12-2.49-0.12-5,0.03-7.5c0.03-0.48,0.88-0.92,1.36-1.37c0.43,0.49,1.15,0.94,1.24,1.49c0.19,1.17,0.06,2.4,0.06,3.6    C104.23,222.58,104.22,222.58,104.21,222.58z"></path>
		<path fill="#2E3192" d="M27.77,145.43c1.2,0,2.43-0.14,3.6,0.06c0.52,0.09,0.93,0.86,1.39,1.32c-0.48,0.44-0.95,1.23-1.46,1.25    c-2.49,0.13-5,0.12-7.49-0.02c-0.48-0.03-0.92-0.86-1.38-1.33c0.49-0.44,0.93-1.18,1.47-1.25c1.27-0.19,2.58-0.06,3.88-0.06    C27.77,145.41,27.77,145.42,27.77,145.43z"></path>
	</g>
</g>
</svg>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Emergency                </h3>
                                    <p>Spine Care  </p>
                                </div>
        
        
                </div>
        </div>		</div>
				</div>
				<div class="elementor-element elementor-element-8b55d0f elementor-invisible elementor-widget elementor-widget-text-editor" data-id="8b55d0f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p><em><strong>With access to 24-hour emergency assistance.</strong></em></p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-da17ee5 tel_num ekit-equal-height-disable elementor-invisible elementor-widget elementor-widget-elementskit-icon-box" data-id="da17ee5" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <a href="tel:+919150955655" target="_self" rel="" class="ekit_global_links">
                <!-- end link opening -->

        <div class="elementskit-infobox text- text-left icon-lef-right-aligin elementor-animation- media  ">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  text-center">
                    <i aria-hidden="true" class="elementkit-infobox-icon fasicon icon-phone"></i>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    +91 9150 955 655                </h3>
                                            </div>
        
        
                </div>
                </a>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2dc7936" data-id="2dc7936" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-c191d1a elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="c191d1a" data-element_type="section" id="booking" data-settings="{&quot;ekit_section_parallax_multi&quot;:&quot;yes&quot;,&quot;ekit_section_parallax_multi_items&quot;:[{&quot;parallax_style&quot;:&quot;onscroll&quot;,&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/www.chennaispinecare.com\/wp-content\/uploads\/2019\/10\/booking-pattern-1.png&quot;,&quot;id&quot;:3122,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;custom_width&quot;:null,&quot;source_rotate&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:-20,&quot;sizes&quot;:[]},&quot;pos_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:70,&quot;sizes&quot;:[]},&quot;animation&quot;:null,&quot;parallax_transform_value&quot;:-250,&quot;zindex&quot;:0,&quot;_id&quot;:&quot;8fea493&quot;,&quot;item_source&quot;:&quot;image&quot;,&quot;shape&quot;:null,&quot;shape_color&quot;:null,&quot;width_type&quot;:&quot;&quot;,&quot;width_type_tablet&quot;:&quot;&quot;,&quot;width_type_mobile&quot;:&quot;&quot;,&quot;custom_width_tablet&quot;:null,&quot;custom_width_mobile&quot;:null,&quot;source_rotate_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;source_rotate_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;animation_tablet&quot;:null,&quot;animation_mobile&quot;:null,&quot;item_opacity&quot;:&quot;1&quot;,&quot;animation_speed&quot;:null,&quot;animation_iteration_count&quot;:null,&quot;animation_direction&quot;:null,&quot;parallax_speed&quot;:null,&quot;parallax_transform&quot;:&quot;translateY&quot;,&quot;smoothness&quot;:&quot;700&quot;,&quot;offsettop&quot;:&quot;0&quot;,&quot;offsetbottom&quot;:&quot;0&quot;,&quot;maxtilt&quot;:null,&quot;scale&quot;:null,&quot;disableaxis&quot;:null},{&quot;parallax_style&quot;:&quot;onscroll&quot;,&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/www.chennaispinecare.com\/wp-content\/uploads\/2019\/10\/booking-pattern-3.png&quot;,&quot;id&quot;:3130,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;custom_width&quot;:null,&quot;source_rotate&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:33,&quot;sizes&quot;:[]},&quot;pos_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;animation&quot;:null,&quot;parallax_transform_value&quot;:-250,&quot;zindex&quot;:0,&quot;_id&quot;:&quot;3406fe3&quot;,&quot;item_source&quot;:&quot;image&quot;,&quot;shape&quot;:null,&quot;shape_color&quot;:null,&quot;width_type&quot;:&quot;&quot;,&quot;width_type_tablet&quot;:&quot;&quot;,&quot;width_type_mobile&quot;:&quot;&quot;,&quot;custom_width_tablet&quot;:null,&quot;custom_width_mobile&quot;:null,&quot;source_rotate_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;source_rotate_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;animation_tablet&quot;:null,&quot;animation_mobile&quot;:null,&quot;item_opacity&quot;:&quot;1&quot;,&quot;animation_speed&quot;:null,&quot;animation_iteration_count&quot;:null,&quot;animation_direction&quot;:null,&quot;parallax_speed&quot;:null,&quot;parallax_transform&quot;:&quot;translateY&quot;,&quot;smoothness&quot;:&quot;700&quot;,&quot;offsettop&quot;:&quot;0&quot;,&quot;offsetbottom&quot;:&quot;0&quot;,&quot;maxtilt&quot;:null,&quot;scale&quot;:null,&quot;disableaxis&quot;:null},{&quot;parallax_style&quot;:&quot;onscroll&quot;,&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/www.chennaispinecare.com\/wp-content\/uploads\/2019\/10\/booking-pattern-4.png&quot;,&quot;id&quot;:3131,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;custom_width&quot;:null,&quot;source_rotate&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:55,&quot;sizes&quot;:[]},&quot;pos_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:45,&quot;sizes&quot;:[]},&quot;animation&quot;:null,&quot;parallax_transform_value&quot;:-250,&quot;zindex&quot;:0,&quot;_id&quot;:&quot;77dd8e5&quot;,&quot;item_source&quot;:&quot;image&quot;,&quot;shape&quot;:null,&quot;shape_color&quot;:null,&quot;width_type&quot;:&quot;&quot;,&quot;width_type_tablet&quot;:&quot;&quot;,&quot;width_type_mobile&quot;:&quot;&quot;,&quot;custom_width_tablet&quot;:null,&quot;custom_width_mobile&quot;:null,&quot;source_rotate_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;source_rotate_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;animation_tablet&quot;:null,&quot;animation_mobile&quot;:null,&quot;item_opacity&quot;:&quot;1&quot;,&quot;animation_speed&quot;:null,&quot;animation_iteration_count&quot;:null,&quot;animation_direction&quot;:null,&quot;parallax_speed&quot;:null,&quot;parallax_transform&quot;:&quot;translateY&quot;,&quot;smoothness&quot;:&quot;700&quot;,&quot;offsettop&quot;:&quot;0&quot;,&quot;offsetbottom&quot;:&quot;0&quot;,&quot;maxtilt&quot;:null,&quot;scale&quot;:null,&quot;disableaxis&quot;:null}]}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-409b3c5" data-id="409b3c5" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-e218c8c elementor-widget__width-inherit elementor-absolute elementor-widget elementor-widget-image" data-id="e218c8c" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="1600" height="897" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201600%20897'%3E%3C/svg%3E" class="attachment-full size-full" alt="" data-lazy-srcset="https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2.png 1600w, https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2-600x336.png 600w, https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2-300x168.png 300w, https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2-768x431.png 768w, https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2-1024x574.png 1024w, https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2-1536x861.png 1536w" data-lazy-sizes="(max-width: 1600px) 100vw, 1600px" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2.png" /><noscript><img width="1600" height="897" src="https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2.png" class="attachment-full size-full" alt="" srcset="https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2.png 1600w, https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2-600x336.png 600w, https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2-300x168.png 300w, https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2-768x431.png 768w, https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2-1024x574.png 1024w, https://www.chennaispinecare.com/wp-content/uploads/2019/10/booking-pattern-2-1536x861.png 1536w" sizes="(max-width: 1600px) 100vw, 1600px" /></noscript>														</div>
						</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-9cc9107 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9cc9107" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-30e1289" data-id="30e1289" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-380d4f2 elementor-widget elementor-widget-heading" data-id="380d4f2" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<p class="elementor-heading-title elementor-size-default">With access to</p>		</div>
				</div>
				<div class="elementor-element elementor-element-c399579 elementor-hidden-phone elementor-widget elementor-widget-heading" data-id="c399579" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">24 Hour</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-6b7a4b2 elementor-hidden-phone elementor-widget elementor-widget-heading" data-id="6b7a4b2" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Emergency</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-e2ec2c9 elementor-widget elementor-widget-elementskit-heading" data-id="e2ec2c9" data-element_type="widget" data-widget_type="elementskit-heading.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" ><div class="ekit-heading elementskit-section-title-wraper    ekit_heading_tablet-   ekit_heading_mobile-"><h3 class="ekit-heading--title elementskit-section-title ">
					Assistance
				</h3><div class="ekit_heading_separetor_wraper ekit_heading_elementskit-border-divider elementskit-style-long"><div class="elementskit-border-divider elementskit-style-long"></div></div>				<div class='ekit-heading__description'>
					<div class="carousel-inner">
<div class="carousel-item active">
<div class="container">
<div class="media-container-row align-left">
<div class="media-content">
<div class="mbr-section-text mbr-white pb-3 ">
<p class="mbr-text mbr-fonts-style display-7">Your wellness is our focus. We aim to provide safe, high-quality, cost-effective and state-of -the-art, operative and non-operative management for spinal disorders.</p>
</div>
</div>
</div>
</div>
</div>
</div>
				</div>
			</div></div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-38193d6" data-id="38193d6" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-0c9581a elementor-widget elementor-widget-metform" data-id="0c9581a" data-element_type="widget" data-widget_type="metform.default">
				<div class="elementor-widget-container">
			<div id="mf-response-props-id-2980" data-editswitchopen="" data-erroricon="fas fa-exclamation-triangle" data-successicon="fas fa-check" data-messageposition="top" class="   mf-scroll-top-no">
		<div class="formpicker_warper formpicker_warper_editable" data-metform-formpicker-key="2980" >
				
			<div class="elementor-widget-container">
				
		<div
			id="metform-wrap-0c9581a-2980"
			class="mf-form-wrapper"
			data-form-id="2980"
			data-action="https://www.chennaispinecare.com/wp-json/metform/v1/entries/insert/2980"
			data-wp-nonce="ec5227f792"
			data-form-nonce="4efdc0380f"
			data-stop-vertical-effect=""
			></div>


		<!----------------------------- 
			* controls_data : find the the props passed indie of data attribute
			* props.SubmitResponseMarkup : contains the markup of error or success message
			* https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals
		--------------------------- -->

				<script type="rocketlazyloadscript" data-rocket-type="text" class="mf-template">

			function controls_data (value){
				let currentWrapper = "mf-response-props-id-2980";
				let currentEl = document.getElementById(currentWrapper);
				
				return currentEl ? currentEl.dataset[value] : false
			}


			let is_edit_mode = '' ? true : false;
			let message_position = controls_data('messageposition') || 'top';

			
			let message_successIcon = controls_data('successicon') || '';
			let message_errorIcon = controls_data('erroricon') || '';
			let message_editSwitch = controls_data('editswitchopen') === 'yes' ? true : false;
			let message_proClass = controls_data('editswitchopen') === 'yes' ? 'mf_pro_activated' : '';
			
			let is_dummy_markup = is_edit_mode && message_editSwitch ? true : false;

			
			return html`
				<form
					className="metform-form-content"
					ref=${parent.formContainerRef}
					onSubmit=${ validation.handleSubmit( parent.handleFormSubmit ) }
				
					>
			
			
					${is_dummy_markup ? message_position === 'top' ?  props.ResponseDummyMarkup(message_successIcon, message_proClass) : '' : ''}
					${is_dummy_markup ? ' ' :  message_position === 'top' ? props.SubmitResponseMarkup`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}

					<!--------------------------------------------------------
					*** IMPORTANT / DANGEROUS ***
					${html``} must be used as in immediate child of "metform-form-main-wrapper"
					class otherwise multistep form will not run at all
					---------------------------------------------------------->

					<div className="metform-form-main-wrapper" key=${'hide-form-after-submit'} ref=${parent.formRef}>
					${html`
								<div data-elementor-type="wp-post" data-elementor-id="2980" className="elementor elementor-2980" data-elementor-settings="[]">
						<div className="elementor-inner">
							<div className="elementor-section-wrap">
							<section className="elementor-section elementor-top-section elementor-element elementor-element-86903db elementor-section-full_width booking_form elementor-section-height-default elementor-section-height-default" data-id="86903db" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div className="elementor-container elementor-column-gap-no">
							<div className="elementor-row">
					<div className="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8609603" data-id="8609603" data-element_type="column">
			<div className="elementor-column-wrap elementor-element-populated">
							<div className="elementor-widget-wrap">
						<div className="elementor-element elementor-element-af0c0e8 elementor-widget elementor-widget-elementskit-heading" data-id="af0c0e8" data-element_type="widget" data-widget_type="elementskit-heading.default">
				<div className="elementor-widget-container">
			<div className="ekit-wid-con" ><div className="ekit-heading elementskit-section-title-wraper    ekit_heading_tablet-   ekit_heading_mobile-"><h3 className="ekit-heading--title elementskit-section-title ">
					Book an <span><span>Appointment</span></span>
				</h3></div></div>		</div>
				</div>
				<div className="elementor-element elementor-element-79f8371 select2_wrap elementor-widget elementor-widget-mf-select" data-id="79f8371" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;booking_doctor&quot;}" data-widget_type="mf-select.default">
				<div className="elementor-widget-container">
			
        
		<div className="mf-input-wrapper">
			
            <${props.Select}
                className=${"mf-input mf-input-select  " + ( validation.errors['booking_doctor'] ? 'mf-invalid' : '' )}
                classNamePrefix="mf_select"
                name="booking_doctor"
                placeholder="${ parent.decodeEntities(`Select`) } "
                isSearchable=${false}
                options=${[{"label":"Dr Vignesh Pushparaj","value":"Dr Vignesh Pushparaj","isDisabled":false}]}
                value=${parent.getValue("booking_doctor") ? [{"_id":"d320717","mf_input_option_text":"Dr Vignesh Pushparaj","mf_input_option_value":"Dr Vignesh Pushparaj","mf_input_option_status":"","mf_input_option_selected":""}].filter(item => item.value === parent.getValue("booking_doctor"))[0] : []}
                onChange=${parent.handleSelect}
                ref=${() => {
                    register({ name: "booking_doctor" }, parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true}));
                    if ( parent.getValue("booking_doctor") === '' && false ) {
                        parent.handleChange({
                            target: {
                                name: 'booking_doctor',
                                value: ''
                            }
                        });
                        parent.setValue( 'booking_doctor', '', true );
                    }
                }}
                />

            				<${validation.ErrorMessage}
					errors=${validation.errors}
					name="booking_doctor"
					as=${html`<span className="mf-error-message"></span>`}
					/>
			
            		</div>

		
        		</div>
				</div>
				<section className="elementor-section elementor-inner-section elementor-element elementor-element-bde8da0 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="bde8da0" data-element_type="section">
						<div className="elementor-container elementor-column-gap-no">
							<div className="elementor-row">
					<div className="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0dfeadf" data-id="0dfeadf" data-element_type="column">
			<div className="elementor-column-wrap elementor-element-populated">
							<div className="elementor-widget-wrap">
						<div className="elementor-element elementor-element-acdc13f elementor-widget elementor-widget-mf-text" data-id="acdc13f" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;booking_name&quot;}" data-widget_type="mf-text.default">
				<div className="elementor-widget-container">
			
		<div className="mf-input-wrapper">
			
			<input
				type="text"
				className="mf-input "
				id="mf-input-text-acdc13f"
				name="booking_name"
				placeholder="${ parent.decodeEntities(`Your name`) } "
									onInput=${parent.handleChange}
					aria-invalid=${validation.errors['booking_name'] ? 'true' : 'false'}
					ref=${el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)}
								/>

							<${validation.ErrorMessage}
					errors=${validation.errors}
					name="booking_name"
					as=${html`<span className="mf-error-message"></span>`}
					/>
			
					</div>

				</div>
				</div>
						</div>
					</div>
		</div>
				<div className="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-806c4e6" data-id="806c4e6" data-element_type="column">
			<div className="elementor-column-wrap elementor-element-populated">
							<div className="elementor-widget-wrap">
						<div className="elementor-element elementor-element-12a4ae5 elementor-widget elementor-widget-mf-number" data-id="12a4ae5" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;booking_age&quot;}" data-widget_type="mf-number.default">
				<div className="elementor-widget-container">
			
		<div className="mf-input-wrapper">
			
			<input
				type="number"
				className="mf-input "
				id="mf-input-mobile-12a4ae5"
				name="booking_age"
				placeholder="${ parent.decodeEntities(`Your age`) } "
									onInput=${parent.handleChange}
					aria-invalid=${validation.errors['booking_age'] ? 'true' : 'false'}
					ref=${el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)}
								/>

							<${validation.ErrorMessage}
					errors=${validation.errors}
					name="booking_age"
					as=${html`<span className="mf-error-message"></span>`}
					/>
			
					</div>

				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section className="elementor-section elementor-inner-section elementor-element elementor-element-d07bf24 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="d07bf24" data-element_type="section">
						<div className="elementor-container elementor-column-gap-no">
							<div className="elementor-row">
					<div className="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e613858" data-id="e613858" data-element_type="column">
			<div className="elementor-column-wrap elementor-element-populated">
							<div className="elementor-widget-wrap">
						<div className="elementor-element elementor-element-1d6d015 elementor-widget elementor-widget-mf-number" data-id="1d6d015" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;booking_phone&quot;}" data-widget_type="mf-number.default">
				<div className="elementor-widget-container">
			
		<div className="mf-input-wrapper">
			
			<input
				type="number"
				className="mf-input "
				id="mf-input-mobile-1d6d015"
				name="booking_phone"
				placeholder="${ parent.decodeEntities(`Phone number`) } "
									onInput=${parent.handleChange}
					aria-invalid=${validation.errors['booking_phone'] ? 'true' : 'false'}
					ref=${el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)}
								/>

							<${validation.ErrorMessage}
					errors=${validation.errors}
					name="booking_phone"
					as=${html`<span className="mf-error-message"></span>`}
					/>
			
					</div>

				</div>
				</div>
						</div>
					</div>
		</div>
				<div className="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5fb770d" data-id="5fb770d" data-element_type="column">
			<div className="elementor-column-wrap elementor-element-populated">
							<div className="elementor-widget-wrap">
						<div className="elementor-element elementor-element-f869dd6 elementor-widget elementor-widget-mf-email" data-id="f869dd6" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;booking_email&quot;}" data-widget_type="mf-email.default">
				<div className="elementor-widget-container">
			
		<div className="mf-input-wrapper">
			
			<input type="email"  defaultValue="" className="mf-input " id="mf-input-email-f869dd6" name="booking_email" placeholder="${ parent.decodeEntities(`Email Address`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['booking_email'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","emailMessage":"Please enter a valid Email address","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)}
				/>

					<${validation.ErrorMessage} errors=${validation.errors} name="booking_email" as=${html`<span className="mf-error-message"></span>`}
				/>
			
					</div>

		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section className="elementor-section elementor-inner-section elementor-element elementor-element-c7b3bf8 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="c7b3bf8" data-element_type="section">
						<div className="elementor-container elementor-column-gap-no">
							<div className="elementor-row">
					<div className="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-66c748b" data-id="66c748b" data-element_type="column">
			<div className="elementor-column-wrap elementor-element-populated">
							<div className="elementor-widget-wrap">
						<div className="elementor-element elementor-element-4bc5ece elementor-widget elementor-widget-mf-date" data-id="4bc5ece" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;booking_date&quot;}" data-widget_type="mf-date.default">
				<div className="elementor-widget-container">
					
		
		<div className="mf-input-wrapper">
			
			<${props.Flatpickr}
					name="booking_date"
					className="mf-input mf-date-input mf-left-parent "
					placeholder="${ parent.decodeEntities(`Appointment Date`) } "
					options=${{"minDate":"yes","maxDate":"","dateFormat":"m-d-Y","enableTime":"","disable":[],"mode":"single","static":true,"disableMobile":true,"time_24hr":false}}
					value=${parent.getValue('booking_date')}
					onInput=${parent.handleDateTime}
					aria-invalid=${validation.errors['booking_date'] ? 'true' : 'false'}
					ref=${el => props.DateWidget(
							el, 
							'', 
							{"message":"This field is required.","required":true},  
							register, 
							parent 
						)}
					/>

							<${validation.ErrorMessage}
					errors=${validation.errors}
					name="booking_date"
					as=${html`<span className="mf-error-message"></span>`}
					/>
			
					</div>

		
				</div>
				</div>
						</div>
					</div>
		</div>
				<div className="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-731148e" data-id="731148e" data-element_type="column">
			<div className="elementor-column-wrap elementor-element-populated">
							<div className="elementor-widget-wrap">
						<div className="elementor-element elementor-element-c8cfa19 elementor-widget elementor-widget-mf-time" data-id="c8cfa19" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;booking_time&quot;}" data-widget_type="mf-time.default">
				<div className="elementor-widget-container">
					
		
		<div className="mf-input-wrapper">
						
			<${props.Flatpickr}
					name="booking_time"
					className="mf-input mf-date-input mf-left-parent "
					placeholder="${ parent.decodeEntities(`Select Time`) } "
					options=${{"enableTime":true,"dateFormat":"h:i K","noCalendar":true,"time_24hr":false,"static":true}}
					value=${parent.getValue('booking_time')}
					onInput=${parent.handleDateTime}
					aria-invalid=${validation.errors['booking_time'] ? 'true' : 'false'}
					ref=${register({ name: "booking_time" }, parent.activateValidation({"message":"This field is required.","required":true}))}
					/>

							<${validation.ErrorMessage}
					errors=${validation.errors}
					name="booking_time"
					as=${html`<span className="mf-error-message"></span>`}
					/>
						
					</div>
		
		
				</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<div className="elementor-element elementor-element-6435bdc elementor-widget elementor-widget-mf-textarea" data-id="6435bdc" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;booking_message&quot;}" data-widget_type="mf-textarea.default">
				<div className="elementor-widget-container">
			
		<div className="mf-input-wrapper">
			
			<textarea className="mf-input mf-textarea " id="mf-input-text-area-6435bdc"
				name="booking_message" 
				placeholder="${ parent.decodeEntities(`Type your essential message here...`) } "
				cols="30" rows="10"
									onInput=${ parent.handleChange }
					aria-invalid=${validation.errors['booking_message'] ? 'true' : 'false'}
					ref=${ el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el) }
								></textarea>

							<${validation.ErrorMessage}
					errors=${validation.errors}
					name="booking_message"
					as=${html`<span className="mf-error-message"></span>`}
					/>
			
					</div>

				</div>
				</div>
				<div className="elementor-element elementor-element-191aba1 elementor-widget elementor-widget-mf-button" data-id="191aba1" data-element_type="widget" data-widget_type="mf-button.default">
				<div className="elementor-widget-container">
					<div className="mf-btn-wraper " data-mf-form-conditional-logic-requirement="">
							<button type="submit" className="metform-btn metform-submit-btn " id="">
					<i aria-hidden="true" className="fas fa-check-circle"></i>					<span>${ parent.decodeEntities(`Make an Appointment`) } </span>
				</button>
			        </div>
        		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
						</div>
					</div>
							`}
					</div>

					${is_dummy_markup ? message_position === 'bottom' ? props.ResponseDummyMarkup(message_successIcon, message_proClass) : '' : ''}
					${is_dummy_markup ? ' ' : message_position === 'bottom' ? props.SubmitResponseMarkup`${parent}${state}${message_successIcon}${message_errorIcon}${message_proClass}` : ''}
				
				</form>
			`
		</script>

					</div>
		</div>
		</div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-5d8ecd4 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="5d8ecd4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-581ed1a" data-id="581ed1a" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-8f07a53 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8f07a53" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-ce289d1" data-id="ce289d1" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-17df0c7 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="17df0c7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:0}" data-widget_type="elementskit-heading.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" ><div class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-"><h2 class="ekit-heading--title elementskit-section-title ">
					Gallery of Annaamalai Ortho &amp; Spine Centre, Chennai
				</h2></div></div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-0856ea6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0856ea6" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5aa562b elementor-invisible" data-id="5aa562b" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:200}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-029862a ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="029862a" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_bottom">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <i aria-hidden="true" class="elementkit-infobox-icon fas fa-heartbeat"></i>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Chennai Spine Care                </h3>
                                                    <div class="box-footer disable_hover_button">
                    <div class="btn-wraper">
                                                            <a href="#" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">
                                        <i aria-hidden="true" class="fasicon icon-plus"></i>                                                                            </a>
                                                        </div>
                </div>
                    </div>
        
        
                </div>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-cadf912 elementor-invisible" data-id="cadf912" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:400}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-842cfe9 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="842cfe9" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_bottom">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <i aria-hidden="true" class="elementkit-infobox-icon fas fa-heartbeat"></i>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Chennai Spine Care                </h3>
                                                    <div class="box-footer disable_hover_button">
                    <div class="btn-wraper">
                                                            <a href="#" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">
                                                                                        <i class="icon icon-plus" aria-hidden="true"></i>
                                                                                                                            </a>
                                                        </div>
                </div>
                    </div>
        
        
                </div>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-710e7a7 elementor-invisible" data-id="710e7a7" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:600}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-eea9b03 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="eea9b03" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_bottom">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <i aria-hidden="true" class="elementkit-infobox-icon fas fa-heartbeat"></i>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Chennai Spine Care                </h3>
                                                    <div class="box-footer disable_hover_button">
                    <div class="btn-wraper">
                                                            <a href="#" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">
                                                                                        <i class="icon icon-plus" aria-hidden="true"></i>
                                                                                                                            </a>
                                                        </div>
                </div>
                    </div>
        
        
                </div>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-1cdc1a3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1cdc1a3" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-9c60f5e elementor-invisible" data-id="9c60f5e" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:8}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-2cea015 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="2cea015" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_bottom">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <i aria-hidden="true" class="elementkit-infobox-icon fas fa-heartbeat"></i>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Chennai Spine Care                </h3>
                                                    <div class="box-footer disable_hover_button">
                    <div class="btn-wraper">
                                                            <a href="#" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">
                                                                                        <i class="icon icon-plus" aria-hidden="true"></i>
                                                                                                                            </a>
                                                        </div>
                </div>
                    </div>
        
        
                </div>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-119a974 elementor-invisible" data-id="119a974" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:1000}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6bd7a6a ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="6bd7a6a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_bottom">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <i aria-hidden="true" class="elementkit-infobox-icon fas fa-heartbeat"></i>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Chennai Spine Care                </h3>
                                                    <div class="box-footer disable_hover_button">
                    <div class="btn-wraper">
                                                            <a href="#" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">
                                                                                        <i class="icon icon-plus" aria-hidden="true"></i>
                                                                                                                            </a>
                                                        </div>
                </div>
                    </div>
        
        
                </div>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-c6cf597 elementor-invisible" data-id="c6cf597" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:1200}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-6b10e38 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="6b10e38" data-element_type="widget" data-widget_type="elementskit-icon-box.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >        <!-- link opening -->
                <!-- end link opening -->

        <div class="elementskit-infobox text-center text- icon-top-align elementor-animation-  gradient-active  hover_from_bottom">
                    <div class="elementskit-box-header elementor-animation-">
                <div class="elementskit-info-box-icon  ">
                    <i aria-hidden="true" class="elementkit-infobox-icon fas fa-heartbeat"></i>
                </div>
          </div>
                        <div class="box-body">
                            <h3 class="elementskit-info-box-title">
                    Chennai Spine Care                </h3>
                                                    <div class="box-footer disable_hover_button">
                    <div class="btn-wraper">
                                                            <a href="#" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">
                                                                                        <i class="icon icon-plus" aria-hidden="true"></i>
                                                                                                                            </a>
                                                        </div>
                </div>
                    </div>
        
        
                </div>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-add235f elementor-widget elementor-widget-elementskit-button" data-id="add235f" data-element_type="widget" data-widget_type="elementskit-button.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >		<div class="ekit-btn-wraper">
							<a href="https://www.chennaispinecare.com/gallery/" class="elementskit-btn  whitespace--normal" >
					View All
					<i aria-hidden="true" class="fasicon icon-chevron-right"></i>
				</a>
						</div>
        </div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-76dcae4 xs_overflow elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="76dcae4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8018063" data-id="8018063" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-ca96d47 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="ca96d47" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="elementskit-heading.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" ><div class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-"><h2 class="ekit-heading--title elementskit-section-title ">
					What Our Patients Say
				</h2></div></div>		</div>
				</div>
				<div class="elementor-element elementor-element-8603dca medizco_testimonials mx-auto mw-100 elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-elementskit-testimonial" data-id="8603dca" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:300}" data-widget_type="elementskit-testimonial.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" ><div class="elementskit-testimonial-slider slick-slider arrow_inside " data-config="{&quot;rtl&quot;:false,&quot;arrows&quot;:true,&quot;dots&quot;:false,&quot;pauseOnHover&quot;:false,&quot;autoplay&quot;:false,&quot;speed&quot;:1000,&quot;slidesPerGroup&quot;:1,&quot;slidesPerView&quot;:1,&quot;loop&quot;:true,&quot;breakpoints&quot;:{&quot;320&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1},&quot;768&quot;:{&quot;slidesPerView&quot;:2,&quot;slidesPerGroup&quot;:1},&quot;1024&quot;:{&quot;slidesPerView&quot;:1,&quot;slidesPerGroup&quot;:1}}}">
	<div class="swiper-container">
        <div class="slick-list swiper-wrapper">
							<div class="swiper-slide">
					<div class="slick-slide">
						<div class="elementskit-testimonial-inner">
							<div class="elementskit-single-testimonial-slider ekit_testimonial_style_2">
								<div class="elementskit-commentor-content">
																			<div class="elementskit-client_logo">
																						<img width="38" height="38" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2038%2038'%3E%3C/svg%3E" class="elementskit-testimonial-client-logo" alt="" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2019/08/quote-icon.png" /><noscript><img width="38" height="38" src="https://www.chennaispinecare.com/wp-content/uploads/2019/08/quote-icon.png" class="elementskit-testimonial-client-logo" alt="" /></noscript>										</div>
																			<p>I had problem of L4-L5 disc prolapse, I was unable to walk for more than 2 months, I tried everything like traction, rest, physical therapy, epidural steroid injection. I was unable to stand properly, then I visit vignesh Sir, he suggests me to go for surgery and ensured me that on same day of surgery. i will stand properly. Then I underwent surgery. I was able to stand &amp; walk on same day of surgery. Till now I don't have any problem. I had best experience with Dr. Vignesh Sir. he was so polite.</p>
																												<span class="elementskit-border-hr"></span>
																		<span class="elementskit-profile-info">
										<strong class="elementskit-author-name">Naraine Dutt</strong>
										<span class="elementskit-author-des"></span>
									</span>
								</div>
															</div>
						</div>
					</div>
				</div>
							<div class="swiper-slide">
					<div class="slick-slide">
						<div class="elementskit-testimonial-inner">
							<div class="elementskit-single-testimonial-slider ekit_testimonial_style_2">
								<div class="elementskit-commentor-content">
																			<div class="elementskit-client_logo">
																						<img width="38" height="38" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2038%2038'%3E%3C/svg%3E" class="elementskit-testimonial-client-logo" alt="" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2019/08/quote-icon.png" /><noscript><img width="38" height="38" src="https://www.chennaispinecare.com/wp-content/uploads/2019/08/quote-icon.png" class="elementskit-testimonial-client-logo" alt="" /></noscript>										</div>
																			<p>Best Orthopaedic doctor who understands patient's problems and interacts well with patients. Also, doctor gives timely response and solves all patient queries prominently and patiently.</p>
																												<span class="elementskit-border-hr"></span>
																		<span class="elementskit-profile-info">
										<strong class="elementskit-author-name">Bharat Ravaria</strong>
										<span class="elementskit-author-des"></span>
									</span>
								</div>
															</div>
						</div>
					</div>
				</div>
							<div class="swiper-slide">
					<div class="slick-slide">
						<div class="elementskit-testimonial-inner">
							<div class="elementskit-single-testimonial-slider ekit_testimonial_style_2">
								<div class="elementskit-commentor-content">
																			<div class="elementskit-client_logo">
																						<img width="38" height="38" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2038%2038'%3E%3C/svg%3E" class="elementskit-testimonial-client-logo" alt="" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2019/08/quote-icon.png" /><noscript><img width="38" height="38" src="https://www.chennaispinecare.com/wp-content/uploads/2019/08/quote-icon.png" class="elementskit-testimonial-client-logo" alt="" /></noscript>										</div>
																			<p>Dr. Vignesh Pushparaj is professional and amazing in his field. He is the one of the best doctors I have met in recent times. He is highly recommended.</p>
																												<span class="elementskit-border-hr"></span>
																		<span class="elementskit-profile-info">
										<strong class="elementskit-author-name">Dhanush Kumar</strong>
										<span class="elementskit-author-des"></span>
									</span>
								</div>
															</div>
						</div>
					</div>
				</div>
					</div>
	</div>
	<ul class="slick-dots swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></ul>
			<button type="button" class="slick-prev slick-arrow"><i class="fasicon icon-arrow-left"></i></button>
		<button type="button" class="slick-next slick-arrow"><i class="fasicon icon-arrow-right"></i></button>
	</div>
</div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
						</div>
					</div>
		  </div><!-- .builder-content -->
</div><!-- .home-page-contents -->


		<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
			<div class='footer-width-fixer'>		<div data-elementor-type="wp-post" data-elementor-id="6744" class="elementor elementor-6744" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-405c9b1b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="405c9b1b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1ffaef0c elementor-invisible" data-id="1ffaef0c" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:0}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-391172f6 elementor-widget elementor-widget-image" data-id="391172f6" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
													<a href="https://www.northeastwebdesigner.com/medicals/">
							<img width="160" height="60" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20160%2060'%3E%3C/svg%3E" class="attachment-full size-full" alt="Annaamalai-ortho logo" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/Annaamalai-ortho-and-spine-center-.png" /><noscript><img width="160" height="60" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/Annaamalai-ortho-and-spine-center-.png" class="attachment-full size-full" alt="Annaamalai-ortho logo" /></noscript>								</a>
														</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-25371d05 elementor-widget elementor-widget-text-editor" data-id="25371d05" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p><strong>Dr Vignesh Pushparaj</strong></p><p style="text-align: justify;">MBBS from Rajah Muthiah Medical College, AOSpine(Asia- pacific) long-time fellowship at Park Clinic Kolkata<a href="https://www.indiqaanalytics.com/" target="_blank" rel="noopener">,</a> fellowships (Paediatric spine deformity) offered by International Society for Spine Centres (ISOC) at Sint Maartenskliniek, Netherlands and Adult complex spine surgery by Indo American Spine Alliance(IASA) at the University of Michigan, USA</p>					</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-444e3b99 footer_info_list elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="444e3b99" data-element_type="widget" data-widget_type="icon-list.default">
				<div class="elementor-widget-container">
					<ul class="elementor-icon-list-items">
							<li class="elementor-icon-list-item">
											<a href="https://www.google.com/maps/place/29+Union+Square+W,+New+York,+NY+10003,+USA/@40.7365143,-73.9921229,18z/data=!3m1!4b1!4m5!3m4!1s0x89c259a27871542b:0x829874d211204097!8m2!3d40.7365123!4d-73.9910286" target="_blank">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-map-marker-alt"></i>						</span>
										<span class="elementor-icon-list-text">15-A, Kottivakkam Kuppam Road, Valmiki Nagar, Thiruvanmiyur, <br> Chennai, Tamil Nadu – 600 041</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="tel:+919150-955-655">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-phone-alt"></i>						</span>
										<span class="elementor-icon-list-text">(+91) 9150-955-655</span>
											</a>
									</li>
								<li class="elementor-icon-list-item">
											<a href="mailto:vigneshpushparaj@hotmail.com">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-envelope"></i>						</span>
										<span class="elementor-icon-list-text">vigneshpushparaj@hotmail.com</span>
											</a>
									</li>
						</ul>
				</div>
				</div>
				<div class="elementor-element elementor-element-24ff98a2 elementor-widget__width-auto elementor-widget elementor-widget-elementskit-social-media" data-id="24ff98a2" data-element_type="widget" data-widget_type="elementskit-social-media.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >			 <ul class="ekit_social_media">
														<li class="elementor-repeater-item-0533b79">
					    <a
						href="https://www.facebook.com/vignesh.pushparaj" target="_blank" class="facebook" >
														
							<i aria-hidden="true" class="fasicon icon-facebook"></i>									
                                                                                                            </a>
                    </li>
                    														<li class="elementor-repeater-item-5c5bb1d">
					    <a
						href="https://www.linkedin.com/in/vignesh-pushparaj-a0a742ab/" target="_blank" class="linkedin" >
														
							<i aria-hidden="true" class="fasicon icon-linkedin"></i>									
                                                                                                            </a>
                    </li>
                    														<li class="elementor-repeater-item-aafca38">
					    <a
						href="https://www.youtube.com/channel/UCGc0WwDIJwAmErrjyCoRoCQ" target="_blank" class="youtube" >
														
							<i aria-hidden="true" class="fasicon icon-youtube"></i>									
                                                                                                            </a>
                    </li>
                    							</ul>
		</div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-797fa3b7 elementor-invisible" data-id="797fa3b7" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:300}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-11cedd36 elementor-widget elementor-widget-heading" data-id="11cedd36" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h4 class="elementor-heading-title elementor-size-default">Useful Links</h4>		</div>
				</div>
				<div class="elementor-element elementor-element-6acad86 elementor-widget elementor-widget-elementskit-page-list" data-id="6acad86" data-element_type="widget" data-widget_type="elementskit-page-list.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >		<div class="elementor-icon-list-items ">
							<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/" class="elementor-repeater-item-bc4fcd3 ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Home </span>
															</span>
						</div>
											</a>
				</div>
								<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/about-dr-vignesh-pushparaj/" class="elementor-repeater-item-a43649c ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">About Us</span>
															</span>
						</div>
											</a>
				</div>
								<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/blog/" class="elementor-repeater-item-a8b6fa5 ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Blogs &amp; Articles</span>
															</span>
						</div>
											</a>
				</div>
								<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/contact/" class="elementor-repeater-item-494d3f2 ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Contact</span>
															</span>
						</div>
											</a>
				</div>
						</div>
		</div>		</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-20e11854 elementor-invisible" data-id="20e11854" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:300}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-515550d9 elementor-widget elementor-widget-heading" data-id="515550d9" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h4 class="elementor-heading-title elementor-size-default">Services</h4>		</div>
				</div>
				<div class="elementor-element elementor-element-66bdd813 elementor-widget elementor-widget-elementskit-page-list" data-id="66bdd813" data-element_type="widget" data-widget_type="elementskit-page-list.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" >		<div class="elementor-icon-list-items ">
							<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/service/back-and-neck-pain-management/" class="elementor-repeater-item-bc4fcd3 ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Back and Neck Pain Surgery</span>
															</span>
						</div>
											</a>
				</div>
								<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/service/cervical-spondylosis/" class="elementor-repeater-item-cd6adeb ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Cervical Surgery</span>
															</span>
						</div>
											</a>
				</div>
								<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/service/chronic-pain-management/" class="elementor-repeater-item-3f91987 ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Chronic Pain Surgery</span>
															</span>
						</div>
											</a>
				</div>
								<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/service/spine-fracture-management/" class="elementor-repeater-item-ce7706c ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Spine Fracture Surgery</span>
															</span>
						</div>
											</a>
				</div>
								<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/service/microlumbar-disccectomy-tubular-disccectomy/" class="elementor-repeater-item-3e92f6a ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Microlumbar Disccectomy / Tubular Disccectomy</span>
															</span>
						</div>
											</a>
				</div>
								<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/service/injection-procedures-in-spine/" class="elementor-repeater-item-276add4 ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Spine Injection Procedures</span>
															</span>
						</div>
											</a>
				</div>
								<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/service/osteoporotic-spine-fracture-management/" class="elementor-repeater-item-866ee6e ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Osteoporotic Spine Fracture Surgery</span>
															</span>
						</div>
											</a>
				</div>
								<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/service/minimal-invasive-spine-surgery/" class="elementor-repeater-item-34d3750 ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Minimal Invasive Spine Surgery (MIS)</span>
															</span>
						</div>
											</a>
				</div>
								<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/service/scoliosis-spine-deformity-correction/" class="elementor-repeater-item-959ab56 ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Scoliosis Correction Surgery</span>
															</span>
						</div>
											</a>
				</div>
								<div class="elementor-icon-list-item   " >
					<a  target=_blank rel=""  href="https://www.chennaispinecare.com/service/spine-tumour-surgeries/" class="elementor-repeater-item-cc047fc ekit_badge_left">
						<div class="ekit_page_list_content">
														<span class="elementor-icon-list-text">
								<span class="ekit_page_list_title_title">Spine Tumour Surgery</span>
															</span>
						</div>
											</a>
				</div>
						</div>
		</div>		</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-692bd61b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="692bd61b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-63ed0ad2 elementor-invisible" data-id="63ed0ad2" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInDown&quot;,&quot;animation_delay&quot;:300}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-e38ac85 copyright_text elementor-widget elementor-widget-text-editor" data-id="e38ac85" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p style="text-align: center;"><span style="color: #000000;"><b>Developed By <a style="color: #000000;" href="http://www.growthelephant.com">Growth Elephant</a></b></span></p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
						</div>
					</div>
		</div>		</footer>
	</div><!-- #page -->
<!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v3.3.10 -->  
            <div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-4  " id="ht-ctc-chat"  
                style="display: none;  position: fixed; bottom: 15px; right: 15px;"   >
                                <div class="ht_ctc_style ht_ctc_chat_style">
                
<div class="chip ctc-analytics" style="display:flex;justify-content: center;align-items: center;background-color:#e4e4e4;color:#7f7d7d;padding:0 12px;border-radius:25px;font-size:13px;line-height:32px; ">
            <span style="margin:0 8px 0 -12px;;order:0;"><svg style="pointer-events:none; display: block; height:32px; width:32px;" width="32px" height="32px" viewBox="0 0 1219.547 1225.016">
        <path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z"/>
        <linearGradient id="htwaicona-chat-s4" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
            <stop offset="0" stop-color="#20b038"/>
            <stop offset="1" stop-color="#60d66a"/>
        </linearGradient>
        <path fill="url(#htwaicona-chat-s4)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z"/>
        <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)"/>
        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z"/>
        <path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z"/>
    </svg></span>
            <span class="ctc_cta">WhatsApp us</span>
</div>                </div>
            </div>
                        <span class="ht_ctc_chat_data" 
                data-no_number=""
                data-settings="{&quot;number&quot;:&quot;919150955655&quot;,&quot;pre_filled&quot;:&quot;&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 15px; right: 15px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animations&quot;,&quot;web&quot;:&quot;y&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;}" 
            ></span>
            


	<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
			<script type="rocketlazyloadscript" data-rocket-type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
			err += "</div>";
				var slider = document.getElementById(sliderID); slider.innerHTML = err; slider.style.display = "block";
			}
		}
		</script>









<script type='text/javascript' id='ht_ctc_app_js-js-extra'>
/* <![CDATA[ */
var ht_ctc_chat_var = {"number":"919150955655","pre_filled":"","dis_m":"show","dis_d":"show","css":"display: none; cursor: pointer; z-index: 99999999;","pos_d":"position: fixed; bottom: 15px; right: 15px;","pos_m":"position: fixed; bottom: 15px; right: 15px;","schedule":"no","se":"150","ani":"no-animations","web":"y","ga":"yes","fb":"yes"};
/* ]]> */
</script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/plugins/click-to-chat-for-whatsapp/new/inc/assets/js/332.app.js?ver=1632330083' id='ht_ctc_app_js-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.5.6.0' id='jquery-blockui-js' defer></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/www.chennaispinecare.com\/?page_id=4838","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=5.6.0' id='wc-add-to-cart-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.5.6.0' id='js-cookie-js' defer></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=5.6.0' id='woocommerce-js' defer></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_376ff557bd1923ef16ab895a039173ca","fragment_name":"wc_fragments_376ff557bd1923ef16ab895a039173ca","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=5.6.0' id='wc-cart-fragments-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='rocket-browser-checker-js-after'>
"use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
<script type='text/javascript' id='rocket-preload-links-js-extra'>
/* <![CDATA[ */
var RocketPreloadLinksConfig = {"excludeUris":"\/(.+\/)?feed\/?.+\/?|\/(?:.+\/)?embed\/|\/wc-api\/v(.*)|\/(index\\.php\/)?wp\\-json(\/.*|$)|\/wp-admin\/|\/logout\/|\/wp-login.php","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|php|pdf|html|htm","siteUrl":"https:\/\/www.chennaispinecare.com","onHoverDelay":"100","rateThrottle":"3"};
/* ]]> */
</script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='rocket-preload-links-js-after'>
(function() {
"use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
}());
</script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js?ver=1632330083' id='elementskit-framework-js-frontend-js' defer></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='elementskit-framework-js-frontend-js-after'>
		var elementskit = {
            resturl: 'https://www.chennaispinecare.com/wp-json/elementskit/v1/',
        }

		
</script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js?ver=1632330083' id='ekit-widget-scripts-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/medizco-essential/modules/parallax/assets/js/TweenMax.min.js?ver=1.0.2' id='tweenmax-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/medizco-essential/modules/parallax/assets/js/jquery.easing.1.3.js?ver=1.0.2' id='jquery-easing-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/medizco-essential/modules/parallax/assets/js/tilt.jquery.min.js?ver=1.0.2' id='tilt-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/medizco-essential/modules/parallax/assets/js/anime.js?ver=1.0.2' id='animejs-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/medizco-essential/modules/parallax/assets/js/magician.js?ver=1.0.2' id='magicianjs-js' defer></script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/plugins/medizco-essential/modules/elements/chart/assets/js/chart.js?ver=1632330083' id='chart-kit-js-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/themes/medizco/assets/js/bootstrap.min.js?ver=2.4' id='bootstrap-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/themes/medizco/assets/js/slick.min.js?ver=2.4' id='slick-js' defer></script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/themes/medizco/assets/js/script.js?ver=1632330083' id='medizco-script-js' defer></script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/plugins/metform/public/assets/js/htm.js?ver=1632330083' id='htm-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-includes/js/dist/vendor/lodash.min.js?ver=4.17.19' id='lodash-js'></script>
<script type="rocketlazyloadscript" data-rocket-type='text/javascript' id='lodash-js-after'>
window.lodash = _.noConflict();
</script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.7' id='regenerator-runtime-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-includes/js/dist/vendor/react.min.js?ver=16.13.1' id='react-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-includes/js/dist/vendor/react-dom.min.js?ver=16.13.1' id='react-dom-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-includes/js/dist/escape-html.min.js?ver=dcba9e40e8782c7d5883426934834b3e' id='wp-escape-html-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-includes/js/dist/element.min.js?ver=43a121e875f299c637e1115581bee905' id='wp-element-js' defer></script>
<script type='text/javascript' id='metform-app-js-extra'>
/* <![CDATA[ */
var mf = {"postType":"page","restURI":"https:\/\/www.chennaispinecare.com\/wp-json\/metform\/v1\/forms\/views\/"};
/* ]]> */
</script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/plugins/metform/public/assets/js/app.js?ver=1632330083' id='metform-app-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.4.3' id='elementor-webpack-runtime-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.4.3' id='elementor-frontend-modules-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-includes/js/jquery/ui/core.min.js?ver=1.12.1' id='jquery-ui-core-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.4.3' id='share-link-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js' defer></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.4.3","is_static":false,"experimentalFeatures":{"e_import_export":true,"landing-pages":true,"elements-color-picker":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/www.chennaispinecare.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":2,"title":"Best%20Orthopaedic%20Spine%20Surgeon%20%26%20Neuro%20Specialist%20Doctor%20in%20Chennai","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.4.3' id='elementor-frontend-js' defer></script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.js?ver=1632330083' id='animate-circle-js' defer></script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js?ver=1632330083' id='elementskit-elementor-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/medizco-essential/modules/parallax/assets/js/main.js?ver=1.0.2' id='elementskit-parallax-script-js' defer></script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/plugins/medizco-essential/modules/sticky-content/assets/js/jquery.sticky.js?ver=1632330083' id='elementskit-sticky-content-script-js' defer></script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/plugins/medizco-essential/modules/sticky-content/assets/js/init.js?ver=1632330083' id='elementskit-sticky-content-script-init-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/themes/medizco/assets/js/mixitup.min.js?ver=2.4' id='mixitup-js' defer></script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/themes/medizco/assets/js/elementor.js?ver=1632330083' id='medizco-main-elementor-js' defer></script>
<script data-minify="1" type='text/javascript' src='https://www.chennaispinecare.com/wp-content/cache/min/1/wp-content/themes/medizco/assets/js/widget-scripts-pro.js?ver=1632330083' id='medizco-widget-scripts-pro-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js?ver=3.4.3' id='preloaded-modules-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-includes/js/underscore.min.js?ver=1.13.1' id='underscore-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/mp-timetable/media/js/mptt-functions.min.js?ver=2.4.2' id='mptt-functions-js' defer></script>
<script type='text/javascript' id='mptt-event-object-js-extra'>
/* <![CDATA[ */
var MPTT = {"table_class":"mptt-shortcode-table"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/mp-timetable/media/js/events/event.min.js?ver=2.4.2' id='mptt-event-object-js' defer></script>
<script type='text/javascript' src='https://www.chennaispinecare.com/wp-content/plugins/mp-timetable/media/js/mptt-elementor-editor.min.js?ver=2.4.2' id='mptt-editor-panel-js-js' defer></script>
<script>window.lazyLoadOptions={elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}};window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://www.chennaispinecare.com/wp-content/plugins/wp-rocket/assets/js/lazyload/16.1/lazyload.min.js"></script><script>function lazyLoadThumb(e){var t='<img loading="lazy" data-lazy-src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"><noscript><img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"></noscript>',a='<div class="play"></div>';return t.replace("ID",e)+a}function lazyLoadYoutubeIframe(){var e=document.createElement("iframe"),t="ID?autoplay=1";t+=0===this.dataset.query.length?'':'&'+this.dataset.query;e.setAttribute("src",t.replace("ID",this.dataset.src)),e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen","1"),e.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"),this.parentNode.replaceChild(e,this)}document.addEventListener("DOMContentLoaded",function(){var e,t,a=document.getElementsByClassName("rll-youtube-player");for(t=0;t<a.length;t++)e=document.createElement("div"),e.setAttribute("data-id",a[t].dataset.id),e.setAttribute("data-query", a[t].dataset.query),e.setAttribute("data-src", a[t].dataset.src),e.innerHTML=lazyLoadThumb(a[t].dataset.id),e.onclick=lazyLoadYoutubeIframe,a[t].appendChild(e)});</script></body>
</html> 

<!-- Cache served by breeze CACHE - Last modified: Wed, 22 Sep 2021 17:01:23 GMT -->
";s:7:"headers";a:3:{i:0;a:2:{s:4:"name";s:7:"Expires";s:5:"value";s:29:"Wed, 17 Aug 2005 00:00:00 GMT";}i:1;a:2:{s:4:"name";s:13:"Cache-Control";s:5:"value";s:62:"no-store, no-cache, must-revalidate, post-check=0, pre-check=0";}i:2;a:2:{s:4:"name";s:6:"Pragma";s:5:"value";s:8:"no-cache";}}}