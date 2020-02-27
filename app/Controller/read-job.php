<?php
namespace app\Controller;
require('../../vendor/autoload.php');
use App\config\Database;
use App\Models\job;
$db =Database::getInstance();
$connection =$db->getConnection();
$job=new Job($connection);
$result =$job->getData();
return $result;
?>
