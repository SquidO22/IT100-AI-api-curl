<pre><?php

class User {  
  //Properties and Methods
  private $username;   //This is a username
  public $email;       // this is an email

  //Constructor
  public function __construct($__cUsername="boo", $__cEmail="hoo") {
    $this->username = $__cUsername;
    $this->email = $__cEmail;
  }
  
  //Method!!   => setter
  public function setName($myNewName) {
    $this->username=$myNewName;
  }

  public function __destruct(){
    echo "this is dead!\n";
  }

  //Method!!   => getter
  public function getName() {
    return $this->username;
  }
}

class adminUser extends User {
  // my Admin User
  public $adminRole = "Super Admin";
} 

$user1 = new User("Bubba","bubba@gmail.com");
echo $user1->getName()."\n";
//echo $user1->adminRole;

$adminUser1 = new adminUser("Better","bob@gmail.com");
echo $adminUser1->getName();
echo $adminUser1->adminRole;

// $user1->setName("Big Bob"); // calling my method/setter setName()
// echo $user1->getName()."\n";
// unset($user1);


// $arr = ["bob","lll"];
// var_dump($arr);
?></pre>