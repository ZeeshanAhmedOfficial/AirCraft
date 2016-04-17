/* ==========================================================================
   Author's custom styles
   ========================================================================== */

* {
	margin: 0;
	padding: 0;
	outline: 0;
}
.alpha {
	margin-left: 0;
}
.omega {
	margin-right: 0;
}
#AjaxLoading {
	font-size: 11px;
	-webkit-border-bottom-left-radius: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-bottomleft: 10px;
	-moz-border-radius-bottomright: 10px;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	display: none;
	position: fixed;
	left: 42%;
	top: 0;
	text-align: center;
	background: #FCF5AA;
	width: 180px;
	z-index: 10000000000;
	padding: 10px;
	color: #000;
}
#AjaxLoading img {
	vertical-align: bottom;
	margin-right: 5px;
}
body {
	font-size: 12px;
	line-height: 1.3;
	font-family: Arial, Helvetica, Sans-Serif;
	color: #ccc;
	background: url('../img/body-bg.gif');
}
a {
	color: #e7b038;
	text-decoration: underline;
	cursor: pointer;
	outline: none;
	-webkit-transition: color .2s ease-in-out;
}
a:hover {
	text-decoration: none;
	outline: none;
}
a img {
	border: 0;
	outline: none;
}
input, textarea, select {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
textarea {
	overflow: auto;
}
.cl {
	display: block;
	height: 0;
	font-size: 0;
	line-height: 0;
	text-indent: -4000px;
	clear: both;
}
.notext {
	font-size: 0;
	line-height: 0;
	text-indent: -4000px;
}
.left, .alignleft {
	float: left;
	display: inline;
}
.right, .alignright {
	float: right;
	display: inline;
}
.text-right {
	text-align: right;
}
h1, h2, h3 {
	line-height: inherit;
	margin: 0;
}
form {
	margin: 0;
}
ul, ol {
	margin: 0;
}
li {
	line-height: inherit;
}
h2 {
	font-size: 10px;
	color: #f2a223;
	font-weight: bold;
}
h3 {
	font-size: 14px;
	color: #fff;
	font-weight: bold;
}
h4 {
	font-size: 14px;
	color: #f3b12b;
	font-weight: bold;
}
#page-wrap {
	position: relative;
	width: 980px;
	margin: 0 auto;
}
header {
	position: relative;
}
h1#logo {
	position: absolute;
	top: 37px;
	left: 0;
}
h1#logo a {
	float: left;
	width: 239px;
	height: 49px;
	background: url('../img/logo.png') no-repeat 0 0;
	font-size: 0;
	line-height: 0;
	text-indent: -4000px;
}
.social {
	float: right;
	width: 160px;
	padding-top: 11px;
	display: none;
}
.social span {
	float: left;
	display: inline;
	font-size: 10px;
	color: #9f9f9f;
	line-height: 16px;
	padding-right: 5px;
}
.social ul {
	list-style: none;
}
.social ul li {
	float: left;
	display: inline;
	width: 16px;
	padding-right: 2px;
}
.social ul li a {
	float: left;
	display: inline;
	width: 16px;
	height: 16px;
	background: url('../img/social.gif') no-repeat 0 0;
	font-size: 0;
	line-height: 0;
	text-indent: -4000px;
}
.social ul li a.facebook {
	background-position: -18px 0;
}
.social ul li a.vimeo {
	background-position: -36px 0;
}
.social ul li a.rss {
	background-position: -54px 0;
}
#navigation {
	float: right;
	clear: right;
	margin-top: 56px;
	padding-bottom: 35px;
	position: relative;
}
#navigation ul {
	list-style: none;
}
#navigation ul li {
	float: left;
	display: inline;
	padding-left: 15px;
}
#navigation ul li a {
	font-size: 14px;
	font-weight: bold;
	color: #fff;
	text-decoration: none;
	padding: 5px;
	text-shadow: 1px 1px 1px rgba(0,0,0,.5);
	text-transform: uppercase;
}
#navigation ul li.bold a {
	margin-top: -4px;
}
#navigation ul li a:hover {
	text-decoration: underline;
}
#navigation ul li.bold a.active, #navigation ul li.bold a:hover {
	color: black;
	text-shadow: 1px 1px 1px rgba(255,255,255,.5);
	text-decoration: none;
}
#sub-navigation {
	display: block;
	clear: right;
	border-top: 1px solid #7d7e7d;
	border-bottom: 1px solid #0e0e0e;
	padding: 9px 0;
	height: 27px;
	background: #7d7e7d; /* Old browsers */
	background: -moz-linear-gradient(top, #7d7e7d 0%, #0e0e0e 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #7d7e7d), color-stop(100%, #0e0e0e)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #7d7e7d 0%, #0e0e0e 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #7d7e7d 0%, #0e0e0e 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #7d7e7d 0%, #0e0e0e 100%); /* IE10+ */
	background: linear-gradient(to bottom, #7d7e7d 0%, #0e0e0e 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7d7e7d', endColorstr='#0e0e0e', GradientType=0 ); /* IE6-9 */
	-webkit-border-radius: 5px;
}
#sub-navigation ul {
	list-style: none;
	margin-left: 8px;
}
#sub-navigation ul li {
	float: left;
	display: inline;
	margin-right: 10px;
	text-indent: 5px;
}
#sub-navigation ul li a {
	font-size: 14px;
	font-weight: bold;
	color: #fff;
	line-height: 18px;
	text-decoration: none;
	text-shadow: 1px 1px 1px rgba(255,255,255,.5);
	padding-right: 5px;
}
#sub-navigation ul li a:hover {
	text-decoration: underline;
}
#search {
	width: 346px;
	position: absolute;
	right: -9px;
	top: 9px;
}
#search label {
	float: left;
	display: inline;
	font-size: 14px;
	font-weight: bold;
	color: #fff;
	line-height: 24px;
	padding-right: 6px;
}
#search .search-field {
	font-size: 12px;
	line-height: inherit;
	height: 15px;
	width: 238px;
	border: 1px solid #413e3e;
	background: #000;
	color: #ddd;
	padding: 2px 0 2px 2px;
	margin-bottom: 0;
}
#search .search-button {
	font-size: 14px;
	font-weight: bold;
	border: 0;
	background: none;
	color: #fff;
	cursor: pointer;
}
article {
	border-bottom: 1px dashed #413e3e;
}
#content {
}
.box {
	border-bottom: 1px dashed #413e3e;
}
.box .head {
	padding-top: 14px;
	margin-bottom: 10px;
	font-size: 14px;
}
.box .head h2 {
	font-size: 14px;
}
.box .movie {
	width: 152px;
	float: left;
	padding-right: 12px;
}
.movie-image {
	width: 152px;
	height: 214px;
	box-shadow: 3px 3px 3px rgba(0,0,0,.5);
}
.movie-image img {
	width: 152px;
	height: 214px;
}
.movie-image a {
	float: left;
	display: inline;
	width: 152px;
	height: 214px;
	position: relative;
	z-index: 2;
}
.show-video .info, .show-category .info {
	display: none;
	position: absolute;
	width: 152px;
	;
	height: 214px;
	z-index: 5;
	cursor: pointer;
	top: 0;
	left: 0;
	background-color: rgba(0,0,0,.7);
}
.show-video .info img, .show-category .info img {
	width: 65px;
	height: 65px;
	display: block;
	opacity: 0.9;
	margin: 0 auto;
	margin-top: 40px;
}
.show-video .info span.movie-name, .show-category .info span.movie-name {
	font-weight: bold;
	color: #fff;
	font-size: 14px;
	text-align: center;
	display: block;
	margin-top: 20px;
	padding: 0 5px;
}
.watch-trailer {
	display: block;
	color: #fff;
	text-shadow: 4px 4px 4px rgba(0,0,0,1);
	font-size: 16px;
	margin-top: 15px;
	text-align: center;
	text-transform: uppercase;
	font-weight: bold;
}
.show-video .info span.movie-name em, .show-category .info span.movie-name em {
	display: block;
	color: #FF3;
	font-size: 12px;
	font-style: italic;
	font-weight: normal;
}
/*.play { position: absolute; top: 0; left: 0; width:152px; height:214px; background: url('../img/image-hover.png'); display:block; z-index: 5; cursor:pointer; display:none; }
.movie span.name { font-weight:bold; color:#fff; font-size:14px; text-align:center; padding-top:160px; display:block; }*/

