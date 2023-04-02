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
    
            Podaj model samochodu:
            <input type="number" id="modelx">
            skomponuj swój kolor samochodu, podaj RGB: <br/>
            R: <input type="number" id="rx">
            G: <input type="number" id="gx">
            B: <input type="number" id="bx">
            <button onclick='zamow()'>Zamówienie</button>
            <p id="wynik">Wybrany model</p>
            <button onclick='kolor()'>Kolor</button>
       
        
    </div>
    <div id="prawy">
        <h2>Nasza oferta</h2>
        <table>
            <tr>
                <td>Model</td>
                <td>
                    <ol>
                        <li>Passat</li>
                        <li>Golf</li>
                        <li>Amarok</li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td>Możesz zamówić dowolny kolor Volkswagena</td>
            </tr>
        </table>
        <img src="volkswagen.png" alt="auto w kolorze niebieskim">
    </div>
    <footer><h2>Stronę o wypożyczalni przygotował: 032XXXXXXXX</h2></footer>

    <script>
        function zamow(){
        let za_model = document.getElementById('modelx').value;

        if(zm_model == 1){zm_model = 'Passat';}
        else if(zm_model == 2){zm_model = 'Golf';}
        else if(zm_model == 3){zm_model = 'Amarok';}
        else{zm_model = 'inny model Volkswagena';}



            document.getElementbyId('wynik').innerHTML = "Twoje zamówienie to model: "+zm_model;

        }
        function kolor(){
        let rjs = document.getElementById('rx').value;
        let gjs = document.getElementById('gx').value;
        let bjs = document.getElementById('bx').value;
        let rgbjs = "RGB("+rjs+","+gjs+","+bjs+")";
        }
    </script>
</body>
</html>