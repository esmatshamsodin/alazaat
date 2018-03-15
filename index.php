<!DOCTYPE html>

<html>
<head>
<title>Homeowners</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Include the above in your HEAD tag-->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css
" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css
" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css
" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.2.1.slim.min.js
"
  integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js
" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js
"></script>


<style>


/* --- Map --- */
.map{
  position:relative;
  margin-top:20px;
  margin-bottom:40px;
}

.map iframe{
  width:100%;
  height:450px;
  border:none;
}

.map-grid iframe{
  width:100%;
  height:350px;
  border:none;
  margin:0 0 -5px 0;
  padding:0;
}

/* --- contact-area --- */

.contact-area  {
  color:#000;
  margin-bottom:30px;
}
.contact-area h4 {
  color:#50c0e9;
}

button.btn-default {
  margin-top:10px;
  margin-bottom:30px;
  background-color:#50c0e9;
  color:#fff;
}
button.btn-default:hover {
  background-color:#eee;
  color:#50c0e9;
}
textarea.form-control {
  border-radius:0;

}

/* --- footer --- */

footer a {
  color:#000;
}

footer a:hover {
  color:#000;
}

footer h1, footer h2, footer h3, footer h4, footer h5, footer h6{
  color:#000;
}

footer address {
  line-height:1.6em;
}

footer h5 a:hover, footer a:hover {
  text-decoration:none;
}

ul.social-network {
  list-style:none;
  margin:0;
}

ul.social-network li {
  display:inline;
  margin: 0 5px;
  color:#50c0e9;
}
ul.social-network li a {
  color:#50c0e9;
}

#sub-footer{
  text-shadow:none;
  color:#000;
  padding:40px;
  padding-top:10px;
  padding-bottom:50px;
  margin:20px 0 0 0;
  background-color:#fff;
}

#sub-footer p{
  margin:0;
  padding:0;
}

#sub-footer span{
  color:#000;
}

.copyright {
  text-align:left;
  font-size:14px;
}
.copyright a {
  color:#50c0e9;
}

#sub-footer ul.social-network {
  float:right;
  font-size:14px;
}


/* --- Heading style --- */

h4.heading {
  font-weight:700;
}

.heading {
  position: relative;
  margin-bottom: 30px;
}

/* --- widgets --- */

.widget {
  padding:40px;

}
.widgetheading {
  width:100%;
  padding:0;
  color:#50c0e9;
  margin-bottom:30px;
}
.widget address{
  color:#000;

}

footer .widgetheading {
  position: relative;
}

footer .widget .social-network {
  position:relative;
}

/* --- flickr --- */
.widget .flickr_badge {
  width:100%;
}
.widget .flickr_badge img { margin: 0 9px 20px 0; }

footer .widget .flickr_badge {
    width: 100%;
}
footer .widget .flickr_badge img {
    margin: 0 9px 20px 0;
}

.flickr_badge img {
    width: 50px;
    height: 50px;
    float: left;
  margin: 0 9px 20px 0;
}

/* --- latest tweet widget --- */

.twitter ul{
  margin-left:0;
  list-style:none;
}

.twitter  img{
    float: left;
    margin-right: 15px;
}
.twitter span.tweet_time{
    display: block;
    padding-bottom: 5px;

}
.twitter li{
    border-bottom: 1px dashed #efefef;
    padding-bottom: 20px;
    margin-bottom: 20px;
    list-style: none;
}
.twitter li:last-child{border: none;}



ul.general {
  list-style:none;
  margin-left:0;
}

ul.link-list{
  margin:0;
  padding:0;
  list-style:none;
}

ul.link-list li{
  margin:0;
  padding:2px 0 2px 0;
  list-style:none;
}

footer ul.link-list li a {
  color:#000;
}
footer ul.link-list li a:hover {
  color:#50c0e9;
}

footer .widget ul li a {
  color:#000;
}


#map {
    height: 830px;
}
.map {
    position: relative;
    overflow: hidden;
}
.contact {
    position: absolute;
    width: 100%;
    height: 830px;
    margin-top: 0px;
    left: 0;
    margin-top: -830px;
    background: rgba(0, 0, 0, 0.51);
}
.contact-caption {
    margin-top: 120px;
}

.panel-footer {
      padding: 10px 15px;
    background-color: #585858;
    border-top: 1px solid #fff;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
}
<footer>
    <div class="footerHeader" ></div>
    <div class="container">
    <div class="col-md-4" >
        <h3>About us</h3>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>

    <div class="col-md-4">
        <h3>Our Location </h3>
     <div class="container">
    <div class="row">
      <div class="map">
        <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;Karlsplatz,+Wien,+Austriaz&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=15&amp;ll=48.1979551,16.3628936&amp;output=embed
