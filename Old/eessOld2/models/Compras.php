<?php

namespace app\models;

use Yii;
use Yii\db\ActiveRecord;

/**
 * This is the model class for table "compras".
 *
 * @property integer $id_compra
 * @property integer $id_proveedor
 * @property integer $id_proyecto
 * @property integer $cantidad_compra
 * @property string $desc_compra
 * @property integer $unidad_compra
 * @property integer $precio_compra
 * @property string $fecha_compra
 * @property string $vencimiento_compra
 * @property string $hora_compra
 */
class Compras extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'compras';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cantidad_compra', 'desc_compra', 'unidad_compra', 'precio_compra','fecha_compra', 'hora_compra'], 'required'],
            [['id_proveedor', 'id_proyecto', 'cantidad_compra', 'unidad_compra', 'precio_compra'], 'integer'],
            [['vencimiento_compra','fechca_compra','hora_compra'], 'safe'],
            [['desc_compra'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_compra' => 'Id Compra',
            'id_proveedor' => 'Id Proveedor',
            'id_proyecto' => 'Id Proyecto',
            'cantidad_compra' => 'Cantidad Compra',
            'desc_compra' => 'Desc Compra',
            'unidad_compra' => 'Unidad Compra',
            'precio_compra' => 'Precio Compra',
            'fecha_compra' => 'Fecha Compra',
            'vencimiento_compra' => 'Vence',
            'hora_compra' => 'Hora Compra',
        ];
    }
}
