<?php
include "dbconn.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $Name = ucfirst(strtolower($_POST['firstname']))." ".ucfirst(strtolower($_POST['lastname']));
    $Email = strtolower($_POST['email']);
    $Address = $_POST['address'];
    $Country = $_POST['country'];
    $Subject = $_POST['subject'];
}
if ($Name!="" && $Email!="" && $Address!="" && $Country!="" && $Subject!="") {
    $sql1 = "INSERT INTO `messages` (`Sl no.`, `Name`, `Email`, `Address`, `Country`, `Subject`) VALUES ('NULL', '$Name', '$Email', '$Address', '$Country', '$Subject');";
    $res1 = mysqli_query($conn,$sql1);
    if ($res1) {
        echo '
        <script>
        if(confirm("Successfully sent the message!")){
            window.location.href = "../contact.php";
        }
        else{
            window.location.href = "../contact.php";
        }
        </script>
        ';
    }
    else {
        echo '
        <script>
        if(confirm("Someting went wrong!")){
            window.location.href = "../contact.php";
        }
        else{
            window.location.href = "../contact.php";
        }
        </script>
        ';
    }
}
else {
    echo '
    <script>
    if(confirm("Some fields are missing!")){
        window.location.href = "../contact.php";
    }
    else{
        window.location.href = "../contact.php";
    }
    </script>
    ';
}
?>