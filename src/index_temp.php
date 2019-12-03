
<?php
	if($_POST['action'] == 'call_this') {
		$statement = $pdo->prepare('INSERT INTO cart (id, name, src, price, stock, soldby) VALUES (?, ?, ?, ?)');
	    $statement->execute([$row['id'], $row['name'], $row['src'], $row['price'], $row['stock'], $row['soldby']]);
	    
	}
	echo "Added to cart";
?>