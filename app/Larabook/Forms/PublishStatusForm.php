<?php
/**
 * Codebase larabook.com
 * Filename: PublishStatusForm.php
 * User: sid
 * Date: 26/11/2014
 * Time: 8:07 PM
 */

namespace Larabook\Forms;


use Laracasts\Validation\FormValidator;

class PublishStatusForm extends FormValidator {

    /**
     * Validation rules for posting a status
     *
     * @var array
     */

    protected $rules = [
        'body'  => 'required'
    ];

}