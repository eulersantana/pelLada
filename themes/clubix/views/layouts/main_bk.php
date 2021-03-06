<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Clubix</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            //<![CDATA[
            window.__CF = window.__CF || {};
            window.__CF.AJS = {"abetterbrowser": {"ie": "7"}};
            //]]>
        </script>
        <script type="text/javascript">
            //<![CDATA[
            try {
                if (!window.CloudFlare) {
                    var CloudFlare = [{verbose: 0, p: 1379123293, byc: 0, owlid: "cf", bag2: 0, mirage2: 0, oracle: 0, paths: {cloudflare: "/cdn-cgi/nexp/abv=3462778032/"}, atok: "a45c68222cec5ae8f7db612af4627026", zone: "easy-development.com", rocket: "0", apps: {"abetterbrowser": {"ie": "7"}}}];
                    var a = document.createElement("script"), b = document.getElementsByTagName("script")[0];
                    a.async = !0;
                    a.src = "//ajax.cloudflare.com/cdn-cgi/nexp/abv=3600133553/cloudflare.min.js";
                    b.parentNode.insertBefore(a, b);
                }
            } catch (e) {
            }
            ;
            //]]>
        </script>

        <!-- Styles and JavaScript-->
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/componnet.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/application.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/easy-filter.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/jplayer/jquery.jplayer.min.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/accordion-tab.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/tabbed-interface.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/prettyPhoto/css/prettyPhoto.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/prettyPhoto/js/jquery.prettyPhoto.js'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            Application.init();
            Component.Init();
            EasyFiler.Init();
        });
    </script> 
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/rs-plugin/js/jquery.themepunch.revolution.min.js'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/rs-plugin/css/settings.css'); ?>
<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/css/style.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/jquery.nicescroll.min.js'); ?>
    <script>

        $(document).ready(function() {

            var nice = $(".block-play-list").niceScroll();  // The document page (body)

        });
    </script>

    <!--[if IE 8]>

        <link rel="stylesheet" href="css/css/ie-8.css">
        <script type="text/javascript" src="js/ie-fix.js"></script>

      <![endif]-->
</head>
    <body>
        <div class="bg-header">
            <div class="container_12">
                <div class="grid_2 alpha">
                    <div class="logo">
                        <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . "/img/logo.png", 'Logo '.Yii::app()->name, array()), Yii::app()->baseUrl); ?>
                    </div>
                </div>
                <div class="grid_2 push_8 omega social-media-container">
                    <div class="social-header-container">
                        <ul>
                            <li class="template-based-element-background-color-hover">
                                <a class="twitter-header" href="http://www.twitter.com"></a>
                            </li>
                            <li class="template-based-element-background-color-hover">
                                <a class="tumblr-header" href="http://www.tumblr.com"></a>
                            </li>
                            <li class="template-based-element-background-color-hover">
                                <a class="facebook-header" href="http://www.tumblr.com"></a>
                            </li>
                            <li class="template-based-element-background-color-hover">
                                <a class="vimeo-header" href="http://www.vimeo.com"></a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inicio do Menu princiapal-->
        <div class="clear"></div>
        <div class="bg-header-menu">
            <div class="container_12">
                <div class="grid_10 alpha">
                    <ul class="menu">
                        <li>
                            <a href="index.html" class="selected">Home</a>
                        </li>
                        <li>
                            <a href="blog-page.html">Blog</a>
                            <ul class="sub-menu-header">
                                <li>
                                    <a class="template-based-element-background-hover" href="blog-page.html">Blog Posts</a>
                                </li>
                                <li>
                                    <a class="template-based-element-background-hover" href="blog-page-single.html">Blog Post</a>
                                </li>
                                <li>
                                    <a class="template-based-element-background-hover" href="blog-page-single-carousel.html">Blog Post Carousel</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="events-page.html">Page List</a>
                            <ul class="sub-menu-header">
                                <li>
                                    <a class="template-based-element-background-hover" href="albums-page.html">Albums</a>
                                </li>
                                <li>
                                    <a class="template-based-element-background-hover" href="events-single-page.html">Event Page</a>
                                </li>
                                <li>
                                    <a class="template-based-element-background-hover" href="events-page.html">Events</a>
                                </li>
                                <li>
                                    <a class="template-based-element-background-hover" href="events-page-2.html">Events 2</a>
                                </li>
                                <li>
                                    <a class="template-based-element-background-hover" href="photos-page.html">Photos</a>
                                </li>
                                <li>
                                    <a class="template-based-element-background-hover" href="videos-page.html">Videos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements.html">Template Information</a>
                            <ul class="sub-menu-header">
                                <li>
                                    <a class="template-based-element-background-hover" href="elements.html">Elements</a>
                                </li>
                                <li>
                                    <a class="template-based-element-background-hover" href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a class="template-based-element-background-hover" href="error.html">Error Page</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="grid_2 search omega alpha container-search-top">
                    <form action="#" method="post">
                        <div class="input-bg">
<!--                            <input name="search" onblur="if (this.value == '') {
                                this.value = this.defaultValue
                               }" onclick="if (this.value == this.defaultValue) {
                                    this.value = ''
                               }" type="text" value="Search...">-->
                            <?php 
                                echo CHtml::textField("search", "", array("placeholder"=>"Buscar"))
                            ?>
                        </div>
                        <div class="bg-submit-search template-based-element-background-color-hover">
                            <?php 
