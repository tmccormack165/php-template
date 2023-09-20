<?php

# initialize empty variables
$uname = '';
$pwd = '';

# add rule that the username must contain a number
$regex_uname = '/.*\d.*/';

# if the submitb variable has been posted on the html form, then enter this block
if (isset($_POST['submitb'])) {

    $valid = True; # the submission will only be valid if all of the below conditions are met

    # if the username is posted and is not the default value, update the contents of $uname
    if (isset($_POST['uname']) && $_POST['uname'] != '') {
        $uname = $_POST['uname'];
    } 
    else {
        $valid = False;
    }

    if(isset($_POST['pwd']) && $_POST['pwd'] != ''){
        $pwd = $_POST['pwd'];
    }
    else {
        $valid = False;
    }

}
?>

<html>

<head>
    <title>Register</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--<link rel="stylesheet" href="styles/main.css" />-->

</head>

<body style='background-color:lightgray'>
    <form action='' method='post'>
        Username: <input type='text' name='uname' value='<?php echo htmlspecialchars($uname) ?>'><br><br>
        Password: <input type='text' name='uname' value='<?php echo htmlspecialchars($uname) ?>'><br><br>

        <input style='float:left; margin-right:5px' type='submit' name='submitb' value='Register'>
        <input style='float:left;' type='submit' name='clearb' value='Clear'>

    </form>
</body>

<html>