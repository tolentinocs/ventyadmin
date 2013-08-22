<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $id_producto
 * @property string $nombre_producto
 * @property double $precio_producto
 * @property string $caracteristicas
 * @property integer $id_categoria
 * @property integer $id_atributo
 *
 * The followings are the available model relations:
 * @property Atributo $idAtributo
 * @property Categoria $idCategoria
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_categoria, id_atributo', 'numerical', 'integerOnly'=>true),
			array('precio_producto', 'numerical'),
			array('nombre_producto, caracteristicas', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_producto, nombre_producto, precio_producto, caracteristicas, id_categoria, id_atributo', 'safe', 'on'=>'search'),
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
			'idAtributo' => array(self::BELONGS_TO, 'Atributo', 'id_atributo'),
			'idCategoria' => array(self::BELONGS_TO, 'Categoria', 'id_categoria'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_producto' => 'Id Producto',
			'nombre_producto' => 'Nombre Producto',
			'precio_producto' => 'Precio Producto',
			'caracteristicas' => 'Caracteristicas',
			'id_categoria' => 'Id Categoria',
			'id_atributo' => 'Id Atributo',
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

		$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('nombre_producto',$this->nombre_producto,true);
		$criteria->compare('precio_producto',$this->precio_producto);
		$criteria->compare('caracteristicas',$this->caracteristicas,true);
		$criteria->compare('id_categoria',$this->id_categoria);
		$criteria->compare('id_atributo',$this->id_atributo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
