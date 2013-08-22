<?php

/**
 * This is the model class for table "pago".
 *
 * The followings are the available columns in table 'pago':
 * @property integer $id_pago
 * @property string $fecha_pago
 * @property string $hora_pago
 * @property double $importe_pago
 * @property integer $folio_venta
 * @property string $forma_pago
 * @property string $tipo_pago
 * @property double $saldo
 *
 * The followings are the available model relations:
 * @property Venta[] $ventas
 */
class Pago extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pago';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('folio_venta', 'numerical', 'integerOnly'=>true),
			array('importe_pago, saldo', 'numerical'),
			array('forma_pago, tipo_pago', 'length', 'max'=>255),
			array('fecha_pago, hora_pago', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_pago, fecha_pago, hora_pago, importe_pago, folio_venta, forma_pago, tipo_pago, saldo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'ventas' => array(self::HAS_MANY, 'Venta', 'id_pago'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_pago' => 'Id Pago',
			'fecha_pago' => 'Fecha Pago',
			'hora_pago' => 'Hora Pago',
			'importe_pago' => 'Importe Pago',
			'folio_venta' => 'Folio Venta',
			'forma_pago' => 'Forma Pago',
			'tipo_pago' => 'Tipo Pago',
			'saldo' => 'Saldo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_pago',$this->id_pago);
		$criteria->compare('fecha_pago',$this->fecha_pago,true);
		$criteria->compare('hora_pago',$this->hora_pago,true);
		$criteria->compare('importe_pago',$this->importe_pago);
		$criteria->compare('folio_venta',$this->folio_venta);
		$criteria->compare('forma_pago',$this->forma_pago,true);
		$criteria->compare('tipo_pago',$this->tipo_pago,true);
		$criteria->compare('saldo',$this->saldo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pago the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
