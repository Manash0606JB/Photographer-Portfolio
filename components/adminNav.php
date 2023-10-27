<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Pannel | Dhritisman Barman</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&family=Trirong&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    session_start();
    if ($_SESSION['loggedIn']==false) {
        header('Location: adminLogin.php');
        session_abort();
    }
    ?>
    <section class="sidebar">
        <div id="brandname">Admin Pannel</div>
        <div class="sidebar_content">
            <ul>
                <li><a href="adminHome.php">Admin Home</a></li>
                <li><a href="viewPortrait.php">View Portraits</a></li>
                <li><a href="viewLandscape.php">View Landscapes</a></li>
                <li><a href="portraitUpload.php">Upload Portraits</a></li>
                <li><a href="landscapeUpload.php">Upload Landscapes</a></li>
                <li><a href="Messages.php">Messages</a></li>
                <li><a href="Index.php">< Back to home page</a></li>
            </ul>
        </div>
        <div id="copyrights">
            <p>© COPYRIGHT</p>
            <p>ALL RIGHTS RESERVED</p>
        </div>
    </section>