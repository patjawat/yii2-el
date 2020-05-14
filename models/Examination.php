<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "examination".
 *
 * @property int $id
 * @property int $lesson_id
 * @property string $question คำถาม
 * @property string $a ข้อ 1
 * @property string $b ข้อ 2
 * @property string $c ข้อ 3
 * @property string $d ข้อ 4
 * @property string $answer คำตอบ
 */
class Examination extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'examination';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lesson_id', 'question', 'a', 'b', 'c', 'd', 'answer'], 'required'],
            [['lesson_id'], 'integer'],
            [['question', 'a', 'b', 'c', 'd', 'answer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lesson_id' => 'Lesson ID',
            'question' => 'คำถาม',
            'a' => 'ข้อ 1',
            'b' => 'ข้อ 2',
            'c' => 'ข้อ 3',
            'd' => 'ข้อ 4',
            'answer' => 'คำตอบ',
        ];
    }
}
