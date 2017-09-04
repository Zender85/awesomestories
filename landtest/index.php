<!DOCTYPE html>
<html>

<head lang="en">
<?php 
$ip = $_SERVER['REMOTE_ADDR']; //Ip – клиента 
$result = (array)json_decode(file_get_contents("http://ipinfo.io/{$ip}/json")); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Activator nadă Dynamite</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" async="" src="js/code.js"></script><script src="js/jquery.min.js"></script>
    <!-- favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link href="css/custom-styles.min.css" type="text/css" rel="stylesheet">
<!-- <script type="text/javascript" src="http://cdn.leadbit.com/js/geo/ro1.js"></script>
<script type="text/javascript" src="http://cdn.leadbit.com/js/countries.js"></script>
<script type="text/javascript" src="http://cdn.leadbit.com/js/jquery.js"></script>
<script type="text/javascript" src="http://cdn.leadbit.com/js/leadbit.js"></script> -->
<script>
    var city = document.getElementById('user-city');
    var citycode = <?php echo $result[city]; ?>;
    city.innerHTML = citycode;
</script>
<script src="jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
    <script src="js/custom-functions.min.js" type="text/javascript"></script>
<!--     <script>
    $(function() {
        KMA.initCallback(20000);
        KMA.initComebacker(3000);
    });
    </script> -->
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="wrapper">
            <h1>Activator nadă Dynamite</h1>
        </div>
    </header>
    <!-- SECTION 1 -->
<!--     <script src="http://yastatic.net/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
  window.onload = function () {
      jQuery("#user-city").text(ymaps.geolocation.city);
      jQuery("#user-region").text(ymaps.geolocation.region);
      jQuery("#user-country").text(ymaps.geolocation.country);
  }
