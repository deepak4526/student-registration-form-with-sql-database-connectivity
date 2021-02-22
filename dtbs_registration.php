 <?php
 // SQL SERVER CONNECTION:-
     $con=new mysqli("localhost","root","","student");
     
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

// CREATING THE DATABASE FIRST:-
 	// $q="create database Student";
 	// $con->query($q);

// SELECTION OF DATABASE "STUDENT":-
 	$con ->select_db("student");


 // TABLE CREATION:-
 	// $sql="CREATE TABLE std ( SrNo INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, SName VARCHAR(30) NOT NULL , Email VARCHAR(20) NOT NULL , PNumber BIGINT, DOB VARCHAR(10), Course VARCHAR(20))";
    // $con->query($sql);

// FETCH DATA FROM HTML "STUDENT REGISTRATION FORM":-
if (isset($_GET['submit'])){
 	$name=$_GET['name']; $email=$_GET['email']; $phone=$_GET['phone'];
 	 $dob=$_GET['dob'];  
 	 $course=$_GET['course'];
 	$sql="INSERT INTO std (SName,Email,PNumber,DOB,Course) VALUES ('$name','$email',$phone,'$dob','$course')";
 	
 	
 		$con->query($sql);
 	}
 	
     $con->close();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Educational registration form</title>
    
        <style>
     
      body, input, select{ 
      padding: 0;
      margin: 0;
      outline: none;
      font-size: 16px;
      color: #eee;
      }
     
     h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
     
     form {
      padding: 50px;
      width:50%;
      margin:0 25% 0 23%;
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
     
      button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      width: 100%;
      }
      button:hover, {
      background: #85d6de;
      }

      @media only screen and (max-width: 768px) {
      form{
      	paddin:0px;
      	margin:0 15% 0 4%;
      	width:70%;
      }
      }
    </style>
  </head>
  <body>
      <form action="#" method="get">
        <div class="title">
          <h2>Student registration form</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Full name">
          <input type="text" name="email" placeholder="Email">
          <input type="tel" name="phone" placeholder="Phone number">
          <span style="display:block;"><label style="width:15%;float:left;margin-top:4px;">Date Of Birth:</label><input type="date" style="width:80%;float:right;" name="dob" value="1980-08-26"></span>
          <select name="course">
            <option value="course">Course*</option>
            <option value="JavaScript">JavaScript</option>
            <option value="PHP">PHP</option>
            <option value="SQL">SQL</option>
            <option value="jQuery">jQuery</option>
            <option value="Wordpress">Wordpress</option>
          </select>
        </div>
        <button type="submit" name="submit">Submit</button>
      </form>
    </div>
  </body>
</html>