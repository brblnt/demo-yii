<?php

namespace app\models;

use yii\db\ActiveRecord;

class Service extends ActiveRecord
{

    private $text;

    public static function getQuery(){
        return (new \yii\db\Query())
        ->select(['text'])
        ->from('services')
        ->limit(1)
        ->one();
    }

    public static function findText()
    {
        return self::getQuery() ? self::getQuery()['text'] : "";
        
    }

    public static function tableName()
    {
        return 'services';
    }

    


}
