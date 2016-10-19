<?php 
function mark_for_100($number){
	switch ($number) {
			case $number<40:
				$point=0.0;
				break;
			case $number>=40 && $number<45:
				$point=2.0;
				break;
			case $number>=45 && $number<50:
				$point=2.25;
				break;		
			case $number>=50 && $number<55:
				$point=2.50;
				break;
			case $number>=55 && $number<60:
				$point=2.75;
				break;	
			case $number>=60 && $number<65:
				$point=3.0;
				break;		
			case $number>=65 && $number<70:
				$point=3.25;
				break;	
			case $number>=70 && $number<75:
				$point=3.50;
				break;	
			case $number>=75 && $number<80:
				$point=3.75;
				break;	
			case $number>=80 && $number<=100:
				$point=4.0;
				break;					
			default:
				
				break;
			}
			return($point);
}

function mark_for_75($number){
	$number1=($number*100)/75;
	switch ($number) {
			case $number1<40:
				$point=0.0;
				break;
			case $number1>=40 && $number1<45:
				$point=2.0;
				break;
			case $number1>=45 && $number1<50:
				$point=2.25;
				break;		
			case $number1>=50 && $number1<55:
				$point=2.50;
				break;
			case $number1>=55 && $number1<60:
				$point=2.75;
				break;	
			case $number1>=60 && $number1<65:
				$point=3.0;
				break;		
			case $number1>=65 && $number1<70:
				$point=3.25;
				break;	
			case $number1>=70 && $number1<75:
				$point=3.50;
				break;	
			case $number1>=75 && $number1<80:
				$point=3.75;
				break;	
			case $number1>=80 && $number1<=100:
				$point=4.0;
				break;					
			default:
				
				break;
			}
			return($point);
}

function mark_for_50($number){
	$number=($number*100)/50;
	switch ($number) {
			case $number<40:
				$point=0.0;
				break;
			case $number>=40 && $number<45:
				$point=2.0;
				break;
			case $number>=45 && $number<50:
				$point=2.25;
				break;		
			case $number>=50 && $number<55:
				$point=2.50;
				break;
			case $number>=55 && $number<60:
				$point=2.75;
				break;	
			case $number>=60 && $number<65:
				$point=3.0;
				break;		
			case $number>=65 && $number<70:
				$point=3.25;
				break;	
			case $number>=70 && $number<75:
				$point=3.50;
				break;	
			case $number>=75 && $number<80:
				$point=3.75;
				break;	
			case $number>=80 && $number<=100:
				$point=4.0;
				break;					
			default:
				
				break;
			}
			return($point);
}
	


 ?>