<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Estudiantes;

/**
 * EstudiantesSearch represents the model behind the search form about `app\models\Estudiantes`.
 */
class EstudiantesSearch extends Estudiantes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_estudiante', 'id_categoria', 'activo'], 'integer'],
            [['estudiante_nombre', 'estudiante_apellido', 'estudiante_matricula', 'estudiante_direccion', 'estudiante_telefono', 'estudiante_email'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Estudiantes::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_estudiante' => $this->id_estudiante,
            'id_categoria' => $this->id_categoria,
            'activo' => $this->activo,
        ]);

        $query->andFilterWhere(['like', 'estudiante_nombre', $this->estudiante_nombre])
            ->andFilterWhere(['like', 'estudiante_apellido', $this->estudiante_apellido])
            ->andFilterWhere(['like', 'estudiante_matricula', $this->estudiante_matricula])
            ->andFilterWhere(['like', 'estudiante_direccion', $this->estudiante_direccion])
            ->andFilterWhere(['like', 'estudiante_telefono', $this->estudiante_telefono])
            ->andFilterWhere(['like', 'estudiante_email', $this->estudiante_email]);

        return $dataProvider;
    }
}
