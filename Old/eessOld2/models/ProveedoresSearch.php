<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Proveedores;


class ProveedoresSearch extends Proveedores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_proveedor'], 'integer'],
            [['nombre_proveedor', 'apellido_proveedor','empresa_proveedor', 'rnc_proveedor' , 'direccion_proveedor', 'telefono_proveedor', 'email_proveedor'], 'safe'],
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
        $query = Proveedores::find();

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
            'id_proveedor' => $this->id_proveedor,
            //'id_compra' => $this->id_compra,

        ]);

        $query->andFilterWhere(['like', 'nombre_proveedor', $this->nombre_proveedor])
            ->andFilterWhere(['like', 'apellido_proveedor', $this->apellido_proveedor])
            ->andFilterWhere(['like', 'empresa_proveedor', $this->empresa_proveedor])
            ->andFilterWhere(['like', 'rnc_proveedor', $this->rnc_proveedor])
            ->andFilterWhere(['like', 'direccion_proveedor', $this->direccion_proveedor])
            ->andFilterWhere(['like', 'telefono_proveedor', $this->telefono_proveedor])
            ->andFilterWhere(['like', 'email_proveedor', $this->email_proveedor]);

        return $dataProvider;
    }
}
