<p>
    Your text:
    <?php
    $userParagraph = $_GET['paragraph'];
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
    $censoredWord = $_GET['censor'];
    $newUserParagraph = str_replace($censoredWord, '***', $userParagraph);
    echo $newUserParagraph;
    ?>
</p>
<p>
    Paragraph length:
    <?php
    echo strlen($newUserParagraph);
    ?>
</p>