
<?php
include_once('dbconnect.php');
$con= new db();

?>

<!doctype html>
<html lang="en">
 <head>
 
  <meta name="description" content="This website is for sale!  randomurl.com is your first and best source for all of the information you’re looking for. From general topics to more of what you would expect to find here, randomurl.com has it all. We hope you find what you are searching for!">
  
<!-- twitter card -->
 
<!-- twitter card-->
 
 
  <?php 
    $wherequery = $_GET['id'];
    if($wherequery){
    $result=$con->fb_post($wherequery);
    while($row=mysqli_fetch_array($result)){
    ?>
  
  <meta name="og:type" content="website">
  <meta name="og:title" content="<?php echo $row['card_title']?>">
  <meta name="og:description" content="<?php echo $row['card_desc']?>">
  <meta name="og:image:url" content="<?php echo $row['card_img']?>">
  <meta name="og:site_name" content="Tech dew">
  <meta name="og:url" content="http://studews.com/beta/internal_work/fb_pagepost/">
 <!-- twitter card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@Praveenkumared6">
<meta name="twitter:title" content="<?php echo $row['card_title']?>">
<meta name="twitter:description" content="<?php echo $row['card_desc']?>">
<meta name="twitter:image" content="<?php echo $row['card_img']?>">

<!-- player -->
<meta name="twitter:player" content="http://studews.com/beta/internal_work/fb_pagepost/index.php"/ >
<meta name="twitter:player:width" content="480" />
<meta name="twitter:player:height" content="480" />
<meta name="twitter:player:stream" content="https://www.youtube.com/watch?v=C0DPdy98e4c" />
<meta name="twitter:player:stream:content_type" content="video/mp4; codecs=&quot;avc1.42E01E1, mp4a.40.2&quot;" />
        
<!-- player -->

 <!-- twitter card-->
 <!-- likedin  -->



<!-- likedin  -->

  <?php }
    }
  ?>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111600857-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-111600857-1');

