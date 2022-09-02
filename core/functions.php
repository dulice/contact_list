<?php require "core/base.php"; 

session_start();

//request and response to database
function runQuery($sql) {
    mysqli_query(conn(), $sql);
}

//redirect page
function redirect($url) {
    echo "<script> location.href = '$url' </script>";
}

//show the text you previously put
function oldData($inputName) {
    if(isset($_POST[$inputName])) {
        return $_POST[$inputName];
    } else {
        return "";
    }
}

//prevent XSS attack
function entity($text) {
    $text = strip_tags($text);
    $text = trim($text);
    $text = htmlentities($text, ENT_QUOTES);
    $text = stripslashes($text);
    return $text;
}

function alert($text, $color = 'danger') {
    return "<div class='alert alert-$color'>$text</div>";
}


//check error
function getError($name, $message) {
    return $_SESSION['error'][$name] = $message;
}

function showError($name) {
    if(isset($_SESSION['error'][$name])) {
        return $_SESSION['error'][$name];
    } else {
        return "";
    }
}

function clearError() {
    return $_SESSION['error'] = [];
}

//check requirement for firstName
function firstName($fname) {
    if(empty($fname)) {
        getError('first_name', 'Please Enter Your First Name');
        $errorStatus = 1;
    } elseif (strlen($fname) < 3) {
        getError('first_name', 'Character must be more than 3');
        $errorStatus = 1;
    }elseif (strlen($fname) > 30) {
        getError('first_name', 'Character must be less than 30');
        $errorStatus = 1;
    } else {
        clearError();
        $errorStatus = 0;
    }
}

//check requirement for last name
function lastName($lname) {
    if(empty($lname)) {
        getError('last_name', 'Please Enter Your Last Name');
        $errorStatus = 1;
    } elseif (strlen($lname) < 3) {
        getError('last_name', 'Character must be more than 3');
        $errorStatus = 1;
    }elseif (strlen($lname) > 30) {
        getError('last_name', 'Character must be less than 30');
        $errorStatus = 1;
    } else {
        clearError();
        $errorStatus = 0;
    }
}

//check requirment for phone number
function phoneNumber($phone) {
    if(empty($phone)) {
        getError('phone_number', 'Please Enter Your Phone Number');
        $errorStatus = 1;
    } elseif (!preg_match("/^[0-9+ ]*$/", $phone)) {
        getError('phone_number', 'Please Enter a valid phone number');
        $errorStatus = 1;
    } else {
        clearError();
        $errorStatus = 0;
    }
}

//show the contact
function contacts($sql) {
    $rows = [];
    $query = mysqli_query(conn(), $sql);
    while($row = mysqli_fetch_assoc($query)) {
        array_push($rows, $row);
    }
    return $rows;
}

//count the contact
function countContact() {
    $sql = "SELECT COUNT(id) AS 'total' FROM contact_list";
    return contacts($sql)[0]['total'];
}

function searchContact($search) {
    $sql = "SELECT * FROM contact_list WHERE first_name LIKE '%$search%' OR last_name LIKE '%$search%'";
    return contacts($sql);
}

function addContact() {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $company = $_POST['company'];
    $jobTitle = $_POST['job_title'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];
    $note = $_POST['note'];

    $errorStatus = 0;
    global $supportFileType;

    firstName($fname);
    lastName($lname);
    phoneNumber($phone);

    if(empty($_FILES['photo']['name'])) {
        getError('photo', 'Please enter an image');
        $errorStatus = 1;
    } elseif(!in_array($_FILES['photo']['type'], $supportFileType)) {
        getError('photo', 'Only JPG and PNG files are allowed');
        $errorStatus = 1;
    } else {
        clearError();
        $errorStatus = 0;
        $fetchFile = $_FILES['photo']['tmp_name'];
        $filename = "store/" . uniqid() . "_" . $_FILES['photo']['name'];
        move_uploaded_file($fetchFile, $filename);
    }

    $fname = entity($fname);
    $lname = entity($lname);
    $company = entity($company);
    $jobTitle = entity($jobTitle);
    $email = entity($email);
    $phone = entity($phone);
    $note = entity($note);

    if(!$errorStatus) {
        $query = "INSERT INTO contact_list(photo, first_name, last_name, company, job_title, email, phone_number, note) VALUES ('$filename', '$fname', '$lname', '$company', '$jobTitle', '$email', '$phone', '$note')";
        runQuery($query);
        redirect('index.php');
    }
}

function showContact() {
    $sql = "SELECT * FROM contact_list ORDER BY first_name ASC";
    return contacts($sql);
}

function showSingleContact($id) {
    $sql = "SELECT * FROM contact_list WHERE id=$id";
    $query = mysqli_query(conn(), $sql);
    return mysqli_fetch_assoc($query);
}

function deleteContact($id) {
    $sql = "DELETE FROM contact_list WHERE id=$id";
    runQuery($sql);
    redirect('index.php');
}

function updateContact($id) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $company = $_POST['company'];
    $jobTitle = $_POST['job_title'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];
    $note = $_POST['note'];

    $errorStatus = 0;
    global $supportFileType;

    firstName($fname);
    lastName($lname);
    phoneNumber($phone);

    $fname = entity($fname);
    $lname = entity($lname);
    $company = entity($company);
    $jobTitle = entity($jobTitle);
    $email = entity($email);
    $phone = entity($phone);
    $note = entity($note);

    if(!$errorStatus) {       
            $sql= "UPDATE contact_list SET first_name='$fname', last_name='$lname', company='$company', job_title='$jobTitle', email='$email', phone_number='$phone', note='$note' WHERE id=$id";
            runQuery($sql);
            redirect('index.php');
    }
}

