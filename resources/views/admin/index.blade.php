@extends('layouts.admin')

@section('title', 'Dashboard | Proyecto de Grado Biologia 5 grado')

@section('content')
    <!-- BLOCK "TYPE 1" -->
    <div class="block type-1 scroll-to-block" data-id="inicio">
        <div class="clip">
            <div class="bg" style="background-image:url(img/content/Home-6/eeee.jpg);"></div>
            <div class="bg-span"></div>
        </div>
         @if(Session::has('creado'))
		    <div class="alert alert-danger">
			    <p><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> {{ Session::get('error') }}</p>
			</div>
		@endif
        <div class="container type-1-text wow fadeInUp" data-wow-delay="0.3s">
            <div class="row">
                <div class="col-md-8 col-md-offset-4 type-1-center">
                    <article class="big white table" style="text-align: left;">
                        <h1 class="h1">BIOVA</h1>
                        <p>Hola bienvenidos a BIOVA, un sitio web creado para ti y tus necesidades estudiantiles en el
                            area de la Ciencias Naturales (Biología) del grado quinto (5°) primaria, aca podrás
                            encontrar lo que necesitas sobre el tema de la Célula para hacer con facilidad y agrado tus
                            tareas.</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOCK "TYPE 1" -->

    <div class="new-block color-background scroll-to-block" data-id="sabias-que">
        <div class="container">
            <div class="row page-tagline">
                <div class="col-md-12">
                    <h2 class="title wow fadeInUp" data-wow-delay="0.3s">sabias que</h2>
                    <div class="description typography-article wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-sm-6">
                                <p style="text-align:justify">La Biología: Etimológicamente la palabra Biología proviene
                                    de dos vocablos griegos Bio-vida, y Logos-tratado. Es la ciencia que se ocupa de
                                    estudiar la vida, sus orígenes y su evolución. </p>
                                <p style="text-align:justify">A los que estudian la biología se les conoce
                                    profesionalmente como biólogos, aunque pueden ser llamados con los nombres de la
                                    rama específica en la que se enfocan, debido a que es una ciencia
                                    multidisciplinaria, que se nutre de otras ciencias y que a la vez provee a éstas
                                    información elemental. </p>
                                <p style="text-align:justify">la cual brinda a sus profesionales la posibilidad de
                                    especializarse en: </p>
                                <li style="text-align:left"> Botánica: Es el estudio de los miembros del reino
                                    plantea.
                                </li>
                                <br>
                                <li style="text-align:justify">Zoología: Estudio de los animales, miembros del reino
                                    Animalia.
                                </li>
                                <br>
                                <li style="text-align:justify">Anatomía: Estudio de la estructura interna y externa de
                                    los seres vivos.
                                </li>
                                <br>
                                <li style="text-align:justify">Citología: Se ocupa del estudio de las células.</li>
                            </div>
                            <div class="col-sm-6">
                                <h10>
                                    <li style="text-align:justify">Ecología: Estudia a los seres vivos y su interacción
                                        con el medio ambiente.
                                    </li>
                                    <br>
                                    <li style="text-align:justify">Microbiología: Estudia los microorganismos u
                                        organismos microscópicos.
                                    </li>
                                    <br>
                                    <li style="text-align:justify">Micología: Estudia los hongos.</li>
                                    <br>
                                    <li style="text-align:justify">Entomología: Estudio de los insectos. Es una subrama
                                        de la Zoología.
                                    </li>
                                    <br>
                                    <li style="text-align:justify">Etología: Estudia el comportamiento de los seres
                                        vivos.
                                    </li>
                                    <br>
                                    <li style="text-align:justify">Ornitología: Estudio de las aves.</li>
                                    <br>
                                    <li style="text-align:justify">Genética: Estudio de los genes y de la herencia
                                        genética.
                                    </li>
                                    <br>
                                </h10>
                                <br>
                                <p style="text-align:justify">Cada una de las ramas de la biología aporta elementos
                                    importantes para la comprensión de fenómenos y/o problemas específicos y son muchas
                                    veces inherentes entre sí, siendo apoyada por otras áreas como son la química y las
                                    matemáticas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new-block scroll-to-block" data-id="celula">
        <div class="container">
            <div class="row page-tagline">
                <div class="col-md-6 col-md-offset-3 wow flipInX" data-wow-delay="0.3s">
                    <h2 class="title">La célula</h2>
                    <div class="description">La célula es la unidad anatómica, funcional y reproductiva de todos los
                        seres vivos.
                    </div>
                    <div class="description">Es la unidad anatómica por que todos los seres vivos, simples o complejos
                        están formados por al menos una sola célula .
                    </div>
                    <div class="description">Es la unidad funcional debido a que todos los procesos que tienen lugar
                        para mantener la vida, se desarrollan en las células.
                    </div>
                    <div class="description">Es la unidad reproductiva por que las nuevas células se forman de otras ya
                        existentes.
                    </div>
                    <div class="description">Observa el siguinte video y prodras disfrutar del mundo de la Célula.
                        </br>
                    </div>
                    <div>
                        <a data-src="https://www.youtube.com/embed/6Xr0R4N9oCE" class="play inline-play-button"
                           data-toggle="tooltip"
                           title="Divertido Video Sobre la Célula, Fuente: Perez Andres.
                                01 El gran planeta celularyoutube com. Disponible en:
                                https://www.youtube.com/watch?v=6Xr0R4N9oCE" href="#"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="phone-icons-box">
                    <div class="col-sm-4 col-sm-push-4 wow flipInY" data-wow-delay="0.3s">
                        <div class="phone-icons-image">
                            <img src="img/content/Home-6/lacelula.jpg" alt="Partes de la Celula" title="Imágen de la Célula y sus partes principal">
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-pull-4">
                        <div class="phone-icons-description right-align">
                            <div class="entry wow fadeInRight" data-wow-delay="0.3s">
                                <div class="icon" data-toggle="tooltip"  title="Partes de la Célula"><img alt="Partes Célula" src="img/theme-1/iconocelu.png"></div>
                                <div class="content">
                                    <div class="title">La Célula</div>
                                    <div style="text-align:justify" class="description">Es la estructura viva más sencilla que se conoce, es decir que es capaz de realizar las tres funciones vitales, que son nutrirse, relacionarse y reproducirse, son portadoras de información genética.<br> Consta de tres partes que son la membrana plasmática, el citoplasma y el núcleo.<br>
                                        <br>
                                        <p>Sigue el enlace y encontraras temas relacionados <a target="_blank"
                                                                                               href="http://cmapspublic2.ihmc.us/rid=1L147T732-9FTCDX-1FYJ/LA%20C%C3%89LULA.cmap"
                                                                                               data-toggle="tooltip"
                                                                                               title="Mapa Conceptual, * todos los derechos reservados de http://cmap.ihmc.us/ ">La Célula* </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="entry wow fadeInRight" data-wow-delay="0.3s">
                                <div class="icon" data-toggle="tooltip"  title="El Núcleo"><img alt="Mini Núcleo" src="img/theme-1/nucleolo.png"></div>
                                <div class="content">
                                    <div class="title">El Núcleo</div>
                                    <div style="text-align:justify" class="description">Es el órgano más importante en
                                        casi todas las células animales y vegetales. Está rodeado por una membrana, es
                                        esférico y mide unas 5 micras de diámetro.<br> <br> Dentro del núcleo las
                                        moléculas de ADN y proteínas están organizadas en cromosomas que suelen aparecer
                                        dispuestos en pares idénticos.<br><br>
                                        Los cromosomas están muy retorcidos y enmarañados y es difícil identificarlos
                                        por separado.<br> Pero justo antes de que la célula se divida, se condensan
                                        y adquieren grosor suficiente para ser detectables como estructuras
                                        independientes.<br><br>
                                        <p>Sigue el enlace y encontraras temas relacionados <a target="_blank"
                                                                                               href="http://www.cerebriti.com/juegos-de-ciencias/el-nucleo"
                                                                                               data-toggle="tooltip"
                                                                                               title="Juego El Núcleo, * todos los derechos reservados de CEREBRITI TECHNOLOGIES S.L. ">JUEGA* </a>
                                        </p><br>
                                        <div  style="text-align: center;">
                                            <a data-src="https://www.youtube.com/embed/fpAwVEoonL8" class="play inline-play-button"
                                               data-toggle="tooltip"
                                               title="Video Sobre el núcleo, tomado del instituto arzobispo loayza, Fuente: Perez Andres.
                                               Disponible en: https://www.youtube.com/watch?v=fpAwVEoonL8" href="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry wow fadeInRight" data-wow-delay="0.5s">
                                <div class="icon" data-toggle="tooltip"  title="Organelos"><img alt="Icono Organelos" src="img/theme-1/organulos.png"></div>
                                <div class="content">
                                    <div class="title">organelos</div>
                                    <div style="text-align:justify" class="description">Son estructuras celulares
                                        especializadas. Las células procariontes tienen menos organelos que las
                                        eucariontas, mientras más aumenta su complejidad, contienen mayor cantidad de
                                        organelos. <br><br>
                                        Estos son los organelos que forman parte de la mayoría de las células: <br><br>

                                        Retículo endoplasmático, Ribosomas, Aparato de Golgi, Vacuolas, Lisosomas, Mitocondrias.<br><br>
                                        <p> Sigue los enlaces y encontraras temas relacionados:</p> <br>
                                        <a target="_blank" href="http://www.cerebriti.com/juegos-de-ciencias/la-celula2#.WR-99mjhDIU"
                                                           data-toggle="tooltip" title="Juego Divertido, * Juego Organelos 1, * todos los derechos reservados de CEREBRITI TECHNOLOGIES S.L.">
                                                ORGANELOS 1*</a>  </br>
                                        <a target="_blank"
                                           href="http://www.cerebriti.com/juegos-de-ciencias/organelos-y-funciones-destacadas#.WR---mjhDIU"
                                           data-toggle="tooltip"
                                           title="Juego Divertido, * Juego Organelos 2, * todos los derechos reservados de CEREBRITI TECHNOLOGIES S.L.">
                                            ORGANELOS 2*</a><br>
                                        <div style="text-align: center;">
                                            <a data-src="https://www.youtube.com/embed/PuhnlMdUiIE" class="play inline-play-button"
                                               data-toggle="tooltip"
                                               title="Divertido Video sobre los Organelos, Fuente: Perez Andres. Disponible en: https://www.youtube.com/watch?v=PuhnlMdUiIE" href="#"></a>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="phone-icons-description">
                            <div class="entry wow fadeInLeft" data-wow-delay="0.3s">
                                <div class="icon" data-toggle="tooltip"  title="Citoplasma "><img alt="Icono el Citoplasma" src="img/theme-1/citoplasma.png"></div>
                                <div class="content">
                                    <div class="title">El citoplasma</div>
                                    <div style="text-align:justify" class="description">Es un elementos básicos de la
                                        célula, se ubica entre la membrana plasmática y el núcleo, en las células eucariotas y
                                        procariotas que al no disponer de núcleo usan al citoplasma para
                                        ser el alojamiento de su material genético.<br><br>
                                        El citoplasma desarrolla todas las reacciones químicas de los seres vivientes y
                                        está conformado eminentemente por agua y también por sustancias minerales
                                        ionizadas y sustancias orgánicas como enzimas y proteínas, tiene tres funciones:<br>
                                        <br>
                                       <ul> <li>Nutrición, ya que en él se incorporan esas sustancias que serán luego
                                            transformadas para liberar energía
                                        </li>
                                        <br>
                                        <li>Almacenamiento, se ocupa de almacenar ciertas sustancias que a futuro se
                                            usarán y es importante que estén allí a la espera de su necesidad de usarlas
                                        </li>
                                        <br>
                                        <li>Estructural, dado que el citoplasma es aquella parte que le da la forma a la
                                            célula y que será el punto de partida de todos sus movimientos
                                        </li>
                                       </ul>
                                        <br>
                                        <p> Sigue el enlace y encontraras temas relacionados <a target="_blank"
                                                                                                href="http://www.cerebriti.com/juegos-de-ciencias/partes-del-citoplasma#.WCKtLPnhDIU"
                                                                                                data-toggle="tooltip"
                                                                                                title="Juego Citoplasma, * todos los derechos reservados de CEREBRITI TECHNOLOGIES S.L.">CITOPLASMA* </a>
                                        </p><br>
                                        <div style="text-align: center;">
                                            <a data-src="https://www.youtube.com/embed/g7ptxcp2hUk" class="play inline-play-button"
                                               data-toggle="tooltip"
                                               title="Presentación El Citoplasma, Fuente: Perez Andres. Disponible en: https://www.youtube.com/watch?v=g7ptxcp2hUk&t=6s" href="#"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry wow fadeInLeft" data-wow-delay="0.5s">
                                <div class="icon" data-toggle="tooltip"  title="La membrana célular"><img alt="Icono de la membrana célular" src="img/theme-1/menbrana.png"></div>
                                <div class="content">
                                    <div class="title">membrana célular</div>
                                    <div style="text-align:justify" class="description">Es una estructura que contiene
                                        los diferentes elementos que conforman la célula, esta membrana es bien conocida
                                        por su función delimitadora, sin embargo es una estructura compleja capaz de
                                        llevar a cabo múltiples funciones de gran importancia para la vida.<br><br>
                                        Los principales constituyentes de la membrana celular son los lípidos o
                                        moléculas de grasa, específicamente los fosfolípidos que se disponen formando
                                        dos capas, en la formación de la membrana también participa el colesterol. <br><br>Estas
                                        moléculas se mantienen adheridas entre sí, sin embargo tienen capacidad de
                                        movimiento lo cual le brinda fluidez y flexibilidad a la membrana.<br><br>
                                        <p> Sigue el enlace y encontraras temas relacionados <a target="_blank"
                                                                                                href="http://es.slideshare.net/Rosmakoch/membrana-celular-estructura-y-funcin"
                                                                                                data-toggle="tooltip"
                                                                                                title="Presentación Membrana Célular, * todos los derechos reservados de Rosmakoch, slideshare">
                                                MEMBRANA CÉLULAR*</a></p><br>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new-block scroll-to-block" style="background: #fbfbfb;" data-id="Partes_Celula">
        <div class="container">
            <div class="row left-right-entry">
                <div class="col-sm-6 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="image-entry"><img src="img/content/Home-6/partescelula.jpg"  data-toggle="tooltip"
                                                  title="Imágen Partes de la Célula 1" alt="Partes Célula Biova"></div>
                </div>
                <div class="col-sm-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="cell-view">
                        <div class="typography-article">
                            <h2 class="titel-left">Partes de la Célula</h2>
                            <p style="text-align:justify">Si piensas en las habitaciones de nuestros hogares, el
                                interior de cualquier célula animal o vegetal tiene muchas estructuras similares como la
                                de nuestras habitaciones llamados orgánulos. Tanto las células vegetales y animales
                                tienen muchos orgánulos en común.</p>
                            <ul class="list-style-2">
                                <p style="text-align:justify">El núcleo: es el órgano más importante en casi todas
                                        las células animales y vegetales. Está rodeado por una membrana, es esférico y
                                        mide unas 5 micras de diámetro. Dentro del núcleo las moléculas de ADN y
                                        proteínas están organizadas en cromosomas que suelen aparecer dispuestos en
                                        pares idénticos.
                                    </p>
                                    <div style="text-align: center;"><img alt="núcleo Biova" height="120" width="120" data-toggle="tooltip"
                                                                          title="Imágen del Núcleo"
                                                                          src="img/theme-1/nucleolo.png"></div>
                                <p>
                                <p style="text-align:justify"> El nucléolo: es una región especial en la que se
                                        sintetizan partículas que contienen ARN y proteína que migran al citoplasma a
                                        través de los poros nucleares y a continuación se modifican para transformarse
                                        en ribosomas, este controla la síntesis de proteínas en el citoplasma enviando
                                        mensajeros moleculares.<br> El ARN mensajero (ARNm) se sintetiza de acuerdo con las instrucciones contenidas
                                        en el ADN y abandona el núcleo a través de los poros.</p>
                                    </p>
                                    <div style="text-align: center;"><img alt="nucléolo Biova" height="140" width="200" data-toggle="tooltip"
                                                                          title="Imágen del Nucléolo"
                                                                          src="img/theme-1/nucléoloo.png"></div>
                                <p>
                                <p style="text-align:justify">Citoplasma y citosol: comprende todo el volumen de la
                                        célula, salvo el núcleo. Engloba numerosas estructuras especializadas y
                                        orgánulos, como se describirá más adelante.</p>
                                    <p><div style="text-align: center;"><img alt="citoplasma Biova" height="140" width="240" data-toggle="tooltip"
                                                                             title="Imágen del Citoplasma"
                                                                             src="img/theme-1/citoplasmaa.png"></div>
                                <p>
                                <P style="text-align:justify">Citosol: es un gel de base acuosa que contiene gran
                                        cantidad de moléculas grandes y pequeñas, en el citosol se producen muchas de
                                        las funciones más importantes del mantenimiento celular, como las primeras
                                        etapas de descomposición de moléculas nutritivas y la síntesis de muchas de las
                                        grandes moléculas que constituyen la célula.</p>
                                    <p><div style="text-align: center;"><img alt="citosol Biova" height="200" width="240" data-toggle="tooltip"
                                                                             title="Imágen del Citosol"
                                                                             src="img/theme-1/citosolll.png"></div>
                                <P style="text-align:justify">Membranas internas: Núcleos, mitocondrias y
                                        cloroplastos no son los únicos orgánulos internos de las células eucarióticas
                                        delimitados por membranas. El citoplasma contiene también muchos otros orgánulos
                                        envueltos por una membrana única que desempeñan funciones diversas. Casi todas
                                        guardan relación con la introducción de materias primas y la expulsión de
                                        sustancias elaboradas y productos de desecho por parte de la célula.</p>
                                <p><div style="text-align: center;"><img alt="Membranas Internas Biova" height="220" width="280" data-toggle="tooltip"
                                                                         title="Membranas Internas"
                                                                         src="img/theme-1/membranas-int.png"></div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new-block">
        <div class="container">
            <div class="row left-right-entry">
                <div class="col-sm-6 col-sm-push-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="image-entry"><img data-toggle="tooltip"
                                                  title="Imágen Partes Célula 2"
                                                  src="img/content/Home-6/partesce.jpg" height="1000" width="1200" alt="Partes Célula Biova" ></div>
                </div>
                <div class="col-sm-6 col-sm-pull-6 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="cell-view">
                        <div class="typography-article">
                            <h2 class="titel-left">Partes de la Célula</h2>
                            <ul class="list-style-2">
                               <p style="text-align:justify">Citoesqueleto: es una red de filamentos proteicos del
                                        citosol que ocupa el interior de todas las células animales y vegetales.
                                        Adquiere una relevancia especial en los animales, que carecen de pared celular
                                        rígida, pues el citoesqueleto mantiene la estructura y la forma de la célula.
                                        Actúa como bastidor para la organización de la célula y la fijación de orgánulos
                                        y enzimas. También es responsable de muchos de los movimientos celulares.<br><br>
                                        Se forma a partir de tres tipos principales de filamentos protéicos:
                                        microtúbulos, filamentos de actina y filamentos intermedios unidos entre sí a
                                        otras estructuras celulares por diversas proteínas.
                                </p>
                                <p><div style="text-align: center;"><img alt="Citoesqueleto Biova" height="280" width="340" data-toggle="tooltip"
                                                                         title="Imágen del Citoesqueleto"
                                                                         src="img/theme-1/citoesq.png"></div>
                                <p style="text-align:justify">Mitocondrias y cloroplastos: son uno de los orgánulos
                                        más sobresalientes del citoplasma y se encuentran en casi todas las células
                                        eucarióticas. Observadas al microscopio, presentan una estructura
                                        característica: la mitocondria tiene forma alargada u oval de varias micras de
                                        longitud y está envuelta por dos membranas distintas, una externa y otra
                                        interna, muy replegada.
                                </p>
                                <p style="text-align:justify">Las mitocondrias: son los orgánulos productores de
                                        energía. La célula necesita energía para crecer y multiplicarse, y las
                                        mitocondrias aportan casi toda esta energía realizando las últimas etapas de la
                                        descomposición de las moléculas de los alimentos. Estas etapas finales consisten
                                        en el consumo de oxígeno y la producción de dióxido de carbono, proceso llamado
                                        respiración, por su similitud con la respiración pulmonar. <br><br>
                                        Sin mitocondrias, los animales y hongos no serían capaces de utilizar oxígeno
                                        para extraer toda la energía de los alimentos y mantener con ella el crecimiento
                                        y la capacidad de reproducirse. Los organismos llamados anaerobios viven en
                                        medios sin oxígeno, por lo que carecen de mitocondrias.
                                </p>
                                <p><div style="text-align: center;"><img alt="Mitocondria Biova" height="280" width="360" data-toggle="tooltip"
                                                                         title="Imágen de la Mitocondria"
                                                                         src="img/theme-1/mitocondriasimag.png"></div>
                                <p style="text-align:justify">Cloroplastos: son orgánulos aún mayores y se
                                        encuentran en las células de plantas y algas, pero no en las de animales y
                                        hongos. Su estructura es aún más compleja que la mitocondrial: además de las dos
                                        membranas de la envoltura, tienen numerosos sacos internos formados por membrana
                                        que encierran el pigmento verde llamado clorofila.
                                </p>
                                <p><div style="text-align: center;"><img alt="Cloroplasto Biova" height="280" width="360" data-toggle="tooltip"
                                                                         title="Imágen de Cloroplastos"
                                                                         src="img/theme-1/cloroplastoo.png"></div><br>
                            </ul>
                            <p> Sigue el enlace y encontraras temas relacionados <a target="_blank"
                                                                                      href="http://www.cerebriti.com/juegos-de-ciencias/la-celula1#.WCVCFPnhDIU"
                                                                                      data-toggle="tooltip"
                                                                                      title="Juego sobre la Célula, * todos los derechos reservados de CEREBRITI TECHNOLOGIES S.L.">
                                    PARTES DE LA CÉLULA*</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new-block scroll-to-block" style="background: #fbfbfb;" data-id="Clasificación_celular" >
        <div class="container">
            <div class="row left-right-entry">
                <div class="col-sm-6  wow fadeInLeft" data-wow-delay="0.3s">
                  <div class="image-entry"><img src="img/content/Home-6/Partes-celula-procariota.jpg"  alt="Procariotas Biova" data-toggle="tooltip" title="Imágen Célula Procariota" ></div>
                </div>
                <div class="col-sm-6  wow fadeInRight" data-wow-delay="0.3s">
                    <div class="cell-view">
                        <div class="typography-article">
                            <h2 class="titel-left">Células Procariotas</h2>
                            <p style="text-align:justify">Las células procariotas son unas 10 veces más pequeñas y menos complejas que las
                                eucariotas, son organismos que contienen células que no tienen un núcleo celular ni organelas distintivas.
                                Esto significa que el material genético en las células procariotas no está ligado al núcleo.<br><br>
                                Su estructura es muy sencilla, por ello poseen el material genético en el citosol, otro rasgo distintivo de los organismos procariotas es que la mayoría tienen una sola célula (o sea, son organismos unicelulares).<br><br> Las células procariotas se clasifican en
                                arqueas y bacterias</p>


                            <ul class="list-style-2">
                                <li><p style="text-align:justify">Arqueobacterias: Las arqueobacterias necesitan otras
                                        sustancias para poder conformar sus paredes celulares.</li></p>
                                <li><p style="text-align:justify">Eubacterias: Son aquellas que poseen una pared celular
                                        conformada por peptidoglicano o por una mureína.</li></p>
                            </ul>
                            <div style="text-align: center;">
                                <a data-src="https://www.youtube.com/embed/OWjuYpUKqGs" class="play inline-play-button"
                                   data-toggle="tooltip"
                                   title="Video Células Procariotas, aprendiendo del mundo de la Célula. Fuente: Perez Andres. Disponible en: https://www.youtube.com/watch?v=OWjuYpUKqGs" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new-block">
        <div class="container">
            <div class="row left-right-entry">
                <div class="col-sm-6 col-sm-push-6 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="image-entry"><img src="img/content/Home-6/celulaanimall.jpg" alt="Célula Animal Biova" data-toggle="tooltip" title="Imágen Célula Eucariota animal"></div>
                    <div class="image-entry"><img src="img/content/Home-6/celulaaveget.jpg" alt="Célula Vegetal Biova" data-toggle="tooltip" title="Imágen Célula Eucariota vegetal"></div>
                </div>
                <div class="col-sm-6 col-sm-pull-6 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="cell-view">
                        <div class="typography-article">
                            <h2 class="titel-left">Células Eucariota</h2>
                            <p style="text-align:justify">Las células eucariotas: son aquellas células que tienen un núcleo organizado con una envoltura celular (membrana)
                                que lo aísla del resto de la célula. Presentan una estructura básica, relativamente estable caracterizada por
                                la presencia de distintos tipos de orgánelos intracitoplasmáticos especializados, entre
                                los cuales se destaca el núcleo, que alberga el material genético. Especialmente en los
                                organismos pluricelulares <strong>(hombre, animales)</strong>, las células pueden alcanzar un alto grado de especialización
                                al comenzar la mitosis se pueden distinguir en el núcleo unos corpulosos
                                caracteristicos, o también llamados los cromosomas, los cuales portan factores
                                hereditarios o tambien se pueden llamar genes.</p>
                            <p> Las celulas Eucariotas se encuentran presentes en:</p>
                            <ul class="list-style-2">
                                <li><p style="text-align:justify">Célula Animal: todos los animales son organismos pluricelulares, se caracterizan por ser un poco mas
                                        pequeñas que las células vegetales, por no poseer pared célular,
                                        cloroplastos y el tamaño de sus vacuolas es pequeño, es de esta manera que estas células tienen la capacidad de presentarse en diferentes formas
                                        precisamente por no tener una pared celular rígida . <br><br>
                                        Ejemplos de células eucariotas en los miembros del reino Animalia son las neuronas del sistema nervioso,
                                        los leucocitos del sistema inmunitario y los óvulos y espermatozoides del sistema reproductor. <br><br>
                                        las partes que conforman esta célula son: Membrana Celular, Núcleo, Citoplasma, Orgánulos.
                                    <div style="text-align: center;">
                                        <a data-src="https://www.youtube.com/embed/8dWK2BAnzc8" class="play inline-play-button"
                                           data-toggle="tooltip"
                                           title="Video Células Animal, aprendiendo del mundo de la Célula. Fuente: Perez Andres. Disponible en: https://www.youtube.com/watch?v=8dWK2BAnzc8" href="#"></a>
                                    </div>
                                </li></p>
                                <li><p style="text-align:justify">Célula Vegetal: estas células si tienen una pared célular rigida, son capaces de generar su propio alimento y al
                                        contrario de la célula animal ésta si tiene cloroplastos que son los mediadores en el proceso de fotosíntesis, <br><br>
                                las partes que conforman esta célula son:  Pared Celular, Membrana Celular, Núcleo, Citoplasma, Orgánulos.</li></p>
                            </ul>
                            <p style="text-align:justify">Diferencias entre la célula animal y la célula vegetal:<p>
                            <p><div style="text-align: center;"><img alt="Cloroplasto Biova" height="320" width="390" data-toggle="tooltip"
                                                                     title="Imágen diferencias entre célula animal - vegetal"
                                                                     src="img/content/Home-6/diferencias.jpg"></div><br>
                                <p style="text-align:justify"> A continuación podrás disfrutar de un Video en donde encontraras una explicación sobre el mundo de las células Eucariotas y Procariotas:<p>
                            <div style="text-align: center;">
                                <a data-src="https://www.youtube.com/embed/wKSC_0TxL70" class="play inline-play-button"
                                   data-toggle="tooltip"
                                   title="Video Células Procariotas y Eucariotas, aprendiendo del mundo de la Célula. Fuente: Perez Andres. Disponible en: https://www.youtube.com/watch?v=wKSC_0TxL70&t=62s" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new-block scroll-to-block" style="background: #fbfbfb;" data-id="divi_celular" >
        <div class="container">
            <div class="row left-right-entry">
                <div class="col-sm-6  wow fadeInLeft" data-wow-delay="0.3s">
                   <div class="image-entry"><img src="img/content/Home-6/fases-mitosis-division-celular.jpg"   alt="Divisíon Célular Biova" data-toggle="tooltip" title="Imágen Divisíon Célular"></div>
                    <div class="image-entry"><img src="img/theme-1/meiosis1.png" alt="Meiosis1 Biova" data-toggle="tooltip" title="Imágen Division celular meiosis 1"></div>
                    <div class="image-entry"><img src="img/theme-1/meiosis2.png" alt="Meiosis2 Biova" data-toggle="tooltip" title="Imágen Division celular meiosis 2"></div>
                </div>
                <div class="col-sm-6  wow fadeInRight" data-wow-delay="0.3s">
                    <div class="cell-view">
                        <div class="typography-article">
                            <h2 class="titel-left">Divisíon Célular</h2>
                            <p style="text-align:justify">Es una parte muy importante del ciclo celular en la que una célula inicial (llamada madre) se divide para formar células hijas.
                                Gracias a la división celular se produce el crecimiento de los seres vivos, En los organismos pluricelulares este crecimiento
                                se produce gracias al desarrollo de los tejidos y en los seres unicelulares mediante la reproducción vegetativa.
                                En algunos animales la división celular se detiene en algún momento y las células acaban envejeciendo.
                                Las células senescentes se deterioran y mueren debido al envejecimiento del cuerpo, las células dejan de dividirse
                                porque los telómeros se vuelven cada vez más cortos en cada división y no pueden proteger a los cromosomas como tal.<br><br>
                            <div style="text-align: center;">
                                <a data-src="https://www.youtube.com/embed/Z1Rx3IHuIqI" class="play inline-play-button"
                                   data-toggle="tooltip"
                                   title="Video Divisíon Célular, aprendiendo del mundo de la Célula. Fuente: Perez Andres. Disponible en: https://www.youtube.com/watch?v=Z1Rx3IHuIqI" href="#"></a>
                            </div><br><br>
                            <p>La división celular transcurre en tres procesos:</p>
                            </br>
                            <ul class="list-style-2" >
                                <li><p style="text-align:justify">Interfase: es la etapa previa a la mitosis donde la célula se prepara para dividirse,
                                        en esta, los centríolos y la cromatina se duplican, aparecen los cromosomas los cuales se observan dobles.</p></li><br>
                                <li><p style="text-align:justify">Mitosis: es la forma común de la división celular en las células eucariotas.
                                        Una célula que ha adquirido determinados parámetros o condiciones de tamaño, volumen, almacenamiento de energía,
                                        factores medioambientales, puede replicar totalmente su dotación de ADN y dividirse en dos células hijas,
                                        normalmente iguales. Ambas células serán diploides (son las células que tienen un número doble de cromosomas)
                                        o haploides (contiene un solo juego de cromosomas), dependiendo de la célula madre.<li><br>
                                <div style="text-align: center;">
                                    <a data-src="https://www.youtube.com/embed/3zuPD1QB70Q" class="play inline-play-button"
                                       data-toggle="tooltip"
                                       title="Video Mitosis Célular, aprendiendo del mundo de la Célula. Fuente: Perez Andres. https://www.youtube.com/watch?v=3zuPD1QB70Q&t=50s" href="#"></a>
                                </div><br>

                                <li><p style="text-align:justify">Meiosis: es la división de una célula diploide en cuatro células haploides,
                                        esta división celular se produce en organismos multicelulares para producir gametos haploides,
                                        que pueden fusionarse después para formar una célula diploide llamada cigoto en la fecundación.
                                        Los seres pluricelulares reemplazan su dotación celular gracias a la división celular y suele estar
                                        asociada a la diferenciación celular. En algunos animales, la división celular se detiene en algún momento
                                        y las células acaban envejeciendo. Las células senescentes se deterioran y mueren, debido al envejecimiento del cuerpo. </li></p>
                            </ul >
                                <div style="text-align: center;">
                                <a data-src="https://www.youtube.com/embed/PikH-zodBh4" class="play inline-play-button"
                                   data-toggle="tooltip"
                                   title="Video Meiosis, aprendiendo del mundo de la Célula. Fuente: Perez Andres. Disponible en: https://www.youtube.com/watch?v=PikH-zodBh4" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new-block color-background scroll-to-block" data-id="gallery">
        <div class="container">
            <div class="row page-tagline">
                <div class="col-md-6 col-md-offset-3 wow flipInX" data-wow-delay="0.3s">
                    <h2 class="title">imágenes de ayuda</h2>
                    <div class="description"><p style="font-size: 20px"> Disfruta de las siguientes imágenes referentes
                            al mundo de la célula las cuales te serán de mucha ayuda.</p></div>
                            <a class="btn btn-primary" href="/IMAGENESBIOVA.rar" data-toggle="tooltip" title="Descarga Imagenes Biova"><span>Descarga</span></a>
                </div>
            </div>
            <div class="screens-custom-slider-box wow fadeInUp" data-wow-delay="0.3s">
                <div class="swiper-container horizontal-pagination" data-autoplay="0" data-loop="0" data-speed="500"
                     data-center="1" data-slides-per-view="3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/CeluAnimal.jpg"
                                                                    title="Imágen colorida Célula Animal" alt="Célula Animal">
                                <div class="text"><p>Disfruta de esta imágen de la Célula Animal</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/CeluVE.jpg"
                                                                    title="Imágen colorida Célula Vegetal" alt="Célula Vegetal">
                                <div class="text"><p>Disfruta de esta imágen de la Célula Vegetal</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/celuu.jpg"
                                                                    title="Imágen colorida de la Célula" alt="Célula 3D">
                                <div class="text"><p>Disfruta de esta imágen de la Célula</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/micros.jpg"
                                                                    title="Imágen niño con instrumentos para experimentar "
                                                                    alt="Instrumentos">
                                <div class="text"><p>Disfruta imágen de niño experimentando</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/LAcÉLULAA.jpg"
                                                                    title="Imágen La Célula con sus Principales partes"
                                                                    alt="La Célula">
                                <div class="text"><p>Disfruta de esta imágen Partes Principales de la Célula</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/partescelula.jpg"
                                                                    title="Imágen La Célula sus partes"
                                                                    alt="Partes de la Célula">
                                <div class="text"><p>Disfruta de esta imágen Partes de la Célula</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/partesce.jpg"
                                                                    title="Imágen nueva partes de la Célula"
                                                                    alt="Partes de la Célula Biova">
                                <div class="text"><p>Disfruta de esta imágen Partes de la Célula 2</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/membranas.jpg"
                                                                    title="Imágen membrana de la Célula"
                                                                    alt="Membrana Célula Biova">
                                <div class="text"><p>Disfruta de esta imágen Membrana Célular</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/cloroplastooo.jpg"
                                                                    title="Imágen cloroplasto Célula"
                                                                    alt="Cloroplasto Célula Biova">
                                <div class="text"><p>Disfruta de esta imágen de Cloroplastos Célula</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/citoesq.jpg"
                                                                    title="Imágen Citoesqueleto Célula"
                                                                    alt="Citoesqueleto Célula Biova">
                                <div class="text"><p>Disfruta del Citoesqueleto Célula</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/mitocondriasimag.jpg"
                                                                    title="Imágen Mitocondrias Célula"
                                                                    alt="Mitocondrias Célula Biova">
                                <div class="text"><p>Disfruta de esta imágen Mitocondria Célula</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/célula procariota.png"
                                                                    title="Imágen Célula procariota"
                                                                    alt="Procariota Célula Biova">
                                <div class="text"><p>Disfruta de esta imágen célula Procariota</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/celulaaveget.jpg"
                                                                    title="Imágen Célula eucariota animal"
                                                                    alt="Eucariota Vegetal Célula Biova">
                                <div class="text"><p>Disfruta de esta imágen célula Eucariota Vegetal</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/celulaanimall.jpg"
                                                                    title="Imágen Célula eucariota animal"
                                                                    alt="Eucariota Animal Célula Biova">
                                <div class="text"><p>Disfruta de esta imágen célula Eucariota Animal</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/biova eucariotas.jpg"
                                                                    title="Imágen Células Eucariotas"
                                                                    alt="Eucariotas Célula Biova">
                                <div class="text"><p>Disfruta de esta imágen células Eucariotas</p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/diferencias.jpg" height="520" width="390"
                                                                    title="Imágen diferencias entre células"
                                                                    alt="Diferencias Célula Biova">
                                <div class="text"><p>Disfruta de esta imágen diferencias de las células </p></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="custom-screen-wrapper"><img src="img/content/Home-6/fases-mitosis-division-celular.jpg" height="520" width="390"
                                                                    title="Imágen Fases de la mitosis"
                                                                    alt="Fases Mitosis Célula Biova">
                                <div class="text"><p>Disfruta de esta imágen Fases de la Mitosis </p></div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination"></div>
                </div>
            </div>
        </div>
        <style>
            p.padding {
                padding-bottom: 2cm;
            }
        </style>
    </div>


    <!-- FOOTER -->
    @include('partials.admin.footer')

    <!-- POPUP "VIDEO" -->
    <div class="video-popup">
        <span></span>
        <span></span>
        <iframe src="#"></iframe>
        <a href="#"></a>
    </div>
@endsection
<div class="theme-config">
    <div class="title">Select Color:</div>
    <div class="colours-wrapper">
        <div data-theme="theme-1" style="color: #fbc011;" class="entry active"></div>
        <div data-theme="theme-2" style="color: #00bbd2;" class="entry"></div>
        <div data-theme="theme-3" style="color: #4caf50;" class="entry"></div>
        <div data-theme="theme-4" style="color: #ba68c8;" class="entry"></div>
        <div data-theme="theme-5" style="color: #d80d0d;" class="entry"></div>
        <div data-theme="theme-6" style="color: #0045ad;" class="entry"></div>
        <div data-theme="theme-7" style="color: #dd137b;" class="entry"></div>
        <div data-theme="theme-8" style="color: #482d1d;" class="entry"></div>
    </div>
    <div class="open"><img src="img/gear-icon.png" alt="Icono Biova"><img src="img/gear-icon.png" alt="Icono Biova"><img src="img/gear-icon.png" alt="Icono Biova"></div>
</div>

