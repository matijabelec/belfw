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
{#include(data/fb-init)}
    
    {#include(region/header)}
    
    {#include(region/nav)}
    
    <main id="main">
        <h1>{@main-title}</h1>
        
        <section id='section-author-info'>
            <h2>{@main-author-bio-title}</h2>
            <div>{@main-author-bio}</div>
        </section>
    </main>
    
    {#include(region/footer)}
</body>
</html>
