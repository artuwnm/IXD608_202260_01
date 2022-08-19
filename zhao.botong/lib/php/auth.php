<?php

function MYSQLIAuth() {
	return[
		"localhost",		//mysql host
        "botong_wnm608",	//mysql user name
        "botong_wnm608",	//mysql user password
        "botong_wnm608",	//mysql database name
	];
}

function PDOAuth() {
	return[
		"mysql:host=localhost;dbname=botong_wnm608",		//host and database name
        "botong_wnm608",	//mysql user name
        "botong_wnm608",	//mysql user password
        [PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}