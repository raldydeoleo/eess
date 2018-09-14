<?php

namespace app\models;

use Yii;


class Proveedores extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proveedores';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_proveedor', 'apellido_proveedor', 'empresa_proveedor','rnc_proveedor', 'direccion_proveedor', 'ciudad_proveedor', 'telefono_proveedor', 'email_proveedor'], 'required'],
            [['id_proveedor'], 'integer'],
            [['nombre_proveedor', 'apellido_proveedor', 'direccion_proveedor', 'empresa_proveedor', 'ciudad_proveedor'], 'string', 'max' => 200],
            [['rnc_proveedor','telefono_proveedor', 'email_proveedor'], 'string', 'max' => 20],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id__proveedor' => 'ID proveedor',
            'nombre_proveedor' => 'Nombre',
            'apellido_proveedor' => 'Apellido',
            'empresa_proveedor' => 'Empresa',
            'rnc_proveedor' => 'RNC',
            'direccion_proveedor' => 'Direccion',
            'ciudad_proveedor' => 'Ciudad',
            'telefono_proveedor' => 'Telefono',
            'email_proveedor' => 'Email',

        ];
    }
}
