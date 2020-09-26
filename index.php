<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple-1.css">
    <link rel="stylesheet" href="assets/css/Navbar---Apple.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top bg-dark navbar--apple">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#menu"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"><i class="la la-navicon"></i></span></button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav flex-grow-1 justify-content-between">
                    <li class="nav-item d-none d-xs-block d-md-block" role="presentation"><a class="nav-link" href="#"><i class="fa fa-apple apple-logo"></i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Mac</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">iPad</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">iPhone</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Watch</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">TV</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Music</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Support</a></li>
                    <li class="nav-item d-none d-xs-block d-md-block" role="presentation"><a class="nav-link" href="#"><i class="icon ion-ios-search-strong"></i></a></li>
                    <li class="nav-item d-none d-xs-block d-md-block" role="presentation"><a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div  style="background-color:#aa2712">
        <div class="container mt-5">
            <div class="row  text-center">
                <div class="col-md-12"></div>
				
				<img src="assets/img/logo.png" class="mx-auto d-block m-5" width="100px">
            </div>
            <div class="row">
                <div class="col-md-12 m-4">
				<?php
if(isset($_POST['name'])){
	
	
	$postx = htmlspecialchars_decode($_POST['name'], ENT_QUOTES);
	echo "<a class='btn btn-info m-2 btn-block' href='https://host2.rj-mw1.com/media/mp3/mp3-320/". $postx . ".mp3'>Download 320</a>";
	echo "<br>";
		echo "<a class='btn btn-info m-2 btn-block' href='https://host2.rj-mw1.com/media/mp3/mp3-256/". $postx . ".mp3'>Download 256</a>";

	echo "<hr>";
		echo "<a class='btn btn-info m-2 btn-block' href='/'>Download another track</a>";

}
else{
	echo "<p class='m-3 text-light'>fx : https://www.radiojavan.com/mp3s/mp3/Aaren-Kharab-Kardi?playlist=6062afd022cb&index=3 <br>
	

Type only 'Aaren-Kharab-Kardi' <br>

fx : https://www.radiojavan.com/mp3s/mp3/Tohi-Holesh-(Ft-Amir-Tataloo)<br>

Type only 'Tohi-Holesh-(Ft-Amir-Tataloo)' <hr>





</p>




<form method='POST'>
<input type='text' name='name' class='form-control'>
</form>";
}
?>
				</div>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Coding<a href='https://mrlast.com' target='_blank'> Mr last</a></p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Navbar---Apple.js"></script>
</body>

</html>