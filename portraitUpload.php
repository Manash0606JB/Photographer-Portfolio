<?php
include "components/AdminNav.php";
?>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0px auto;
            max-width: 600px;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        form {
            text-align: left;
        }
        .form-group {
            margin: 20px 0;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type="text"], .form-group input[type="file"], .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group input[type="file"] {
            border: none;
        }
        .form-group textarea {
            height: 100px;
        }
        .form-group button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .aboveContainer{
            padding-top: 50px;
        }
    </style>
    <section class="main">
        <div class="aboveContainer">
    <div class="container">
        <h1>Upload Your Portrait</h1>
        <form action="components/portraitPostProcess.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="photo">Select a Photo:</label>
                <input type="file" name="photo" id="photo" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description (optional):</label>
                <textarea name="description" id="description"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Upload</button>
            </div>
        </form>
    </div>
    </div>
</section>
</body>
</html>