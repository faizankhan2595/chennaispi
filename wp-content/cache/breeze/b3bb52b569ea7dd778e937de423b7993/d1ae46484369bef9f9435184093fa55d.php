a:2:{s:4:"body";s:117158:"<!DOCTYPE html>
<html lang="en-US"
	prefix="og: https://ogp.me/ns#" >
<head><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>class RocketLazyLoadScripts{constructor(e){this.triggerEvents=e,this.eventOptions={passive:!0},this.userEventListener=this.triggerListener.bind(this),this.delayedScripts={normal:[],async:[],defer:[]},this.allJQueries=[]}_addUserInteractionListener(e){this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventListener,e.eventOptions)))}_removeUserInteractionListener(e){this.triggerEvents.forEach((t=>window.removeEventListener(t,e.userEventListener,e.eventOptions)))}triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}async _loadEverythingNow(){this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async),await this._triggerDOMContentLoaded(),await this._triggerWindowLoad(),window.dispatchEvent(new Event("rocket-allScriptsLoaded"))}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._requestAnimFrame(),new Promise((t=>{const n=document.createElement("script");let i;[...e.attributes].forEach((e=>{let t=e.nodeName;"type"!==t&&("data-rocket-type"===t&&(t="type",i=e.nodeValue),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")&&this._isValidScriptType(i)?(n.addEventListener("load",t),n.addEventListener("error",t)):(n.text=e.text,t()),e.parentNode.replaceChild(n,e)}))}_isValidScriptType(e){return!e||""===e||"string"==typeof e&&["text/javascript","text/x-javascript","text/ecmascript","text/jscript","application/javascript","application/x-javascript","application/ecmascript","application/jscript","module"].includes(e.toLowerCase())}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){var e=document.createDocumentFragment();[...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async].forEach((t=>{const n=t.getAttribute("src");if(n){const t=document.createElement("link");t.href=n,t.rel="preload",t.as="script",e.appendChild(t)}})),document.head.appendChild(e)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){const n=e[t];Object.defineProperty(e,t,{get:n||function(){},set:n=>{e["rocket"+t]=n}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._requestAnimFrame(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._requestAnimFrame(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._requestAnimFrame(),window.dispatchEvent(new Event("rocket-load")),await this._requestAnimFrame(),window.rocketonload&&window.rocketonload(),await this._requestAnimFrame(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),window.dispatchEvent(new Event("rocket-pageshow")),await this._requestAnimFrame(),window.rocketonpageshow&&window.rocketonpageshow()}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,i=document.createRange(),r=n.parentElement;let a=e.get(n);void 0===a&&(a=n.nextSibling,e.set(n,a));const o=document.createDocumentFragment();i.setStart(o,0),o.appendChild(i.createContextualFragment(t)),r.insertBefore(o,a)}}async _requestAnimFrame(){return new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts(["keydown","mousemove","touchmove","touchstart","touchend","touchcancel","touchforcechange","wheel"]);e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <title>Contact Us - Get in Touch with Dr. Durgesh Pushparaj</title><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3Aregular%2C400%2C700%2C900%7CExo%3A700%2C400%2C900%7CRoboto%3A400%2C500%2C700%7CExo%3A300%2C300i%2C400%2C700%2C700i%2C900%7CExo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap" /><link rel="stylesheet" href="https://www.chennaispinecare.com/wp-content/cache/min/1/63e9ef82a365bb3a59b4b13ed4f1792d.css" media="all" data-minify="1" />

		<!-- All in One SEO 4.1.3.3 -->
		<meta name="description" content="Get in Touch with Dr. Durgesh Pushparaj for your Spine Injuries. Dr. Vignesh Pushparaj is the Orthopaedic Best Spine Surgery Specialist in Chennai, India."/>
		<link rel="canonical" href="https://www.chennaispinecare.com/contact/" />
		<meta property="og:site_name" content="Chennai Spine Care - Chennai Spine Care" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Contact Us - Get in Touch with Dr. Durgesh Pushparaj" />
		<meta property="og:description" content="Get in Touch with Dr. Durgesh Pushparaj for your Spine Injuries. Dr. Vignesh Pushparaj is the Orthopaedic Best Spine Surgery Specialist in Chennai, India." />
		<meta property="og:url" content="https://www.chennaispinecare.com/contact/" />
		<meta property="article:published_time" content="2019-09-02T08:10:40Z" />
		<meta property="article:modified_time" content="2021-09-17T12:57:08Z" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:domain" content="www.chennaispinecare.com" />
		<meta name="twitter:title" content="Contact Us - Get in Touch with Dr. Durgesh Pushparaj" />
		<meta name="twitter:description" content="Get in Touch with Dr. Durgesh Pushparaj for your Spine Injuries. Dr. Vignesh Pushparaj is the Orthopaedic Best Spine Surgery Specialist in Chennai, India." />
		<script type="application/ld+json" class="aioseo-schema">
			{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebSite","@id":"https:\/\/www.chennaispinecare.com\/#website","url":"https:\/\/www.chennaispinecare.com\/","name":"Chennai Spine Care","description":"Chennai Spine Care","publisher":{"@id":"https:\/\/www.chennaispinecare.com\/#organization"}},{"@type":"Organization","@id":"https:\/\/www.chennaispinecare.com\/#organization","name":"Chennai Spine Care","url":"https:\/\/www.chennaispinecare.com\/","logo":{"@type":"ImageObject","@id":"https:\/\/www.chennaispinecare.com\/#organizationLogo","url":"https:\/\/www.chennaispinecare.com\/wp-content\/uploads\/2021\/07\/annamalai-logo.png","width":"250","height":"150"},"image":{"@id":"https:\/\/www.chennaispinecare.com\/#organizationLogo"},"contactPoint":{"@type":"ContactPoint","telephone":"+919150955655","contactType":"Customer Support"}},{"@type":"BreadcrumbList","@id":"https:\/\/www.chennaispinecare.com\/contact\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/www.chennaispinecare.com\/#listItem","position":"1","item":{"@type":"WebPage","@id":"https:\/\/www.chennaispinecare.com\/","name":"Home","description":"Dr Vignesh Pushparaj is one of the Best Consultant Orthopaedic Spine Surgeons & Neuro Specialist Doctor at Annaamalai Ortho in Chennai. He is an Expert in Key Hole Spine Fracture Surgery, Scoliosis Correction, Spine Tumour.","url":"https:\/\/www.chennaispinecare.com\/"},"nextItem":"https:\/\/www.chennaispinecare.com\/contact\/#listItem"},{"@type":"ListItem","@id":"https:\/\/www.chennaispinecare.com\/contact\/#listItem","position":"2","item":{"@type":"WebPage","@id":"https:\/\/www.chennaispinecare.com\/contact\/","name":"Contact","description":"Get in Touch with Dr. Durgesh Pushparaj for your Spine Injuries. Dr. Vignesh Pushparaj is the Orthopaedic Best Spine Surgery Specialist in Chennai, India.","url":"https:\/\/www.chennaispinecare.com\/contact\/"},"previousItem":"https:\/\/www.chennaispinecare.com\/#listItem"}]},{"@type":"WebPage","@id":"https:\/\/www.chennaispinecare.com\/contact\/#webpage","url":"https:\/\/www.chennaispinecare.com\/contact\/","name":"Contact Us - Get in Touch with Dr. Durgesh Pushparaj","description":"Get in Touch with Dr. Durgesh Pushparaj for your Spine Injuries. Dr. Vignesh Pushparaj is the Orthopaedic Best Spine Surgery Specialist in Chennai, India.","inLanguage":"en-US","isPartOf":{"@id":"https:\/\/www.chennaispinecare.com\/#website"},"breadcrumb":{"@id":"https:\/\/www.chennaispinecare.com\/contact\/#breadcrumblist"},"datePublished":"2019-09-02T08:10:40+00:00","dateModified":"2021-09-17T12:57:08+00:00"}]}
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
<link rel="https://api.w.org/" href="https://www.chennaispinecare.com/wp-json/" /><link rel="alternate" type="application/json" href="https://www.chennaispinecare.com/wp-json/wp/v2/pages/1159" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.chennaispinecare.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.chennaispinecare.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.8.1" />
<meta name="generator" content="WooCommerce 5.6.0" />
<link rel='shortlink' href='https://www.chennaispinecare.com/?p=1159' />
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
<body class="page-template page-template-template page-template-template-page page-template-templatetemplate-page-php page page-id-1159 theme-medizco woocommerce-no-js ehf-footer ehf-template-medizco ehf-stylesheet-medizco sidebar-inactive elementor-default elementor-kit-4824 elementor-page elementor-page-1159">

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
            <div id="ekit-megamenu-menu-style-1" class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default elementskit_plus_icon ekit-nav-menu-one-page-no"><ul id="menu-menu-style-1" class="elementskit-navbar-nav elementskit-menu-po-left submenu-click-on-icon"><li id="menu-item-174" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-174 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="https://www.chennaispinecare.com/" class="ekit-menu-nav-link">Home</a></li>
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
<li id="menu-item-5524" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1159 current_page_item menu-item-5524 nav-item elementskit-mobile-builder-content active" data-vertical-menu=750px><a href="https://www.chennaispinecare.com/contact/" class="ekit-menu-nav-link active">Contact</a></li>
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
		

<div id="post-1159" class="page-contents post-1159 page type-page status-publish hentry" role="main">
  <div class="builder-content">
    		<div data-elementor-type="wp-page" data-elementor-id="1159" class="elementor elementor-1159" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-305ff19 ov-h elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="305ff19" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;ekit_section_parallax_multi&quot;:&quot;yes&quot;,&quot;ekit_section_parallax_multi_items&quot;:[{&quot;parallax_style&quot;:&quot;onscroll&quot;,&quot;image&quot;:{&quot;url&quot;:&quot;https:\/\/www.chennaispinecare.com\/wp-content\/uploads\/2019\/08\/shadow-2.png&quot;,&quot;id&quot;:649,&quot;alt&quot;:&quot;&quot;,&quot;source&quot;:&quot;library&quot;},&quot;pos_x&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;pos_y&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;animation_iteration_count&quot;:null,&quot;zindex&quot;:0,&quot;_id&quot;:&quot;3d6e59c&quot;,&quot;parallax_blur_effect&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;parallax_blur_effect_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;parallax_blur_effect_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;item_source&quot;:&quot;image&quot;,&quot;shape&quot;:null,&quot;shape_color&quot;:null,&quot;width_type&quot;:&quot;&quot;,&quot;width_type_tablet&quot;:&quot;&quot;,&quot;width_type_mobile&quot;:&quot;&quot;,&quot;custom_width&quot;:null,&quot;custom_width_tablet&quot;:null,&quot;custom_width_mobile&quot;:null,&quot;source_rotate&quot;:{&quot;unit&quot;:&quot;deg&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;source_rotate_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;source_rotate_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_x_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pos_y_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;animation&quot;:null,&quot;animation_tablet&quot;:null,&quot;animation_mobile&quot;:null,&quot;item_opacity&quot;:&quot;1&quot;,&quot;animation_speed&quot;:null,&quot;animation_direction&quot;:null,&quot;parallax_speed&quot;:null,&quot;parallax_transform&quot;:&quot;translateY&quot;,&quot;parallax_transform_value&quot;:&quot;250&quot;,&quot;smoothness&quot;:&quot;700&quot;,&quot;offsettop&quot;:&quot;0&quot;,&quot;offsetbottom&quot;:&quot;0&quot;,&quot;maxtilt&quot;:null,&quot;scale&quot;:null,&quot;disableaxis&quot;:null}]}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b9b7b00" data-id="b9b7b00" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-a10c6c5 elementor-invisible elementor-widget elementor-widget-elementskit-heading" data-id="a10c6c5" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:0}" data-widget_type="elementskit-heading.default">
				<div class="elementor-widget-container">
			<div class="ekit-wid-con" ><div class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-"><h3 class="ekit-heading--title elementskit-section-title ">
					Get in Touch
				</h3>				<div class='ekit-heading__description'>
					<p>Dr Vignesh Pushparaj  (Ortho &amp; Spine Specialist)</p>
				</div>
			</div></div>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-f053f12 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f053f12" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d7507f8 elementor-invisible" data-id="d7507f8" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:200}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-b602afe reset_p link_color_inherit elementor-widget elementor-widget-text-editor" data-id="b602afe" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<h3><span style="color: #8bc64d;">Annaamalai Ortho &amp; Spine Center</span></h3><p>15-A, <br />Kottivakkam Kuppam Road, Valmiki Nagar, Thiruvanmiyur,<br />Chennai,<br />Tamil Nadu &#8211; 600 041</p><p><b>Phone:</b> (+91) 9150-955-655<br /><br /></p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-515c70e elementor-invisible" data-id="515c70e" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:400}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-efdec09 elementor-widget elementor-widget-text-editor" data-id="efdec09" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
									</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-a0238e9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a0238e9" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-be41480 elementor-invisible" data-id="be41480" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:600}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-bebecd4 elementor-view-default elementor-widget elementor-widget-icon" data-id="bebecd4" data-element_type="widget" data-widget_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<div class="elementor-icon">
			<i aria-hidden="true" class="far fa-clock"></i>			</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-22d1a04 elementor-widget elementor-widget-heading" data-id="22d1a04" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Opening Hours</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-96b1381 reset_p link_color_inherit elementor-widget elementor-widget-text-editor" data-id="96b1381" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p>Moday to Sunday: 2pm to 8pm</p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ae77ca3 elementor-invisible" data-id="ae77ca3" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:800}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-2f9b1e2 elementor-view-default elementor-widget elementor-widget-icon" data-id="2f9b1e2" data-element_type="widget" data-widget_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<div class="elementor-icon">
			<i aria-hidden="true" class="fas fa-envelope"></i>			</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-ec5336d elementor-widget elementor-widget-heading" data-id="ec5336d" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Mail</h2>		</div>
				</div>
				<div class="elementor-element elementor-element-5858f73 reset_p link_color_inherit elementor-widget elementor-widget-text-editor" data-id="5858f73" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p><b>Email:</b> <a href="mailto:vigneshpushparaj@hotmail.com">vigneshpushparaj@hotmail.com</a></p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-46fe503 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="46fe503" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-64ea5ee elementor-invisible" data-id="64ea5ee" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:600}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-8905fae elementor-widget elementor-widget-image" data-id="8905fae" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="250" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20250%20150'%3E%3C/svg%3E" class="attachment-full size-full" alt="apollo hospital" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/apollo.png" /><noscript><img width="250" height="150" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/apollo.png" class="attachment-full size-full" alt="apollo hospital" /></noscript>														</div>
						</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5749392 elementor-invisible" data-id="5749392" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:800}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-fee6d41 elementor-widget elementor-widget-image" data-id="fee6d41" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
								<div class="elementor-image">
												<img width="250" height="150" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20250%20150'%3E%3C/svg%3E" class="attachment-full size-full" alt="VHS logo" data-lazy-src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/vol-1.png" /><noscript><img width="250" height="150" src="https://www.chennaispinecare.com/wp-content/uploads/2021/07/vol-1.png" class="attachment-full size-full" alt="VHS logo" /></noscript>														</div>
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
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4dc1aca elementor-invisible" data-id="4dc1aca" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:200}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-2fcb3ae elementor-widget elementor-widget-metform" data-id="2fcb3ae" data-element_type="widget" data-widget_type="metform.default">
				<div class="elementor-widget-container">
			<div id="mf-response-props-id-2901" data-editswitchopen="" data-erroricon="fas fa-exclamation-triangle" data-successicon="fas fa-check" data-messageposition="top" class="   mf-scroll-top-no">
		<div class="formpicker_warper formpicker_warper_editable" data-metform-formpicker-key="2901" >
				
			<div class="elementor-widget-container">
				
		<div
			id="metform-wrap-2fcb3ae-2901"
			class="mf-form-wrapper"
			data-form-id="2901"
			data-action="https://www.chennaispinecare.com/wp-json/metform/v1/entries/insert/2901"
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
				let currentWrapper = "mf-response-props-id-2901";
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
								<div data-elementor-type="wp-post" data-elementor-id="2901" className="elementor elementor-2901" data-elementor-settings="[]">
						<div className="elementor-inner">
							<div className="elementor-section-wrap">
							<section className="elementor-section elementor-top-section elementor-element elementor-element-01fc058 elementor-section-full_width contact_form text-center elementor-section-height-default elementor-section-height-default" data-id="01fc058" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div className="elementor-container elementor-column-gap-no">
							<div className="elementor-row">
					<div className="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6cd0e0c" data-id="6cd0e0c" data-element_type="column">
			<div className="elementor-column-wrap elementor-element-populated">
							<div className="elementor-widget-wrap">
						<div className="elementor-element elementor-element-239f732 elementor-widget elementor-widget-heading" data-id="239f732" data-element_type="widget" data-widget_type="heading.default">
				<div className="elementor-widget-container">
			<p className="elementor-heading-title elementor-size-default">Need emergency?</p>		</div>
				</div>
				<div className="elementor-element elementor-element-8ac0aa6 elementor-widget elementor-widget-heading" data-id="8ac0aa6" data-element_type="widget" data-widget_type="heading.default">
				<div className="elementor-widget-container">
			<h3 className="elementor-heading-title elementor-size-default">Drop us a Line </h3>		</div>
				</div>
				<div className="elementor-element elementor-element-e024fdd elementor-widget elementor-widget-mf-text" data-id="e024fdd" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;contact_name&quot;}" data-widget_type="mf-text.default">
				<div className="elementor-widget-container">
			
		<div className="mf-input-wrapper">
			
			<input
				type="text"
				className="mf-input "
				id="mf-input-text-e024fdd"
				name="contact_name"
				placeholder="${ parent.decodeEntities(`Enter your name`) } "
									onInput=${parent.handleChange}
					aria-invalid=${validation.errors['contact_name'] ? 'true' : 'false'}
					ref=${el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)}
								/>

							<${validation.ErrorMessage}
					errors=${validation.errors}
					name="contact_name"
					as=${html`<span className="mf-error-message"></span>`}
					/>
			
					</div>

				</div>
				</div>
				<div className="elementor-element elementor-element-caf5594 elementor-widget elementor-widget-mf-email" data-id="caf5594" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;contact_email&quot;}" data-widget_type="mf-email.default">
				<div className="elementor-widget-container">
			
		<div className="mf-input-wrapper">
			
			<input type="email"  defaultValue="" className="mf-input " id="mf-input-email-caf5594" name="contact_email" placeholder="${ parent.decodeEntities(`Enter your email`) } "  onInput=${parent.handleChange} aria-invalid=${validation.errors['contact_email'] ? 'true' : 'false' } ref=${el=> parent.activateValidation({"message":"This field is required.","emailMessage":"Please enter a valid Email address","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)}
				/>

					<${validation.ErrorMessage} errors=${validation.errors} name="contact_email" as=${html`<span className="mf-error-message"></span>`}
				/>
			
					</div>

		</div>
				</div>
				<div className="elementor-element elementor-element-4a23eff elementor-widget elementor-widget-mf-text" data-id="4a23eff" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;contact_phone&quot;}" data-widget_type="mf-text.default">
				<div className="elementor-widget-container">
			
		<div className="mf-input-wrapper">
			
			<input
				type="text"
				className="mf-input "
				id="mf-input-text-4a23eff"
				name="contact_phone"
				placeholder="${ parent.decodeEntities(`Enter your phone number`) } "
									onInput=${parent.handleChange}
					aria-invalid=${validation.errors['contact_phone'] ? 'true' : 'false'}
					ref=${el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el)}
								/>

							<${validation.ErrorMessage}
					errors=${validation.errors}
					name="contact_phone"
					as=${html`<span className="mf-error-message"></span>`}
					/>
			
					</div>

				</div>
				</div>
				<div className="elementor-element elementor-element-262cd14 elementor-widget elementor-widget-mf-textarea" data-id="262cd14" data-element_type="widget" data-settings="{&quot;mf_input_name&quot;:&quot;contact_message&quot;}" data-widget_type="mf-textarea.default">
				<div className="elementor-widget-container">
			
		<div className="mf-input-wrapper">
			
			<textarea className="mf-input mf-textarea " id="mf-input-text-area-262cd14"
				name="contact_message" 
				placeholder="${ parent.decodeEntities(`Write your message`) } "
				cols="30" rows="10"
									onInput=${ parent.handleChange }
					aria-invalid=${validation.errors['contact_message'] ? 'true' : 'false'}
					ref=${ el => parent.activateValidation({"message":"This field is required.","minLength":1,"maxLength":"","type":"none","required":true,"expression":"null"}, el) }
								></textarea>

							<${validation.ErrorMessage}
					errors=${validation.errors}
					name="contact_message"
					as=${html`<span className="mf-error-message"></span>`}
					/>
			
					</div>

				</div>
				</div>
				<div className="elementor-element elementor-element-7b1de0d mf-btn--center elementor-widget elementor-widget-mf-button" data-id="7b1de0d" data-element_type="widget" data-widget_type="mf-button.default">
				<div className="elementor-widget-container">
					<div className="mf-btn-wraper " data-mf-form-conditional-logic-requirement="">
							<button type="submit" className="metform-btn metform-submit-btn " id="">
					<span>${ parent.decodeEntities(`Submit Now`) } </span>
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
				<section class="elementor-section elementor-top-section elementor-element elementor-element-6519c91 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="6519c91" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8a02c0c" data-id="8a02c0c" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-e5a4081 elementor-widget elementor-widget-text-editor" data-id="e5a4081" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<p><iframe loading="lazy" style="border: 0;" src="about:blank" width="600" height="450" allowfullscreen="allowfullscreen" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8983.697051276255!2d80.25880692407095!3d12.980862530678277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267094878b3d5%3A0xd8fe20127292ed89!2sDr.%20Vignesh%20Pushparaj!5e0!3m2!1sen!2sin!4v1625902919838!5m2!1sen!2sin"></iframe><noscript><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8983.697051276255!2d80.25880692407095!3d12.980862530678277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267094878b3d5%3A0xd8fe20127292ed89!2sDr.%20Vignesh%20Pushparaj!5e0!3m2!1sen!2sin!4v1625902919838!5m2!1sen!2sin" width="600" height="450" allowfullscreen="allowfullscreen"></iframe></noscript></p>					</div>
						</div>
				</div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-9bd8881 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="9bd8881" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6aa1202" data-id="6aa1202" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-41cbfd6 elementor-widget elementor-widget-text-editor" data-id="41cbfd6" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
								<div class="elementor-text-editor elementor-clearfix">
				<h2 style="text-align: center;"><span style="color: #8bc64d;">Chennai Spine, Scoliosis &amp; Disc Replacement Centre</span></h2><h4 style="text-align: center;"><span style="color: #8bc64d;">Centre for Advanced Spinal Surgery</span></h4><h3 style="text-align: center;"><span style="color: #8bc64d;">For Appointment Call : <a href="tel:9150955655">+91 9150 955 655</a></span></h3>					</div>
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
		  </div><!-- .builder-content -->
</div><!-- .page-contents -->


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
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.4.3","is_static":false,"experimentalFeatures":{"e_import_export":true,"landing-pages":true,"elements-color-picker":true,"admin-top-bar":true},"urls":{"assets":"https:\/\/www.chennaispinecare.com\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1159,"title":"Contact%20Us%20-%20Get%20in%20Touch%20with%20Dr.%20Durgesh%20Pushparaj","excerpt":"","featuredImage":false}};
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

<!-- Cache served by breeze CACHE - Last modified: Wed, 22 Sep 2021 17:06:15 GMT -->
";s:7:"headers";a:3:{i:0;a:2:{s:4:"name";s:7:"Expires";s:5:"value";s:29:"Wed, 17 Aug 2005 00:00:00 GMT";}i:1;a:2:{s:4:"name";s:13:"Cache-Control";s:5:"value";s:62:"no-store, no-cache, must-revalidate, post-check=0, pre-check=0";}i:2;a:2:{s:4:"name";s:6:"Pragma";s:5:"value";s:8:"no-cache";}}}