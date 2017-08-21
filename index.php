<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello</title>
</head>
<body>
    <form method="post" action="hello.php">
        <div>
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name"/>
        </div>
        <div>
            <label for="first_name">Prenom:</label>
            <input type="text" id="first_name" name="first_name"/>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age"/>
        </div>
        <input type="submit" value="OK">
    </form>
</body>
</html>