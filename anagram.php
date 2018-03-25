      
function is_anagram($a,$b){
    //check if both word have the same number of string
    //if the have the same continue with other test or return false
    if(strlen($a) == strlen($b)){ 
        //convert first and second word into array of character   
        $word1=str_split($a, 1);
        $word2=str_split($b, 1);//first intersect two array to find if they have common characters 
        $intersect=array_intersect($word1,$word2);
          
        //check weather all characters in each word contained in our intersection array
        $result1=array_diff($word1,$intersect);
        $result2=array_diff($word2,$intersect);
          
        //if all characters in each word contained in our intersection array then the size will be 0
        //else the size will be greater than zero 
        if(sizeof($result1)==0 && sizeof($result2)==0){
           return true;
         }
        else{return  false; 
          }
        }
  //if have different string lenght conclude its false
      else{return false;}        
}

$chek = is_anagram("chief","efich");

if($chek){
     echo "yes its anagram";
}
else {
      echo "its not anagram";
}
