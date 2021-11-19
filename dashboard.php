<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        *,
*::before,
*::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  outline: none;
}
*::placeholder {
  font-size: 15px;
  font-family: "poppins", sans-serif;
  font-weight: 500;
}
:root {
  --f-transition: 0.2s; /*  Fast Transition */
  --main-transition: 0.3s; /* Main Transition */
  --m-transition: 0.4s; /* Medium Transition */
  --s-transition: 0.5s; /* Slow Transition */
  --header-height: 60px;
  --sections-padding: 60px;
  --main-color: hsl(0, 0%, 0%);
  --second-color: hsl(247, 100%, 65%);
  --third-color: hsl(180, 2%, 9%);
  --light-main-color: hsl(0, 0%, 26%);
  --light-second-color: hsl(247, 74%, 67%);
  --light-third-color: hsl(0, 0%, 30%);
}
html {
  scroll-behavior: smooth;
}
body {
  font-family: "Poppins", sans-serif;
  font-size: 16px;
}
a {
  text-decoration: none;
}
a:active {
  transform: scale(0.91);
  transition: transform var(--f-transition);
}
p {
  line-height: 1.5;
}
ul,
ol {
  list-style: none;
}
img {
  display: block;
  max-width: 100%;
  background-size: cover;
}
.container {
  margin-right: auto;
  margin-left: auto;
  padding-right: 15px;
  padding-left: 15px;
}
/* Small Screens */
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
/* Medium Screens */
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
/* Large Screens */
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
/* End Global Rules */

/* Start Utility Classes */
.btn {
  text-transform: capitalize;
  border: 1px solid transparent;
  border-radius: 4px;
  font-size: 20px;
  font-weight: 600;
  padding: 10px 20px;
  transition: var(--main-transition), background-color var(--f-transition);
}
.btn-primary {
  background: var(--third-color);
  color: #fff;
}
.btn-primary:hover {
  background: var(--light-third-color);
}
.scale-effect:active {
  transform: scale(0.88);
  transition: transform var(--f-transition);
}
.fill::after {
  position: absolute;
  content: "";
  left: 0;
  bottom: -6px;
  width: 0;
  height: 3px;
  background: var(--second-color);
  transition: var(--main-transition);
}
.fill:hover::after {
  width: 100%;
}
.section-title {
  width: fit-content;
  max-width: 400px;
  margin: auto;
  margin-bottom: 50px;
  position: relative;
  text-transform: capitalize;
  font-weight: bold;
  font-size: 35px;
  color: var(--main-color);
  cursor: pointer;
}
@media (max-width: 767px) {
  .section-title {
    margin-bottom: 40px;
  }
}
.btns-group {
  margin-top: 20px;
  display: flex;
  text-align: center;
  gap: 10px;
}
/* end utitily*/

/*nav start*/
nav{
  position: fixed;
  background: #1b1b1b;
  width: 100%;
  padding: 10px 0;
  z-index: 12;
}
nav .menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
}
.menu .logo a{
  text-decoration: none;
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
.menu ul{
  display: inline-flex;
}
.menu ul li{
  list-style: none;
  margin-left: 7px;
}
.menu ul li:first-child{
  margin-left: 0px;
}
.menu ul li a{
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}

/*end nav*/


/*Chat start*/
.landing {
  height: 100vh;
}
.landing .container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  align-items: center;
  height: 100%;
}
.landing .text {
  text-align: start;
  flex: 1;
}
@media (max-width: 992px) {
  .landing .text {
    text-align: center;
  }
}
.landing .text h1 {
  padding: 0px 0px 10px 0px ;
  font-size: 40px;
  text-transform: capitalize;
  font-weight: 700;
  letter-spacing: 1px;
  color: var(--main-color);
}
.hy{
  padding: 40px 0px 10px 0px ;
  font-size: 40px;
  text-transform: capitalize;
  font-weight: 700;
  letter-spacing: 1px;
  color: var(--main-color);
  text-align: center;

}
@media (max-width: 1200px) {
  .landing .text h1 {
    font-size: 36px;
  }
}
@media (max-width: 500px) {
  .landing .text h1 {
    font-size: 30px;
  }
}
.landing .text span {
  font-size: 18px;
  text-transform: capitalize;
  color: var(--second-color);
  font-weight: 500;
}
@media (max-width: 992px) {
  .landing .text span {
    font-size: 17px;
  }
}
.landing .text p {
  margin-top: 14px;
  max-width: 600px;
  line-height: 1.7;
  font-size: 17px;
}
@media (max-width: 992px) {
  .landing .text p {
    font-size: 16px;
    margin-right: auto;
    margin-left: auto;
  }
}
@media (max-width: 992px) {
  .landing .btns-group {
    justify-content: center;
  }
}
.landing .image {
  flex: 0.6;
  z-index: -1;
}
@media (max-width: 992px) {
  .landing .image {
    display: none;
  }
}

    
     .c{
         display: flex;
      align-items: center;
      justify-content: center;
     }
    .blog-posts{

      width: min(1200px, 100%);
      padding: 20px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      cursor: pointer;
    }

    .post{
      width: calc(33% - 10px);
      overflow: hidden;
    }

    .post-img{
      width: 100%;
      border-radius: 6px;
      transition: .3s linear;
    }

    .post-content{
      background-color: #e2e1e1ab;
      margin: 0 20px;
      padding: 30px;
      border-radius: 6px;
      transform: translateY(-60px);
      transition: .3s linear;
    }

    .post-content h3{
      font-size: 16px;
      margin-bottom: 10px;
    }

    .date{
      font-size: 15px;
      font-style: italic;
      color: #e77f67;
    }

    .post:hover .post-img{
      transform: translateY(20px);
    }

    .post:hover .post-content{
      transform: translateY(-80px);
    }

    @media screen and (max-width: 1200px){
      .blog-posts{
        justify-content: center;
      }
      .post{
        width: min(600px, 100%);
      }
    }

