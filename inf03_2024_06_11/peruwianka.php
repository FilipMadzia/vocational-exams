<?php
$connection = mysqli_connect('localhost', 'root', '', 'hodowla');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>

    <main>
        <section id="lewy">
            <section id="lewy-gorny">
                <a href="peruwianka.php">Rasa Peruwianka</a>
                <a href="american.php">Rasa American</a>
                <a href="crested.php">Rasa Crested</a>
            </section>
            <section id="lewy-dolny">
                <img src="peruwianka.jpg" alt="Świnka morska rasy peruwianka">

                <!-- Skrypt 2 -->
                <?php
                $query = mysqli_query($connection, 'SELECT DISTINCT swinki.data_ur, swinki.miot, rasy.rasa FROM swinki LEFT JOIN rasy ON swinki.rasy_id = rasy.id WHERE swinki.rasy_id = 1;');
                $row = mysqli_fetch_array($query);
                ?>

                <h2>Rasa: <?php echo $row['rasa']; ?></h2>

                <p>Data urodzenia: <?php echo $row['data_ur']; ?></p>
                <p>Oznaczenie miotu: <?php echo $row['miot']; ?></p>

                <hr>
                <h2>Świnki w tym mioce</h2>

                <!-- Skrypt 3 -->
                <?php
                $query = mysqli_query($connection, 'SELECT swinki.imie, swinki.cena, swinki.opis FROM swinki WHERE swinki.rasy_id = 1;');
                while($row = mysqli_fetch_array($query))
                {
                ?>
                    <h3><?php echo $row['imie']; ?> - <?php echo $row['cena']; ?> zł</h3>

                    <p><?php echo $row['opis']; ?></p>
                <?php
                }
                ?>
            </section>
        </section>
        <section id="prawy">
            <h3>Poznaj wszystkie rasy świnek morskich</h3>

            <ol>
                <!-- Skrypt 1 -->
                <?php
                $query = mysqli_query($connection, 'SELECT rasy.rasa FROM rasy;');

                while($row = mysqli_fetch_array($query))
                {
                    echo '<li>' . $row['rasa'] . '</li>';
                }
                ?>
            </ol>
        </section>
    </main>

    <footer>
        <p>Stronę wykonał: Filip Madzia</p>
    </footer>
</body>
</html>

<?php
mysqli_close($connection);
?>