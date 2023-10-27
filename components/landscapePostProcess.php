<?php
include "dbconn.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $Img = $_FILES['photo'];
    $Img_name = $Img['name'];
    $Img_error = $Img['error'];
    $temp_name = $Img['tmp_name'];
    $destination = "../Images/landscapes/".$Img_name;
    if ($title!="") {
        $pic = "Images/landscapes/".$Img_name;
        $sql1 = "INSERT INTO `landscapes` (`Sl no.`, `imgName`, `title`, `description`) VALUES ('NULL', '$pic', '$title', '$description');";
        $res1 = mysqli_query($conn,$sql1);
        if ($res1) {
            move_uploaded_file($temp_name,$destination);
            echo '
            <script>
            if(confirm("Successfully posted!")){
                window.location.href = "../landscapeUpload.php";
            }
            else{
                window.location.href = "../landscapeUpload.php";
            }
            </script>
            ';
            }
            else {
                echo '
            <script>
            if(confirm("Something went wrong!")){
                window.location.href = "../landscapeUpload.php";
            }
            else{
                window.location.href = "../landscapeUpload.php";
            }
            </script>
            ';
            }
    }
    else {
        echo '
            <script>
            if(confirm("Title is missing!")){
                window.location.href = "../landscapeUpload.php";
            }
            else{
                window.location.href = "../landscapeUpload.php";
            }
            </script>
            ';
    }
}
?>