<?php
$polaczenie = mysqli_connect('localhost', 'root', '', 'biuro');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>BIURO TURYSTYCZNE - Kasamba</h1>
    </header>

    <content>
        <section id="blok-z-danymi">
            <h3>Wycieczki, na które są wolne miejsca</h3>
            <ul>
                <?php
                $zapytanie = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna;";

                $wynikZapytania = mysqli_query($polaczenie, $zapytanie);

                while($dane = mysqli_fetch_array($wynikZapytania))
                {
                    echo "<li>" . $dane["id"] . " dnia " . $dane["dataWyjazdu"] . " jedziemy do " . $dane["cel"] . ", cena: " . $dane["cena"] . "</li>";
                }
                ?>
            </ul>
        </section>
        <section id="blok-lewy">
            <h2>Bestselery</h2>
            <table>
                <tr>
                    <td>Wenecja</td>
                    <td>kwiecień</td>
                </tr>
                <tr>
                    <td>Londyn</td>
                    <td>lipiec</td>
                </tr>
                <tr>
                    <td>Rzym</td>
                    <td>wrzesień</td>
                </tr>
            </table>
        </section>
        <section id="blok-srodkowy">
            <h2>Nasze zdjęcia</h2>
            <?php
            $zapytanie = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;";

            $wynikZapytania = mysqli_query($polaczenie, $zapytanie);

            while($dane = mysqli_fetch_array($wynikZapytania))
            {
                echo '<img src="' . $dane["nazwaPliku"] . '" alt="' . $dane["podpis"] . '" />';
            }
            ?>
        </section>
        <section id="blok-prawy">
            <h2>Skontaktuj się</h2>
            <a href="email:turysta@wycieczki.pl">napisz do nas</a>
            <p>telefon: 111222333</p>
        </section>
    </content>

    <footer>
        <p>Stronę wykonał: Filip Madzia 23.11.2024</p>
    </footer>
</body>
</html>

<?php
mysqli_close($polaczenie);
?>