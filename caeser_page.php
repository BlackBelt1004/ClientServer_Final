<!doctype html>
<head> 
    <meta charset="utf-8">
    <h1>Caesar Cipher</h1>
    <link href="caeser_format.css" rel ="stylesheet"/>
</head>

<body>
    <header>
        <nav>
            <ul>
            <?php include 'includes/links_include.php';?>
            </ul>
        </nav>
    </header>
    <form>
    <label>Plaintext:</label>
        <input id = "userInput" type = "text" placeholder = "Secret Code">
        
        <label>Shift:</label>
        <input type = 'number' name = 'shift' value = '5' min = '1' max = '26'>
    <input type = 'submit' value='Encrypt'>
    </form>
    <h2>Encrypted Message</h2>
    <div id='output'></div>

 
</body>

<?php
$mysqli = new mysqli ("localhost", "Student", "Password123");
if($mysqli->connect_error){
    die("ERROR: Could not connect to database. ". $mysqli->connect_error);
}
//if form submit
if (isset($_POST['submit'])){
    echo '<div id = "message">';
    $inputError = false;
if(empty($_POST['Message'])){
    echo'ERROR: Please enter some form of feedback';
    $inputError = true;
} else {
     $encryption = $mysqli->escape_string($_POST['output']);
     $original = $mysqli->escape_string($_POST['userInput']);
     var_dump($encryption);
     var_dump($original);
}
if($inputError!=true){
    $sql = "INSERT INTO caesar_text(Caesar, Original)
    VALUES('$encryption, $original')";
    if($mysqli->query($sql)===true){
        echo 'New Encryption was added';
    } else {
        echo "ERROR: Could not execute query";
    }
}
}


echo '</div>';
$mysqli->close();
    ?>
<script src = 'cipher_ceaser.js'></script>
<script src = 'secret.js'></script>
</html>