.flex {
  min-height: 9vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.bttn {
  width: 60px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: bold;
  position: relative;
}
.bttn:after {
  transition: 0.3s all ease;
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  border-radius: 1px;
  border: 3px solid lightblue;
}
.bttn:before {
  content: "";
  position: absolute;
  border-radius: 3px;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  background: #fff;
  z-index: -1;
}
.bttn:hover:after {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.bttn:active {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
.bttn:active:before {
  background-color: #f1481b;
}
.bttn:active:after {
  border-color: #f1481b;
}

/* Chat section end */
    </style>
    <title>HEALING HUB</title>
</head>
<body>
  <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
    ?>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="dashboard">HealingHub</a>
      </div>
      <ul>
         <li><a href="dashboard">Home</a></li>
        <li><a href="users">Chat</a></li>
        <li><a href="blog">Blog</a></li>
        <li><a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>">Logout</a></li>
      </ul>
    </div>
  </nav>

  <section class="landing" id="welcome-section">
    <div class="container">
      <div class="text">
        <?php 

         if($row['istherapist']=="true")
        {
        ?>
        <h1>Talk to a Patient</h1>
        <?php 
         }else{
        ?>
        <h1>Talk to a Therapist</h1>
    <?php }?>
        <span>It's when we start working together that the real healing takes place.</span>
        <p>
          Talking about your feelings can help you stay in good mental health and deal with times when you feel troubled.

Talking about your feelings isn’t a sign of weakness. It’s part of taking charge of your wellbeing and doing what you can to stay healthy.

Talking can be a way to cope with a problem you’ve been carrying around in your head for a while. Just being listened to can help you feel supported and less alone. And it works both ways. If you open up, it might encourage others to do the same.

If it feels awkward at first, give it time. Make talking about your feelings something that you do.
        </p>
        <div class="btns-group">
          <a href="users" class="btn btn-primary">Chat Now</a>
        </div>
      </div>
      <div class="image">
        <img src="chat.jpeg" alt="chat picture">
      </div>
    </div>
  </section>
    <div style="background-color: #f2f2f2 ;">
       
        <h1 class="hy">Featured Posts</h1>
        
   <div class="c">
    <div class="blog-posts">
    <?php 
     $query = "SELECT * FROM `blogs` limit 3";
     $results = mysqli_query($conn, $query) or die(mysql_error());
     while($data = mysqli_fetch_array($results))
     {
        $id = $data['id'];
        $path = "post?id=$id";
    ?>
    
    
    <div class="post">
      <img src="<?php echo $data['image_path']; ?>" alt="" class="post-img">
      <div class="post-content">
        <h3><?php 
            echo $data['title'];
            ?></h3>
        <span class="date"> <div class="flex">
          <a href="<?php echo $path;?>" class="bttn" style=" color: #333;
          text-decoration: none;
          transition: 0.3s all ease;">More</a>
        </div></span>
      </div>
    </div>    
    <?php 
      }
    ?>
   </div> 
</div>
<div class="btns-group" style="display: block; padding-bottom: 100px">
    <a href="blog" class="btn btn-primary">View All</a>
</div>
</div>

</body>
</html>