<?php
class Palindrome
{
    public static function isPalindrome($word)
    {   
          $word = str_replace(' ', '', $word);
  
          $word = preg_replace('/[^A-Za-z0-9-]/', '', $word);
  
          $word = strtolower($word);
  
          $reverse = strrev($word);
        
          if ($word == $reverse) {
          
              return $word;
          
          } 
    
          else {
              
              return "Wrong";
          
          }
    }
}

echo Palindrome::isPalindrome('Deleveled');

?>
