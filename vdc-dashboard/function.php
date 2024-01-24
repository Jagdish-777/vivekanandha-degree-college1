<?php
function executeSelect($table, $data = array(), $clause = array(), $orderby = "", $limit = array()) {
	global $con;
    $dataStr = 'SELECT';
    $datanew = '';
    if (strlen($table) > 0){
        if (count($data) > 0){
            foreach ($data as $key => $value){
                $datanew.=" {$value},";
            }
            $datan = substr($datanew, 0, -1);
            $dataStr = $dataStr.$datan;
        }else{
            $dataStr = $dataStr.' * ' ;
        }
        $dataStr = $dataStr.' FROM '.$table ;
        $row_clause = '';
        $clause_array = array();
        if(count($clause) > 0){
            foreach ($clause as $key => $value){
                $row_clause ="{$key}='{$value}'";
                array_push($clause_array, $row_clause);
            }
            $clausenew = implode(" AND " ,$clause_array);
            
            $dataStr = $dataStr.' WHERE '.$clausenew;
        }
        if(strlen($orderby) > 0){
            $dataStr = $dataStr.' ORDER BY '.$orderby;
        }
        if(count($limit) > 0){
            foreach($limit as $key => $value){
                $datalimit.=" {$value},";
            }
            $datalimit = substr($datalimit, 0, -1);
            
            $dataStr = $dataStr.' LIMIT '.$datalimit;
        }
    }
    $report = mysqli_query($con, $dataStr);
    $result = array();
    while($queryreturn = mysqli_fetch_assoc($report)){
        $result[] = $queryreturn;
    }
    return $result;
}

?>