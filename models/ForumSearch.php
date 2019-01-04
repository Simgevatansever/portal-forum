<?php

namespace kouosl\forum\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\forum\models\Forum;

/**
 * ForumSearch represents the model behind the search form of `vendor\kouosl\forum\models\Forum`.
 */
class ForumSearch extends Forum
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['forumID', 'topicID', 'userID', 'querstionID'], 'integer'],
            [['title', 'question time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Forum::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'forumID' => $this->forumID,
            'topicID' => $this->topicID,
            'userID' => $this->userID,
            'question time' => $this->question time,
            'querstionID' => $this->querstionID,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}
