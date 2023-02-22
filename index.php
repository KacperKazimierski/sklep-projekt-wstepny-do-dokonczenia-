<?php
$categories = array(
    "Procesory" => array(
        "name" => "Procesory",
        "products" => array(
            array("name" => "Procesor AMD Ryzen 5 3600 AM4", "price" => 999),
            array("name" => "Procesor Intel Core i3-10100F Comet Lake 3.6GHz LGA1200 Box", "price" => 345),
            array("name" => "Intel Core i7-13700KF BOX (BX8071513700KF)", "price" => 2099),
        ),
    ),
    "Karty graficzne" => array(
        "name" => "Karty graficzne",
        "products" => array(
            array("name" => "ASUS GeForce GT 730 2GB 64bit GDDR5 GT730-SL-2GD5-BRK", "price" => 350),
            array("name" => "Gigabyte GeForce GTX 1650 OC 4GB GDDR5 128Bit PCI-E (GV-N1650OC-4GL)", "price" => 935),
            array("name" => "MSI RTX 3060 Ti VENTUS 2X OC 8GB LHR GDDR6", "price" => 2175),
        ),
    ),
    "Płyty główne" => array(
        "name" => "Płyty główne",
        "products" => array(
            array("name" => "Płyta główna ASRock B450 PRO4 R2.0 AM4", "price" => 395),
            array("name" => "Płyta główna ASRock X570 PRO4 AM4", "price" => 819),
            array("name" => "Płyta główna Gigabyte A520M AORUS ELITE AM4", "price" => 345),
        ),
    ),
    "Dyski SSD" => array(
        "name" => "Dyski SSD",
        "products" => array(
            array("name" => "Dysk ADATA Ultimate SU650 SSD 2,5 512GB SATA 520/450MBs TLC 3D ASU650SS-512GT-R", "price" => 135),
            array("name" => "Dysk Crucial SSD BX500 2TB SATA 2.5 7mm CT2000BX500SSD1", "price" => 599),
            array("name" => "Dysk GOODRAM SSD CL100 G3 2,5 480GB SATA SSDPR-CL100-480-G3", "price" => 120),
        ),
    ),

    "Dyski HDD" => array(
        "name" => "Dyski HDD",
        "products" => array(
            array("name" => "Seagate BarraCuda 1TB SATAIII (ST1000DM010)", "price" => 189),
            array("name" => "WD Black WD1003FZEX 1TB SATA III", "price" => 355),
            array("name" => "WD Blue 1TB SATA III (WD10EZEX)", "price" => 219),
        ),
    ),
);
function generate_category_pages($categories) {
    foreach ($categories as $category) {
        echo '<h2>' . $category['name'] . '</h2>';
        echo '<ul>';
        foreach ($category['products'] as $product) {
            echo '<li>';
            echo '<h3>' . $product['name'] . '</h3>';
            echo '<p>Cena: ' . $product['price'] . ' zł</p>';
            echo '</li>';
        }
        echo '</ul>';
    }
}
?>
 

 <!DOCTYPE html>
<html>
<head>
    <title>PCP - PC Parts online shop</title>
</head>
<body>
<h1 text align="center" >PCP - PC Parts online shop</h1>
<ul>
    <h2><a href="index.php">Strona główna</a></h2>
    <h3><a href="?category=Procesory">Procesory</a></h3>
    <h3><a href="?category=Karty%20graficzne">Karty graficzne</a></h3>
    <h3><a href="?category=Płyty%20główne">Płyty główne</a></h3>
    <h3><a href="?category=Dyski%20SSD">Dyski SSD</a></h3>
    <h3><a href="?category=Dyski%20HDD">Dyski HDD</a></h3>
</ul>
<hr>

<?php

if (isset($_GET['category'])) {
    $category_name = $_GET['category'];
    if (array_key_exists($category_name, $categories)) {
        generate_category_pages(array($categories[$category_name]));
    } else {
        echo '<p>Nie znaleziono kategorii o nazwie ' . $category_name . '.</p>';
    }
} else {
    echo '<p>Wybierz kategorię, aby zobaczyć listę produktów.</p>';
}
?>
</body>
</html>