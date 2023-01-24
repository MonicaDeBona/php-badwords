<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">

    <title>PHP Badwords</title>
</head>

<body>
    <main>
        <div class="my-form">
            <h2>Badwords</h2>
            <form action="./censor.php" method="POST">
                <label for="paragraph">Type text</label>
                <input type="text" id="paragraph" name="paragraph" placeholder="Text">
                <label for="censor">Type the word to censor</label>
                <input type="text" id="censor" name="censor" placeholder="Word">
                <button type="submit">Send</button>
            </form>
        </div>
    </main>
</body>

</html>