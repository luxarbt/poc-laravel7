<?php


namespace App\Repositories;


use App\Email;

/**
 * Class EmailRepository
 * @package App\Repositories
 */
class EmailRepository implements EmailRepositoryInterface
{
    protected $email;

    /**
     * EmailRepository constructor.
     * @param Email $email
     */
    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    /**
     * @param $mail
     */
    public function save($mail)
    {
        $this->email->email = $mail;
        $this->email->save();
    }
}
