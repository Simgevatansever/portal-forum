<?php

namespace kouosl\forum\models;

use Yii;

/**
 * This is the model class for table "topic".
 *
 * @property int $topicID
 * @property string $title
 * @property int $forumID
 */
class Topic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'topic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'forumID'], 'required'],
            [['forumID'], 'integer'],
            [['title'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'topicID' => 'Topic ID',
            'title' => 'Title',
            'forumID' => 'Forum ID',
        ];
    }
}
