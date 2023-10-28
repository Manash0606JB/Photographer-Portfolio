    <?php include "components/adminNav.php"; ?>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: #333;
    color: #fff;
    padding: 10px;
}

.main {
    text-align: center;
    padding: 20px;
}

#landscapes {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.upImg {
    margin: 10px;
    text-align: center;
    background-color: #fff;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.upImg form {
    display: inline;
}

.upImg form input[type="submit"] {
    background-color: red;
    border: 2px solid red;
    color: white;
    padding: 5px 10px;
    border-radius: 10px;
    font-weight: bold;
    margin-left: 10px;
}

a {
    display: block;
    text-decoration: none;
    margin-top: 10px;
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
                <a href="#"><img src="./Images/landscapes/IMG (1).jpg" alt="Landscape 1"></a>
            </div>
            <div class="upImg">
                <form action="" method="post">
                    <input type="submit" value="Delete X">
                </form>
                <a href="#"><img src="./Images/landscapes/IMG (2).jpg" alt="Landscape 2"></a>
            </div>
            <div class="upImg">
                <form action="" method="post">
                    <input type="submit" value="Delete X">
                </form>
                <a href="#"><img src="./Images/landscapes/IMG (3).jpg" alt="Landscape 3"></a>
            </div>
            <div class="upImg">
                <form action="" method="post">
                    <input type="submit" value="Delete X">
                </form>
                <a href="#"><img src="./Images/landscapes/IMG (4).jpg" alt="Landscape 4"></a>
            </div>
        </div>
    </section>
</body>
</html>
