<?php
function validate_form($polaczenie)
{
    $czyLoginUstawiony = isset($_POST["login"]) && $_POST["login"] != "";
    $czyHasloUstawione = isset($_POST["haslo"]) && $_POST["haslo"] != "";
    $czyPowtorzHasloUstawione = isset($_POST["powtorzHaslo"]) && $_POST["powtorzHaslo"] != "";

    if(!$czyLoginUstawiony || !$czyHasloUstawione || !$czyPowtorzHasloUstawione)
    {
        return "wypełnij wszystkie pola";
    }

    $login = $_POST["login"];
    $haslo = $_POST["haslo"];
    $powtorzHaslo = $_POST["powtorzHaslo"];

    $kwerenda = mysqli_query($polaczenie, "SELECT login FROM uzytkownicy;");

    while($wiersz = mysqli_fetch_array($kwerenda))
    {
        if($wiersz["login"] == $login)
        {
            return "login występuje w bazie danych, konto nie zostało dodane";
        }
    }

    if($haslo != $powtorzHaslo)
    {
        return "hasła nie są takie same, konto nie zostało dodane";
    }

    return "";
}

$polaczenie = mysqli_connect("localhost", "root", "", "psy");

$status = validate_form($polaczenie);

// status równy pustemu ciągu znaków oznacza, że formularz jest poprawny
if($status == "")
{
    $login = $_POST["login"];
    $haslo = sha1($_POST["haslo"]);

    $kwerenda = $polaczenie->prepare("INSERT INTO uzytkownicy(login, haslo) VALUES(?, ?);");

    $kwerenda->bind_param("ss", $login, $haslo);
    $kwerenda->execute();

    $status = "Konto zostało dodane";
}

mysqli_close($polaczenie);
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
                <form method="post">
                <form method="post">
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

                <p><?php echo $status; ?></p>

                <p><?php echo $status; ?></p>
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
