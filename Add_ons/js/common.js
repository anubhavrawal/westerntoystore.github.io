$(function() {
    $(".preload").fadeOut(2000, function() {
        $(".web-content").fadeIn(1000);         
    });
});

<?php session_start();?>

<?php 
	if (isset($_SESSION['user'])){
		echo '<script>' 
		echo '</script>' 
	}

>