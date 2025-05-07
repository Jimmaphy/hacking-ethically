<!DOCTYPE html>

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
                Additionally, it is possible to set the message directly in the URL!
            </p>

            <form method="get" action="#">
                <input type="text" name="message" placeholder="Enter your message" value="<?= isset($_GET["message"]) ? $_GET["message"] : "" ?>">
                <input type="submit" value="Submit" >
            </form>

            <p>
                <?php
                    if (isset($_GET["message"])) {
                        echo $_GET["message"];
                    } else {
                        echo "No message was received.";
                    }
                ?>
            </p>
        </main>
    </body>
</html>
