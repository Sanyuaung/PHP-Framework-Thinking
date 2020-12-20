<?php
   function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
}
    function view($name,$data=[])
    {
        extract(
            $data
        );
        return require "View/$name.view.php";
    }






?>