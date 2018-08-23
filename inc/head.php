<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/jpeg" href="img/edumpro-ico.ico" />
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="canonical" href="http://www.edumpro.com">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popper.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
	<title>EDUMPRO - Sistema educativo</title>
	<meta name="description" content="Edumpro es la solución que te simplifica las tareas, te permite obtener información relevante, y trabaja conforme a las competencias y capacidades establecidas por el ministerio de educación.">
	<meta name="keywords"    content="Sistema educativo, SIAGIE, Intranet">
</head>
<script type="text/javascript">
        jQuery(document).ready(function ($) {
            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-0.7}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 1200,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //make sure to clear margin of the slider container element
            jssor_1_slider.$Elmt.style.margin = "";

            /*#region responsive code begin*/

            /*
                parameters to scale jssor slider to fill a container

                MAX_WIDTH
                    prevent slider from scaling too wide
                MAX_HEIGHT
                    prevent slider from scaling too high, default value is original height
                MAX_BLEEDING
                    prevent slider from bleeding outside too much, default value is 1
                    0: contain mode, allow up to 0% to bleed outside, the slider will be all inside container
                    1: cover mode, allow up to 100% to bleed outside, the slider will cover full area of container
                    0.1: flex mode, allow up to 10% to bleed outside, this is better way to make full window slider, especially for mobile devices
            */

            var MAX_WIDTH = 3000;
            var MAX_HEIGHT = 3000;
            var MAX_BLEEDING = 1;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {
                    var originalWidth = jssor_1_slider.$OriginalWidth();
                    var originalHeight = jssor_1_slider.$OriginalHeight();

                    var containerHeight = containerElement.clientHeight || originalHeight;

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    var expectedHeight = Math.min(MAX_HEIGHT || containerHeight, containerHeight);

                    //constrain bullets, arrows inside slider area, it's optional, remove it if not necessary
                    // if (MAX_BLEEDING >= 0 && MAX_BLEEDING < 1) {
                    //    var widthRatio = expectedWidth / originalWidth;
                    //    var heightRatio = expectedHeight / originalHeight;
                    //    var maxScaleRatio = Math.max(widthRatio, heightRatio);
                    //    var minScaleRatio = Math.min(widthRatio, heightRatio);

                    //    maxScaleRatio = Math.min(maxScaleRatio / minScaleRatio, 1 / (1 - MAX_BLEEDING)) * minScaleRatio;
                    //    expectedWidth = Math.min(expectedWidth, originalWidth * maxScaleRatio);
                    //    expectedHeight = Math.min(expectedHeight, originalHeight * maxScaleRatio);
                    // }

                    //scale the slider to expected size
                    jssor_1_slider.$ScaleSize(expectedWidth, expectedHeight, MAX_BLEEDING);

                    //position slider at center in vertical orientation
                    jssor_1_slider.$Elmt.style.top = ((containerHeight - expectedHeight) / 2) + "px";

                    //position slider at center in horizontal orientation
                    jssor_1_slider.$Elmt.style.left = ((containerWidth - expectedWidth) / 2) + "px";
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            /*ios disable scrolling and bounce effect*/
            //$Jssor$.$AddEvent(document, "touchmove", function(event){event.touches.length < 2 && $Jssor$.$CancelEvent(event);});

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>


        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssorb064 {position:absolute;}
        .jssorb064 .i {position:absolute;cursor:pointer;}
        .jssorb064 .i .b {fill:#000;fill-opacity:.5;stroke:#fff;stroke-width:400;stroke-miterlimit:10;stroke-opacity:0.5;}
        .jssorb064 .i:hover .b {fill-opacity:.8;}
        .jssorb064 .iav .b {fill:#ffe200;fill-opacity:1;stroke:#ffaa00;stroke-opacity:.7;stroke-width:2000;}
        .jssorb064 .iav:hover .b {fill-opacity:.6;}
        .jssorb064 .i.idn {opacity:.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>