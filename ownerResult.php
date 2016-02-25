<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookings Page</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
</head>

<header>

    <nav>

        <ul>
            <li><a href="Home.html">Home page</a></li>
            <li><a href="Bookings.php">Bookings</a></li>
            <li><a href="OwnerRegistration.html">Owner Registration</a></li>
            <li><a href="B&Bregistration.html">B&B Registration</a></li>
        </ul>
    </nav>

</header>
<body>

<main>

<?php
/**
 * Created by PhpStorm.
 * User: 9540730
 * Date: 25/02/2016
 * Time: 13:45
 */


$ownerid= $_GET['ownerid'];
$firstname= $_GET['ownerid'];
$surname= $_GET['ownerid'];
$title =$_GET['title'];
$email= $_GET['ownerid'];
$password= $_GET['ownerid'];
$password2= $_GET['ownerid'];
$address= $_GET['ownerid'];
$address2= $_GET['ownerid'];
$telephone= $_GET['ownerid'];



$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

try {
    $st = $conn-> prepare("INSERT INTO Owner ([ownerid], [title], [firstname], [surname], [email], [address], [password], [telephone]) VALUES ($ownerid, $title, $firstname, $surname, $email, $address, $password, $telephone)");



    $conn->exec($st);

    echo "New records created successfully";


}catch(PDOException $e)
{
    print"$e";
}



?>

<?php
$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
try{
    $st = $conn-> query("SELECT * FROM [Customer]");
    foreach($st->fetchAll() as $row) {
        $newhtml =
            <<<NEWHTML
                    <p>{$row[firstname]}</p>
NEWHTML;
        print($newhtml);
    }
}
catch(PDOException $e)
{print"$e";}
?>


</main>




<footer>

    <p>Copyright. Team D Solutions.</p>
</footer>
</body>
</html>
