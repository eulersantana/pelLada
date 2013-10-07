<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;

$this->renderPartial("_estabelecimento");
?>
<?php 
/**
 * Conteudo diferente de acordo com o nivel do usuario
 * ROOT
 * USER
 * VISITANTE
 */
if(!Yii::app()->user->isGuest){ 
    if(Yii::app()->user->groupName != "root"){ ?>
<div class="clear"></div>
<?php 
            $this->renderPartial("_user_info");
         } 
      }else{
?>
<div class="clear"></div>
<?php 
        $this->renderPartial("_mensagem");

      }
?>

<div class="clear"></div>
<?php 
$this->renderPartial("_promocao");
?>
<div class="clear"></div>