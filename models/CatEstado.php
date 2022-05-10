<?php

namespace app\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "cat_estado".
 *
 * @property int $est_id Id
 * @property string $est_nombre Nombre
 *
 * @property CatNacional[] $catNacionals
 * @property SeGobernador[] $seGobernadors
 */
class CatEstado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cat_estado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['est_nombre'], 'required'],
            [['est_nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'est_id'     => 'Id',
            'est_nombre' => 'Nombre',
            'mapa'       => 'Mapa',
        ];
    }

    /**
     * Gets query for [[CatNacionals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatNacionals()
    {
        return $this->hasMany(CatNacional::className(), ['nac_fkestado' => 'est_id']);
    }

    /**
     * Gets query for [[SeGobernadors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeGobernadors()
    {
        return $this->hasMany(SeGobernador::className(), ['gob_fkestado' => 'est_id']);
    }

    public function getMapa()
    {
        return Html::img("/img/estados/escudo{$this->est_id}.png", ['width' => '150px']);
    }
}
