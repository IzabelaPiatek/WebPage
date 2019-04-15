
    <?php
    include_once "naglowek.html";
    function drukuj_form() {
        ?>
        <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="#myPage">BVB</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#Oklubie">O KLUBIE</a></li>
                            <li><a href="#Stadion">STADION</a></li>
                            <li><a href="#Kibice">KIBICE</a></li>
                            <li><a href="#Maskotka">MASKOTKA</a></li>
                            <li><a href="#Zawodnicy">ZAWODNICY</a></li>
                            <li><a href="#Kontakt">KONTAKT</a></li>
                            <li><a href="probalogowania.php">ZALOGUJ</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="jumbotron text-center">

                <h1>Borussia Dortmund</h1> 


            </div>

            <div id="Oklubie" class="container-fluid">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>O klubie</h2>
                        <h4>Niemiecki klub sportowy z siedzibą w Dortmundzie, w którym główną rolę odgrywa sekcja piłki nożnej.
                            Borussia była jednym z klubów-założycieli Bundesligi i jest jednym z najbardziej utytułowanych w Niemczech – na swoim koncie ma osiem tytułów mistrzowskich, cztery puchary Niemiec, pięć Superpucharów Niemiec, Puchar Zdobywców Pucharów z 1966, a także Ligę Mistrzów z 1997 oraz Puchar Interkontynentalny z tego samego roku. Klub był jednym z założycieli nieistniejącej od 2008 roku grupy G-14 zrzeszającej największe kluby Europy.</h4>  

                    </div>
                    <div class="col-sm-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Borussia_Dortmund_logo.svg/240px-Borussia_Dortmund_logo.svg.png" alt="Logo Borussii"/>
                    </div>
                </div>
            </div>

            <div id="Stadion" class="container-fluid bg-grey">
                <div class="row">
                    <div class="col-sm-4"><br><br><br><br>
                        <img src="http://ocdn.eu/pulscms-transforms/1/hQ1ktkpTURBXy9hMjQ4YTY2NDczYjRiZTUzMjRhNTMzZTRjYTNmNTFjZS5qcGeRkwIAzQHk" id="zdj" alt="Zdjęcie stdionu"/>
                    </div>
                    <div class="col-sm-8">
                        <h2>STADION</h2>
                        <h4>Historia Westfalenstadion sięga 1965, kiedy to po raz pierwszy zaplanowano budowę nowego stadionu dla Borussii. Obiekt stworzony na potrzeby mistrzostw świata w 1974 stał się jednym z najsłynniejszych stadionów świata, dziś kojarzy się głównie z żywiołowo reagującą widownią kibicującą Borussii Dortmund. Budowa stadionu została sfinansowana przez władze miasta Dortmund. Obiekt, który początkowo mieścił 54 tysiące osób był kilkakrotnie rozbudowywany. Po raz pierwszy w 1992 stadion dotknęła generalna przebudowa. Związana ona była z nowymi wymogami UEFA dotyczącymi ilości miejsc siedzących, pojemność stadionu ograniczyła się do 48 tysięcy. Już w połowie lat 90. podjęto decyzję o rozbudowie Westfalenstadion. W 1999 skończono przebudowę i stadion mógł pomieścić 69 tysięcy widzów. Na potrzeby mistrzostw świata z 2006 stadion po raz kolejny został powiększony do 83 tysięcy miejsc. Obecnie jest to największy stadion w Niemczech. W 2005 Borussia w wyniku kłopotów finansowych została zmuszona do sprzedaży nazwy stadionu firmie Signal Iduna, od tej pory obiekt ten nosi nazwę Signal Iduna Park. </h4>
                    </div>
                </div>
            </div>

            <div id="Kibice" class="container-fluid">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>KIBICE</h2>
                        <h4>Borussia nie tylko dzięki sportowym sukcesom jest postrzegana jako jedna z największych i najlepszych drużyn piłkarskich świata. Jej wizytówką są kibice, którzy przez wielu są uznawani za najlepszych i najbardziej oddanych fanów drużyn piłkarskich świata. Przez wiele lat trybuny na Westfalenstadion gościły największą ilość kibiców w całych Niemczech. Rok po roku systematycznie rosła ilość widzów oglądających regularnie spotkania czarno-żółtych. Obecnie Borussia ma największą w Europie średnią liczbę widzów na swoich meczach.</h4>  

                    </div>
                    <div class="col-sm-4">
                        <br>
                        <img src="http://ocdn.eu/pulscms-transforms/1/rkjktkpTURBXy83M2QzYmMzMDhiOTEyZmJiYjAxYjQyYWNjZDEzYjQ0NC5qcGeRkwIAzQHk" id="zdj1" alt="Zdjęcie kibiców" />
                    </div>
                </div>
            </div>
            <div id="Maskotka" class="container-fluid bg-grey">
                <div class="row">
                    <div class="col-sm-4"><br>
                        <img src="https://i.ebayimg.com/images/g/62oAAOSwImRYElkK/s-l300.jpg" id="zdj2" alt="Zdjęcie maskotki"/>
                    </div>
                    <div class="col-sm-8">
                        <h2>MASKOTKA</h2>
                        <h4>Na zdjęciu znajduje się oficjalna maskotka klubowa Borussii Dortmund - pszczółka Emma. Owad ten został wybrany nieprzypadkowo - jego ciało jest pokryte paskami, których kolory są identyczne jak kolory klubowe dortmundzkiego zespołu. Ponadto pszczoły są znane z pracowitości i klub dzięki swojej maskotce chce motywować piłkarzy do pracy na boisku.</h4>
                    </div>
                </div>
            </div>

            <!-- Container (Services Section) -->
            <div id="Zawodnicy" class="container-fluid text-center">
                <h2>ZAWODNICY</h2>
                <br>

                <div class="row slideanim">
                    <div class="col-sm-3">
                        <h4>#1</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/26-1502448725.jpg?lm=1502448811" class="img-circle" alt="Roman Weidenfeller">
                        <h4>Roman Weidenfeller</h4>
                        <p>Bramkarz</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#38</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/59027-1502448089.jpg?lm=1502448163" class="img-circle" alt="Roman Bürki" >
                        <h4>Roman Bürki</h4>
                        <p>Bramkarz</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#35</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/238722-1502448509.jpg?lm=1502448564" class="img-circle" alt="Dominik Reimann">
                        <h4>Dominik Reimann</h4>
                        <p>Bramkarz</p>
                    </div>

                    <div class="col-sm-3">
                        <h4>#25</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/34322-1502448705.jpg?lm=1502448769" class="img-circle" alt="Sokratis">
                        <h4>Sokratis</h4>
                        <p>Środkowy obrońca</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#16</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/284730-1473155774.jpg?lm=1473155795" class="img-circle" alt="Manuel Akanji">
                        <h4>Manuel Akanji</h4>
                        <p>Środkowy obrońca</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#36</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/43512-1502448718.jpg?lm=1502448797" class="img-circle" alt="Ömer Toprak" >
                        <h4>Ömer Toprak</h4>
                        <p>Środkowy obrońca</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#2</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/284730-1473155774.jpg?lm=1473155795" class="img-circle" alt="Dan-Axel Zagadou">
                        <h4>Dan-Axel Zagadou</h4>
                        <p>Środkowy obrońca</p>
                    </div>

                    <div class="col-sm-3">
                        <h4>#13</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/170986-1502448310.jpg?lm=1502448385" class="img-circle" alt="Raphaël Guerreiro">
                        <h4>Raphaël Guerreiro</h4>
                        <p>Lewy obrońca</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#29</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/35208-1502448537.jpg?lm=1502448616" class="img-circle" alt="Marcel Schmelzer">
                        <h4>Marcel Schmelzer </h4>
                        <p>Lewy obrońca</p>
                    </div>

                    <div class="col-sm-3">
                        <h4>#15</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/129674-1470739413.jpg?lm=1470739539" class="img-circle" alt="Jeremy Toljan">
                        <h4>Jeremy Toljan</h4>
                        <p>Prawy obrońca</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#26</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/59027-1502448089.jpg?lm=1502448163" class="img-circle" alt="ſukasz Piszczek">
                        <h4>ſukasz Piszczek</h4>
                        <p>Prawy obrońca</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#37</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/93922-1502448295.jpg?lm=1502448351" class="img-circle" alt="Erik Durm">
                        <h4>Erik Durm</h4>
                        <p>Prawy obrońca</p>
                    </div>

                    <div class="col-sm-3">
                        <h4>#33</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/196792-1502448732.jpg?lm=1502448828" class="img-circle" alt="Julian Weigl">
                        <h4>Julian Weigl</h4>
                        <p>Defensywny pomocnik</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#8</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/31095-1502448530.jpg?lm=1502448599" class="img-circle" alt="Nuri Sahin">
                        <h4>Nuri Sahin</h4>
                        <p>Defensywny pomocnik</p>
                    </div>

                    <div class="col-sm-3">
                        <h4>#19</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/191422-1502448104.jpg?lm=1502448184" class="img-circle" alt="Mahmoud Dahoud"> 
                        <h4>Mahmoud Dahoud</h4>
                        <p>Środkowy pomocnik</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#27</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/28947-1502448096.jpg?lm=1502448174" class="img-circle" alt="Gonzalo Castro">
                        <h4>Gonzalo Castro</h4>
                        <p>Środkowy pomocnik</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#18</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/44466-1502448523.jpg?lm=1502448587" class="img-circle" alt="Sebastian Rode">
                        <h4>Sebastian Rode</h4>
                        <p>Środkowy pomocnik</p>
                    </div>

                    <div class="col-sm-3">
                        <h4>#10</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/74842-1471508796.jpg?lm=1471508902" class="img-circle" alt="Mario Götze">
                        <h4>Mario Götze</h4>
                        <p>Ofensywny pomocnik</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#23</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/81785-1502448323.jpg?lm=1502448406" class="img-circle" alt="Shinji Kagawa">
                        <h4>Shinji Kagawa</h4>
                        <p>Ofensywny pomocnik</p>
                    </div>

                    <div class="col-sm-3">
                        <h4>#11</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/35207-1502448515.jpg?lm=1502448575" class="img-circle" alt="Marco Reus">
                        <h4>Marco Reus</h4>
                        <p>Lewy napastnik</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#20</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/143891-1502448337.jpg?lm=1502448427" class="img-circle" alt="Maximilian Philipp">
                        <h4>Maximilian Philipp</h4>
                        <p>Lewy napastnik</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#21</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/58205-1502448696.jpg?lm=1502448756" class="img-circle" alt="André Schürrle">
                        <h4>André Schürrle</h4>
                        <p>Lewy napastnik</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#7</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/401173-1494404560.jpg?lm=1494404583" class="img-circle" alt="Jadon Sancho">
                        <h4>Jadon Sancho</h4>
                        <p>Lewy napastnik</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#34</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/366930-1522929850.jpg?lm=1522929871" class="img-circle" alt="Sergio Gómez">
                        <h4>Sergio Gómez</h4>
                        <p>Lewy napastnik</p>
                    </div>

                    <div class="col-sm-3">
                        <h4>#22</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/315779-1502448503.jpg?lm=1502448555" class="img-circle" alt="Christian Pulisic">
                        <h4>Christian Pulisic</h4>
                        <p>Prawy napastnik</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#9</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/69015-1503932828.jpg?lm=1503932848" class="img-circle" alt="Andriy Yarmolenko">
                        <h4>Andriy Yarmolenko</h4>
                        <p>Prawy napastnik</p>
                    </div>

                    <div class="col-sm-3">
                        <h4>#44</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/179184-1520928608.jpg?lm=1520928628" class="img-circle" alt="Michy Batshuayi">
                        <h4>Michy Batshuayi</h4>
                        <p>Środkowy napastnik</p>
                    </div>
                    <div class="col-sm-3">
                        <h4>#14</h4>
                        <img src="https://tmssl.akamaized.net//images/portrait/header/349066-1502448317.jpg?lm=1502448397" class="img-circle" alt="Alexander Isak">
                        <h4>Alexander Isak</h4>
                        <p>Środkowy napastnik</p>
                    </div>
                </div>
            </div>

       
<div id="Kontakt" class="container-fluid bg-grey">
               <footer class="container-fluid text-center">

                            <div class="contactRightPnl">
                            <div class="col-sm-3"> <br/>
                                <span class="Header"><span class="glyphicon glyphicon-envelope"></span></span> <br/>
                                <a href="mailto:bvbcontact@bvb.de">bvbcontact@bvb.de</a>
                            </div>
                            <div class="col-sm-3"><br/>
                                <span class="Header"> <span class="glyphicon glyphicon-phone"></span></span><br/>
                                +49 190 12190900
                            </div>
                            <div class="col-sm-3"><br/>
                                <span class="Header"><span class="glyphicon glyphicon-print"></span></span><br/>
                                +49 190 12190900
                            </div>
                            <div class="col-sm-3"><br/>
                                <span class="Header"><span class="glyphicon glyphicon-map-marker"></span></span><br/>
                                <p>Rheinlanddamm 207-209
                                    44137 Dortmund, Niemcy</p>
                                <br/>
                            </div>
                        </div>
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
			<p> Izabela Piatek 2018</p>
        </footer>
                    </div>
                    </form>
                    <?php
                }
                ?>
                </body>
                </html>


