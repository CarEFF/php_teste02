<?php 

$nameCliente = $_POST['nameCliente'];
$valueProduct = $_POST['valueProduct'];

echo $nameCliente;




if ($valueProduct > 250) {
	echo $nameCliente "a sua compra foi de" $valueProduct ;
}else{
	echo  $nameCliente "a sua compra foi de" valueProduct;
}