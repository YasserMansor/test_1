<?php

    include 'init.php';
    include $template . 'header.php';
    ?>
    //Check If The User Coming From HTTP POST Request
    If($_SERVER['REQUEST_METHOD']=='POST'){
        $Username=$_POST['username'];
        $password=$_POST['password'];
        $passhash=shar1($password);
        echo $passhash;
        
    }
    echo 
    <form action="<?php echo $_SERVER['PHP_SELF']?>" METHED="POST" class="login">
        <h4 class='text-center'>Admin Login</h4>
        <input class='form-control input-lg' type="text" data-text="placeholder"    name="username" id="" placeholder='Username' autocomplete='off'>
        <input class='form-control input-lg' type="text"     name="password" id="" placeholder='Password' autocomplete='off'>
        <input class='btn btn-lg btn-primary btn-block'    type="submit"  value="login" id="">
    </form>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" METHED="POST" class="login">
        <h4 class='text-center'>Admin Login</h4>
        <input class='form-control input-lg' type="text" data-text="placeholder"    name="username" id="" placeholder='Username' autocomplete='off'>
        <input class='form-control input-lg' type="text"     name="password" id="" placeholder='Password' autocomplete='off'>
        <input class='btn btn-lg btn-primary btn-block'    type="submit"  value="login" id="">
    </form>
<?php
    include $template . 'footer.php';
?>  