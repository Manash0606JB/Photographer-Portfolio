 <?php include "components/nav.php"; ?>
 <style>
/* styles.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

#contact1 {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    width: 60%;
}

h2 {
    color: #333;
}

.login-form {
    margin-top: 20px;
}

form {
    max-width: 300px;
    margin: 0 auto;
}
#mainContact{
    display: flex;
    text-align: center;
    justify-content: center;
    padding-top: 100px;
}
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

    </style>
    <section class="main">
        <div id="mainContact">
        <div id="contact1">
            <div>
                <h2>Login</h2>
            </div>
            <div class="login-form">
                <form  method="post" action="components/adminLoginProcess.php">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" placeholder="Enter your password">
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
        </div>
    </section>
</body>
</html>
