<?php 
error_reporting(-1);
//Среди      заданной      последовательности      натуральных      чисел    
//n0 ,n1,...,nm найти  сумму  и  количество  тех  чисел, 
// которые  равны  сумме  факториалов своих цифр.   
$n = 0;
$nm = 488;
$res = 0;
$countvalue = 0;
for($i = $n; $i <= $nm; $i++){
    if(isfactsummnum($i)){
        echo($i."<br>");
        $res += $i;
        $counter++;
    }
}
echo($res." - сумма <br>");
echo($counter." - количество <br>");


function isfactsummnum($value){
    $n = $value;
    $res = 0;
    while($value != 0){
        $num = round(($value / 10 - floor($value / 10))*10);
        $factorial = getfactorial($num);
        $value = floor($value / 10);
        $res += $factorial;
    }
    if($res == $n){
        return true;
    }else{
        return false;
    }
}

function getfactorial($value){
    $factorial = 1;
    for($i =1; $i <= $value; $i++){
        $factorial *= $i;
    }
    return $factorial;
}


