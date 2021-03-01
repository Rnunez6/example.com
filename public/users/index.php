<?php
include '../../core/db_connect.php';
require '../../core/bootstrap.php';

$meta=[];
$meta['title']='User Home';
checkSession();

$content=null;
$stmt = $pdo->query("SELECT * FROM users");

while ($row = $stmt->fetch())
{

    $content .= "<a href=\"view.php?email={$row['email']}\">{$row['first_name']}</a>";
}

include '../../core/layout.php';