//                                <input class="submit-button-search" id="submit-header-search" name="submit" type="submit" value="">
                                  echo CHtml::submitButton("",array("class"=>"submit-button-search","id"=>"submit-header-search","name"=>"submit"));
                            ?>
                        </div>
                        <div class="clear"></div>
                    </form>
                </div>
                <ul class="phone-menu">
                    <li class="page-menu">
                        <a>Home <span></span></a>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="blog-page.html">Blog</a>
                                <ul>
                                    <li>
                                        <a href="blog-page.html">Blog Posts</a>
                                    </li>
                                    <li>
                                        <a href="blog-page-single.html">Blog Post</a>
                                    </li>
                                    <li>
                                        <a href="blog-page-single-carousel.html">Blog Post
                                            Carousel</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="events-page.html">Page List</a>
                                <ul>
                                    <li>
                                        <a href="albums-page.html">Albums</a>
                                    </li>
                                    <li>
                                        <a href="events-single-page.html">Event Page</a>
                                    </li>
                                    <li>
                                        <a href="events-page.html">Events</a>
                                    </li>
                                    <li>
                                        <a href="events-page-2.html">Events 2</a>
                                    </li>
                                    <li>
                                        <a href="photos-page.html">Photos</a>
                                    </li>
                                    <li>
                                        <a href="videos-page.html">Videos</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements.html">Template Information</a>
                                <ul>
                                    <li>
                                        <a href="elements.html">Elements</a>
                                    </li>
                                    <li>
                                        <a href="typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="error.html">Error Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--Fim do Menu Principal-->
        <div class="clear"></div>
        <div class="container-slider">
        <?php
        /*
            <div class="container-slider-img">
                <ul>
                    <li data-masterspeed="300" data-slotamount="10" data-transition="fade">
                        
                        <?php 
//                        <img data-fullwidthcentering="on" src="themes/clubix-v1/img/slider-image-bg-1.jpg" alt="slider-img" class="slider-header-img">                        
                          echo CHtml::image(Yii::app()->theme->baseUrl.'/img/slider-image-bg-1.jpg',"Imagem slider ",array("class"=>"slider-header-img","data-fullwidthcentering"=>"on"));
                        ?>
                        <div class="caption randomrotate" data-easing="easeOutExpo" data-speed="300" data-start="150" data-x="0" data-y="495">
                            <div class="title-event-slider" style="margin-top: 0">
                                <h1 class="template-based-element-background-color-transparent">
                                    We Are Waiting You At ultra Galaxy Show</h1>
                            </div>
                        </div>
                        <div class="caption randomrotate" data-easing="easeOutExpo" data-speed="300" data-start="250" data-x="0" data-y="540">
                            <div class="title-event-slider" style="margin-top: 0">
                                <h2>Tickets are still available</h2>
                            </div>
                        </div>
                        <div class="grid_4 omega caption randomrotate" data-easing="easeOutExpo" data-speed="300" data-start="150" data-x="650" data-y="150">
                            <div class="information-block-container component" data-component="ticket-navigation">
                                <div class="arrow-set">
                                    <?php
//                                    <button class="right-arrow go-next">
//                                      <img alt="information-arrow-right" src="themes/clubix-v1/img/arrow-next-event.png">
//                                    </button> 
//                                    <button class="left-arrow go-prev">
//                                      <img alt="information-arrow-left" src="img/arrow-prev-event.png">
//                                    </button>
                                    echo CHtml::htmlButton(CHtml::image(Yii::app()->theme->baseUrl.'/img/arrow-next-event.png',"informação direita evento ",array()), array("class"=>"right-arrow go-next"));
                                    echo CHtml::htmlButton(CHtml::image(Yii::app()->theme->baseUrl.'/img/arrow-prev-event.png',"informação esquerda evento ",array()), array("class"=>"left-arrow go-prev"));
                                    ?>
                                </div>
                                <div class="clear"></div>
                                <div class="container-information">
                                    <ul>
                                        <li>
                                            <figure>
                                                <?php 
//                                                <img src="themes/clubix-v1/img/ultra-music-festival-min.jpg" alt="event-pic">
                                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/ultra-music-festival-min.jpg',"event-pic",array());
                                                ?>
                                            </figure>
                                            <div class="info">
                                                <ul class="time-left">
                                                    <li class="days">
                                                        <p class="number-time">03</p>
                                                        <p class="type-time">days</p>
                                                    </li>
                                                    <li class="hour">
                                                        <p class="number-time">14</p>
                                                        <p class="type-time">hour</p>
                                                    </li>
                                                    <li class="min">
                                                        <p class="number-time">22</p>
                                                        <p class="type-time">min</p>
                                                    </li>
                                                    <li class="sec">
                                                        <p class="number-time">07</p>
                                                        <p class="type-time">sec</p>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                                <div class="tiket-info">
                                                    <a class="template-based-element-background-color" href="events-single-page.html">buy tickets</a>
                                                </div>
                                                <ul class="place-time-event-slider">
                                                    <li>
                                                        <?php
//                                                        <img alt="place" src="themes/clubix-v1/img/place-icon.png">
                                                        echo CHtml::image(Yii::app()->theme->baseUrl.'/img/place-icon.png',"place",array());
                                                        ?>
                                                        <p>New York</p>
                                                    </li>
                                                    <li>
                                                        <?php
//                                                        <img alt="time" src="themes/clubix-v1/img/time-icon.png">
                                                        echo CHtml::image(Yii::app()->theme->baseUrl.'/img/time-icon.png',"time",array());
                                                        ?>
                                                        <p>12:00 pm</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li style="display: none;">
                                            <figure>
                                                <?php
//                                                <img src="themes/clubix-v1/img/fabulous-min.jpg" alt="event-pic">
                                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/fabulous-min.jpg',"event-pic",array());
                                                ?>
                                            </figure>
                                            <div class="info">
                                                <ul class="time-left">
                                                    <li class="days">
                                                        <p class="number-time">01</p>
                                                        <p class="type-time">days</p>
                                                    </li>
                                                    <li class="hour">
                                                        <p class="number-time">21</p>
                                                        <p class="type-time">hour</p>
                                                    </li>
                                                    <li class="min">
                                                        <p class="number-time">54</p>
                                                        <p class="type-time">min</p>
                                                    </li>
                                                    <li class="sec">
                                                        <p class="number-time">33</p>
                                                        <p class="type-time">sec</p>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                                <div class="tiket-info">
                                                    <a class="template-based-element-background-color" href="events-single-page.html">buy tickets</a>
                                                </div>
                                                <ul class="place-time-event-slider">
                                                    <li>
                                                        <img alt="place" src="themes/clubix-v1/img/place-icon.png">
                                                        <p>Turda</p>
                                                    </li>
                                                    <li>
                                                        <img alt="time" src="themes/clubix-v1/img/time-icon.png">
                                                        <p>02:00 am</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li style="display: none;">
                                            <figure>
                                                <img src="themes/clubix-v1/img/this-is-it-min.jpg" alt="event-pic">
                                            </figure>
                                            <div class="info">
                                                <ul class="time-left">
                                                    <li class="days">
                                                        <p class="number-time">21</p>
                                                        <p class="type-time">days</p>
                                                    </li>
                                                    <li class="hour">
                                                        <p class="number-time">09</p>
                                                        <p class="type-time">hour</p>
                                                    </li>
                                                    <li class="min">
                                                        <p class="number-time">22</p>
                                                        <p class="type-time">min</p>
                                                    </li>
                                                    <li class="sec">
                                                        <p class="number-time">06</p>
                                                        <p class="type-time">sec</p>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                                <div class="tiket-info">
                                                    <a class="template-based-element-background-color" href="events-single-page.html">buy tickets</a>
                                                </div>
                                                <ul class="place-time-event-slider">
                                                    <li>
                                                        <img alt="place" src="themes/clubix-v1/img/place-icon.png">
                                                        <p>Dej</p>
                                                    </li>
                                                    <li>
                                                        <img alt="time" src="themes/clubix-v1/img/time-icon.png">
                                                        <p>08:00 pm</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li style="display: none;">
                                            <figure>
                                                <img src="themes/clubix-v1/img/demi-lovato-min.jpg" alt="event-pic">
                                            </figure>
                                            <div class="info">
                                                <ul class="time-left">
                                                    <li class="days">
                                                        <p class="number-time">01</p>
                                                        <p class="type-time">days</p>
                                                    </li>
                                                    <li class="hour">
                                                        <p class="number-time">19</p>
                                                        <p class="type-time">hour</p>
                                                    </li>
                                                    <li class="min">
                                                        <p class="number-time">44</p>
                                                        <p class="type-time">min</p>
                                                    </li>
                                                    <li class="sec">
                                                        <p class="number-time">39</p>
                                                        <p class="type-time">sec</p>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                                <div class="tiket-info">
                                                    <a class="template-based-element-background-color" href="events-single-page.html">buy tickets</a>
                                                </div>
                                                <ul class="place-time-event-slider">
                                                    <li>
                                                        <img alt="place" src="themes/clubix-v1/img/place-icon.png">
                                                        <p>Aiud</p>
                                                    </li>
                                                    <li>
                                                        <img alt="time" src="themes/clubix-v1/img/time-icon.png">
                                                        <p>00:00 am</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="slider-title-container" data-masterspeed="300" data-slotamount="10" data-transition="easeOutExpo">
                        <img data-fullwidthcentering="on" src="themes/clubix-v1/img/slider-image-bg-2.jpg" alt="slider-img" class="slider-header-img">
                        <div class="caption randomrotate title template-based-element-background-color-transparent" data-easing="easeOutExpo" data-speed="300" data-start="600" data-x="center" data-y="250">
                            What can you do with clubix ?
                        </div>
                        <div class="caption randomrotate subtitle" data-easing="easeOutExpo" data-speed="300" data-start="700" data-x="center" data-y="300">
                            You can make events
                        </div>
                        <div class="caption randomrotate subtitle" data-easing="easeOutExpo" data-speed="300" data-start="800" data-x="center" data-y="340">
                            You can sell albums on amazon
                        </div>
                        <div class="caption randomrotate subtitle" data-easing="easeOutExpo" data-speed="300" data-start="900" data-x="center" data-y="380">
                            You can sell tickets
                        </div>
                        <div class="caption randomrotate lfb" data-easing="easeOutExpo" data-speed="300" data-start="1000" data-x="center" data-y="470">
                            <a class="click-to-start-slider" href="#">click to start</a>
                        </div>
                    </li>
                    <li class="slider-title-container" data-masterspeed="300" data-slotamount="10" data-transition="slidedown">
                        <img data-fullwidthcentering="on" src="themes/clubix-v1/img/slider-image-bg-3.jpg" alt="slider-img" class="slider-header-img">
                        <div class="caption fade" data-autoplay="false" data-easing="easeOutBack" data-nextslideatend="false" data-speed="300" data-start="500" data-x="0" data-y="238">
                            <iframe height="259" src="//player.vimeo.com/video/72625185?title=0&amp;byline=0&amp;color=ffffff" width="460"></iframe>
                        </div>
                        <div class="caption randomrotate sft title template-based-element-background-color-transparent" data-easing="easeOutExpo" data-speed="300" data-start="600" data-x="485" data-y="238">
                            What can you do with clubix ?
                        </div>
                        <div class="caption randomrotate sft subtitle" data-easing="easeOutExpo" data-speed="300" data-start="700" data-x="485" data-y="298">
                            You can make events
                        </div>
                        <div class="caption randomrotate lfb subtitle" data-easing="easeOutExpo" data-speed="300" data-start="800" data-x="485" data-y="338">
                            You can sell albums on amazon
                        </div>
                        <div class="caption randomrotate lfb subtitle" data-easing="easeOutExpo" data-speed="300" data-start="900" data-x="485" data-y="378">
                            You can sell tickets
                        </div>
                        <div class="caption randomrotate lfb" data-easing="easeOutExpo" data-speed="300" data-start="1000" data-x="485" data-y="458">
                            <a class="click-to-start-slider" href="#">click to start</a>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        <script type="text/javascript">
         
            $(document).ready(function() {
                $('.container-slider .container-slider-img').revolution(
                        {
                            delay: 9000,
                            startwidth: 960,
                            startheight: 500,
                            onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off

                            thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                            thumbHeight: 50,
                            thumbAmount: 3,
                            hideThumbs: 0,
                            navigationType: "none", // bullet, thumb, none
                            navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none

                            navigationStyle: "square", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom

                            navigationHAlign: "center", // Vertical Align top,center,bottom
                            navigationVAlign: "top", // Horizontal Align left,center,right
                            navigationHOffset: 0,
                            navigationVOffset: 20,
                            soloArrowLeftHalign: "left",
                            soloArrowLeftValign: "center",
                            soloArrowLeftHOffset: 20,
                            soloArrowLeftVOffset: 0,
                            soloArrowRightHalign: "right",
                            soloArrowRightValign: "center",
                            soloArrowRightHOffset: 20,
                            soloArrowRightVOffset: 0,
                            touchenabled: "on", // Enable Swipe Function : on/off

                            stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                            stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

                            hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                            hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
                            hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value

                            fullWidth: "on",
                            shadow: 0                //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

                        });
            });
            </script>
            <div class="container-arrow">
             <a class="left-slider-arrow" style="display: none;"><span></span></a>
                <a class="right-slider-arrow" style="display: none;"><span></span></a>
                <div class="container_12 content-slider"></div>
            </div>
          */ 
        ?>
            <div class="bg-audio-player container-1000 template-based-element-color template-based-element-border-color">
        
