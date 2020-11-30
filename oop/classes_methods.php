<?php 

class User {

    private $id;
    private $username;
    private $email;
    private $password;

    public function __construct($username, $password){
        //echo 'Constructor Called';
        $this->username = $username;
        $this->password = $password;
    }

    public function register(){
        echo 'User registered.';
    }

    public function login() {
        $this->auth_user();
    }

    public function auth_user() {
        echo $this->username . ' is authenticated';
    }

    public function __destruct(){
        echo 'Destructor called';
    }
}

$user = new User('Tom','1234');
echo '<br>';
$user->register();
echo '<br>';
$user->login();
echo '<br>';

class Post{
    private $name;

    public function __set($name,$value){
        echo 'Setting ' . $name . ' to <strong>' . $value . '</strong><br/>';
        $this->name = $value;
    }

    public function __get($name) {
        echo 'Getting ' . $name . ' <strong>' .$this->name . '</strong><br/>';
    }

    public function __isset($name) {
        echo 'Is ' . $name . ' set?<br />';
        return isset($this->name);
    }
}

$post = new Post;
$post->name = 'Testing';
echo $post->name;

var_dump(isset($post->name));
?>