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
        
        $this->data['en']['main-title'] = 'Main title';
        $this->data['en']['main-data'] = '<p>Info</p><p>Info 2</p><p>Info 3</p>';
        $this->data['en']['main-motivation-title'] = 'Motivation';
        $this->data['en']['main-about-title'] = 'About author';
        $this->data['en']['main-skills-title'] = 'Skills';
        
        
        $this->data['hr']['main-title'] = 'Glavni naslov';
        $this->data['hr']['main-data'] = '<p>Info</p><p>Info 2 hr</p><p>Info 3 hr</p>';
        $this->data['hr']['main-motivation-title'] = 'Motivacija';
        $this->data['hr']['main-about-title'] = 'O autoru';
        $this->data['hr']['main-skills-title'] = 'Vještine';
    }
    
    public function prepare_about() {
        $this->lang = Language::get();
        
        $this->data['en']['main-title'] = 'About author';
        $this->data['en']['main-author-bio-title'] = 'Who is Matija Belec?';
        $this->data['en']['main-author-bio'] = '
        <p>I have started to learn programming paradigms back in 2006. Then I was 
        making some basic algorithms in QBasic. Next year, in 2007 started to 
        learn C/C++.</p>
        
        <p>From 2007 to 2010, my primarily programming language was been C++. I 
        have worked on many little applications or libraries and modules. I have 
        learneg OOP concept, how to develop stable desktop applications (in Windows 
        and Linux OS). Advanced knowledge of developing applications using 
        wxWidgets library with database support (SQLite, MySQL, PostgreSQL).</p>

        <p>At the end of 2009, started to play with hardware programming (C, 
        Assembly). First steps of hardware programming was been with arduino 
        controller.</p>

        <p>In period from 2010 to 2012, I have been playing with image manipulation 
        programs (Gimp, Inkscape), and modeling 3D models in Blender. Some 
        algorithms development in c++ and python (learned to use c++ and python 
        libraries such as Boost, OpenCV and OpenGL).</p>

        <p>In 2012 started to learn web development (HTML, CSS, PHP). In next 2 
        years I have learned many principles and designs with backend development 
        (PHP + MySQL) and frontend development(JS and JQuery). I have advanced 
        level of knowledge in PHP and JQuery.</p>

        <p>From 2013. started to learned how to develop multithreaded algorithms 
        on unix (primarily in c/c++) and how to use web sockets in linux (socket 
        programming in c on linux OS).</p>

        <p>At end of 2014. learned how to use PHP MVC framework design and 
        constantly trying to learn some new programming stuffs.</p>

        <p>Today, in my free time, I develop algorithms and applications in 
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
        Od tada radi na izradi vlastitog MVC framework-a, te prati razvoj 
        tehnologije na tom području.</p>
        
        <p>Danas, u slobodno vrijeme, izrađuje algoritme i aplikacije u 
        C/C++-u i Python-u, web stranice i web aplikacije temeljene na MySQL-u, 
        PHP-u i JQuery-u, izrađuje grafiku u alatima Gimp i Inkscape...</p>';
    }
    
    
    public function get_data() {
        return $this->data[$this->lang];
    }
    public function get_lang() {
        return $this->lang;
    }
}

?>