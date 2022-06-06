<?php 

namespace Ood\Dip;

include __DIR__ . '/DBConnectionInterface.php';

use Ood\Dip\DBConnectionInterface;

class PasswordReminder
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function connect()
    {
        return $this->dbConnection->connect();
    }

}