<?php  
function url() {
    return "http://". $_SERVER['HTTP_HOST']. "/test/contact_list/";
} 

function conn() {
    return mysqli_connect('localhost', 'root','', 'form_validation');
}

$supportFileType = ["image/jpg", "image/jpeg", "image/png"];