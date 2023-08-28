<h2>Select Bar</h2>
<select name='dll'>
    <option value='i1'>one</option>
    <option value='i2'>two</option>
    <option value='i3'>three</option>
    <option value='i4'>four</option>
</select>
<h2>Checkbox</h2>
<input type='checkbox' name='chb1' value='on'>
<input type='checkbox' name='chb2' value='on'>
<input type='checkbox' name='chb3' value='on'>
<input type='checkbox' name='chb4' value='on'>

<h2>Radio Buttons</h2>
<input type='radio' name='g1' value='op1'>
<input type='radio' name='g1' value='op2'>
<input type='radio' name='g1' value='op3'>
<input type='radio' name='g1' value='op4'>

<h2>PHP</h2>
<?php
    #echo 'Hello World!';
    #phpinfo();
    if(isset($_POST['tx1'])){
        echo htmlspecialchars($_POST['tx1'], ENT_QUOTES);
    }
?>
<h2>Form</h2>
<form action='' method='post'>
    <input type='text' name='tx1'>
    <input type='submit' value='Search'>
</form>