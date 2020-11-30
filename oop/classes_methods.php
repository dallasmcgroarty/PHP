<?php 

class User {
    public function __construct(){
        echo 'Constructor Called';
    }

    public function register(){
        echo 'User registered.';
    }

    public function login($username, $password='None') {
        $this->auth_user($username,$password);
    }

    public function auth_user($username, $password) {
        echo $username . ' is authenticated';
    }

    public function __destruct(){
        echo 'Destructor called';
    }
}

$user = new User;
echo '<br>';
$user->register();
echo '<br>';
$user->login('Tom','1234');
echo '<br>';

?>