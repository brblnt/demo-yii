<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class ServiceForm  extends Model
{
    public $message;

    

    public function saveText($text)
    {
        if ($this->validate()) {
            $model = new Service();
            $model->text = $text;
            Yii::$app->db->createCommand()->update('services', ['text' => $model->text])->execute();
            return true;
            
        }
        return false;
        
    }

}
