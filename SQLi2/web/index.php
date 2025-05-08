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
                This website allows a user to login to a service.
                The user gets access to their account through the use of a username and a password.
                These are then checked inside the database, and the user get's access to their account.
                Assuming the combination is correct.
            </p>

            <form method="post" action="portal.php">
                <fieldset>
                    <label for="username">Username</label>
                    <input type="text" placeholder="username" id="username" name="username">
                </fieldset>

                <fieldset>
                    <label for="password">Password</label>
                    <input type="password" placeholder="password" id="password" name="password">
                </fieldset>

                <fieldset>
                    <label for="submit"></label>
                    <input type="submit" value="Login" id="submit" >
                </fieldset>
            </form>
        </main>
    </body>
</html>

