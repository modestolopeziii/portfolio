<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
<style>
.container-nav {
 padding: 50px;
}
.container-nav span,
.container-portfolio span {
 padding: 40px;
}
.container-nav span a,
.container-portfolio span a {
 color: #000;
}
.container-nav span a:hover {
 text-decoration: none;
}
.container-nav span a:hover:before {
 content: '< ';
 font-weight: bold;
}
.container-nav span a:hover:after {
 content: ' />';
 font-weight: bold;
}
.hero-title {
 font-family: 'Yellowtail', cursive;
 font-size: 70px;
}
.top-80 {
 margin-top: 80px;
}
.top-50 {
 margin-top: 50px;
}
.hero-tagline {
 padding: 10px;
}
.portfolio-item {
 border: 1px solid #eee;
 height: 300px;
}
.portfolio-item:hover {
 background: #000;
}
</style>
</head>
<body>

<div class="container-fluid">
 <div class="row">
  <div class="col-md-12">
  <nav class="pull-right container-nav">
   <span><a href="#">About</a></span>
   <span><a href="#">Works</a></span>
   <span><a href="#">Contact</a></span>
  </nav>
  </div>
 </div>
</div>


<div class="container-fluid top-80">
 <div class="row">
  <div class="col-md-12">
   <h1 class="text-center hero-title">Modesto Lopez III</h1>
   <h4 class="text-center hero-tagline">The mother fucking Web Developer</h4>
  </div>
 </div>
</div>

<div class="container-fluid top-50">
 <div class="row">
  <div class="container container-portfolio text-center">
   <span><a href="#">WordPress</a></span> /
   <span><a href="#">Shopify</a></span> /
   <span><a href="#">Static</a></span> /
   <span><a href="#">Joomla</a></span> /
   <span><a href="#">Speed Optimization</a></span> /
   <span><a href="#">PSD to HTML5</a></span>
   <span><a href="#">Web app</a></span>
  </div>
 </div>
 <div class="row top-50">
  <div class="col-md-4 portfolio-item"></div>
  <div class="col-md-4 portfolio-item"></div>
  <div class="col-md-4 portfolio-item"></div>
  <div class="col-md-4 portfolio-item"></div>
  <div class="col-md-4 portfolio-item"></div>
  <div class="col-md-4 portfolio-item"></div>
 </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
