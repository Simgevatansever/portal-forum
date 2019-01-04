<?php

use yii\db\Migration;

/**
 * Class m190103_140113_forum
 */
class m190103_140113_forum extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function Up()
    {
        $this->createTable('answer', [
            'answerID' => $this->primaryKey(),
            'userID' => $this->integer(255)->notNull(),
  'topicID' => $this->integer(255)->notNull(),
  'answer' => $this->string(128)->notNull(),
  'title' => $this->string(128)->notNull(),
            'time' => $this->dateTime()->notNull(),

        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');
 $this->createTable('topic', [
            'topicID' =>  $this->primaryKey(),
            'title' => $this->string(128)->notNull(),
            'forumID' => $this->integer(20)->notNull(),
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');
 $this->createTable('Forum', [
            'forumID' => $this->primaryKey(),
            'topicID' => $this->integer(128)->notNull(),
            'title' => $this->string(20)->notNull(),
			 'userID' => $this->integer(255)->notNull(),
  'question time' => $this->dateTime()->notNull(),
  'querstionID' => $this->integer(128)->notNull(),
			
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4');
 

        $this->createTable('users', [
            'ID' => $this->primaryKey(),
          
           
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4'); 
		
	
    }

    public function Down()
    {
        $this->dropTable('answer');
        $this->dropTable('Forum');
  

        $this->dropTable('topic');
        $this->dropTable('users');
   

}
}  