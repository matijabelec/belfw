<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Matija Belec - test</title>
    
    <link href='http://fonts.googleapis.com/css?family=Anton&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{@SITE}/css/style.css">
</head>

<body>
    {#include(region/header)}
    
    <main id="main">
        <h1>{@main-title}</h1>
        <div>
            <p>{@main-info}</p>
            <a href="{@ROOT}/">{@main-home}</a>
        </div>
    </main>
    
    {#include(region/footer)}
</body>
</html>
