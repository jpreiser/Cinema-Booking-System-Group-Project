<?php
class User
{
    private $username;
    private $password;
    private $account_type;

    function get_username()
    {
        return $this->username;
    }

    function get_type()
    {
        return $this->account_type;
    }

    function __construct($uname, $pwd, $type)
    {
        $this->username = $uname;
        $this->password = $pwd;
        $this->account_type = $type;
    }
}
?>