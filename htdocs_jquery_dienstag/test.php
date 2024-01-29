<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="styles/stylesheet.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <title>09.01.2024</title>
</head>
<body>
<div class="nav">
        <ul>
            <li>
                <a href="test.php">Home</a>
            </li>
            <li>
                <a href="qa.php">Q&A</a>
            </li>
        </ul>
        
    <div>
        <table border="1" bgcolor="yellow">
            <tr>
                <th> numb </th>
                <th> name </th>
                <th> location</th>
            </tr>
            <tr>
                <th> 1</th>
                <th> andi </th>
                <th>wien</th>
            </tr>
            <tr>
                <th> 2</th>
                <th> michi </th>
                <th> kapfenberg</th>
            </tr>
        </table> <br>

        <table border="2" bgcolor="pink">
            <tr>
                <th colspan="6">First Year Class</th>
            </tr>
            <tr>
                <th colspan="3">CS </th>
                <th colspan="1">CTech</th>
                <th colspan="2">Math</th>
            </tr>
            <tr>
                <th>CS100</th>
                <th>CS110</th>
                <th>CS115</th>
                <th>Ctech</th>
                <th>Math100</th>
                <th>Math110</th>
            </tr>
        </table><br>

        <table border="3" bgcolor="lightblue">
            <tr>
                <th colspan="2">Second Year Class</th>
            </tr>
            <tr>
                <th rowspan="3">CS</th>
                <th>CS100</th>
            </tr>
            <tr>
                <th>CS110</th>
            </tr>
            <tr>
                <th>CS115</th>
            </tr>
            <tr>
                <th>Ctech</th>
                <th>Ctech</th>
            </tr>
            <tr>
                <th rowspan="2">Math</th>
                <th>Math100</th>
            </tr>
            <tr>
                <th>Math110</th>
            </tr>

        </table>
    </div>

    <div class="contentarea" id="result">
        
        <form id="contactForm" action="" method="POST">
            <label class="label" for="firstname">Vorname: </label><br>
            <input class="input" id="firstname" type="text" name="firstname" ><br><br>
            <label class="label" for="lastname">Nachnahme: </label><br>
            <input class="input" id="lastname" type="text" name="lastname"><br><br>
            <label class="label" for="email">E-Mail:</label><br>
            <input class="input" id="email" type="text" name="email" ><br><br>

            <label class="label" for="location">Ort:</label><br>
            <input class="input" id="location" type="text" name="location" placeholder="Ort"/><br><br>
            <label class="label" for="postcode">Postleitzahl:</label><br>
            <input class="input" id="postcode" type="text" name="postcode" placeholder="Postleitzahl" ><br><br>
            <label class="label" for="country">Land:</label><br>
            <input class="input" id="country" type="text" name="country" placeholder="Land" ><br><br>
            <br>
            <button class="submit" type="button" name="button" onclick="submitForm()">bestätigen</button>
        </form>
    </div>
</body>
    </div>
</html>