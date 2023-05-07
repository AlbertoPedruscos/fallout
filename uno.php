<?php
$nm=$_POST['nombre'];
$cn=$_POST['contra'];
if ($nm="arlequin"){
    $nm="alberto";
}
if ($cn="2023"){
    $cn="1234";
}
if ($nm!="alberto" && $cn!='1234'){
    header("location: index.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fallout</title>
    <script src="kia.js"></script>
    <link rel="shortcut icon" href="icono.webp" type="image/x-icon">
    <link rel="stylesheet" href="estilos9.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <audio autoplay loop id="au">
        <source src="fall.mp3" type="audio/mpeg">
        <source src="in.mp3" type="audio/mpeg">
    </audio>
    <audio id="audio" src="boton.mp3"></audio>
    <div class="div1" id="div1">
        <button class="bu" onclick="hola()"><img src="boton.png"></button>
    </div>
    <div class="w11" id="w11">
        <div class="navbar" id="navbar">
            <button class="but" onclick="jue()">Juegos</button>
            <button class="but" onclick="per()">Protagonistas</button>
            <button class="but" onclick="an()">Antagonistas</button>
            <button class="but" onclick="pri()">Facciones principales</button>
        </div>
        <div id="img1">
            <img src="foondoP.jpg" class="img1">
        </div>
        <div id=jue class="jue">
            <h1 class="titu">Fallout 3</h1>
            <h2 class="st">Años: 2277 en adelante</h2>
            <button onclick="bo1()" class="bu2"><h2 class="st">Historia:</h2></button>
            <div id="bo1">
                <h4 class="tex">El protagonista es un habitante del refugio 101 emprende una misión para encontrar a su padre, quien ha desaparecido misteriosamente. Durante la búsqueda, el protagonista explora las ruinas de la ciudad de Washington DC y se enfrenta a una serie de peligros, incluyendo radiación, saqueadores, mutantes y otros peligros del yermo.
                El protagonista descubre que su padre estaba trabajando en un proyecto llamado "Proyecto Pureza", que tenía como objetivo purificar el agua del río Potomac para que todos los habitantes del yermo tuvieran agua potable gratis, pero había sido abandonado debido a el nacimiento del protagonista.
                El protagonista continúa la búsqueda de su padre y finalmente lo encuentra. Juntos, trabajan para completar el proyecto Pureza. Sin embargo, el Enclave intenta detenerlos y se produce una gran batalla en la que el protagonista y su padre sacrifican sus vidas para activar el proyecto y purificar el agua. La hermandad del acero ve que eso es una buena causa y ayuda a hacer el proyecto pureza deteniendo y detruyendo el enclave de yermo capital</h4>
            </div>
            <br>
            <h1 class="titu">Fallout New Vegas</h1>
            <h2 class="st">Años: 2281 en adelante</h2>
            <button onclick="bo2()" class="bu2"><h2 class="st">Historia:</h2></button>
            <div id="bo2" class="bo1">
                <h4 class="tex">El mensajero 9​ perteneciente a la empresa Mojave Express tiene de misión transportar un paquete al enigmático Sr. House, líder de New Vegas. Durante su viaje, es asaltado por un grupo de mercenarios liderados por un misterioso personaje, el cual, le roba el contenido del paquete: un chip de platino con forma de ficha de póker. Tiroteado mortalmente y enterrado el mensajero es rescatado milagrosamente por un robot llamado Víctor, que lo traslada hasta la casa del Dr. Mitchell, en Goodsprings, donde este logra curarle sus graves heridas. Una vez recuperado, el mismo doctor le entrega su viejo Pip-Boy 3000 y un antiguo mono de trabajo del refugio 21 para que pueda iniciar la persecución de los que casi acabaron con su vida.
                A lo largo de la aventura, el jugador, descubrirá que Robert House, magnate de antes de la guerra, logró proteger a Las Vegas de 77 cabezas nucleares durante la "Gran Guerra", y por ello considera a Nueva Vegas como "su" ciudad, dirigiendo su imperio desde el misterioso casino Lucky 38, donde ningún humano ha entrado desde 2077. El Mensajero también descubriría las tensiones entre diversas facciones del Yermo, incluyendo a la República de Nueva California y la Legión del César por el control de la presa y de la region. El mensajero pasa de tener de objetivo una venganza hacia el tipo que intento matarlo y recuperar la ficha a contribuir al futuro de la region con sus decisiones y alianzas</h4>
            </div>
        </div>
        <div class="f3" id="f3">
            <button onclick="bo3()" class="bo5"><h1 class="titu">El trotamundos solitario:</h1></button>
            <div id="bo3">
                <h4 class="tex">Nació el 13 de julio de 2258 en el Monumento a Jefferson. Su madre murió al dar a luz de un paro cardiorrespiratorio de causa desconocida. James suspendió el proyecto Pureza y viajó al Refugio 101 vía Megatón.Vivió en el Refugio 101 durante diecinueve.Pero desapareció del Refugio 101 siguiendo a su padre, que había huido unas horas antes. Con la ayuda de Amata, burla la seguridad del Refugio para buscar a su padre en las ruinas de Washington, DC. Con el fin de encontrarlo viaja a través del yermo en búsqueda de pistas. Durante su recorrido, desarmó la bomba atómica en Megatón y ayudó a recolectar información para la Guía de supervivencia del Yermo de Moira Brown, además de otras actividades o rumores de las mismas.
                Después de encontrar a su padre, el Proyecto Pureza se reinicia. Sin embargo, la reunión es interrumpida cuando llega el Enclave. Su padre no estaba dispuesto a permitir esto y, por el bien de la humanidad, se sacrificó llenando la cámara de control con una intensa radiación, con la esperanza de matar al Coronel Autumn y a los otros soldados en el proceso, sin embargo, el coronel logra sobrevivir inyectándose RadAway. Con su último aliento, le dice a su hijo/hija que corra y escape.
                Luego de escapar del Monumento a Jefferson, el/la Trotamundos toma refugio en La Ciudadela y se enlista en la ayuda de la Hermandad del Acero para extraer el G.E.C.K. del Refugio 87 para restaurar el Proyecto Pureza. Después de extraer el G.E.C.K., el/la Trotamundos es capturado(a) por el Enclave y llevado a Raven Rock. Ahí, John Henry Eden le enseña Trotamundos un frasco del VEF modificado para insertarlo en el Proyecto Pureza, el cual envenena a cualquier criatura mutada que beba del agua purificada. El/la Trotamundos se rehúsa y escapa, saboteando Raven Rock en el proceso. Luego de finalmente detener al Enclave Trotamundos y la Centinela Lyons se encuentran con el dilema de quien va a re-entrar al Monumento inundado de radiación y activar el purificador. Una vez que la decisión es hecha, el Trotamundos ha dado el mayor regalo de todos: una constante fuente de agua limpia.</h4>
            </div>
            <br>
            <button onclick="bo4()" class="bo5"><h1 class="titu">El mensajero:</h1></button>
            <div id="bo4" class="bo1">
                <h4 class="tex">En el año 2281, el Mensajero aceptó llevar un paquete (que contenía el Chip de Platino) a través del Yermo de Mojave, desde Primm hasta la Puerta norte del Strip de New Vegas. Fue emboscado cerca de Goodsprings por Benny y un grupo de Grandes Khans, que lo despojaron del chip. Benny le disparó un único tiro a la cabeza, tras lo cual fue dado por muerto y enterrado (vivo) en una tumba poco profunda. Poco después, es desenterrado por Victor, un securitron amistoso, que lo lleva junto al Doctor Mitchell, médico de Goodsprings. Una vez el Mensajero se recupera, Mitchell le da un mono del Refugio 21 y un Pip-Boy 3000. Será ahora tarea del Mensajero averiguar quién trato de matarlo y cuál es la verdadera naturaleza del paquete que debía entregar en Primm</h4>
            </div>
        </div>
        <div class="an" id="an">
            <button class="bo6" onclick="gp()"><h1 class="titu">Fallout 3:</h1></button>
            <div id="ls">
                <h2 class="st">John Henry Eden</h2>
                <h2 class="st">Coronel Autumm</h2>
                <h2 class="st">Sr Burk</h2>
                <h2 class="st">Allistar Tempeny</h2>
                <h2 class="st">Doctor Lesko</h2>
                <h2 class="st">Doctor Braun</h2>
                <h2 class="st">Los Negreros</h2>
                <h2 class="st">Los Supermutantes</h2>
                <h2 class="st">Saqueadores</h2>
                <h2 class="st">Mercenarios de la compañia talon</h2>
                <h2 class="st">El Enclave</h2>
                <h2 class="st">Los animales mutantes</h2>
                <h2 class="st">Roy Philips y sus secuaces</h2>
            </div>
            <br>
            <button class="bo6" onclick="gp2()"><h1 class="titu">Fallout New Vegas:</h1></button>
            <div id="lp" class="bo1">
                <h2 class="st">Cesar</h2>
                <h2 class="st">La Legion de cesar</h2>
                <h2 class="st">Legado Lanius</h2>
                <h2 class="st">Sr House</h2>
                <h2 class="st">Benny</h2>
                <h2 class="st">Los Chairmen</h2>
                <h2 class="st">Los bandidos de la polvora</h2>
                <h2 class="st">Los asaltantes de New Vegas</h2>
            </div>
        </div>
        <div id="pri" class="pri">
            <button onclick="fu1()" class="bo6"><h1 class="titu">El Enclave:</h1></button>
            <div id="fus1">
                <h4 class="tex">Es una facción militar y científica secreta formada por los descendientes de los altos mandos del gobierno pre-apocalíptico de los Estados Unidos. Su objetivo principal es restaurar el gobierno de los Estados Unidos y exterminar a todos los mutantes y personas que hayan sido expuestas a la radiacion, considerándolos una amenaza para la humanidad.
                El Enclave ha sido conocido por cometer una serie de crímenes, incluyendo experimentación en humanos y manipulación genética, el uso de armas de destrucción masiva y la violación de los derechos humanos básicos. Intentan lanzar una plaga mortal para matar a todos los mutantes y intentaron tambien lanzar una purificación de agua que mataría a todos los mutantes y "impuros" en la región.</h4>
            </div>
            <br>
            <button onclick="fu2()" class="bo6"><h1 class="titu">La hermandad del acero:</h1></button>
            <div class="bo1" id="fus2">
                <h4 class="tex">Se dedica a recolectar y proteger tecnología avanzada de la era pre-apocalíptica, que consideran peligrosa en manos equivocadas. También buscan exterminar a las criaturas mutantes que habitan en el yermo, considerándolas una amenaza para la humanidad. En la costa este por la zona de Yermo Capital (Washintong DC) la Hermandad del Acero se alejó de su objetivo principal de recolectar y proteger tecnología avanzada y adoptó una postura más altruista, centrada en ayudar a los habitantes del yermo y combatir el mal en todas sus formas.</h4>
            </div>
            <br>
            <button onclick="fu3()" class="bo6"><h1 class="titu">La Legion de Cesar:</h1></button>
            <div class="bo1" id="fus3">
                <h4 class="tex">Se caracteriza por su organización jerárquica, en la que los miembros son clasificados según su mérito y habilidad, y por su sistema esclavista, en el que los prisioneros son sometidos a trabajos forzados y la violencia es una herramienta común para mantener el orden. También son conocidos por su desprecio hacia la tecnología avanzada y su énfasis en el combate cuerpo a cuerpo.
                Aunque la Legión de César tiene un código de honor y disciplina, su tratamiento brutal de los esclavos, su intolerancia hacia otras culturas y su falta de consideración por los derechos humanos básicos los hace ampliamente repudiados por otros personajes y facciones del juego.</h4>
            </div>
            <br>
            <button onclick="fu4()" class="bo6"><h1 class="titu">La republica de nueva California:</h1></button>
            <div class="bo1" id="fus4">
                <h4 class="tex">Se estableció en la región de California con el objetivo de restaurar la ley y el orden en el yermo post-apocalíptico, y se basa en valores democráticos y una economía de mercado. La facción es conocida por su tecnología avanzada, su fuerte presencia militar y su énfasis en la educación y la ciencia.</h4>
            </div>
            <br>
            <button onclick="fu5()" class="bo6"><h1 class="titu">El Sr House y las familias de New Vegas:</h1></button>
            <div class="bo1" id="fus5">
                <h4 class="tex">El Señor House es el fundador y líder de la ciudad de New Vegas, y es considerado un genio en la tecnología y la ciencia. Las familias vienen de antiguas tribus y contralan la mayoria de negocios de la ciudad</h4>
            </div>
            <br>
            <button onclick="fu6()" class="bo6"><h1 class="titu">Los Grandes Khan:</h1></button>
            <div class="bo1" id="fus6">
                <h4 class="tex">Los Grandes Khan son liderados por Papa Khan, quien está tratando de reunir a todas las tribus de la región en una alianza contra la Republica de Nueva California. Su objetivo es acabar con la Republica a toda costa.</h4>
            </div>
            <br>
            <button onclick="fu7()" class="bo6"><h1 class="titu">Los seguidores del apocalipsis:</h1></button>
            <div class="bo1" id="fus7">
                <h4 class="tex">Operan como una organización descentralizada, trabajando en conjunto para proporcionar atención médica y servicios sociales a las personas en el Yermo. También buscan investigar y preservar la tecnología y el conocimiento perdido de la antigua civilización, y compartirlo con aquellos que lo necesitan.</h4>
            </div>
            <br>
            <button onclick="fu8()" class="bo6"><h1 class="titu">Los supermutantes:</h1></button>
            <div class="bo1" id="fus8">
                <h4 class="tex">Son personas que han sido modificadas por el "Virus de Evolucion Forzada" y buscan transformar a los humanos en supermutantes. La gran mayoria de ellos han perdido gran parte de us inteligencia por el VEF a escepcion de unos pocos que han mantenido su inteligencia o la han mejorado</p>
            </div>
        </div>
    </div>
</body>
</html>