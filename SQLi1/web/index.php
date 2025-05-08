<!DOCTYPE html>

<?php
    $servername = "sql";
    $username = "root";
    $password = "root";
    $database = "ehc_sqli";

    $db = new mysqli($servername, $username, $password, $database);

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
                Welcome at your new school website.
                Here, you can check all the different courses that are offered by school.
                This wonderful filter allows you to search for you favorite course!
                All the data comes live from our database, so everything is up-to-date.
            </p>

            <form method="get" action="#">
                <label for="search">Search</label>
                <input type="text" placeholder="search" id="search" name="search" value="<?= $_GET["search"]  ?? "" ?>">
                <input type="submit" value="Search" id="submit" >
            </form>

            <table>
                <?php
                    $where = "";
                    if (isset($_GET["search"])) {
                        $where = "WHERE name LIKE '%" . $_GET["search"] . "%'";
                    }

                    $query = "SELECT * FROM Subjects " . $where . ";";
                    $db->multi_query($query);
                    $results = $db->store_result();
                    $first_row = true;
         
                    if ($results->num_rows > 0) {
                        while ($row = $results->fetch_assoc()) { 
                            if ($first_row) {
                                $first_row = false;
                                $columns = array_keys($row);

                                ?><thead><tr><?php

                                foreach ($columns as $column) {
                                    ?><th><?= ucfirst($column) ?></th><?php
                                } 

                                ?></tr></thead><tbody><?php
                            }

                            ?><tr><?php
                            foreach ($row as $key => $value) {
                                ?><td><?= $value ?></td><?php 
                            }
                            ?></tr><?php
                        }
                        ?></tbody><?php
                    }
                ?>
            </table>
        </main>
    </body>
</html>

<?php
    mysqli_close($db);
?>

