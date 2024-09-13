<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form validation</title>
    <style>
        form {
            /* border: 2px solid red; */
            display: inline-block;
            margin: 20px;
            padding: 30px;
        }

        input, textarea {
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

        #gen {
            display: inline;
        }

        #sub {
            font-size: .7em;
            padding: 8px 15px 8px 15px;
        }

    </style>
</head>
<body>
        <h1>Form Validation</h1>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            Name: <input id="input1" type="text" name="name" required><br>
            E-mail: <input type="email" name="email" required><br>
            Website: <input type="text" name="email"><br>
            Comment: <textarea name="name" rows="5" column="40" id=""></textarea>
            Gender: <input id="gen" type="radio" name="gender" value="female">Female
                    <input id="gen" type="radio" name="gender" value="female">Male
                    <input id="gen" type="radio" name="gender" value="female">Other
            <input id="sub" type="submit">
        </form>
</body>
</body>
</html>