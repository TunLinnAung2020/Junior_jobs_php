<?php
namespace App\Controller;
require($_SERVER["DOCUMENT_ROOT"].'/vendor/autoload.php');
use App\config\Database;
use App\MOdel\Category;
$db = Database::getInstance();
$connection =$db->getConnection();
$category =new Category($connection);
$reult =$category->getData();
return $result;
?>