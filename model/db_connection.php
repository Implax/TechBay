<?php

    require('db_credentials.php'); 

    class db_connection
    {
	//properties
	public $db = null;
	public $results = null;

	function db_connect(){
		//connection
		$this->db = mysqli_connect(servername,username,password,dbname);
		//test the connection
		if (mysqli_connect_errno()) {
			return false;
		}else{
			return true;
		}
	}

    // Query Database
    function db_query($sqlQuery){
		if (!$this->db_connect()) {
			return false;
		}
		elseif ($this->db==null) {
			return false;
		}

		//run query
		$this->results = mysqli_query($this->db,$sqlQuery);
		if ($this->results == false) {
			return false;
		}else{
			return true;
		}

	}

    //Fetch Data
    function db_fetch(){
		//check if result was set
		if ($this->results == null) {
			return false;
		}
		elseif ($this->results == false) {
			return false;
		}
		//return a record
		return mysqli_fetch_assoc($this->results);

	}
}

?>