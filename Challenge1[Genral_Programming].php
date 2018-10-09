
<?php
ini_set("display_errors",0);


function habit_unhash($num=0){
	$letters = 'abdeghlmnoprstuw';
	$str="";
	while($num>7)
	{
		//Find modulo of given number
		$modulo=fmod($num,37);
		//store one letter in each iteration
		$str.=$letters[$modulo];
		//make number ready for second iteration
		$num=(($num - $modulo)/37);
	
	}
	//reversing the string form by the while loop
	return strrev($str);
}
//passing the argument to function and storing the output of fuction to $result variable
echo $result=habit_unhash(917622709512878);

?>