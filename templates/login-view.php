<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

<!--Login Page-->
<html>
<body>
<div align="center">
    <h1>Login page</h1>
</div>

<form name="login">
    Username<input type="text" name="userid"/>
    <div style="width:5px;height:10px;border:0px;"></div>
    Password<input type="password" name="pswrd"/>
    <a href="http://localhost/conU/templates/Stats.html"><input type="button" onclick="check(this.form)" value="Login"/></a>
    <a href="http://localhost/conU/templates/NewUser.html">First time visitor? Click here</a>
    <a href="http://localhost/conU/templates/home.php">"<input type="button" value="Cancel"/></a>
</form>
<script language="javascript">
    function check(form) { /*function to check userid & password*/
        /*the following code checkes whether the entered userid and password are matching*/
        if(form.userid.value == "myuserid" && form.pswrd.value == "mypswrd") {
            window.open('Stats.html')/*opens the target page while Id & password matches*/
        }
        else {
            alert("Error Password or Username")/*displays error message*/
        }
    }
</script>
</body>

</html>

