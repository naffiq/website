<?php

namespace common\models;

use common\models\queries\ProjectQuery;
use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $link
 * @property integer $is_active
 * @property string $created_at
 * @property string $updated_at
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['is_active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'image', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'link' => 'Link',
            'is_active' => 'Is Active',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @inheritdoc
     * @return \common\models\queries\ProjectQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProjectQuery(get_called_class());
    }
}
