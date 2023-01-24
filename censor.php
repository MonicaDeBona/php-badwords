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

    <title></title>
</head>

<body>
    <div class="container">
        <main>
            <div class="response">
                <p>
                    Your text:
                    <?php
                    $userParagraph = $_POST['paragraph'];
                    echo $userParagraph;
                    ?>
                </p>
                <p>
                    Paragraph length:
                    <?php
                    echo strlen($userParagraph);
                    ?>
                </p>
                <p>
                    Your text with censored word:
                    <?php
                    $censoredWord = $_POST['censor'];
                    $newUserParagraph = str_replace(strtolower($censoredWord), '***', strtolower($userParagraph));
                    echo $newUserParagraph;
                    ?>
                </p>
                <p>
                    Paragraph length:
                    <?php
                    echo strlen($newUserParagraph);
                    ?>
                </p>
            </div>
        </main>
    </div>
</body>

</html>