<!DOCTYPE html>

<!--[if lt IE 7]><html class="no-js ie6 oldie" lang=en><![endif]-->
<!--[if IE 7]><html class="no-js ie7 oldie" lang=en><![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang=en><![endif]-->
<!--[if gt IE 8]><!-->
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms no-csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php echo CHtml::encode(Yii::app()->name); ?> - Login</title>

		<!-- Styles -->
		<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/bootstrap.css');?>
		<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/bootstrap-responsive.css');?>
		<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/bootstrap-overrides.css');?>
		<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/ui-lightness/jquery-ui-1.8.21.custom.css');?>
		<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/slate.css');?>
		<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/slate-responsive.css');?>
		<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/pages/dashboard.css');?>
		<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/components/signin.css');?>
		<?php Yii::app()->clientScript->registerCssFile('//fonts.googleapis.com/css?family=PT+Sans');?>

		<!-- Javascript -->
		<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/libs/modernizr-2.0.6.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery-1.7.2.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery-ui-1.8.21.custom.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/jquery.ui.touch-punch.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/bootstrap.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/Slate.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/plugins/excanvas/excanvas.min.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/plugins/flot/jquery.flot.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/plugins/flot/jquery.flot.orderBars.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/plugins/flot/jquery.flot.pie.js');?>
		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/plugins/flot/jquery.flot.resize.js');?>

		<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/demos/charts/bar.js');?>

    </head>
    <body class="special-page" cz-shortcut-listen="true">
       
        <div class="account-container login">
	
            <div class="content clearfix">
                <?php echo $content ?>		
            </div> <!-- /content -->
	
        </div>
    </body>
</html>
