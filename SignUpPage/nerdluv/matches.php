<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NerdLuv</title>

    <!-- instructor-provided CSS and JavaScript links; do not modify -->
    <link href="https://raw.githubusercontent.com/uulen0201/CS472/main/SignUpPage/heart.gif" type="image/gif" rel="shortcut icon"/>
    <link href="nerdluv.css" type="text/css" rel="stylesheet"/>
</head>

<body>
<div id="bannerarea">
    <img src="https://raw.githubusercontent.com/uulen0201/CS472/main/SignUpPage/nerdluv.png" alt="banner logo"/> <br/>
    where meek geeks meet
</div>

<!-- your HTML output follows -->
		
<form action="matches-submit.php" method="get">

    <fieldset>
        <legend>Returning User:</legend>

        <ul>
            <li>
                <!--
                Name: A label and 16-letter box for the user to type a
                name. Initially empty. Submit to the server as a query
                parameter name.
                -->
                <strong>Name:</strong>
                <input type="text" name="name" size="16"/>
            </li>
        </ul>

        <!--
        When the user presses "View My Matches," the form submits
        its data as a GET request to matches-submit.php. The
        name of the query parameter sent should be name, and its
        value should be the encoded text typed by the user. For
        example, when the user views matches for Rosie O Donnell,
        the URL should be:
        matches-submit.php?name=Rosie+O+Donnell
        -->
        <input type="submit" value="View My Matches"/>
    </fieldset>
</form>

<!-- shared page bottom HTML -->
<div>
    <p>
        This page is for single nerds to meet and date each other! Type in your personal information and wait for the
        nerdly luv to begin! Thank you for using our site.
    </p>

    <p>
        Results and page (C) Copyright NerdLuv Inc.
    </p>

    <ul>
        <li>
            <a href="index.php">
                <img src="https://raw.githubusercontent.com/uulen0201/CS472/main/SignUpPage/back.gif" alt="icon"/>
                Back to front page
            </a>
        </li>
    </ul>
</div>

<div id="w3c">
    <a href="https://validator.w3.org/check?uri=https://turing.manhattan.edu/~fkane01/Manhattan_Web_Course/project4/nerdluv/index.php">
        <img src="images/w3c-html.png" alt="Valid HTML"/></a>
    <a href="http://jigsaw.w3.org/css-validator/validator?uri=https://turing.manhattan.edu/~fkane01/Manhattan_Web_Course/project4/nerdluv/nerdluv.css">
        <img src="images/w3c-css.png" alt="Valid CSS"/></a>
</div>
</body>
</html>