<?php
/*
 <!--               <div class="container_12 container-audio-player component" data-component="audio-player-large" data-component-auto-play="1" style="top:-2px;">
                    <div class="next-prev-song">
                        <button class="next-song"><img alt="next-song" src="themes/clubix-v1/img/next-song-icon.png"></button> <button class="prev-song"><img alt="prev-song" src="themes/clubix-v1/img/prev-song-icon.png"></button>
                    </div>
                    <div class="play-stop-song">
                        <button class="pause template-based-element-background-color" style="display:none;"><img alt="pause" src="themes/clubix-v1/img/pause-icon.png"></button> <button class="play"><img alt="play" src="themes/clubix-v1/img/play-icon.png"></button>
                    </div>
                    <div class="song-and-author template-based-element-border-color">
                        <img src="themes/clubix-v1/img/play-list-pic-2.jpg" alt="Playing song picture">
                        <p class="author"></p>
                        <p class="song-name"></p>
                    </div>
                    <div class="time-of-song">
                        <div class="time template-based-element-background-color-transparent" style="width: 0%;"></div>
                        <div class="info-time">
                            <span class="time-player-head"></span> <span class="right"></span>
                        </div>
                    </div>
                    <div class="menu-button-icon">
                        <button class="icon-menu-header-player"></button>
                    </div>
                    <div class="sub-menu-audio-player">
                        <div class="block-play-list">
                            <ul>
                                <li class="track" data-author-name="Alesso Year" data-song-name="Matthew..." data-song-path="mp3/Alesso-Years-ft-Matthew-Koma.mp3" data-song-picture="img/play-list-pic-1.jpg">
                                    <div class="img-play-list"><img alt="Alesso Years - Matthew-Koma" data-album-image="img/play-list-pic-1.jpg" src="img/play-list-pic-1.jpg"></div>
                                    <div class="song-name-time">
                                        <p>Alesso Year - Matthew...</p><span class="right"></span>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li class="track" data-author-name="Tujamo" data-song-name="Who" data-song-path="mp3/Tujamo-Plastik-Funk-Who.mp3" data-song-picture="img/play-list-pic-2.jpg">
                                    <div class="img-play-list"><img alt="Tujamo & Plastik Funk - Who.mp3" data-album-image="img/play-list-pic-2.jpg" src="img/play-list-pic-2.jpg"></div>
                                    <div class="song-name-time">
                                        <p>Tujamo - Who</p><span class="right"></span>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li class="track selected" data-author-name="Dimitri-Vegas" data-song-name="MOGUAI" data-song-path="mp3/Dimitri-Vegas-MOGUAI-Like Mike-Mammoth-(Original-Mix).mp3" data-song-picture="img/play-list-pic-3.jpg">
                                    <div class="img-play-list"><img alt="Coldplay - Viva la vida Picture" data-album-image="img/play-list-pic-3.jpg" src="img/play-icon-min.png"></div>
                                    <div class="song-name-time">
                                        <p>Dimitri-Vegas - MOGUAI</p><span class="right"></span>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li class="track" data-author-name="GJan-Tattoo" data-song-name="Dwin-Remix" data-song-path="mp3/GJan-Tattoo-Dwin-Remix.mp3" data-song-picture="img/play-list-pic-1.jpg">
                                    <div class="img-play-list"><img alt="GJan-Tattoo-Dwin-Remix.mp3" data-album-image="img/play-list-pic-1.jpg" src="img/play-list-pic-1.jpg"></div>
                                    <div class="song-name-time">
                                        <p>GJan-Tattoo - Dwin-Remix</p><span class="right"></span>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li class="track" data-author-name="Hardwell" data-song-name="Spaceman" data-song-path="mp3/Hardwell-Spaceman-Original-Mix-HQ.mp3" data-song-picture="img/play-list-pic-2.jpg">
                                    <div class="img-play-list"><img alt="Hardwell" data-album-image="img/play-list-pic-2.jpg" src="img/play-list-pic-2.jpg"></div>
                                    <div class="song-name-time">
                                        <p>Hardwell - Spaceman</p><span class="right"></span>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li class="track" data-author-name="Martin Garrix" data-song-name="Animals" data-song-path="mp3/Martin-Garrix-Animals.mp3" data-song-picture="img/play-list-pic-3.jpg">
                                    <div class="img-play-list"><img alt="Martin" data-album-image="img/play-list-pic-3.jpg" src="img/play-list-pic-3.jpg"></div>
                                    <div class="song-name-time">
                                        <p>Martin Garrix - Animals</p><span class="right"></span>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li class="track" data-author-name="Hardwell" data-song-name="Spaceman" data-song-path="mp3/Hardwell-Spaceman-Original-Mix-HQ.mp3" data-song-picture="img/play-list-pic-1.jpg">
                                    <div class="img-play-list"><img alt="Hardwell" data-album-image="img/play-list-pic-1.jpg" src="img/play-list-pic-1.jpg"></div>
                                    <div class="song-name-time">
                                        <p>Hardwell - Spaceman</p><span class="right"></span>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li class="track" data-author-name="Otto Knows" data-song-name="Million Voic..." data-song-path="mp3/Otto-Knows-Million-Voices-Full-Version.mp3" data-song-picture="img/play-list-pic-2.jpg">
                                    <div class="img-play-list"><img alt="Otto" data-album-image="img/play-list-pic-2.jpg" src="img/play-list-pic-2.jpg"></div>
                                    <div class="song-name-time">
                                        <p>Otto Knows - Million Voic...</p><span class="right"></span>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                                <li class="track" data-author-name="Skrillex" data-song-name="Summit" data-song-path="mp3/Skrillex-Summit-feat-Ellie-Goulding-Video-by-Pilerats.mp3" data-song-picture="img/play-list-pic-3.jpg">
                                    <div class="img-play-list"><img alt="Skrillex" data-album-image="img/play-list-pic-3.jpg" src="img/play-list-pic-3.jpg"></div>
                                    <div class="song-name-time">
                                        <p>Skrillex - Summit</p><span class="right"></span>
                                    </div>
                                    <div class="clear"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>-->
 */
 ?>
            </div>
            <div class="bg-albums-and-events template-based-element-border-color">
                <ul class="ul-list-events-albums">
                    <li>
                        <div class="flipping-albums-events container-flip-caption">
                            <?php 
