<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "se_resultado".
 *
 * @property int $res_id Id
 * @property int $res_fkmunicipio Municipio
 * @property int $res_fkeleccion Tipo Elección
 * @property int $res_fkpartidopolitico Partido Político
 * @property int $res_fkcasilla Casilla
 * @property int $res_votos Votos
 * @property string $res_fecha Fecha
 *
 * @property SeCasilla $resFkcasilla
 * @property CatEleccion $resFkeleccion
 * @property CatMunicipio $resFkmunicipio
 * @property SePartidopolitico $resFkpartidopolitico
 */
class SeResultado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'se_resultado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['res_fkmunicipio', 'res_fkeleccion', 'res_fkpartidopolitico', 'res_fkcasilla', 'res_votos', 'res_fecha'], 'required'],
            [['res_fkmunicipio', 'res_fkeleccion', 'res_fkpartidopolitico', 'res_fkcasilla', 'res_votos'], 'integer'],
            [['res_fecha'], 'safe'],
            [['res_fkmunicipio'], 'exist', 'skipOnError' => true, 'targetClass' => CatMunicipio::className(), 'targetAttribute' => ['res_fkmunicipio' => 'mun_id']],
            [['res_fkcasilla'], 'exist', 'skipOnError' => true, 'targetClass' => SeCasilla::className(), 'targetAttribute' => ['res_fkcasilla' => 'cas_id']],
            [['res_fkpartidopolitico'], 'exist', 'skipOnError' => true, 'targetClass' => SePartidopolitico::className(), 'targetAttribute' => ['res_fkpartidopolitico' => 'par_id']],
            [['res_fkeleccion'], 'exist', 'skipOnError' => true, 'targetClass' => CatEleccion::className(), 'targetAttribute' => ['res_fkeleccion' => 'ele_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'res_id'                => 'Id',
            'res_fkmunicipio'       => 'Municipio',
            'res_fkeleccion'        => 'Tipo Elección',
            'res_fkpartidopolitico' => 'Partido Político',
            'res_fkcasilla'         => 'Casilla',
            'res_votos'             => 'Votos',
            'res_fecha'             => 'Fecha',
        ];
    }

    /**
     * Gets query for [[ResFkcasilla]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResFkcasilla()
    {
        return $this->hasOne(SeCasilla::className(), ['cas_id' => 'res_fkcasilla']);
    }

    /**
     * Gets query for [[ResFkeleccion]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResFkeleccion()
    {
        return $this->hasOne(CatEleccion::className(), ['ele_id' => 'res_fkeleccion']);
    }

    /**
     * Gets query for [[ResFkmunicipio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResFkmunicipio()
    {
        return $this->hasOne(CatMunicipio::className(), ['mun_id' => 'res_fkmunicipio']);
    }

    /**
     * Gets query for [[ResFkpartidopolitico]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResFkpartidopolitico()
    {
        return $this->hasOne(SePartidopolitico::className(), ['par_id' => 'res_fkpartidopolitico']);
    }
}
