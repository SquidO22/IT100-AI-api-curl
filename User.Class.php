<?php

class User {  
  //Properties and Methods
  private $username="selfridge";
  public $email;

  //Method!!   => setter
  public function setName($myNewName) {
    $this->username=$myNewName;
  }

  public function getName() {
    return $this->username;
  }

}

?>