<?php

$score = $_GET["score"];
if ($score > 100) {
    echo"กรุณากรอกคะแนนให้ถูกต้อง";
}else if ($score >= 80) {
    echo"A";
} else if ($score >= 70) {
    echo"B";
} else if ($score >= 60) {
    echo"C";
} else if ($score >= 50) {
    echo"D";
} else {
    echo"F";
}
?>