">
        </iframe>
      </div>
    </div>
  </div>
    <div class="col-md-4" >
        <h3>Contact Us</h3>
        <ul>
            <li>Phone : 123 - 456 - 789</li>
            <li>E-mail : info@comapyn.com</li>
            <li>Fax : 123 - 456 - 789</li>
        </ul>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
        </p>
        <ul class="sm">
            <li><a href="#" ><img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive"></a></li>
            <li><a href="#" ><img src="https://lh3.googleusercontent.com/00APBMVQh3yraN704gKCeM63KzeQ-zHUi5wK6E9TjRQ26McyqYBt-zy__4i8GXDAfeys=w300
" class="img-responsive" ></a></li>
            <li><a href="#" ><img src="http://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png
" class="img-responsive"  ></a></li>
        </ul>
    </div>
    </div>
</footer>
footer
{
    background-color: rgba(44, 62, 80, 1.0);

    width: 100%;
    bottom: 0;
    font-weight: lighter;
    color: white;
}
#footerHeader{
    width:100%;
    padding:1em;
    background-color:rgba(52, 73, 94,1.0);
    text-align:center;
    color:white;
}
footer h3{
    font-weight:lighter;
}
footer ul{
    padding-left:5px;
    list-style:none;
}
footer p{
    text-align : justify;
    font-size : 12px;
}
footer iframe {
    width:100%;
    position:relative;
    height:170px;
}
.sm{
    list-style:none;
    overflow:auto;
}
.sm li {
    display: inline;
    padding:5px;
    float:left;
}
.sm li a img {
    width:32px;
}

h2{
  color: #2C98F0;
  font-size: 46px;
}
h1:hover {background-color: #2C98F0;
          text-decoration: none;
          border-radius: 10px;

}
a:hover{
  text-decoration: none;
}

</style>
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +436889600112</li>
        <li><i class="fa fa-envelope-o"></i>admin@admin.com</li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#">Hauses</a></li>
        <li><a href="view.php">Owners</a></li>
        <li><a href="#">Renters</a></li>
        <li><a href="#">Admins</a></li>
        <li><a href="#footerHeader">Contact</a></li>
        <li><a href="#footerHeader">About</a></li>
      </ul>
    </div>

  </div>
</div>
<div class="bgded overlay" style="background-image:url('images/image1.jpg');">
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Homeowners</a></h1>
        <p></p>
      </div>
      </header>
  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->
    <article>
      <p class="heading">
        <h2><!--###### Typing text effect with JavaScript will be outputet inside h2 tag #######-->
        </h2>
      </p>

    <!--###### Typing text effect with JavaScript start #######-->

      <script>
          var str= "Welcome to our page";
          var split = str.split("");
          var counter = 0;

          var SI=setInterval(function(){
          var h2 = $("h2");

            h2.append(split[counter]);
            counter++;
            if(counter==str.length){clearInterval(SI)}


          },80)
      </script>

    <!--###### Typing text effect with JavaScript ende #######-->
      <h1 class="heading"></h1>
      <p>Please LogIn And If You Are New Please SignUp Now</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="Login.php">LogIn</a></li>
          <li><a class="btn inverse" href="register.php">SignUp</a></li>
        </ul>
      </footer>
    </article>
  </div>
</div>
</div>

<!--   ////////////     Contact       /////////////// -->
<footer>
    <div id="footerHeader" ></div>
    <div class="container">
    <div class="col-md-8" >
        <h3>About us</h3>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

        </p>

    </div>
    <div>
       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5blV5mYrucKy5qlScpWVH-KMpjtcqhcxCFhYvqjF1knBqtxKeIQ">
    </div>
    <!-- ////////   Location   ///////  -->
    <div class="col-md-6">
        <style>
       #map {
        height: 250px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>Location</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 48.196443, lng: 16.359416};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_Yj9hL3GAf4GdaPS8qaXLpYyGLopbnvk
&callback=initMap">
    </script>
    </div>
    <!-- ///////////////    Contact     ////////// -->
    <div class="col-md-6" >
        <h3>Contact Us</h3>
        <ul>
            <li>Phone : +43 (0) 660-123-456-45</li>
            <li>E-mail : info@gmail.com</li>
            <li>Fax : 123 - 456 - 789</li>
        </ul>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
             Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s



        </p>
        <ul class="sm">
            <li><a href="https://www.facebook.com/" ><img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive"></a></li>
            <li><a href="https://github.com/" ><img src="https://cdn4.iconfinder.com/data/icons/iconsimple-logotypes/512/github-256.png
" class="img-responsive" ></a></li>
            <li><a href="#" ><img src="http://playbookathlete.com/wp-content/uploads/2016/10/twitter-logo-4.png
" class="img-responsive"  ></a></li>
        </ul>
    </div>
    </div>