.box .last {
	padding: 0;
}
.rating {
	width: 152px;
	padding-top: 5px;
}
.rating p {
	float: left;
	font-size: 10px;
	color: #fff;
	font-weight: bold;
	margin-top: 4px;
	margin-right: 3px;
}
.rating .stars {
	float: left;
	width: 60px;
	height: 11px;
	background: url('../img/stars.gif') no-repeat 0 0;
	margin-left: 2px;
}
.rating .stars-in {
	width: 48px;
	display: inline;
	background: url('../img/stars.gif') no-repeat 0 bottom;
	position: absolute;
	height: 11px;
	font-size: 0;
	line-height: 0;
	text-indent: -4000px;
}
.comments {
	background: url('../img/comments.gif') no-repeat 0 center;
	padding-left: 12px;
	float: right;
}
#news {
	width: 460px;
	float: left;
}
#news .head {
	width: 460px;
	padding-top: 11px;
	padding-bottom: 14px;
}
#news h3, #coming h3 {
	float: left;
}
#coming {
	width: 490px;
	float: left;
	padding-left: 30px;
}
#coming .head {
	width: 490px;
	padding-top: 11px;
	padding-bottom: 14px;
}
#coming .head strong {
	color: #ff361a;
}
#coming .content {
	min-height: 130px;
	height: auto !important;
	height: 130px;
	padding-bottom: 20px;
}
#coming .content h4 {
	padding-bottom: 3px;
}
.content {
	padding-bottom: 28px;
}
.content .date {
	font-size: 10px;
	color: #fff;
}
.content img {
	float: left;
	width: 68px;
	padding-right: 8px;
}
.content p {
	font-size: 13px;
	color: #fff;
	line-height: 16px;
}
.content a {
	font-size: 11px;
}
#footer {
	padding: 15px 0 0 0;
	font-size: 12px;
}
#footer p.copyright {
	text-align: center;
	font-size: 12px;
	padding-bottom: 11px;
}
#footer a {
	color: #9c9c9c;
	font-size: 12px;
}
#footer a:hover {
	color: #e44400;
	text-decoration: none;
}
#footer a:hover.designby {
	color: #9c9c9c;
	text-decoration: none;
}
.popover-title, .popover-content {
	color: #333;
	text-align: left;
}
.movie-items li {
	position: relative;
	width: 152px;
	margin-right: 11px;
	margin-bottom: 11px;
	height: 260px;
	display: inline;
	float: left;
}
.movie-image span.name {
	font-weight: bold;
	color: white;
	font-size: 14px;
	text-align: center;
	padding-top: 160px;
	display: block;
}
.pagination ul > li > a, .pagination ul > li > span {
	background-color: inherit;
}
.pagination ul > li > a:hover, .pagination ul > .active > a, .pagination ul > .active > span {
	background-color: #E7B038;
	color: #000;
}
.ui-dialog .ui-dialog-titlebar {
	display: none;
}
.paging-float {
	position: fixed;
	left: 0;
	bottom: -15px;
	width: 100%;
	border-bottom: 1px solid #988753;
	border-top: 1px solid #988753;
	z-index: 999;
	background: #000;
	-webkit-opacity: .85;
	-moz-opacity: .85;
	opacity: .85;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=85)"/* IE8 */;
	padding: 8px 0;
}
.foldtl {
	position: relative;
	-webkit-box-shadow: 5px 5px 5px rgba(0,0,0,0.8);
	-moz-box-shadow: 5px 5px 5px rgba(0,0,0,0.8);
	box-shadow: 5px 5px 5px rgba(0,0,0,0.8);
}
.foldl:before {
	content: "";
	position: absolute;
	top: 0%;
	left: 0%;
	width: 0px;
	height: 0px;
	border-bottom: 70px solid #eee;
	border-left: 70px solid #272822; /*Set to background color, not transparent!*/
	-webkit-box-shadow: 7px 7px 7px rgba(0,0,0,0.3);
	-moz-box-shadow: 7px 7px 7px rgba(0,0,0,0.3);
	box-shadow: 7px 7px 7px rgba(0,0,0,0.3);
}
.foldtl:after {
	content: "";
	position: absolute;
	top: 0%;
	left: 0%;
	width: 0px;
	height: 0px;
	border-top: 69px solid #272822;
	border-right: 69px solid transparent;
}
#formReport legend {
	margin-bottom: inherit;
	color: #fff;
}
#formReport .control-group input.text {
	color: #fff;
}
.validateTips {
	border: 1px solid transparent;
	padding: 0.3em;
}
#movie-info .title {
	font-size: 22px;
	margin-bottom: 5px;
	color: #fff;
	font-weight: bold;
}
#movie-info .title .year {
	display: inline-block;
	margin-left: 5px;
	font-size: 18px;
	color: #bbb;
}
#movie-info .genres {
	font-size: 11px;
	color: #bbb;
}
#movie-info .extra {
	margin: 0;
	padding: 0;
	list-style-type: none;
}
#movie-info hr {
	margin: 10px 0;
}
#movie-info .extra li {
	color: #eee;
	margin-bottom: 10px;
}
#movie-info .extra li span {
	font-weight: bold;
	display: block;
}
#movie-info .extra li.inline {
	display: inline;
	margin-right: 10px;
}
#movie-info .extra li.inline span {
	display: inline;
}
#movie-info a {
	text-decoration: none;
}
.ribbon {
	background: url(../img/new-ribbon.png) no-repeat transparent;
	position: absolute;
	z-index: 10;
	left: -8px;
	top: -7px;
	width: 78px;
	height: 79px;
	cursor: pointer;
}
.cat-ribbon {
	background: url(../img/category-ribbon.png) no-repeat transparent;
	position: absolute;
	z-index: 10;
	right: -7px;
	bottom: 38px;
	width: 78px;
	height: 79px;
	cursor: pointer;
}
.cd-label {
	position: absolute;
	left: 31%;
	bottom: 20%;
	display: block;
	line-height: 20px;
	font-size: 16px;
}
ul.movie-disks {
	margin: 0;
	padding: 0;
	list-style-type: none;
}
ul.movie-disks li.movie-disk-items {
	text-align: center;
	margin-bottom: 50px;
	font-size: 16px;
	position: relative;
	font-weight: bold;
	width: 140px;
	height: 100px;
	display: inline;
	float: left;
}
li.movie-disk-items .disk-img {
	width: 90px;
	height: 90px;
	display: block;
	margin: 0 auto;
	margin-bottom: 10px;
}
/********************************* LiveValidation *************************************/

