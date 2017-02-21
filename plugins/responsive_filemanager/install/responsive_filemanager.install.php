<?php defined('MONSTRA_ACCESS') or die('No direct script access.');

$rand = sha1(uniqid(mt_rand()));
file_put_contents(ROOT . DS .'storage/database/sec.key', $rand);

