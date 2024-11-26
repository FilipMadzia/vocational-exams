<?php
$polaczenie = mysqli_connect("localhost", "root", "", "sklep");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hurtownia z najlepszymi cenami</h1>
    </header>

    <main>
        <section id="blok-lewy">
            <h2>Nasze ceny</h2>
            
            <table>
                <tr>
                    <?php
                    $zapytanie = "SELECT nazwa, cena FROM towary LIMIT 4;";

                    $wynik_zapytania = mysqli_query($polaczenie, $zapytanie);

                    while($dane = mysqli_fetch_array($wynik_zapytania))
                    {
                        echo
                            "<tr>" .
                                "<td>" . $dane["nazwa"] . "</td>" .
                                "<td>" . $dane["cena"] . "</td>" .
                            "</tr>";
                    }
                    ?>
                </tr>
            </table>
        </section>
        <section id="blok-srodkowy">
            <h2>Koszt zakupów</h2>

            <form action="index.php" method="post">
                <label for="artykul">wybierz artykuł</label>
                <select name="artykul" id="artykul">
                    <option value="zeszyt-60-kartek">Zeszyt 60 kartek</option>
                    <option value="zeszyt-32-kartki">Zeszyt 32 kartki</option>
                    <option value="cyrkiel">Cyrkiel</option>
                    <option value="linijka-30-cm">Linijka 30 cm</option>
                </select>
                <br />

                <label for="ilosc">liczba sztuk</label>
                <input type="number" name="ilosc" id="ilosc">

                <br />

                <button type="submit">OBLICZ</button>
            </form>
            <!-- Skrypt 2 -->
        </section>
        <section id="blok-prawy">
            <h2>Kontakt</h2>
            <img src="zakupy.png" alt="hurtownia">
            <p>e-mail: <a href="mailto:hurt@poczta2.pl">hurt@poczta2.pl</a></p>
        </section>
    </main>

    <footer>
        <h4>Witrynę wykonał: Filip Madzia 26.11.2024</h4>
    </footer>
</body>
</html>

<?php
mysqli_close($polaczenie);
?>