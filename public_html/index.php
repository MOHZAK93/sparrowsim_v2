<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>document.write('<script src="script.js?dev=' + Math.floor(Math.random() * 100) + '"\><\/script>');</script>
<style>
* {box-sizing: border-box;}
body {font-family: Arial, Helvetica, sans-serif;background-image: url("./images/login.PNG");background-repeat: no-repeat;background-size: cover;}
img {vertical-align: middle;}
 

/* Caption text */
 
.but {
  color: #ffffff;
  position: absolute;
  bottom: 0px;
  left:0px;
}

.active {
  background-color: #717171;
} 
input[type=text],input[type=submit]{
  width: 80%;
  display: block;
  margin: auto;
  padding: 12px 20px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:#FF0000;
  color: #000;
  padding: 14px 20px;
  display: block;
  margin: auto;
  border: none;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}

.container {
    width: 300px;
    height: 300px;
    position: absolute;
    top:0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
}

</style>
</head>
<body>
<form action="https://sparrowsimv1.000webhostapp.com/main.php" method="post">
  
  <div class="container">
     <input id="fname" type="text" placeholder="First Name" name="fname" required><br>

     <input id="lname" type="text" placeholder="Last Name" name="lname" required style='margin-top:15px;'>
     
     <input type='submit' id="submit" value='Submit' name=success style='background-color:red;color:white; margin-top:60px; padding:5px;font-size: 20px;cursor:pointer;'>
   </div>
   
</form>
</body>
</html> 