<?php 
 session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	*{
	  margin: 0;
	  padding: 0;
	  font-family: "Open Sans",sans-serif;
	}

	body{
	  background-color: aliceblue;
	  min-height: 100vh;
	 
	}
	
    .nav-area{
    background: #262626;
    height: 62px;
    width: 100%;
    }
    .logo {
    color: white;    
    line-height: 70px;
    padding: 20px 40px;
    font-size: 22px;
    font-weight: bold;
    }
    .nav-area ul{
    float: right;
    margin-right: 20px;
    }
    .nav-area ul li {
    display: inline-block;
    line-height: 60px;
    margin: 0 5px;
    }
    .nav-area ul li a {
    color: #fff;
    font-size: 14px;
    padding: 22px 15px;
    text-transform: uppercase;
    font-weight: bold;
    }
    .nav-area ul li a:hover{
    background: white;
    color: black;
    transition: .5s;
    }
    .btn-area{
    font-size: 30px;
    color: white;
    float: right;
    line-height: 62px;
    margin-right: 40px;
    cursor: pointer;
    display: none;
    }
    #box{
    display: none;
    }
    @media (max-width: 860px){
    .btn-area{
    display: block;
    }
    .nav-area ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background: darkorange;
    top: 62px;
    left: -100%;
    text-align: center;
    transition: all .5s;
    }
    .nav-area ul li {
    display: block;
    margin: 0;
    line-height: 30px;
    padding: 25px 0;
    }
    .nav-area ul li a{
    font-size: 30px;
    }
    .nav-area ul li:hover{
        background: #000;
    }
    .nav-area ul li a:hover{
        background: none;
    }
    #box:checked ~ ul{
    left: 0;
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
    .bg-gradient1 span,
.bg-gradient1:before {
  background: #52A0FD;
  background: linear-gradient(to right, #52A0FD 0%, #00e2fa 80%, #00e2fa 100%);
}

.bg-gradient2 span,
.bg-gradient2:before {
  background: #44ea76;
  background: linear-gradient(to right, #44ea76 0%, #39fad7 80%, #39fad7 100%);
}

.bg-gradient3 span,
.bg-gradient3:before {
  background: #fa6c9f;
  background: linear-gradient(to right, #fa6c9f 0%, #ffe140 80%, #ffe140 100%);
}

/* General */
.wrapper {
  margin: 5% auto;
  text-align: center;
  transform-style: perserve-3d;
  perspecive: 800px;
}

a {
  text-decoration: none;
}
a:hover, a:focus, a:active {
  text-decoration: none;
}

/* fancy Button */
.fancy-button {
  display: inline-block;
  margin: 30px 500px ;
  font-family: "Montserrat", Helvetica, Arial, sans-serif;
  font-size: 17px;
  letter-spacing: 0.03em;
  text-transform: uppercase;
  color: #ffffff;
  position: relative;
}
.fancy-button:before {
  content: "";
  display: inline-block;
  height: 40px;
  position: absolute;
  bottom: -5px;
  left: 30px;
  right: 30px;
  z-index: -1;
  border-radius: 30em;
  filter: blur(20px) brightness(0.95);
  transform-style: preserve-3d;
  transition: all 0.3s ease-out;
}
.fancy-button i {
  margin-top: -1px;
  margin-right: 20px;
  font-size: 1.265em;
  vertical-align: middle;
}
.fancy-button span {
  display: inline-block;
  padding: 18px 60px;
  border-radius: 50em;
  position: relative;
  z-index: 2;
  will-change: transform, filter;
  transform-style: preserve-3d;
  transition: all 0.3s ease-out;
}
.fancy-button:focus, .fancy-button:active {
  color: #ffffff;
}
.fancy-button:hover {
  color: #ffffff;
}
.fancy-button:hover span {
  filter: brightness(1.05) contrast(1.05);
  transform: scale(0.95);
}
.fancy-button:hover:before {
  bottom: 0;
  filter: blur(10px) brightness(0.95);
}
.fancy-button.pop-onhover:before {
  opacity: 0;
  bottom: 10px;
}
.fancy-button.pop-onhover:hover:before {
  bottom: -7px;
  opacity: 1;
  filter: blur(20px);
}
.fancy-button.pop-onhover:hover span {
  transform: scale(1.04);
}
.fancy-button.pop-onhover:hover:active span {
  filter: brightness(1) contrast(1);
  transform: scale(1);
  transition: all 0.15s ease-out;
}
.fancy-button.pop-onhover:hover:active:before {
  bottom: 0;
  filter: blur(10px) brightness(0.95);
  transition: all 0.2s ease-out;
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
</style>
</head>

<body>
      <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
    <div class="nav-area">
        <input type="checkbox" id="box">
        <label for="box" class="btn-area"><i class="fa fa-bars"></i></label>
        <label class="logo">HealingHub</label>
      <ul>
        <li><a href="dashboard">Home</a></li>
        <li><a href="users">Chat</a></li>
        <li><a href="blog">Blog</a></li>
        <li><a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>">Logout</a></li>
      </ul>
    </div>

    <a href="createBlog" class="fancy-button bg-gradient1"><span><i class="fa fa-wheelchair-alt"></i>Create a blog</span></a>
    <br>
    <div class="c">
    <div class="blog-posts">
    <?php 
     $query = "SELECT * FROM `blogs`";
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
        <span class="date">
     <div class="flex">
  <a href="<?php echo $path;?>" class="bttn" style=" color: #333;
  text-decoration: none;
  transition: 0.3s all ease;">More</a>
</div>
</span>
      </div>
    </div>    
    <?php 
      }
    ?>
</div>
</div>
</body>
</html>