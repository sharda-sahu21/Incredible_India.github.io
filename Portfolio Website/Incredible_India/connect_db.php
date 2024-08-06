
<?php
$connect = mysqli_connect("localhost", "root", "", "portfolio");

    $request_array = $_REQUEST;
// $pId= $request_array['id'];
$pName = isset($request_array['name']) ? mysqli_real_escape_string($connect, $request_array['name']) : '';
$pEmail = isset($request_array['email']) ? mysqli_real_escape_string($connect, $request_array['email']) : '';
$pStatus = isset($request_array['status']) ? mysqli_real_escape_string($connect, $request_array['status']) : '';
$pMsg = isset($request_array['msg']) ? mysqli_real_escape_string($connect, $request_array['msg']) : '';

// Initialize an array to store dynamic fields
$dynamicFields = [];

// Process dynamic fields submitted through the form
        foreach ($request_array as $key => $value) {
            
            if ($key == 'name' || $key == 'email' || $key == 'status' || $key == 'msg') {
                continue;
            }
            
            $escaped_key = mysqli_real_escape_string($connect, $key);
            $escaped_value = mysqli_real_escape_string($connect, $value);
            $dynamicFields[$escaped_key] = $escaped_value;

            //  // Check if the column already exists
            // $check_field = "SHOW COLUMNS FROM contact LIKE '$escaped_key'";
            // $check_result = mysqli_query($connect, $check_field);

            
          // if (mysqli_num_rows($check_result)==0) {

            $alter_query = "ALTER TABLE contact ADD $escaped_key TEXT(255)";
            mysqli_query($connect, $alter_query);
          // }
           
        }

        // Handle renaming of columns if needed
        $existing_columns = [];
        $column_query = "SHOW COLUMNS FROM contact";
        $column_result = mysqli_query($connect, $column_query);
        while ($row = mysqli_fetch_assoc($column_result)) {
             $existing_columns[] = $row['Field'];
        }

        // // Check for column name changes
        // foreach ($existing_columns as $column) {
        //     // If column name exists in the database but not in the form, remove it
        //     if (!in_array($column, $dynamicFields) && $column != 'name' && $column != 'email' && $column != 'status' && $column != 'msg') {
        //         $drop_query = "ALTER TABLE contact DROP COLUMN `$column`";
        //         mysqli_query($connect, $drop_query);
        //     }
        // }

    $query = "INSERT INTO contact (name, email, status, msg)VALUES('$pName', '$pEmail', '$pStatus', '$pMsg')"; 
           
    mysqli_query($connect, $query);

    if (mysqli_affected_rows($connect) > 0) {
       
        foreach ($dynamicFields as $key => $value) {
            $query_dynamic = "UPDATE contact SET $key = '$value' WHERE email = '$pEmail'";
            mysqli_query($connect, $query_dynamic);
        }
        
        echo "<script>alert('Message has been sent successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    } else {
        header("location: index.php?error");
    }

    mysqli_close($connect);
    ?>
