<?php

namespace utiility;

class validate
{

    static function password($pass)
    {
        if(!count($pass)>=6)
        {
            return false;
        }
        else
        {
            return true;
        }


    }


}




?>