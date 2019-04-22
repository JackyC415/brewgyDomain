<?php 

function setCookieOnPage($cookieName) {
	//if cookie hasn't been set on a specific page, set it for 5 mins
	if(!isset($_COOKIE['productVisited'])) {                
        setcookie("productVisited", $cookieName, time()+300);
    } else {
    //otherwise when user visits page again, concatenate string for array display purposes
    setcookie("productVisited", $_COOKIE['productVisited']." ".$cookieName, time()+300);
    } 
}

?>