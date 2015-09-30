<? 

//set the urls 
$urls = array("http://google.com" ,"http://hotmail.com" ,"http://hawkee.com" ); 

//set the text links 
$text = array("Google" ,"Hotmail" ,"Hawkee"); 
        srand(time()); 

//set the number in (rand()%3); for however many links there are 
        $random = (rand()%3); 
echo ("<a href = \"$urls[$random]\">$text[$random]</a>"); 

?> 