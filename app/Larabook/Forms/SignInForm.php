<?php
/**
 * Codebase larabook.com
 * Filename: SignInForm.php
 * User: sid
 * Date: 26/11/2014
 * Time: 11:17 AM
 */

namespace Larabook\Forms;


use Laracasts\Validation\FormValidator;

class SignInForm extends FormValidator {

    /**
     * Validation rules for the login form
     *
     * @var array
     */

    protected $rules = [
        'email'     => 'required',
        'password'  => 'required'
    ];

} 