<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./Login.css">
</head>
<body>
<div class="container">
    <form action="" method="post">
        <h2>Registration</h2>
        <div class="content">        <div class="input-box">
           <label for="name">Full Name</label> 
           <input type="text" name="name" placeholder="Full Name" required>
           
        </div>
        <div class="input-box">
            <label for="username">username</label> 
            <input type="text" name="username" placeholder="Enter username" required>
            
         </div>
         <div class="input-box">
            <label for="email">Email</label> 
            <input type="tel" name="email" placeholder="Enter your phone number" required>
            
         </div>
         <div class="input-box">
            <label for="phonenumber">Phone Number</label> 
            <input type="text" name="phonenumber" placeholder="Full Name" required>
            
         </div>
         <div class="input-box">
            <label for="Password">Password</label> 
            <input type="password" name="Password" placeholder="Enter Password" required>
            
         </div>
         <div class="input-box">
            <label for="confpassword">Confirm Password</label> 
            <input type="password" name="confassword" placeholder="Enter confirm Password" required>
            
         </div>
         <span class="gender-title">Gender</span>
         <div class="gender-category">
            <input type="radio" name="gender" id="male">
            <label for="gender">Male</label>
            <input type="radio" name="gender" id="male">
            <label for="gender">Female</label>
            <input type="radio" name="gender" id="other">
            <label for="gender">Other</label>
         </div>
         <div class="alert">
            <p>By clicking sing up, you agree to our Terms, Privacy Policy and Coolies Policy. 
            
            </p>
         </div>
         <div class="contain">

         </div>
    <div class="button-container">
        <button type="submit">Register</button>
    </div>
    </form>
</div>

</div>

</body>
</html>