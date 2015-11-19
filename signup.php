<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <?php
    include("includes/head.inc.php");
  ?>
  <script type="text/javascript" src="js/signup.js"></script>
</head>
<body>
  <div>
    <!-- SIGN UP -->
    <div class="w3-container w3-half w3-margin-top">
        <form class="w3-container w3-card-8" id="form1" action="process_signup.php" method="post">
        <h2 class="w3-text-theme">Register</h2>

        <!-- FIRST NAME -->
        <div class="w3-input-group">      
          <input name="first_name" id="first_name" class="w3-input" type="text" required>
          <label class="w3-label">First Name</label>
        </div>

        <!-- LAST NAME -->
        <div class="w3-input-group">      
          <input name="last_name" id="last_name" class="w3-input" type="text" required>
          <label class="w3-label">Last Name</label>
        </div>

        <!-- USER NAME -->
        <div class="w3-input-group">      
          <input name="user_name" id="user_name" class="w3-input" type="text" required>
          <label class="w3-label">Username</label>
        </div>

        <!-- PASSWORD -->
        <div class="w3-input-group">      
          <input name="password" id="password" class="w3-input" type="password" required>
          <label class="w3-label">Password</label>
          <span id="password_msg"></span>
        </div>

        <!-- REPEAT PASSWORD -->
        <div class="w3-input-group">      
          <input name="repeat_password" id="repeat_password" class="w3-input" type="password" required>
          <label class="w3-label">Repeat Password</label>
          <span id="repeat_password_msg"></span>
        </div>

        <!-- GENDER -->
        <div class="w3-input-group">      
          <input name="gender" value="M"  type="radio" >Male <br />
          <input name="gender" value="F"  type="radio" >Female
          <label class="w3-label">Gender</label>
        </div>

        <!-- EMAIL -->
        <div class="w3-input-group">      
          <input name="email" id="email" class="w3-input" type="text" required>
          <label class="w3-label">Email</label>
        </div>
        <button id="signup" class="w3-btn w3-theme">Sign Up</button>
        <br><br>
      </form>
    </div>

  </div>
</body>