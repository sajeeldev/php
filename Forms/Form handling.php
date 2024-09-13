<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
    <style>
        form {
            /* border: 2px solid red; */
            display: inline-block;
            margin: 20px;
            padding: 30px;
        }

        input {
            display: block;
            /* border: 2px solid red; */
            margin: 8px;
            padding: 8px;
            justify-content: center;
            align-items: center;
            background: #e2e2e2;
            outline: None;
            text-decoration: none;
            border: none;
            font-size: 1em;
        }

        #sub {
            font-size: .7em;
            padding: 8px 15px 8px 15px;
        }

    </style>
</head>
<body>
        <h1>Form Handling</h1>

        <p>The php superglobals $_GET and $_POST are used to collect form-data</p>

        <form action="welcome.php" method="POST">
            Name: <input id="input1" type="text" name="name" required><br>
            E-mail: <input type="email" name="email" required><br>
            <input id="sub" type="submit">
        </form>
</body>
</html> 