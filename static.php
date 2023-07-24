<?php
function local(){
    static$y=10;
    $y++;
    echo "local variable:$y<br>";
    
}local();
local();
local();
?>