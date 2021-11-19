<?php 
 session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
  if (isset($_POST['add'])){
    $title = stripslashes($_REQUEST['title']);
        //escapes special characters in a string
    $title = mysqli_real_escape_string($conn, $title);

    $aname = stripslashes($_REQUEST['aname']);
        //escapes special characters in a string
    $aname = mysqli_real_escape_string($conn, $aname);

    $post = stripslashes($_REQUEST['post']);
        //escapes special characters in a string
    $post = mysqli_real_escape_string($conn, $post);

      $var1 = rand(1111,9999);  // generate random number in $var1 variable
      $var2 = rand(1111,9999);  // generate random number in $var2 variable
    
      $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
      $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

      $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
      $dst = "./all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
      $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

      move_uploaded_file($_FILES["image"]["tmp_name"],$dst); 
       // move image into the {all_images} folder with 32 characters hex number and image name
       $query = "INSERT INTO `blogs`(`post`, `author`, `title`, `image_path`) VALUES ('$post','$aname','$title','$dst_db')";
           $result   = mysqli_query($conn, $query);
            if ($result) {
                        header("Location: blog.php");
         
            }
  }

?>
<!DOCTYPE html>
<html>
<head>
	<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.fel{
	width: 40%;
	height: auto;
	background-color: lightblue;
	text-align: center;
	margin: auto;
	padding-top: 10px;
  padding-bottom: 10px;
	border-radius: 5px;
	overflow: auto;
}
.frm {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;
  width: 70%;
  margin: auto;
}

.button {
    display: block;
    width: 115px;
    height: 50px;
    background: #4E9CAF;
    text-align: center;
    border-radius: 5px;
    color: white;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 25px;
    padding-top: 10px;
    padding: 10px;
    margin:auto;
    padding-bottom: 10px;
    margin-bottom: 5px;
    margin-top: 5px;
}

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
    text-decoration: none;
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
	<title></title>
	<link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
 
  <div class="frm">
  <form method="POST" enctype = "multipart/form-data">

    <label for="title">Title</label>
    <input type="text" id="exam_title" name="title" placeholder="Title..">

    <label for="post">Post</label>
    <br>
    <textarea rows="15" cols="126" id="post" name="post" placeholder="POST....">
    </textarea>
    <br>
    <label for="aname">Author name</label>
    <input type="text" id="aname" name="aname" placeholder="Your name">
    
    <label for="image">Select an Image</label>
    <input type="file" name="image" value="image" id="image" Required>
    
    
    <input type="submit" value="Create" name = "add" id="add">
  </form>
</div>


</table>

</body>
</html>