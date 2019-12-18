<?php

include("database.php");
include("mailer.php");
include("form.php");

class Session
{
   var $username;     //Username given on sign-up
   var $userid;       //Random value generated on current login
   var $userlevel;    //The level to which the user pertains
   var $time;         //Time user was last active (page loaded)
   var $logged_in;    //True if user is logged in, false otherwise
   var $userinfo = array();  //The array holding all user info
   var $url;          //The page url current being viewed
   var $referrer;     //Last recorded site page viewed
    var $Id;
    var $phoneNo;
var $email;

   function Session(){
      $this->time = time();
      $this->startSession();
   }

   function startSession(){
      global $database;  //The database connection
      session_start();   //Tell PHP to start the session
      /* Determine if user is logged in */
      $this->logged_in = $this->checkLogin();
      /* Set referrer page */
      if(isset($_SESSION['url'])){
         $this->referrer = $_SESSION['url'];
      }else{
         $this->referrer = "/";
      }
      /* Set current url */
      $this->url = $_SESSION['url'] = $_SERVER['PHP_SELF'];
   }


   function checkLogin(){
      global $database;  //The database connection
      /* Check if user has been remembered */
      if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookid'])){
         $this->username = $_SESSION['username'] = $_COOKIE['cookname'];
         $this->userid   = $_SESSION['userid']   = $_COOKIE['cookid'];
      }

