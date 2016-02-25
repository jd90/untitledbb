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
$email= $_GET['ownerid'];
$password= $_GET['ownerid'];
$password2= $_GET['ownerid'];
$address= $_GET['ownerid'];
$address2= $_GET['ownerid'];
$telephone= $_GET['ownerid'];



$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

try {
    $st = $conn->prepare("INSERT INTO Owner ([ownerid], [title], [firstname], [surname], [email], [address], [password], [telephone]) VALUES ($ownerid, $firstname, $surname, $email, $password, $address $telephone )");

}catch(PDOException $e)
{
    print"$e";
}





?>