<?php
include('admin/session.php');
global $database;

$itemname=addslashes($_POST['itemname']);
 $description=addslashes($_POST['description']);
  $price=$_POST['price'];
$qty=$_POST['qty'];
############ Configuration ##############
$thumb_square_size 		= 100; //Thumbnails will be cropped to 200x200 pixels
$max_image_size 		= 400; //Maximum image size (height and width)
$max_width                      =284;
$large_folder                   ='images/uploads/large/';
$destination_foldersmall	='images/uploads/small/'; //upload directory ends with / (slash)
$jpeg_quality 			= 100; //jpeg quality
##########################################

//continue only if $_POST is set and it is a Ajax request
if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
 // check $_FILES['ImageFile'] not empty
   $userImage_array=  array($_FILES['userImage'] );
   foreach($userImage_array as $userImage){

   if(!isset($userImage) || !is_uploaded_file($userImage['tmp_name'])){
    die('Image file is Missing!'); // output error when above checks fail.
 }

 //uploaded file info we need to proceed
 $image_name = addslashes($userImage['name']); //file name
 $image_size =$userImage['size']; //file size
 $image_temp = $userImage['tmp_name']; //file temp

 $image_size_info 	= getimagesize($image_temp); //get image size

 if($image_size_info){
   $image_width 		= $image_size_info[0]; //image width
   $image_height 		= $image_size_info[1]; //image height
   $image_type 		= $image_size_info['mime']; //image type
 }else{
   die("Make sure image file is valid!");
 }

 ###
 //switch statement below checks allowed image type
 //as well as creates new image from given file
 switch($image_type){
   case 'image/png':
     $image_res =  imagecreatefrompng($image_temp); break;
   case 'image/gif':
     $image_res =  imagecreatefromgif($image_temp); break;
   case 'image/jpeg': case 'image/jpeg':
     $image_res = imagecreatefromjpeg($image_temp); break;
   default:
     $image_res = false;
 }

 if($image_res){
   //Get file extension and name to construct new file name
   $image_info = pathinfo($image_name);
   $image_extension = strtolower($image_info["extension"]); //image extension
   $image_name_only = strtolower($image_info["filename"]);//file name only, no extension

   //create a random name for new image (Eg: fileName_293749.jpg) ;
   $new_file_name = $image_name_only. '_' .  rand(0, 9999999999) . '.' . $image_extension;

   //folder path to save resized images and thumbnails
   $image_save_folder 	= $destination_foldersmall . $new_file_name;
   $image_large_folder=$large_folder . $new_file_name;
 norm($image_res, $image_large_folder, $image_type, $image_width, $image_height, $jpeg_quality);

   //call normal_resize_image() function to proportionally resize image
   normal_resize_image($image_res, $image_save_folder, $image_type, $max_image_size, $max_width, $image_width, $image_height, $jpeg_quality);
   imagedestroy($image_res); //freeup memory
 }
       #############################
        $large_img[] = $image_large_folder;
        $small_img[] = $image_save_folder;
       #############################
$database->addItem($itemname, $description, $price,$qty);
$database->addImage($itemname,$large_img[0], $small_img[0]);
}
 header("Location: ".$session->referrer);
}

function norm($source, $destination, $image_type, $image_width, $image_height, $quality){
       $new_width		=$image_width;
       $new_height		= $image_height;

       $new_canvas		= imagecreatetruecolor( $new_width, $new_height ); //Create a new true color image
       //Copy and resize part of an image with resampling
       if(imagecopyresampled($new_canvas, $source, 0, 0, 0, 0, $new_width, $new_height, $image_width, $image_height)){
               save_image($new_canvas, $destination, $image_type, $quality); //save resized image
       }
return true;
}

#####  This function will proportionally resize image #####
function normal_resize_image($source, $destination, $image_type, $max_size, $max_width , $image_width, $image_height, $quality){

 if($image_width <= 0 || $image_height <= 0){return false;} //return false if nothing to resize

 //do not resize if image is smaller than max size
 if($image_width <= $max_width && $image_height <= $max_size){
   if(save_image($source, $destination, $image_type, $quality)){
     return true;
   }
 }

 //Construct a proportional size of new image
 $image_scale	= min($max_width/$image_width, $max_size/$image_height);
 $new_width		= ceil($image_scale * $image_width);
 $new_height		= ceil($image_scale * $image_height);

 $new_canvas		= imagecreatetruecolor( $new_width, $new_height ); //Create a new true color image

 //Copy and resize part of an image with resampling
 if(imagecopyresampled($new_canvas, $source, 0, 0, 0, 0, $new_width, $new_height, $image_width, $image_height)){
   save_image($new_canvas, $destination, $image_type, $quality); //save resized image
 }

 return true;
}

##### Saves image resource to file #####
function save_image($source, $destination, $image_type, $quality){
 switch(strtolower($image_type)){//determine mime type
   case 'image/png':
     imagepng($source, $destination); return true; //save png file
     break;
   case 'image/gif':
     imagegif($source, $destination); return true; //save gif file
     break;
   case 'image/jpeg': case 'image/jpeg':
     imagejpeg($source, $destination, $quality); return true; //save jpeg file
     break;
     case 'image/jpg': case 'image/jpg':
       imagejpeg($source, $destination, $quality); return true; //save jpeg file
       break;
   default: return false;
 }
}



       ?>
