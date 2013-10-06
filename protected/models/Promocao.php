<?php

/**
 * This is the model class for table "promocao".
 *
 * The followings are the available columns in table 'promocao':
 * @property integer $id
 * @property integer $estabelecimento_id
 * @property string $titulo
 * @property string $descricao
 * @property string $data_inicio
 * @property string $data_fim
 * @property string $imagem
 *
 * The followings are the available model relations:
 * @property Estabelecimento $estabelecimento
 */
class Promocao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'promocao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estabelecimento_id, titulo, data_inicio, data_fim, imagem', 'required'),
			array('estabelecimento_id', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>45),
			array('descricao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, estabelecimento_id, titulo, descricao, data_inicio, data_fim, imagem', 'safe', 'on'=>'search'),
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
			'estabelecimento' => array(self::BELONGS_TO, 'Estabelecimento', 'estabelecimento_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'estabelecimento_id' => 'Estabelecimento',
			'titulo' => 'Titulo',
			'descricao' => 'Descricao',
			'data_inicio' => 'Data Inicio',
			'data_fim' => 'Data Fim',
			'imagem' => 'Imagem',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('estabelecimento_id',$this->estabelecimento_id);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('data_inicio',$this->data_inicio,true);
		$criteria->compare('data_fim',$this->data_fim,true);
		$criteria->compare('imagem',$this->imagem,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Promocao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
