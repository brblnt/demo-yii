<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */


use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use app\models\ServiceForm;

$this->title = 'Szolgáltatások';
?>
<div class="site-services">
    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php
    if (!Yii::$app->user->isGuest)   {
    $form = ActiveForm::begin(['id' => 'edit-form']);
    $model = new ServiceForm();
    ?>

    <div class="services-form">

    <?php $form = ActiveForm::begin();?>

        <div class="form-group">
            <?= $form->field($model, 'message')->widget(\yii\redactor\widgets\Redactor::className()) ?>
            <?= Html::submitButton('Mentés', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>

    <?php ActiveForm::end(); } 
    

    $comp = new \app\models\Service();
    if (strlen($comp->findText()) > 0)
        echo $comp->findText();
    else
        echo 'Nincs adat';
    ?> 

</div>
