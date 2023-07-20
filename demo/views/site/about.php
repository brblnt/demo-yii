<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php
     $comp = new \app\models\Company();
     if (strlen($comp->findText()) > 0)
        echo $comp->findText();
     else
        echo 'Nincs adat';
     ?>
    </p>
    <div class="text-center">
        <?=
            Html::a(
                'Szolgáltatások', 
                'services', 
                ['class' => 'btn btn-primary']
            )
        ?>
    </div>
</div>
