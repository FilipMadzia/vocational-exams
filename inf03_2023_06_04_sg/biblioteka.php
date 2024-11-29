<?php
$polaczenie = mysqli_connect('localhost', 'root', '', 'biblioteka');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Biblioteka publiczna</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Biblioteka w Książkowicach Wielkich</h1>
    </header>

    <main>
        <section id="blok-lewy">
            <h3>Polecamy dzieła autorów</h3>
            <ol>
                <!-- Skrypt 1 -->
                <?php
                $zapytanie = "SELECT autorzy.imie, autorzy.nazwisko FROM autorzy ORDER BY autorzy.nazwisko ASC;";

                $wynik_zapytania = mysqli_query($polaczenie, $zapytanie);

                while($dane = mysqli_fetch_array($wynik_zapytania))
                {
                    echo "<li>" . $dane["imie"] . " " . $dane["nazwisko"] . "</li>";
                }
                ?>
            </ol>
        </section>
        <section id="blok-srodkowy">
            <h3>ul. Czytelnicza 25, Książkowice&nbsp;Wielkie</h3>
            <p><a href="mailto:sekretariat@biblioteka.pl">Napisz do nas</a></p>
            <img src="biblioteka.png" alt="książki" />
        </section>
        <section id="blok-prawy">
            <section id="blok-prawy-gorny">
                <h3>Dodaj czytelnika</h3>
                <form action="biblioteka.php" method="post">
                    <label for="imie">imię:</label>
                    <input type="text" name="imie" id="imie">
                    <br />

                    <label for="nazwisko">nazwisko:</label>
                    <input type="text" name="nazwisko" id="nazwisko">
                    <br />

                    <label for="symbol">symbol:</label>
                    <input type="number" name="symbol" id="symbol">
                    <br />

                    <button type="submit" name="submit">DODAJ</button>
                </form>
            </section>
            <section id="blok-prawy-dolny">
                <!-- Skrypt 2 -->
                <?php
                if(isset($_POST["submit"]))
                {
                    $imie = $_POST["imie"];
                    $nazwisko = $_POST["nazwisko"];
                    $symbol = $_POST["symbol"];

                    echo "Czytelnik " . $imie . " " . $nazwisko . " został(a) dodany do bazy danych";

                    $zapytanie = "INSERT INTO czytelnicy(imie, nazwisko, kod) VALUES('$imie', '$nazwisko', '$symbol');";

                    mysqli_query($polaczenie, $zapytanie);
                }
                ?>
            </section>
        </section>
    </main>

    <footer>
        <p>Projekt strony: Filip Madzia 29.11.2024</p>
    </footer>
</body>
</html>

<?php
mysqli_close($polaczenie);
?>