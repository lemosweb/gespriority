<?php

require '../app/Helpers/Table.php';

class User extends Table
{
    protected $table = 'user';

    public function getName(){

         return 'Daniel';

    }
}