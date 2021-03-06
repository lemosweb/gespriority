<?php 

	class ConnectDB 
	{
		private static $db;

		public function __construct(){

			try {
				
					self::$db = new \PDO("mysql:host=localhost;dbname=gesprioritydb","root","root");

					self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);


			} catch (Exception $e) {
					
				echo $e->getCode();

			}

		}


		public static function getInstance(){

			if (!self::$db) {
				
				new ConnectDB();

			}

			return self::$db;

		}
	}