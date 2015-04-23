<?php
	$func = new Func;
		$S = 'BBBB';
		$str_count = strlen($S);
		while($str_count > 2){
          
				$S = $funcs->get_value($S);	
				
				$str_count = strlen($S);
			
		}
		$data['fin_val'] = $S;
		echo $S;

	
	?>