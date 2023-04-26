<html>
<head>
<title>STUDENT REGISTRATION FORM</title>
<script type="text/javascript" src="validateform.js"></script>
<style>
    
h2{
 font-family: serif; 
 font-size: 28px;     
 font-style: large; 
 font-weight: bold; 
 color: pink;
 text-align: center; 
 text-decoration: underline
}
table{
 font-family: verdana; 
 color: rgb(218, 56, 204); 
 font-size: 20px; 
 font-style: large;
 font-weight: bold;  
 border-collapse: collapse; 
 border: 4px solid #000000;
 border-style: line;
  
}
table.inner{
 border: 10px
}
input[type=text], input[type=email], input[type=number]{
 width: 50%;
 padding: 6px 12px;
 margin: 5px 0;
 box-sizing: border-box;
}
input[type=submit], input[type=reset]{
 width: 15%;
 padding: 8px 12px;
 margin: 5px 0;
 box-sizing: border-box;
}
body{ background-color: rgb(34, 63, 90);}
</style>
</head>
<body>
<form action="display.php" method="POST" name="StudenSignupForm" onsubmit="return(validateHTMlform());">
<h2><span style="background : orange;">Student Registration Form</span></h3>
<table align="center" cellpadding = "10">

<tr>
<td>First Name</td>
<td><input required="" type="text" name="FirstName" maxlength="100" placeholder="shubhanshu" />
(Max 100 Characters Allowed)
</td>
</tr>

<tr>
<td>Last Name</td>
<td><input required=""  type="text" name="LastName" maxlength="100" placeholder="nishad"/>
(Max 100 Characters Allowed)
</td>
</tr>

<tr>
<td>Email ID</td>
<td><input required=""  type="email" name="EmailID" maxlength="100" placeholder="shubhanshuji@gmail.com"/></td>
</tr>

<tr>
<td>Mobile Number</td>
<td>
<input required=""  type="text" name="MobileNumber" maxlength="10" placeholder="9455593295"/>
(10 Digits Allowed)
</td>
</tr>

<tr>
    <td>Gender </td>
    <td>
    <input required="" type="radio" name="Gender" value="Male" />
    Male
    <input required="" type="radio" name="Gender" value="Female" />
    Female
    </td>

<tr>
<td>Date of Birth(DOB)</td>
<td>
    <input type="text" name="DOB" value="25-05-2002" required="" />
    (Date-Month-Year)</select>
</td>
</tr>

<tr>
<td>Address<br /><br /><br /></td>
<td><textarea required=""  name="Address" rows="10" cols="100"></textarea></td>
</tr>

<tr>
<td>City</td>
<td><input required=""   required="" type="text" name="City" maxlength="100" placeholder="sultanpur"/>
(Max 100 Characters Allowed)
</td>
</tr>

<tr>
<td>Pin Code</td>
<td><input  required="" type="Number" name="PinCode" maxlength="6" placeholder="284002"/>
(Max 6 Numbers Allowed)
</td>
</tr>

<tr>
<td>State</td>
<td><input required=""  type="text" name="State" maxlength="100" placeholder="Uttar Pradesh"/>
(Max 100 Characters Allowed)
</td>
</tr>

<tr>
<td>Country</td>
<td><input required=""  type="text" name="Country" placeholder="India" /></td>
</tr>



 <tr>
<td>Qualification <br /><br /><br /></td>
<td>
<br/>
<input required=""  type="text" name="HighSchool" placeholder="Enter your Higest education." /><br>
<!-- <input type="checkbox" name="HigherSchool" value="Higher School" />
Higher School(12th)<br/>
<input type="checkbox" name="Graduation" value="Graduation" />
Graduation(Bachelors)<br/>
</td> -->
</tr>

<tr>
<td>Courses<br />Applied For</td>
<td>
<input type="text" name="CourseBCA" ><br>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>