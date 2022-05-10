<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat_municipio".
 *
 * @property int $mun_id Id
 * @property string $mun_nombre Nombre
 *
 * @property CatNacional[] $catNacionals
 * @property SeCandidato[] $seCandidatos
 * @property SeCasilla[] $seCasillas
 * @property SeEncargado[] $seEncargados
 * @property SePresidentemunicipal[] $sePresidentemunicipals
 * @property SeResultado[] $seResultados
 */
class CatMunicipio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cat_municipio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mun_nombre'], 'required'],
            [['mun_nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mun_id'        => 'Id',
            'mun_nombre'    => 'Nombre',
        ];
    }

    /**
     * Gets query for [[CatNacional]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCatNacional()
    {
        return $this->hasOne(CatNacional::className(), ['nac_fkestado' => 'mun_id']);
    }

    /**
     * Gets query for [[SeCandidatos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeCandidatos()
    {
        return $this->hasMany(SeCandidato::className(), ['can_fkmunicipio' => 'mun_id']);
    }

    /**
     * Gets query for [[SeCasillas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeCasillas()
    {
        return $this->hasMany(SeCasilla::className(), ['cas_fkmunicipio' => 'mun_id']);
    }

    /**
     * Gets query for [[SeEncargados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeEncargados()
    {
        return $this->hasMany(SeEncargado::className(), ['enc_fkmunicipio' => 'mun_id']);
    }

    /**
     * Gets query for [[SePresidentemunicipals]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSePresidentemunicipal()
    {
        return $this->hasOne(SePresidentemunicipal::className(), ['pre_fkmunicipio' => 'mun_id']);
    }

    /**
     * Gets query for [[SeResultados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeResultados()
    {
        return $this->hasMany(SeResultado::className(), ['res_fkmunicipio' => 'mun_id']);
    }
}
