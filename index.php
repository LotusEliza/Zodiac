<?php

error_reporting(E_ALL);
require_once 'main.php';

$params = [];
if(isset($_GET['page'])){ //mod_rewrite teper vse prihodit v index
    $params = explode('/', $_GET['page']);//razrivaem stroku po slesham
    if(count($params) == 0){
        $params[] = 'index';
    }
}
else
    $params[] = 'index';


$controller_name = array_shift($params);
$class = $controller_name.'Controller'; //addController
$controller_path = './controllers/'.$class.'.php';


//***********do action(routing)
if(file_exists($controller_path)) {
    include $controller_path; //podkluchaem kontroller (dinamicheskiy)
    $worker = new $class;
    $worker->action($params);
} else {
    echo 'not found';
}







//<!DOCTYPE html>
//<html lang="eng">
//<head>
//    <title>zodiac</title>
//    <meta charset="utf-8">
//    <meta name="viewport" content="width=device-width, initial-scale=1">
//    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
//    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
//    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
//    <link rel="stylesheet" type="text/css" href="style/style.css">
//</head>
//<body>
//
//<nav class="navbar navbar-inverse">
//    <div class="container-fluid">
//
//<!--        Logo-->
//<!--        <div class="navbar-header">-->
//<!--            <a class="navbar-brand" href="#">-->
//<!--                Star Sign Calculator-->
//<!--            </a>-->
//<!--        </div>-->
//
//<!--        Menu Items-->
//        <ul class="nav navbar-nav">
//            <li><a href="#">Star Sign Calculator</a></li>
//            <li class="active"><a href="#">Zodiac signs</a></li>
//            <li><a href="#">Horoscopes</a></li>
//            <li><a href="#">Compatibility</a></li>
//            <li><a href="#">Astrology</a></li>
//        </ul>
//    </div>
//</nav>
//
//
//
//<div class="container-fluid">
//
//        <div class="row">
//            <div class="col-md-4" style="background-color: lightyellow">
//                <div class="embed-responsive embed-responsive-16by9">
//                    <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/jyq4nZRw3Fo"></iframe>
//                </div>
//            </div>
//        <div class="col-md-4" style="background-color: mintcream">
//            <form method="POST" action="">
//                <div class="form-group">
//                    <label for="dateOfBirth">Your date of birth</label>
//                    <input type="text" name="dateOfBirth" class="form-control" id="dateOfBirth" placeholder="Enter your date of birth">
//                </div>
//
//                <button type="submit" class="btn btn-success btn-block">Submit</button>
//            </form>
//        </div>
//        <div class="col-md-4" style="background-color: lightyellow">right</div>
//    </div>
//</div>
//
//</body>
//</html>
//
//
//<?php
//  if(isset($_POST['dateOfBirth'])){
//      $dateOfBirth = $_POST['dateOfBirth'];
//
//          $zodiac = '';
//          list ($month, $day) = explode('-', $dateOfBirth);
//          if (($month == 3 && $day > 20) || ($month == 4 && $day < 20)) {
//              $zodiac = "Aries";
//          } elseif (($month == 4 && $day > 19) || ($month == 5 && $day < 21)) {
//              $zodiac = "Taurus";
//          } elseif (($month == 5 && $day > 20) || ($month == 6 && $day < 21)) {
//              $zodiac = "Gemini";
//          } elseif (($month == 6 && $day > 20) || ($month == 7 && $day < 23)) {
//              $zodiac = "Cancer";
//          } elseif (($month == 7 && $day > 22) || ($month == 8 && $day < 23)) {
//              $zodiac = "Leo";
//          } elseif (($month == 8 && $day > 22) || ($month == 9 && $day < 23)) {
//              $zodiac = "Virgo";
//          } elseif (($month == 9 && $day > 22) || ($month == 10 && $day < 23)) {
//              $zodiac = "Libra";
//          } elseif (($month == 10 && $day > 22) || ($month == 11 && $day < 22)) {
//              $zodiac = "Scorpio";
//          } elseif (($month == 11 && $day > 21) || ($month == 12 && $day < 22)) {
//              $zodiac = "Sagittarius";
//          } elseif (($month == 12 && $day > 21) || ($month == 1 && $day < 20)) {
//              $zodiac = "Capricorn";
//          } elseif (($month == 1 && $day > 19) || ($month == 2 && $day < 19)) {
//              $zodiac = "Aquarius";
//          } elseif (($month == 2 && $day > 18) || ($month == 3 && $day < 21)) {
//              $zodiac = "Pisces";
//          }
//      echo $zodiac;
//          return $zodiac;
//      }
//  else {
//      echo 'nothing';
//  }
//?>



