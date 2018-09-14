<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ordenescompra".
 *
 * @property integer $id_ordencompra
 * @property string $desc_ordencompra
 * @property string $monto_ordencompra
 * @property integer $id_proveedor
 * @property string $fecha_ordencompra
 */
class Ordenescompra extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ordenescompra';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc_ordencompra', 'monto_ordencompra', 'id_proveedor', 'fecha_ordencompra'], 'required'],
            [['monto_ordencompra'], 'number'],
            [['id_proveedor'], 'integer'],
            [['fecha_ordencompra'], 'safe'],
            [['desc_ordencompra'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_ordencompra' => 'Id Ordencompra',
            'desc_ordencompra' => 'Desc Ordencompra',
            'monto_ordencompra' => 'Monto Ordencompra',
            'id_proveedor' => 'Id Proveedor',
            'fecha_ordencompra' => 'Fecha Ordencompra',
        ];
    }
}
