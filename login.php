<?php
include("connectionbd.php");
include("fonctionConnex.php");
?>


<?php

extract($_POST);

if(isConnected()){
	echo "<script>document.location = 'default.php';</script>";
	exit();
}

if(isset($log) && !empty($log) && isset($pass) && !empty($pass)){
	if(connectUser($log,$pass)){
	
		echo "<script>document.location = 'default.php';</script>";
		exit();
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Acceuil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
    <link href="css/colors/noise-red.css" rel="stylesheet" id="theme">
    <link href="css/menu2.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <link href="css/ie8.css" rel="stylesheet">
      <script src="../../html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/icons/24x24/grid.png">
    
   
    <link href='http://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
	<link href="css/bc-stylesheet.css" rel="stylesheet" type="text/css" />


  <meta name="robots" content="noindex, nofollow">
  <link rel="canonical" href="http://s.cssdeck.com/labs/elvp76rk">

          <link rel="stylesheet" href="/assets/css/normalize.min.css">
      
	<style>
/*Login page ================================================== */
@font-face {
  font-family: 'Unica One';
  font-style: normal;
  font-weight: 400;
  src: local('Unica One'), local('UnicaOne-Regular'), url(js/z3VYemEbD7zsQFQLG6g3Sj8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
}
body {
	background:margin: 0;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  line-height: 20px;
  color: #707070;
  background-color: #000;}
.loginWrapper { 

width: 240px; position: absolute; left: 50%; top: 50%; margin: -124px 0 0 -120px; text-align: center; -moz-perspective: 800px; -webkit-perspective: 800px; perspective: 800px; }

/* Login hover buttons */

.logleft, .logright, .logback { background: url(http://i.imgur.com/lcRwahc.png) no-repeat; height: 37px; width: 37px; position: absolute; top: 36px; display: block; opacity: 0; filter: alpha(opacity=0); }
.logleft { left: 0px; background-position: 0 0; } 
.logright { right: 0px; background-position: -38px 0; } 
.logback { left: 0; background-position: -76px 0; }
.logleft:hover { background-position: 0 -39px; } 
.logright:hover { background-position: -38px -39px; } 
.logback:hover { background-position: -76px -39px; }
#login{ z-index:100; }
#recover{ z-index:1; opacity:0; filter: alpha(opacity=0); -moz-transform:rotateY(180deg); -webkit-transform:rotateY(180deg); transform:rotateY(180deg); }
.flipped #login{ opacity:0; filter: alpha(opacity=0); -moz-transform:rotateY(-180deg); -webkit-transform:rotateY(-180deg); transform:rotateY(-180deg); }
.loginWrapper.flipped #recover{ opacity:1; filter: alpha(opacity=100); -moz-transform:rotateY(0deg); -webkit-transform:rotateY(0deg); transform:rotateY(0deg); }
.loginWrapper form { width:100%; height:100%; position:absolute; top:0; left:0;

/* Enabling 3d space for the transforms */
-moz-transform-style: preserve-3d;
-webkit-transform-style: preserve-3d;
transform-style: preserve-3d;

/* When the forms are flipped, they will be hidden */
-moz-backface-visibility: hidden;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;

/* Enabling a smooth animated transition */
-moz-transition:0.8s;
-webkit-transition:0.8s;
transition:0.8s;

/* Configure a keyframe animation for Firefox */
-moz-animation: pulse 2s infinite;

/* Configure it for Chrome and Safari */
-webkit-animation: pulse 2s infinite;
}

.loginPic { text-align: center; display: block; position: relative; overflow: hidden; }
.loginPic span { display: block; color: #5f5f5f; font-size: 14px; margin-top: 10px; font-weight: bold; text-shadow: 0 1px 1px #ffffff; }
.loginWrapper form { display: block; margin: 0 auto; width: 236px; }
.loginWrapper a { display: inline-block; }
.loginWrapper input[type=text], .loginWrapper input[type=password] { font-size: 11px; color: #858585; box-shadow: 0 0 0px 2px #ebebeb; -webkit-box-shadow: 0 0 0px 2px #ebebeb; -moz-box-shadow: 0 0 0px 2px #ebebeb; padding: 7px 27px 7px 9px; border: 1px solid #d7d7d7; width: 198px; display: inline-block; margin-top: 15px; }
.loginUsername { background: #fbfbfb url(http://i.imgur.com/yeEafuK.png) no-repeat 213px 7px; }
.loginPassword { background: #fbfbfb url(http://i.imgur.com/0sxpIbn.png) no-repeat 214px 7px; }
.loginEmail { background: #fbfbfb url(http://i.imgur.com/zI4zRWc.png) no-repeat 213px 7px; }
.logControl { margin-top: 15px; }
.logControl:after { content: ""; display: block; clear: both; }
.logControl .memory { float: left; margin-top: 5px; }
.logControl input[type=submit] { float: right; }

/* Checkboxes */

div.checker { width: 16px; height: 16px; position: relative; display: -moz-inline-box; display: block; vertical-align: middle; zoom: 1; float: left; margin-top: 3px; margin-right: 8px; box-shadow: 0 1px 0 #fff; -webkit-box-shadow: 0 1px 0 #fff; -moz-box-shadow: 0 1px 0 #fff; }
div.checker input { width: 16px; height: 16px; opacity: 0; filter: alpha(opacity:0); display: inline-block; background: none; }
div.checker span { background: url(http://i.imgur.com/gAJ5G4V.png) no-repeat 0 0; height: 16px; width: 16px; display: -moz-inline-box; display: inline-block; text-align: center; }
div.checker span.checked { background-position: 0 -17px; }

/* Button */

.bBlue {  border: 1px solid #3e76af; box-shadow: 0 1px 2px 0 #66b2d2 inset; -webkit-box-shadow: 0 1px 2px 0 #66b2d2 inset; -moz-box-shadow: 0 1px 2px 0 #66b2d2 inset;
	color:#fff;
background: #5ba5cb;
background: -moz-linear-gradient(top,  #5ba5cb 0%, #3a70ab 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#5ba5cb), color-stop(100%,#3a70ab));
background: -webkit-linear-gradient(top,  #5ba5cb 0%,#3a70ab 100%);
background: -o-linear-gradient(top,  #5ba5cb 0%,#3a70ab 100%);
background: -ms-linear-gradient(top,  #5ba5cb 0%,#3a70ab 100%);
background: linear-gradient(top,  #5ba5cb 0%,#3a70ab 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#5ba5cb', endColorstr='#3a70ab',GradientType=0 );
}
.bBlue:hover { opacity: 0.95; filter: alpha(opacity=95); -webkit-transition: opacity 0.2s ease-in-out; -moz-transition: opacity 0.2s ease-in-out; transition: opacity 0.2s ease-in-out; }
.bBlue:active { background: #4786b8; box-shadow: 0 0 2px #707070 inset, 0 1px 0 #fff; -webkit-box-shadow: 0 0 2px #707070 inset, 0 1px 0 #fff; -moz-box-shadow: 0 0 2px #707070 inset, 0 1px 0 #fff; }
.buttonM [class*="tablectrl"] {  font-size: 11px; color: #fff; font-weight: bold; text-shadow: 0 -1px #6f6f6f; display: inline-block; line-height: 14px; border-radius: 2px; -webkit-border-radius: 2px; -moz-border-radius: 2px; }
.buttonM span { text-shadow: 0 1px 0 #6f6f6f; margin-left: 10px; }
.buttonM { padding: 7px 15px; }
.memory label{font-size:12px; position:relative;top:-18px;left:20px;}	</style>

          <script src="/assets/js/prefixfree.min.js"></script>
      
  <script>
    // We really want to disable
    window.open    = function() {};
    window.alert   = function() {};
    window.print   = function() {};
    window.prompt  = function() {};
    window.confirm = function() {};
  </script>

  <script>
  // #killanim is only being used in lab full view, maybe we could
  // use it everywhere :D
//if (window !== window.top && window.top.__stop_animations !== false) {
if (window !== window.top && location.hash !== '#dontkillanim') {
  window.is_webkit = /(webkit)[ \/]([\w.]+)/.exec(window.navigator.userAgent.toLowerCase())

  window.max_timer = window.is_webkit ? 2000 : 20

  // Let's try to prevent user's from OOM'ing esp. in FX and Op.
  // First, we need to stop CSS Animations, after say 5s ?
  //
  // Ok, so i tried 5s, but there are some problems. Firstly, Firefox
  // and opera behave same. little improvement only. So making it 3s now.
  //
  // Tutorial: https://developer.mozilla.org/en/CSS/CSS_animations
  // Help: http://www.sitepoint.com/css3-animation-javascript-event-handlers

  var pauseCSSAnimations = function() {

    var stopCSSAnimations = function() {
      // Get the Body Element
      var body = document.getElementsByTagName('body')[0];

      // We'll setup animationstart and animationiteration
      // events only. No need for animationend, cuz the
      // animation might be 30minutes long. animationiteration
      // cuz the animation might be .000002ms long.

      // addEventListener is perfectly supported in IE9.
      // and we don't care about IE8 and below. Let those
      // browsers die in a fire!

      body.addEventListener('webkitAnimationStart', stopAnimation, false);
      body.addEventListener('webkitAnimationIteration', stopAnimation, false);
      body.addEventListener('animationstart', stopAnimation, false);
      body.addEventListener('animationiteration', stopAnimation, false);
    };

    // e is the event object bro ;)
    var stopAnimation = function(e) {
      // e.srcElement? lulz...
      var target_el = e.target;
      var e_type = e.type.toLowerCase();
      
      if (e_type.indexOf('animationstart') !== -1 || e_type.indexOf('animationiteration') !== -1) {
        // LOL, we need to stop the animation now!
        // setInterval? lulz...

        setTimeout(false, function() {

          if (target_el.style.webkitAnimationPlayState !== 'paused')
            target_el.style.webkitAnimationPlayState = 'paused';

          if (target_el.style.MozAnimationPlayState !== 'paused')
            target_el.style.MozAnimationPlayState = 'paused';

          if (target_el.style.animationPlayState !== 'paused')
            target_el.style.animationPlayState = 'paused';

        }, window.max_timer);
      }
    }

    stopCSSAnimations();

  };

  // Next we need to pause/stop JS Animations

  var pauseJSAnimations = function() {

    // We need to override setInterval, setTimeout
    // in such a way, that all the calls register their
    // ids in an array and we can clear all the ids
    // after a given time.
    //
    // Don't trust me ? Lern2Google:
    // http://stackoverflow.com/a/11374151/1437328
    // http://stackoverflow.com/a/8524313/1437328
    // http://stackoverflow.com/a/8769620/1437328
    //
    // 3rd one is pretty much the code you need!
    //
    // Thank you for building your trust in me now :D

    window.setInterval = (function(oldSetInterval) {
      var registered = [];

      var f = function() {
        var id;
        // .. this!
        var $this = this;
        // setInterval accepts n no. of args
        var args = arguments;
        // What if someone used the awesome Function.bind() ?
        // I am sure we want the awesome apply() then ;)

        // this is my awesome brain usage. if first val is nonsense,
        // then don't register, heh.
        if (typeof args[0] !== 'function' && args[0] === false) {
          args = Array.prototype.slice.call(arguments);
          args = args.slice(1);

          id = oldSetInterval.apply($this, args)
        }
        else {
          id = oldSetInterval.apply($this, args);
          registered.push(id);
        }

        //console.log(registered);
        // Need to return the Interval ID
        return id;
      };

      f.clearAll = function() {
        var r;
        while (r = registered.pop()) {
          clearInterval(r);
        }
      };

      return f;
    })(window.setInterval);

    window.setTimeout = (function(oldSetTimeout) {
      var registered = [];

      var f = function() {
        var id;
        // .. this!
        var $this = this;
        // setInterval accepts n no. of args
        var args = arguments;
        // What if someone used the awesome Function.bind?
        // I am sure we want the awesome apply then ;)

        // this is my awesome brain usage. if first val is nonsense,
        // then don't register, heh.
        if (typeof args[0] !== 'function' && args[0] === false) {
          args = Array.prototype.slice.call(arguments);
          args = args.slice(1);

          id = oldSetTimeout.apply($this, args)
        }
        else {
          //console.log('lolzzzzz');
          id = oldSetTimeout.apply($this, args);
          registered.push(id);
        }

        //console.log(registered);
        // Need to return the Timeout ID
        return id;
      };

      f.clearAll = function() {
        var r;
        while (r = registered.pop()) {
          clearTimeout(r);
        }
      };

      return f;
    })(window.setTimeout);

    setTimeout(false, function() {
      setTimeout.clearAll();
      setInterval.clearAll();
    }, window.max_timer);


    // Time to Cancel rAF's Bro :)
    // You know things are harder when people are actually
    // using shims for rAF :/ So we need to test for vendors!

    window.__requestAnimFrame = window.requestAnimationFrame || undefined;
    window.__cancelAnimFrame = window.cancelAnimationFrame || undefined;
    window.__vendors = ['webkit', 'moz', 'ms', 'o'];
    window.__registered_rafs = [];

    // I can't think of a good way to cancel rAF's
    // So maybe lets use something similar to our other canceller's

    window.__requestFrame = function(cb) {
      if (!window.__requestAnimFrame) return;

      var req_id = window.__requestAnimFrame(cb);
      __registered_rafs.push(req_id);

      return req_id;
    };

    // Determine the proper VendorPrefixedFunctionName
    if (!window.__requestAnimFrame) {
      for (var x = 0; x < window.__vendors.length; x++) {
          if (!window.__requestAnimFrame) {
            window.__requestAnimFrame = window[window.__vendors[x]+'RequestAnimationFrame'];
            window[window.__vendors[x]+'RequestAnimationFrame'] = __requestFrame;
          }

          if(!window.__cancelAnimFrame) {
            // I came across webkitCancelAnimationFrame and webkitCancelRequestAnimationFrame
            // No idea about the difference, so maybe lets ||'fy it

            window.__cancelAnimFrame = window[window.__vendors[x]+'CancelAnimationFrame'] ||
                                        window[window.__vendors[x]+'CancelRequestAnimationFrame'];
          }
      }
    }

    // We have our proper vendor prefixed raf objects now :)
    // So let's go mad!!!
    // Let's Cancel our rAF's
    setTimeout(false, function() {
      if (!window.__requestAnimFrame) return;
      
      var r;
      while (r = window.__registered_rafs.pop()) {
        window.__cancelAnimFrame(r);
      }
    }, window.max_timer);

  };

  // Had to place outside pauseAnimations to work properly
  // else it was getting called afterwards code setTimeout/Interval executed
  if (window !== window.top)
    pauseJSAnimations();

  var __pauseAnimations = function() {
    if (window !== window.top)
      pauseCSSAnimations();
  };
}
else {
  __pauseAnimations = function() {};
}
  </script>
</head>
<body onLoad="__pauseAnimations();">
 
<div class="loginWrapper">
	<!-- Current user form -->
    
     
    
    <form action="" method="post" id="login">
        <div class="loginPic">
            <a href="#" title=""><img src="img/a.png" alt=""></a>
            <span>Etudiant</span>
          
            <div class="loginActions">
                <div><a href="#" title="Change user" class="logleft flip"   style="left: 0px; opacity: 1;"></a></div>
                <div><a href="#" title="Forgot password?" class="logright"  style="right: 0px; opacity: 1;"></a></div>
            </div>
        </div>
        
        
       <input type="text" name="log"  placeholder="Saisissez votre Login" class="loginEmail"/>

	<input type="password" name="pass" placeholder="Password" class="loginPassword" />

        
        
        
        
        <div class="logControl">
            
            <input type="submit" name="submit" value="Login" class="buttonM bBlue" >
        </div>
    </form>
    
    <!-- New user form -->
    <form action="" method="post" id="recover">
        <div class="loginPic">
            <a href="#" title=""><img src="img/a.png" alt=""></a>
            <div class="loginActions">
              <span>Administrateur</span>
                <div><a href="#" title="" class="logback flip" style="left: 0px; opacity: 1;"></a></div>
                <div><a href="#" title="Renitialiser" class="logright" style="right: 0px; opacity: 1;"></a></div>
            </div>
        </div>
            
         <input type="text" name="log"  placeholder="Saisissez votre Login" class="loginEmail"/>

	<input type="password" name="pass" placeholder="Password" class="loginPassword" />

         <input type="hidden" name="role" value="2">
        <div class="logControl">
           
            <input type="submit" name="submit" value="Login" class="buttonM bBlue">
        </div>
    </form>
</div>


<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>
$(function(){
	
	// Checking for CSS 3D transformation support
	$.support.css3d = supportsCSS3D();

	var formContainer = $('.loginWrapper');
	// Listening for clicks on the ribbon links
	$('.flip').click(function(e){
		
		// Flipping the forms
		formContainer.toggleClass('flipped');
		
		// If there is no CSS3 3D support, simply
		// hide the login form (exposing the recover one)
		if(!$.support.css3d){
			$('#login').toggle();
		}
		e.preventDefault();
	});
	
	formContainer.find('form').submit(function(e){
		// Preventing form submissions. If you implement
		// a backend, you might want to remove this code
		//e.preventDefault();
	});
	
	
	// A helper function that checks for the 
	// support of the 3D CSS3 transformations.
	function supportsCSS3D() {
		var props = [
			'perspectiveProperty', 'WebkitPerspective', 'MozPerspective'
		], testDom = document.createElement('a');
		  
		for(var i=0; i<props.length; i++){
			if(props[i] in testDom.style){
				return true;
			}
		}
		
		return false;
	}
	//checkbox
	$('.checker').click(function(e){
		$(this).children('span').toggleClass('checked');
	});
});</script>

</body>
</html>
