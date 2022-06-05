<?php


if(isset($_POST['submit'])) {

    $new_message = array (
        "name" => $_POST['name'],
        "last_name" => $_POST['last_name'],
        "email" => $_POST['email'],
        "password" => $_POST['password'],
        "confirm_password" => $_POST['confirm_password']
    );

    if(filesize("messages.json") == 0) {

        $first_record = array($new_message);

        $data_to_save = $first_record;

    } else {

        $old_records = json_decode(file_get_contents("messages.json"));

        array_push($old_records, $new_message);

        $data_to_save = $old_records;
    }

    if(!file_put_contents("messages.json", json_encode($data_to_save,JSON_PRETTY_PRINT), LOCK_EX)) {
        
        $error = "Error storing registration, please try again";

    } else {
        $success = "Registration is stored successfully";
    }
}

?>