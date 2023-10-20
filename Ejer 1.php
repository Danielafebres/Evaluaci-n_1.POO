<?php

//daniela febres 30652769
class Rectangulo {
    public $largo = 1.0;
    public $ancho = 1.0;

    public function calcularPerimetro() {
        return 2 * ($this->largo + $this->ancho);
    }

    public function calcularArea() {
        return $this->largo * $this->ancho;
    }
}

$rectangulo = new Rectangulo();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rectangulo->largo = floatval($_POST["largo"]);
    $rectangulo->ancho = floatval($_POST["ancho"]);
}
?>

<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
    
    <form method="post">
        Largo: <input type="text" name="largo" value="<?php echo $rectangulo->largo; ?>"><br>
        Ancho: <input type="text" name="ancho" value="<?php echo $rectangulo->ancho; ?>"><br>
        <input type="submit" value="Calcular">
    </form>
    
    <h2>Resultados:</h2>
    <p>Largo: <?php echo $rectangulo->largo; ?></p>
    <p>Ancho: <?php echo $rectangulo->ancho; ?></p>
    <p>Perímetro: <?php echo $rectangulo->calcularPerimetro(); ?></p>
    <p>Área: <?php echo $rectangulo->calcularArea(); ?></p>
</body>
</html>
