<?php

set_time_limit(0);
$result = array();

while (true) {
    clearstatcache();

    // if you using database, don't forget fill the fields
    $pdo = new PDO("mysql:host=localhost;dbname=;", "", "");
    $query = $pdo->prepare("SELECT * FROM users");
    $query->execute();

    /**
     * Not necessary to use output from database.
     * If you want use data in text file, you can use this solution:
     *
     * $data = file_get_contents('data.php');
     * $result['data'] = $data;
     * echo $result['data'];
     *
     */
    
    // fields from database
    while ($fetch = $query->fetch()) {
        $result['id'] = $fetch['id'];
        $result['name'] = $fetch['name'];
        $result['message'] = $fetch['message'];
        echo "id: " . $result['id'] . "<br>";
        echo "name: " . $result['name'] . "<br>";
        echo "message: " . $result['message'] . "<br>";
    }

    break;
}

