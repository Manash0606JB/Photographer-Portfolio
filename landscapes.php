<?php
include "components/nav.php";
include "components/dbconn.php";
?>
<section class="main">
  <div id="landscapes">
    <?php
    $sql1 = "SELECT * FROM `landscapes` ORDER BY `Sl no.` DESC;";
    $res1 = mysqli_query($conn,$sql1);
    $num1 = mysqli_num_rows($res1);
    if ($num1>0) {
      for ($i=1; $i <= $num1 ; $i++) { 
        $data1 = mysqli_fetch_assoc($res1);
        echo '<a href="./'.$data1['imgName'].'"><img src="./'.$data1['imgName'].'" alt="image"></a>';
      }
    }
    ?>
        </div>
        </section>
            </body>
</html>