<?php 
function sumDivisores($num){
    $sum=0;
    if (is_numeric($num)) {
        for ($i=0; $i <= $num; $i++) { 
            if ($num%$i==0) {
                $sum+=$i;
            }
        }
    return $sum;
    }else{
        throw new Exception('El dato ingresado debe ser un numero');
        // return 0;
    }
}
try{
    echo sumDivisores(10);
}
catch(Exception $e){
    echo $e->getMessage();
}
catch(ArithmeticError $ob){
    echo $ob->getMessage().'<br> Revise la division desde 1';
}

echo "<br> <br>";
echo 'Ultima linea del codigo';
?>