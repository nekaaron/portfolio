<?php
    $con = mysqli_connect('localhost','root','','wypozyczalnia4gc');

    $kwe = 'select s.Marka, s.Model, s.rok_produkcji, w.Data_wypozycz from samochody s, wypozyczenia w where s.ID_samochodu = w.ID_samochodu and rok_produkcji Like "2000"';
    $q_kwe = mysqli_query($con,$kwe);

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>WYPOŻYCZALNIA SAMOCHODÓW</title>
    <link rel="stylesheet" href="samochody.css">
</head>
<body>
    <div id="menu">
        <a href="samochody.php">Strona startowa</a>
        <a href="volkswagen.php">Samochody Volkswagen</a>
        <a href="audi.php">Samochody Audi</a>
        <a href="skoda.php">Samochody Skoda</a>
    </div>
    <div id="logo">
        <h2>WYPOŻYCZALNIA SAMOCHODÓW</h2>
    </div>
    <div id="lewy">
        <!-- SKRYPT NR 1 -->
        <?php
           while($fa_kwe = mysqli_fetch_assoc($q_kwe)){
                echo "<br/><b>Marka: ".$fa_kwe['Marka'].". Model: ".$fa_kwe['Model'].". <br/></b>";
                echo "Rok produkcji: ".$fa_kwe['rok_produkcji'].". Data wypożyczenia: ".$fa_kwe['Data_wypozycz'].". <br/><br/><hr>";
           }
         
           
      

          
        ?>
    </div>
    <div id="prawy">
        <h1>AUTA</h1>
        <a href="mailto:wypozyczalnia@wp.pl">Napisz do Nas</a>
        <img src="auto.png" alt="auto w kolorze czerwonym">
    </div>
    <footer><h2>Stronę o wypożyczalni przygotował: 03272308919</h2></footer>
</body>
</html>