<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <title>HEALING HUB</title>
    <style type="text/css">
     
    .nav-area{
    background: #262626;
    height: 62px;
    width: 100%;
    }
    .logo {
    color: rgb(255, 136, 0);    
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
    background: darkorange;
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
        color: black;
    }
    .nav-area ul li a:hover{
        background: none;
        color: black;
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
      <li><a href="#">Logout</a></li>
    </ul>
    </div>
      
</body>
</html>