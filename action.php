<?php
session_start();
include("database.php");
if (isset($_POST['registration']))

{
$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);
/// form ko



  $query="insert into userinfo (id,username,email,password) values
(NULL , '$username'  , '$email' ,'$password')";
$conn->query($query);
header("location:login.php");



}
//login code
if(isset($_POST['login'])) {
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $query="select * from userinfo where username='$username' and password='$password'" ;
   $result= $conn->query($query);
   //fetches data from database;
   $userdata= $result ->fetch_assoc();
     $count = $result->num_rows;
     if($count==0) {
        echo"Invalid login details";
        //login detail fail
     }
     else{
        $_SESSION['ticket']='ok';
        $_SESSION['userid']= $userdata['id'];

     }
    }



    if(isset($_POST['addclothes'])) {

      $type=$_POST['typeofclothes'];
      $title=$_POST['title'];
      $price=$_POST['price'];
      $size=$_POST['size'];
      $material=$_POST['material'];
      $pimage=$_FILES['picture']['name']; //this is actual image name
       $ext=pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
      $random=rand(1,10000000);
      $newpicname=$random."_clothing." .$ext;
      if($ext=='jpg' || $ext=='png' || $ext=='jpeg' || $ext=="PNG")
      {
      
      
      
      move_uploaded_file($_FILES['picture']['tmp_name'], "uploads/$newpicname");
      
      $query="insert into clothes (id,type,title,price,size,material,picture) values
      (NULL , '$type' , '$title' , '$price' , '$size', '$material','$newpicname')";
      $conn->query($query);
      header('location:newdisplay.php');
      }
      else{
        echo '<script>alert("invalid file format.")</script>';
      }
      }
      
      if (isset($_POST['adddogs'])) {
        $newpicname=$_POST['name'];

        $id=$_POST['id'];
        $q="add dogs set type='$type' , title='$title' , price='$price' , size='$size' , material= '$material' where  id='$id'";
      $conn -> query($q);
      header('location:newdisplay.php');
      
      }
      if(isset($_GET['clothesid'])){
      $clothesid=$_GET['clothesid'];
      $query="delete from clothes where id='$clothesid'";
      $conn->query($query);
      header('location:newdisplay.php');
      }
      //update picture
      
      if (isset($_POST['comment']))
      {
        $clothesid=$_POST['id'];
        if(!isset($_POST['rating'])){
          $rating = 0;
        }
        else{
        $rating= $_POST['rating'];
        $userid=$_POST['cosid'];
        }
      $usercomment=$_POST['usercomment'];
      $username=$_POST['username'];
       $query="insert into comment (id,rating,usercomment,userid,username,clothesid) values
      (NULL , '$rating' , '$usercomment','$userid','$username','$clothesid')";
      $conn->query($query);
      header('location:newdisplay.php');
      }
      
      ?>
      Write to Bipaswi Poudyal
      












