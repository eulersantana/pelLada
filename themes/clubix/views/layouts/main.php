<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $this->pageTitle ?></title>
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
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/js/component.js'); ?>
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
                        <?php echo CHtml::link(CHtml::image(Yii::app()->theme->baseUrl . "/img/logo.png", 'Logo ' . Yii::app()->name, array()), Yii::app()->baseUrl); ?>
                    </div>
                </div>
                <div class="grid_4 push_6 omega social-media-container">
                    <div class="social-header-container">
                        <ul>
                            <?php
                            if (Yii::app()->user->isGuest) {
                            ?>
                            <li class="template-based-element-background-color-hover user_info">
                            <?php echo CHtml::link("", Yii::app()->baseUrl . "/userGroups", array("class" => "user_login")); ?>
                            </li>
                            <?php
                            } else {
                            ?>    
                            <li class="template-based-element-background-color-hover user_info">
                                Olá <?php echo Yii::app()->user->name; ?>
                            </li>
                            <li class="template-based-element-background-color-hover">
                            <?php echo CHtml::link("", Yii::app()->baseUrl . "/userGroups/user/logout", array("class" => "user_logout")); ?>
                            </li>
                            <?php } ?>
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
                            <?php echo CHtml::link("Home", Yii::app()->baseUrl, array("class" => (!isSet($this->selecionado)) ? "selected" : "")); ?>
                        </li>
                        <?php if (!Yii::app()->user->isGuest) {
                            if (Yii::app()->user->groupName == "root") {
                                ?>
                                <li>
                                    <?php echo CHtml::link("Brinde", Yii::app()->baseUrl . "/brinde", array("class" => (isSet($this->selecionado) && $this->selecionado == "brinde") ? "selected" : "")); ?>
                                    <ul class="sub-menu-header">
                                        <li>
                                            <?php echo CHtml::link("Adicionar Brinde", Yii::app()->baseUrl . "/brinde/create", array("class" => "template-based-element-background-hover")); ?>
                                        </li>
                                        <li>
                                            <?php echo CHtml::link("Gerenciar Brinde", Yii::app()->baseUrl . "/brinde/admin", array("class" => "template-based-element-background-hover")); ?>
                                        </li>
                                        <li>
                                            <?php echo CHtml::link("Listar Brinde", Yii::app()->baseUrl . "/brinde", array("class" => "template-based-element-background-hover")); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <?php echo CHtml::link("Evento", Yii::app()->baseUrl . "/evento", array("class" => (isSet($this->selecionado) && $this->selecionado == "evento") ? "selected" : "")); ?>
                                    <ul class="sub-menu-header">
                                        <li>
                                            <?php echo CHtml::link("Adicionar Evento", Yii::app()->baseUrl . "/evento/create", array("class" => "template-based-element-background-hover")); ?>
                                        </li>
                                        <li>
                                            <?php echo CHtml::link("Gerenciar Evento", Yii::app()->baseUrl . "/evento/admin", array("class" => "template-based-element-background-hover")); ?>
                                        </li>
                                        <li>
                                            <?php echo CHtml::link("Listar Evento", Yii::app()->baseUrl . "/evento", array("class" => "template-based-element-background-hover")); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <?php echo CHtml::link("Promoção", Yii::app()->baseUrl . "/promocao", array("class" => (isSet($this->selecionado) && $this->selecionado == "promocao") ? "selected" : "")); ?>
                                    <ul class="sub-menu-header">
                                        <li>
                                            <?php echo CHtml::link("Adicionar Promoção", Yii::app()->baseUrl . "/promocao/create", array("class" => "template-based-element-background-hover")); ?>
                                        </li>
                                        <li>
                                            <?php echo CHtml::link("Gerenciar Promoção", Yii::app()->baseUrl . "/promocao/admin", array("class" => "template-based-element-background-hover")); ?>
                                        </li>
                                        <li>
                                            <?php echo CHtml::link("Listar Promoção", Yii::app()->baseUrl . "/promocao", array("class" => "template-based-element-background-hover")); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <?php echo CHtml::link("Usuário", Yii::app()->baseUrl . "/userGroups/user", array("class" => (isSet($this->selecionado) && $this->selecionado == "usuario") ? "selected" : "")); ?>
                                </li>
                            <?php } else { ?>
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
                            <?php }
                        }
                        ?>
                        <li>
                            <a href="<?php echo Yii::app()->baseUrl . "/site/contact"; ?>">Contato</a>
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
                            echo CHtml::textField("search", "", array("placeholder" => "Buscar"))
                            ?>
                        </div>
                        <div class="bg-submit-search template-based-element-background-color-hover">
                            <?php
//                                <input class="submit-button-search" id="submit-header-search" name="submit" type="submit" value="">
                            echo CHtml::submitButton("", array("class" => "submit-button-search", "id" => "submit-header-search", "name" => "submit"));
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
        <section id="conteudo">
            <?php echo $content; ?>
        </section>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/template-color-switcher/scripts/templateColorSwitcher.js'); ?>
        <?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl . '/template-color-switcher/scripts/colorSwitcherPanel.js'); ?>
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/template-color-switcher/css/style.css'); ?>
        <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl . '/template-color-switcher/css/adaptive.css'); ?>
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
                            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/img/logo.png', "Logo " . Yii::app()->name) ?>
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
