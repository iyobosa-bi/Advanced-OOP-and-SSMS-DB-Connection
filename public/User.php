<?php

class User
{

    private string $email;

    //validate email

    public function __construct( string $email)
    {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Invalid Email");
        }

        $this->email = $email;
    }
    public function getEmail()
    {

        return $this->email;
    }

}

try {
    $user = new User(4);
    print $user->getEmail();
} catch (InvalidArgumentException $e) {
    print $e->getMessage();
}

