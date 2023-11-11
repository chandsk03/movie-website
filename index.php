<?php

$videoBasePath = 'VIDEO'; 
$imageBasePath = 'IMG';   

$videos = [
    [
        'id' => 1,
        'videoPath' => "static/$videoBasePath/video2.mp4",
        'thumbnailPath' => "static/$imageBasePath/image1.jpg",
    ],
    [
        'id' => 2,
        'videoPath' => "static/$videoBasePath/video1.mp4",
        'thumbnailPath' => "static/$imageBasePath/image2.jpg",
    ],
];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_SERVER['REQUEST_URI'] === '/') {
        include 'templates/home.php';
        exit();
    } elseif (preg_match('/^\/movie\/(\d+)$/', $_SERVER['REQUEST_URI'], $matches)) {
        $videoId = (int) $matches[1];
        $video = current(array_filter($videos, function ($v) use ($videoId) {
            return $v['id'] == $videoId;
        }));
        if ($video) {
            include 'templates/movie.php';
            exit();
        }
    }
}

http_response_code(404);
echo "Not Found";