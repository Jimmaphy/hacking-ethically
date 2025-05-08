<!DOCTYPE html>

<?php
    $servername = "sql";
    $username = "root";
    $password = "root";
    $database = "ehc_sqli";
    $user = "";

    $db = new mysqli($servername, $username, $password, $database);

    if ($db->connect_error) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $user_query = "SELECT id FROM accounts WHERE id = '"
                    . $_POST["username"]
                    . "' AND pw = '"
                    . $_POST["password"]
                    . "';";

        $entries = $db->query($user_query);

        if ($entries->num_rows > 0) {
            $user = $entries->fetch_assoc()["id"];
        }

        $entries->close();
        $db->close();
    }
?>

<html>
    <head>
        <title>Hacking Ethically</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <img class="header-image" src="logo.png" alt="Jimmaphy" />
            <p class="header-title">JIMMAPHY</p>
        </header>

        <main>
            <h1>Ethically Hacking</h1>

            <?php
                if (isset($user) && $user !== ""): ?>
                    <h2>Welcome <?= $user ?>!</h2>
                    <img src="image.jpg" />
                <?php else: ?>
                    <p class="error">The credentials are incorrect, please try again!</p>
                    <a href="index.php">Go back to the homepage</a>
                <?php endif 
            ?>
        </main>
    </body>
</html>