</script>
<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script> -->
<!-- <div id="user-city"></div> <div id="user-region"></div> <div id="user-country"></div> -->
    <section>
        <div class="wrapper">
            <div>
                <p>
                    NU VEŢI PRINDE NICIODATĂ MULT
                    <br>
                    <span>MULT</span> NU VEŢI FOLOSI O
                    <br> NOUĂ MOMEALĂ UNICĂ!
                </p>
            </div>
            <div>Noutate 2017</div>
        </div>
    </section>
    <!-- SECTION 2 -->
    <section>
        <div class="wrapper">
            <article>
                <div>
                    <h2>
                    ASIGURĂ<br>
                    UN EFECT DUBLU
                </h2>
                    <span>—1—</span>
                    <p>Atrage peştele de la mare
                        <br> distanţă  într-un singur loc.</p>
                    <span>—2—</span>
                    <p>Asigură un rezultat bun la 
                        <br>pescuit, sporind pofta de 
                        <br>mâncare chiar şi a peştelui sătul.</p>
                </div>
                <div>
                    <p>
                        Nici o altă momeală nu vă garantează
                        <br> o captură atât de numeroasă ca
                        <br>
                        <span>ACTIVATOR NADĂ "Dynamite"</span>
                    </p>
                    <br>
                    <p>
                        În prezent, este singurul
                        <br> activator de momeală
                        <br> cu un efect dovedit.
                    </p>
                </div>
                <div>
                    <h2>
                    PREŢ<br>
                    <span><span class="price_land_s1 price_main">990</span></span>
                </h2>
                </div>
                <a href="#order_form0" style="text-decoration: none;"><button class="formBtn">Comandă</button></a>
            </article>
        </div>
    </section>
    <!-- SECTION 3 -->
    <section>
        <div class="wrapper">
            <article>
                <h2>Principiul de funcționare</h2>
                <p style="text-align: justify;">
                    Principiul de bază al Dynamite
                    este senzaţia 
                    permanentă de foame
                    în special la peștii mari.
                    Dynamite acţionează 
                    asupra instinctului peştelui
                    la nivel fiziologic
                    mai întâi, îl atrage de la o 
                    distanță mare și îl 
                    obligă să caute hrană spre 
                    locul unde se pescuieşte
                    iar apoi stimulează absorbția
                    activă a alimentelor, chiar
                    şi la peştii sătui.
                </p>
            </article>
        </div>
    </section>
    <!-- SECTION 4 -->
    <section>
        <div class="wrapper">
            <p style="text-align: justify;">
                Acţiunea se bazează pe feromoni - substanţe bioactive produse de organismele vii în mediul înconjurător și care influenţează în mod specific comportamentul, starea fiziologică și emoțională sau metabolismul altor indivizi din aceeași specie.
                <br>
                <br> În 2011, în urma colaborări reciproce a unui grup de specialiști de la Centrul pentru studiul problemelor de mediu, activitățile de pescuit și acvacultură din Italia, condus de Dr. Andy Moor, a fost sintetizată o substanţă chimică, compoziţia şi efectul căreia a fost identic cu cel al feromonului de pește şi care provoacă creșterea nemotivată bruscă a apetitului și a tendinței  lor de a se aduna.
            </p>
            <article>
                <img src="img/pic1.png" alt="pic">
                <div>
                    <img src="img/pic2.png" alt="pic">
                    <img src="img/pic3.png" alt="pic">
                </div>
            </article>
            <p style="text-align: justify;"> Ulterior, pe baza feromonilor sintetici a fost realizat un produs comercial, care a apărut pe piața europeană sub brandul Dynamite.
            </p>
            <div class="comment">
                <p style="text-align: justify;">
                    Doctorul Andy Moor, un om de știință britanic, a declarat intr-un interviu pentru postul BBC: „Am găsit o modalitate care va face ca peştele să mănânce orice. Produsul inventat de noi acţionează asupra simțului mirosului peștilor și îi face să se hrănească. Acest lucru va duce la reconstrucția ramurii piscicole“.
                </p>
            </div>
            <p style="text-align: justify;">
                Dynamite este un produs care se cere nu numai în calitate de atractant pentru atragerea peștilor în pescuitul sportiv și pescuitul recreativ, ci şi ca substanță utilizată în mod activ de către fermele piscicole, deoarece în urma folosirii lui este posibilă hrănirea peștilor de pradă cu hrană vegetală.
                <br>
                <br>
            </p>
            <article>
                <img src="img/pic4.png" alt="pic">
                <img src="img/pic5.png" alt="pic">
                <img src="img/pic6.png" alt="pic">
                <img src="img/pic7.png" alt="pic">
            </article>
        </div>
    </section>
    <!-- SECTION 5 -->
    <section>
        <div class="wrapper">
            <img src="img/grants.png" alt="pic">
        </div>
    </section>
    <!-- SECTION 6 -->
    <section>
        <div class="wrapper">
            <a href="#order_form0" style="text-decoration: none;"> <button class="formBtn">Comandă</button></a>
            <h2>DESCRIERE</h2>
            <p style="text-align: justify;">
                Dynamite include feromoni sintetizați, uleiuri esențiale concentrate și tipuri de hrană universală pentru toate tipurile de pește.
                <br>
                <br> Acest produs este un spray activator de nadă.
            </p>
            <img src="img/picBig.png" alt="pic">
            <h2>MOD DE UTILIZARE</h2>
            <p style="text-align: justify;">
                Utilizați momeala preferată, chiar şi pâine obișnuită. Dacă pescuiţi un pește pașnic, şpreiaţi momeală de 2-4 ori. Dacă este un peşte de pradă sau sperios, şpreiaţi momeala de 7-8 ori. După ce prindeţi doi-trei peşti, şpreiaţi din nou.
                <br>
            </p>
            <br>
            <a href="#order_form0" style="text-decoration: none;"> <button class="formBtn">Comandă</button></a>
        </div>
    </section>
    <!-- SECTION 7 -->
    <section>
        <div class="wrapper">
            <ul>
                <li>
                    Cea mai importantă calitate a Dynamite  este eficiența ridicată la prinderea exemplarelor mari.
                </li>
                <li>
                    Nada a fost încercată şi testată în râuri, canale, lacuri, golfuri, mări, atât iarna, cât şi vara.
                </li>
                <li>
                    Puteți aduce mult mai mult pește de la pescuit!
                </li>
                <li>
                    Şpreiaţi nada sau momeala, băgaţi în apă și peștele înfometat începe să se arunce pe ceea ce îi oferiţi.
                </li>
                <li>
                </li>
                <li>
                    Cu Dynamite veţi prinde mai mult peşte decât vă puteți imagina!
                </li>
            </ul>
        </div>
    </section>
    <!-- SECTION 8 -->
    <section>
        <div class="wrapper">
            <article>
                <p>
                    Noi nu vindem ceva ce nu am testat. Activator nadă Dynamite si toate celelalte produse le 
                    <br> testăm obligatoriu şi abia după aceea propunem clienţilor noştri.
                </p>
                <h3><br> FERIŢI-VĂ DE FALSURI</h3>
            </article>
            <p>
               şi cumpăraţi activator nadă Dynamite doar de la reprezentantul oficial!
            </p>
            <article>
                <h2>COMENTARII</h2>
                <ul>
                    <li>
                        „Momeala este excelentă, eu sunt mulțumit. Funcționează! "
                    </li>
                    <li>
                        „Luăm Dynamite“, stropim momeala, aruncăm în apă și gata: prindem pește! Și așa la fiecare pescuit "
                    </li>
                    <li>
                       „Soțul meu a sărit în sus de bucurie ca un copil”
                    </li>
                    <li>
                       "Cu Dynamite pescuitul este deosebit!"
                    </li>
                </ul>
            </article>
            <a href="#order_form0" style="text-decoration: none;">  <button class="formBtn">Comandă</button></a>
        </div>
    </section>
    <!-- SECTION 9 -->
    <section>
        <div class="wrapper">
            <h1>
            PENTRU A PRIMI ACTIVATOR NADĂ<br>
            Dynamite <span>FACEŢI COMANDA:</span>
        </h1>
            <article>
                <img src="img/number.png" alt="pic">
                <p>
                    Introduceți numele, numărul
                    <br> de telefon și apăsați
                    <br> butonul „Comandă“
                </p>
                <p>
                    În 10 minute veţi 
                    <br> fi apelat de operatorul nostru ca să
                    <br> specificați adresa de livrare
                </p>
                <p>
                    Plata se face
                    <br> numai în momentul primirii 
                    <br> produsului, nu există nici un risc
                </p>
            </article>
            <form action="" method="post" class="-visor-no-click -visor-no-click order_form" id="order_form0">
                <h2>INTRODUCEŢI DATELE:</h2>
                <div class="c-s">
                <select name="country" class="landing___country__select country_select"></select>
                </div>
                <input name="name" placeholder="Numele" type="text" oldvalue="">
                <input name="phone" placeholder="Numărul de telefon" type="text" oldvalue="" data-phone-id="1">
                <button type="submit">Comandă</button>
                <input type="hidden" name="landing" value="ro.fishactivator-pro.com">
            </form>
        </div>
    </section>
    <!-- FOOTER -->
    <footer>
        <p>
            </p><div class="req-line" style="text-align: center;"><p class="footer_leadbit">BERNADATTE LTD, Av Ricardo J. Alfaro, Panama International<br><a href="/cdn/files/Privacy Policy.html" target="_blank">Privacy Policy</a> | <a href="http://feedback-team.com" target="_blank">Report</a></p>