.LV_valid {
	color: #00CC00;
}
.LV_invalid {
	color: #CC0000;
}
.LV_validation_message {
	font-weight: bold;
	margin: 0 0 0 5px;
}
.LV_valid_field, input.LV_valid_field:hover, input.LV_valid_field:active, textarea.LV_valid_field:hover, textarea.LV_valid_field:active, .fieldWithErrors input.LV_valid_field, .fieldWithErrors textarea.LV_valid_field {
	border: 1px solid #00CC00;
}
.LV_invalid_field, input.LV_invalid_field:hover, input.LV_invalid_field:active, textarea.LV_invalid_field:hover, textarea.LV_invalid_field:active, .fieldWithErrors input.LV_invalid_field, .fieldWithErrors textarea.LV_invalid_field {
	border: 1px solid #CC0000;
}
/* RATED */
.rateSprite {
	background-image: url(../img/rateSprite.png);
	display: inline-block;
	vertical-align: middle;
	margin-right: 6px;
}
.r_r {
	background-position: -165px -3px;
	height: 16px;
	width: 18px;
}
.r_g {
	background-position: -72px -3px;
	height: 16px;
	width: 17px;
}
.r_pg {
	background-position: -91px -3px;
	height: 16px;
	width: 27px;
}
.r_pg-13 {
	background-position: -119px -3px;
	height: 16px;
	width: 44px;
}
.us_nc_17 {
	background-position: -185px -3px;
	height: 16px;
	width: 44px;
}
.us_unrated {
	background-position: -219px -20px;
	height: 16px;
	width: 29px;
}
.r_nr {
	background-position: -188px -20px;
	height: 16px;
	width: 29px;
}
.us_approved {
	background-position: -2px -2px;
	height: 18px;
	width: 68px;
}
.us_x {
	background-position: -231px -3px;
	height: 16px;
	width: 15px;
}
.us_tv_g {
	background-position: -2px -20px;
	height: 16px;
	width: 24px;
}
.us_tv_pg {
	background-position: -28px -20px;
	height: 16px;
	width: 32px;
}
.us_tv_y {
	background-position: -61px -20px;
	height: 16px;
	width: 24px;
}
.us_tv_y7 {
	background-position: -86px -20px;
	height: 16px;
	width: 32px;
}
.us_tv_14 {
	background-position: -119px -20px;
	height: 16px;
	width: 30px;
}
.us_tv_ma {
	background-position: -151px -20px;
	height: 16px;
	width: 35px;
}


