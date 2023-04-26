<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.bg {
    background-color: rgb(255,2,255);
}
.blue{
    background-color:#16AAFF;
}
.green{
    background-color: rgb(58,196,125);
}
table, th, td {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 15px;
  text-align: center;
}
</style>
</head>
<body>
    <table>
        <tr>
            <td>FirstName:</td>
            <td><?php echo $_POST['FirstName'] ?></td>
        </tr>
        <tr>
            <td>LastName:</td>
            <td><?php echo $_POST['LastName'] ?></td>
        </tr>
        <tr>
            <td>EmailID:</td>
            <td><?php echo $_POST['EmailID'] ?></td>
        </tr>
        <tr>
            <td>MobileNumber:</td>
            <td><?php echo $_POST['MobileNumber'] ?></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><?php echo $_POST['Gender'] ?></td>
        </tr>
        <tr>
            <td>Date of Birth(DOB):</td>
            <td><?php echo $_POST['DOB'] ?></td>
        </tr>
        <tr>
            <td>Address :</td>
            <td><?php echo $_POST['Address'] ?></td>
        </tr>
        <tr>
            <td>City :</td>
            <td><?php echo $_POST['City'] ?></td>
        </tr>
        <tr>
            <td>PinCode :</td>
            <td><?php echo $_POST['PinCode'] ?></td>
        </tr>
        <tr>
            <td>State :</td>
            <td><?php echo $_POST['State'] ?></td>
        </tr>
        <tr>
            <td>Country :</td>
            <td><?php echo $_POST['Country'] ?></td>
        </tr>

        <tr>
            <td> Highest Education :</td>
            <td><?php echo $_POST['HighSchool'] ?></td>
        </tr>
        <tr>
            <td>Course :</td>
            <td><?php echo $_POST['CourseBCA'] ?></td>
        </tr>
</table>





</body>
</html>