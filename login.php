<!-- The CSS attributes that format the HTML -->
<style>
    .panel {
        background-color: #e0e0e0; /* ##ffdbe5 (pink) #E6E6FA (purple)*/
        border-radius: 25px;
        padding: 20px;
        width:25%;
    }
    .registration {
        font-family: Arial, Helvetica, sans-serif;
        font-size:20px;
    }
    .panel-box {
        padding-left: 0.5%;
    }

    .button-33 {
        background-color: #c2fbd7;
        border-radius: 100px;
        box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
        color: green;
        cursor: pointer;
        display: inline-block;
        font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
        padding: 7px 20px;
        text-align: center;
        text-decoration: none;
        transition: all 250ms;
        border: 0;
        font-size: 16px;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-33:hover {
        box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
        transform: scale(1.05) rotate(-1deg);
    }

</style>

<!-- The HTML Registration Form -->
<div class ='panel-box'>
<div class='panel'>
    <form class='registration' action='' method='post'>
        Profile Information: <br><br>
        First Name: <input type='text' name='first_name'><br><br>
        Last Name: <input type='text' name='last_name'><br><br>
        <input type='submit' class="button-33" name='register_button' value='Register'>&nbsp;
        <input type='submit' class="button-33" name='clear' value='Clear'>
    </form>
</div>
</div>

<!-- The PHP Server Code -->
<?php
// Initialize Variables:
$first_name = '';
$last_name = '';

if (isset($_POST['register_button'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    if($first_name != '' and $last_name != ''){
        printf("Hello %s %s, Welcome to our platform", $first_name, $last_name);
    }
}
?>