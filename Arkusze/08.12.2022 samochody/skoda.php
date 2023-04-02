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
        <h1>Klienci wypożyczalni samochodów</h1>
        <form method="POST" action="klienci.php">
            Nazwisko: <input type="text">
            Imie: <input type="text">
            PESEL: <input type="number">
            <button type="submit">WYCZYŚĆ i WYŚLIJ</button>
        </form>
    </div>
    <div id="prawy">
        <img src="skoda.png" alt="auto w kolorze ciemny brąz">
    </div>
    <footer><h2>Stronę o wypożyczalni przygotował: 03272308919</h2></footer>
</body>
</html>