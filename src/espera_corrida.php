<?php

    require __DIR__ . '/bootstrap.php';

    date_default_timezone_set("America/Sao_Paulo");
    $cur_time=date("Y-m-d H:i:s");
    $duration='+15 minutes';
    $toPrint=date('H:i', strtotime($duration, strtotime($cur_time)));
?>

<html>
<form action="index.php" method="post">
    <p>Previsão de chegada as :<?php echo $toPrint . " horas."; ?></p>	
	<section>
        <button type="submit" name="btnCancela">Cancelar Corrida</button>
    </section>
    <br>
    <?php echo "Input json: " . get_json($_POST)?>
</form>
    
</html>
