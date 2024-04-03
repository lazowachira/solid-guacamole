<?php
$connection = mysqli_connect("localhost:3306", "root", "", "gas");
$sql = mysqli_query($connection, "select * from orderss");

$html = '<table><tr><td>brand</td><td>location</td><td>phone</td><td>shop</td><td>Size</td>';
while ($row = mysqli_fetch_assoc($sql)) {
    $html .= '<tr><td>' . $row['brand'] . '</td><td>' . $row['location'] . '</td><td>' . $row['phone'] . '</td><td>' . $row['shop'] . '</td><td>' . $row['size'] . '</td>';
}
$html .= '</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=gasreport.xls');
echo $html;
