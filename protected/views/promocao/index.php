<?php
/* @var $this PromocaoController */
/* @var $dataProvider CActiveDataProvider */
?>

<div class="container_12 p1">

<h1>Promoção</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>
