<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ordenescompra;

/**
 * OrdenescompraSearch represents the model behind the search form about `app\models\Ordenescompra`.
 */
class OrdenescompraSearch extends Ordenescompra
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ordencompra', 'id_proveedor', 'id_proyecto'], 'integer'],
            [['desc_ordencompra', 'fecha_ordencompra'], 'safe'],
            [['monto_ordencompra'], 'number'],
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
        $query = Ordenescompra::find();

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
            'id_ordencompra' => $this->id_ordencompra,
            'monto_ordencompra' => $this->monto_ordencompra,
            'id_proveedor' => $this->id_proveedor,
            'id_proyecto' => $this->id_proyecto,
            'fecha_ordencompra' => $this->fecha_ordencompra,
        ]);

        $query->andFilterWhere(['like', 'desc_ordencompra', $this->desc_ordencompra]);

        return $dataProvider;
    }
}
