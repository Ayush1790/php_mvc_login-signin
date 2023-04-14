<?php
// registration
include_once '../assests/variables.php';
include_once BASE_PATH . '/assests/db/config.php';
if (isset($_POST)) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $pswd = $_POST['pswd'];
   if ($name == '' || $email == '' || $pswd == '') {
      header('location:../View/signin.php?msg=Please Fill all the fields');
   } else {
      // adding the data in database
      $attributes = array('name' => "$name", 'email' => "$email", 'pswd' => "$pswd");
      $result = User::create($attributes);
      if ($result) {
         header('location:../View/login.php');
      } else {
         header('location:../View/signin.php?msg=error');
      }
   }
}
