<?php
include "components/AdminNav.php";
include "components/dbconn.php";
?>
<style>
        /* Add CSS styling here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .Container{
            margin: 0px 20px;
            padding: 40px 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .aboveContainer{
            padding-top: 50px;
        }
        /* .main {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        } */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .delete-button {
        background-color: #e74c3c; /* Red background color */
        color: #fff; /* White text color */
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
        font-weight: bold;
    }

    .delete-button:hover {
        background-color: #c0392b; /* Darker red on hover */
    }
    </style>
    <section class="main">
        <div class="aboveContainer">
        <div class="Container">
        <h1>Messages</h1>
            <?php
            $sql1 = "SELECT * FROM `messages` ORDER BY `Sl no.` DESC;";
            $res1 = mysqli_query($conn,$sql1); 
            $num1 = mysqli_num_rows($res1);
            if ($num1>0) {
                echo '<table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>Subject</th>
                    <th>Action</th>
                </tr>';
                for ($i=1; $i <= $num1 ; $i++) { 
                    $data1 = mysqli_fetch_assoc($res1);
                    echo '<tr>
                    <td>'.$data1['Name'].'</td>
                    <td>'.$data1['Email'].'</td>
                    <td>'.$data1['Address'].'</td>
                    <td>'.$data1['Country'].'</td>
                    <td>'.$data1['Subject'].'</td>
                    <td><input type="submit" class="delete-button" value="Delete" onclick="deleteEntry('.$data1['Sl no.'].')"></td>
                </tr>';
                }
                echo '</table>';
            }
            else {
                echo '<div>
                <h3 style="color: #747373; margin: 5px 5px;">There are no Messages</h3>
                </div>';
            }
            ?>
        </div>
        </div>
</section>
</body>
</html>
<script>
    function deleteEntry(slNo) {
        // Redirect to another page with the SL No. as a parameter
        window.location.href = 'components/deleteMessage.php?sl_no=' + slNo;
    }
</script>