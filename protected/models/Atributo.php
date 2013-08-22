<?php

/**
 * This is the model class for table "atributo".
 *
 * The followings are the available columns in table 'atributo':
 * @property integer $id_atributo
 * @property string $nombre_atrib
 * @property string $valor_atrib
 *
 * The followings are the available model relations:
 * @property Producto[] $productos
 */
class Atributo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'atributo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_atrib, valor_atrib', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_atributo, nombre_atrib, valor_atrib', 'safe', 'on'=>'search'),
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
			'productos' => array(self::HAS_MANY, 'Producto', 'id_atributo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_atributo' => 'Id Atributo',
			'nombre_atrib' => 'Nombre Atrib',
			'valor_atrib' => 'Valor Atrib',
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

		$criteria->compare('id_atributo',$this->id_atributo);
		$criteria->compare('nombre_atrib',$this->nombre_atrib,true);
		$criteria->compare('valor_atrib',$this->valor_atrib,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Atributo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
