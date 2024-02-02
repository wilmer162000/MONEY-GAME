<?php
session_start();
if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = array();
}
$_SESSION['one'] = $_POST['one'];
$_SESSION['two'] = $_POST['two'];
$_SESSION['three'] = $_POST['three'];
$_SESSION['four'] = $_POST['four'];
$_SESSION['reset'] = $_POST['reset'];

$low_risk = rand(-25,100);
$moderate_risk = rand(-100,1000);
$high_risk = rand(-500,2500);
$severe_risk = rand(-3000,5000);

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 500;
}

if (isset($_SESSION['reset'])){
    $_SESSION['counter'] = 500;
}

if (isset($_SESSION['one'])) {
    $_SESSION['counter'] = $_SESSION['counter'] + $low_risk ;
    if ($low_risk > 0){
        $_SESSION['message'] = date("y/m/d").' '.date("h:sa").' Congrats!!! You won '.$low_risk.' and your new balance is '.$_SESSION['counter'];
        $_SESSION['color'] = 'Green';
    } else {
        $_SESSION['message'] = date("y/m/d").' '.date("h:sa").' Try again!!! You loss '.$low_risk.' and your new balance is '.$_SESSION['counter'];
        $_SESSION['color'] = 'Red';
    }
}

if (isset($_SESSION['two'])) {
    $_SESSION['counter'] = $_SESSION['counter'] + $moderate_risk ;
    if ($moderate_risk > 0){
        $_SESSION['message'] = date("y/m/d").' '.date("h:sa").' Congrats!!! You won '.$moderate_risk.' and your new balance is '.$_SESSION['counter'];
        $_SESSION['color'] = 'Green';
    } else {
        $_SESSION['message'] = date("y/m/d").' '.date("h:sa").' Try again!!! You loss '.$moderate_risk.' and your new balance is '.$_SESSION['counter'];
        $_SESSION['color'] = 'Red';     
}
}
if (isset($_SESSION['three'])) {
    $_SESSION['counter'] = $_SESSION['counter'] + $high_risk;
    if ($high_risk > 0){
        $_SESSION['message'] = date("y/m/d").' '.date("h:sa").' Congrats!!! You won '.$high_risk.' and your new balance is '.$_SESSION['counter'];
        $_SESSION['color'] = 'Green';
    } else {
        $_SESSION['message'] = date("y/m/d").' '.date("h:sa").' Try again!!! You loss '.$high_risk.' and your new balance is '.$_SESSION['counter'];
        $_SESSION['color'] = 'Red';
}
}

if (isset($_SESSION['four'])) {
    $_SESSION['counter'] = $_SESSION['counter'] + $severe_risk;
    if ($severe_risk > 0){
        $_SESSION['message'] = date("y/m/d").' '.date("h:sa").' Congrats!!! You won '.$severe_risk.' and your new balance is '.$_SESSION['counter'];
        $_SESSION['color'] = 'Green';
    } else {
        $_SESSION['message'] = date("y/m/d").' '.date("h:sa").' Try again!!! You loss '.$severe_risk.' and your new balance is '.$_SESSION['counter'];
        $_SESSION['color'] = 'Red';
}
}

$_SESSION['messages'][] = array(
    'color' => $_SESSION['color'],
    'message' => $_SESSION['message']
);


header("location: index.php");
?>