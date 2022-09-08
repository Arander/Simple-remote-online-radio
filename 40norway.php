<?php

    //Run `dir` command

//    exec('cvlc --play-and-exit http://19993.live.streamtheworld.com/LOS40_SC --aout=alsa --alsa-audio-device="hw:CARD=Headphones,0" &', $output, $return);
      exec('40norway > /dev/null 2> /dev/null &', $output, $return);
    //Print the return status value

    echo "The return value of the `dir` command is $return\n";

    echo "<pre>";

    //Print the command output

    var_dump($output);

    echo "</pre>";

?>