<!DOCTYPE html>

<?php
    $servername = "sql";
    $username = "root";
    $password = "root";
    $database = "ehc_css";

    $db = new mysqli($servername, $username, $password, $database);
    $read_query = "SELECT * FROM message";


    if ($db->connect_error) {
        die("Connection failed: " . mysqli_connect_error());
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
            <p>
                This simple webpage will print back the message you provide in the textbox below. 
                However, this time! The data is stored in a database!
                This means that a history of all messages can be displayed.
                But it's no longer possible to provide messages through the URL.
                
            </p>
            <p id="info" class="info">
                Your message was posted.
                <a href="index.php">Refresh</a> the page to see the results.
            </p>

            <form>
                <input id="message" type="text" name="message" placeholder="Enter your message" value="<?= isset($_GET["message"]) ? $_GET["message"] : "" ?>">
                <input id="submit" type="button" value="Submit">
            </form>

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

    <script src="script.js"></script>
</html>

<?php
    mysqli_close($db);
?>
