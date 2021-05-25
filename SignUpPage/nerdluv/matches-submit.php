<?php include("top.php"); ?>

<h1>Matches for <?= $_GET["name"] ?></h1>
<div class='match'>
    <?php printMatchesFromFile(); ?>
</div>

<?php include("bottom.php"); ?>

<?php

function printMatchesFromFile()
{

    $loginUser = "";
    foreach (file("singles.txt", FILE_IGNORE_NEW_LINES) as $loginUser) {
        if ($_GET["name"] == explode(",", $loginUser)[0]) {
            break;
        }
    }

    foreach (file("singles.txt", FILE_IGNORE_NEW_LINES) as $matchUser) {
        if (
            explode(",", $matchUser)[0] != explode(",", $loginUser)[0]

          
            && explode(",", $matchUser)[1] != explode(",", $loginUser)[1]

            && explode(",", $matchUser)[2] >= explode(",", $loginUser)[5]
            && explode(",", $matchUser)[2] <= explode(",", $loginUser)[6]

            && explode(",", $matchUser)[4] == explode(",", $loginUser)[4]

            && (
                str_split(explode(",", $matchUser)[3])[0] == str_split(explode(",", $loginUser)[3])[0]
                || str_split(explode(",", $matchUser)[3])[1] == str_split(explode(",", $loginUser)[3])[1]
                || str_split(explode(",", $matchUser)[3])[2] == str_split(explode(",", $loginUser)[3])[2]
                || str_split(explode(",", $matchUser)[3])[3] == str_split(explode(",", $loginUser)[3])[3]
            )

        ) {
        
            ?>
            <p><img src='https://raw.githubusercontent.com/uulen0201/CS472/main/SignUpPage/images/user.jpg' alt='user icon'><?= explode(",", $matchUser)[0] ?></p>
            <ul>
                <li><strong>gender:</strong><?= explode(",", $matchUser)[1] ?></li>
                <li><strong>age:</strong><?= explode(",", $matchUser)[2] ?></li>
                <li><strong>type:</strong><?= explode(",", $matchUser)[3] ?></li>
                <li><strong>OS:</strong><?= explode(",", $matchUser)[4] ?></li>
            </ul>

        <?php }
    }
}

?>

