<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Proyectos;

/**
 * ProyectosSearch represents the model behind the search form about `app\models\Proyectos`.
 */
class ProyectosSearch extends Proyectos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_proyecto', 'id_cliente', 'id_asociado'], 'integer'],
            [['nombre_proyecto'], 'safe'],
            [['monto_proyecto'], 'number'],
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
        $query = Proyectos::find();

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
            'id_proyecto' => $this->id_proyecto,
            'monto_proyecto' => $this->monto_proyecto,
            'id_cliente' => $this->id_cliente,
            'id_asociado' => $this->id_asociado,
        ]);

        $query->andFilterWhere(['like', 'nombre_proyecto', $this->nombre_proyecto]);

        return $dataProvider;
    }
}
