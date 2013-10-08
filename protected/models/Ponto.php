<?php

/**
 * This is the model class for table "ponto".
 *
 * The followings are the available columns in table 'ponto':
 * @property integer $pessoa_id
 * @property integer $pontuacao
 * @property integer $escore
 *
 * The followings are the available model relations:
 * @property Pessoa $pessoa
 */
class Ponto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ponto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pessoa_id, pontuacao, escore', 'required'),
			array('pessoa_id, pontuacao, escore', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pessoa_id, pontuacao, escore', 'safe', 'on'=>'search'),
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
			'pessoa' => array(self::BELONGS_TO, 'Pessoa', 'pessoa_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pessoa_id' => 'Pessoa',
			'pontuacao' => 'Pontuacao',
			'escore' => 'Escore',
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

		$criteria->compare('pessoa_id',$this->pessoa_id);
		$criteria->compare('pontuacao',$this->pontuacao);
		$criteria->compare('escore',$this->escore);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ponto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}