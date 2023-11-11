<html>
<head>
    <title>Streaming Page</title>
    <link rel="stylesheet" href="/static/css/moviestyle.css">
</head>
<body>
  <?php if (isset($video)): ?>
    <h1>ID: <?php echo $video['id']; ?></h1>
    <div class="container">
      <div class="video">
        <!-- PHP code to dynamically set the video URL -->
        <iframe src="<?php echo $video['videoPath']; ?>" allowfullscreen></iframe>
      </div>
      <div class="description">
        <p>Enjoy watching the video!</p>
      </div>
    </div>
  <?php else: ?>
    <p>No video information available.</p>
  <?php endif; ?>
</body>
</html>