<!DOCTYPE html>
<html lang="pl">

    <head>
        <meta charset="utf-8"/>
        <title>Opinie Klientów</title>
        <link rel="stylesheet" href="styl3.css"/>
    </head>

    <body>
        <header>
            <h1>Hurtownia spożywcza</h1>
        </header>

        <div id="glowny">
            <h2>Opinie Naszych Klientów</h2>
            <?php
                $p=mysqli_connect('localhost','root','','hurtownia');
                $zapytanie="SELECT k.zdjecie,k.imie , o.opinia FROM klienci k,opinie o WHERE o.klienci_id=k.id AND k.typy_id IN (2,3)";
                $wynik=mysqli_query($p,$zapytanie);

                while(($r=mysqli_fetch_array($wynik))!=NULL)
                {
                    echo "<div class='opinia'><img src='".$r['zdjecie']."' alt='klient'><q>".$r['opinia']."</q><h4>".$r['imie']."</h4></div>";
                }
            ?>

        </div>

        <footer id="stopka1">
            <h3>Współpracuj z nami</h3>
            <a href="http://sklep.pl">Sklep 1</a>
        </footer>

        <footer id="stopka2">
            <h3>Nasi top Klienci</h3>
            <ol>
                <?php
                $z="SELECT kl.imie, kl.nazwisko, kl.punkty FROM klienci kl ORDER BY kl.punkty DESC LIMIT 3";
                $w=mysqli_query($p,$z);
                while(($r=mysqli_fetch_array($w))!=NULL)
                {
                    echo "<li>".$r['imie']." ".$r['nazwisko'].", ".$r['punkty']."pkt.</li>";
                }
                ?>
            </ol>
        </footer>

        <footer id="stopka3">
            <h3>Skontaktuj sie</h3>
            <p>Telefon: 111222333</p>
        </footer>

        <footer id="stopka4">
            <h3>Autor : 22072003</h3>
        </footer>

        <?php
           mysqli_close($p);
        ?>

    </body>

</html>