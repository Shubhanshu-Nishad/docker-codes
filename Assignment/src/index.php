<!DOCTYPE html>
<html>

<head>
    <title>Dynamic Website HEllo ...</title>
</head>

<body>
    <h3>Please fill out the form to continue!</h3>
    <form method="get" action="result.php" style="display: flex; flex-direction: column">
        <div style="margin-top: 1rem">
            <label for="name">Name</label>
            <input id="name" type="text" name="t1" />
        </div>
        <div style="margin-top: 1rem">
            <label for="gen">Gender</label>
            <input type="radio" name="gen" value="male" />Male
            <input type="radio" name="gen" value="female" />Female
        </div>
        <input type="submit" value="Continue" style="margin-top: 1rem; width: max-content" />
    </form>
    <footer style="margin-top: 2rem">©Copyright 2022 Shubhanshu Nishad
        :)</footer>
</body>

</html>