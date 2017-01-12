<?php
/**
 * Created by IntelliJ IDEA.
 * User: feng
 * Date: 7/4/2016
 * Time: 1:15 PM
 */

$fileName = $_GET['fileName'];
header("content-disposition:attachment;filename=" . basename($fileName));
header('content-length:' . filesize($filename));
readfile($fileName);
