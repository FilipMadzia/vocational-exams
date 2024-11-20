<?php
    echo "test";
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>Forum wielicieli psów</h1>
    </header>

    <main>
        <section id="blok-lewy">
            <img src="obraz.jpg" alt="foksterier" />
        </section>
        <section>
            <section id="blok-prawy-gorny">
                <h2>Zapisz się</h2>
                <form method="POST">
                    <label for="login">login: </label>
                    <input type="text" name="login" id="login">
                    <br />

                    <label for="haslo">hasło: </label>
                    <input type="password" name="haslo" id="haslo">
                    <br />
                    <label for="powtorz-haslo">powtórz hasło: </label>
                    <input type="password" name="powtorzHaslo" id="powtorz-haslo">
                    <br />

                    <button type="submit">Zapisz</button>
                </form>
            </section>
            <section id="blok-prawy-dolny">
                <h2>Zapraszamy wszystkich</h2>
                <ol>
                    <li>właścicieli psów</li>
                    <li>weterynarzy</li>
                    <li>tych, co chcą kupić psa</li>
                    <li>tych, co lubią psy</li>
                </ol>
                <a href="regulamin.html">Przyczytaj regulamin forum</a>
            </section>
        </section>
    </main>

    <footer>Stronę wykonał: Filip Madzia 19.11.2024</footer>
</body>
</html>
