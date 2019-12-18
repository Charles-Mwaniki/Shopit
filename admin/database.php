<?php

include("constants.php");

class MySQLDB
{
   var $connection;         //The MySQL database connection
   var $num_members;        //Number of signed-up users
   /* Note: call getNumMembers() to access $num_members! */

   /* Class constructor */
   function MySQLDB(){
      /* Make connection to database */
      $this->connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS) or die(mysql_error());
      mysqli_select_db($this->connection,DB_NAME) or die(mysql_error());

   }

   function confirmUserPass($username, $password){
      /* Add slashes if necessary (for query) */
      if(!get_magic_quotes_gpc()) {
	      $username = addslashes($username);
      }

      /* Verify that user is in database */
      $q = "SELECT password FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection,$q);
      if(!$result || (mysqli_num_rows($result) < 1)){
         return 1; //Indicates username failure
      }

      /* Retrieve password from result, strip slashes */
      $dbarray = mysqli_fetch_array($result);
      $dbarray['password'] = stripslashes($dbarray['password']);
      $password = stripslashes($password);

      /* Validate that password is correct */
      if($password == $dbarray['password']){
         return 0; //Success! Username and password confirmed
      }
      else{
         return 2; //Indicates password failure
      }
   }

   function confirmUserID($username, $userid){
      /* Add slashes if necessary (for query) */
      if(!get_magic_quotes_gpc()) {
	      $username = addslashes($username);
      }

      /* Verify that user is in database */
      $q = "SELECT userid FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection,$q);
      if(!$result || (mysqli_num_rows($result) < 1)){
         return 1; //Indicates username failure
      }

      /* Retrieve userid from result, strip slashes */
      $dbarray = mysqli_fetch_array($result);
      $dbarray['userid'] = stripslashes($dbarray['userid']);
      $userid = stripslashes($userid);

      /* Validate that userid is correct */
      if($userid == $dbarray['userid']){
         return 0; //Success! Username and userid confirmed
      }
      else{
         return 2; //Indicates userid invalid
      }
   }


   function usernameTaken($username){
      if(!get_magic_quotes_gpc()){
         $username = addslashes($username);
      }
      $q = "SELECT username FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection,$q);
      return (mysqli_num_rows($result) > 0);
   }

   /**
    * addNewUser - Inserts the given (username, password, email)
    * info into the database. Appropriate user level is set.
    * Returns true on success, false otherwise.
    */
   function addNewUser($fname,$lname,$username, $password, $email,$phoneNo){
      /* If admin sign up, give admin user level */
      if(strcasecmp($username, ADMIN_NAME) == 0){
         $ulevel = ADMIN_LEVEL;
      }else{
         $ulevel = USER_LEVEL;
      }

      $q = "INSERT INTO ".TBL_USERS."(fname,lname,username,password,email,phoneNo,userlevel) VALUES ('$fname','$lname','$username','$password', '$email','$phoneNo',$ulevel)";
      return mysqli_query($this->connection,$q);
   }

   /**
    * updateUserField - Updates a field, specified by the field
    * parameter, in the user's row of the database.
    */
   function updateUserField($username, $field, $value){
      $q = "UPDATE ".TBL_USERS." SET ".$field." = '$value' WHERE username = '$username'";
      return mysqli_query($this->connection,$q);
   }

   /**
    * getUserInfo - Returns the result array from a mysql
    * query asking for all information stored regarding
    * the given username. If query fails, NULL is returned.
    */
   function getUserInfo($username){
      $q = "SELECT * FROM ".TBL_USERS." WHERE username = '$username'";
      $result = mysqli_query($this->connection,$q);
      /* Error occurred, return given name by default */
      if(!$result || (mysqli_num_rows($result) < 1)){
         return NULL;
      }
      /* Return result array */
      $dbarray = mysqli_fetch_array($result);
      return $dbarray;
   }

   function getUserRating(){
      $q = "SELECT * FROM  ".TBL_RATING." INNER JOIN ".TBL_USERS." on ".TBL_RATING.".usrId= ".TBL_USERS.".Id";
      $result = mysqli_query($this->connection,$q);
    if(!$result || (mysqli_num_rows($result) < 1)){
       return NULL;
    }
    $thisarray=array();
    while($dbarray = mysqli_fetch_array($result)){
      $thisarray[]=$dbarray;
    }
    return $thisarray;
    }

