function myAjax() {
	$.ajax({
	   type: "POST",
	   url: 'src/index.php',
	   data:{action:'call_this'},
	   success:function(html) {
	     alert(html);
	   }

	});
 }