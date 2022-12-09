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

// very basic not meant to function yet. should probably include login / register function and customer class here
// gotta figure out how to incorporate this with login / registration primarily, after that abstracting other user functions should be straightforward
// (god willing)
?>