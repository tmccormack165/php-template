<?php
$uname = '';
$pwd = '';
$color = '';
$lang = [];
$ec = '';
$comments = '';
$tc = '';

# add rule that the username must contain a number
$regex_uname = '/.*\d.*/';


if (isset($_POST['submitb'])) {
    $valid = True;
    if (isset($_POST['uname']) && $_POST['uname'] != '') {
        $uname = $_POST['uname'];
        if (!preg_match($regex_uname, $uname)) {
            //echo 'ERROR USERNAME IS MISSING NUMERIC CHAR <br>';
            printf('Username %s is missing a number <br><br>', $uname);
        }
    } else {
        $valid = False;
    }

    if (isset($_POST['pwd']) && $_POST['pwd'] != '') {
        $pwd = $_POST['pwd'];
    } else {
        $valid = False;
    }

    if (isset($_POST['color']) && $_POST['color'] != '') {
        $color = $_POST['color'];
    } else {
        $valid = False;
    }

    if (isset($_POST['languages']) && is_array($_POST['languages']) && count($_POST['languages']) != 0) {
        $lang = $_POST['languages'];
    } else {
        $valid = False;
    }
    /*
    if(isset($_POST['languages']) && !is_array($_POST['languages']) && count($_POST['languages']) === 0){
    $lang = $_POST['languages'];
    }
    else{
    $valid = False;
    }
    */
    if (isset($_POST['ec']) && $_POST['ec'] != '') {
        $ec = $_POST['ec'];
    } else {
        $valid = False;
    }

    if (isset($_POST['comments']) && $_POST['comments'] != '') {
        $comments = $_POST['comments'];
    } else {
        $valid = False;
    }

    if (isset($_POST['tc']) && $_POST['tc'] != '') {
        $tc = $_POST['tc'];
    } else {
        $valid = False;
    }

    if ($valid == True) {
        //print user data to console

        printf('Username: %s <br>
                Password: %s <br>
                Color: %s <br>
                Languages: %s <br>
                Eye Color: %s <br>
                Comments: %s <br>
                Terms & Conditions: %s <br>',
            htmlspecialchars($uname),
            htmlspecialchars($pwd),
            htmlspecialchars($color),
            htmlspecialchars(implode(' ', $lang)),
            htmlspecialchars($ec),
            htmlspecialchars($comments),
            htmlspecialchars($tc)
        );


        // insert data

        // instantiate database

        //connect to bible_ol database
        $db = new mysqli(
            'localhost',
            'root',
            '',
            'bible_ol'
        );

        //insert user into the database
        $query1 = sprintf("INSERT INTO users (username, password, favorite_color)
                           VALUES ('%s', '%s', '%s')", $db->real_escape_string($uname),
            $db->real_escape_string($pwd), $db->real_escape_string($color)
        );

        $db->query($query1);

        echo '<p>User Added</p>';

        //close bible_ol database
        $db->close();



        echo 'complete';


        // construct query
        /*
        $sql = sprintf(
        'INSERT INTO users (username, password, favorite_color) VALUES ('%s', '%s', '%s') ',
        $db->real_escape_string($uname), $db->real_escape_string($pwd), $db->real_escape_string($color)
        );
        
        echo $sql;
        */
        //$db->query($sql);
        //echo '<p>User Added.</p>';
        //$db->close();

    }

}
?>
<html>
<form action='' method='post'>
    Username: <input type='text' name='uname' value='<?php echo htmlspecialchars($uname) ?>'><br><br>
    Password: <input type='text' name='pwd'><br><br>
    Favorite Color:
    <select name=''>
        <option value=''>Please Select</option>
        <option value='#03fc8c' <?php
        if ($color == '#03fc8c') {
            echo ' selected';
        }
        ?>>Green</option>
        <option value='#03adfc' <?php
        if ($color == '#03adfc') {
            echo ' selected';
        }

        ?>>Blue</option>
        <option value='#fc0356' <?php
        if ($color == '#fc0356') {
            echo ' selected';
        }
        ?>>Red</option>
        <option value='#fcc203' <?php
        if ($color == '#fcc203') {
            echo ' selected';
        }
        ?>>Orange</option>
    </select>
    <br><br>
    Eye Color:
    <input type='radio' name='ec' value='br' <?php
    if ($ec == 'br') {
        echo ' checked';
    }
    ?>>brown
    <input type='radio' name='ec' value='bl' <?php
    if ($ec == 'bl') {
        echo ' checked';
    }
    ?>>blue
    <input type='radio' name='ec' value='gr' <?php
    if ($ec == 'gr') {
        echo ' checked';
    }
    ?>>green


    <br><br>
    Languages:
    <select name='languages[]' multiple size='3'>

        <option value='french' <?php if (in_array('french', $lang)) {
            echo ' selected';
        } ?>>French</option>

        <option value='dutch' <?php if (in_array('dutch', $lang)) {
            echo ' selected';
        } ?>>Dutch</option>

        <option value='russian' <?php if (in_array('russian', $lang)) {
            echo ' selected';
        } ?>>Russian</option>

        <option value='german' <?php if (in_array('german', $lang)) {
            echo ' selected';
        } ?>>German</option>

        <option value='swedish' <?php if (in_array('swedish', $lang)) {
            echo ' selected';
        } ?>>Swedish</option>

        <option value='finnish' <?php if (in_array('finnish', $lang)) {
            echo ' selected';
        } ?>>Finnish</option>

        <option value='english' <?php if (in_array('english', $lang)) {
            echo ' selected';
        } ?>>English</option>




    </select>
    <br><br>
    Comments <textarea name='comments'><?php echo htmlspecialchars($comments); ?></textarea>
    <br><br>
    <input type='checkbox' name='tc' value='ok' <?php if ($tc == 'ok') {
        echo ' checked';
    } ?>>
    I accept the Terms &amp; Conditions
    <br><br>
    <input type='submit' name='submitb' value='Register'>
    <input type='submit' name='clear' value='Clear'>


</form>

</html>