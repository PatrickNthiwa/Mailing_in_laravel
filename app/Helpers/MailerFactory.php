<?php

namespace App\Helpers;


use Illuminate\Contracts\Mail\Mailer;

class MailerFactory
{
    protected $mailer;
    protected $fromAddress = '';
    protected $fromName = 'Mini CRM';


    /**
     * MailerFactory constructor.
     *
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;

        $this->fromAddress = getSetting("crm_email");
    }


    /**
     * sendActivateBannedEmail
     *
     *
     * @param $subject
     * @param $user
     */
    public function sendActivateBannedEmail($subject, $user)
    {
        try {
        $this->mailer->send("emails.activate_banned", ['user' => $user, 'subject' => $subject], function($message) use ($subject, $user) {

            $message->from($this->fromAddress, $this->fromName)
                ->to($user->email)->subject($subject);

        });
        } catch (\Exception $ex) {
            die("Mailer Factory error: " . $ex->getMessage());
        }
    }
}
