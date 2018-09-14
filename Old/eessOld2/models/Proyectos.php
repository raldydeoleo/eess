<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proyectos".
 *
 * @property integer $id_proyecto
 * @property string $nombre_proyecto
 * @property string $monto_proyecto
 * @property integer $id_cliente
 * @property integer $id_asociado
 */
class Proyectos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proyectos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_proyecto', 'monto_proyecto', 'id_cliente', 'id_asociado'], 'required'],
            [['monto_proyecto'], 'number'],
            [['id_cliente', 'id_asociado'], 'integer'],
            [['nombre_proyecto'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_proyecto' => 'Id Proyecto',
            'nombre_proyecto' => 'Nombre Proyecto',
            'monto_proyecto' => 'Monto Proyecto',
            'id_cliente' => 'Id Cliente',
            'id_asociado' => 'Id Asociado',
        ];
    }
}
