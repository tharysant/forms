<?php
$altura = $_POST['num1'];
$peso = $_POST['num2'];
$imc = $peso/($altura*$altura);

if($imc <=18.4){
    echo"Abaixo do peso";
}else if($imc >=18.5 && $imc <25){
    echo"Normal";
}else if($imc >=25 && $imc <=29.9){
    echo"Sobrepeso";
}else{
    echo"Obesidade";
}
echo"<br>IMC:", $imc;
?>

