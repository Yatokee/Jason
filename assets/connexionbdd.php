    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $bdd = "argonaute";

    $conn = mysqli_connect($servername, $username, $password, $bdd);
    if (!$conn) {
        die('Erreur : ' . mysqli_connect_error());
    }
    echo 'Connexion réussi à la bdd argonaute';
    ?>

