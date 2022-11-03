<?php



	function processTime($Timed){	
		if(is_object($Timed)){
			$Timed->time_s = $Timed->time;
		    while($Timed->time_s >= 60){
		            $Timed->time_s= $Timed->time_s-60;
		            $Timed->time_m = $Timed->time_m+1;
		    }

		    
		    if(strlen((string)$Timed->time_m)==0){
		        $Timed->time_m = 00;
		    }

		    if(strlen((string)$Timed->time_s)==0){
		        $Timed->time_s = 00;
		    }elseif(strlen((string)$Timed->time_s)==1){
		        $Timed->time_s = '0'.$Timed->time_s;
		    }
		    return($Timed);
		}else{

			$time_s=$Timed;
			$time_m=0;
			while($time_s >= 60){
		            $time_s= $time_s-60;
		            $time_m = $time_m+1;
		    }
		    $Timed=$time_m.':'.$time_s;
		    return($Timed);
		}
	}

?>