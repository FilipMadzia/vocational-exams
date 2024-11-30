<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Dzisiejsze promocje naszego sklepu</h1>
    </header>

    <main>
        <section id="blok-lewy">
            <h2>Taniej o 30%</h2>
            <ol>
                <!-- Skrypt 1 -->
            </ol>
        </section>
        <section id="blok-srodkowy">
            <h2>Sprawdź cenę</h2>
            <form action="index.php" method="post">
                <select name="towar">
                    <option value="Gumka do mazania">Gumka do mazania</option>
                    <option value="Cienkopis">Cienkopis</option>
                    <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                    <option value="Markery 4 szt.">Markery 4 szt.</option>
                </select>

                <button type="submit" name="submit">SPRAWDŹ</button>
            </form>
            
            <div id="wynik">
                <!-- Skrypt 2 -->
            </div>
        </section>
        <section id="blok-prawy">
            <h2>Kontakt</h2>
            <p>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
            <img src="promocja.png" alt="promocja" />
        </section>
    </main>

    <footer>
        <h4>Autor strony: Filip Madzia 30.11.2024</h4>
    </footer>
</body>
</html>