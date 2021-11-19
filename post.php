<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
  $id = $_GET['id'];
  $query = "SELECT * FROM `blogs` WHERE id = '".$id."' ";
  $result = mysqli_query($conn, $query) or die(mysql_error());
  $row = mysqli_fetch_array($result);
  $post = $row['post'];
  $author = $row['author'];
  $title = $row['title'];
  $image = $row['image_path'];


  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		/* Better box-sizing */
* { box-sizing: border-box; }
*{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    }
/* 1rem = 10px */
html { font-size: 62.5%; }

/* Default body */
body { 
  margin: 0; 
  opacity: 0;
  font: 1.6rem/1.875 'Avenir Next', sans-serif;
}

/* Loaded body */
body.loaded {
  opacity: 1;
  transition: 1s opacity;
}

/* Default banner */
.banner {
  position: relative;
  width: 100%;
  height: 45rem;
  padding: 0 5%;
  overflow: hidden;
  backface-visibility: hidden;
}

/* Default image container */
.banner .background {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  z-index: -1;
  transform: translate3d(0,0,0) scale(1.25);
  background: black url('<?php echo "$image";?>') no-repeat center center; 
  background-size: cover;
}

/* Loaded image container */
.loaded .banner .background {
  transform: scale(1);
  transition: 6.5s transform;
}

/* Other stuff */
.banner h1 {
  color: #EEE;
  margin: 0;
  line-height: 40rem;
  text-transform: uppercase;
  text-shadow: 0 0 .3rem black;
}

main { 
  width: 90%;
  margin: 5rem auto;
}

main p { margin: 0 0 3rem 0; }
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
    background: white;
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
    
</style>
</head>

<body>
  
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

    <!-- Header -->
<header class="banner">
  <span class="background"></span>
  <h1><?php echo $title;?></h1>
</header>

<!-- Other stuff -->
<main>
  <article>
    <h1><?php echo  "Author: ".$author;?></h1>
    <p><?php echo $post;?></p>
  
  </article>
</main>

<script type="text/javascript">
	window.onload = function() {
    document.body.className += ' loaded'
  };
</script>
</body>
</html>