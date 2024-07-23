<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kian's Friendly Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   </head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"poppins",sans-serif;
}
body{
    background-color: green;
    background-image: linear-gradient(to right, rgb(3, 168, 168), rgb(1, 233, 233) );
}
.container{
    background: #d6f3ff;
    width:450px;
    padding:1.5rem;
    margin:50px auto;
    border-radius:10px;
    box-shadow:0 25px 40px gray;
}

form{
    margin:0 2rem;
}
.form-title{
    font-size:30px;
    font-weight:bold;
    text-align:center;
    padding:1.3rem;
    margin-bottom:20px;
}
input{
    color:inherit;
    width:100%;
    background-color:transparent;
    border:none;
    border-bottom:1px solid #757575;
    padding-left:1.5rem;
    font-size:15px;
}
.input-group{
    padding:1% 0;
    position:relative;

}
.input-group i{
    position:absolute;
    color:black;
}
input:focus{
    background-color: transparent;
    outline:transparent;
    border-bottom:2px solid darkblue;
}
input::placeholder{
    color:transparent;
}
label{
    color:rgb(12 12 17);
    position:relative;
    left:1.2em;
    top:-1.3em;
    cursor:auto;
    transition:0.3s ease all;
    margin-left: 5px;
}
input:focus~label,input:not(:placeholder-shown)~label{
    top:-3em;
    color: darkblue;
    font-size:15px;
}
.recover{
    text-align:right;
    font-size:1rem;
    margin-bottom:1rem;

}
.recover a{
    text-decoration:underline;
    color: darkblue;
}
.recover a:hover{
    color: blue;
    text-decoration:underline;
}
.btn{
    font-size:1.1rem;
    padding:8px 0;
    border-radius:5px;
    outline:none;
    border:none;
    width:100%;
    background: darkblue;
    color: white;
    cursor:pointer;
    transition:0.9s;
}
.btn:hover{
    background: blue;
}
.or {
    font-size:20px;
    margin-top:10px;
    margin-bottom:10px;
    text-align:center;
}


.links{
    display:flex;
    justify-content:space-around;
    padding:0 4rem;
    margin-top:0.9rem;
}
button{
    color: darkblue;
    border:none;
    background-color:transparent;
    font-size:1rem;
    font-weight:bold;
    text-decoration:underline;
}
button:hover{
    text-decoration:underline;
    color: blue;
}
</style>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <div class="input-group">
            <i class="fas fa-home"></i>
            <input type="text" name="home_Address" id="home_Address" placeholder="address" required>
            <label for="address">Address</label>
        </div>
        <div class="input-group">
            <i class="fas fa-phone"></i>
            <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" required>
            <label for="phoneNumber">Phone Number</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton" >Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
         
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        
       
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
          
        </div>
      </div>
      <script src="script.js"></script>
</body>
</html>
