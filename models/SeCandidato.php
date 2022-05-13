<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "se_candidato".
 *
 * @property int $can_id Id
 * @property string $can_nombre Nombre
 * @property string $can_paterno Apellido Paterno
 * @property string $can_materno Apellido Materno
 * @property int $can_fkpartidopolitico Partido Político
 * @property int $can_fkmunicipio Municipio
 * @property int $can_fkestado Estado
 * @property int $can_fkeleccion Tipo Elección
 *
 * @property CatEleccion $canFkeleccion
 * @property CatMunicipio $canFkmunicipio
 * @property SePartidopolitico $canFkpartidopolitico
 */
class SeCandidato extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'se_candidato';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['can_nombre', 'can_paterno', 'can_materno', 'can_fkpartidopolitico', 'can_fkmunicipio', 'can_fkestado', 'can_fkeleccion'], 'required'],
            [['can_fkpartidopolitico', 'can_fkmunicipio', 'can_fkestado', 'can_fkeleccion'], 'integer'],
            [['can_nombre', 'can_paterno', 'can_materno'], 'string', 'max' => 30],
            [['can_fkmunicipio'], 'exist', 'skipOnError' => true, 'targetClass' => CatMunicipio::className(), 'targetAttribute' => ['can_fkmunicipio' => 'mun_id']],
            [['can_fkpartidopolitico'], 'exist', 'skipOnError' => true, 'targetClass' => SePartidopolitico::className(), 'targetAttribute' => ['can_fkpartidopolitico' => 'par_id']],
            [['can_fkeleccion'], 'exist', 'skipOnError' => true, 'targetClass' => CatEleccion::className(), 'targetAttribute' => ['can_fkeleccion' => 'ele_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'can_id'                => 'Id',
            'can_nombre'            => 'Nombre',
            'can_paterno'           => 'Apellido Paterno',
            'can_materno'           => 'Apellido Materno',
            'can_fkpartidopolitico' => 'Partido Político',
            'can_fkmunicipio'       => 'Municipio',
            'can_fkestado'          => 'Estado',
            'can_fkeleccion'        => 'Tipo Elección',
        ];
    }

    /**
     * Gets query for [[CanFkeleccion]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCanFkeleccion()
    {
        return $this->hasOne(CatEleccion::className(), ['ele_id' => 'can_fkeleccion']);
    }

    /**
     * Gets query for [[CanFkmunicipio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCanFkmunicipio()
    {
        return $this->hasOne(CatMunicipio::className(), ['mun_id' => 'can_fkmunicipio']);
    }

    /**
     * Gets query for [[CanFkpartidopolitico]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCanFkpartidopolitico()
    {
        return $this->hasOne(SePartidopolitico::className(), ['par_id' => 'can_fkpartidopolitico']);
    }
}
