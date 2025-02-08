<?php
$connection = mysqli_connect('localhost', 'root', '', 'dane3');

if(isset($_POST["submit"]) && isset($_POST["film-id"]))
{
    $filmId = $_POST["film-id"];

    $query = "DELETE FROM produkty WHERE produkty.id = '$filmId';";

    mysqli_query($connection, $query);
}
?>

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
            <?php
            $query = "SELECT produkty.id, produkty.nazwa, produkty.opis, produkty.zdjecie FROM produkty WHERE produkty.id IN (18, 22, 23, 25);";
            $query_result = mysqli_query($connection, $query);

            while($row = mysqli_fetch_array($query_result))
            {
                ?>
                <div class="film-block">
                    <h4><?php echo $row["id"] . ". " . $row["nazwa"];?></h4>
                    <img src="<?php echo $row["zdjecie"];?>" alt="film" />
                    <p><?php echo $row["opis"];?></p>
                </div>
                <?php
            }
            ?>
        </section>
        <section class="lists">
            <h3>Filmy fantastyczne</h3>
            <!-- Skrypt 2 -->
            <?php
            $query = "SELECT produkty.id, produkty.nazwa, produkty.opis, produkty.zdjecie FROM produkty WHERE produkty.Rodzaje_id = 12;";
            $query_result = mysqli_query($connection, $query);

            while($row = mysqli_fetch_array($query_result))
            {
                ?>
                <div class="film-block">
                    <h4><?php echo $row["id"] . ". " . $row["nazwa"];?></h4>
                    <img src="<?php echo $row["zdjecie"];?>" alt="film" />
                    <p><?php echo $row["opis"];?></p>
                </div>
                <?php
            }
            ?>
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

<?php
mysqli_close($connection);
?>