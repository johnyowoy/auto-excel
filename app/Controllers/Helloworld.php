<?php

    namespace App\Controllers;
    //use App\Config\Database;
    class Helloworld extends BaseController
    {
        public function index()
        {
            $db = \Config\Database::connect();
            //print_r($db);
            
            if ($db->simpleQuery('select top 5 * from city'))
            {
                echo 'Success';
            } else {
                echo 'Query failed' . '<br>';
                $error = $db->error();
                print_r($error);
            }

            //$query = $db->query('select top 10 * from city');
            //$result = $query->getResult();
            //print_r($result);
        }

        public function comment()
        {
            echo 'I am not flat!';

        }

    }
?>