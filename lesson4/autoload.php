<?php
function __autoload($class_name)
{
    //class directories
    $directorys = array(
        'DataBases/',
        'Components/DBConnection/',
        'Components/DBQueryBuilder/',
        'Components/DBRecord/',
    );

    //for each directory
    foreach($directorys as $directory)
    {
        if(file_exists($directory.$class_name . '.php'))
        {
            require_once($directory.$class_name . '.php');
            return;
        }
    }
}