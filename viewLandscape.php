<?php
include "components/adminNav.php";
?>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}
    #landscapes img{
        height: 280px;
        width: 400px;
    }
    .upImg form{
        float: right;
    }
    .upImg {
    margin: 10px;
    text-align: center;
    background-color: #fff;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
    .upImg form input[type="submit"]{
    background-color: red;
    border: 2px solid red;
    color: white;
    padding: 5px 10px;
    border-radius: 10px;
    font-weight: bold;
    margin-left: 10px;
    }
    img {
    max-width: 100%;
    height: auto;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}
</style>
<section class="main">
  <div id="landscapes">
    <div class="upImg">
        <form action="" method="post">
            <input type="submit" value="Delete X">
        </form>
        <a href=""><img src="./Images/landscapes/IMG (1).jpg" alt=""></a>
    </div>
    <div class="upImg">
    <form action="" method="post">
            <input type="submit" value="Delete X">
        </form>
        <a href=""><img src="./Images/landscapes/IMG (2).jpg" alt=""></a>
    <div class="upImg">
    <form action="" method="post">
            <input type="submit" value="Delete X">
        </form>
        <a href=""><img src="./Images/landscapes/IMG (3).jpg" alt=""></a>
    </div>
    <div class="upImg">
    <form action="" method="post">
            <input type="submit" value="Delete X">
        </form>
        <a href=""><img src="./Images/landscapes/IMG (8).jpg" alt=""></a>
    </div>
        </div>
</section>
            </body>
</html>