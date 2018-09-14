<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Profesor;

/**
 * ProfesorSearch represents the model behind the search form about `app\models\Profesor`.
 */
class ProfesorSearch extends Profesor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_profesor', 'id_discapacidad'], 'integer'],
            [['profesor_nombre', 'profesor_apellido', 'profesor_telefono', 'profesor_email'], 'safe'],
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
        $query = Profesor::find();

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
            'id_profesor' => $this->id_profesor,
            'id_discapacidad' => $this->id_discapacidad,
        ]);

        $query->andFilterWhere(['like', 'profesor_nombre', $this->profesor_nombre])
            ->andFilterWhere(['like', 'profesor_apellido', $this->profesor_apellido])
            ->andFilterWhere(['like', 'profesor_telefono', $this->profesor_telefono])
            ->andFilterWhere(['like', 'profesor_email', $this->profesor_email]);

        return $dataProvider;
    }
}
