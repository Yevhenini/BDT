<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $zoznam_hry = ["Bloodborn","Dark souls I","Dark souls II","Dark souls III","Elden Ring","Lies of p","Demon's Souls"];
        $zoznam_hry[7]="Nioh";
        
        print_r($zoznam_hry);
        echo "<br>";
       
        $zoznam_hry[count($zoznam_hry)-1]="Nioh 2";
        print_r($zoznam_hry);
        

        $zvierata = ["Európska mačka","Pes","Crocodail","Horse","Lion","Tiger"];
        echo "<br>";

        echo in_array("Tiger",$zvierata);
        ?>
</body>
</html>