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
    $digMx=$_POST['Digitos'];

    function mayor($digMx){
        $maxi=0;
        for ($i=0; $i < count($digMx); $i++) { 
            $maxi= max($digMx);
        }
        return $maxi;
    }

    $numMx=array();

    for ($i=0; $i < $digMx; $i++) { 
        $numMx[$i]=rand(0,$digMx);
    }

    for ($i=0; $i < $digMx; $i++) { 
        echo $numMx[$i]. ',';
    }
    echo '<br> El numero mayor es ='. mayor($numMx).'<br>';
    echo '<form action="../Vista/Index.php">
            <input type="submit" value="Volver al inicio">
          </form>';
}


//----------------------------------------- M I N I M O  -----------------------------------------------------

if (isset($_POST['minimo'])){
    $digMn=$_POST['Digitos'];

    function menor($digMn){
        $mini=0;
        for ($i=0; $i < count($digMn); $i++) { 
            $mini= min($digMn);
        }
        return $mini;
    }

    $numMn=array();

    for ($i=0; $i < $digMn; $i++) { 
        $numMn[$i]=rand(0,$digMn);
    }

    for ($i=0; $i < $digMn; $i++) { 
        echo $numMn[$i]. ',';
    }
    echo '<br> El numero menor es ='. menor($numMn).'<br>';
    echo '<form action="../Vista/Index.php">
            <input type="submit" value="Volver al inicio">
          </form>';
}
?>