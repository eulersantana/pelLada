<?php
/* @var $this SiteController */
$this->pageTitle=$this->title_action;

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
<div id="boxRegistro">
    <?php 
            $this->renderPartial("_registro",array("model_user"=>$model_user,"model_perfil"=>$model_perfil));

          }
    ?>
</div>

<div class="clear"></div>
<?php 
    $this->renderPartial("_promocao");
?>
<div class="clear"></div>
