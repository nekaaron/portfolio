<?php
    $con = mysqli_connect("localhost", "root", "", "wybory4gc");
    // $query = mysqli_query($con, "INSERT INTO kandydaci values(NULL, )");
    $query_kandydaci = mysqli_query($con, "select imie,nazwisko,ile from kandydaci;");
    $kandydaci_fetch_all = mysqli_fetch_all($query_kandydaci);

    $query_wyborcy = mysqli_query($con, "select imie,nazwisko from wyborcy;");
    $wyborcy_fetch_all = mysqli_fetch_all($query_wyborcy); 
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wybory.css" />
    <title>wybory</title>
</head>

<body>
    <div id="blok_lewy">
        <h2>KANDYDACI</h2>
        <table class="table_format">
            <tr>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Ile punktów</th>
            </tr>
            <?php
                for ($i=0; $i < count($kandydaci_fetch_all) ; $i++) { 
                    echo "<tr>";
                    for ($i2=0; $i2 < count($kandydaci_fetch_all[$i]); $i2++) { 
                        echo"<td>".$kandydaci_fetch_all[$i][$i2]."</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
    
    <div id="blok_prawy">
        <h2>WYBORCY</h2>
        <table class="table_format">
            <tr>
                <th>Imie</th>
                <th>Nazwisko</th>
            </tr>
            <?php
                for ($i=0; $i < count($wyborcy_fetch_all) ; $i++) { 
                    echo "<tr>";
                    for ($i2=0; $i2 < count($wyborcy_fetch_all[$i]); $i2++) { 
                        echo"<td>".$wyborcy_fetch_all[$i][$i2]."</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>

    <div id="blok_dolny">
        <form method="POST" action="#">
            <input type='text' name='imie' placeholder="imię">
            <input type='text' name='nazwisko' placeholder="nazwisko">
            <button type="submit" name="dodaj_kandydata">Dodaj kandydatów</button>
        </form>
        </br>
        <form method="POST" action="#">
            <select>
                <?php
                    for ($i=0; $i < count($kandydaci_fetch_all); $i++) { 
                        echo"<option>".$kandydaci_fetch_all[$i][0][0].$kandydaci_fetch_all[$i][1][0]."</option>";
                    }
                ?>
            </select>
            <button type="submit" name="dodaj_glos">Oddaj Głos</button>
        </form>
    </div>
</body>

</html>