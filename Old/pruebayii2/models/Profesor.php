<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profesor".
 *
 * @property integer $id_profesor
 * @property string $profesor_nombre
 * @property string $profesor_apellido
 * @property string $profesor_telefono
 * @property string $profesor_email
 * @property integer $id_discapacidad
 */
class Profesor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profesor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['profesor_nombre', 'profesor_apellido', 'profesor_telefono', 'profesor_email', 'id_discapacidad'], 'required'],
            [['id_discapacidad'], 'integer'],
            [['profesor_nombre', 'profesor_apellido'], 'string', 'max' => 200],
            [['profesor_telefono', 'profesor_email'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_profesor' => 'Id Profesor',
            'profesor_nombre' => 'Profesor Nombre',
            'profesor_apellido' => 'Profesor Apellido',
            'profesor_telefono' => 'Profesor Telefono',
            'profesor_email' => 'Profesor Email',
            'id_discapacidad' => 'Id Discapacidad',
        ];
    }
}
