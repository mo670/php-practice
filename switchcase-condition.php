<?php
 $age = 18;

 switch (true) {
    case ($age >=16 && $age <=20):
        echo "you are eligible";
                break;
                
case ($age >=21 && $age <=30):
echo "you are not eligible";
break;



default:
echo "Enter your age";
 


 }
     ?>