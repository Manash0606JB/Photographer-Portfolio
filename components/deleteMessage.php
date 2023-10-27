<?php
include "dbconn.php";
if ($_SERVER['REQUEST_METHOD']=="GET") {
    $Sln = $_GET['sl_no'];
    $sql1 = "DELETE FROM `messages` WHERE `Sl no.` = '$Sln';";
    $res1 = mysqli_query($conn,$sql1);
    if ($res1) {
        echo '
        <script>
        if(confirm("Successfully deleted!")){
            window.location.href = "../Messages.php";
        }
        else{
            window.location.href = "../Messages.php";
        }
        </script>
        ';
    }
    else {
        echo '
        <script>
        if(confirm("Something went wrong!")){
            window.location.href = "../Messages.php";
        }
        else{
            window.location.href = "../Messages.php";
        }
        </script>
        ';
    }
}
?>