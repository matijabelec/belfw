<?php

class Model_index extends Model {
    protected $data = array();
    protected $lang = 'en';
    
    public function __construct() {
        $en = array();
        $en['nav-home'] = 'Home';
        $en['nav-projects'] = 'Projects';
        $en['nav-about'] = 'Impressum';
        $en['footer-rights'] = 'All Rights Reserved.';
        
        $hr = array();
        $hr['nav-home'] = 'Početna';
        $hr['nav-projects'] = 'Projekti';
        $hr['nav-about'] = 'Impressum';
        $hr['footer-rights'] = 'Sva prava zadržana.';
        
        $this->data['en'] = $en;
        $this->data['hr'] = $hr;
    }
    
    
    public function prepare_index() {
        $this->lang = Language::get();
        
        $l = 'en';
        $this->data[$l]['main-title'] = 'Matija Belec';
        $this->data[$l]['author-bio-title'] = 'Bio';
        $this->data[$l]['author-bio-p1'] = 'He started to learn programming paradigms 
            back in 2006. Then he was making some basic algorithms in QBasic. The year 
            after, in 2007., he started to learn C/C++.';
        $this->data[$l]['author-bio-p2'] = 'From 2007 to 2010, his primarily programming 
            language was C++. He worked on many little applications or libraries and 
            modules. He learned OOP concept, how to develop stable desktop applications 
            (both in Windows and Linux OS). After a while, he develop advanced knowledge 
            of developing applications using wxWidgets library with database support 
            (SQLite, MySQL, PostgreSQL).';
        $this->data[$l]['author-bio-p3'] = 'At the end of 2009, he started to play with 
            hardware programming (C, Assembly). First steps of hardware programming he 
            has with arduino controller';
        $this->data[$l]['author-bio-p4'] = 'In period from 2010. to 2012, he was playing 
            with image manipulation programs (such as Gimp and Inkscape) and modeling 3D 
            models in Blender. He develop some algorithms in c++ and python in wich he 
            learned to use c++ and python libraries such as Boost, OpenCV and OpenGL.';
        $this->data[$l]['author-bio-p5'] = 'In 2012. started to learn web development 
            (HTML, CSS, PHP). In next two years he learned many principles and designs 
            with backend development (PHP + MySQL) and frontend development(JS and 
            JQuery). He have advanced level of knowledge in PHP and JQuery.';
        $this->data[$l]['author-bio-p6'] = 'From 2013. he started to learn how to develop 
            multithreaded algorithms on unix (primarily in c/c++) and how to use web 
            sockets in linux (socket programming in c on linux OS).';
        $this->data[$l]['author-bio-p7'] = 'At end of 2014. he learned PHP MVC framework 
            design pattern and from then, he is involved in development of his own MVC 
            framework.';
        $this->data[$l]['author-bio-p8'] = 'Today, in his free time, he develop algorithms 
            and applications in C/C++ and Python, websites and web applications using 
            MySQL, PHP and JQuery, create graphics in Gimp and Inkscape...';
        $this->data[$l]['author-skills-title'] = 'Skills';
        $this->data[$l]['author-skills'] = 'Matija has this skills:';
        $this->data[$l]['author-skills-skill1'] = 'Programming';
        $this->data[$l]['author-skills-skill2'] = 'Web design';
        $this->data[$l]['author-projects-title'] = 'Projects';
        $this->data[$l]['author-contact-title'] = 'Contact';
        $this->data[$l]['main-under-construction-title'] = 'Under construction';
        $this->data[$l]['main-under-construction'] = 'This website is under construction!';
        $this->data[$l]['main-author-info-title'] = 'Author\'s data';
        
        
        
        $l = 'hr';
        $this->data[$l]['main-title'] = 'Matija Belec';
        $this->data[$l]['author-bio-title'] = 'Biografija';
        $this->data[$l]['author-bio-p1'] = 'Programsku paradigmu je počeo učiti još 
            godine 2006. Tada je radiojednostavnije algoritme u QBasic-u. Slijedeće 
            godine, 2007., počeo je učiti C/C++.';
        $this->data[$l]['author-bio-p2'] = 'U razdoblju od 2007. do 2010. primarni 
            programski jezik mu je bio C++. Radio je na dosta malih aplikacija ili 
            biblioteka i modula. Tako je naučio koncept OOP-a, kako izraditi stabilnu 
            računalnu aplikaciju (u Windows ili Linux OS-u). Stekao je naprednije 
            znanje izrade aplikacija koristeći wxWidgets biblioteku uz podršku baze 
            podataka (SQLite, MySQL, PostgreSQL).';
        $this->data[$l]['author-bio-p3'] = 'Krajem 2009. godine, počeo se igrati sa 
            programiranjem sklopovlja (C, Assembly). Prvi koraci u programiranju 
            sklopovlja su mu bili sa arduino kontrolerom.';
        $this->data[$l]['author-bio-p4'] = 'Tokom razdoblja od 2010. do 2012. godine, 
            radio je sa uređivačima grafike (Gimp, Inkscape), te se počeo zanimati za 
            3D modeliranje u Blender alatu. Izradio nekoliko algoritama u c++-u i 
            python-u (tada se naučio naprednijem korištenju programskih alata c++ i 
            python, te korištenje biblioteka kao što su Boost, OpenCV i OpenGL sa 
            navedenim programskim jezicima).';
        $this->data[$l]['author-bio-p5'] = 'U 2012. godini počeo je učiti web 
            programiranje (HTML, CSS, PHP). U sljedeće dvije godine naučio je mnoge 
            principe i uzorke dizajna orijetiranih na serversku stranu (PHP + MySQL), 
            te orijentiranih na klijentsku stranu (JS i JQuery). Od tada posjeduje 
            naprednije znanje PHP-a i JQuery-a.';
        $this->data[$l]['author-bio-p6'] = 'Od 2013. počinje učiti izradu višedretvenih 
            algoritama na Linux OS-u (primarno u c/c++ programskom jeziku) i korištenje 
            web utičnica u Linux-u (programiranje web socket-a u c-u).';
        $this->data[$l]['author-bio-p7'] = 'Na kraju godine 2014. naučio je kako se 
            izrađuje PHP MVC framework. Od tada radi na izradi vlastitog MVC framework-a.';
        $this->data[$l]['author-bio-p8'] = 'Danas, u slobodno vrijeme, izrađuje algoritme 
            i aplikacije u C/C++-u i Python-u, web stranice i web aplikacije temeljene na 
            MySQL-u, PHP-u i JQuery-u, izrađuje grafiku u alatima Gimp i Inkscape...';
        $this->data[$l]['author-skills-title'] = 'Vještine';
        $this->data[$l]['author-skills'] = 'Matija posjeduje sljedeće vještine:';
        $this->data[$l]['author-skills-skill1'] = 'Programiranje';
        $this->data[$l]['author-skills-skill2'] = 'Web dizajn';
        $this->data[$l]['author-projects-title'] = 'Projekti';
        $this->data[$l]['author-contact-title'] = 'Kontakt';
        $this->data[$l]['main-under-construction-title'] = 'U izradi';
        $this->data[$l]['main-under-construction'] = 'Ova je stranica u fazi izrade!';
        $this->data[$l]['main-author-info-title'] = 'Podaci o autoru';
    }
    
