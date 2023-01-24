<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <header>
        <h1>Badwords</h1>
    </header>
    <main>
        <form action="./censor.php" method="GET">
            <label for="paragraph">Type text</label>
            <input type="text" id="paragraph" name="paragraph">
            <label for="censor">Type the word to censor</label>
            <input type="text" id="censor" name="censor">
            <button type="submit">Send</button>
        </form>
    </main>
</body>

</html>