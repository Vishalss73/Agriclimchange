<?php
class config {
    private $db_host ="localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "agriclimchane";
    private $result = array();
    private $mysqli = "";
    private $conn = false;
    private $myQuery = "";// used for debugging process with SQL return
 public function __construct() {
    if(!$this->conn) {
        $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        return true;
      
        if($this->mysqli->connect_error) {
array_push($this->result, $this->mysqli->connect_error);
return false;
        }
    }
    else {
        return true;
        echo "Connection Successful";
    }



 }
 public function insert($table, $param=array() ) {
    if( $this->tableexists($table)) {
       
        $table_columns = implode(',',array_keys($param));
        $table_values = implode("','",$param);
        $sql = "INSERT INTO $table ($table_columns) VALUES ('$table_values')";
       if($this->mysqli->query($sql)) {
        array_push($this->result,$this->mysqli->insert_id);
        return true;
       }
       else {
        array_push($this->result,  $this->$mysqli ->error);
        return false;
           }    }
    else {

    }

 }
// Function to update row in database
public function update($table,$params=array(),$where = null){
    // Check to see if table exists
  	if($this->tableExists($table)){
      // Create Array to hold all the columns to update
      $args = array();
      foreach ($params as $key => $value) {
        $args[] = "$key = '$value'"; // Seperate each column out with it's corresponding value
      }

      $sql = "UPDATE $table SET " . implode(', ', $args);
      if($where != null){
        $sql .= " WHERE $where";
      }
      // Make query to database
      if($this->mysqli->query($sql)){
        array_push($this->result,$this->mysqli->affected_rows);
        return true; // Update has been successful
      }else{
        array_push($this->result, $this->mysqli->error);
        return false; // Update has not been successful
      }
    }else{
      return false; // The table does not exist
    }
  }
//Function to delete table or row(s) from database
public function delete($table,$where = null){
    // Check to see if table exists
  	if($this->tableExists($table)){
      $sql = "DELETE FROM $table";  // Create query to delete rows
      if($where != null){
        $sql .= " WHERE $where";
      }
      // Submit query to database
      if($this->mysqli->query($sql)){
        array_push($this->result,$this->mysqli->affected_rows);
      }else{
        array_push($this->result, $this->mysqli->error);
        return false; // The query did not execute correctly
      }
      
    }else{
      return false; // The table does not exist
    }
  }

  // Function to SELECT from the database
	public function select($table, $rows="*",$join = null,$where = null,$order=null,$limit=null){
    // Check to see if the table exists
    if($this->tableExists($table)){
       // Create query from the variables passed to the function
       $sql = "SELECT $rows FROM $table";
       if($join != null){
         $sql .= " $join";
       }
       if($where != null){
         $sql .= " WHERE $where";
       }
       if($order != null){
         $sql .= " ORDER BY $order";
       }
       if($limit != null){
         if(isset($_GET['page'])){
           $page = $_GET['page'];
         }else{
           $page = 1;
         }
         $start = ($page - 1) * $limit;
         $sql .= " LIMIT $start,$limit";
       }

       $query = $this->mysqli->query($sql);

       if($query){
         $this->result = $query->fetch_all(MYSQLI_ASSOC);
         return true; // Query was successful
       }else{
         array_push($this->result, $this->mysqli->error);
         return false; // No rows were returned
       }
    }else{
      return false; // Table does not exist
    }
 }

 private function tableexists($table) {
   $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
   $tableInDB = $this->mysqli->query($sql);
   if($tableInDB) {
    if($tableInDB->num_rows ==1) {
        return true;
    }
    else {
        array_push($this->result, $table. "Does not exist table ");
        return false;
    }
   }
 }
 public function getresult() {
    $val = $this->result;
    $this->result = array();
    return $val;
 }
// Escape your string
public function escapeString($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $this->mysqli->real_escape_string($data);
}

public function sql($sql){
  $this->myQuery = $sql; // Pass back the SQL
  $query = $this->mysqli->query($sql);

  if($query){
    $sql_array = explode(' ',$sql);
    switch ($sql_array[0]) {
      case "INSERT":
        array_push($this->result,$this->mysqli->insert_id);
        break;
      case "UPDATE":
        array_push($this->result,$this->mysqli->affected_rows);
        break;
      case "DELETE":
        array_push($this->result,$this->mysqli->affected_rows);
        break;
      case "SELECT":
        array_push($this->result,$query->fetch_all(MYSQLI_ASSOC));
        break;
    }
    // $this->result = $query->fetch_all(MYSQLI_ASSOC);
    return true; // Query was successful
  }else{
    array_push($this->result,$this->mysqli->error);
    return false; // No rows where returned
  }
}
//Pass the SQL back for debugging
public function getSql(){
  $val = $this->myQuery;
  $this->myQuery = array();
  return $val;
}
public function create_slug($string){
  $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
  return $slug;
}
 public function __destruct() {
    if($this->conn) {
        if($this->mysqli->close()) {
            $this->conn = false;
        }
    }
    else {
        return false;
    }
 }

}
 
?>