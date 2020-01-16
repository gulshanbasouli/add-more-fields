<?php
$array_values="";
if (isset($_POST["input_array_name"]) && is_array($_POST["input_array_name"])){ 
    $input_array_name = array_filter($_POST["input_array_name"]); 
    foreach($input_array_name as $field_value){
        $array_values .= $field_value."<br />";
    }
}
?>
