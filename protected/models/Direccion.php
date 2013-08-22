<?php

/**
 * This is the model class for table "direccion".
 *
 * The followings are the available columns in table 'direccion':
 * @property integer $id_direccion
 * @property string $alias_direccion
 * @property integer $id_cliente
 * @property string $calle
 * @property string $colonia
 * @property string $municipio
 * @property integer $codigo_postal
 * @property string $destinatario
 *
 * The followings are the available model relations:
 * @property Cliente $idCliente
 */
class Direccion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'direccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cliente, codigo_postal', 'numerical', 'integerOnly'=>true),
			array('alias_direccion, calle, colonia, municipio, destinatario', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_direccion, alias_direccion, id_cliente, calle, colonia, municipio, codigo_postal, destinatario', 'safe', 'on'=>'search'),
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
			'idCliente' => array(self::BELONGS_TO, 'Cliente', 'id_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_direccion' => 'Id Direccion',
			'alias_direccion' => 'Alias Direccion',
			'id_cliente' => 'Id Cliente',
			'calle' => 'Calle',
			'colonia' => 'Colonia',
			'municipio' => 'Municipio',
			'codigo_postal' => 'Codigo Postal',
			'destinatario' => 'Destinatario',
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

		$criteria->compare('id_direccion',$this->id_direccion);
		$criteria->compare('alias_direccion',$this->alias_direccion,true);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('calle',$this->calle,true);
		$criteria->compare('colonia',$this->colonia,true);
		$criteria->compare('municipio',$this->municipio,true);
		$criteria->compare('codigo_postal',$this->codigo_postal);
		$criteria->compare('destinatario',$this->destinatario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Direccion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
