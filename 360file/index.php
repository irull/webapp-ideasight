<?php
session_start();

if(!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>IDEASIGHT CONFERENCE & PROPERT DEMO</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" id="metaViewport" content="user-scalable=no, initial-scale=1, width=device-width, viewport-fit=cover" data-tdv-general-scale="0.5"/>
    <link rel="shortcut icon" href="favicon.ico?v=1612848981077">
	<link rel="icon" sizes="48x48 32x32 16x16" href="favicon.ico?v=1612848981077">
	<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="misc/icon180.png?v=1612848981077">
	<link rel="icon" type="image/png" sizes="16x16" href="misc/icon16.png?v=1612848981077">
	<link rel="icon" type="image/png" sizes="32x32" href="misc/icon32.png?v=1612848981077">
	<link rel="icon" type="image/png" sizes="192x192" href="misc/icon192.png?v=1612848981077">
	<link rel="manifest" href="manifest.json?v=1612848981077">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-config" content="browserconfig.xml">
	<link rel="preload" href="locale/en.txt?v=1612848981077" as="fetch" crossorigin="anonymous"/>
	<link rel="preload" href="script.js?v=1612848981077" as="script"/>
	<link rel="preload" href="media/panorama_78E037B9_7554_F967_41D1_2C8218D70EBE_0/r/2/0_0.jpg?v=1612848981077" as="image"/>
	<link rel="preload" href="media/panorama_78E037B9_7554_F967_41D1_2C8218D70EBE_0/l/2/0_0.jpg?v=1612848981077" as="image"/>
	<link rel="preload" href="media/panorama_78E037B9_7554_F967_41D1_2C8218D70EBE_0/u/2/0_0.jpg?v=1612848981077" as="image"/>
	<link rel="preload" href="media/panorama_78E037B9_7554_F967_41D1_2C8218D70EBE_0/d/2/0_0.jpg?v=1612848981077" as="image"/>
	<link rel="preload" href="media/panorama_78E037B9_7554_F967_41D1_2C8218D70EBE_0/f/2/0_0.jpg?v=1612848981077" as="image"/>
	<link rel="preload" href="media/panorama_78E037B9_7554_F967_41D1_2C8218D70EBE_0/b/2/0_0.jpg?v=1612848981077" as="image"/>
	<meta property="og:title" content="IDEASIGHT CONFERENCE & PROPERT DEMO" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="IDEASIGHT" />
	<meta property="og:url" content="https://ideasight.tech/index.htm" />
	<meta property="og:image" content="https://ideasight.tech/socialThumbnail.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="fb:app_id" content="817622095004141" />
	<link rel="image_src" href="https://ideasight.tech/socialThumbnail.jpg?v=1612848981077">
	<meta property="og:locale" content="en"/>
	<meta name="twitter:card" content="summary_large_image"/>
	<meta name="twitter:title" content="IDEASIGHT CONFERENCE & PROPERT DEMO"/>
	<meta name="twitter:description" content="IDEASIGHT"/>
	<meta name="twitter:url" content="https://ideasight.tech/index.htm"/>
	<meta name="twitter:image:src" content="https://ideasight.tech/socialThumbnail.jpg?v=1612848981077"/>
	<meta name="twitter:image:width" content="1200"/>
	<meta name="twitter:image:height" content="630"/>
	<meta name="description" content="IDEASIGHT"/>
	<meta name="theme-color" content="#FFFFFF"/>
    <script src="lib/tdvplayer.js?v=1612848981077"></script>
    <script src="script.js?v=1612848981077"></script>
    <script type="text/javascript">
        (function()
        {
            var deviceType = TDV.PlayerAPI.mobile ? 'mobile' : 'general';
            var devicesUrl = {"general":"script_general.js?v=1612848981077","mobile":"script_mobile.js?v=1612848981077"};
            var url = deviceType in devicesUrl ? devicesUrl[deviceType] : devicesUrl['general'];
            if(typeof url == "object") {
                var orient = TDV.PlayerAPI.getOrientation();
                if(orient in url) {
                    url = url[orient];
                }
            }
            var link = document.createElement('link');
            link.rel = 'preload';
            link.href = url;
            link.as = 'script';
            var el = document.getElementsByTagName('script')[0];
            el.parentNode.insertBefore(link, el);
        })();
    </script>
    <script type="text/javascript">
        var tour;

        function loadTour()
        {
            if(tour) return;

            var settings = new TDV.PlayerSettings();
            settings.set(TDV.PlayerSettings.CONTAINER, document.getElementById('viewer'));
            settings.set(TDV.PlayerSettings.WEBVR_POLYFILL_URL, 'lib/WebVRPolyfill.js?v=1612848981077');
            settings.set(TDV.PlayerSettings.HLS_URL, 'lib/Hls.js?v=1612848981077');
            settings.set(TDV.PlayerSettings.QUERY_STRING_PARAMETERS, 'v=1612848981077');

            var devicesUrl = {"general":"script_general.js?v=1612848981077","mobile":"script_mobile.js?v=1612848981077"};

            tour = new TDV.Tour(settings, devicesUrl);
            tour.bind(TDV.Tour.EVENT_TOUR_INITIALIZED, onVirtualTourInit);
            tour.bind(TDV.Tour.EVENT_TOUR_LOADED, onVirtualTourLoaded);
            tour.bind(TDV.Tour.EVENT_TOUR_ENDED, onVirtualTourEnded);
            tour.load();
        }

        function pauseTour()
        {
            if(!tour)
                return;

            tour.pause();
        }

        function resumeTour()
        {
            if(!tour)
                return;

            tour.resume();
        }

        function onVirtualTourInit()
        {
            var updateTexts = function() {
                document.title = this.trans("tour.name")
            };

            tour.locManager.bind(TDV.Tour.LocaleManager.EVENT_LOCALE_CHANGED, updateTexts.bind(tour.locManager));
            
        }

        function onVirtualTourLoaded()
        {
            disposePreloader();
        }

        function onVirtualTourEnded()
        {

        }

        function setMediaByIndex(index)
        {
            if(!tour)
                return;

            tour.setMediaByIndex(index);
        }

        function setMediaByName(name)
        {
            if(!tour)
                return;

            tour.setMediaByName(name);
        }

        function showPreloader()
        {
            var preloadContainer = document.getElementById('preloadContainer');
            if(preloadContainer != undefined)
                preloadContainer.style.opacity = 1;
        }

        function disposePreloader()
        {
            var preloadContainer = document.getElementById('preloadContainer');
            if(preloadContainer == undefined)
                return;

            var transitionEndName = transitionEndEventName();
            if(transitionEndName)
            {
                preloadContainer.addEventListener(transitionEndName, hide, false);
                preloadContainer.style.opacity = 0;
                setTimeout(hide, 500); //Force hide. Some cases the transitionend event isn't dispatched with an iFrame.
            }
            else
            {
                hide();
            }

            function hide()
            {
                
                preloadContainer.style.visibility = 'hidden';
                preloadContainer.style.display = 'none';
                var videoList = preloadContainer.getElementsByTagName("video");
                for(var i=0; i<videoList.length; ++i)
                {
                    var video = videoList[i];
                    video.pause();
                    while (video.children.length)
                        video.removeChild(video.children[0]);
                }
            }

            function transitionEndEventName () {
                var el = document.createElement('div');
                var transitions = {
                        'transition':'transitionend',
                        'OTransition':'otransitionend',
                        'MozTransition':'transitionend',
                        'WebkitTransition':'webkitTransitionEnd'
                    };

                var t;
                for (t in transitions) {
                    if (el.style[t] !== undefined) {
                        return transitions[t];
                    }
                }

                return undefined;
            }
        }

        function onBodyClick(){
            document.body.removeEventListener("click", onBodyClick);
            document.body.removeEventListener("touchend", onBodyClick);
            loadTour();
        }

        function onLoad() {
            if (/AppleWebKit/.test(navigator.userAgent) && /Mobile\/\w+/.test(navigator.userAgent))
            {
                var inIFrame = false;
                try
                {
                    inIFrame = (window.self !== window.top);
                }
                catch (e)
                {
                    inIFrame = true;
                }
                if (!inIFrame)
                {
                    var onResize = function(async)
                    {
                        [0, 250, 1000, 2000].forEach(function(delay)
                        {
                            setTimeout(function()
                            {
                                var viewer = document.querySelector('#viewer');
                                var scale = window.innerWidth / document.documentElement.clientWidth;
                                var width = document.documentElement.clientWidth;
                                var height = Math.round(window.innerHeight / scale);
                                viewer.style.width = width + 'px';
                                viewer.style.height = height + 'px';
                                viewer.style.left = Math.round((window.innerWidth - width) * 0.5) + 'px';
                                viewer.style.top = Math.round((window.innerHeight - height) * 0.5) + 'px';
                                viewer.style.transform = 'scale(' + scale + ', ' + scale + ')';
                                window.scrollTo(0,0);
                            }, delay);
                        });
                    };
                    var onTouchEnd = function()
                    {
                        document.body.removeEventListener("touchend", onTouchEnd);
                        clearInterval(resizeIntervalId);
                        onResize();
                        if (/CriOS/.test(navigator.userAgent))
                            setInterval(onResize, 4000);
                    };
                    document.body.addEventListener("touchend", onTouchEnd);
                    var resizeIntervalId = setInterval(onResize, 300);
                    window.addEventListener('resize', onResize);
                    onResize();
                }
            }

            var params = getParams(location.search.substr(1));
            if(params.hasOwnProperty("skip-loading"))
            {
                loadTour();
                disposePreloader();
                return;
            }

            if (isOVRWeb()){
                showPreloader();
                loadTour();
                return;
            }

            document.body.addEventListener("click", onBodyClick);
			document.body.addEventListener("touchend", onBodyClick);
			showPreloader();
        }

        function playVideo(video) {
            function isSafariDesktopV11orGreater() {
                return /^((?!chrome|android|crios|ipad|iphone).)*safari/i.test(navigator.userAgent) && parseFloat(/Version\/([0-9]+\.[0-9]+)/i.exec(navigator.userAgent)[1]) >= 11;
            }

            function hasAudio (video) {
                return video.mozHasAudio ||
                       Boolean(video.webkitAudioDecodedByteCount) ||
                       Boolean(video.audioTracks && video.audioTracks.length);
            }

            function detectUserAction() {
                var onVideoClick = function(e) {
                    if(video.paused) {
                        video.play();
                    }
                    video.muted = false;
                    if(hasAudio(video))
                    {
                        e.stopPropagation();
                        e.stopImmediatePropagation();
                        e.preventDefault();
                    }

                    video.removeEventListener('click', onVideoClick);
                    video.removeEventListener('touchend', onVideoClick);
                };
                video.addEventListener("click", onVideoClick);
                video.addEventListener("touchend", onVideoClick);
            }

            if (isSafariDesktopV11orGreater()) {
                video.muted = true;
                video.play();
            } else {
                var canPlay = true;
                var promise = video.play();
                if (promise) {
                    promise.catch(function() {
                        video.muted = true;
                        video.play();
                        detectUserAction();
                    });
                } else {
                    canPlay = false;
                }

                if (!canPlay || video.muted) {
                    detectUserAction();
                }
            }
        }

        function isOVRWeb(){
            return window.location.hash.substring(1).split('&').indexOf('ovrweb') > -1;
        }

        function getParams(params) {
            var queryDict = {}; params.split("&").forEach(function(item) {var k = item.split("=")[0], v = decodeURIComponent(item.split("=")[1]);queryDict[k.toLowerCase()] = v});
            return queryDict;
        }

        document.addEventListener('DOMContentLoaded', onLoad);
    </script>
    <style type="text/css">
        html, body { width: 100%; height: 100%; margin: 0; padding: 0; padding: env(safe-area-inset-top) env(safe-area-inset-right) env(safe-area-inset-bottom) env(safe-area-inset-left); }

        #viewer { z-index:1; position:absolute; width: 100%; height: 100%; top: 0; }
        #preloadContainer { z-index:2; position:relative; width:100%; height:100%; opacity:0; background-color:rgba(255,255,255,1); transition: opacity 0.5s; -webkit-transition: opacity 0.5s; -moz-transition: opacity 0.5s; -o-transition: opacity 0.5s;}
    </style>
    <link rel="stylesheet" href="fonts.css?v=1612848981077">
</head>
<body>
    <div id="preloadContainer"><div style="z-index: 4; position: absolute; background-image: url('loading/HTMLImage_86E57777_8D9E_2786_41D8_D1E9ACC0C4FF.png'); background-size: contain; background-repeat: no-repeat; background-position: center center; overflow: hidden; right: 60.41%; bottom: 37.01%; width: 26.28%; height: 29.47%"></div><div style="z-index: 5; position: absolute; left: 39.35%; top: 34.8%; width: 48.60%; height: 47.17%"><div style="text-align:left; color:#000; "><DIV STYLE="text-align:left;font-size:36.00000000000001px;"><SPAN STYLE="display:inline-block; letter-spacing:0px; white-space:pre-wrap;color:#777777;font-family:Arial, Helvetica, sans-serif;"><SPAN STYLE="color:#666666;font-size:36px;"><B>WELCOME</B></SPAN></SPAN></DIV><p STYLE="margin:0; line-height:11.48px;"><BR STYLE="display:inline-block; letter-spacing:0px; white-space:pre-wrap;color:#777777;font-size:11.48px;font-family:Arial, Helvetica, sans-serif;"/></p><p STYLE="margin:0; line-height:16px;"><BR STYLE="display:inline-block; letter-spacing:0px; white-space:pre-wrap;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;"/></p><DIV STYLE="text-align:left;font-size:31px;"><SPAN STYLE="display:inline-block; letter-spacing:0px; white-space:pre-wrap;color:#000000;font-family:Arial, Helvetica, sans-serif;"><SPAN STYLE="color:#666666;font-size:31px;"><B>360 VIRTUAL CONFERENCE TOUR</B></SPAN></SPAN></DIV><p STYLE="margin:0; line-height:24px;"><BR STYLE="display:inline-block; letter-spacing:0px; white-space:pre-wrap;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;"/></p><DIV STYLE="text-align:left;font-size:24px;"><SPAN STYLE="display:inline-block; letter-spacing:0px; white-space:pre-wrap;color:#000000;font-family:Arial, Helvetica, sans-serif;"><SPAN STYLE="color:#cccccc;font-size:24px;"><B>by </B></SPAN><SPAN STYLE="color:#00ccff;font-size:24px;"><B>Idea</B></SPAN><SPAN STYLE="color:#ff9900;font-size:24px;"><B>Sight</B></SPAN></SPAN></DIV><p STYLE="margin:0; line-height:24px;"><BR STYLE="display:inline-block; letter-spacing:0px; white-space:pre-wrap;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;"/></p><p STYLE="margin:0; line-height:24px;"><BR STYLE="display:inline-block; letter-spacing:0px; white-space:pre-wrap;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;"/></p><p STYLE="margin:0; line-height:24px;"><BR STYLE="display:inline-block; letter-spacing:0px; white-space:pre-wrap;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;"/></p><p STYLE="margin:0; line-height:24px;"><BR STYLE="display:inline-block; letter-spacing:0px; white-space:pre-wrap;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;"/></p><DIV STYLE="text-align:left;font-size:16px;"><SPAN STYLE="display:inline-block; letter-spacing:0px; white-space:pre-wrap;color:#000000;font-size:16px;font-family:Arial, Helvetica, sans-serif;"><B>Please Click to Begin....</B></SPAN></DIV></div></div></div>
    <div id="viewer"></div>
</body>
</html>