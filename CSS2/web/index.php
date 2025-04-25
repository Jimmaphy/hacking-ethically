<!DOCTYPE html>

<?php
    $servername = "sql";
    $username = "root";
    $password = "root";
    $database = "ehc_css";

    $db = new mysqli($servername, $username, $password, $database);

    if ($db->connect_error) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $insert_query = $db->prepare("INSERT INTO message (message) VALUES (?)");
    $read_query = "SELECT * FROM message";
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
            <p>
                This simple webpage will print back the message you provide in the textbox below. 
                However, this time! The data is stored in a database!
                This means that a history of all messages can be displayed.
                But it's no longer possible to provide messages through the URL.
            </p>

            <form method="post" action="#">
                <input type="text" name="message" placeholder="Enter your message" value="<?= isset($_GET["message"]) ? $_GET["message"] : "" ?>">
                <input type="submit" value="Submit" >
            </form>

            <p>
                <?php
                    if (isset($_POST["message"])) {
                        $insert_query->bind_param("s", $message);
                        $message = $_POST["message"];
                        $insert_query->execute();
                        $insert_query->close();
                    }
                ?>
            </p>

            <?php
                $entries = $db->query($read_query);
                if ($entries->num_rows > 0) {
                    while ($row = $entries->fetch_assoc()) { ?>
                        <article>
                            <p class="article-date"><?= $row["publishdate"] ?></p>
                            <p class="article-content"><?= $row["message"] ?></p>
                        </article>
                    <?php }
                }
            ?>
        </main>
    </body>
</html>

<?php
    mysqli_close($db);
?>
