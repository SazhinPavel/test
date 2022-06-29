<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_name".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $content
 * @property string $created

 */
class UserName extends \yii\db\ActiveRecord
{

    public $verifyCode;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_name';
    }

    // public $ip;
    // public $browser;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'content',], 'required'],
            [['email'], 'email'],
            [['content'], 'string'],
            [['created'], 'safe'],
            [['name', 'email'], 'string', 'max' => 64],
            ['name', 'match', 'pattern' => '/^[a-z0-9]+$/i', 'message' => 'Логин может содержать только латиницу и цифры!'],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Логин',
            'email' => 'Email',
            'content' => 'Текст сообщения',
            'created' => 'Дата создания отзыва',
        ];
    }

    function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $modelIp = new IpTable();
        $modelIp->ip = Yii::$app->request->userIP;
        $data = explode(' ', Yii::$app->request->userAgent);
        $modelIp->browser = $data[0];
        $modelIp->user_id = $this->id;
        if ($modelIp->save()) {
            Yii::$app->session->setFlash('success', 'Отзыв оставлен');
        } else {
            Yii::$app->setFlash('error', "Возникла ошибка при сохранении");
        }
    }
}
