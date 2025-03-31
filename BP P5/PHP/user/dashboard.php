<?php
session_start();
if(empty($_SESSION['login'])){
    header("Location: ../../website/index.php");
    exit;
}
echo "Dashboard";

echo "<A href='uitlog.php'>Logout</A>";

// did is de "homepagina" je moet deze verplaatsen door de echte homepagina
?>