<?php
ini_set('max_execution_time', 900);

$youtubeUrl =  "https://www.youtube.com/watch?v=PQRqsuEHL5I";
// $file = exec("youtube-dl.exe  -f best $youtubeUrl ",$output, $return_var);

//echo '<pre>';
//passthru("youtube-dl.exe  -f best $youtubeUrl ");
// echo '</pre>';


	
$cmd = "youtube-dl.exe  -f 137+140/bestvideo+bestaudio $youtubeUrl ";

while (@ ob_end_flush()); // end all output buffers if any

$proc = popen($cmd, 'r');
echo '<pre>';
while (!feof($proc))
{
    echo fread($proc, 4096);
    @ flush();
}
echo '</pre>';
?>
