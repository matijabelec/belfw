<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Matija Belec - test</title>
    
    <link href='http://fonts.googleapis.com/css?family=Anton&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="{@SITE}/css/reset.css">
    <link rel="stylesheet" href="{@SITE}/css/standard.css">
    <link rel="stylesheet" href="{@SITE}/css/style.css">
    <link rel="stylesheet" href="{@SITE}/css/home.css">
    <link rel="stylesheet" href="{@SITE}/css/under-construction.css">
</head>

<body>
{#include(data/fb-init)}
    
    {#include(region/header)}
    
    {#include(region/nav)}
    
    <main id="main">
        <h1>{@main-title}</h1>
        
        <article class="author-main-info">
            <h2>CV</h2>
            <section class="main-author-info">
                <h3 class="title">{@main-author-info-title}</h3>
                <address class="author-data-container">
                    <a href="http://matijabelec.com/">Matija Belec</a><br/>
                    E-mail: <a href="mailto:matijabelec1@gmail.com">matijabelec1@gmail.com</a><br/>
                    Tel.: <span>098 966 99 83</span>
                </address>
                <div class="image-container"><img src="{@SITE}/gfx/matija.jpg" alt="matija.jpg"/></div>
            </section>
            
            <div class="tab-container">
                <ul class="tabs">
                    <li><a data-tabid="tab1" href="#tab">{@author-bio-title}</a></li>
                    <li><a data-tabid="tab2" href="#tab">{@author-skills-title}</a></li>
                    <li><a data-tabid="tab3" href="#tab">{@author-projects-title}</a></li>
                    <li><a data-tabid="tab4" href="#tab">{@author-contact-title}</a></li>
                </ul>
                <div class="pane">
                    <div data-id="tab1">
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
                    </div>
                    <div data-id="tab2">
                        <section>
                            <h3>{@author-skills-title}</h3>
                            <div class="author-skills-container">
                                <p>{@author-skills}</p>
                                <ul>
                                    <li>{@author-skills-skill1}</li>
                                    <li>{@author-skills-skill2}</li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div data-id="tab3">
                        <section>
                            <h3>{@author-projects-title}</h3>
                        </section>
                    </div>
                    <div data-id="tab4">
                        <section>
                            <h3>{@author-contact-title}</h3>
                            <address>
                                <a href="http://matijabelec.com/">Matija Belec</a><br/>
                                E-mail: <a href="mailto:matijabelec1@gmail.com">matijabelec1@gmail.com</a><br/>
                                Tel.: <span>098 966 99 83</span>
                            <address>
                        </section>
                    </div>
                </div>
            </div>
        </article>
        
        <section class="section-under-construction">
            <img src="{@SITE}/gfx/under-construction.png" alt="under-construction.png"/>
            <h2>{@main-under-construction-title}</h2>
            <p>{@main-under-construction}</p>
        </section>
    </main>
    
    {#include(region/footer)}
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{@SITE}/js/standard.js"></script>
    <script>
        $(document).ready(function(){
            prepare_tabs();
        });
    </script>
</body>
</html>
