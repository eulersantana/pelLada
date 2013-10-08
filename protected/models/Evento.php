<?php

/**
 * This is the model class for table "evento".
 *
 * The followings are the available columns in table 'evento':
 * @property string $id
 * @property string $estabelecimento_id
 * @property string $atracao
 * @property string $descricao
 * @property string $data
 * @property string $imagem
 * @property integer $preco
 */
class Evento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'evento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estabelecimento_id, atracao, data, imagem', 'required'),
			array('preco', 'numerical', 'integerOnly'=>true),
			array('estabelecimento_id', 'length', 'max'=>20),
			array('descricao', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, estabelecimento_id, atracao, descricao, data, imagem, preco', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'estabelecimento_id' => 'Estabelecimento',
			'atracao' => 'Atracao',
			'descricao' => 'Descricao',
			'data' => 'Data',
			'imagem' => 'Imagem',
			'preco' => 'Preco',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('estabelecimento_id',$this->estabelecimento_id,true);
		$criteria->compare('atracao',$this->atracao,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('imagem',$this->imagem,true);
		$criteria->compare('preco',$this->preco);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Evento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
