{source}

 
<!DOCTYPE html>
<html>
<head>

<style type = "text/css">

*{box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

</style>
<title></title>
</head>
<body>

 

 

 

<form id="form1" action = "er-report" method = "post" name ="form1">

 

<p>

<label for="name"> Full Name</label>

<input type="text" name="name" id="name"/>

</p>

<p>

<label for="fname"> First Name</label>

<input type="text" name="fname" id="fname"/>

</p>

<p>

<label for="mInit"> middle initial</label>

<input type="text" name="mInit" id="mInit"/>

</p>

<p>

<label for="lname"> Last Name</label>

<input type="text" name="lname" id="lname"/>

</p>

<p>

<label for="ID_Number"> Employee ID</label>

<input type="text" name="ID_Number" id="ID_Number"/>

</p>

<p>

<label for="jobTitle"> Job Title</label>

<input type="text" name="jobTitle" id="jobTitle"/>

</p>

<p>

<label for="Phone_Number"> Phone Number</label>

<input type="text" name="Phone_Number" id="Phone_Number"/>

</p>

<p>

<label for="Salary"> Salary</label>

<input type="text" name="Salary" id="Salary"/>

</p>

<p>

<label for="Attraction_Site_ID"> Attraction Site ID </label>

<input type="text" name="Attraction_Site_ID" id="Attraction_Site_ID"/>

</p>

<p>

<input type="submit" class = "registerbtn" name="submit" id="submit" value ="Submit"/>

</p>

</form>

 



</body>
</html>

 
 

 

 

{/source}
