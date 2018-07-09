<?php

function insert($sql){
    $last_id = 0;
    global $conn;
    $result = mysqli_query($conn, $sql);
    $last_id = mysqli_insert_id($conn);
    return $last_id;
}

function fetch($sql){
        global $conn;
        $rows = NULL;
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $rows[] = $row;
        }
        return($rows);
}

function update($sql){
    global $conn;
    mysqli_query($conn, $sql);
}

?>
