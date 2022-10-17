<?php
session_start();
require_once("includes/config.php");
if(isset($_POST["article"])){
  $article_name=$_POST['article-name'];
  $description=$_POST['description'];
  $photo=$_FILES['photo']['name'];
  $tmpname=$_FILES['photo']['tmp_name'];
  $status=$_POST['status'] == true ? '1':'0';
move_uploaded_file($tmpname,'uploads/'.$photo);
$query="insert into article(article_name,description,photo,status)values('$article_name','$description','$photo','$status')";
$result=mysqli_query($con,$query);
if($result){
    echo "ho gya";
}


}











?>