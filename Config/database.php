<?php
class DATABASE_CONFIG {

	//initalize variable as null
	var $default=null;
 
	//set up connection details to use in Live production server
	var $prod = 
		array(
			'datasource' => 'Database/Mysql',
			'prefix' => 'gp_',
			'persistent' => false,
			'host' => 'sql8.modules',
			'login' => '1257718-1',
			'password' => 'PJ9NN2J2',
			'database' => '1257718-1',
			'encoding' => 'utf8'
		);
 
	// and details to use on your local machine for testing and development			
	var $dev = 
		array(
			'datasource' => 'Database/Mysql',
			'prefix' => 'gp_',
			'persistent' => false,
			'host' => 'localhost',
			'login' => 'root',
			'password' => 'tettine',
			'database' => 'gestionalepalestra',
			'encoding' => 'utf8'
		);
	
 
	// the construct function is called automatically, and chooses prod or dev. UPdate! works for baking now
	function __construct ()
	{		
		//check to see if server name is set (thanks Frank)
		if(isset($_SERVER['SERVER_NAME'])){
			switch($_SERVER['SERVER_NAME']){
				case 'localhost':
					$this->default = $this->dev;
					break;
				case 'www.streetwall.it':
					$this->default = $this->prod;
					break;
			}
		}
	    else // we are likely baking, use our local db
	    {
	        $this->default = $this->dev;
	    }
	}
	
}