</script> </head>
 <body>
	<header>
		<nav class="navbar navbar-toggleable-md nav-bg pt-0 pb-0 fixed-top">
		 <div class="container">
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>
			  <a class="navbar-brand" href="#">
				  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 1000 1000" width="100%" height="100%" xml:space="preserve">
					<g>
						<path fill="none" d="M237.3,428.4c-51.4,63.4-71.6,125.3-47.7,168.7c25.8,46.8,97.2,61.6,187.4,46.8
							C326.4,575.5,274.6,527,249.5,461.7C244.8,450.9,240.7,439.8,237.3,428.4z"/>
						<path fill="#CF7046" d="M522.4,633.9c-0.9,0.4-1.8,0.8-2.7,1.2C520.6,634.6,521.5,634.3,522.4,633.9z"/>
						<path fill="#CF7046" d="M698.3,562.9c-3.9,5.3-7.8,10.5-11.9,15.6C690.5,573.3,694.4,568.1,698.3,562.9z"/>
						<path fill="#CF7046" d="M542.1,625c-1.2,0.6-2.4,1.1-3.6,1.7C539.6,626.1,540.8,625.5,542.1,625z"/>
						<path fill="#CF7046" d="M502.7,642.2c-0.6,0.2-1.2,0.5-1.7,0.7C501.6,642.6,502.1,642.4,502.7,642.2z"/>
						<path fill="#CF7046" d="M711.3,544.4c-3.6,5.4-7.3,10.6-11.1,15.8C704,555.1,707.7,549.8,711.3,544.4z"/>
						<path fill="#CF7046" d="M733.6,506.5c-6.8,13.4-14.2,25.8-22,37.5C719.4,532.3,726.8,519.8,733.6,506.5z"/>
						<path fill="#CF7046" d="M399.9,676.5C399.9,676.5,399.9,676.5,399.9,676.5c0.1,0,0.3-0.1,0.4-0.1
							C400.1,676.4,400,676.4,399.9,676.5z"/>
						<path fill="#CF7046" d="M402.5,675.8c13.9-3.1,28-7.3,42.3-12.4c0,0,0,0,0,0c-14.6,4.7-29,9-43.1,12.6
							C402,675.9,402.2,675.9,402.5,675.8z"/>
						<path fill="#CF7046" d="M730.4,508.7c1.2-0.9,2.4-1.9,3.5-2.8c0,0,0,0,0,0C732.7,506.8,731.5,507.7,730.4,508.7z"/>
						<path fill="#CF7046" d="M483.2,649.9c-0.3,0.1-0.6,0.2-0.9,0.3C482.5,650.1,482.8,650,483.2,649.9z"/>
						<path fill="#CF7046" d="M463.8,657c-0.1,0-0.2,0.1-0.3,0.1C463.6,657.1,463.7,657,463.8,657z"/>
						<path fill="#CF7046" d="M419.3,708.1c66.3,115.1,87.6,231.5,87.6,231.5C535.8,729.9,619.6,663,686.4,578.5
							c-26.6,18.7-55.3,36.7-85.8,53.5C538.7,666.2,476.7,691.7,419.3,708.1z"/>
						<path class="logo_bottom_arc" d="M237.3,428.4c3.4,11.4,7.5,22.6,12.2,33.3C274.6,527,326.4,575.5,377,643.9
							c65.8-10.8,141.5-37.3,216.8-78.9c68.9-38,127.3-83.1,170.5-128.7c8.9-27.1,13.7-55.9,13.7-86c0-152.4-123.6-276-276-276
							c-152.4,0-276,123.6-276,276c0,27.1,4,53.2,11.2,77.9c0.3-0.3,0.6-0.6,0.9-1C237.9,427.6,237.6,428,237.3,428.4z M495.9,552.7
							c-108.4,0-196.3-87.9-196.3-196.3c0-108.4,87.9-196.3,196.3-196.3c108.4,0,196.3,87.9,196.3,196.3
							C692.2,464.8,604.3,552.7,495.9,552.7z"/>
						<path fill="#CF7046" d="M654.4,563.2c-1.3,0.8-2.6,1.6-3.9,2.4C651.8,564.8,653.2,564,654.4,563.2z"/>
						<path fill="#CF7046" d="M687.9,540.7c-1.4,1-2.8,1.9-4.1,2.8C685.1,542.6,686.5,541.6,687.9,540.7z"/>
						<path fill="#CF7046" d="M637,574.1c-1.1,0.6-2.2,1.3-3.2,1.9C634.8,575.4,635.9,574.8,637,574.1z"/>
						<path fill="#CF7046" d="M581.2,605.6c-1.5,0.8-3,1.5-4.4,2.3C578.3,607.1,579.7,606.4,581.2,605.6z"/>
						<path fill="#CF7046" d="M561.7,615.6c-1.5,0.7-2.9,1.4-4.4,2.1C558.8,617,560.2,616.3,561.7,615.6z"/>
						<path fill="#CF7046" d="M719.2,517.5c-1.2,0.9-2.4,1.8-3.6,2.7C716.8,519.3,718,518.4,719.2,517.5z"/>
						<path fill="#CF7046" d="M703.8,529.2c-1.2,0.9-2.5,1.8-3.7,2.7C701.3,531,702.6,530.1,703.8,529.2z"/>
						<path fill="#CF7046" d="M671.4,552c-1.4,1-2.9,1.9-4.3,2.8C668.5,553.9,670,553,671.4,552z"/>
						<path fill="#FFFFFF" d="M495.9,160.2c-108.4,0-196.3,87.9-196.3,196.3c0,108.4,87.9,196.3,196.3,196.3
							c108.4,0,196.3-87.9,196.3-196.3C692.2,248,604.3,160.2,495.9,160.2z M460,366v24h-8v-24H460z M452,343v-24h8v24H452z M554,382v24
							h-16v-24H554z M538,359v-24h16v24H538z M632,343v23h-7v-23H632z M625,327v-23h7v23H625z M632,390v16h-7v-16H632z M381,390h-7v-24h7
							V390z M658.5,413H648V296h-39v117h-31v-94h-55v87h-40V304h-54v94h-32v-55h-47v55h-21.6c-2.8-16-4.3-26.7-4.3-39.8
							c0-94.8,76.9-172.6,171.7-172.6c94.8,0,171.7,77.1,171.7,172C667.7,376.9,664.4,398,658.5,413z"/>
						<path class="logo_build_bg"
						d="M495.9,184.7c-94.9,0-171.7,78.7-171.7,173.5c0,13.1,1.5,23.8,4.3,39.8H350v-55h47v55h32v-94h54v102h40v-87
							h55v94h31V296h39v117h10.5c5.9-15,9.1-36.6,9.1-55.9C667.7,262.3,590.8,184.7,495.9,184.7z"/>
						<path opacity="0.44" fill="#7B6248" d="M711.6,544c-0.1,0.1-0.2,0.2-0.3,0.4C711.4,544.3,711.5,544.2,711.6,544z"/>
						<path opacity="0.44" fill="#7B6248" d="M686.4,578.5C686.4,578.5,686.4,578.5,686.4,578.5C686.4,578.5,686.4,578.5,686.4,578.5
							C686.4,578.5,686.4,578.5,686.4,578.5z"/>
						<path opacity="0.44" fill="#7B6248" d="M399.8,680c6.9,8,13.2,19.3,21.2,29.9c0,0,0,0.9,0,0.9C413,700.3,406.7,688,399.8,680
							C399.9,680,399.8,680,399.8,680z"/>
						<path opacity="0.44" fill="#7B6248" d="M700.3,560.2c-0.6,0.9-1.3,1.8-1.9,2.7C699,562,699.6,561.1,700.3,560.2z"/>
						<path opacity="0.44" fill="#7B6248" d="M733.9,505.8C733.9,505.9,733.9,505.9,733.9,505.8c-0.1,0.2-0.2,0.4-0.3,0.6
							C733.7,506.3,733.8,506.1,733.9,505.8z"/>
						<path fill="#CF7046" d="M719.2,517.5c-1.2,0.9-2.4,1.8-3.6,2.7c-3.9,3-7.8,6-11.8,8.9c-1.2,0.9-2.5,1.8-3.7,2.7
							c-4,2.9-8.1,5.9-12.2,8.8c-1.4,1-2.8,1.9-4.1,2.8c-4.1,2.8-8.2,5.7-12.3,8.5c-1.4,1-2.9,1.9-4.3,2.8c-4.2,2.8-8.4,5.6-12.7,8.3
							c-1.3,0.8-2.6,1.6-3.9,2.4c-4.5,2.8-9,5.7-13.6,8.5c-1.1,0.6-2.2,1.3-3.2,1.9c-10.8,6.5-21.8,12.9-33.1,19.2
							c-6.5,3.6-12.9,7-19.4,10.4c-1.5,0.8-3,1.5-4.4,2.3c-5,2.6-10.1,5.2-15.1,7.7c-1.5,0.7-2.9,1.4-4.4,2.1c-5.1,2.5-10.2,4.9-15.3,7.3
							c-1.2,0.6-2.4,1.1-3.6,1.7c-5.4,2.5-10.7,4.9-16,7.2c-0.9,0.4-1.8,0.8-2.7,1.2c-5.7,2.5-11.3,4.9-17,7.2c-0.6,0.2-1.2,0.5-1.7,0.7
							c-6,2.4-11.9,4.8-17.8,7c-0.3,0.1-0.6,0.2-0.9,0.3c-6.2,2.3-12.3,4.6-18.5,6.8c-0.1,0-0.2,0.1-0.3,0.1c-6.3,2.2-12.5,4.3-18.7,6.3
							c0,0,0,0,0,0c-14.3,5.1-28.4,9.3-42.3,12.4c-0.3,0.1-0.5,0.1-0.8,0.2c-0.5,0.1-1,0.2-1.4,0.4c-0.1,0-0.3,0.1-0.4,0.1
							c6.9,10.5,13.3,21,19.4,31.6c57.4-16.3,119.4-41.8,181.3-76c30.5-16.9,59.2-34.9,85.8-53.5c0,0,0,0,0,0c4-5.1,8-10.3,11.9-15.6
							c0.7-0.9,1.3-1.8,1.9-2.7c3.8-5.2,7.5-10.4,11.1-15.8c0.1-0.1,0.2-0.2,0.3-0.4c7.8-11.8,15.2-24.2,22-37.5c0.1-0.2,0.2-0.4,0.3-0.6
							c-1.2,0.9-2.4,1.9-3.5,2.8C726.7,511.6,723,514.6,719.2,517.5z"/>
						<path opacity="0.44" fill="#7B6248" d="M719.2,517.5c-1.2,0.9-2.4,1.8-3.6,2.7c-3.9,3-7.8,6-11.8,8.9c-1.2,0.9-2.5,1.8-3.7,2.7
							c-4,2.9-8.1,5.9-12.2,8.8c-1.4,1-2.8,1.9-4.1,2.8c-4.1,2.8-8.2,5.7-12.3,8.5c-1.4,1-2.9,1.9-4.3,2.8c-4.2,2.8-8.4,5.6-12.7,8.3
							c-1.3,0.8-2.6,1.6-3.9,2.4c-4.5,2.8-9,5.7-13.6,8.5c-1.1,0.6-2.2,1.3-3.2,1.9c-10.8,6.5-21.8,12.9-33.1,19.2
							c-6.5,3.6-12.9,7-19.4,10.4c-1.5,0.8-3,1.5-4.4,2.3c-5,2.6-10.1,5.2-15.1,7.7c-1.5,0.7-2.9,1.4-4.4,2.1c-5.1,2.5-10.2,4.9-15.3,7.3
							c-1.2,0.6-2.4,1.1-3.6,1.7c-5.4,2.5-10.7,4.9-16,7.2c-0.9,0.4-1.8,0.8-2.7,1.2c-5.7,2.5-11.3,4.9-17,7.2c-0.6,0.2-1.2,0.5-1.7,0.7
							c-6,2.4-11.9,4.8-17.8,7c-0.3,0.1-0.6,0.2-0.9,0.3c-6.2,2.3-12.3,4.6-18.5,6.8c-0.1,0-0.2,0.1-0.3,0.1c-6.3,2.2-12.5,4.3-18.7,6.3
							c0,0,0,0,0,0c-14.3,5.1-28.4,9.3-42.3,12.4c-0.3,0.1-0.5,0.1-0.8,0.2c-0.5,0.1-1,0.2-1.4,0.4c-0.1,0-0.3,0.1-0.4,0.1
							c6.9,10.5,13.3,21,19.4,31.6c57.4-16.3,119.4-41.8,181.3-76c30.5-16.9,59.2-34.9,85.8-53.5c0,0,0,0,0,0c4-5.1,8-10.3,11.9-15.6
							c0.7-0.9,1.3-1.8,1.9-2.7c3.8-5.2,7.5-10.4,11.1-15.8c0.1-0.1,0.2-0.2,0.3-0.4c7.8-11.8,15.2-24.2,22-37.5c0.1-0.2,0.2-0.4,0.3-0.6
							c-1.2,0.9-2.4,1.9-3.5,2.8C726.7,511.6,723,514.6,719.2,517.5z"/>
						<path class="logo_arc" d="M401.7,676c14.1-3.6,28.5-7.8,43.1-12.6c6.2-2,12.4-4.1,18.7-6.3c0.1,0,0.2-0.1,0.3-0.1
							c6.1-2.2,12.3-4.4,18.5-6.8c0.3-0.1,0.6-0.2,0.9-0.3c5.9-2.3,11.9-4.6,17.8-7c0.6-0.2,1.2-0.5,1.7-0.7c5.6-2.3,11.3-4.7,17-7.2
							c0.9-0.4,1.8-0.8,2.7-1.2c5.3-2.3,10.7-4.8,16-7.2c1.2-0.6,2.4-1.1,3.6-1.7c5.1-2.4,10.2-4.8,15.3-7.3c1.5-0.7,2.9-1.4,4.4-2.1
							c5-2.5,10.1-5.1,15.1-7.7c1.5-0.8,3-1.5,4.4-2.3c6.5-3.4,12.9-6.9,19.4-10.4c11.3-6.2,22.3-12.7,33.1-19.2c1.1-0.6,2.2-1.3,3.2-1.9
							c4.6-2.8,9.1-5.6,13.6-8.5c1.3-0.8,2.6-1.6,3.9-2.4c4.3-2.7,8.5-5.5,12.7-8.3c1.4-0.9,2.9-1.9,4.3-2.8c4.2-2.8,8.3-5.7,12.3-8.5
							c1.4-0.9,2.8-1.9,4.1-2.8c4.1-2.9,8.2-5.9,12.2-8.8c1.2-0.9,2.5-1.8,3.7-2.7c4-3,7.9-5.9,11.8-8.9c1.2-0.9,2.4-1.8,3.6-2.7
							c3.8-2.9,7.5-5.9,11.1-8.9c1.2-0.9,2.4-1.9,3.5-2.8C851,410.6,911.8,305,876.3,240.7c-21.8-39.5-76.1-56.5-147.9-52.5
							c51.4,3,90.2,20,107.8,51.8c27.4,49.7-3,123.7-71.9,196.3c-43.3,45.6-101.7,90.6-170.5,128.7c-75.3,41.6-151,68.1-216.8,78.9
							c-90.1,14.8-161.6,0-187.4-46.8c-23.9-43.4-3.7-105.3,47.7-168.7c0.3-0.4,0.6-0.7,0.9-1.1c-0.3,0.3-0.6,0.6-0.9,1
							c-77.3,79.3-112.4,159.1-83.5,211.5c30.9,56,127.3,66.8,246.1,36.7c0.1,0,0.3-0.1,0.4-0.1C400.7,676.3,401.2,676.1,401.7,676z"/>
						<rect x="374" y="366" fill="#00A8DE" width="7" height="24"/>
						<rect x="452" y="319" fill="#00A8DE" width="8" height="24"/>
						<rect x="452" y="366" fill="#00A8DE" width="8" height="24"/>
						<rect x="538" y="335" fill="#00A8DE" width="16" height="24"/>
						<rect x="538" y="382" fill="#00A8DE" width="16" height="24"/>
						<rect x="625" y="304" fill="#00A8DE" width="7" height="23"/>
						<rect x="625" y="343" fill="#00A8DE" width="7" height="23"/>
						<rect x="625" y="390" fill="#00A8DE" width="7" height="16"/>
					</g>
					</svg>

			  </a>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					<a class="nav-link text-uppercase" href="#">Home</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link text-uppercase" href="#">hotels</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link text-uppercase" href="#">flights</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link text-uppercase" href="#">vactions</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link text-uppercase" href="#">cars</a>
				  </li>
				</ul>
				<button type="button" class="btn btn-outline-warning btn-sm increase_font">A+</button>
				<button type="button" class="btn btn-outline-warning btn-sm ml-2 org_font">A</button>
				<button type="button" class="btn btn-outline-warning btn-sm ml-2 deincrease_font">A-</button>
				<select class="custom-select ml-2">
				  <option selected>select theme</option>
				  <option value="theme_1">Theme-1</option>
				  <option value="theme_2">Theme-2</option>
				  <option value="theme_3">Theme-3</option>
				  <option value="theme_4">Theme-4</option>
				</select>
			  </div>
		  </div>
		</nav>
	</header>
	<section class="main_section container">
		<div class="col-md-3 side_bar float-left">
			<div class="dash-navbar-left nb-visible">
				 <p class="nb-nav-title">Hotels Near</p>
				 <div class="search_container">
					<form method="POST">
					  <div class="form-group">
						<label for="exampleInputEmail1">Where do you want to go?</label>
						<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="country / city ">
					  </div>
					  <div class="row">
						<div class="col-md-6">
						 <label for="exampleInputEmail1">Check in Date</label>
						  <input type="text" class="form-control" placeholder="First name">
						</div>
						<div class="col-md-6">
						  <label for="exampleInputEmail1">Check out Date</label>
						  <input type="text" class="form-control" placeholder="Last name">
						</div>
					  </div>
					  <div class="row">
						 
					  </div>
					  <button type="submit" class="btn btn-outline-primary custom_btn btn-sm mt-4">Search</button>
					
				 </div>
				 <p class="nb-nav-title">Filter By</p>
				 <div class="filter_container">
					  <div class="">
							<div class="row">
								<div class="col-lg-12">

								  <div class="star-rating">
									<span><input type="checkbox" class="form-check-input ml-2 mr-3"></span>
									<span class="fa fa-star" data-rating="1"></span>
									<span class="fa fa-star" data-rating="2"></span>
									<span class="fa fa-star" data-rating="3"></span>
									<span class="fa fa-star" data-rating="4"></span>
									<span class="fa fa-star" data-rating="5"></span>
									<span class="star_txt">5 Star</span>
								  </div>
								</div>
							 </div>
							  <div class="row">
									<div class="col-lg-12">
									  <div class="star-rating">
										<span><input type="checkbox" class="form-check-input ml-2 mr-3"></span>
										<span class="fa fa-star" data-rating="1"></span>
										<span class="fa fa-star" data-rating="2"></span>
										<span class="fa fa-star" data-rating="3"></span>
										<span class="fa fa-star" data-rating="4"></span>
										<span class="fa fa-star-o" data-rating="5"></span>
										<span class="star_txt">4 Star</span>
									  </div>
									</div>
							  </div>
							  <div class="row">
									<div class="col-lg-12">
									  <div class="star-rating">
										<span><input type="checkbox" class="form-check-input ml-2 mr-3"></span>
										<span class="fa fa-star" data-rating="1"></span>
										<span class="fa fa-star" data-rating="2"></span>
										<span class="fa fa-star" data-rating="3"></span>
										<span class="fa fa-star-o" data-rating="4"></span>
										<span class="fa fa-star-o" data-rating="5"></span>
										<span class="star_txt">3 Star</span>
									  </div>
									</div>
							  </div>
							  <div class="row">
									<div class="col-lg-12">
									  <div class="star-rating">
										<span><input type="checkbox" class="form-check-input ml-2 mr-3"></span>
										<span class="fa fa-star" data-rating="1"></span>
										<span class="fa fa-star" data-rating="2"></span>
										<span class="fa fa-star-o" data-rating="3"></span>
										<span class="fa fa-star-o" data-rating="4"></span>
										<span class="fa fa-star-o" data-rating="5"></span>
										<span class="star_txt">2 Star</span>
									  </div>
									</div>
							  </div>
							   <div class="row">
									<div class="col-lg-12">
									  <div class="star-rating">
										<span><input type="checkbox" class="form-check-input ml-2 mr-3"></span>
										<span class="fa fa-star" data-rating="1"></span>
										<span class="fa fa-star-o" data-rating="2"></span>
										<span class="fa fa-star-o" data-rating="3"></span>
										<span class="fa fa-star-o" data-rating="4"></span>
										<span class="fa fa-star-o" data-rating="5"></span>
										<span class="star_txt">1 Star</span>
									  </div>
									</div>
							  </div>
					  </div>
				  </div>
				  </form>
			</div>
		</div>
		<div class="col-md-9 float-right pl-5">
			<div class="product_list">
				<?php
				$result=$con->card_details();
				$id=1;
				while($row=mysqli_fetch_array($result)){
				?>
				<div class="col-md-4">
					<div class="card">
					  <img class="card-img-top" src="<?php echo $row['card_img'] ?>">
					  <div class="card-block change_bg">
						<h4 class="card-title"><?php echo $row['card_title'] ?></h4>
						<p class="card-text"><?php echo $row['card_desc'] ?></p>
						<div class="row">
							<div class="col-lg-12 text-center mb-4">
								  <div class="star-rating">
									<span class="fa fa-star" data-rating="1"></span>
									<span class="fa fa-star-o" data-rating="2"></span>
									<span class="fa fa-star-o" data-rating="3"></span>
									<span class="fa fa-star-o" data-rating="4"></span>
									<span class="fa fa-star-o" data-rating="5"></span>
								  </div>
							</div>
						</div>
						<a class="fa fa-facebook-square social_icons" href="http://www.facebook.com/sharer.php?u=http://studews.com/beta/internal_work/fb_pagepost/?id=<?php echo $row['id'] ?>" aria-hidden="true" class="fa fa-facebook-square social_icons" id="fb_<?php echo $row['id']; ?>" target="_blank"></a>
						
                        <a href="https://twitter.com/intent/tweet?url=https://samian-percent.000webhostapp.com/internal_work/index.php?id=<?php echo $row['id'] ?>&text=<?php echo $row['card_desc']?>&via=google.com&title=<?php echo $row['card_title']?>" class="fa fa-twitter-square social_icons" aria-hidden="true" target="_blank"></a>
                        
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://studews.com/beta/internal_work/fb_pagepost/&title=<?php echo $row['card_title'] ?>&summery=<?php echo $row['card_desc'] ?>" class="fa fa-linkedin-square social_icons" aria-hidden="true" target="_blank"></a>
						<a href="" class="btn  custom_btn btn-sm float-right">select</a>
					  </div>
					</div>
				</div>
				<?php $id++;  } ?>
				
			</div>
		</div>
	</section>
	<script>
	    $(document).ready(function(){
	       $(".social_icons").click(function(){
	           var that_id = $(this).attr("id");
	           var id_split = that_id.split("_");
	           id_split = id_split[1];
	           window.location.href="?id="+id_split;
	       })
	    })
	</script>
 </body>
</html>
