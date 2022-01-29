<!doctype html>
<head> 
    <meta charset="utf-8">
    <h1>Atbash Cipher</h1>
    <link href="atbash_format.css" rel ="stylesheet"/>
</head>
<body>
    <header>
        <nav>
            <ul>
                <?php include 'includes/inc_text_links.php';?>
            </ul>
        </nav>
    </header>
    <form>
        <label>Plaintext:</label>
        <input id = "userInput" type = "text" placeholder = "Secret Code">
    <input type = 'submit' value='Encrypt'>
    </form>
    <h2>Encrypted Message</h2>
    <div id='output'> 
    </div>

</body>
<?php
$mysqli = new mysqli ("localhost", 'Student', "Password123", "atbash_text");
if($mysqli===false){
    die("ERROR: Could not connect to database. ".mysqli_connect_error());
}
//if form submit
if (isset($_POST['submit'])){
    echo '<div id = "message">';
}

$inputError = false;
if(empty($_POST['Message'])){
    echo'ERROR: Please enter some form of feedback';
    $inputError = true;
} else {
     $encryption = $mysqli->escape_string($_POST['output']);
     $original = $mysqli->escape_string($_POST['userInput']);
}
if($inputError!=true){
    $sql = "INSERT INTO atbash_text(Atbash, Original)
    VALUES('$encryption, $original')";
    if($mysqli->query($sql)===true){
        echo 'New Encryption was added';
    } else {
        echo "ERROR: Could not execute query";
    }
}
echo '</div>';
$mysqli->close();
    ?>
<script src = 'cipher_atbash.js'></script>
<script src = 'secret.js'></script>
</html>