<?php 

namespace Ood\Dip;

class MySQLConnection implements DBConnectionInterface
{
    public function connect() 
    {
        // handle the database connection
        return 'MySQL Database connected';
    }
}



