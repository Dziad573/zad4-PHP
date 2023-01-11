<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header id="baner">
        BIURO PODRÓŻY
    </header>

    <section id="kontakt">
        <h2>KONTAKT</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>555666777</p>
    </section>

    <main id="galeria">
        <h2>GALERIA</h2>

        <?php
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "egzamin3";
            $conn = mysqli_connect($host, $user, $pass, $db);
            $q = "SELECT nazwaPliku, podpis FROM `zdjecia` ORDER BY podpis ASC;";
            $res = mysqli_query($conn, $q);

            while($row = mysqli_fetch_row($res)){
                echo "<img src='".$row[0]."' alt'".$row[1]."'>";
            };

        ?>

    </main>

    <section id="promocje">
        <h2>PROMOCJE</h2>
        <table>
            <tr>
                <td>Jesień</td>
                <td>Grupa 4+</td>
                <td>Grupa 10+</td>
            </tr>
            <tr>
                <td>5%</td>
                <td>10%</td>
                <td>15%</td>
            </tr>
        </table>
    </section>

    <section id="lista">
        <h2>LISTA WYCIECZEK</h2>

        <?php
            $q2 = "SELECT id, dataWyjazdu, cel, cena FROM `wycieczki` WHERE dostepna = 1;";
            $res2 = mysqli_query($conn, $q2);
            while($row2 = mysqli_fetch_row($res2)){
                echo $row2[0].". ".$row2[1].", ".$row2[2].", cena: ".$row2[3]."<br>";
            };

            mysqli_close($conn);
        ?>

    </section>

    <footer id="stopka">
        <p>Stronę wykonał: 000000000000</p>
    </footer>

</body>
</html>