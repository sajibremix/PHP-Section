<?php
/*
 * Project: Futimmo (api)
 * Copyright: 2018-2018, Jakir Hossen (contact@jshossen.com)
 * Version: 1.0
 * Author: Jakir Hossen
 */
	class table {
		var $mysqli;
		var $table_name;
		var $shop_id_col = false;
		public function __construct() {
			$this->mysqli = dbconnect();
			$this->table_name = get_class($this);

			$result = $this->mysqli->query("SHOW COLUMNS FROM $this->table_name LIKE 'shop_id'");
			if($result->num_rows > 0){
				$this->shop_id_col = true;
			}
		}

		public function selectAll($fields='',$extra_logic='',$page=1,$limit=250){

			if($fields == "") $fields = "*";
			if($page > 0){
                $page = $page-1;
                $page = $page*$limit;
            }else{
                return $this->error_custom('Page starts from 1');
            }
            
            if($limit > 250){
                return $this->error_custom("Can't fetch more than 250");
            }

            $sql = "SELECT $fields FROM $this->table_name";
            if($this->shop_id_col){
            	$sql .= " WHERE shop_id=$this->shop_id";
            	if($extra_logic != ''){
	        		$sql .= " AND ".$extra_logic;
	        	}
            }else if($extra_logic != ''){
	        	$sql .= " WHERE ".$extra_logic;
            }
			$sql .= " LIMIT $page,$limit";

			if($pres = $this->mysqli->query($sql)){

				if($pres->num_rows > 0){
					$result = array();
					$res = $pres->fetch_all( MYSQLI_ASSOC );
					foreach ($res as $key => $row) {
						foreach ($this->restricted_fields as $rf) {
							unset($row[$rf]);
						}
						$result[] = $row;
					}
					return array('status'=>'success',$this->table_name=>$result);
				}else{
					return array('status'=>'success',$this->table_name=>array());
				}
			}else{
				return $this->error($this->mysqli->errno,$this->mysqli->error,$sql);
			}
		}

		public function selectOne($id,$fields='',$extra_logic=''){
			if($fields == "") $fields = "*";
            $sql = "SELECT $fields FROM $this->table_name";
            if($id != ""){
            	$sql .= " WHERE id=".$id;
            	if($extra_logic != ''){
	        		$sql .= " AND ".$extra_logic;
	        	}
            }else if($extra_logic != ''){
	        	$sql .= " WHERE ".$extra_logic;
            }else{
            	return $this->error_custom('Need id or one condition for get single row.');
            }

            if($this->shop_id_col){
            	$sql .= " AND shop_id=$this->shop_id";
            }
            

			if($pres = $this->mysqli->query($sql)){
				if($pres->num_rows > 0){
					$result = $pres->fetch_array( MYSQLI_ASSOC );
					foreach ($this->restricted_fields as $rf) {
						unset($result[$rf]);
					}
					return array('status'=>'success',$this->table_name=>$result);
				}else{
					return array('status'=>'success',$this->table_name=>array());
				}
			}else{
				return $this->error($this->mysqli->errno,$this->mysqli->error,$sql);
			}
		}



		//$data = array('field_name'=>'Field value')
		public function insert($data){
			$fields = "";
			$fields_value = "";
			foreach ($data as $key => $value) {
				$fields .= $key.",";
				$fields_value .= "'".$this->mysqli->real_escape_string($value)."',";
			}
			$fields = substr($fields, 0 ,-1);
			$fields_value = substr($fields_value, 0 ,-1);

            $result = $this->mysqli->query("SHOW COLUMNS FROM $this->table_name LIKE 'created_at'");
			if($result->num_rows > 0){
				$fields .= ",created_at";
				$fields_value .= ",'".date("Y-m-d H:i:s")."'";
			}
			$result = $this->mysqli->query("SHOW COLUMNS FROM $this->table_name LIKE 'updated_at'");
			if($result->num_rows > 0){
				$fields .= ",updated_at";
				$fields_value .= ",'".date("Y-m-d H:i:s")."'";
			}
			if($this->shop_id_col){
            	$fields .= ",shop_id";
				$fields_value .= ",".$this->shop_id;
            }

        	$sql = "INSERT INTO $this->table_name ($fields)VALUES ($fields_value)";

			if($pres = $this->mysqli->query($sql)){
				return $this->selectOne($this->mysqli->insert_id);
			}else{
				return $this->error($this->mysqli->errno,$this->mysqli->error,$sql);
			}
		}


		//$data = array('field_name'=>'Field value')
		public function update($id,$data){
			$updated_fields = "";
			foreach ($data as $key => $value) {
				if(!in_array($key, $this->restricted_fields) && $key != 'id'){
					$updated_fields .= $key."='".$this->mysqli->real_escape_string($value)."',";
				}
			}
			$updated_fields = substr($updated_fields, 0 ,-1);

			
			$result = $this->mysqli->query("SHOW COLUMNS FROM $this->table_name LIKE 'updated_at'");
			if($result->num_rows > 0){
				$updated_fields .= ",updated_at='".date("Y-m-d H:i:s")."'";
			}

            $sql = "UPDATE $this->table_name SET $updated_fields WHERE id=$id";
			if($this->shop_id_col){
				$sql .= " AND shop_id=$this->shop_id";
            }

			if($pres = $this->mysqli->query($sql)){
				return $this->selectOne($id);
			}else{
				return $this->error($this->mysqli->errno,$this->mysqli->error,$sql);
			}
		}
		
		public function error($errno, $error, $query){
			return array(
						'status'=>'fail',
						'message'=>array(
									'error_no'=>$errno,
									'error'=>$error,
									'query'=>$query
								)
						);
		}

		public function error_custom($message){
			return array(
						'status'=>'fail',
						'message'=>$message
						);
		}


	}
?>
