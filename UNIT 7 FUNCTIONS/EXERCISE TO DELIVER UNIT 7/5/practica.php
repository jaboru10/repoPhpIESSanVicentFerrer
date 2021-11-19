<?php
include './string.php';
$archivo="curriculum.pdf";
echo file_extension($archivo)." ".file_type(file_extension($archivo));
