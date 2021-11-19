<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: dashboard.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HEALING HUB</title>
   <style type="text/css">
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
::selection{
  color: #000;
  background: #fff;
}
body{
  background-color: #1D222D;
}
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

#head{
color: aqua;
}
.img2{
  background: url('1.png')no-repeat;
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  position: relative;
  padding-bottom: 0px;
}
.img2::before{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
}
.img{
  background: url('img3.jpeg')no-repeat;
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  position: relative;
}
.img::before{
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.4);
}
.center{
  position: absolute;
  top: 52%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  padding: 0 20px;
  text-align: center;
}
.center .title{
  color: #fff;
  font-size: 55px;
  font-weight: 600;
}
.center .sub_title{
  color: #fff;
  font-size: 52px;
  font-weight: 600;
}
.center .btns{
  margin-top: 20px;
}
.center .btns button{
  height: 55px;
  width: 170px;
  border-radius: 5px;
  border: none;
  margin: 0 10px;
  border: 2px solid white;
  font-size: 20px;
  font-weight: 500;
  padding: 0 10px;
  cursor: pointer;
  outline: none;
  transition: all 0.3s ease;
}
.center .btns button:first-child{
  color: #fff;
  background: none;
}
.btns button:first-child:hover{
  background: white;
  color: black;
}
.center .btns button:last-child{
  background: white;
  color: black;
}
.features{
  background: linear-gradient(to right, #fc00ff, #00dbde);
}

.wrapper{
  display: grid;
  margin: 0px 90px auto;
  grid-gap: 20px;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  padding-bottom: 30px;
}
@media (max-width: 700px) {
  .wrapper{
    margin: 200px auto;
  }
}

.features h1{
  color: rgb(39, 39, 39);
  font-size: 55px;
  font-weight: 600;
  text-align: center;
  font-weight: bolder;
}

.features-head{
  padding: 40px;
}

.wrapper .box{
  width: 350px;
  margin: 0 auto;
  position: relative;
  perspective: 1000px;
  text-align: center;
}
.wrapper .box .front-face{
  background: #fff;
  height: 220px;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  box-shadow: 0px 5px 20px 0px rgba(0, 81, 250, 0.1);
  transition: all 0.5s ease;
}
.box .front-face .icon{
  height: 80px;
}
.box .front-face .icon i{
  font-size: 65px;
}
.box .front-face span,
.box .back-face span{
  font-size: 22px;
  font-weight: 600;
  text-transform: uppercase;
}
.box .front-face .icon i,
.box .front-face span{
  background: linear-gradient(-135deg, #c850c0, #4158d0);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.box .back-face{
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  height: 220px;
  width: 100%;
  padding: 30px;
  color: #fff;
  opacity: 0;
  transform-style: preserve-3d;
  backface-visibility: hidden;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
  transform: translateY(110px) rotateX(-90deg);
  box-shadow: 0px 5px 20px 0px rgba(0, 81, 250, 0.1);
  transition: all 0.5s ease;
}
.box .back-face p{
  margin-top: 10px;
  text-align: justify;
}
.box:hover .back-face{
  opacity: 1;
  transform: rotateX(0deg);
}
.box:hover .front-face{
  opacity: 0;
  transform: translateY(-110px) rotateX(90deg);
}


.footer{
  bottom: 0;
  left: 0;
  width: 100%;
  background: #1c1c1d;
  text-align: center;
  color: #f4f4f4;
}

.icons{
  padding-top: 1rem;
}

.icons a{
  text-decoration: none;
  font-size: 2rem;
  margin: 0.5rem;
  color: #f4f4f4;
}

.company-name{
  font-size: 1.6rem;
  margin-top: 0.5rem;
}

@media (max-width: 500px){
  html{
      font-size: 50%;
  }
}    

@media(min-width: 501px) and (max-width: 768px){
  html{
  font-size: 50%;
  }
}    

   </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   </head>

<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">HealingHub</a>
      </div>
      <ul>
        <li><a href="index">Home</a></li>
        <li><a href="login">Login</a></li>
        <li><a href="signup">Register</a></li>
      </ul>
    </div>
  </nav>
  <div class="img"></div>
  <div class="center">
    <div class="title">Make Your <span id="head" >Mental Health</span></div>
    <div class="sub_title">A Priority</div>
    <div class="btns">
      <button onclick="location.href='login'" type="button">Login</button>
      <button onclick="location.href='signup'" type="button">Join Now</button>
    </div>
  </div>
  
<section class="features" >

  <h1 class="features-head">Features</h1>

  <div class="wrapper">
    <div class="box">
       <div class="front-face">
          <div class="icon">
            <i class="fas fa-comments"></i>
          </div>
          <span>Chat</span>
       </div>
       <div class="back-face">
          <span>Chat</span>
          <p>
          We allow all participants to have a real-time synchronous discussion via the web. 
          </p>
       </div>
    </div>
    <div class="box">
       <div class="front-face">
          <div class="icon">
            <i class="fas fa-blog"></i>
          </div>
          <span>Blog</span>
       </div>
       <div class="back-face">
          <span>Blog</span>
          <p>
            We allow all authorized users to read and create blog.
          </p>
       </div>
    </div>
    <div class="box">
       <div class="front-face">
          <div class="icon">
            <i class="fas fa-headset"></i>
          </div>
          <span>Support</span>
       </div>
       <div class="back-face">
          <span>Support</span>
          <p>
            We provide 24/7 assistance to all authorized users.
          </p>
       </div>
    </div>
 </div>
</section>

<footer class="footer">
  <div class="icons">
     <a href="#"><i class="fab fa-facebook"></i></a>
     <a href="#"><i class="fab fa-linkedin"></i></a>
     <a href="#"><i class="fab fa-instagram"></i></a>
     <a href="#"><i class="fab fa-twitter"></i></a>
      <p class="company-name">
          HealingHub &copy; 2021, ALL Rights Reserved
      </p>
  </div>
</footer>

  
</body>

</html>
