<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request - Video</title>
    <link rel="stylesheet" href="/static/css/requststyle.css">
</head>
<body>
    <div class="header">
        <h1>Welcome to Our Video Request Page</h1>
    </div>
    <div class="container">
        <h2 class="center-text">Request Video</h2>
        <p class="center-text">Please use the form below to request your video. It will be added to the site within 24 hours.</p>

        <form>
            <label for="videoTitle">Video Title:</label>
            <input type="text" id="videoTitle" name="videoTitle">

            <label for="videoDescription">Video Description:</label>
            <textarea id="videoDescription" name="videoDescription" rows="4"></textarea>

            <label for="contactEmail">Contact Email:</label>
            <input type="email" id="contactEmail" name="contactEmail">

            <button type="submit">Submit Request</button>
        </form>
    </div>
    
    <div class="contact-info">
        <p>For inquiries, please contact us at: <a href="mailto:fuckyou@email.com">Fuckyou@email.com</a></p>
    </div>
</body>
</html>