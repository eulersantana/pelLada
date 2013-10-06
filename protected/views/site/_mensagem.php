<div class="container-title-page">
    <div class="container_12">
        <h1>SEJA BEM VINDO AO <span class="white"><?php echo Yii::app()->name ?></span></h1>
    </div>
</div>
<div class="container_12 grid_user_info">
    <ul class="features-01">
        <li>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/make-events-image.jpg',"comentario",array("class"=>"f_image"));
            ?>
            <div class="template-based-element-background-color">
            </div><a href="events-single-page.html">
                <div class="feature template-based-element-background-color-transparent">
                    <?php
                    echo CHtml::image(Yii::app()->theme->baseUrl.'/img/grid.png',"comentario",array());
                    ?>
                    <p>Pontuação</p>
                    <p>100</p>
                </div></a>
        </li>
        <li>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/make-albums-image.jpg',"agenda_bg",array("class"=>"f_image"));
            ?>
            <div class="template-based-element-background-color">
            </div><a href="albums-single-page.html">
                <div class="feature template-based-element-background-color-transparent">
                    <?php
                    echo CHtml::image(Yii::app()->theme->baseUrl.'/img/calendar.png',"agenda",array());
                    ?>
                    <p>Minha Agenda</p>
                </div></a>
        </li>
        <li>
            <?php
            echo CHtml::image(Yii::app()->theme->baseUrl.'/img/make-a-radio-image.jpg',"user_score",array("class"=>"f_image"));
            ?>
            <div class="template-based-element-background-color">
            </div><a href="elements.html">
                <div class="feature template-based-element-background-color-transparent">
                    <?php
                    echo CHtml::image(Yii::app()->theme->baseUrl.'/img/score.png',"user_score",array());
                    ?>
                    <p>Escore</p>
                    <p>100</p>
                </div></a>
        </li>
    </ul>
</div>