//                            <img alt="fabulous" class="img-front-bg" src="themes/clubix-v1/img/fabulous-large.jpg">
                            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/fabulous-large.jpg',"fabulous",array("class"=>"img-front-bg"));
                            ?>
                            <div class="caption">
                                <?php
//                                echo '<img alt="fabulous" class="img-pink-bg" src="themes/clubix-v1/img/fabulous-large.jpg">';
                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/fabulous-large.jpg',"fabulous",array("class"=>"img-pink-bg"));
                                ?>
                                <div class="bg-pink-flip template-based-element-background-color-transparent">
                                    <h1 class="title-flipp">Mamaia beach tornament</h1>
                                    <div class="under-line-flipp"></div>
                                    <p>Mauris iaculis porttitor posuere. Praesent id metus massa,
                                        ut blandit odio. Proin quis tortor orci.</p>
                                    <a class="more-info-flipp" href="albums-single-page.html">Inscrever-me</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flipping-albums-events container-flip-caption">
                            <?php
//                            <img alt="fabulous" class="img-front-bg" src="themes/clubix-v1/img/ultra-music-festival.jpg">
                             echo CHtml::image(Yii::app()->theme->baseUrl.'/img/ultra-music-festival.jpg',"fabulous",array("class"=>"img-front-bg"));
                            ?>
                            <div class="caption">
                                <?php
//                                <img alt="fabulous" class="img-pink-bg" src="themes/clubix-v1/img/ultra-music-festival.jpg">
                                 echo CHtml::image(Yii::app()->theme->baseUrl.'/img/ultra-music-festival.jpg',"fabulous",array("class"=>"img-pink-bg"));
                                ?>
                                <div class="bg-pink-flip template-based-element-background-color-transparent">
                                    <h1 class="title-flipp">Mamaia beach tornament</h1>
                                    <div class="under-line-flipp"></div>
                                    <p>Mauris iaculis porttitor posuere. Praesent id metus massa,
                                        ut blandit odio. Proin quis tortor orci.</p>
                                    <a class="more-info-flipp" href="albums-single-page.html">Inscrever-me</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flipping-albums-events container-flip-caption">
                            <?php
//                            <img alt="fabulous" class="img-front-bg" src="themes/clubix-v1/img/this-is-it.jpg">
                            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/this-is-it.jpg',"fabulous",array("class"=>"img-front-bg"));
                            ?>
                            <div class="caption">
                                <?php
//                                <img alt="fabulous" class="img-pink-bg" src="themes/clubix-v1/img/this-is-it.jpg">
                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/this-is-it.jpg',"fabulous",array("class"=>"img-pink-bg"));
                                ?>
                                <div class="bg-pink-flip template-based-element-background-color-transparent">
                                    <h1 class="title-flipp">Mamaia beach tornament</h1>
                                    <div class="under-line-flipp"></div>
                                    <p>Mauris iaculis porttitor posuere. Praesent id metus massa,
                                        ut blandit odio. Proin quis tortor orci.</p>
                                    <a class="more-info-flipp" href="events-single-page.html">Inscrever-me</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flipping-albums-events container-flip-caption">
                            <?php
//                            <img alt="fabulous" class="img-front-bg" src="themes/clubix-v1/img/demi-lovato.jpg">
                            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/demi-lovato.jpg',"fabulous",array("class"=>"img-front-bg"));
                            ?>
                            <div class="caption">
                                <?php
//                                <img alt="fabulous" class="img-pink-bg" src="img/demi-lovato.jpg">
                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/demi-lovato.jpg',"fabulous",array("class"=>"img-pink-bg"));
                                ?>
                                <div class="bg-pink-flip template-based-element-background-color-transparent">
                                    <h1 class="title-flipp">Mamaia beach tornament</h1>
                                    <div class="under-line-flipp"></div>
                                    <p>Mauris iaculis porttitor posuere. Praesent id metus massa,
                                        ut blandit odio. Proin quis tortor orci.</p>
                                    <a class="more-info-flipp" href="events-single-page.html">Inscrever-me</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flipping-albums-events container-flip-caption">
                            <?php
//                            <img alt="fabulous" class="img-front-bg" src="themes/clubix-v1/img/event-5.jpg">
                            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/event-5.jpg',"fabulous",array("class"=>"img-front-bg"));
                            ?>
                            <div class="caption">
                                <?php
//                                <img alt="fabulous" class="img-pink-bg" src="themes/clubix-v1/img/event-5.jpg">
                                echo CHtml::image(Yii::app()->theme->baseUrl . '/img/event-5.jpg', "fabulous", array("class" => "img-pink-bg"));
                                ?>
                                <div class="bg-pink-flip template-based-element-background-color-transparent">
                                    <h1 class="title-flipp">Mamaia beach tornament</h1>
                                    <div class="under-line-flipp"></div>
                                    <p>Mauris iaculis porttitor posuere. Praesent id metus massa,
                                        ut blandit odio. Proin quis tortor orci.</p>
                                    <a class="more-info-flipp" href="events-single-page.html">Inscrever-me</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flipping-albums-events container-flip-caption">
                            <?php
//                            <img alt="fabulous" class="img-front-bg" src="themes/clubix-v1/img/event-6.jpg">
                            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/event-6.jpg',"fabulous",array("class"=>"img-front-bg"));
                            ?>
                            <div class="caption">
                                <?php
//                                <img alt="fabulous" class="img-pink-bg" src="img/event-6.jpg">
                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/event-6.jpg',"fabulous",array("class"=>"img-pink-bg"));
                                ?>
                                <div class="bg-pink-flip template-based-element-background-color-transparent">
                                    <h1 class="title-flipp">Mamaia beach tornament</h1>
                                    <div class="under-line-flipp"></div>
                                    <p>Mauris iaculis porttitor posuere. Praesent id metus massa,
                                        ut blandit odio. Proin quis tortor orci.</p>
                                    <a class="more-info-flipp" href="albums-single-page.html">Inscrever-me</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="flipping-albums-events container-flip-caption">
                            <?php
//                            <img alt="fabulous" class="img-front-bg" src="themes/clubix-v1/img/event-7.jpg">
                            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/event-7.jpg',"fabulous",array("class"=>"img-front-bg"));
                            ?>
                            <div class="caption">
                                <?php
//                                <img alt="fabulous" class="img-pink-bg" src="img/event-7.jpg">
                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/event-7.jpg',"fabulous",array("class"=>"img-pink-bg"));
                                ?>
                                <div class="bg-pink-flip template-based-element-background-color-transparent">
                                    <h1 class="title-flipp">Mamaia beach tornament</h1>
                                    <div class="under-line-flipp"></div>
                                    <p>Mauris iaculis porttitor posuere. Praesent id metus massa,
                                        ut blandit odio. Proin quis tortor orci.</p>
                                    <a class="more-info-flipp" href="albums-single-page.html">Inscrever-me</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
            <div class="show-hide-events-albums template-based-element-background-color">
                <span></span>
            </div>
        </div>
        <div class="clear"></div>
        <div class="container-title-page">
            <div class="container_12">
                <h1>SEJA BEM VINDO AO <span class="white"><?php echo Yii::app()->name ?></span></h1>
            </div>
        </div>
        <div class="container-960 content-page-home">
            <div class="grid_12 container_12 alpha omega">
<?php
/*
<!--                <ul class="features-01">
                    <li>
                        <img alt="make-events" class="container-img" src="img/make-events-image.jpg">
                        <div class="bg-pink-li-feauture template-based-element-background-color">
                        </div><a href="events-single-page.html">
                            <div class="feature template-based-element-background-color-transparent">
                                <img alt="make-events-icon" src="img/make-events-icon.png">
                                <p>You can</p>
                                <p>make events</p>
                            </div></a>
                    </li>
                    <li>
                        <img alt="make-events" class="container-img" src="img/make-albums-image.jpg">
                        <div class="bg-pink-li-feauture template-based-element-background-color">
                        </div><a href="albums-single-page.html">
                            <div class="feature template-based-element-background-color-transparent">
                                <img alt="make-albums-icon" src="img/make-albums-icon.png">
                                <p>You can</p>
                                <p>make albums</p>
                            </div></a>
                    </li>
                    <li>
                        <img alt="make-events" class="container-img" src="img/make-a-radio-image.jpg">
                        <div class="bg-pink-li-feauture template-based-element-background-color">
                        </div><a href="elements.html">
                            <div class="feature template-based-element-background-color-transparent">
                                <img alt="make-a-radio-icon" src="img/make-a-radio-icon.png">
                                <p>You can</p>
                                <p>make a radio</p>
                            </div></a>
                    </li>
                </ul>-->
 */
