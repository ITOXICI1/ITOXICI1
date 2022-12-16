<?php
$localhost = 'localhost';
$username ='root';
$password ='';
$db='stock';
$con = new Mysqli($localhost,$username,$password,$db) ;
if($con -> connect_error){
 die('could not connect');
function display_data($data) {
    $output = '<table >';
    foreach($data as $key => $var) {
        $output .= '<tr>';
        foreach($var as $k => $v) {
            if ($key === 0) {
                $output .= '<td><strong>' . $k . '</strong></td>';
            } else {
                $output .= '<td>' . $v . '</td>';
            }
        }
        $output .= '</tr>';
    }
    $output .= '</table>';
    echo $output;
}}
 ?>
