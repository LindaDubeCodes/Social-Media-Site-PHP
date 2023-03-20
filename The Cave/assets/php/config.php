<?php
$conn = mysqli_connect("localhost", "root", "", "thecavedb");
if ($conn) {
    echo mysqli_connect_error();
} else{
    echo "error";
}