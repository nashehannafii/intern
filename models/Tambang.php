<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tambang".
 *
 * @property int $id
 * @property string $nama_tambang
 */
class Tambang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tambang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tambang'], 'required'],
            [['nama_tambang'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_tambang' => 'Nama Tambang',
        ];
    }
}