function getAllItems($n){
  if($n>0){
    $q="SELECT * FROM ".TBL_ITEMS." INNER JOIN ".TBL_IMAGES." on ".TBL_ITEMS.".itemId= ".TBL_IMAGES.".itemId ORDER BY rand() LIMIT ".$n." ";
  }else if($n==0){
    $q="SELECT * FROM ".TBL_ITEMS." INNER JOIN ".TBL_IMAGES." on ".TBL_ITEMS.".itemId= ".TBL_IMAGES.".itemId ";
  }
  $result = mysqli_query($this->connection,$q);
if(!$result || (mysqli_num_rows($result) < 1)){
   return NULL;
}
$thisarray=array();
while($dbarray = mysqli_fetch_array($result)){
  $thisarray[]=$dbarray;
}
return $thisarray;
}


function getItemInfo($itemId){
$q="SELECT * FROM ".TBL_ITEMS." INNER JOIN ".TBL_IMAGES." on ".TBL_ITEMS.".itemId= ".TBL_IMAGES.".itemId WHERE ".TBL_ITEMS.".itemId=".$itemId;
  $result = mysqli_query($this->connection,$q);
if(!$result || (mysqli_num_rows($result) < 1)){
   return NULL;
}
$thisarray=array();
while($dbarray = mysqli_fetch_array($result)){
  $thisarray[]=$dbarray;
}
return $thisarray;
}

function addItem($itemname, $description, $price,$qty){
  $q = "INSERT INTO ".TBL_ITEMS."(itemname, description, price,instock) VALUES ('$itemname','$description', $price, $qty)";
  return mysqli_query($this->connection,$q);
}

function addRating($item,$title, $review, $stars){
  $q = "INSERT INTO ".TBL_RATING."(title, review) VALUES ('$title','$review')";
  return mysqli_query($this->connection,$q);
}

function addImage($itemname,$m_url, $s_url){
  $q = "INSERT INTO ".TBL_IMAGES."(itemId,m_url,s_url)
   VALUES ((SELECT itemId FROM items WHERE itemname = '$itemname'),'$m_url','$s_url')";
  return mysqli_query($this->connection,$q);
}

function address($id,$city,$street, $hseno){
  $q = "INSERT INTO address(userId,city,street,hseno) VALUES ($id,'$city','$street', $hseno)";
  return mysqli_query($this->connection,$q);
}

function addToWishlist($itemid,$userid,$amount){
  $q = "INSERT INTO ".TBL_WSHLIST."(itemId,usrId,amount) VALUES($itemid,$userid,$amount)";
  return mysqli_query($this->connection,$q);
}

function getWishlist(){
   $q="SELECT * FROM ".TBL_WSHLIST." JOIN ".TBL_ITEMS." ON ".TBL_WSHLIST.".itemId= ".TBL_ITEMS.".itemId
   JOIN ".TBL_IMAGES." ON ".TBL_ITEMS.".itemId= ".TBL_IMAGES.".itemId
   JOIN ".TBL_USERS." ON ".TBL_WSHLIST.".usrId= ".TBL_USERS.".Id";
     $result = mysqli_query($this->connection,$q);
if(!$result || (mysqli_num_rows($result) < 1)){
   return NULL;
}
$thisarray=array();
while($dbarray = mysqli_fetch_array($result)){
  $thisarray[]=$dbarray;
}
return $thisarray;
}

   function removeWish($id){
      $q = "DELETE FROM ".TBL_WSHLIST." WHERE itemId = '$id'";
     return mysqli_query($this->connection,$q);
   }

   function removeOrder($id){
     $d="select orderId,quantity from ".TBL_ORDERITEMS." where itemId='$id'";
     $result=mysqli_query($this->connection,$d);
     $res=mysqli_fetch_array($result);
     $r=$res['orderId'];
    $q = "DELETE FROM ".TBL_ORDERITEMS." WHERE itemId ='$id'";
    mysqli_query($this->connection,$q);
           $f = "UPDATE ".TBL_ORDER." SET cancel = 1 WHERE id = '$r'";
     return mysqli_query($this->connection,$f);
   }

   function getWish($id){
      $q = "SELECT amount FROM ".TBL_WSHLIST." WHERE itemId = '$id'";
      $result = mysqli_query($this->connection,$q);
      /* Error occurred, return given name by default */
      if(!$result || (mysqli_num_rows($result) < 1)){
         return 0;
      }
      /* Return result array */
      $dbarray = mysqli_fetch_array($result);
      return $dbarray;
   }
   function getAddress($id){
      $q = "SELECT * FROM address WHERE userId = '$id'";
      $result = mysqli_query($this->connection,$q);
      /* Error occurred, return given name by default */
      if(!$result || (mysqli_num_rows($result) < 1)){
         return NULL;
      }
      /* Return result array */
      $dbarray = mysqli_fetch_array($result);
      return $dbarray;
   }

   function getMpesa($id){
      $q = "SELECT * FROM ".TBL_MPESA." WHERE phoneNumber = '$id'";
      $result = mysqli_query($this->connection,$q);
      /* Error occurred, return given name by default */
      if(!$result || (mysqli_num_rows($result) < 1)){
         return 0;
      }
      /* Return result array */
      $dbarray = mysqli_fetch_array($result);
      return $dbarray;
   }
