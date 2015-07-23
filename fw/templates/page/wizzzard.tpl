<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Wizzzard @ MatijaBelec.com</title>
    
    <link href='http://fonts.googleapis.com/css?family=Anton&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="{@SITE}/css/reset.css">
    <link rel="stylesheet" href="{@SITE}/css/standard.css">
    <link rel="stylesheet" href="{@SITE}/css/style.css">
</head>

<body>
{#include(data/fb-init)}
    
    {#include(region/header)}
    
    {#include(region/nav)}
    
    <main id="main">
        {@article-item}
        {@articles-list}
    </main>
    
    {#include(region/footer)}
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            
        });
    </script>
</body>
</html>
