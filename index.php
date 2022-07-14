<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skaiciuotuvas</title>
</head>
<body>
<!-- 1. Užduotis "Skaičiuotuvas". Papildoma.

Sukurti skaičiuotuvą. Skaičiuotuve įvedami du skaičiai į du skirtingus input.
Aritmetinis veiksmas perduodamas per GET. Pvz.: sukuriamas trečias input, jei tame input yra + ženklas,
jis perduodamas per GET, ir PHP kode if tikrina, koks aritmetinis veiksmas buvo perduotas.
Rezultatas išvedamas į div. -->
    <form method="GET" action="index.php">
        <input id="skaicius1" class="skaicius1" name="skaicius1" value="<?php echo isset($_GET["skaicius1"]) ? $_GET["skaicius1"] : ""  ; ?>">
        <input id="veiksmas" class="veiksmas" name="veiksmas" value="<?php echo isset($_GET["veiksmas"]) ? $_GET["veiksmas"] : ""  ; ?>">
        <input id="skaicius2" class="skaicius2" name="skaicius2" value="<?php echo isset($_GET["skaicius2"]) ? $_GET["skaicius2"] : ""  ; ?>">
        <button name="patvirtinti" type="submit">Skaiciuoti</button>
    </form>

    <div>
        <?php 
        if(isset($_GET["patvirtinti"])) {
            $skaicius1 = $_GET["skaicius1"];
            $skaicius2 = $_GET["skaicius2"];
        
            $suma = $skaicius1 + $skaicius2;
        
            echo $suma;
        };
        ?>
    </div>
</body>
</html>