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
        
        <section id='section-motivation'>
            <h2>{@main-motivation-title}</h2>
            <div>{@main-motivation-content}</div>
        </section>
        
        <section id='section-about'>
            <h2>{@main-about-title}</h2>
            <div>{@main-about-content}</div>
        </section>
        
        <section id='section-skills'>
            <h2>{@main-skills-title}</h2>
            <div>{@main-skills-content}</div>
        </section>
    </main>
    
    {#include(region/footer)}
</body>
</html>
