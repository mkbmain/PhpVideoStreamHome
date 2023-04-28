<body>
<?php
function startsWith ($string, $startString)
{
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}

parse_str($_SERVER['QUERY_STRING'], $output);


if(array_key_exists("video", $output))
{
$movie = 'movies/'.$output["video"];
 echo '<video width="320" height="240" controls><source src="'.$movie.'" type="video/mp4"></video> ';


}
else
    {
    $directory = "./movies/";
    $files = scandir($directory);

    foreach ($files as $file) {
        if (startsWith($file, ".") == false) {
            echo  '<p><a href="index.php?video='.$file.'">'.$file.'</a></p>';
        }
    }

}
?>

<a href="index.php"> home </a>
</body>
