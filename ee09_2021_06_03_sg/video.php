<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <section id="headers">
        <header id="left-header">
            <h1>Internetowa wypożyczalnia filmów</h1>
        </header>
        <header id="right-header">
            <table>
                <tr>
                    <td>Kryminał</td>
                    <td>Horror</td>
                    <td>Przygodowy</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>30</td>
                    <td>20</td>
                </tr>
            </table>
        </header>
    </section>

    <main>
        <section class="lists">
            <h3>Polecamy</h3>
            <!-- Skrypt 1 -->
        </section>
        <section class="lists">
            <h3>Filmy fantastyczne</h3>
            <!-- Skrypt 2 -->
        </section>
    </main>

    <footer>
        <form action="video.php" method="post">
            <label for="film-id">Usuń film nr.:</label>
            <input type="number" name="film-id" id="film-id">

            <input type="submit" name="submit" value="Usuń film">
        </form>

        <span>Stronę wykonał: <a href="mailto:ja@poczta.com">Filip Madzia 10.12.2024</a></span>
    </footer>
</body>
</html>