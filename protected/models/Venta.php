<?php

/**
 * This is the model class for table "venta".
 *
 * The followings are the available columns in table 'venta':
 * @property integer $folio_venta
 * @property string $fecha_exp
 * @property string $hora_exp
 * @property integer $id_cliente
 * @property integer $id_direccion
 * @property string $fecha_entrega
 * @property string $hora_entrega
 * @property integer $tarjeta_regalo
 * @property double $total_venta
 * @property integer $id_usuario
 * @property integer $estado_venta
 * @property integer $id_pago
 * @property string $observaciones
 * @property string $base
 *
 * The followings are the available model relations:
 * @property Pago $idPago
 */
class Venta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'venta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.		
		return array(
			array('id_cliente, id_direccion, tarjeta_regalo, id_usuario, estado_venta, id_pago', 'numerical', 'integerOnly'=>true),
			array('total_venta', 'numerical'),
			array('observaciones, base', 'length', 'max'=>255),
			array('hora_exp, fecha_entrega, hora_entrega', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('folio_venta, fecha_exp, hora_exp, id_cliente, id_direccion, fecha_entrega, hora_entrega, tarjeta_regalo, total_venta, id_usuario, estado_venta, id_pago, observaciones, base', 'safe', 'on'=>'search'),
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
			'idPago' => array(self::BELONGS_TO, 'Pago', 'id_pago'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'folio_venta' => 'Folio Venta',
			'fecha_exp' => 'Fecha Exp',
			'hora_exp' => 'Hora Exp',
			'id_cliente' => 'Id Cliente',
			'id_direccion' => 'Id Direccion',
			'fecha_entrega' => 'Fecha Entrega',
			'hora_entrega' => 'Hora Entrega',
			'tarjeta_regalo' => 'Tarjeta Regalo',
			'total_venta' => 'Total Venta',
			'id_usuario' => 'Id Usuario',
			'estado_venta' => 'Estado Venta',
			'id_pago' => 'Id Pago',
			'observaciones' => 'Observaciones',
			'base' => 'Base',
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

		$criteria->compare('folio_venta',$this->folio_venta);
		$criteria->compare('fecha_exp',$this->fecha_exp,true);
		$criteria->compare('hora_exp',$this->hora_exp,true);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('id_direccion',$this->id_direccion);
		$criteria->compare('fecha_entrega',$this->fecha_entrega,true);
		$criteria->compare('hora_entrega',$this->hora_entrega,true);
		$criteria->compare('tarjeta_regalo',$this->tarjeta_regalo);
		$criteria->compare('total_venta',$this->total_venta);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('estado_venta',$this->estado_venta);
		$criteria->compare('id_pago',$this->id_pago);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('base',$this->base,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Venta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
