<?php
include_once('dbconnect.php');
$con= new db();
$wherequery = $_GET['id'];
$result=$con->fb_post($wherequery);
while($row=mysqli_fetch_array($result)){
    header("Location: http://www.facebook.com/sharer.php?u=http://studews.com/beta/internal_work/fb_pagepost/hotel_details.php?id=".$row['id']);
?>

<html lang="en">
 <head>
  <title>Document</title>
  <meta name="og:type" content="product">
  <meta name="og:title" content="<?php echo $row['card_title']?>">
  <meta name="og:description" content="<?php echo $row['card_desc']?>">
  <meta name="og:image:url" content="<?php echo $row['card_img']?>">
  <meta name="og:site_name" content="Tech dew">
  <meta name="og:url" content="http://studews.com/beta/internal_work/fb_pagepost/hotel_details.php?id=<?php echo $row['id'] ?>">
  </head>
 <body>
 </body>
</html>

<?php 
    
} ?>