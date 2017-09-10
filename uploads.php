<?php

include('connect.php');
session_start();
$emp_no=$_SESSION['emp_no'];
$uid=$_SESSION['uid'];
$url=$_POST['url'];
if(isset($_FILES['image'])){
  $file_name = $_FILES["image"]['name'];
  $file_size = $_FILES["image"]["size"];
  $file_tmp  = $_FILES["image"]['tmp_name'];
  $file_type = $_FILES["image"]['type'];
  $file_ext=strtolower(end(explode('.',$_FILES["image"]['name'])));
  $extensions= array("jpeg","jpg","png");

  $errors = array();

      if($_FILES['image']['error'] === UPLOAD_ERR_OK)
      {
                if(in_array($file_ext,$extensions)=== false){
                    $errors[] ="extension not allowed";
                }
                if($file_size > 2097152) {
                    $errors[] ='File size must be less than 2MB';
                }
      }
        else
        {
            $errors[] ="File size must be less than 2MB";
        }
    $error= count($errors);


    if ($count==0)
    {
              $profile_avatar = $uid . "." . $file_ext;
              $sql1 = "UPDATE members set avatar = '$profile_avatar',photo= '1' WHERE uid='$uid' ";

                if($con->query($sql1)) {
                    move_uploaded_file($file_tmp, "./upload/" . $profile_avatar);

                   if ($url==1) {
                     header("Location: photo.php?p=2");
                   }
                   if ($url==2) {
                     header("Location: photo.php?p=3");
                   }
                   if ($url==3) {
                     header("Location: photo.php?p=4");
                   }
                   if ($url==4) {
                     header("Location: photo.php?");
                   }
                } else {
                    echo $con->error;
                }
    }
}else {
  header("Location: photo.php");
}

      // $file_name = $_FILES["profile_avatar"]['name'];
      // $file_size = $_FILES["profile_avatar"]["size"];
      // $file_tmp  = $_FILES["profile_avatar"]['tmp_name'];
      // $file_type = $_FILES["profile_avatar"]['type'];
      // $file_ext=strtolower(end(explode('.',$_FILES["profile_avatar"]['name'])));
      // $extensions= array("jpeg","jpg","png");
      //
      // if($_FILES['profile_avatar']['error'] === UPLOAD_ERR_OK) {
      //       if(in_array($file_ext,$extensions)=== false){
      //           $errors[] ="extension not allowed";
      //       }
      //       if($file_size > 2097152) {
      //           $errors[] ='File size must be less than 2MB';
      //       }
      // } else {
      //   $errors[] ="File size must be less than 2MB";
      // }
      //
      //
      // $count=count($errors);
      //
      // foreach($errors as $e){
      //             echo $e . "<br />";
      //         }

// if(isset($_FILES['image'])){
//     $file_name = $_FILES['image']['name'];
//     $file_size =$_FILES['image']['size'];
//     $file_tmp =$_FILES['image']['tmp_name'];
//     $file_type=$_FILES['image']['type'];
//     $file_ext=strtolower(end(explode('.',$_FILES["image"]['name'])));
//     $extensions= array("jpeg","jpg","png");
//
//     $profile_avatar = $uid . "." . $file_ext;
//
//     $sql="UPDATE members SET avatar='$profile_avatar' WHERE uid='$uid'";
//     $con->query($sql);
//     move_uploaded_file($file_tmp, "./upload/" . $profile_avatar);
// }

?>
