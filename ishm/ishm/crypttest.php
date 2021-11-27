<?php
    echo "<pre style=\"font-family:courier new;\">\n";
    $message = "Golnesha";
    echo " original message: ".$message."<br />";

    $cryptmsg = crypt($message);
    echo "encrypted message: ".$cryptmsg."<br />";

    $md5msg = md5($message);
    echo "    md5'd message: ".$md5msg."<br />";

?>
