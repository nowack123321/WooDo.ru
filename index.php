<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: http://mysite/Сайт%20дипломной%20работы%20.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="3ace2b349f56448fade4f584817cdc44.ico" type="image/x-icon">
    <title></title>
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}


html, body{
  display: grid;
  height: 100vh;
  width: 100%;
  place-items: center;
  background-color: #242424;
  
}
::selection{
  background: #ff80bf;

}
.container{
  background: #fff;
  max-width: 350px;
  width: 100%;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
  
}

.container form .title{
  font-size: 30px;
  font-weight: 600;
  margin: 20px 0 10px 0;
  position: relative;
}
.container form .title:before{
  content: '';
  position: absolute;
  height: 4px;
  width: 33px;
  left: 0px;
  bottom: 3px;
  border-radius: 5px;
  background: linear-gradient(to right, #99004d 0%, #ff0080 100%);
}
.container form .input-box{
  width: 100%;
  height: 45px;
  margin-top: 25px;
  position: relative;
}
.container form .input-box input{
  width: 100%;
  height: 100%;
  outline: none;
  font-size: 16px;
  border: none;
}
.container form .underline::before{
  content: '';
  position: absolute;
  height: 2px;
  width: 100%;
  background: #ccc;
  left: 0;
  bottom: 0;
}
.container form .underline::after{
  content: '';
  position: absolute;
  height: 2px;
  width: 100%;
  background: linear-gradient(to right, #99004d 0%, #ff0080 100%);
  left: 0;
  bottom: 0;
  transform: scaleX(0);
  transform-origin: left;
  transition: all 0.3s ease;
}
.container form .input-box input:focus ~ .underline::after,
.container form .input-box input:valid ~ .underline::after{
  transform: scaleX(1);
  transform-origin: left;
}
.container form .button{
  margin: 40px 0 20px 0;
}
.container .input-box input[type="submit"]{
  background: linear-gradient(to right, #99004d 0%, #ff0080 100%);
  font-size: 17px;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.container .input-box input[type="submit"]:hover{
  letter-spacing: 1px;
  background: linear-gradient(to left, #99004d 0%, #ff0080 100%);
}
.container .option{
  font-size: 14px;
  text-align: center;
}
.container .facebook a,
.container .twitter a{
  display: block;
  height: 45px;
  width: 100%;
  font-size: 15px;
  text-decoration: none;
  padding-left: 20px;
  line-height: 45px;
  color: #fff;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.container .facebook i,
.container .twitter i{
  padding-right: 12px;
  font-size: 20px;
}
.container .twitter a{
  background: linear-gradient(to right,  #00acee 0%, #1abeff 100%);
  margin: 20px 0 15px 0;
}
.container .twitter a:hover{
  background: linear-gradient(to left,  #00acee 0%, #1abeff 100%);
  margin: 20px 0 15px 0;
}
.container .facebook a{
  background: linear-gradient( to right,  #3b5998 0%, #476bb8 100%);
  margin: 20px 0 50px 0;
}
.container .facebook a:hover{
  background: linear-gradient( to left,  #3b5998 0%, #476bb8 100%);
  margin: 20px 0 50px 0;
}


   </style>
   
</head>

<body>
<div class="container">
    <form id="registrationForm" action="register.php" method="post">
        <div class="title">WooDo</div>
        <div class="input-box underline">
            <input type="text" placeholder="phone number" name="login" id="login" value="+7" pattern="\+7[0-9]{10}" required>
            <div class="underline"></div>
        </div>
        <div class="input-box">
            <input type="password" placeholder="password" name="pass" id="pass" required>
            <div class="underline"></div>
        </div>
        <div class="input-box button">
            <input type="submit" name="" value="Continue" id="submitButton" disabled>
        </div>
    </form>
</div>


      <script>
         document.addEventListener('DOMContentLoaded', function () {
        var submitButton = document.getElementById('submitButton');
        var loginInput = document.getElementById('login');
        var passInput = document.getElementById('pass');
        function validateForm() {         
            if (loginInput.value.trim() === '' || passInput.value.trim() === '') {
                submitButton.disabled = true; 
            } else {
                submitButton.disabled = false; 
            }         
            var phonePattern = /^\+?[1-9]\d{1,14}$/; 
            if (!phonePattern.test(loginInput.value)) {
                loginInput.setCustomValidity("Логин должен быть корректным номером телефона.");
            } else {
                loginInput.setCustomValidity(""); 
            }
        }    
        loginInput.addEventListener('input', function () {
            loginInput.value = loginInput.value.replace(/[^0-9\+]/g, '');
            validateForm();
        });       
        validateForm();
        loginInput.addEventListener('input', validateForm);
        passInput.addEventListener('input', validateForm);
    });
      </script>
      
</body>
</html>