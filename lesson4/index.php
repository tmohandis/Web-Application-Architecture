<?php

include 'autoload.php';

$db = new DataBase(new MySQL());
echo $db->record;