<?php
# this php section listens for post requests, and registers new users

function vdexp(){

    printf("<h2>String Replace</h2>");
    $test_msg = "Taiwan";
    printf("Original String: %s <br>", $test_msg);
    $test_msg = str_replace("wan", "pei", $test_msg);
    printf("Updated String: %s <br>", $test_msg);

    /*
    $players = array('Lex', 'T-Bird', 'Kathy', 'Rob C.', 'Helen');
    printf("Indexed: <br>");
    var_dump($players);

    printf("<br><br><br>Named: <br>");
    $player_seasons = array(
        'Lex' => 'Africa',
        'T-Bird' => 'Africa',
        'Kathy' => 'Marquesas',
        'Rob C.' => 'Amazon',
        'Helen' => 'Thailand'
    );
    var_dump($player_seasons);

    printf("<br><br><br>Multidimensional <br>");
    $seasons_cast = array(
        'Borneo' => array('Sonja', 'BB', 'Stacey', 'Ramona', 'Dirk', 'Joel', 'Gretchen', 'Greg', 'Jenna', 'Gervase', 'Colleen', 'Sean', 'Sue', 'Rudy', 'Kelly', 'Richard'),
        'Australia' => array('Deb', 'Kel', 'Mad Dog', 'Mitchell', 'Kimmi', 'Skupin', 'Jeff', 'Alicia', 'Jerri', 'Nick', 'Amber', 'Roger', 'Elizabeth', 'Keith', 'Colby', 'Tina')
    );
    var_dump($seasons_cast);
    */
}


$show_experiment = true;


# initialize empty variables
$uname = '';
$pwd = '';
$show_vardump = '';

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

    if (isset($_POST['pwd']) && $_POST['pwd'] != '') {
        $pwd = $_POST['pwd'];
    }
    else{
        $valid = False;
    }

    if ($valid == True) {
        printf('User %s is successfully registered  <br><br>', $uname);
    }

    if (isset($_POST['show_vardump']) && $_POST['show_vardump'] != '' ){
        $show_vardump = $_POST['show_vardump'];
        vdexp();
    }
}
?>

<html>

<head>
    <title>Register</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body style='background-color:#e6f0ff'>
    <h2>Login</h2>
    <form action='' method='post'>
        Username: <input type='text' name='uname' value='<?php echo htmlspecialchars($uname) ?>'><br><br>
        Password: <input type='text' name='pwd'><br><br>
        <input type='checkbox' name='show_vardump' value='yes' <?php if($show_vardump == 'yes'){echo ' checked';} ?> >
        Run
        <br><br> 
        <input type='submit' name='submitb' value='Register'>
        <input type='submit' name='clearb' value='Clear'>
    </form>
</body>

<html>