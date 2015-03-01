<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $body
 * @property integer $content_id
 * @property integer $created
 * @property string $user_name
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'body', 'content_id', 'created', 'user_name'], 'required'],
            [['id', 'content_id', 'created'], 'integer'],
            [['body'], 'string', 'max' => 300],
            [['user_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'body' => 'Body',
            'content_id' => 'Content ID',
            'created' => 'Created',
            'user_name' => 'User Name',
        ];
    }
}
