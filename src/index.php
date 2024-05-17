<?php
    require __DIR__ . '/bootstrap.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['btnSubmit'])) {
            get_json($_POST);
        }
    }
?>

<html>
<main>

    <form action="espera_corrida.php" method="post">
        <div>
            <label for="username">Nome Completo:</label>
            <input type="text" name="username" id="username">
        </div>
        <br>
        <div>
            <label for="end_partida">Endereço de partida:</label>
            <input type="text" name="end_partida" id="end_partida">
        </div>
        <br>
        <div>
            <label for="end_destino">Endereço de destino:</label>
            <input type="text" name="end_destino" id="end_destino">
        </div>
        <br>
        <section>
            <button type="submit" name="btnSubmit">Solicitar Corrida</button>
        </section>
		<br>
		<?php echo "Output Json: " . get_json($_POST)?>
    </form>

</main>


</html>
