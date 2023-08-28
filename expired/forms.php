<h2>Text Input</h2>
<?php
if (isset($_POST['tx1'])) {
    echo htmlspecialchars($_POST['tx1']);
}
?>
<form action='' method='post'>
    <input type='text' name='tx1'>
    <input type='submit' name='Submit'>
</form>

<h2>Send Mail</h2>

<?php
if (mail("tmccormack14@fastmail.com", "Subject line", "Hello From MacOS"))
    echo "Sending Double OK\n";
else
    echo "Sending not OK\n";
?>





<h2>Login</h2>


<form action='' method='post'>
    User Name:
    <input type='text' name='username'>
    <br><br>
    Password:
    <input type='text' name='password'>
    <br><br>
    Gender:
    <input type='radio' name='gender' value='female'>♀
    <input type='radio' name='gender' value='male'>♂
    <input type='submit' name='submit' value='Register'>

</form>

<?php
$db = new mysqli(
    'localhost',
    'user',
    'password',
    'php'
);
if (isset($_POST['submit'])) {
    echo 'Welcome \n\n';
    echo $_POST['username'];
    echo '!';
}
?>