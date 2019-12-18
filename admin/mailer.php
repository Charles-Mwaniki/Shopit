<?php


class Mailer
{

   function sendWelcome($user, $email, $pass){
      $from = "From: ".EMAIL_FROM_NAME." <".EMAIL_FROM_ADDR.">";
      $subject = "Renovatio.inc - Welcome,".$user;
      $body = $user.",\n\n"
             ."Welcome! You've just registered at Shopit online shopping website			 "
             ."with the following information:\n\n"
             ."Username: ".$user."\n"
             ."Password: ".$pass."\n\n"
             ."If you ever lose or forget your password, a new "
             ."password will be generated for you and sent to this "
             ."email address, if you would like to change your "
             ."email address you can do so by going to the "
             ."My Account page after signing in.\n\n"
             ."Renovatio.inc Developers  building the future ,  on a terminal";

      return mail($email,$subject,$body,$from);
   }


   function sendNewPass($user, $email, $pass){
      $from = "From: ".EMAIL_FROM_NAME." <".EMAIL_FROM_ADDR.">";
      $subject = "Renovatio.inc - Your new password";
      $body = $user.",\n\n"
             ."We've generated a new password for you at your "
             ."request, you can use this new password with your "
             ."username to log in to SHOPIT.website \n\n"
             ."Username: ".$user."\n"
             ."New Password: ".$pass."\n\n"
             ."It is recommended that you change your password "
             ."to something that is easier to remember, which "
             ."can be done by going to the My Account page "
             ."after signing in.\n\n"
             ." Renovatio.inc Developers   building the future ,  on a terminal";

      return mail($email,$subject,$body,$from);
   }



     function sendNeworder($user, $email,$name, $price, $source){
        $from = "From: ".EMAIL_FROM_NAME." <".EMAIL_FROM_ADDR.">";
      $subject = "Renovatio.inc - New order received";
    $body = $user.",\n\n"
        ."Hello, you have just received  a new "
         ."purchase order. Login in to your account"
         ." in order to view the details\n\n"
        .$name."      ".$price."    ".$source."\n\n"
        ." Renovatio.inc Developers   building the future ,  on a terminal";
        return mail($email,$subject,$body,$from);
     }


         function sendNewpurchase($user, $email,$name, $price){
        $from = "From: ".EMAIL_FROM_NAME." <".EMAIL_FROM_ADDR.">";
      $subject = "Renovatio.inc - Your order has been received";
    $body = $user.",\n\n"
        ."Hello, we have just received  your new "
         ."purchase order. Login in to your account"
         ." in order to view the details and track its delivery.\n\n"
        .$name."      ".$price."\n\n"
        ."Thanks for shopping with us."
        ." Renovatio.inc Developers   building the future ,  on a terminal";
        return mail($email,$subject,$body,$from);
     }


    //function sendSubscription()
};



/* Initialize mailer object */
$mailer = new Mailer;

?>
