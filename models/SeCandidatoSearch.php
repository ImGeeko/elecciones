<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SeCandidato;

/**
 * SeCandidatoSearch represents the model behind the search form of `app\models\SeCandidato`.
 */
class SeCandidatoSearch extends SeCandidato
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['can_id', 'can_fkpartidopolitico', 'can_fkmunicipio', 'can_fkestado', 'can_fkeleccion'], 'integer'],
            [['can_nombre', 'can_paterno', 'can_materno'], 'safe'],
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
        $query = SeCandidato::find();

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
            'can_id' => $this->can_id,
            'can_fkpartidopolitico' => $this->can_fkpartidopolitico,
            'can_fkmunicipio' => $this->can_fkmunicipio,
            'can_fkestado' => $this->can_fkestado,
            'can_fkeleccion' => $this->can_fkeleccion,
        ]);

        $query->andFilterWhere(['like', 'can_nombre', $this->can_nombre])
            ->andFilterWhere(['like', 'can_paterno', $this->can_paterno])
            ->andFilterWhere(['like', 'can_materno', $this->can_materno]);

        return $dataProvider;
    }
}
