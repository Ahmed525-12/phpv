










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="server.php" method="get" enctype="multipart/form-data">

<label for="">first name</label>
<input type="text" name="name">
<label for="">last name</label>
<input type="text" name="last-name">

<label for="">email</label>
<input type="text" name="email">
<input type="file" name="myimage">

<label for="male">male</label>
<input type="radio" id="male" value="male" name="gender">

<label for="female">female</label>
<input type="radio" id="female" value="female" name="gender">
<label for="date">date</label>
<input type="date" id="date"  name="date">
<select name="country" >
<option >egypt</option>
<option >ksa</option>
<option >canda</option>


</select>
<button>send data</button>
</form>
</body>
</html>