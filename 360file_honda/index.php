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

    <title>HONDA DEMO</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="viewport" id="metaViewport" content="user-scalable=no, initial-scale=1, width=device-width, viewport-fit=cover" data-tdv-general-scale="0.5"/>

    <link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" sizes="48x48 32x32 16x16" href="favicon.ico">
	<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="misc/icon180.png">
	<link rel="icon" type="image/png" sizes="16x16" href="misc/icon16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="misc/icon32.png">
	<link rel="icon" type="image/png" sizes="192x192" href="misc/icon192.png">
	<link rel="manifest" href="manifest.json">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="msapplication-config" content="browserconfig.xml">
	<link rel="preload" href="script.js?v=1600441909289" as="script"/>
	<link rel="preload" href="media/panorama_C733BCD9_DE30_5AAF_41CB_9CE1CF62A460_0/r/3/0_0.jpg?v=1600441909289" as="image"/>
	<link rel="preload" href="media/panorama_C733BCD9_DE30_5AAF_41CB_9CE1CF62A460_0/l/3/0_0.jpg?v=1600441909289" as="image"/>
	<link rel="preload" href="media/panorama_C733BCD9_DE30_5AAF_41CB_9CE1CF62A460_0/u/3/0_0.jpg?v=1600441909289" as="image"/>
	<link rel="preload" href="media/panorama_C733BCD9_DE30_5AAF_41CB_9CE1CF62A460_0/d/3/0_0.jpg?v=1600441909289" as="image"/>
	<link rel="preload" href="media/panorama_C733BCD9_DE30_5AAF_41CB_9CE1CF62A460_0/f/3/0_0.jpg?v=1600441909289" as="image"/>
	<link rel="preload" href="media/panorama_C733BCD9_DE30_5AAF_41CB_9CE1CF62A460_0/b/3/0_0.jpg?v=1600441909289" as="image"/>
	<link rel="preload" href="locale/en.txt?v=1600441909289" as="fetch" crossorigin="anonymous"/>
	<meta property="og:title" content="HONDA DEMO" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="FIRST PAGE" />
	<meta property="og:url" content="https://ahm360sample.digiv.co.id/index.htm" />
	<meta property="og:image" content="https://ahm360sample.digiv.co.id/socialThumbnail.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="630" />
	<meta property="fb:app_id" content="817622095004141" />
	<link rel="image_src" href="https://ahm360sample.digiv.co.id/socialThumbnail.jpg?v=1600441909289">
	<meta property="og:locale" content="en"/>
	<meta name="twitter:card" content="summary_large_image"/>
	<meta name="twitter:title" content="HONDA DEMO"/>
	<meta name="twitter:description" content="FIRST PAGE"/>
	<meta name="twitter:url" content="https://ahm360sample.digiv.co.id/index.htm"/>
	<meta name="twitter:image:src" content="https://ahm360sample.digiv.co.id/socialThumbnail.jpg?v=1600441909289"/>
	<meta name="twitter:image:width" content="1200"/>
	<meta name="twitter:image:height" content="630"/>
	<script src="https://remote.3dvista.com/lib/tdvremote.js?v=1600441909289" type="text/javascript"></script>
	<meta name="description" content="FIRST PAGE"/>
	<meta name="theme-color" content="#000000"/>

    <script src="lib/tdvplayer.js?v=1600441909289"></script>

    <script src="script.js?v=1600441909289"></script>

    <script type="text/javascript">

        (function()

        {

            var deviceType = TDV.PlayerAPI.mobile ? 'mobile' : 'general';

            var devicesUrl = {"general":"script_general.js?v=1600441909289"};

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

            settings.set(TDV.PlayerSettings.WEBVR_POLYFILL_URL, 'lib/WebVRPolyfill.js?v=1600441909289');

            settings.set(TDV.PlayerSettings.HLS_URL, 'lib/Hls.js?v=1600441909289');

            settings.set(TDV.PlayerSettings.QUERY_STRING_PARAMETERS, 'v=1600441909289');



            var devicesUrl = {"general":"script_general.js?v=1600441909289"};



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

            TDV.Remote.start(tour.player, "cozadgipdya2");

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

                //DisposePreloader

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

                    }

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

                return;

            }



            if (isOVRWeb()){

                showPreloader();

                loadTour();

                return;

            }



            showPreloader();
			loadTour();

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

        html, body { background-color: #000000;  width: 100%; height: 100%; margin: 0; padding: 0; padding: env(safe-area-inset-top) env(safe-area-inset-right) env(safe-area-inset-bottom) env(safe-area-inset-left); }



        #viewer { background-color: #000000; z-index:1; position:absolute; width: 100%; height: 100%; top: 0; }

        

    </style>

    <link rel="stylesheet" href="fonts.css?v=1600441909289">

</head>

<body>

    

    <div id="viewer"></div>

</body>

</html>