<?php include "components/nav.php"; ?>

<section class="main">
  <style>
     body {
    background-color: #f2f2f2;
  }
    #contact {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      padding: 20px;
    }

    .ContactForm {
      flex: 1;
      padding: 20px;
      box-sizing: border-box;
    }

    .ContactForm p {
      font-size: 16px;
      margin-bottom: 20px;
    }

    .ContactForm label {
      display: block;
      font-weight: bold;
      margin-top: 10px;
    }

    .ContactForm input[type="text"],
    .ContactForm input[type="email"],
    .ContactForm textarea,
    .ContactForm select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .ContactForm select {
      height: 40px;
    }

    .ContactForm button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }

    .ContactForm button:hover {
      background-color: #45a049;
    }

    img {
      flex: 1;
      max-width: 100%;
    }
  </style>
  <div id="contact">
    <h2>Contact Me</h2>
    <div style="display: flex; flex-direction: row, flex-wrap: wrap;">
      <div class="ContactForm">
        <p>You can contact me for the purpose of hiring, partnerships, or to participate in programs.</p>
        <form action="">
          <label for="firstname">First Name</label>
          <input type="text" name="First Name" id="firstname" placeholder="Enter your First Name">
          <label for="lastname">Last Name</label>
          <input type="text" name="Last Name" id="lastname" placeholder="Enter your Last Name">
          <label for="email">E-Mail</label>
          <input type="email" name="E-Mail" id="email" placeholder="Enter your email">
          <label for="address">Address</label>
          <textarea name="Address" id="address" placeholder="Enter your full address here"></textarea>
          <label for="country">Select your country:</label>
          <select name="country" id="country">
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="Australia">Australia</option>
            <option value="England">England</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
            <option value="Canada">Canada</option>
            <option value="Japan">Japan</option>
            <option value="Brazil">Brazil</option>
          </select>
          <label for="subject">Subject</label>
          <textarea name="Subject" id="subject" placeholder="Write something here...."></textarea>
          <button type="submit" id="submitbtn">Submit</button>
        </form>
      </div>
      <div><img src="./Images/contact.png" alt="Contact"></div>
    </div>
  </div>
</section>
</body>
</html>
