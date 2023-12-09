<html>  
<head>  
    <title>PHP login system</title>  
     
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<body>  
    <div class="login-box">
  <h2>Login</h2>
  <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">
    <div class="user-box">
      <input type = "text" id ="user" name  = "user" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type = "password" id ="pass" name  = "pass" required="">
      <label>Password</label>
    </div>
    <button id = "btn" style="background-color:black;">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      
      SUBMIT
    </button>
  </form>
</div>
    
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  