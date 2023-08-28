<!-- The CSS attributes that format the HTML -->
<style>
    
</style>

<!-- The HTML Registration Form -->
<html>
    <head>
        <title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="styles/main.css" />
    </head>
    
    <div class='panel'>
        <form class='registration' action='' method='post'>
            Profile Information: <br><br>
            First Name: <input type='text' name='first_name'><br><br>
            Last Name: <input type='text' name='last_name'><br><br>
            <input type='submit' class="button-33" name='register_button' value='Register'>&nbsp;
            <input type='submit' class="button-33" name='clear' value='Clear'>
        </form>
    </div>
    

</html>

<!-- The PHP Server Code -->
<?php
// Initialize Variables:
$first_name = '';
$last_name = '';

if (isset($_POST['register_button'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    if ($first_name != '' and $last_name != '') {
        printf("Hello %s %s, Welcome to our platform", $first_name, $last_name);
    }
}
?>