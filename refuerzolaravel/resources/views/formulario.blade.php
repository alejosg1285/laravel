<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <fieldset>
        Name: <input type="text" id="name" name="name"/>
        <br/>
        Email: <input type="text" id="email" name="email"/>
        <br/>
        Passwd: <input type="password" id="password" name="password"/>
        <br/>
        <input type="submit" value="Enviar">
        {{csrf_field()}}
    </fieldset>
</form>
</body>
</html>