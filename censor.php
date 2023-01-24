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