<?php

/**
 * This is the model class for table "pessoa".
 *
 * The followings are the available columns in table 'pessoa':
 * @property integer $id
 * @property string $nome
 * @property string $rg
 * @property string $email
 * @property string $telefone
 * @property string $nascimento
 * @property string $usuario
 * @property string $senha
 *
 * The followings are the available model relations:
 * @property Agenda[] $agendas
 * @property Estabelecimento[] $estabelecimentos
 * @property Ponto $ponto
 */
class Pessoa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pessoa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, rg, email, telefone, nascimento, usuario, senha', 'required'),
			array('rg, email, telefone, nascimento, usuario, senha', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nome, rg, email, telefone, nascimento, usuario, senha', 'safe', 'on'=>'search'),
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
			'agendas' => array(self::HAS_MANY, 'Agenda', 'pessoa_id'),
			'estabelecimentos' => array(self::MANY_MANY, 'Estabelecimento', 'pessoa_has_estabelecimento(pessoa_id, estabelecimento_id)'),
			'ponto' => array(self::HAS_ONE, 'Ponto', 'pessoa_id'),
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
			'rg' => 'Rg',
			'email' => 'Email',
			'telefone' => 'Telefone',
			'nascimento' => 'Nascimento',
			'usuario' => 'Usuario',
			'senha' => 'Senha',
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
		$criteria->compare('rg',$this->rg,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('nascimento',$this->nascimento,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('senha',$this->senha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pessoa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
