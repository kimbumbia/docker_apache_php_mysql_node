<html>
<head>
    <link href="">
</head>
</html>

<?php
/**
 * @author Yenier Jimenez <yjmorales86@gmail.com>
 * This in an example about how to use a PHP Docker container by connect to a DB.
 *
 * - Web App (php app): Belong in a container
 * - DB belong in a container.
 */

// Displaying welcome message
echo "Hello world, Today is: " . (new DateTime())->format('m/d/Y');
echo "<hr>";
echo "<b>Testing Connection to DB</b>";

exit;

// Argument to establish the DB Connection
$dsn = "mysql:host=db;dbname=testind_docker"; // 'bd' is the name of the defined container which holds the database.
$user = 'admin_testind_docker';
$pass = 'admin_testind_docker';

// Build connection
try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

// Creating table
$sqlTable = <<<SQL
--     DROP TABLE IF EXISTS `language_dev`;
    CREATE TABLE IF NOT EXISTS `language_dev` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(64) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
SQL;
$pdo->exec($sqlTable);


// Inserting data
$sqlInsert = <<<SQL
    INSERT INTO language_dev (`name`) VALUES (?),(?),(?);
SQL;
$stmt = $pdo->prepare($sqlInsert);
$stmt->execute(['php', 'js', 'java']);

// Listing values
echo "</br></br>Listing of Development Languages:";
$stmt = $pdo->query("SELECT * FROM `language_dev`");
while ($row = $stmt->fetch()) {
    echo "</br> - {$row['name']}";
}