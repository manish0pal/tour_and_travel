<?php

include './include/User.php';
include './include/api_function.php';

$GLOBALS['user'] = new User();


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['table_name'])) {
        extract($_GET);
      
        $query = "SELECT * FROM $table_name";
        $result = $GLOBALS['user']->getresult($query);
        $check = count($result);

        $details = array(
            'message' => 'success',
            'status' => 1,
            'data' => $result
        );
        echo json_encode($details);
    } else {
        $details = array(
            'message' => 'Data not access.',
            'status' => 0,
        );
        echo json_encode($details);
    }
} else {
    $details = array(
        'message' => 'Method request error.',
        'status' => 0,
    );
    echo json_encode($details);
}
?>