    public function prepare_about() {
        $this->lang = Language::get();
        
        $this->data['en']['main-title'] = 'About author';
        $this->data['en']['main-author-bio-title'] = 'Who is Matija Belec?';
        $this->data['en']['main-author-bio'] = '
        <p>He started to learn programming paradigms back in 2006. Then he was 
        making some basic algorithms in QBasic. The year after, in 2007., he started to 
        learn C/C++.</p>
        
        <p>From 2007 to 2010, his primarily programming language was C++. He worked on 
        many little applications or libraries and modules. He learned OOP concept, how 
        to develop stable desktop applications (both in Windows and Linux OS). After a 
        while, he develop advanced knowledge of developing applications using wxWidgets 
        library with database support (SQLite, MySQL, PostgreSQL).</p>

        <p>At the end of 2009, he started to play with hardware programming (C, 
        Assembly). First steps of hardware programming he has with arduino 
        controller.</p>

        <p>In period from 2010. to 2012, he was playing with image manipulation 
        programs (such as Gimp and Inkscape) and modeling 3D models in Blender. He 
        develop some algorithms in c++ and python in wich he learned to use c++ and 
        python libraries such as Boost, OpenCV and OpenGL.</p>

        <p>In 2012. started to learn web development (HTML, CSS, PHP). In next two 
        years he learned many principles and designs with backend development 
        (PHP + MySQL) and frontend development(JS and JQuery). He have advanced 
        level of knowledge in PHP and JQuery.</p>

        <p>From 2013. he started to learn how to develop multithreaded algorithms 
        on unix (primarily in c/c++) and how to use web sockets in linux (socket 
        programming in c on linux OS).</p>

        <p>At end of 2014. he learned PHP MVC framework design pattern and 
        from then, he is involved in development of his own MVC framework.</p>

        <p>Today, in his free time, he develop algorithms and applications in 
        C/C++ and Python, websites and web applications using MySQL, PHP and 
        JQuery, create graphics in Gimp and Inkscape...</p>';
        
        
        
        $this->data['hr']['main-title'] = 'O autoru';
        $this->data['hr']['main-author-bio-title'] = 'Tko je Matija Belec?';
        $this->data['hr']['main-author-bio'] = '
        <p>Programsku paradigmu je počeo učiti još godine 2006. Tada je radio
        jednostavnije algoritme u QBasic-u. Slijedeće godine, 2007., počeo je
        učiti C/C++.</p>
        
        <p>U razdoblju od 2007. do 2010. primarni programski jezik mu je bio C++.
        Radio je na dosta malih aplikacija ili biblioteka i modula. Tako je
        naučio koncept OOP-a, kako izraditi stabilnu računalnu aplikaciju (u 
        Windows ili Linux OS-u). Stekao je naprednije znanje izrade aplikacija 
        koristeći wxWidgets biblioteku uz podršku baze podataka (SQLite, MySQL, 
        PostgreSQL).</p>

        <p>Krajem 2009. godine, počeo se igrati sa programiranjem sklopovlja (C, 
        Assembly). Prvi koraci u programiranju sklopovlja su mu bili sa arduino 
        kontrolerom.</p>

        <p>Tokom razdoblja od 2010. do 2012. godine, radio je sa uređivačima 
        grafike (Gimp, Inkscape), te se počeo zanimati za 3D modeliranje u 
        Blender alatu. Izradio nekoliko algoritama u c++-u i python-u (tada se 
        naučio naprednijem korištenju programskih alata c++ i python, te 
        korištenje biblioteka kao što su Boost, OpenCV i OpenGL sa navedenim 
        programskim jezicima).</p>

        <p>U 2012. godini počeo je učiti web programiranje (HTML, CSS, PHP). U 
        sljedeće dvije godine naučio je mnoge principe i uzorke dizajna 
        orijetiranih na serversku stranu (PHP + MySQL), te orijentiranih na 
        klijentsku stranu (JS i JQuery). Od tada posjeduje naprednije znanje 
        PHP-a i JQuery-a.</p>

        <p>Od 2013. počinje učiti izradu višedretvenih algoritama na Linux OS-u
        (primarno u c/c++ programskom jeziku) i korištenje web utičnica u 
        Linux-u (programiranje web socket-a u c-u).</p>

        <p>Na kraju godine 2014. naučio je kako se izrađuje PHP MVC framework. 
        Od tada radi na izradi vlastitog MVC framework-a.</p>

        <p>Danas, u slobodno vrijeme, izrađuje algoritme i aplikacije u 
        C/C++-u i Python-u, web stranice i web aplikacije temeljene na MySQL-u, 
        PHP-u i JQuery-u, izrađuje grafiku u alatima Gimp i Inkscape...</p>';
    }
    
    
    public function get_data() {
        $ret = $this->data['en'];
        foreach($this->data[$this->lang] as $k=>$v)
        $ret[$k] = $v;
        return $ret;
    }
    public function get_lang() {
        return $this->lang;
    }
}

?>