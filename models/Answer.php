<?php

namespace kouosl\forum\models;

use Yii;

/**
 * This is the model class for table "answer".
 *
 * @property int $answerID
 * @property int $userID
 * @property int $topicID
 * @property string $answer
 * @property string $title
 * @property string $time
 */
class Answer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'answer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userID', 'topicID', 'answer', 'title', 'time'], 'required'],
            [['userID', 'topicID'], 'integer'],
            [['time'], 'safe'],
            [['answer', 'title'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'answerID' => 'Answer ID',
            'userID' => 'User ID',
            'topicID' => 'Topic ID',
            'answer' => 'Answer',
            'title' => 'Title',
            'time' => 'Time',
        ];
    }
}
