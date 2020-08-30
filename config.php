<?php

	$db_host='localhost';
	$db_user='root';
	$db_pass='';
	$db_name='credit';

	try {
		$pdo= new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		echo $e->getMessage();
	}

?>
<!--
INSERT INTO users (user_id,user_name,email,user_credits) VALUES
(1,'Saloni Gharge','salonigharge034@gmail.com',200),
(2,'Shalaka Gharge','sgharge6@gmail.com',300),
(3,'Mrunal Kumbhar','mkum@gmail.com',400),
(4,'Aakanksha Deshpande','Adesh4@gmail.com',500),
(5,'Vaishnavi Garad','garadvaisa@gmail.com',600);
-->