function cart_updt(){
	var qnt = document.querySelectorAll("[id='quantity']");
	var price = document.querySelectorAll("[id='u_price']");
	var priceT = []
	for(var i = 0; i < qnt.length; i++){
	num1 = Number(qnt[i].value)
	num2 = Number(price[i].innerHTML)
	priceT.push(num1*num2)
	}
	var apply = document.querySelectorAll("[id='price']");
	for(var i = 0; i < apply.length; i++){
		apply.innerHTML = priceT[i]
		apply.innerHTML = priceT[i]
		document.getElementById('price').innerHTML = priceT[i]
		console.log(priceT[i])
	}

	var ele= document.getElementsByClassName("t_price");
    for(var i=0;i<ele.length;i++)
    {
      ele[i].innerHTML= "$"+priceT[i];
      console.log(priceT[i])
    }

    var sum = priceT.reduce(function(a, b) { return a + b; }, 0);
    if (sum!=0){
	    document.getElementById("subtotal").innerHTML = "$" + sum.toFixed(2)
	    document.getElementById("shipping").innerHTML = '$25'
	    var n_sum = sum + 25
	    document.getElementById("total").innerHTML = "$" + n_sum.toFixed(2)
	}

}

window.onload = function T_tmp(){
	cart_updt();
};

/*
$('#quantity').on('input', function () {
    var value = this.value;
    /*
    
    var sanitized = $(this).val().replace(/[^-]/g, '');
  	// Update value
  	$(this).val(sanitized);
    
    if (value !== '') {
        value = parseInt(value);
        
        if (value < 1)
            this.value = 1;
        else if (value > 10)
            this.value = 10;
    }
    
})*/

$('#checkoutBtn').on('click', function () {
	$("#payment").val($("#total").html().slice(1,$("#total").html().length));
	$("#payment-button-amount").html("Pay $"+ $("#payment").val());
});

$('#payment-button').on('click', function () {
	alert("Order Placed!!!")
});

