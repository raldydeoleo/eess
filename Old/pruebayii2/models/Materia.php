<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "materia".
 *
 * @property integer $id_materia
 * @property string $materia_nombre
 * @property integer $cantidad_credito
 * @property integer $hora_practica
 * @property integer $hora_teoria
 */
class Materia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'materia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['materia_nombre', 'cantidad_credito', 'hora_practica', 'hora_teoria'], 'required'],
            [['cantidad_credito', 'hora_practica', 'hora_teoria'], 'integer'],
            [['materia_nombre'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_materia' => 'Id Materia',
            'materia_nombre' => 'Materia Nombre',
            'cantidad_credito' => 'Cantidad Credito',
            'hora_practica' => 'Hora Practica',
            'hora_teoria' => 'Hora Teoria',
        ];
    }
}
