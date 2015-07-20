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
        
        <article class="author-main-info">
            <h2>CV</h2>
            <section>
                <h3>Main info</h3>
                <address>
                    <a href="http://matijabelec.com/">Matija Belec</a><br/>
                    E-mail: <a href="mailto:matijabelec1@gmail.com">matijabelec1@gmail.com</a><br/>
                    Tel.: <span>098 966 99 83</span>
                <address>
                <div class="image-container"><img src="{@SITE}/gfx/matija.jpg" alt="matija.jpg"/></div>
            </section>
            
            <section>
                <h3>{@author-bio-title}</h3>
                <p>{@author-bio-p1}</p>
                <p>{@author-bio-p2}</p>
                <p>{@author-bio-p3}</p>
                <p>{@author-bio-p4}</p>
                <p>{@author-bio-p5}</p>
                <p>{@author-bio-p6}</p>
                <p>{@author-bio-p7}</p>
                <p>{@author-bio-p8}</p>
            </section>
            
            <section>
                <h3>{@author-skills-title}</h3>
                <div>
                    <p>{@author-skills}</p>
                    <ul>
                        <li>{@author-skills-skill1}</li>
                        <li>{@author-skills-skill2}</li>
                    </ul>
                </div>
            </section>
            
            <section>
                <h3>{@author-projects-title}</h3>
            </section>
            
            <section>
                <h3>Contact</h3>
                <div class="image-container"><img src="" alt="matija.png"/></div>
                <address>
                    <a href="http://matijabelec.com/">Matija Belec</a><br/>
                    E-mail: <a href="mailto:matijabelec1@gmail.com">matijabelec1@gmail.com</a><br/>
                    Tel.: <span>098 966 99 83</span>
                <address>
            </section>
        </article>
    </main>
    
    {#include(region/footer)}
</body>
</html>