?>
                <div class="grid_8 alpha">
                    <div class="posts">
                        <h1 class="underline-title">Latest <span>posts</span></h1>
                        <div class="underline-bg">
                            <div class="underline template-based-element-background-color">
                            </div>
                        </div>
                        <div class="posts-container">
                            <div class="post-container">
                                <div class="left-content">
                                    <?php
//                                    <img alt="post-img" class="post-img" src="themes/clubix-v1/img/pic-1-image.jpg">
                                    echo CHtml::image(Yii::app()->theme->baseUrl.'/img/pic-1-image.jpg',"post-img",array("class"=>"post-img"));
                                    ?>
                                    <h1 class="title-tags">tags</h1>
                                    <span class="tag"><a class="template-based-element-color-hover" href="#">web design</a></span> 
                                    <span class="tag"><a class="template-based-element-color-hover" href="#">life style</a></span>
                                    <span class="tag"><a class="template-based-element-color-hover" href="#">another</a></span>
                                    <span class="tag"><a class="template-based-element-color-hover" href="#">god</a></span>
                                    <span class="tag"><a class="template-based-element-color-hover" href="#">trance music</a></span>
                                </div>
                                <div class="right-content">
                                    <a class="title-post" href="blog-page-single.html">Here come
                                        bloag title lorem ipsum dolor ? Dino ninoou can't take this
                                        test because dorms afnt</a>
                                    <div class="clear"></div>
                                    <div class="info-post">
                                        <ul>
                                            <li>
                                                <?php
//                                                <img alt="user" src="themes/clubix-v1/img/user-post-icon.png">
                                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/user-post-icon.png',"user",array());
                                                ?>
                                                <p><a class="template-based-element-color-hover" href="#">Ses Vasile Daniel</a> in <a class="template-based-element-color-hover" href="#">developing</a></p>
                                            </li>
                                            <li>
                                                <?php
//                                                <img alt="comment" src="themes/clubix-v1/img/comments-post-icon.png">
                                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/comments-post-icon.png',"comentario",array());
                                                ?>
                                                <p><a class="template-based-element-color-hover" href="blog-page-single.html#comments">100 comments</a></p>
                                            </li>
                                            <li>
                                                <?php
//                                                <img alt="time" src="themes/clubix-v1/img/time-post-icon.png">
                                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/time-post-icon.png',"time",array());
                                                ?>
                                                <p><a class="template-based-element-color-hover" href="blog-page-single.html">21 Mai 2013</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="content-post-text">Morbi gravida, ligula eget lacinia
                                        auctor, mi quam vestibulum dolor, in iaculis ante nulla eu
                                        nisi. Integer molestie commodo euismod. Morbi pellentesque
                                        turpis diam, ac interdum erat rutrum et. Aliquam
                                        dapibus</p>
                                    <a class="read-more template-based-element-background-color" href="blog-page-single.html">Read more</a>
                                </div>
                                <div class="clear"></div>
                            </div>
<?php 
/*
<!--                            <div class="post-container">
                                <div class="left-content">
                                    <img alt="post-img" class="post-img" src="themes/clubix-v1/img/pic-2-image.jpg">
                                    <h1 class="title-tags">tags</h1><span class="tag"><a class="template-based-element-color-hover" href="#">web
                                            design</a></span> <span class="tag"><a class="template-based-element-color-hover" href="#">life
                                            style</a></span> <span class="tag"><a class="template-based-element-color-hover" href="#">another</a></span> <span class="tag"><a class="template-based-element-color-hover" href="#">god</a></span>
                                    <span class="tag"><a class="template-based-element-color-hover" href="#">trance music</a></span>
                                </div>
                                <div class="right-content">
                                    <a class="title-post" href="blog-page-single.html">Here come
                                        bloag title lorem ipsum dolor ? Dino ninoou can�t take this
                                        test because dorms afnt</a>
                                    <div class="clear"></div>
                                    <div class="info-post">
                                        <ul>
                                            <li>
                                                <img alt="user" src="themes/clubix-v1/img/user-post-icon.png">
                                                <p><a class="template-based-element-color-hover" href="#">Ses Vasile Daniel</a> in <a class="template-based-element-color-hover" href="#">developing</a></p>
                                            </li>
                                            <li>
                                                <img alt="comment" src="themes/clubix-v1/img/comments-post-icon.png">
                                                <p><a class="template-based-element-color-hover" href="blog-page-single.html#comments">100 comments</a></p>
                                            </li>
                                            <li>
                                                <img alt="time" src="themes/clubix-v1/img/time-post-icon.png">
                                                <p><a class="template-based-element-color-hover" href="blog-page-single.html">21 Mai 2013</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="content-post-text">Morbi gravida, ligula eget lacinia
                                        auctor, mi quam vestibulum dolor, in iaculis ante nulla eu
                                        nisi. Integer molestie commodo euismod. Morbi pellentesque
                                        turpis diam, ac interdum erat rutrum et. Aliquam
                                        dapibus</p><a class="read-more template-based-element-background-color" href="blog-page-single.html">Read more</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="post-container">
                                <div class="left-content">
                                    <img alt="post-img" class="post-img" src="themes/clubix-v1/img/pic-3-image.jpg">
                                    <h1 class="title-tags">tags</h1><span class="tag"><a class="template-based-element-color-hover" href="#">web
                                            design</a></span> <span class="tag"><a class="template-based-element-color-hover" href="#">life
                                            style</a></span> <span class="tag"><a class="template-based-element-color-hover" href="#">another</a></span> <span class="tag"><a class="template-based-element-color-hover" href="#">god</a></span>
                                    <span class="tag"><a class="template-based-element-color-hover" href="#">trance music</a></span>
                                </div>
                                <div class="right-content">
                                    <a class="title-post" href="blog-page-single.html">Here come
                                        bloag title lorem ipsum dolor ? Dino ninoou can�t take this
                                        test because dorms afnt</a>
                                    <div class="clear"></div>
                                    <div class="info-post">
                                        <ul>
                                            <li>
                                                <img alt="user" src="themes/clubix-v1/img/user-post-icon.png">
                                                <p><a class="template-based-element-color-hover" href="#">Ses Vasile Daniel</a> in <a class="template-based-element-color-hover" href="#">developing</a></p>
                                            </li>
                                            <li>
                                                <img alt="comment" src="themes/clubix-v1/img/comments-post-icon.png">
                                                <p><a class="template-based-element-color-hover" href="blog-page-single.html#comments">100 comments</a></p>
                                            </li>
                                            <li>
                                                <img alt="time" src="themes/clubix-v1/img/time-post-icon.png">
                                                <p><a class="template-based-element-color-hover" href="blog-page-single.html">21 Mai 2013</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="content-post-text">Morbi gravida, ligula eget lacinia
                                        auctor, mi quam vestibulum dolor, in iaculis ante nulla eu
                                        nisi. Integer molestie commodo euismod. Morbi pellentesque
                                        turpis diam, ac interdum erat rutrum et. Aliquam
                                        dapibus</p><a class="read-more template-based-element-background-color" href="blog-page-single.html">Read more</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="post-container">
                                <div class="left-content">
                                    <img alt="post-img" class="post-img" src="themes/clubix-v1/img/pic-1-image.jpg">
                                    <h1 class="title-tags">tags</h1><span class="tag"><a class="template-based-element-color-hover" href="#">web
                                            design</a></span> <span class="tag"><a class="template-based-element-color-hover" href="#">life
                                            style</a></span> <span class="tag"><a class="template-based-element-color-hover" href="#">another</a></span> <span class="tag"><a class="template-based-element-color-hover" href="#">god</a></span>
                                    <span class="tag"><a class="template-based-element-color-hover" href="#">trance music</a></span>
                                </div>
                                <div class="right-content">
                                    <a class="title-post" href="blog-page-single.html">Here come
                                        bloag title lorem ipsum dolor ? Dino ninoou can�t take this
                                        test because dorms afnt</a>
                                    <div class="clear"></div>
                                    <div class="info-post">
                                        <ul>
                                            <li>
                                                <img alt="user" src="themes/clubix-v1/img/user-post-icon.png">
                                                <p><a class="template-based-element-color-hover" href="#">Ses Vasile Daniel</a> in <a class="template-based-element-color-hover" href="#">developing</a></p>
                                            </li>
                                            <li>
                                                <img alt="comment" src="themes/clubix-v1/img/comments-post-icon.png">
                                                <p><a class="template-based-element-color-hover" href="blog-page-single.html#comments">100 comments</a></p>
                                            </li>
                                            <li>
                                                <img alt="time" src="themes/clubix-v1/img/time-post-icon.png">
                                                <p><a class="template-based-element-color-hover" href="blog-page-single.html">21 Mai 2013</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="content-post-text">Morbi gravida, ligula eget lacinia
                                        auctor, mi quam vestibulum dolor, in iaculis ante nulla eu
                                        nisi. Integer molestie commodo euismod. Morbi pellentesque
                                        turpis diam, ac interdum erat rutrum et. Aliquam
                                        dapibus</p><a class="read-more template-based-element-background-color" href="blog-page-single.html">Read more</a>
                                </div>
                                <div class="clear"></div>
                            </div>-->
*/
?>
                        </div>
                        <h1 class="underline-title">Latest <span>events</span></h1>
                        <div class="underline-bg">
                            <div class="underline template-based-element-background-color">
                            </div>
                        </div>
                    </div>
                    <ul class="latest-events home-latest-events">
                        <li class="home-latest-events-li">
                            <div class="flipping-albums-events container-flip-caption">
                                <?php
