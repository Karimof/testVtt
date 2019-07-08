<?php

namespace app\models;

use Yii\db\ActiveRecord;
use yii\base\Security;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $fio
 * @property string $image
 * @property string $username
 * @property string $password
 * @property string $authkey
 * @property int $role
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }
    const R_ADMIN = 1;
    const R_USER = 0;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fio', 'image', 'username', 'password','role'], 'required'],
            [['authKey'],'string','max' => 100],
            [['fio', 'image', 'username', 'password'], 'string', 'max' => 255],
            ['role', 'in', 'range' => [self::R_USER, self::R_ADMIN]],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'image' => 'Image',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'Auth Key',
            'role' => 'Role'
        ];
    }

    public static function findIdentity($id)
    {
//        return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        return static::findOne($id);

    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {

//        foreach (self::$users as $user) {
//            if ($user['accessToken'] === $token) {
//                return new static($user);
//            }
//        }
//
       return null;
//
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
//        foreach (self::$users as $user) {
//            if (strcasecmp($user['username'], $username) === 0) {
//                return new static($user);
//            }
//        }
//
        $user = self::find()
            ->where(['=', 'username', $username])
            ->one();

         return $user;

    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authkey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authkey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
          // return $this->password === $password;
        return $password === $this->password;
        //return \Yii::$app->getSecurity()->validatePassword($password, $this->password);
    }

    public static function isUserAdmin($username)
    {
        if (static::findOne(['username' => $username, 'role' => self::R_ADMIN])){

            return true;
        } else {

            return false;
        }

    }
    public function getRolequ()
    {
        if($this->role == 1) {

            return 'Admin';
        }
        else if($this->role == 0){

            return 'Foydalanuvchi';
        }
    }

    public function getResults(){
        return $this->hasMany(Result::className(),['user_id' => 'id']);
    }

}
