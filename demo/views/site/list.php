<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use app\models\Contact;

$this->title = 'List';
?>
<div class="site-list">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php

        $contacts = new Contact();
        foreach($contacts->getQuery() as $row) {
            ?>
                <div class="row"> 
                    <div class="col-4">
                        <?php echo "Name: ".$row['name'];?>
                    </div>
                    <div class="col-8">
                        <?php echo "Body: ".$row['text'];?>
                    </div>
                </div>
            <?php
        }


    ?>


</div>