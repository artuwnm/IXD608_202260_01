<?php

function MYSQLIAuth() {
	return [
		"localhost",  // mysql host
		"jinyeong", // mysql user name
		"jinyeong12", // mysql user password
		"jinyeong" // mysql database name
	];
}

function PDOAuth() {
	return [
		"mysql:host=localhost;dbname=jinyeong",  // host and database name
		"jinyeong", // mysql user name
		"jinyeong12", // mysql user password
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}