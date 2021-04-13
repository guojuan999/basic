<?php

namespace app\models;

use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user This property is read-only.
 *
 */
class GameForm extends Model
{
    public $number;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['number'], 'required'],
            ['number', 'validateNumber'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validateNumber($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if (!is_numeric($this->number) || ($this->number <= 0)) {
                $this->addError($attribute, 'Incorrect number.');
            }
        }
    }
}
