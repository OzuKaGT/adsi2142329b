<?php 

//--------------------------------------- S U M A ------------------------------------

if (isset($_POST['suma'])){
    $digS=$_POST['Digitos'];

    function plus($digS){
        $sum=0;
        for ($i=0; $i < count($digS); $i++) { 
            $sum+=$digS[$i];
        }
        return $sum;
    }

    $numS=array();

    for ($i=0; $i < $digS; $i++) { 
        $numS[$i]=rand(0,$digS);
    }

    for ($i=0; $i < $digS; $i++) { 
        echo $numS[$i]. ',';
    }
    echo '<br> La suma de los numeros es ='. plus($numS).'<br>';
    echo '<form action="../Vista/Index.php">
            <input type="submit" value="Volver al inicio">
          </form>';
}

//----------------------------------------- M A X I M O -----------------------------------------------------

if (isset($_POST['maximo'])){
    $digS=$_POST['Digitos'];

    function plus($digS){
        $sum=0;
        for ($i=0; $i < count($digS); $i++) { 
            $sum+=$digS[$i];
        }
        return $sum;
    }

    $numS=array();

    for ($i=0; $i < $digS; $i++) { 
        $numS[$i]=rand(0,$digS);
    }

    for ($i=0; $i < $digS; $i++) { 
        echo $numS[$i]. ',';
    }
    echo '<br> La suma de los numeros es ='. plus($numS).'<br>';
    echo '<form action="../Vista/Index.php">
            <input type="submit" value="Volver al inicio">
          </form>';
}


?>