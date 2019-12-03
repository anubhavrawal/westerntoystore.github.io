$(function() {
    $(".preload").fadeOut(2000, function() {
        $(".web-content").fadeIn(1000);         
    });
});

/*
 $(document).ready(function() {
    if (!<?php echo isset($_SESSION["sess_user"])?'true':'false'; ?>) {
      document.getElementById('login').style.display = 'none';
    } else {
      alert('work')
      location.href = 'src/about.php';
    }
});*/