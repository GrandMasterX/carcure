<?php

/**
 * User class file.
 *
 * @author Turanszky Sandor <o.turansky@gmail.com>
 * @link http://www.tursystem.com.ua/
 * @copyright Copyright &copy; 2012-2013 TurSystem Software Development
 * @license http://www.tursystem.com.ua/license/
 */

/**
 * The followings are the available columns in table 'user':
 * @var integer $id
 * @var string $name
 * @var string company_title
 * @var string $password
 * @var string $email
 * @var integer $phone
 * @var integer $create_time
 * @var integer $update_time
 * @var integer $is_blocked
 * @var integer $is_locked
 * @var integer $lastLoginTime
 * @var string $hash
 * @var integer $created_by_id
 * @var integer $updated_by_id
 * @var string $www
 * $var string $xml_url
 * $image_import_url string $image_import_url
 */
class User extends CActiveRecord implements IUserIdentity {

    public  $password_repeat;
    public  $password_check;
    private $password_old;
    private $_id;
    private $_name;
    private $_email;
    private $_model;
    private $fname;
    private $lname;
    private $acc_status;
    private $_isAuthenticated = false;
    private $_state = array();
    public  $unhashed_password;
    public  $auth_role;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'user';
    }

    public function behaviors() {
        return array(
            'zii.behaviors.CTimestampBehavior',
        );
    }

    public function rules() {
        $charset = Yii::app()->charset;

        return array(
            array('name,password,email,password_repeat,email_repeat,name,login', 'required', 'on' => 'insert'),//,update
            array('email_repeat', 'compare', 'compareAttribute'=>'email', 'message'=>Yii::t('login',"Емейлы не совпадают")),
            array('password_repeat', 'compare', 'compareAttribute'=>'password', 'message'=>Yii::t('login',"Пароли не совпадают")),
            array('name,email,password,password_repeat,email_repeat,name,login', 'safe', 'on' => 'search,insert,update'),
        );
    }

    public function attributeLabels() {
        return array(
            'name' => Yii::t('user', 'Имя'),
            'company_title' => Yii::t('user', 'Название компании'),
            'email' => Yii::t('user', 'Электронная почта'),
            'mailing' => Yii::t('user', ' Подписаться на новости'),
            'group1' => Yii::t('user', 'Пользователь'),
            'group2' => Yii::t('user', 'Дилер'),
            'password_repeat' => Yii::t('user', 'Текущий пароль'),
            'password' => Yii::t('user', 'Пароль'),
            'create_time' => Yii::t('user', 'Дата создания'),
            'image_import_url' => Yii::t('user', 'Путь к фотографиям'),
            'auth_role'=> Yii::t('user', 'Роль'),
        );
    }

    public function authenticate() {
        $model = self::model()->findByAttributes(array('email' => $this->email));
        if ($model === null || $model->password !== $this->password) {
            $this->addError('password', Yii::t('loginForm', 'Пользователь с таким email не найден или не верный пароль!'));
            return false;
        }
        if ($model->is_blocked > 0) {
            $this->addError('email', Yii::t('loginForm', 'Ваш аккаунт заблокирован!'));
            return false;
        }
        $this->_id = $model->id;
        $this->_name = $model->name;
        $this->_email = $model->email;
        $this->_model = $model;
        $this->_isAuthenticated = true;
        $this->setState('isAllowed', ($model->is_admin==1) ? true : false);
        $this->setState('email', $model->email);
        $this->setState('lastLoginTime', $model->lastLoginTime);

        //Todo: set user language
        Yii::app()->user->setState('language','ru');
        return true;
    }

    /**
     * Makes no password check.
     * Is used to login user right after registration
     */
    public function authenticateOnRegistration() {
        $this->_id = $this->id;
        $this->_name = $this->name;
        $this->_isAuthenticated = true;
        $this->setState('isAllowed', 0);
        $this->setState('email', $this->email);
        $this->setState('lastLoginTime', $this->lastLoginTime);
        //Todo: set user language
        Yii::app()->user->setState('language', 'ru');

        return true;
    }
    
    /**
     * Makes no password check when user.
     * Is used to login user right after registration
     */
    public function authenticateOnLoginByHashFromEmail() {
        $this->_id = $this->id;
        $this->_name = $this->name;
        $this->_isAuthenticated = true;
        $this->setState('isAllowed', 0);
        $this->setState('email', $this->email);
        $this->setState('lastLoginTime', $this->lastLoginTime);
        //Todo: set user language
        Yii::app()->user->setState('language', 'ru');

        return true;
    }    

    public function checkPass() {
        if ($this->password_old !== sha1($this->password_check)) {
            $this->addError('password_check', Yii::t('loginForm', 'Пароль указан неверно!'));
            return false;
        }

        return true;
    }
    
    public function verifyPassword($password){
        if($this->password_old == sha1($password))
            return true;
        else
            return false;
    }

    public function ifEmailExists() {
        $model = self::model()->findByAttributes(array('email' => $this->email));

        if ($model === null) {
            $this->addError('email', Yii::t('restorePassForm', 'Такого email не существует!'));
            return false;
        }

        return false;
    }

    protected function beforeSave() {
        if (!parent::beforeSave())
            return false;
        if (!empty($this->password) && $this->scenario != 'clientUpdateByAdmin')
            $this->password = sha1($this->password);

        if (is_null($this->password))
            $this->password = $this->password_old;

        if ($this->isNewRecord) {
            //$this->created_by_id = (Yii::app()->user->id) ? Yii::app()->user->id : 0;
            $this->language=Yii::app()->language;
        }
        else {
            if (Yii::app() instanceof CWebApplication) {
                $this->updated_by_id = Yii::app()->user->id;
            }
        }

        return true;
    }

    protected function afterFind() {
        $this->password_old = $this->password;

        return parent::afterFind();
    }

    public function scopes() {
        return array(
            'notBlocked' => array(
                'condition' => 'is_blocked=0',
            ),
            'isClient' => array(
                'condition' => 'is_client=1',
            ),
            'isPartner' => array(
                'condition' => 'is_partner=1',
            ),
        );
    }

    public function getId() {
        return $this->_id;
    }
    
    public function getName() {
        return $this->_name;
    }
    
    public function getModel() {
        return $this->_model;
    }

    public function getEmail() {
        return $this->_email;
    }

    public function getPersistentStates() {
        return $this->_state;
    }

    public function setPersistentStates($states) {
        $this->_state = $states;
    }

    public function getIsAuthenticated() {
        return $this->_isAuthenticated;
    }

    public function getState($name, $defaultValue = null) {
        return isset($this->_state[$name]) ? $this->_state[$name] : $defaultValue;
    }

    public function setState($name, $value) {
        $this->_state[$name] = $value;
    }

    public function clearState($name) {
        unset($this->_state[$name]);
    }

    public static function emailPassword($model) {
        $from = Yii::app()->params['adminEmail'];
        $title = Yii::t('password', 'Восстановление пароля');
        $body = Yii::t('password', 'Здравствуйте. Пожалуйста, установите пароли для вашей учетной записи по следующей ссылке:');
        $link = Yii::app()->createAbsoluteUrl('site/setPassword', array('id' => $model->id, 'hash' => $model->hash, 'type' => $model->is_client), "http");
        $body = $body . "\r\n" . $link;

        return Helper::sendSimpleEmail($from, $model->email, $title, $body);
    }

    public static function emailGreetingsAndPassword($model) {
        $from = Yii::app()->params['adminEmail'];
        $title = Yii::t('password', 'Только подходящий размер с AstraFit');
        $body = Yii::t('password', 'Здравствуйте. Приветствуем вас на AstraFit. Ваш пароль: ' . $model->unhashed_password);
        //$link  = Yii::app()->createAbsoluteUrl('site/setPassword', array('id'=>$model->id, 'hash'=>$model->hash), "http");
        //$body  = $body . "\r\n" . $link;

        return Helper::sendSimpleEmail($from, $model->email, $title, $body);
    }

    /**
     * Generates an array of ClientHasSize models for the current User(Client)
     * @param mixed $update populates field 'value' from table client_size. Defaults to false;
     */
    public function getRole()
    {
        $role = Yii::app()->db->createCommand()
            ->select('itemname')
            ->from('auth_item_user_assn')
            ->where('userid=:id', array(':id'=>$this->id))
            ->queryScalar();

        return $role;
    }
    
    public function findByEmail($email)
    {
      return self::model()->findByAttributes(array('email' => $email));
    }
    
    public function getFname()
    {
        $name = Yii::app()->db->createCommand()
            ->select('name')
            ->from('user')
            ->where('userid=:id', array(':id'=>$this->id))
            ->queryRow();
      return $name;
    }
    
    public function getGender()
    {
        $gender = Yii::app()->db->createCommand()
              ->select('gender')
              ->from('user')
              ->where('userid=:id', array(':id'=>$this->id))
              ->queryRow();

        return $gender;
    }
    
    public function getPhoto()
    {
        $photo = Yii::app()->db->createCommand()
              ->select('photo')
              ->from('user')
              ->where('userid=:id', array(':id'=>$this->id))
              ->queryRow();

        return $photo;
    }
    
    public function getBirthday()
    {
        $birthday = Yii::app()->db->createCommand()
            ->select('birthday')
            ->from('user')
            ->where('userid=:id', array(':id'=>$this->id))
            ->queryRow();
      
        return $birthday;
    }
    
    public function getAcc_status() {
        $acc_status = Yii::app()->db->createCommand()
            ->select('acc_status')
            ->from('user')
            ->where('userid=:id', array(':id'=>$this->id))
            ->queryRow();
        return $acc_status;
    }
    
}