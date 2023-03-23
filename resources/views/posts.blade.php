<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Blog</title>

    <link rel="stylesheet" href="app.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <?php foreach ($posts as $post) : ?>
    <article>
        <h1><a href="posts/<?= $post->slug; ?>"><?= $post->title; ?></a></h1>
        <div><?= $post->excerpt; ?></div>
    </article>
    <?php endforeach; ?>
</body>

</html>
