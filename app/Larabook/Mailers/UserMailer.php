<?php
/**
 * Codebase larabook.com
 * Filename: UserMailer.php
 * User: sid
 * Date: 28/11/2014
 * Time: 10:16 AM
 */

namespace Larabook\Mailers;

use User;

class UserMailer extends Mailer{

    /**
     * @param User $user
     */
    public function sendWelcomeMessageTo(User $user)
    {
        $subject = "Welcome to Larabook";
        $view = "emails.registration.confirm";
        $data = [];

        $this->sendTo($user, $subject, $view, $data);
    }
    

} 