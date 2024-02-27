<?php
	//select column_name,data_type from information_schema.columns where table_schema = 'drkmh_drkmh' and table_name = 'tbl_navigation_details'
	function recordsToInsert($tablename,$feilds_to_insert){
		//Insert query started
		// "insert into table(,,) values('name','email')";
	    global $conn;
		$allTableInsertSql = "";
		$allTableInsertSql .="INSERT into ".$tablename;
		$allTableInsertSql .= " (".implode(",", array_keys($feilds_to_insert)).") VALUES";
		$allTableInsertSql .= "('".implode("','", array_values($feilds_to_insert))."')";
		//echo $allTableInsertSql;
		//echo $conn -> real_escape_string($allTableInsertSql);
		//$new_value = str_replace("'","\'", $allTableInsertSql); 
		$allTableInsertQuery = $conn->query($allTableInsertSql);
		if($allTableInsertQuery){
			return true;
		}
	}//Insert query ended

	function update($table_name, $fields, $where_condition){  
		   global $conn;
           $query = '';  
           $condition = '';  
           foreach($fields as $key => $value)  
           {  
                $query .= $key . "='".$value."', ";  
           }  
           $query = substr($query, 0, -2);  
           
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . "='".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           
           $querys = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";  
           $allTableUpdateQuery = $conn->query($querys);

           if($allTableUpdateQuery)  
           {  
                return true;  
           }  
      }  

	// New addition Added 

	function selectMultipleMenuRecord($table_name,$menu_levels,$menu_status){
		global $conn;
		//echo $user_session = isset($_SESSION['user_id'])?$_SESSION['user_id']:"";
		$menuMultipleRecord_sql = "SELECT * FROM $table_name where level ='$menu_levels' and cate_status = '$menu_status' ORDER BY priority ASC" ;
		$menuMultipleRecord_query = $conn->query($menuMultipleRecord_sql);
		//return $login_result = $login_query->fetch_assoc();
		$menuMultipleRecord_row = $menuMultipleRecord_query->num_rows;
		if($menuMultipleRecord_row != 0){
			while($menuMultipleRecord_result = $menuMultipleRecord_query->fetch_assoc()) { //loop the rows returned from db
	        	$menuMultipleRecordArr[] = $menuMultipleRecord_result; //add row to array
	    	}
	    	//return $mediaArr; 
	    	$data = array();
			$data['menuMultipleRecord_count'] = $menuMultipleRecord_row;
			$data['menuMultipleRecord_details'] = $menuMultipleRecordArr;
			return json_encode($data);
		}
	}

	function selectMultipleMenuLevelRecord($table_name,$menu_levels,$menu_id,$menu_status){
		global $conn;
		//echo $user_session = isset($_SESSION['user_id'])?$_SESSION['user_id']:"";
		$menuMultipleLevelRecord_sql = "SELECT * FROM $table_name where level ='$menu_levels' and sub_id ='$menu_id' and cate_status = '$menu_status' ORDER BY priority ASC" ;
		$menuMultipleLevelRecord_query = $conn->query($menuMultipleLevelRecord_sql);
		//return $login_result = $login_query->fetch_assoc();
		$menuMultipleLevelRecord_row = $menuMultipleLevelRecord_query->num_rows;
		if($menuMultipleLevelRecord_row != 0){
			while($menuMultipleLevelRecord_result = $menuMultipleLevelRecord_query->fetch_assoc()) { //loop the rows returned from db
	        	$menuMultipleLevelRecordArr[] = $menuMultipleLevelRecord_result; //add row to array
	    	}
	    	//return $mediaArr; 
	    	$data = array();
			$data['menuMultipleLevelRecord_count'] = $menuMultipleLevelRecord_row;
			$data['menuMultipleLevelRecord_details'] = $menuMultipleLevelRecordArr;
			return json_encode($data);
		}
	}


	

	function selectUserNav($table_name,$menu_id,$categories_group,$status){
		global $conn;
		//echo $user_session = isset($_SESSION['user_id'])?$_SESSION['user_id']:"";
		$selectUserNav_sql = "select * from $table_name where menu_id = '$menu_id' and  categories_group = '$categories_group' and cate_status = '$status'" ;
		$selectUserNav_query = $conn->query($selectUserNav_sql);
		//return $login_result = $login_query->fetch_assoc();
		$selectUserNav_row = $selectUserNav_query->num_rows;
		if($selectUserNav_row != 0){
			while($selectUserNav_result = $selectUserNav_query->fetch_assoc()) { //loop the rows returned from db
	        	$selectUserNavArr[] = $selectUserNav_result; //add row to array
	    	}
	    	//return $mediaArr; 
	    	$data = array();
			$data['selectUserNav_count'] = $selectUserNav_row;
			$data['selectUserNav_details'] = $selectUserNavArr;
			return json_encode($data);
		}
	}

	function selectEmailMobileCheck($table_name,$email,$mobileNo){
		global $conn;
		//echo $user_session = isset($_SESSION['user_id'])?$_SESSION['user_id']:"";
		$selectEmailMobileCheck_sql = "select regId,email,mobileNo from $table_name where email = '$email' or mobileNo = '$mobileNo'" ;
		$selectEmailMobileCheck_query = $conn->query($selectEmailMobileCheck_sql);
		//return $login_result = $login_query->fetch_assoc();
		$selectEmailMobileCheck_row = $selectEmailMobileCheck_query->num_rows;
		if($selectEmailMobileCheck_row != 0){
			while($selectEmailMobileCheck_result = $selectEmailMobileCheck_query->fetch_assoc()) { //loop the rows returned from db
	        	$selectEmailMobileCheckArr[] = $selectEmailMobileCheck_result; //add row to array
	    	}
	    	//return $mediaArr; 
	    	$data = array();
			$data['selectEmailMobileCheck_count'] = $selectEmailMobileCheck_row;
			$data['selectEmailMobileCheck_details'] = $selectEmailMobileCheckArr;
			return json_encode($data);
		}
	}

	function selectLoginCheck($table_name,$username,$password){
		global $conn;
		//echo $user_session = isset($_SESSION['user_id'])?$_SESSION['user_id']:"";
		$selectLoginCheck_sql = "select regId,firstName,email,mobileNo from $table_name where (email = '$username' or mobileNo = '$username') and password ='$password' " ;
		$selectLoginCheck_query = $conn->query($selectLoginCheck_sql);
		//return $login_result = $login_query->fetch_assoc();
		$selectLoginCheck_row = $selectLoginCheck_query->num_rows;
		if($selectLoginCheck_row != 0){
			while($selectLoginCheck_result = $selectLoginCheck_query->fetch_assoc()) { //loop the rows returned from db
	        	$selectLoginCheckArr[] = $selectLoginCheck_result; //add row to array
	    	}
	    	//return $mediaArr; 
	    	$data = array();
			$data['selectLoginCheck_count'] = $selectLoginCheck_row;
			$data['selectLoginCheck_details'] = $selectLoginCheckArr;
			return json_encode($data);
		}
	}

	function selectLoginDetails($table_name,$loginId){
		global $conn;
		//echo $user_session = isset($_SESSION['user_id'])?$_SESSION['user_id']:"";
		$selectLoginDetails_sql = "select * from $table_name where regId = '$loginId'" ;
		$selectLoginDetails_query = $conn->query($selectLoginDetails_sql);
		//return $login_result = $login_query->fetch_assoc();
		$selectLoginDetails_row = $selectLoginDetails_query->num_rows;
		if($selectLoginDetails_row != 0){
			while($selectLoginDetails_result = $selectLoginDetails_query->fetch_assoc()) { //loop the rows returned from db
	        	$selectLoginDetailsArr[] = $selectLoginDetails_result; //add row to array
	    	}
	    	//return $mediaArr; 
	    	$data = array();
			$data['selectLoginDetails_count'] = $selectLoginDetails_row;
			$data['selectLoginDetails_details'] = $selectLoginDetailsArr;
			return json_encode($data);
		}
	}

	

?>
