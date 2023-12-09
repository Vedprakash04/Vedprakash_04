<!DOCTYPE html>
<html>
<head>
  <style>
    h3{
      color: #03e9f4;
    }
    h4{
      color: lightskyblue;
    }
    hr{
        border-width: 10px;
    }
    h1{
      color:#03e9f4 ;
    }

    a{text-decoration:none;
      padding: 70px;
      color: black;}
  
  </style>

</head>
<body style="background-color:black;color: white;">
  <div class="container" style="border:2px solid gray;">
  <div class="row">
    <div class="col-md-12" style="background-color:white;"><center><img src="logo.jpg" width="600px"></center>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12" style="background-color:darkgray;color:whitesmoke;font-size:20px;">
       <center> <a href="home.html">Home</a>
        <a href="resume.php">Resume</a>
        <a href="important.html">Importent Links</a></center>
       
          </div></div>
<form method="post" action="resume1.php"><center><u><h1>RESUME</h1></u></center>
   <h3>Personal Details:</h3></br>
   Name:<input type="text" name="name"><br>
   Present Address:<textarea name="pre1"></textarea><br>
   E-mail:<input type="email" name="email"><br>
   Contact No:<input type="number" name="number"><br><hr>
   <h3>Educational Qualification:</h3>

   <h4>10th Qualification</h4><br>
   Qualification:<input type="text" name="q1"><br>
   Board/University:<input type="text" name="b1"><br>
   Year of Passing:<input type="number" name="year1"><br>
   Percentage:<input type="number" name="per1"><br>

   <h4>12th Qualification</h4><br>
   Qualification:<input type="text" name="q2"><br>
   Board/University:<input type="text" name="b2"><br>
   Year of Passing:<input type="number" name="year2"><br>
   Percentage:<input type="number" name="per2"><br><hr>

   <h3>Technical Qualification:</h3>
   Qualification:<input type="text" name="q3"><br>
   University:<input type="text" name="b3"><br>
   Year of Passing:<input type="number" name="year3"><br>
   Percentage:<input type="number" name="per3"><br><br><br><hr>
   Project Topic:<input type="area" name="pname"><br><br>
   Training:<textarea name="tname"></textarea><br><br>
   <center><input type="Submit" value="Submit" style="background-color:green;"><button style="background-color:red;"><a href="resume.php" style="text-decoration: none;color: black;">Cancel</a></button></center>
</div>
</form>
</body>
</html>