//                                <img alt="latest-event" class="img-latest-event template-based-element-border-color" src="themes/clubix-v1/img/tournament-1-img.jpg">
                                    echo CHtml::image(Yii::app()->theme->baseUrl.'/img/tournament-1-img.jpg',"latest-event",array("class"=>"img-latest-event template-based-element-border-color"));
                                ?>
                                <div class="black-sec-tornament">
                                    <h1 class="title-latst-h1"><a href="#">Mamaia beach tornament</a></h1>
                                    <div class="underline-title-latest-events"></div>
                                    <ul class="info-latest-events">
                                        <li>
                                            <?php
//                                            <img alt="place" src="themes/clubix-v1/img/place-icon-2.png">
                                            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/place-icon-2.png',"place",array());
                                            ?>
                                            <p>Vama Veche, Romania</p>
                                        </li>
                                        <li>
                                            <?php
//                                            <img alt="date" src="themes/clubix-v1/img/date-icon.png">
                                            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/date-icon.png',"data",array());
                                            ?>
                                            <p>19/12/2013</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="back caption">
                                    <?php
//                                    <img alt="latest-event" class="img-latest-event template-based-element-border-color" src="themes/clubix-v1/img/tournament-1-img.jpg">
                                    echo CHtml::image(Yii::app()->theme->baseUrl.'/img/tournament-1-img.jpg',"latest-event",array("class"=>"img-latest-event template-based-element-border-color"));
                                    ?>
                                    <div class="bg-black-flip">
                                        <h1 class="title-flipp">Mamaia beach tornament</h1>
                                        <div class="under-line-flipp"></div>
                                        <div class="time-latest-events-flipp">
                                            10 / NOVEMBER / 2013
                                        </div>
                                        <p class="description-tournament">Mauris iaculis porttitor
                                            posuere. Praesent id metus massa, ut blandit odio. Proin quis
                                            tortor orci. Etiam at risus et justo dignis. Dasmac dracer
                                            carades dacer.</p><a class="more-info-flipp template-based-element-background-color" href="#">Inscrever-me</a>
                                        <ul class="info-latest-events">
                                            <li>
                                                <?php
    //                                            <img alt="place" src="themes/clubix-v1/img/place-icon-2.png">
                                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/place-icon-2.png',"place",array());
                                                ?>
                                                <p>Vama Veche, Romania</p>
                                            </li>
                                            <li>
                                                <?php
//                                                <img alt="date" src="themes/clubix-v1/img/time-icon-2.png">
                                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/time-icon-2.png',"data",array());
                                                ?>
                                                <p>11:34 PM - 01:32 AM</p>
                                            </li>
                                        </ul>
                                    </div><span class="clear"></span>
                                </div>
                            </div>
                        </li>
                        <li class="home-latest-events-li">
                            <div class="flipping-albums-events container-flip-caption">
                                <?php
//                                <img alt="latest-event" class="img-latest-event template-based-element-border-color" src="themes/clubix-v1/img/tournament-6-img.jpg">
                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/tournament-6-img.jpg',"latest-event",array("class"=>"img-latest-event template-border-color"));
                                ?>
                                <div class="black-sec-tornament">
                                    <h1 class="title-latst-h1"><a href="#">Mamaia beach
                                            tornament</a></h1>
                                    <div class="underline-title-latest-events"></div>
                                    <ul class="info-latest-events">
                                        <li>
                                            <?php
//                                            <img alt="place" src="themes/clubix-v1/img/place-icon-2.png">
                                            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/place-icon-2.png',"place",array());
                                            ?>
                                            <p>Vama Veche, Romania</p>
                                        </li>
                                        <li>
                                            <?php
//                                                <img alt="date" src="themes/clubix-v1/img/date-icon.png">
                                            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/date-icon.png',"data",array());
                                            ?>
                                            <p>19/12/2013</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="back caption">
                                    <img alt="latest-event" class="img-latest-event template-based-element-border-color" src="themes/clubix-v1/img/tournament-6-img.jpg">
                                    <div class="bg-black-flip">
                                        <h1 class="title-flipp">Mamaia beach tornament</h1>
                                        <div class="under-line-flipp"></div>
                                        <div class="time-latest-events-flipp">
                                            10 / NOVEMBER / 2013
                                        </div>
                                        <p class="description-tournament">Mauris iaculis porttitor
                                            posuere. Praesent id metus massa, ut blandit odio. Proin quis
                                            tortor orci. Etiam at risus et justo dignis. Dasmac dracer
                                            carades dacer.</p><a class="more-info-flipp template-based-element-background-color" href="#">Inscrever-me</a>
                                        <ul class="info-latest-events">
                                            <li>
                                                <?php
//                                                <img alt="place" src="themes/clubix-v1/img/place-icon-2.png">
                                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/place-icon-2.png',"place",array());
                                                ?>
                                                <p>Vama Veche, Romania</p>
                                            </li>
                                            <li>
                                                <?php
//                                                <img alt="date" src="themes/clubix-v1/img/time-icon-2.png">
                                                echo CHtml::image(Yii::app()->theme->baseUrl.'/img/time-icon-2.png',"time",array());
                                                ?>
                                                <p>11:34 PM - 01:32 AM</p>
                                            </li>
                                        </ul>
                                    </div><span class="clear"></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
