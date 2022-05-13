<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SeResultado;

/**
 * SeResultadoSearch represents the model behind the search form of `app\models\SeResultado`.
 */
class SeResultadoSearch extends SeResultado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['res_id', 'res_fkmunicipio', 'res_fkeleccion', 'res_fkpartidopolitico', 'res_fkcasilla', 'res_votos'], 'integer'],
            [['res_fecha'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = SeResultado::find();

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
            'res_id' => $this->res_id,
            'res_fkmunicipio' => $this->res_fkmunicipio,
            'res_fkeleccion' => $this->res_fkeleccion,
            'res_fkpartidopolitico' => $this->res_fkpartidopolitico,
            'res_fkcasilla' => $this->res_fkcasilla,
            'res_votos' => $this->res_votos,
            'res_fecha' => $this->res_fecha,
        ]);

        return $dataProvider;
    }
}
