<?php
include "components/adminNav.php";
include "components/dbconn.php";
?>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}
    #portraits img{
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
    .deleteB{
    border: 2px solid red;
    color: white;
    padding: 5px 10px;
    border-radius: 10px;
    font-weight: bold;
    margin-left: 10px;
    text-decoration: none;
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
  <div id="portraits">
  <?php
    $sql1 = "SELECT * FROM `portraits` ORDER BY `Sl no.` DESC;";
    $res1 = mysqli_query($conn,$sql1);
    $num1 = mysqli_num_rows($res1);
    if ($num1>0) {
      for ($i=1; $i <= $num1 ; $i++) { 
        $data1 = mysqli_fetch_assoc($res1);
        echo '<div class="upImg">
        <a style="background-color: red; display: block; width: 100px;" class="deleteB" href="components/deletePost.php?sl_no='.$data1['Sl no.'].'&type_of=portrait">Delete X</a>
        <a href="./'.$data1['imgName'].'"><img src="./'.$data1['imgName'].'" alt="image"></a>
    </div>';
    }
    }
    ?>
        </div>
</section>
            </body>
</html>