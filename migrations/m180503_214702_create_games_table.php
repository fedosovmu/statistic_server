<?php

use yii\db\Migration;

/**
 * Handles the creation of table `games`.
 */
class m180503_214702_create_games_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('games', [
            'id' => $this->primaryKey(),
            'date'=>$this->string(),
            'player_name'=>$this->string(),
            'score'=>$this->integer(),
            'data'=>$this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('games');
    }
}
