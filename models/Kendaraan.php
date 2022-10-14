<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kendaraan".
 *
 * @property int $id
 * @property string $nama_kendaraan
 * @property string $kegunaan
 * @property string $status
 * @property string $tambang
 * @property string $konsumsi
 * @property string|null $jdw_service
 * @property string $pj
 * @property int $is_approval
 */
class Kendaraan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kendaraan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kendaraan', 'kegunaan', 'status', 'tambang', 'konsumsi', 'pj', 'is_approval'], 'required'],
            [['jdw_service'], 'safe'],
            [['is_approval'], 'integer'],
            [['nama_kendaraan', 'kegunaan', 'status', 'tambang', 'konsumsi', 'pj'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_kendaraan' => 'Nama Kendaraan',
            'kegunaan' => 'Jenis Kendaraan',
            'status' => 'Kepemilikan',
            'tambang' => 'Tambang',
            'konsumsi' => 'Konsumsi BBM',
            'jdw_service' => 'Jadwal Service',
            'pj' => 'Driver',
            'is_approval' => 'Status Approval',
        ];
    }
}
