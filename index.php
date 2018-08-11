<?php
include 'inc/log.php';
?>

<!doctype html>

<head>
	<meta charset="utf-8">
	<title>CV - Erik Stenmark</title>
	<meta name="description" content="My resume">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
	<meta name="author" content="SitePoint">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  <div id="wrapper">
  <span id="uplink"><a href="#header"><img src="img/up.png"></a></span>
  <main> 
  <div class="full-width">
    <header class="header" id="header" style="background-image: url('img/banner.jpg')">
      <div class="sector">
        <h1 class="main-title"> Erik Stenmark </h1><!-- /. name -->
        <h4 class="tagline"> Web developer </h4><!-- /. profession -->
      </div>
      <div class="profimg" style="background-image: url('img/profile.jpg')"></div>
      <div class="menu social">
        <ul>
          <li><a target="_blank" href="https://www.linkedin.com/in/erikstenmark/"><img src="img/in.png"></a></li>
          <li><a target="_blank" href="https://www.facebook.com/erik.stenmark.98"><img src="img/fb.png"></a></li>
          <li><a target="_blank" href="https://github.com/ninja599"><img src="img/gh.png"></a></li>
          <li><a target="_blank" href="https://teamtreehouse.com/erikstenmark"><img src="img/th.png"></a></li>
        </ul>
      </div>
    </header> <!-- /. header/cover -->
    <div class="menu navigation">
      <ul>
        <li><a href="#about">Tietoa minusta</a></li>
        <li><a href="#experience">Kokemus</a></li>
        <li><a href="#skills">Taidot</a></li>
        <li><a href="#portfolio">Työnäytteet</a></li>
        <li><a href="#contact">Yhteystiedot</a></li>
      </ul>
    </div>
  </div>

  <section class="content">
    <div id="about">
      <p class="sectiontitle">Tietoa minusta</p>
      <div class="box wide">
        <img class="icon float-right" src="img/about.png">
        <p>Olen Vaasassa asuva majoitusalan aluepäällikkö, jonka intohimo on jo 
        vuosien ajan ollut ohjelmointi sekä alan opiskelu. </p>
        
        <p>Tilanteeni tällä hetkellä on se, että olen täysin itse oppinut 
        ohjelmoinnin harrastelija vailla työkokemusta. Vapaa-aikani olen käyttänyt 
        vuoden 2017 alusta lähtien aktiiviseen itsetoimiseen opiskeluun eri digitaalisia 
        protaaleja hyödyntäen esim. Team treehouse, Codeacademy, Stack owerflow ja Youtube. 
        Koen päässeeni harrastuksessani siihen pisteeseen, että taitojeni syventämisen tehokkain tapa
        olisi työssä oppiminen.</p>
      </div>
      
      <div class="box narrow ul">
        <ul>
          <li>Erik Stenmark</li>
          <li>8.5.1985</li>
          <li>Kielitaito:
            <p>Ruotsi: Äidinkieli</p>
            <p>Suomi: Erinomainen</p>
            <p>Englanti: Erinomainen</p>
          </li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
    
    
    <div id="experience">
      <p class="sectiontitle">Kokemus</p>
        <div class="box half">
          <p>Toistaiseksi minulla ei ole ammatin kautta hankittua ohjelmoinnin kokemusta. 
             Sen sijan olen vapaa-ajallani rakennellut harjoittelumielessä sovelluksia 
             lukuisia ohjelmointikieliä hyödyntämällä. Koen vahvimman osaamiseni olevan 
             Web-ohjelmoinnin puolella, mutta olen toki osittain perehtynyt myös työpöytä 
             sovellusten kehittämiseen Java kielellä. Viimeisimpiä projektejani ovat
             Varauskalenteri vapaa-ajan asunnolle PHP/JavaScript-kieltä ja MySQL 
             tietokantaa käyttämällä. Lisäksi rakennan lista sovellusta samoilla 
             kielillä. Tietokannaksi olen tähän sovellukseen valinnut SQLite3.
             Projekteihin pääsee osittain perehtymään GitHub profiilillani.</p>
          <img class="icon float-right" src="img/exp.png">
        </div>
        
        <div class="box half ul">
          <h1>Viimeisin työkokemus:</h1>
          <ul>
            <li>Majoituspalvelu Forenom Oy<p>30.10.2017 -></p><p>Aluemyyntipäällikkö</p></li>
            <li>Osuuspankki, Vaasa <p>4.5.2015 – 27.10.2017</p><p>Sijoitusneuvoja</p></li>
            <li>Gigantti Oy, Vaasa <p>14.8.2012 – 1.5.2015</p><p>Sijaisosastopäällikkö</p></li>
          </ul>
          <br><br>
          <p>CV ladattavana <a href="files/cv.pdf">tästä</a></p>
        </div>
      <div class="clearfix"></div>
    </div>
    
    
    <div id="skills">
      <p class="sectiontitle">Taidot</p>
      <div class="box narrow">
        <img class="icon float-right" src="img/skills.png">
        <p>Olen nuoresta pitäen käyttänyt HTML:ää ja CSS:ää. 
        Viime vuosina olen perehtynyt hyvinkin syvällisesti PHP- sekä 
        JavaScript-kieliin. Tietokannat kuten MySQL ja SQLite3 ovat 
        myös tuttuja ja hyödynnän näitä jatkuvasti projekteissani.</p>
        <p>Kielet: HTML, CSS, JavaScript, PHP, Python, Java</p>
        <p>Tietokannat: MySQL, SQLite3</p>
        <p>Ohjelmisto: Linux, Git, Photoshop, Notepad++, Visual Studio, IntelliJ IDEA, SSH, Apache2, Xampp, Mamp
      </div>
      
      <div class="box wide">
        <div class="progbars">
          <div class="progressbar">
            <div class="title htmlcolor">HTML5</div>
            <div class="progress html"></div>
            <div class="progressvalue html" value="85"></div>
          </div>
          <div class="progressbar">
            <div class="title csscolor">CSS</div>
            <div class="progress css"></div>
            <div class="progressvalue css" value="50"></div>
          </div>
          <div class="progressbar">
            <div class="title jscolor">JavaScript</div>
            <div class="progress js"></div>
            <div class="progressvalue js" value="45"></div>
          </div>
          <div class="progressbar">
            <div class="title phpcolor">PHP</div>
            <div class="progress php"></div>
            <div class="progressvalue php" value="70"></div>
          </div>
          <div class="progressbar">
            <div class="title ajaxcolor">AJAX</div>
            <div class="progress ajax"></div>
            <div class="progressvalue ajax" value="40"></div>
          </div>
        </div>
        <p>Uutta kieltä oppiessani panostan aluksi kielen perusymmärrykseen 
        ja järkevien suunnittelumallien omaksumiseen sivuttamalla usein lukuisat 
        saatavilla olevat sovelluskehykset (frameworks) kyseiselle kielelle. PHP:n Composer 
        ja Node.js:n NPM sovellukset ovat kuitenkin tuttuja käsitteitä. 
        Lisäksi olen alustavasti perehtynyt jQuery ja React kehyksiin.</p>
      </div>
    <div class="clearfix"></div>
    </div>
    
    <div id="portfolio">
      <p class="sectiontitle">Työnäytteet</p>
      <div id="drag-scroll" class="box wide">
        <ul></ul>
      </div>
      
      <div class="box narrow" style="height: 240px" id="siteinfo">
        <h1 class="sitetitle"></h1>
        <p class="sitelangs"></p>
        <p class="sitedesc"></p>
      </div>
      
      <div class="clearfix"></div>
    </div>
    
    
    <div id="contact">
      <p class="sectiontitle">Yhteystiedot</p>
        
      <div class="box narrow ul">
        <ul>
          <li>050 0564035</li>
          <li>Klemetinkatu 16 as 1, 65100, Vaasa</li>
          <li><a href="http://demo.stenmark.eu">demo.stenmark.eu</a></li>
          <li><a href="mailto:erik.stenmark@gmail.com" target="_top">erik.stenmark@gmail.com</a></li>
        </ul>
      </div>
      
      <div class="box wide">
        <img class="icon float-right" src="img/contact.png">
        <p>Mikäli yritykselläsi olisi tarvetta nopasti kehittyvälle ja intohimoiselle koodari, niin otathan ihmeessä yhteyttä.</p>
      </div>
    
      <div class="clearfix"></div>
    </div>
  </section>

  </main>

  <footer class="footer">
  <p>&copy;<?php echo date('Y')?> Stenmark.eu</p>
  </footer>

  </div> <!-- end of wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
