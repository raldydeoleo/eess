<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Compras;

/**
 * ComprasSearch represents the model behind the search form about `app\models\Compras`.
 */
class ComprasSearch extends Compras
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_compra', 'id_proveedor', 'id_proyecto', 'cantidad_compra', 'unidad_compra', 'precio_compra'], 'integer'],
            [['desc_compra', 'Fecha_compra', 'Hora_compra'], 'safe'],
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
        $query = Compras::find();

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
            'id_compra' => $this->id_compra,
            'id_proveedor' => $this->id_proveedor,
            'id_proyecto' => $this->id_proyecto,
            'cantidad_compra' => $this->cantidad_compra,
            'unidad_compra' => $this->unidad_compra,
            'precio_compra' => $this->precio_compra,
            'Fecha_compra' => $this->Fecha_compra,
            'Hora_compra' => $this->Hora_compra,
        ]);

        $query->andFilterWhere(['like', 'desc_compra', $this->desc_compra]);

        return $dataProvider;
    }
}