<?php 
/*
<!--                <div class="grid_4 omega container-sidebar">
                    <ul class="widgets-ul">
                        <li>
                            <div class="widget">
                                <h1 class="underline-title">next <span>event</span></h1>
                                <div class="underline-bg">
                                    <div class="underline template-based-element-background-color">
                                    </div>
                                </div>
                                <ul class="side-bar-list">
                                    <li class="sidebar-list-li">
                                        <div class="grid_4 omega alpha">
                                            <div class="information-block-container event-sidebar-block">
                                                <div class="container-information">
                                                    <figure>
                                                        <img alt="event-pic" src="img/ultra-music-festival-min.jpg">
                                                    </figure>
                                                    <div class="info">
                                                        <ul class="time-left">
                                                            <li>
                                                                <p class="number-time">02</p>
                                                                <p class="type-time">days</p>
                                                            </li>
                                                            <li>
                                                                <p class="number-time">14</p>
                                                                <p class="type-time">hour</p>
                                                            </li>
                                                            <li>
                                                                <p class="number-time">22</p>
                                                                <p class="type-time">min</p>
                                                            </li>
                                                            <li>
                                                                <p class="number-time">07</p>
                                                                <p class="type-time">sec</p>
                                                            </li>
                                                        </ul>
                                                        <div class="clear"></div>
                                                        <div class="tiket-info">
                                                            <a class="template-based-element-background-color" href="events-single-page.html">buy tickets</a>
                                                        </div>
                                                        <ul class="place-time-event-slider">
                                                            <li>
                                                                <img alt="place" src="img/place-icon.png">
                                                                <p>New York</p>
                                                            </li>
                                                            <li>
                                                                <img alt="time" src="img/time-icon.png">
                                                                <p>12:00 pm</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </li>
                        <li>
                            <div class="widget">
                                <h1 class="underline-title">upcoming <span>event</span></h1>
                                <div class="underline-bg">
                                    <div class="underline template-based-element-background-color">
                                    </div>
                                </div>
                                <ul class="side-bar-list">
                                    <li class="sidebar-list-li">
                                        <div class="grid_4 omega alpha">
                                            <div class="information-block-container event-sidebar-block">
                                                <div class="container-information">
                                                    <figure>
                                                        <img alt="event-pic" src="img/fabulous-min.jpg">
                                                    </figure>
                                                    <div class="info info-2-time-left">
                                                        <ul class="time-left sidebar-time-left">
                                                            <li>
                                                                <p class="number-time">03</p>
                                                            </li>
                                                            <li>
                                                                <p class="number-time">14</p>
                                                            </li>
                                                            <li class="year-event-block">
                                                                <p class="number-time">2013</p>
                                                            </li>
                                                        </ul>
                                                        <div class="clear"></div>
                                                        <div class="tiket-info">
                                                            <a class="template-based-element-background-color" href="events-single-page.html">more info</a>
                                                        </div>
                                                        <ul class="place-time-event-slider">
                                                            <li>
                                                                <img alt="place" src="img/place-icon.png">
                                                                <p>New York</p>
                                                            </li>
                                                            <li>
                                                                <img alt="time" src="img/time-icon.png">
                                                                <p>12:00 pm</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                    <li class="sidebar-list-li">
                                        <div class="grid_4 omega alpha">
                                            <div class="information-block-container event-sidebar-block">
                                                <div class="container-information">
                                                    <figure>
                                                        <img alt="event-pic" src="img/this-is-it-min.jpg">
                                                    </figure>
                                                    <div class="info info-2-time-left">
                                                        <ul class="time-left sidebar-time-left">
                                                            <li>
                                                                <p class="number-time">03</p>
                                                            </li>
                                                            <li>
                                                                <p class="number-time">14</p>
                                                            </li>
                                                            <li class="year-event-block">
                                                                <p class="number-time">2013</p>
                                                            </li>
                                                        </ul>
                                                        <div class="clear"></div>
                                                        <div class="tiket-info">
                                                            <a class="template-based-element-background-color" href="events-single-page.html">buy tickets</a>
                                                        </div>
                                                        <ul class="place-time-event-slider">
                                                            <li>
                                                                <img alt="place" src="img/place-icon.png">
                                                                <p>New York</p>
                                                            </li>
                                                            <li>
                                                                <img alt="time" src="img/time-icon.png">
                                                                <p>12:00 pm</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                    <li class="sidebar-list-li">
                                        <div class="grid_4 omega alpha">
                                            <div class="information-block-container event-sidebar-block">
                                                <div class="container-information">
                                                    <figure>
                                                        <img alt="event-pic" src="img/demi-lovato-min.jpg">
                                                    </figure>
                                                    <div class="info info-2-time-left">
                                                        <ul class="time-left sidebar-time-left">
                                                            <li>
                                                                <p class="number-time">03</p>
                                                            </li>
                                                            <li>
                                                                <p class="number-time">14</p>
                                                            </li>
                                                            <li class="year-event-block">
                                                                <p class="number-time">2013</p>
                                                            </li>
                                                        </ul>
                                                        <div class="clear"></div>
                                                        <div class="tiket-info canceled">
                                                            <a href="events-single-page.html">canceled</a>
                                                        </div>
                                                        <ul class="place-time-event-slider">
                                                            <li>
                                                                <img alt="place" src="img/place-icon.png">
                                                                <p>New York</p>
                                                            </li>
                                                            <li>
                                                                <img alt="time" src="img/time-icon.png">
                                                                <p>12:00 pm</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </li>
                        <li>
                            <div class="widget">
                                <h1 class="underline-title">sound <span>cloud</span></h1>
                                <div class="underline-bg">
                                    <div class="underline template-based-element-background-color">
                                    </div>
                                </div>
                                <div class="sc-container">
                                    <iframe height="145" src="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F97617992" style="width: 280px;"></iframe>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </li>
                        <li>
                            <div class="widget">
                                <h1 class="underline-title">audio <span>player</span></h1>
                                <div class="underline-bg">
                                    <div class="underline template-based-element-background-color">
                                    </div>
                                </div>
                                <div class="side-bar">
                                    <ul class="list-play-list-side-bar component" data-component="audio-player">
                                        <li class="sidebar-li-audio-player-01 track" data-author-name="Alesso Year" data-song-name="Matthew..." data-song-path="mp3/Alesso-Years-ft-Matthew-Koma.mp3" data-song-picture="img/play-list-pic-1.jpg">
                                            <div class="play-pause-sec download-song-side-bar">
                                                <div class="image-play-side-bar image-download-side-bar">
                                                </div>
                                            </div>
                                            <div class="play-pause-sec">
                                                <div class="image-play-side-bar"></div>
                                            </div>
                                            <div class="song-name-side-bar">
                                                <div class="timer-bg-sidebar template-based-element-background-transparent" style="width: 0;"></div>
                                                <p>Alesso Year - Matthew...</p><span class="song-name-text"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="sidebar-li-audio-player-01 track" data-author-name="Tujamo" data-song-name="Who" data-song-path="mp3/Tujamo-Plastik-Funk-Who.mp3" data-song-picture="img/play-list-pic-2.jpg">
                                            <div class="play-pause-sec download-song-side-bar">
                                                <div class="image-play-side-bar image-download-side-bar">
                                                </div>
                                            </div>
                                            <div class="play-pause-sec">
                                                <div class="image-play-side-bar"></div>
                                            </div>
                                            <div class="song-name-side-bar">
                                                <div class="timer-bg-sidebar template-based-element-background-transparent" style="width: 0;"></div>
                                                <p>Tujamo - Who</p><span class="song-name-text"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="sidebar-li-audio-player-01 track" data-author-name="Dimitri-Vegas" data-song-name="MOGUAI" data-song-path="mp3/Dimitri-Vegas-MOGUAI-Like Mike-Mammoth-(Original-Mix).mp3" data-song-picture="img/play-list-pic-3.jpg">
                                            <div class="play-pause-sec download-song-side-bar">
                                                <div class="image-play-side-bar image-download-side-bar">
                                                </div>
                                            </div>
                                            <div class="play-pause-sec">
                                                <div class="image-play-side-bar"></div>
                                            </div>
                                            <div class="song-name-side-bar">
                                                <div class="timer-bg-sidebar template-based-element-background-transparent" style="width: 0;"></div>
                                                <p>Dimitri-Vegas - MOGUAI</p><span class="song-name-text"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="sidebar-li-audio-player-01 track" data-author-name="GJan-Tattoo" data-song-name="Dwin-Remix" data-song-path="mp3/GJan-Tattoo-Dwin-Remix.mp3" data-song-picture="img/play-list-pic-1.jpg">
                                            <div class="play-pause-sec download-song-side-bar">
                                                <div class="image-play-side-bar image-download-side-bar">
                                                </div>
                                            </div>
                                            <div class="play-pause-sec">
                                                <div class="image-play-side-bar"></div>
                                            </div>
                                            <div class="song-name-side-bar">
                                                <div class="timer-bg-sidebar template-based-element-background-transparent" style="width: 0;"></div>
                                                <p>GJan-Tattoo - Dwin-Remix</p><span class="song-name-text"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="sidebar-li-audio-player-01 track" data-author-name="Hardwell" data-song-name="Spaceman" data-song-path="mp3/Hardwell-Spaceman-Original-Mix-HQ.mp3" data-song-picture="img/play-list-pic-2.jpg">
                                            <div class="play-pause-sec download-song-side-bar">
                                                <div class="image-play-side-bar image-download-side-bar">
                                                </div>
                                            </div>
                                            <div class="play-pause-sec">
                                                <div class="image-play-side-bar"></div>
                                            </div>
                                            <div class="song-name-side-bar">
                                                <div class="timer-bg-sidebar template-based-element-background-transparent" style="width: 0;"></div>
                                                <p>Hardwell - Spaceman</p><span class="song-name-text"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="sidebar-li-audio-player-01 track" data-author-name="Martin Garrix" data-song-name="Animals" data-song-path="mp3/Martin-Garrix-Animals.mp3" data-song-picture="img/play-list-pic-3.jpg">
                                            <div class="play-pause-sec download-song-side-bar">
                                                <div class="image-play-side-bar image-download-side-bar">
                                                </div>
                                            </div>
                                            <div class="play-pause-sec">
                                                <div class="image-play-side-bar"></div>
                                            </div>
                                            <div class="song-name-side-bar">
                                                <div class="timer-bg-sidebar template-based-element-background-transparent" style="width: 0;"></div>
                                                <p>Martin Garrix - Animals</p><span class="song-name-text"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="sidebar-li-audio-player-01 track" data-author-name="Hardwell" data-song-name="Spaceman" data-song-path="mp3/Hardwell-Spaceman-Original-Mix-HQ.mp3" data-song-picture="img/play-list-pic-1.jpg">
                                            <div class="play-pause-sec download-song-side-bar">
                                                <div class="image-play-side-bar image-download-side-bar">
                                                </div>
                                            </div>
                                            <div class="play-pause-sec">
                                                <div class="image-play-side-bar"></div>
                                            </div>
                                            <div class="song-name-side-bar">
                                                <div class="timer-bg-sidebar template-based-element-background-transparent" style="width: 0;"></div>
                                                <p>Hardwell - Spaceman</p><span class="song-name-text"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="sidebar-li-audio-player-01 track" data-author-name="Otto Knows" data-song-name="Million Voic..." data-song-path="mp3/Otto-Knows-Million-Voices-Full-Version.mp3" data-song-picture="img/play-list-pic-2.jpg">
                                            <div class="play-pause-sec download-song-side-bar">
                                                <div class="image-play-side-bar image-download-side-bar">
                                                </div>
                                            </div>
                                            <div class="play-pause-sec">
                                                <div class="image-play-side-bar"></div>
                                            </div>
                                            <div class="song-name-side-bar">
                                                <div class="timer-bg-sidebar template-based-element-background-transparent" style="width: 0;"></div>
                                                <p>Otto Knows - Million Voic...</p><span class="song-name-text"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </li>
                                        <li class="sidebar-li-audio-player-01 track" data-author-name="Skrillex" data-song-name="Summit" data-song-path="mp3/Skrillex-Summit-feat-Ellie-Goulding-Video-by-Pilerats.mp3" data-song-picture="img/play-list-pic-3.jpg">
                                            <div class="play-pause-sec download-song-side-bar">
                                                <div class="image-play-side-bar image-download-side-bar">
                                                </div>
                                            </div>
                                            <div class="play-pause-sec">
                                                <div class="image-play-side-bar"></div>
                                            </div>
                                            <div class="song-name-side-bar">
                                                <div class="timer-bg-sidebar template-based-element-background-transparent" style="width: 0;"></div>
                                                <p>Skrillex - Summit</p><span class="song-name-text"></span>
                                            </div>
                                            <div class="clear"></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </li>
                    </ul>
                </div>-->
 */
