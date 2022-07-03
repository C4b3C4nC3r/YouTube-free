



<?php


require "../Resources/View/Template/header.php";

    /**
     * 
     * JOB THE APP
     * 
    */
?>
<form>
    <div class="form-control">
        <label for="username">Username</label>
        <input class="input-form" type="text" name="username" id="username">
    </div>
    <div class="form-control">
        <label for="password">Password</label>
        <input class="input-form" type="password" name="password" id="password">
    </div>
    <div class="form-control">
        <button class="btn" type="submit">Login</button>    
    </div>

</form>
<?php

require "../Resources/View/Template/footer.php";


