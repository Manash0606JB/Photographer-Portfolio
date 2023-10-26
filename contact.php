<?php
include "components/nav.php";
?>
 <style>
     body {
    background-color: #f2f2f2;
  }
  </style>
<section class="main">
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