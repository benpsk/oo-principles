<?php 

namespace Ood\Dip;

class PgSQLConnection implements DBConnectionInterface
{
    public function connect() 
    {
        // handle the database connection
        return 'PgSQL Database connected';
    }
}



