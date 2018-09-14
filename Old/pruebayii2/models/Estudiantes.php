<?php

namespace app\models;

use Yii;


class Estudiantes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estudiantes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estudiante_nombre', 'estudiante_apellido', 'estudiante_matricula', 'estudiante_direccion', 'estudiante_telefono', 'estudiante_email'], 'required'],
            [['id_categoria', 'activo'], 'integer'],
            [['estudiante_nombre', 'estudiante_apellido', 'estudiante_direccion'], 'string', 'max' => 200],
            [['estudiante_matricula', 'estudiante_email'], 'string', 'max' => 30],
            [['estudiante_telefono'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_estudiante' => 'Id Estudiante',
            'id_categoria' => 'Categoria',
            'estudiante_nombre' => 'Nombre',
            'estudiante_apellido' => 'Apellido',
            'estudiante_matricula' => 'Matricula',
            'estudiante_direccion' => 'Direccion',
            'estudiante_telefono' => 'Telefono',
            'estudiante_email' => 'Email',
            'activo' => 'Activo',
        ];
    }
}
