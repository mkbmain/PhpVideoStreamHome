<head>
    <link href="https://vjs.zencdn.net/7.5.5/video-js.css" rel="stylesheet" />

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>
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
echo    str_replace("_VIDEONAME_",$movie,file_get_contents("./basicVideo.txt") );

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

<a href="indexOld.php"> home </a>
</body>