// $q = "INSERT INTO ".TBL_MPESA."(resultCode,resultDesc,merchantRequestID,checkoutRequestID,amount,mpesaReceiptNumber,balance,transactionDate,phoneNumber) VALUES ('$resultCode','$resultDesc','$merchantRequestID','$checkoutRequestID','$amount','$mpesaReceiptNumber','$balance','$transactionDate','$phoneNumber')";

function payWithMpesa($s,$resultCode,$resultDesc,$merchantRequestID,$checkoutRequestID,$amount,$mpesaReceiptNumber,$balance,$transactionDate,$phoneNumber){
 $q = "INSERT INTO ".TBL_MPESA."(resultCode,resultDesc,merchantRequestID,checkoutRequestID,amount,mpesaReceiptNumber,balance,transactionDate,phoneNumber) VALUES ('$resultCode','$resultDesc','$merchantRequestID','$checkoutRequestID','$amount','$mpesaReceiptNumber','$balance','$transactionDate','$phoneNumber')";
 mysqli_query($this->connection,$q);
 $tid=mysqli_insert_id($this->connection);
    $f = "UPDATE ".TBL_ORDER." SET mpesa = $tid WHERE id = $s";
     mysqli_query($this->connection,$f);
     //unset($_SESSION['orderid']);
  return 0;

}

function addOrder($usr,$itemarray, $amnt){
  $q = "INSERT INTO ".TBL_ORDER."(usrId,amount) VALUES($usr,$amnt)";
mysqli_query($this->connection,$q);
$id=mysqli_insert_id($this->connection);
  foreach ($itemarray as $key) {
 $s = "INSERT INTO ".TBL_ORDERITEMS."(orderId,itemId,quantity) VALUES('$id',$key[0],$key[1])";
mysqli_query($this->connection,$s);
  }
  return mysqli_insert_id($this->connection);
}

function updateOrders($id, $mpesa){
   $q = "UPDATE ".TBL_ORDER." SET mpesa = '$mpesa' WHERE id = '$id'";
   return mysqli_query($this->connection,$q);
}

function updateStock($itemarray){
  global $database;
  foreach ($itemarray as $key) {
    $rows=$database->getItemInfo($key[0]);
    foreach($rows as $row){
        $rem=$row['instock'];
    }
    if($rem>$key[1]){
        $item=$rem-$key[1];
        $q = "UPDATE ".TBL_ITEMS." SET instock = $item WHERE itemId = $key[0]";
    }
 }
   return mysqli_query($this->connection,$q);
}


function getOrder(){
  $q="SELECT * FROM ".TBL_ORDER." JOIN ".TBL_ITEMS." ON ".TBL_ORDER.".itemId= ".TBL_ITEMS.".itemId
  JOIN ".TBL_IMAGES." ON ".TBL_ITEMS.".itemId= ".TBL_IMAGES.".itemId
  JOIN ".TBL_USERS." ON ".TBL_ORDER.".usrId= ".TBL_USERS.".Id
  JOIN ".TBL_MPESA." ON ".TBL_USERS.".phoneNo= ".TBL_MPESA.".phoneNumber
  ";
   $result = mysqli_query($this->connection,$q);
 if(!$result || (mysqli_num_rows($result) < 1)){
    return NULL;
 }
 $thisarray=array();
 while($dbarray = mysqli_fetch_array($result)){
   $thisarray[]=$dbarray;
 }
 return $thisarray;
 }

 function getuserOrder($id){
   $q="SELECT * from orders
   inner join orderItems on orders.id=orderItems.orderId
   left join items on orderItems.itemId=items.itemId
   left join users on orders.usrId=users.Id
   left join images on items.itemId=images.itemId
   left join mpesa on orders.mpesa=mpesa.id
   where users.Id=$id
   and orders.cancel=0
   ";
  $result = mysqli_query($this->connection,$q);
  if(!$result || (mysqli_num_rows($result) < 1)){
     return NULL;
  }
  $thisarray=array();
  while($dbarray = mysqli_fetch_array($result)){
    $thisarray[]=$dbarray;
  }
  return $thisarray;
  }
   /**
    * query - Performs the given query on the database and
    * returns the result, which may be false, true or a
    * resource identifier.
    */
   function query($query){
      return mysqli_query($this->connection,$query);
   }
};

/* Create database connection */
$database = new MySQLDB;

?>
