function cart_updt(val1){
	subtotal = [];
	items_l =[]
	/*val1 = document.getElementById("quantity").value;
	temp = document.getElementById("price").innerHTML;

	var val2 =  temp.substr(1);

	console.log("The val1 is: " + val1 );
	console.log("The val2 is: " + val2 );

	nval1 = Number(val1);
	nval2 = Number(val2,-2);
	console.log("The nval1 is: " + nval1 );
	console.log("The nval2 is: " + nval2 );

	mul = nval1*nval2;
	subtotal.push(mul);
	console.log(subtotal);*/
	var elms = document.querySelectorAll("[id='quantity']");
	for(var i = 0; i < elms.length; i++) 
		items_l.push(elms[i].value);

	console.log(items_l)
}

var qnt = document.querySelectorAll("[id='quantity']");
var price = document.querySelectorAll("[id='price']");
for(var i = 0; i < elms.length; i++) {
	var1 = elms[i].value
	
}
		

