<?php

require_once "database.php";

class User
{

    public $email;
    public $password;


    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

     public function login()
    {

        global $conn;

        $query = "select * from users where mail = '" . $this->email . "' and password = '" . $this->password . "'";
        $stmt = $conn->prepare($query);
        $resolt = $stmt->execute();
        $resolt = $stmt->fetch();

        //    print_r( $resolt );

        if ($resolt) {
            echo "mzyan";
        } else {
            echo "mamzyanch";
        }

    }



}