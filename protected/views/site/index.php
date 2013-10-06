<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;

$this->renderPartial("_estabelecimento");
?>
<div class="clear"></div>
<?php 
$this->renderPartial("_mensagem");
?>
<div class="clear"></div>
<?php 
$this->renderPartial("_promocao");
?>
<div class="clear"></div>