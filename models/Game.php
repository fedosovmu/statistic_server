<?php
/**
 * Created by PhpStorm.
 * User: mocor
 * Date: 03.05.2018
 * Time: 2:32
 */

namespace app\models;

use yii\db\ActiveRecord;

class Game extends ActiveRecord
{
    public static function tableName() {
        return 'games';
    }
}