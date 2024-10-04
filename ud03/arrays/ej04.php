<?php
/** 
 * Un restaurante dispone de una carta de 3 primeros, 5 segundos y 3 postres.
 * Almacenar información incluyendo foto y mostrar los menús disponibles. Mostrar el
 * precio del menú suponiendo que éste se calcula sumando el precio de cada uno de
 * los platos incluidos y con un descuento del 20 %.
 */
$primeros = array(
    array("nombre" => "Ensalada", "precio" => 5, "imagen" => "ensalada.png"),
    array("nombre" => "Sopa", "precio" => 6, "imagen" => "sopa.png"),
    array("nombre" => "Gazpacho", "precio" => 7, "imagen" => "gazpacho.png")
);

$segundos = array(
    array("nombre" => "Pollo asado", "precio" => 12, "imagen" => "pollo.jpg"),
    array("nombre" => "Pescado a la plancha", "precio" => 14, "imagen" => "pescado.jpg"),
    array("nombre" => "Ternera", "precio" => 16, "imagen" => "ternera.jpg"),
    array("nombre" => "Pasta", "precio" => 10, "imagen" => "pasta.jpg"),
    array("nombre" => "Hamburguesa", "precio" => 11, "imagen" => "hamburguesa.jpg")
);

$postres = array(
    array("nombre" => "Helado", "precio" => 4, "imagen" => "helado.jpg"),
    array("nombre" => "Tarta de chocolate", "precio" => 5, "imagen" => "tarta.jpg"),
    array("nombre" => "Fruta", "precio" => 3, "imagen" => "fruta.jpg")
);
echo "<h3>Primer Plato</h3>";
foreach ($primeros as $plato) {
    echo $plato["nombre"] . " - Precio: $" . $plato["precio"] . "<br><img src='./ej04_imgs/" . $plato["imagen"] . "' alt='" . $plato["nombre"] . "' width='150'><br><br>";
};

echo "<h3>Segundos Plato</h3>";
foreach ($segundos as $plato) {
    echo $plato["nombre"] . " - Precio: $" . $plato["precio"] . "<br><img src='./ej04_imgs/" . $plato["imagen"] . "' alt='" . $plato["nombre"] . "' width='150'><br><br>";
};
