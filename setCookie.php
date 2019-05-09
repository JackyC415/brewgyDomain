<?php 

function setCookieOnPage($cookieName) {
	if(!isset($_COOKIE['productVisited'])) {                
        setcookie("productVisited", $cookieName, time()+300);
    } else {
    setcookie("productVisited", $_COOKIE['productVisited']." ".$cookieName, time()+300);
    } 
}

function mostVisitedProducts($cookieName) {
	$products = array();
	if(!empty($_COOKIE['mostVisitedProducts'])) {
		$products = unserialize($_COOKIE['mostVisitedProducts']);
	}
	(isset($products[$cookieName]) ? $products[$cookieName]++ : $products[$cookieName] = 1);
	setcookie('mostVisitedProducts', serialize($products), time()+3600);
}

?>