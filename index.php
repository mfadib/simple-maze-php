<?php


if(isset($_POST['process']) && $_POST['process'] == 'Create'){
	if(isset($_POST['s']) && $_POST['s'] > 1){
		$s = $_POST['s'];
		create_maze($s);
	}
}


function create_maze($maze)
{
	$char = '#'; $space = "&nbsp;&nbsp;";

	$rows = 1;

	for($i = 0; $i < $maze;$i++){
		for($j = 0; $j < $maze; $j++){
			if($i%2==0){
				if($j == $rows){
					echo $space;
				}else{
					echo $char;
				}
			}else{
				if(in_array($j,[0,$maze-1])){
					echo $char;
				}else{
					echo $space;
				}
			}
			if($j == $maze-1){
				echo '<br>';
			}
		}

		if($i%2 == 0){
			if($rows == $maze-2){
				$rows = 1;
			}else{
				$rows = $maze-2;
			}
		}
	}

}

?>