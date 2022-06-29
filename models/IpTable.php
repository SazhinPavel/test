<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ip".
 *
 * @property int $id
 * @property int $ip
 * @property string $browser
 * @property int $user_id
 *
 * @property UserName $user
 * @property UserName[] $userNames
 */
class IpTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ip';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ip', 'browser', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['browser', 'ip'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'Ip',
            'browser' => 'Browser',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(UserName::className(), ['id' => 'user_id']);
    }
}
