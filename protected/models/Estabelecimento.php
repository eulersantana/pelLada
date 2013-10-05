<?php

/**
 * This is the model class for table "estabelecimento".
 *
 * The followings are the available columns in table 'estabelecimento':
 * @property integer $id
 * @property string $nome
 * @property string $endereco
 * @property string $telefone
 * @property string $proprietario
 *
 * The followings are the available model relations:
 * @property Agenda[] $agendas
 * @property Evento[] $eventos
 * @property Pessoa[] $pessoas
 * @property Promocao[] $promocaos
 */
class Estabelecimento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estabelecimento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, endereco, telefone, proprietario', 'required'),
			array('nome, telefone', 'length', 'max'=>45),
			array('proprietario', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome, endereco, telefone, proprietario', 'safe', 'on'=>'search'),
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
			'agendas' => array(self::HAS_MANY, 'Agenda', 'estabelecimento_id'),
			'eventos' => array(self::HAS_MANY, 'Evento', 'estabelecimento_id'),
			'pessoas' => array(self::MANY_MANY, 'Pessoa', 'pessoa_has_estabelecimento(estabelecimento_id, pessoa_id)'),
			'promocaos' => array(self::HAS_MANY, 'Promocao', 'estabelecimento_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nome' => 'Nome',
			'endereco' => 'Endereco',
			'telefone' => 'Telefone',
			'proprietario' => 'Proprietario',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('proprietario',$this->proprietario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estabelecimento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
