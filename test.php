<?php
	$func = new Func;
		$S = 'ABBCC';
		$str_count = strlen($S);
		while($str_count > 2){
          
				$S = $func->get_value($S);	
				$str_count = strlen($S);
			
		}
		$data['fin_val'] = $S;
		echo $S;

	class Func{
		public function get_value($S){
			/*$str_count = strlen($S) / 2;
			$ar = str_split($S,$str_count);
			
			$equi_val = array('AB'=>'AA','BA'=>'AA','CB'=>'CC','BC'=>'CC','AA'=>'A','CC'=>'C');
			
			foreach($ar as $key=>$value){
				if(isset($equi_val[$value])){
					$ar[$key] = $equi_val[$value];
					break;
				}else{
					$ar[$key] = $value;
				}
			}
			*/
			
			$ar = str_split($S);
			
			$equi_val = array('AB'=>'AA','BA'=>'AA','CB'=>'CC','BC'=>'CC','AA'=>'A','CC'=>'C');
			$char = array('val'=>'','key'=>'');
			foreach($ar as $key => $value){
				if(isset($equi_val[$char['val'].$value])){
					//unset($ar[$char['key']]);
					//array_values($ar);
					$ar[$key] = $equi_val[$value];
					
					break;
				}else{
					$ar[$key] = $value;
				}
				$char['val'] = $value;
				$char['key'] = $key;
			}
			//print_r($ar);exit;
			$new_str = implode('',$ar);
		//	echo $new_str.'<br>';
			return $new_str;
		}
	}
	
	?>