
<?php

    //Run `dir` command

    exec("killstream > /dev/null 2> /dev/null &", $output, $return);

    //Print the return status value

    echo "The return value of the `dir` command is $return\n";

    echo "<pre>";

    //Print the command output

    var_dump($output);

    echo "</pre>";

?>
