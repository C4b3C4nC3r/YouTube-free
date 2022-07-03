<?php 


function autoload(string $class)
{
    $link_class = str_replace("\\","/","../".$class.".php");
    //echo "<br>".$link_class."<hr>";
    require $link_class;

}

spl_autoload_register("autoload");


?>