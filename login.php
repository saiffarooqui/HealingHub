<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: dashboard.php");
  }
?>

<?php include_once "header.php"; ?>
<body>

  <nav>
    <div class="menu">
      <div class="logo">
        <a href="dashboard">HealingHub</a>
      </div>
      <ul>
         <li><a href="index">Home</a></li>
        <li><a href="login">Login</a></li>
        <li><a href="signup">Sign up</a></li>
        
      </ul>
    </div>
  </nav>
  <div class="c">
  <div class="wrapper">
    <section class="form login">
      <header>WELCOME BACK TO OUR HUB</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Login">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="signup.php">Signup now</a></div>
    </section>
  </div>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
