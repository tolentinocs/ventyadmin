<?php

/**
 * This is the model class for table "linea_venta".
 *
 * The followings are the available columns in table 'linea_venta':
 * @property integer $id_lineaventa
 * @property integer $descuento
 * @property integer $cantidad
 * @property double $importe
 * @property integer $folio_venta
 * @property integer $id_producto
 */
class LineaVenta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'linea_venta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descuento, cantidad, folio_venta, id_producto', 'numerical', 'integerOnly'=>true),
			array('importe', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_lineaventa, descuento, cantidad, importe, folio_venta, id_producto', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_lineaventa' => 'Id Lineaventa',
			'descuento' => 'Descuento',
			'cantidad' => 'Cantidad',
			'importe' => 'Importe',
			'folio_venta' => 'Folio Venta',
			'id_producto' => 'Id Producto',
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

		$criteria->compare('id_lineaventa',$this->id_lineaventa);
		$criteria->compare('descuento',$this->descuento);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('importe',$this->importe);
		$criteria->compare('folio_venta',$this->folio_venta);
		$criteria->compare('id_producto',$this->id_producto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LineaVenta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
