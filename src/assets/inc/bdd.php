<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=WAIW', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>