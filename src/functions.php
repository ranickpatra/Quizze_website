

<?php

function get_questions() {

    global $DB_HOST;
    global $DB_NAME;
    global $DB_USER;
    global $DB_PASS;


    $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if(!$conn)
        return "";
    
    $result = $conn->query("SELECT * FROM question");
    $data = array();

    if($result->num_rows > 0) {
        $counter = 0;
        while($row = $result->fetch_assoc()) {
            $data[$counter++] = $row;
        }
    }
    return $data;

}

?>