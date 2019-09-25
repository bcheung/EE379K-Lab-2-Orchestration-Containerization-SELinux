<?php

echo "Path to current directory:<br>";
echo getcwd(), "<br><br>";

echo "Contents of current directory:<br>";
$cwd_ls = scandir(".");
foreach($cwd_ls as $val) {
    echo $val, "\t";
}
echo "<br><br>";

echo "Contents of root:<br>";
$root_ls = scandir("/");
foreach($root_ls as $val) {
    echo $val, "  ";
}
echo "<br><br>";

echo "Number of processes running:<br>";
$num_procs = shell_exec('ps aux --no-headers | wc -l');
echo "$num_procs";

