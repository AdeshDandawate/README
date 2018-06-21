<?php
require("./db/db.php");
$operation=$_GET["operation"];

switch ($operation) {
    case 'insert':
        if(isset($_GET["roleName"])){
            insertRole($con,$_GET["roleName"]);
        }else{
            echo "Please enter rolename";
        }
        break;
    
    case "delete":
    if(isset($_GET["roleName"])){
        deleteRole($con,$_GET["roleName"]);
    }else{
        echo "Please enter rolename";
    }
    break;
        break;
}

function insertRole($con,$roleName){
    mysqli_query($con,"insert into roles(name) values('".$roleName."')") or die(mysqli_error());
    header('location: ../index.php');
}
function deleteRole($con,$roleName){
    mysqli_query($con,"delete from roles where name = '".$roleName."' ") or die(mysqli_error());
    header('location: ../index.php');
}
?>
