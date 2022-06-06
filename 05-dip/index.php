<?php 

include __DIR__ . '/PasswordReminder.php';
include __DIR__ . '/MySQLConnection.php';
include __DIR__ . '/PgSQLConnection.php';

use Ood\Dip\PasswordReminder;
use Ood\Dip\MySQLConnection;
use Ood\Dip\PgSQLConnection;

$mysql = new MySQLConnection();
$pgsql = new PgSQLConnection();
$my_pwd = new PasswordReminder($mysql);
$pg_pwd = new PasswordReminder($pgsql);

echo $my_pwd->connect();
echo "\n";
echo $pg_pwd->connect();