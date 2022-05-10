<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "se_partidopolitico".
 *
 * @property int $par_id Id
 * @property string $par_nombre Nombre
 *
 * @property SeCandidato[] $seCandidato
 * @property SeGobernador[] $seGobernador
 * @property SePresidentemunicipal[] $sePresidentemunicipal
 * @property SeResultados[] $seResultados
 */
class SePartidopolitico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'se_partidopolitico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['par_nombre'], 'required'],
            [['par_nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'par_id'     => 'Id',
            'par_nombre' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[SeCandidato]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeCandidato()
    {
        return $this->hasOne(SeCandidato::className(), ['can_fkpartidopolitico' => 'par_id']);
    }

    /**
     * Gets query for [[SeGobernador]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeGobernador()
    {
        return $this->hasOne(SeGobernador::className(), ['gob_fkpartidopolitico' => 'par_id']);
    }

    /**
     * Gets query for [[SePresidentemunicipal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSePresidentemunicipal()
    {
        return $this->hasOne(SePresidentemunicipal::className(), ['pre_fkpartidopolitico' => 'par_id']);
    }

    /**
     * Gets query for [[SeResultados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeResultados()
    {
        return $this->hasMany(SeResultado::className(), ['res_fkpartidopolitico' => 'par_id']);
    }
}
