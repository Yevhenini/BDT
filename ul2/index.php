<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

  <div class="container ">
    <div class="row">
        <div class="col-md-12 color1 text-center">
            <h1>Nadpis</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum beatae ullam, soluta veniam labore quasi aperiam blanditiis nihil rem ex molestias suscipit esse doloribus quidem at tenetur dignissimos quia reprehenderit!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 color2 text-center">
            
                <?php
                $dni = ["Pondelok","Utorok","Streda","Stvrtok","Piatok","Nedela","Subota"];
                $studenty = array("Tereza","Yevhenii","Jakub","Simon","Martin","Filip");
                echo "<h1> Zoznam Studentov</h1>";
                foreach ($studenty as $x ) {
                    echo $x.'<br>';
                }
                echo "<h1> Dni</h1>";
                sort($dni);
                foreach ($dni as $b) {
                  echo $b.'<br>';
                }
                ?>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 color3 text-center">
            <h1>R3</h1>
            <?php
                for ($i=0; $i <= 999 ; $i++) { 
                    echo $i."<br>";
                }

            ?>
        </div>
        </div>


  </div>  
</body>
</html>