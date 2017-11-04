<?php 
/*
*
* @ Deniz Güney Yıldırım
* @ dnzgny99@gmail.com
* @ 0534 665 56 29
*/
 

$config = [
    'host'      => 'localhost',
    'driver'    => 'mysql',
    'database'  => 'test',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix'     => ''
];

$db = new \Buki\Pdox($config);

$data = [
	'name' => 'Deniz',
	'surname' => 'Yıldırım',
	'age' => '24',
	'country' => 'Turkey',
	'city' => 'Ankara',
	'status' => 1
];

$query = $db->table('users')->insert($data);

if($query)
{
	echo 'Record added! <br />' . 
		 'InsertID: ' . $db->insertId();
}