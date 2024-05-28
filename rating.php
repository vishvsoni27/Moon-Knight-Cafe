<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Star Rating Form</title>
    <link rel="stylesheet" href="css/rating.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>

  <?php include 'components/user_header.php'; ?>

    <div class="container">
      <div class="post">
        <div class="text">Thanks for rating us!</div>
        <div class="edit">EDIT</div>
      </div>
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        <form action="#">
          <header></header>
          <div class="textarea">
            <textarea name= "ms" cols="30" placeholder="Describe your experience.."></textarea>
          </div>
          <div class="bt">
            <button type="submit" name = "send">Post</button>
            <!-- <input type="submit" value="Post" name="send" class="bt"> -->
          </div>
        </form>
      </div>
    </div>
    

    <script>
      const bt = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-widget");
      const editBtn = document.querySelector(".edit");
      bt.onclick = ()=>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget.style.display = "block";
          post.style.display = "none";
        }
        return false;
      }
    </script>

  </body>
</html>