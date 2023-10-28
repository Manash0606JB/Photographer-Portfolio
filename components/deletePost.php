<?php
session_start();
if ($_SESSION['loggedIn']==false) {
    header('Location: ../adminLogin.php');
    session_abort();
}
include "dbconn.php";
if ($_SERVER['REQUEST_METHOD']=="GET") {
    $Sln = $_GET['sl_no'];
    $typeOf = $_GET['type_of'];
}
if ($typeOf=="landscape") {
    $sqlL = "SELECT * FROM `landscapes` WHERE `Sl no.` = '$Sln';";
    $resL = mysqli_query($conn,$sqlL);
    $dataL = mysqli_fetch_assoc($resL);
    $ImgL = '../'.$dataL['imgName'];
    $deleteL = unlink($ImgL);
    if ($deleteL) {
        $sql1 = "DELETE FROM `landscapes` WHERE `Sl no.` = '$Sln';";
    $res1 = mysqli_query($conn,$sql1);
    if ($res1) {
        echo '
        <script>
        if(confirm("Successfully deleted!")){
            window.location.href = "../viewLandscape.php";
        }
        else{
            window.location.href = "../viewLandscape.php";
        }
        </script>
        ';
    }
    else {
        echo '
        <script>
        if(confirm("Something went wrong!")){
            window.location.href = "../viewLandscape.php";
        }
        else{
            window.location.href = "../viewLandscape.php";
        }
        </script>
        ';
    }
    }
    else {
        echo '
        <script>
        if(confirm("Something went wrong!")){
            window.location.href = "../viewLandscape.php";
        }
        else{
            window.location.href = "../viewLandscape.php";
        }
        </script>
        ';
    }
}
elseif ($typeOf=="portrait") {
    $sqlP = "SELECT * FROM `portraits` WHERE `Sl no.` = '$Sln';";
    $resP = mysqli_query($conn,$sqlP);
    $dataP = mysqli_fetch_assoc($resP);
    $ImgP = '../'.$dataP['imgName'];
    $deleteP = unlink($ImgP);
    if ($deleteP) {
        $sql2 = "DELETE FROM `portraits` WHERE `Sl no.` = '$Sln';";
        $res2 = mysqli_query($conn,$sql2);
        if ($res2) {
            echo '
            <script>
            if(confirm("Successfully deleted!")){
                window.location.href = "../viewPortrait.php";
            }
            else{
                window.location.href = "../viewPortrait.php";
            }
            </script>
            ';
    }
    else {
        echo '
        <script>
        if(confirm("Something went wrong!")){
            window.location.href = "../viewPortrait.php";
        }
        else{
            window.location.href = "../viewPortrait.php";
        }
        </script>
        ';
    }
    }
    else {
        echo '
        <script>
        if(confirm("Something went wrong!")){
            window.location.href = "../viewPortrait.php";
        }
        else{
            window.location.href = "../viewPortrait.php";
        }
        </script>
        ';
    }
}
else {
    echo '
        <script>
        if(confirm("Please try again later!")){
            window.location.href = "../adminHome.php";
        }
        else{
            window.location.href = "../adminHome.php";
        }
        </script>
        ';
}
?>