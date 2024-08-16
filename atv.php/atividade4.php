<?php
$atv = $_GET['idade'];

if ($atv < 18) {
    echo "Você é uma criança";
    echo "<img src='crianca.jpg'>";
} else if ($atv >= 18 && $atv < 60) {
    echo "<img src='adulto.webp'>";
    echo "Você é adulto";
} else {
    echo "Você é idoso";
    echo "<img src='idoso.jpg'>";
}
?>
