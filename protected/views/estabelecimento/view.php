<?php
/* @var $this EstabelecimentoController */
/* @var $model Estabelecimento */
?>
<div class="container_12 p1">

    <h1>Estabelecimento #<?php echo $model->id; ?></h1>

    <?php $this->widget('zii.widgets.CDetailView', array(
            'data'=>$model,
            'attributes'=>array(
                    'id',
                    'nome',
                    'endereco',
                    'telefone',
                    'proprietario',
            ),
    )); ?>
    
</div>
