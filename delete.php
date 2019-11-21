<?php
    include 'client.class.php';
    $cl = new Client;
    $cl->deleteClient($_GET['Id']);
    header('Location:index.php');
?>