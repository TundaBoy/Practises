<?php
fuction createGrade($marks);
if($marks>70){
    return 'A';
}
elseif($marks>=60 && $marks<=69)
{ 
    return 'B';
} 
else if ($marks >= 50 && $marks <= 59) 
{
     return 'C';
     }
      elseif ($marks >= 40 && $marks <= 49) 
      { 
        return 'D'; 
    } 
    else { 
        return 'E';
     } 
?>