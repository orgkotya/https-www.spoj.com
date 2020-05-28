<!-- https://www.spoj.com/problems/ONP/ -->
<?php
function foo($str){
	
	$str_arr=[];
	$symb_arr=[];
		for ($i=0;$i<strlen($str);$i++) {
			switch ($str[$i]) {
				case "(":
			break;
			case "+":
			array_push($symb_arr, $str[$i]);
			break;
			case "-":
			array_push($symb_arr, $str[$i]);
			break;
			case "*":
			array_push($symb_arr, $str[$i]);
			break;
			case "/":
			array_push($symb_arr, $str[$i]);
			break;
			case "^":
			array_push($symb_arr, $str[$i]);
			break;
			case ")":
			array_push($str_arr, array_pop($symb_arr));
			break;
			default:
			 array_push($str_arr, $str[$i]);
		}
	}

echo (implode ( $str_arr ))."\n";

}
foo("(a+(b*c))");
foo("((a+b)*(z+x))");
foo("((a+t)*((b+(a+c))^(c+d)))");