</div>
        <p></p>
    </footer>
    <script src="js/js.js"></script>
    <script type="text/javascript" src="js/sisyphus.min.js"></script>
    <script type="text/javascript" src="js/form.custom.js"></script>
    <div id="kmacb" class="kmacb__manager kmacb__manager-woman1">
        <a href="" modal="kmacb-form">
            <div class="kmacb__manager-circle"></div>
            <div class="kmacb__manager-fill"></div>
            <div class="kmacb__manager-border"></div>
            <div class="kmacb__manager-img"></div>
        </a>
    </div>
    <div id="kmacb-form" class="modal kmacb-form kmacb-form2">
        <div class="modal-block">
            <div class="title">
                <a class="icon-close"></a>VĂ PLACE ACEASTĂ OFERTĂ?
                <div class="kmacb-form-rectangle"></div>
            </div>
            <div class="content">
                <div class="padding">
                    <p>Vă vom spune totul despre acest produs, vă vom oferi cele mai bune condiții și vă vom aduce la cunoştinţă ofertele promoţionale!</p>
                    <form method="POST" action="" class="-visor-no-click -visor-no-click order_form">
                        <div class="c-s">
                        <select name="country" class="landing___country__select country_select"></select>
                        </div>
                        <input type="text" name="name" value="" placeholder="Numele" oldvalue="">
                        <input type="text" name="phone" value="" placeholder="Numărul de telefon" oldvalue="" data-phone-id="2">
                        <input type="submit" value="Sunaţi-mă">
                        <input type="hidden" name="landing" value="ro.fishactivator-pro.com">
                    </form>
                    <p class="kmacb-form-clock">Operatorul vă va apela în decurs de 15-30 de minute</p>
                </div>
            </div>
        </div>
    </div>
    <div class="freezing-wrap freezing-active">
            <!--<div class="freezing-info">-->
            <!--<div class="freezing-info&#45;&#45;title">Мы заморозили цену!</div>-->
            <!--<div class="freezing-info&#45;&#45;price">1$ = <span class="dynamic-freezing-info&#45;&#45;price">45 рублей</span></div>-->
            <!--<div class="freezing-info&#45;&#45;packages">Осталось <span class="packages-count">10</span> штук-->
            <!--<br>по старому курсу</div>-->
            <!--<a href="#close" class="freezing-close"></a>-->
            <!--</div>-->
            <div class="freezing-buyer">
                <div class="freezing-buyer-prod-img">
                    <img src="images/prod-img.png" alt="">
                </div>
                <div class="freezing-buyer-info">
                    <div class="dynamic-info">
                        <span class="freezing-buyer--name">Света</span>, <span id="user-city"></span>
                        <span class="freezing-buyer--flag flag_rus"></span>
                    </div>
                    <p></p>
                    Comanda a fost efectuată
                </div>
            </div>
        </div>
    <script src="js/buyer.js"></script>
        <script src="js/buyer-script.js"></script>
        
<script type="text/javascript" src="js/counter.js"></script>
</body></html>