<?php

namespace kouosl\forum\models;

use Yii;

/**
 * This is the model class for table "Forum".
 *
 * @property int $forumID
 * @property int $topicID
 * @property string $title
 * @property int $userID
 * @property string $question time
 * @property int $querstionID
 */
class Forum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Forum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['topicID', 'title', 'userID', 'question time', 'querstionID'], 'required'],
            [['topicID', 'userID', 'querstionID'], 'integer'],
            [['question time'], 'safe'],
            [['title'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'forumID' => 'Forum ID',
            'topicID' => 'Topic ID',
            'title' => 'Title',
            'userID' => 'User ID',
            'question time' => 'Question Time',
            'querstionID' => 'Querstion ID',
        ];
    }
}
