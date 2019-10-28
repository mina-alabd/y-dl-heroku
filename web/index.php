<?php

$youtubeUrl =  "https://www.youtube.com/watch?v=Ko2JcxecV2E";
$file = exec("youtube-dl.exe  -f best $youtubeUrl ",$output, $return_var);


 // print_r($output);
 // storing output of print_r() function 
// in another variable 
//$results = print_r($output, true);  
  
// echo $results; 

$links = json_encode($output, true);


	

	
$dl = json_decode($links, true);
	

	
// print_r($dl);


?>

<html>
<body>
<pre><code> <?php print_r($dl); ?></code></pre>
</body>
</html>