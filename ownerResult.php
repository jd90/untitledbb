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


$ownerid= $_POST['ownerid'];
$firstname= $_POST['firstname'];
$surname= $_POST['surname'];
$title =$_POST['title'];
$email= $_POST['email'];
$password= $_POST['password'];
$password2= $_POST['password2'];
$address= $_POST['address'];
$address2= $_POST['address2'];
$telephone= $_POST['telephone'];



$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

try {
    $st1 = "INSERT INTO Owner ([ownerid], [title], [firstname], [surname], [email], [address], [password], [telephone]) VALUES ('".$ownerid."', '".$title."', '".$firstname."', '".$surname."', '".$email."', '".$address."', '".$password."', '".$telephone."')";
    $conn->exec($st1);

}catch(PDOException $e)
{
    print"$e";
}



?>

<?php
$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
try{
    $st = $conn-> query("SELECT * FROM [Owner]");
    foreach($st->fetchAll() as $row) {
        $newhtml =
            <<<NEWHTML

                    <p>{$row[firstname]}</p>
                    <p>{$row[surname]}</p>
            <br>
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
