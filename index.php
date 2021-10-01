<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="one-column">
        <div class="header">
            <h1>Calculador de propinas</h1>
        <div class="header">
        <form method="post" action="processes/calculo.proc.php">
            <input type="num" name="coste" placeholder="total de la cuenta.."><br/>
            <select name="servicio">
                <option value="0.3">30% Excelente</option>
                <option value="0.2">20% Bueno</option>
                <option value="0.1"selected>10% Medio</option>
                <option value="0.05">5% Mala</option>
            </select><br/>
            <input type="num" name="personas" placeholder="¿Cuantas personas van a pagar"><br/>
            <input type="submit" value="calcular" name="submit">
        </form> 
        <br/>
        <?php
        $result=$_GET['pito']; 
        if (isset($_GET['pito'])){
        if($result==0){
            echo "<p>Rellena todos los campos<p>";
        }else{
            echo "<p>Se tiene que pagar ",$result," euros por persona<p>";
            }
        }
        ?>
        </div>
    </div>
</body>
</html>