/* Represents the background of the highlighted menu-item. */
.lavaLamp li.back {
	background-color: rgba(0,0,0,.5);
	width: 9px; height: 30px;
	z-index: 8;
	position: absolute;
	left: -10px;
	margin-top: -2px;
}

.lavaLamp li a {
	position: relative; overflow: hidden;
	text-decoration: none; 
	font: bold 14px arial;
	color: #fff; outline: none;
	text-align: center;
	height: 30px; top: 2px; 
	z-index: 10; letter-spacing: 0; 
	float: left; display: block;
}
ul.tags {
	margin-top: 10px;
}
ul.tags li {
	float: left;
	display: inline;
	margin-right: 5px;
	margin-bottom: 5px;
}
ul.tags.item-quality li, ul.tags.item-genre li {
	float: none;
	display: block;
}
ul.tags li a {
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	display: block;
	background-color: #4e4e4e;
	color: #b7b7b7;
	padding: 1px 7px;
	font-size: 12px;
	text-align: left;
	text-decoration: none;
	text-shadow: 1px 1px 1px #000;
}
ul.tags.item-quality li a, ul.tags.item-genre li a {
	display: inline-block;
}
ul.tags li a.label-warning {
	color: #000;
	text-shadow: 1px 1px 1px rgba(255,255,255,.5);
}
ul.tags li a:hover {
	color: #fff;
}

