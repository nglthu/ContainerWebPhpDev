<?php
include '/workspaces/ContainerWebPhpDev/Model/getEnv.php';
class Database {
public function dBConnection(){

 
    $getEnv = new getEnv();

    $uriValue = $getEnv->getEnv();
    $uri = $uriValue[5];
    $fields = parse_url($uri);
    
    // build the DSN including SSL settings
    $conn = "mysql:";
    $conn .= "host=" . $fields["host"];
    $conn .= ";port=" . $fields["port"];;
    $conn .= ";dbname=defaultdb";
    $conn .= ";sslmode=verify-ca;sslrootcert='pri/ca.pem'";
    
    try {
        $db = new PDO($conn, $fields["user"], $fields["pass"]);
    
        $stmt = $db->query("SELECT version()");
    
        print($stmt->fetch()[0]);
        $row = $db->query("select * from todos");
    
       
        if($row->rowCount()>0){
            while ($r = $row->fetchObject()){
                echo $r->date;
                echo $r->description;
                $arr = array('date' => $r->date, 'description' => $r->desription);
                echo json_encode($arr);
    
            }
        }
       
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

}
}

?>