      /* Username and userid have been set and not guest */
      if(isset($_SESSION['username']) && isset($_SESSION['userid']) &&
         $_SESSION['username'] != GUEST_NAME){
         /* Confirm that username and userid are valid */
         if($database->confirmUserID($_SESSION['username'], $_SESSION['userid']) != 0){
            /* Variables are incorrect, user not logged in */
            unset($_SESSION['username']);
            unset($_SESSION['userid']);
            return false;
         }

         /* User is logged in, set class variables */
         $this->userinfo  = $database->getUserInfo($_SESSION['username']);
         $this->username  = $this->userinfo['username'];
         $this->userid    = $this->userinfo['userid'];
         $this->userlevel = $this->userinfo['userlevel'];
          $this->Id=$this->userinfo['Id'];
          $this->phoneNo=$this->userinfo['phoneNo'];
            $this->email=$this->userinfo['email'];
         return true;
      }
      /* User not logged in */
      else{
         return false;
      }

   }


   function login($subuser, $subpass, $subremember){
      global $database, $form;  //The database and form object

      /* Username error checking */
      $field = "user";  //Use field name for username
      if(!$subuser || strlen($subuser = trim($subuser)) == 0){
         $form->setError($field, "* Username not entered");
      }
      else{
         /* Check if username is not alphanumeric */
         if(!preg_match("/^([0-9a-z])*$/i", $subuser)){
            $form->setError($field, "* Username not alphanumeric");
         }
      }

      /* Password error checking */
      $field = "pass";  //Use field name for password
      if(!$subpass){
         $form->setError($field, "* Password not entered");
      }

      /* Return if form errors exist */
      if($form->num_errors > 0){
         return false;
      }

      /* Checks that username is in database and password is correct */
      $subuser = stripslashes($subuser);
      $result = $database->confirmUserPass($subuser, md5($subpass));

      /* Check error codes */
      if($result == 1){
         $field = "user";
         $form->setError($field, "* Sorry Username or the password is not found");
      }
      else if($result == 2){
         $field = "pass";
         $form->setError($field, "*Sorry Username or the password is not found");
      }

      /* Return if form errors exist */
      if($form->num_errors > 0){
         return false;
      }

      /* Username and password correct, register session variables */
      $this->userinfo  = $database->getUserInfo($subuser);
      $this->username  = $_SESSION['username'] = $this->userinfo['username'];
      $this->userid    = $_SESSION['userid']   = $this->generateRandID();
      $this->userlevel = $this->userinfo['userlevel'];
       $this->Id=$this->userinfo['Id'];

      /* Insert userid into database and update active users table */
      $database->updateUserField($this->username, "userid", $this->userid);

      if($subremember){
         setcookie("cookname", $this->username, time()+COOKIE_EXPIRE, COOKIE_PATH);
         setcookie("cookid",   $this->userid,   time()+COOKIE_EXPIRE, COOKIE_PATH);
      }

      /* Login completed successfully */
      return true;
   }


   function logout(){
      if(isset($_COOKIE['cookname']) && isset($_COOKIE['cookid'])){
         setcookie("cookname", "", time()-COOKIE_EXPIRE, COOKIE_PATH);
         setcookie("cookid",   "", time()-COOKIE_EXPIRE, COOKIE_PATH);
      }

      /* Unset PHP session variables */
      unset($_SESSION['username']);
      unset($_SESSION['userid']);

      /* Reflect fact that user has logged out */
      $this->logged_in = false;
   }


   function register($subfname,$sublname,$subusername, $subpass, $subemail,$subphoneNo){
      global $database, $form, $mailer;  //The database, form and mailer object
      if(!$subfname || strlen($subfname = trim($subfname)) == 0){
        $field = "fname";
         $form->setError($field, "* First name not entered");
      }
      else if(!$sublname || strlen($sublname = trim($sublname)) == 0){
        $field = "lname";
         $form->setError($field, "* Last name not entered");
      }
      else if(!$subusername || strlen($subusername = trim($subusername)) == 0){
        $field = "uname";
         $form->setError($field, "* Username not entered");
      }
      else{
          $field = "uname";
         /* Spruce up username, check length */
         $subusername = stripslashes($subusername);
         if(strlen($subusername) < 5){
            $form->setError($field, "* Username below 5 characters");
         }
         else if(strlen($subusername) > 30){
            $form->setError($field, "* Username above 30 characters");
         }
         /* Check if username is not alphanumeric */
         else if(!preg_match("/^([0-9a-z])+$/i", $subusername)){
            $form->setError($field, "* Username not alphanumeric");
         }
         /* Check if username is reserved */
         else if(strcasecmp($subusername, GUEST_NAME) == 0){
            $form->setError($field, "* Username reserved word");
         }
         /* Check if username is already in use */
         else if($database->usernameTaken($subusername)){
            $form->setError($field, "* Username already in use");
         }

      }

      /* Password error checking */
      $field = "pass";  //Use field name for password
      if(!$subpass){
         $form->setError($field, "* Password not entered");
      }
      else{
         /* Spruce up password and check length*/
         $subpass = stripslashes($subpass);
         if(strlen($subpass) < 4){
            $form->setError($field, "* Password too short");
         }
         /* Check if password is not alphanumeric */
         else if(!preg_match("/^([0-9a-z])+$/i", ($subpass = trim($subpass)))){
            $form->setError($field, "* Password not alphanumeric");
         }

      }

      /* Email error checking */
      $field = "email";  //Use field name for email
      if(!$subemail || strlen($subemail = trim($subemail)) == 0){
         $form->setError($field, "* Email not entered");
      }
      else{
         /* Check if valid email address */
         $regex = "/^[_+a-z0-9-]+(\.[_+a-z0-9-]+)*"
                 ."@[a-z0-9-]+(\.[a-z0-9-]{1,})*"
                 ."\.([a-z]{2,}){1}$/i";
         if(!preg_match($regex,$subemail)){
            $form->setError($field, "* Email invalid");
         }
         $subemail = stripslashes($subemail);
      }

      /* Errors exist, have user correct them */
      if($form->num_errors > 0){
         return 1;  //Errors with form
      }
      /* No errors, add the new account to the */
      else{
         if($database->addNewUser($subfname,$sublname, $subusername, md5($subpass), $subemail,$subphoneNo)){
            return 0;  //New user added succesfully
         }else{
            return 2;  //Registration attempt failed
         }
      }
   }

   function isAdmin(){
      return ($this->userlevel == ADMIN_LEVEL || $this->username  == ADMIN_NAME);
   }

   function generateRandID(){
      return md5($this->generateRandStr(16));
   }

   function generateRandStr($length){
      $randstr = "";
      for($i=0; $i<$length; $i++){
         $randnum = mt_rand(0,61);
         if($randnum < 10){
            $randstr .= chr($randnum+48);
         }else if($randnum < 36){
            $randstr .= chr($randnum+55);
         }else{
            $randstr .= chr($randnum+61);
         }
      }
      return $randstr;
   }

   function payWithMpesa($resultCode,$resultDesc,$merchantRequestID,$checkoutRequestID,$amount,$mpesaReceiptNumber,$balance,$transactionDate,$phoneNumber){
       global $database;
     $ff=$_SESSION['orderid'];
    $_SESSION['mpesa']=$mpesaReceiptNumber;
      $database->payWithMpesa($ff,$resultCode,$resultDesc,$merchantRequestID,$checkoutRequestID,$amount,$mpesaReceiptNumber,$balance,$transactionDate,$phoneNumber);
    return 0;
   }

};


$session = new Session;

/* Initialize form object */
$form = new Form;

?>
