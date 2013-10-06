<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;

$this->renderPartial("_evento");
?>
<div class="clear"></div>
<?php 
$this->renderPartial("_mensagem");
?>
<div class="clear"></div>
<?php 
$this->renderPartial("_posts");
?>
<div class="clear"></div>