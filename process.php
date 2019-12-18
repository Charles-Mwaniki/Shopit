<?php
include("admin/session.php");
class Process
{
   /* Class constructor */
   function Process(){
      global $session;
      /* User submitted login form */
      if(isset($_POST['sublogin'])){
         $this->procLogin();
      }
      /* User submitted registration form */
      else if(isset($_POST['subjoin'])){
         $this->procRegister();
      }
      /* User submitted forgot password form */
      else if(isset($_POST['subforgot'])){
         $this->procForgotPass();
      }
      else if(isset($_POST["type"]) && $_POST["product_qty"]){
        $this->procCart();
      }
       else if(isset($_POST["wishlist"])){
               $this->procWishlist();
      }
       else if(isset($_POST["rating"])){
          $this->procRating();
      }
      else if($session->logged_in){
         $this->procLogout();
      }
       else{
          header("Location: login.php");
       }
   }

   /**
    * procLogin - Processes the user submitted login form, if errors
    * are found, the user is redirected to correct the information,
    * if not, the user is effectively logged in to the system.
    */
   function procLogin(){
      global $session, $form;
      /* Login attempt */
      $retval = $session->login($_POST['username'], $_POST['passwd'], isset($_POST['remember']));

      /* Login successful */
      if($retval){
        if($session->isAdmin()){
          header("Location: admin.php");
        }else{
          header("Location: user.php");
        }
      }
      /* Login failed */
      else{
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         header("Location: ".$session->referrer);
      }
   }

   /**
    * procLogout - Simply attempts to log the user out of the system
    * given that there is no logout form to process.
    */
   function procLogout(){
      global $session;
      $retval = $session->logout();
      header("Location: ".$session->referrer);
   }

    function procWishlist(){
global $database;
        if(isset($_POST['itemid']) && isset($_POST['Id'])){
          $amount=0.5*$_POST['amount'];
        $retval = $database->addToWishlist($_POST['itemid'], $_POST['Id'],$amount);
        }else if($_POST["type"]=="remove_wish" && isset($_POST['remove_item']) ){
$database->removeWish($_POST['remove_item']);
}
         header("Location:wishlist.php");
    }


function procCart(){
global $database;
  if($_POST["type"]=='add'){
  foreach($_POST as $key => $value){ //add all post vars to new_product array
      $cart_array[$key] = filter_var($value, FILTER_SANITIZE_STRING);
  }
  //remove unecessary vars
  unset($cart_array['type']);
  unset($cart_array['returnUrl']);
  $id=$cart_array['itemid'];
  $rows=$database->getItemInfo($id);
  foreach($rows as $row){
    $cart_array["itemname"] = $row['itemname'];
    $cart_array["price"] =$row['price'];
     $cart_array["image"] = $row['s_url'];
      $cart_array["desc"] = $row['description'];

   if(isset($_SESSION["cartproducts"]) /*&& isset($session->username)*/ ){  //if session var already exist
         if(isset($_SESSION["cartproducts"][$cart_array['itemid']])) //check item exist in products array
         {
             unset($_SESSION["cartproducts"][$cart_array['itemid']]); //unset old array item
         }
     }
     $_SESSION["cartproducts"][$cart_array['itemid']] = $cart_array; //update or create product session with new item
  }
}


//update or remove items
    //update item quantity in product session
    if(isset($_POST["qty"]) || $_POST["type"]=='add'){

        foreach($_POST["qty"] as $key => $value){
            if(is_numeric($value)){
              if(isset($_SESSION["cartproducts"]["qty"])){
                $_SESSION["cartproducts"]["qty"] += $value;
              }else{
                $_SESSION["cartproducts"][$key]["qty"] = $value;
              }
            }
        }

        if(isset($_SESSION["cartproducts"][$cart_array['qty']])){

        }

}


//update or remove items

  if($_POST["type"]=="remove_code" && isset($_POST['product_qty']) ){
            foreach($_POST["remove_code"] as $key){
                unset($_SESSION["cartproducts"][$key]);
                $database->removeOrder($_POST['thisid']);
            }
  $total_items=count($_SESSION["cartproducts"]);
json_encode(array('items'=> $total_items));
}
//back to return url
$returnUrl = isset($_POST["returnUrl"])?urldecode($_POST["returnUrl"]):''; //return url
header('Location:'.$returnUrl);
      }

   function procRegister(){
      global $session, $form;
      /* Convert username to all lowercase (by option) */
      if(ALL_LOWERCASE){
         $_POST['uname'] = strtolower($_POST['uname']);
      }
      /* Registration attempt */
      $c=254;
      $retval = $session->register($_POST['fname'],$_POST['lname'], $_POST['uname'], $_POST['pass'], $_POST['email'], $c.$_POST['phoneNo']);
      if($retval == 0){
         $_SESSION['reguname'] = $_POST['uname'];
         $_SESSION['regsuccess'] = true;
         header("Location: user.php");
      }
      /* Error found with form */
      else if($retval == 1){
         //$_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
         //header("Location: ".$session->referrer);
         header("Location: formError.php");
      }
      /* Registration attempt failed */
      else if($retval == 2){
         $_SESSION['reguname'] = $_POST['uname'];
         $_SESSION['regsuccess'] = false;
        // header("Location: ".$session->referrer);
           header("Location: regfailed.php.'.$retval'");
      }
   }

   /**
    * procForgotPass - Validates the given username then if
    * everything is fine, a new password is generated and
    * emailed to the address the user gave on sign up.
    */
   function procForgotPass(){
      global $database, $session, $mailer, $form;
      /* Username error checking */
      $subuser = $_POST['user'];
      $field = "user";  //Use field name for username
      if(!$subuser || strlen($subuser = trim($subuser)) == 0){
         $form->setError($field, "* Username not entered<br>");
      }
      else{
         /* Make sure username is in database */
         $subuser = stripslashes($subuser);
         if(strlen($subuser) < 5 || strlen($subuser) > 30 ||
            !eregi("^([0-9a-z])+$", $subuser) ||
            (!$database->usernameTaken($subuser))){
            $form->setError($field, "* Username does not exist<br>");
         }
      }

      /* Errors exist, have user correct them */
      if($form->num_errors > 0){
         $_SESSION['value_array'] = $_POST;
         $_SESSION['error_array'] = $form->getErrorArray();
      }
      /* Generate new password and email it to user */
      else{
         /* Generate new password */
         $newpass = $session->generateRandStr(8);

         /* Get email of user */
         $usrinf = $database->getUserInfo($subuser);
         $email  = $usrinf['email'];

         /* Attempt to send the email with new password */
         if($mailer->sendNewPass($subuser,$email,$newpass)){
            /* Email sent, update database */
            $database->updateUserField($subuser, "password", md5($newpass));
            $_SESSION['forgotpass'] = true;
         }
         /* Email failure, do not change password */
         else{
            $_SESSION['forgotpass'] = false;
         }
      }

      header("Location: ".$session->referrer);
   }

    function procRating(){
        global $database;
        if(isset($_POST['title']) && isset($_POST['review'])){
        $retval = $database->addRating(8,$_POST['title'], $_POST['review'], 5);        }
            header("Location: user.php");
    }

};

/* Initialize process */
$process = new Process;

?>