<!-- php
require_once("_assets/config/dbc.php");  
if (isset($_POST['is_submit']) && $_POST['is_submit'] == 1 ) {

    $date = $_POST['inputDate'];
    $title = $_POST['inputTitle'];
    $slug = $_POST['inputSlug'];
    $brand_img = 'Image will come here!';
    $status = 'Deactive';
    $meta_description = $_POST['inputMetaDescription'];
    $meta_keywords = $_POST['inputKeyword'];

		if(isset($_FILES['file']))
    {
      $name      = uniqid(time());
      $file_ext  = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
      $file_name = $name . "." . $file_ext; 
      $file_size =$_FILES['file']['size'];
      $file_tmp  = $_FILES['file']['tmp_name'];
      $file_type = $_FILES['file']['type'];
      $errors = NULL;

      $extensions = array("jpeg","jpg","png", "gif");  

      if(in_array($file_ext, $extensions ) === false)
          $errors = "extension not allowed";
     
      if($file_size > 2097152)
          $errors = 'File size must be less tham 2 MB';
     
      if(empty($errors) == true)
      {
        $isUploaded = move_uploaded_file($file_tmp, "../uploads/" . $file_name);

        if($isUploaded)
        {
            mysql_query("INSERT INTO itl0_brand(create_date, title, slug, brand_img, brand_status, meta_description, meta_keywords) 
                       VALUES('$date', '$title', '$slug', '$file_name', '$status', '$meta_description', '$meta_keywords')");
             header("Location:view_brand.php");
        } 
      }
      else
        echo $errors;
    }       		
	}
//--> 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
php include('_partials/links.php'); ?>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="span12">
      php include("_partials/header.php"); ?>
      php include("_partials/menu.php"); ?>

      <div id="main-content" role="main"> 
        
        <!-- add reocrd file -->
        <section class="dark-box" id="inner-header">
          <div class="row">
            <div class="span5">
              <h1 class="article-page-title ic-48-article">Add Brand</h1>
            </div>
            <div class="span7 omega" id="article-page-toolbar">
              <ul class="article-page-buttons clearfix">
                <li><a href="javascript:;" id="btnSave"><span class="ic-32-save" title="Save"></span>Save</a></li>
                <li><a href="view_brand.php" id="btnCancel"><span class="ic-32-cancel" title="Cancel"></span>Cancel</a></li>
              </ul>
            </div>
          </div>
        </section>
        <section class="light-box" id="article-container">
          <article id="article-grid" role="main">
            <form class="form" id="formAdd" name="formAdd" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
              <input type="hidden" name="is_submit" id="is_submit" value="1">
              <div>
              <div class="row">
              <div class="span6">
                <fieldset>
                  <legend>Primary Detail</legend>
                  <div class="control-group">
                    <label for="inputDate"><strong>Date <span style="color:red; font-size:16px; font-weight:bold;">*</span></strong></label>
                    <input type="text" id="inputDate" name="inputDate" placeholder="Date" class="input-xlarge" >
                  </div>
                  <div class="control-group">
                    <label for="inputTitle"><strong>Title <span style="color:red; font-size:16px; font-weight:bold;">*</span></strong></label>
                    <input type="text" id="inputTitle" name="inputTitle" placeholder="Title" class="input-xlarge">
                  </div>
                  <div class="control-group">
                    <label for="inputSlug"><strong>Slug</strong></label>
                    <input type="text" id="inputSlug" name="inputSlug" placeholder="Slug" class="input-xlarge" >
                  </div>
                </fieldset>
              </div>
              <div class="span5">
              <fieldset>
              <legend>Extra Detail</legend>
              <div class="control-group">
                <label for="inputMetaDescription"><strong>Brand Thumbnail:</strong></label>
                <input type="file" name="file" id="file">
              </div>
              
              <div class="control-group">
                <label for="inputMetaDescription"><strong>Meta Description:</strong></label>
                <textarea id="inputMetaDescription" name="inputMetaDescription" rows="7" class="span5"></textarea>
              </div>
              <div class="control-group">
                <label for="inputKeyword"><strong>Keyword:</strong></label>
                <input type="text" id="inputKeyword" name="inputKeyword" placeholder="Keyword" class="span5">
              </div>
              
            </form>
            <script type="text/javascript">
              var frmvalidator = new Validator("formAdd");
              frmvalidator.addValidation("inputDate", "req", "Date should not be empty!");
              frmvalidator.addValidation("inputTitle", "req", "Title should not be empty!");
            </script>


          </article>
        </section>
        
        <!-- add record file ended --> 
        
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function(e) {
    $("#btnSave").click(function(e) {
      $("#formAdd").submit();
    });
  });  
</script>



</body>
</html>
