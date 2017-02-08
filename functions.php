<?php
date_default_timezone_set('America/Chicago');
function getHours(){
   $hours = date('G');
   return $hours;
}
function nl(){ 
   echo "\n";
}

function english(){
    $hours = getHours();
    if($hours < 12){
        echo "Good morning\n";    
    }else{
        echo "Good Afternoon\n";    
    }
}

function greeting($greetingFunction){
    $greetingFunction();
}
//This is a "lambda"
//A lambda is a function assigned to a variable.
//Notice an anonymous function is involved.
$minutes = 15;
$russian = function(){
   $hours = getHours();
    if($hours < 12){
        echo "Доброе утро\n";    
    }else{
        echo "Добрый день\n";    
    }
};

echo getHours();
nl();
//sqrt(16.0);
english();
echo "calling English the bizarre way\n";
greeting('english');
greeting($russian);
echo "calling with a closure, or a pure anonymous function\n";
greeting( function(){
   $hours = getHours();
    if($hours < 12){
        echo "Goedemorgen\n";    
    }else{
        echo "Goedenmiddag\n";    
    }
});

echo "\n\nPick a language (en, ru, du): \n";
$language = readline();
echo "You picked $language\n";

$message['en'] = 'english';
$message['ru'] = $russian;
$message['du'] = function(){
                   $hours = getHours();
                   if($hours < 12){
                      echo "Goedemorgen\n";    
                   }else{
                      echo "Goedenmiddag\n";    
                   }
                  };

greeting($message[$language]);

nl();                  
                  
?>