?>
            </div>
            <div class="clear"></div>
        </div> 
        <?php
        /*
<!--        <div class="panel templateColorSwitcherPanel">
            <div class="container-panel">
                <div class="colors">
                    <h1>color schemes</h1>
                    <a class="colorToggle yellow" data-dark-color="rgba(230,126,34,1)" data-dark-color-transparent="rgba(230,126,34,0.5)" data-light-color="rgba(241,196,15,1)" data-light-color-transparent="rgba(241,196,15,0.5)"></a>
                    <a class="colorToggle green" data-dark-color="rgba(39,174,96,1)" data-dark-color-transparent="rgba(39,174,96,0.5)" data-light-color="rgba(46,204,113,1)" data-light-color-transparent="rgba(46,204,113,0.5)"></a>
                    <a class="colorToggle blue" data-dark-color="rgba(25,107,209,1)" data-dark-color-transparent="rgba(25,107,209,0.5)" data-light-color="rgba(72,145,236,1)" data-light-color-transparent="rgba(72,145,236,0.5)"></a>
                    <a class="colorToggle purple" data-dark-color="rgba(142,68,173,1)" data-dark-color-transparent="rgba(142,68,173,0.5)" data-light-color="rgba(161,29,216,1)" data-light-color-transparent="rgba(161,29,216,0.5)"></a>
                    <a class="colorToggle red" data-dark-color="rgba(216,60,60,1)" data-dark-color-transparent="rgba(216,60,60,0.5)" data-light-color="rgba(235,75,75,1)" data-light-color-transparent="rgba(235,75,75,0.5)"></a>
                    <a class="colorToggle light-blue" data-dark-color="rgba(65,171,206,1)" data-dark-color-transparent="rgba(65,171,206,0.5)" data-light-color="rgba(77,194,232,1)" data-light-color-transparent="rgba(77,194,232,0.5)"></a>
                </div>
                <div class="version">
                    <h1>
                        versions
                    </h1>
                    <a href="http://www.easy-development.com/clubix-light-v1/" class="light">light</a>
                    <a href="http://www.easy-development.com/clubix-light-dark-v1/" class="light-dark"></a>
                </div>
            </div>
            <div class="settings">
                <div class="settings-icon togglePanel"></div>
            </div>
            <div class="clear"></div>
        </div> -->
         */
        ?>
        <script src="template-color-switcher/scripts/templateColorSwitcher.js" type="text/javascript"></script>
        <script src="template-color-switcher/scripts/colorSwitcherPanel.js" type="text/javascript"></script>
        <link href="template-color-switcher/css/style.css" rel="stylesheet" type="text/css">
        <link href="template-color-switcher/css/adaptive.css" rel="stylesheet" type="text/css">
        <script type="text/javascript">
            $(document).ready(function() {
                TemplateColorSwitcher.Init();
                ColorSwitcherPanel.Init({
                    container: $('.templateColorSwitcherPanel'),
                    switcherObject: TemplateColorSwitcher
                });
            });
        </script>
        <div class="container-footer-top template-based-element-border-color">
            <div class="container_12">
                <ul class="footer-top-itm">
                    <li class="grid_3">
                        <a class="logo-footer" href="index.html">
                            <?php echo CHtml::image(Yii::app()->theme->baseUrl.'/img/logo.png',"Logo ".Yii::app()->name) ?>
                        </a>
                        <p class="italic">Lorem ipsum ex vix illud nonummy, novum tation et
                            his. At vix scriptaset patrioque scribentur, at pro fugit erts</p>
                        <p class="italic">Srterem molestiae, sed et vivendo ali Lorem ipsum
                            ex vix illud nonummy, novum tation et his. At vix scripta</p>
                    </li>
                    <li class="grid_3">
                        <h1 class="footer-top-title">Recent Posts</h1>
                        <ul class="recent-post-footer">
                            <li>
                                <a class="template-based-element-color-hover" href="blog-page-single.html">Voluptas Sadips Ipsums Dolors</a>
                            </li>
                            <li>
                                <a class="template-based-element-color-hover" href="blog-page-single.html-2">Fugiats Litora Ultrices Ante</a>
                            </li>
                            <li>
                                <a class="template-based-element-color-hover" href="blog-page-single.html-3">Sapien Litora Dolores Ultrices</a>
                            </li>
                            <li>
                                <a class="template-based-element-color-hover" href="blog-page-single.html-4">Nemis Fugiats Voluptas Dolores</a>
                            </li>
                        </ul>
                    </li>
                    <li class="grid_3">
                        <h1 class="footer-top-title">twitter</h1>
                        <ul class="twitter-footer-top">
                            <li>
                                <p class="italic"><span>@ dratio</span> Metus, id placerat justo
                                    sagittis id.</p>
                            </li>
                            <li>
                                <p class="italic"><span>@ buris</span> Curabitur ultrices
                                    sollicitudin metus, id placerat justo sagittis id... risus auctor
                                    congue ac et risus.</p>
                            </li>
                        </ul>
                    </li>
                    <li class="grid_3">
                        
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-footer-bottom">
            <div class="container_12">
                <div class="grid_1 omega">
                    <a class="back-to-top template-based-element-background" href="#"><span class="icon-back-to-top"></span></a>
                </div>
                <div class="grid_5 push_6 omega social-cr">
                    <ul class="social-footer-bottom">
                        <li>
                            <a class="facebook" href="http://www.tumblr.com"></a>
                        </li>
                        <li>
                            <a class="twitter" href="http://www.twitter.com"></a>
                        </li>
                        <li>
                            <a class="in" href="http://www.vimeo.com"></a>
                        </li>
                        <li>
                            <a class="rss" href="http://www.tumblr.com"></a>
                        </li>
                        <li>
                            <a class="dribble" href="http://www.tumblr.com"></a>
                        </li>
                    </ul>
                    <div class="cr-section">
                        <p>Copyright 2012 <a href="index.html">Clubix</a> <span class="sep-cr">|</span>All Rights Reserved <span class="sep-cr">|</span>Powered by <a href="http://wordpress.com/">WordPress</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>