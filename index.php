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
        if (!preg_match($regex_uname, $uname)) {
            printf('ERROR: Username %s is missing a number<br>', $uname);
            $valid = False;
        }
    } else {
        $valid = False;
    }

    if(isset($_POST['pwd']) && $_POST['pwd'] != ''){
        $pwd = $_POST['pwd'];
    }
    
    if($valid == True){
        printf('User %s is successfully registered  <br><br>', $uname);
    }
}
?>

<html>

<head>
    <title>Register</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body style='background-color:#b3d1ff'>
    <form action='' method='post'>
        Username: <input type='text' name='uname' value='<?php echo htmlspecialchars($uname) ?>'><br><br>
        Password: <input type='text' name='pwd'><br><br>
        <input type='submit' name='submitb' value='Register'>    
        <input type='submit' name='clearb' value='Clear'>    
    </form>
</body>

<html>