<?php
//require_once '../filmy/php/db.php';
//require_once'../filmy/php/functions.php';
include 'SignIn.php';
    if(isset($_POST["send"])){
        $Name=$_POST["Name"];
        $Date=$_POST["Date"];
        $Phone=$_POST["Phone"];
        $mail=$_POST["mail"];
        $Password=$_POST["Password"];
function getAge($date){
//格式化出生時間年月日
$byear=date('Y',$date);
$bmonth=date('m',$date);
$bday=date('d',$date);
//格式化當前時間年月日
$tyear=date('Y');
$tmonth=date('m');
$tday=date('d');
//開始計算年齡
$age=$tyear-$byear;
if($bmonth>$tmonth || $bmonth==$tmonth && $bday>$tday){
$age--;
}
return $age;
}
        
$uriqi=strtotime($Date);      //將日期轉化為時間戳
$age=getAge($uriqi);
        if(empty($Name)|| empty($Date)|| empty($Phone)||  empty($mail)|| empty($Password)){
            echo "<script>
            alert('所有欄位必須填入資料');</script>";
        }
        else{
            $conn=OpenCon("MIS");
            $acc="SELECT * FROM Member";
            $acc="INSERT INTO Member(Name,Date,Phone,email,Password,LittleName,Age)VALUES('$Name','$Date','$Phone','$mail','$Password','','$age')";
            if(!mysqli_query($conn,$acc)){
               die("error!!!".mysqli_connect_error($conn));
            }
            else{
                echo "<script>
            alert('註冊成功，請再次登入會員');</script>";
       
            }
    mysqli_close($conn);
    //header("location:filmy-2.html");        
   }
            
        }
    
?>
<html>
    <head>
        
        <title>CSS</title>
        <meta charset="utf-8">
        <style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background-image:url('https://1.bp.blogspot.com/-dSgIL3lda7I/XucozBTgbZI/AAAAAAAAE9I/yiVI7Q5kfacuB7H5vxvG4wgTz-AedStjACK4BGAsYHg/%25E4%25B8%258B%25E8%25BC%2589.jpg');
    background-repeat:no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FFCC6E;
	background-color: #FFCC6E;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 600px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #ffCC6E, #ff416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
            </style>
    </head>
    <body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post" action="">
			<h1>Create Account</h1>
			
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="Name" id="Name" required>
            <input type="date" placeholder="生日(ex:2020-01-01)" name="Date" id="Date" required>
            <input type="tel" placeholder="Phone" name="Phone" id="Phone" required>
			<input type="email" placeholder="Email" name="mail" id="mail" required>
			<input type="password" placeholder="Password" name="Password" id="Password" required>
            <input type="password" placeholder="Password confirm" name="PasswordConfirm" id="Confirm" onchange="ca()" required>
            <div id="qw" style="display:none">密碼不一致</div>
            <script>
                function isHidden(oDiv){//認證兩次密碼輸入是否一樣函數
      var vDiv = document.getElementById(oDiv);
      vDiv.style.display = (vDiv.style.display == 'none')?'block':'none';
    }
                function ca(){//認證兩次密碼輸入是否一樣
                    var x=document.getElementById("Password");
                    var y=document.getElementById("Confirm");
                    var k=document.getElementById("qw");
                    if(x.value==y.value){
                       k.style.display='none';
                    }
                    else{
                        k.style.display='block';
                    }
                }
                </script>
			<button type="submit" name="send" >Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post" action="">
			<h1>Sign in</h1>
			<div class="social-container">

			</div>
			<span>or use your account</span>
			<input type="email" name="email" placeholder="Email" id="email"/>
			<input type="password" name="password"placeholder="Password" id="password"/>
            
			<a href="#">Forgot your password?</a>
			<button type="submit" name="log" id="log" >Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
    </body>
</html>