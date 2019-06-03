<?php
	
	function test(){
		system("gpio -g mode 18 out");
        system("gpio -g write 18 1");
        echo" Led Encendido"
	}
test();
?>