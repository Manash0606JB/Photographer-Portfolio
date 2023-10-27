<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $Pass = $_POST['password'];
}
if ($Pass=="r2Vz*$5QCA8Vh") {
    session_start();
    $_SESSION['loggedIn'] = true;
    echo '
    <script>
    if(confirm("You are successfully logged in!")){
        window.location.href = "../adminHome.php";
    }
    else{
        window.location.href = "../adminHome.php";
    }
    </script>
    ';
}
else{
    echo '
    <script>
    if(confirm("Incorrect Password!")){
        window.location.href = "../adminLogin.php";
    }
    else{
        window.location.href = "../adminLogin.php";
    }
    </script>
    ';
}
?>