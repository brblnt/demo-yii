<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $body;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'body'], 'required'],
        ];
    }


    public function contact($name, $body)
    {
        if ($this->validate()) {
            $contact = new Contact();
            $contact->name = $name;
            $contact->text = $body;
            Yii::$app->db->createCommand()->insert('contact', ['name' =>  $contact->name, 'text' =>  $contact->text,])->execute();
            return true;
            
        }
        return false;
        
    }
}
