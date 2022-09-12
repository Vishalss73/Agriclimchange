<?php
 class account {
public function login() {
    $DB = new config();
if(isset($_POST['login'])) {
    if(empty($_POST['username']) && empty($_POST['password'])){
        echo json_encode(array('error'=>'name_empty')); exit;
    }
    else {
 $username= $DB->escapeString($_POST['username']);
 $password = $DB->escapeString($_POST['password']);
 $colName = "*";
$where = "'$username' = 'vishal' AND '$password' = 'Vishal@#' ";
 if ( $DB->select('users',$colName,null,$where,null,null)) {
    echo "Query Run";
    $response = $DB->getresult();
    if(!empty($response)){
        if(count($response[0]) > 1){
            
            /* Set session variables */
            header("Location: index.php?controller=admin&function=dashboard");
            foreach($response as $row){
             $_SESSION["username"] = $row['username']; /* userid of the user */
             $_SESSION['id'] = $row['id'];
            }
            
            echo json_encode(array('success'=>'Logged In Successfully.')); exit;
        }
        else{
            echo json_encode(array('error'=>'Username and Password not matched.')); exit;
        }
    }else{
        echo json_encode(array('error'=>'Username and Password not matched.')); exit;
    }
    }
 else {
    echo "Query Not Run";
 }
}
}
}
public function logout() {
	    /* Start the session */
	    session_start();
	    /* remove all session variables */
	    unset($_SESSION['username']);
	    /* destroy the session */
	    session_destroy();
echo "Logout Successful";
        header("Location: index.php?controller=admin&function=login");
        exit;
	}


}
?>