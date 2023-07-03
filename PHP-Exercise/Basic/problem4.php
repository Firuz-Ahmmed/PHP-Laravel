<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accept the user name and display the name through PHP echo statement</title>
</head>
<body>
    <form method="POST">
    <label for="">Username</label>
    <input type="text" placeholder="Name" name="uname">
    <input type="submit" value="Submit">
    </form>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['uname'];
    echo $name;}
    // echo '<input type="text" placeholder="Name" value="'. $name .'">';}
    ?>
</body>
</html>