-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2017 a las 18:38:32
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `ISBN` varchar(20) NOT NULL,
  `ID_PEDIDOS` int(10) NOT NULL,
  `CANTIDAD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_pedidos`
--

INSERT INTO `detalle_pedidos` (`ISBN`, `ID_PEDIDOS`, `CANTIDAD`) VALUES
('978-84-08-14147-1', 1, 1),
('978-84-08-14147-1', 3, 1),
('978-84-08-16317-6', 4, 2),
('978-84-08-16318-3', 6, 1),
('978-84-08-16345-9', 5, 1),
('9788490622858', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `ID_GEN` varchar(15) NOT NULL,
  `NOM_GEN` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`ID_GEN`, `NOM_GEN`) VALUES
('ERO', 'NOVELA EROTICA'),
('FICC', 'CIENCIA FICCION'),
('HIS', 'NOVELA HISTORICA'),
('INF', 'LITERATURA INFANTIL'),
('JUV', 'JUVENIL'),
('POL', 'POLICIACO Y MISTERIOS'),
('ROM', 'NOVELA ROMANTICA'),
('TERR', 'NOVELA DE TERROR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `ISBN` varchar(20) NOT NULL,
  `TITULO` varchar(55) DEFAULT NULL,
  `SINOPSIS` varchar(3000) DEFAULT NULL,
  `AUTOR` varchar(50) DEFAULT NULL,
  `EDITORIAL` varchar(55) DEFAULT NULL,
  `PRECIO` decimal(4,2) DEFAULT NULL,
  `FECHA_LANZA` date DEFAULT NULL,
  `IMG` varchar(35) CHARACTER SET utf32 NOT NULL,
  `ID_GEN` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`ISBN`, `TITULO`, `SINOPSIS`, `AUTOR`, `EDITORIAL`, `PRECIO`, `FECHA_LANZA`, `IMG`, `ID_GEN`) VALUES
('978-84-08-07280-5', 'EL PRINCIPE DE LA NIEBLA', 'El nuevo hogar de los Carver, que se han mudado a la costa huyendo de la ciudad y de la guerra, está rodeado de misterio.Todavía se respira el espíritu de Jacob, el hijo de los antiguos propietarios, que murió ahogado. Las extrañas circunstancias de esa muerte sólo se empiezan a aclarar con la aparición de un diabólico personaje: el Príncipe de la Niebla, capaz de conceder cualquier deseo a una persona; eso sí, a un alto precio.', 'RUIZ ZAFON, CARLOS', 'BOOKET', '21.99', '2007-05-16', 'img/1.jpg', 'FICC'),
('978-84-08-14147-1', 'LA CHICA DEL TREN', '¿Estabas en el tren de las 8.04? ¿Viste algo sospechoso?Rachel, síRachel toma siempre el tren de las 8.04 h. Cada mañana lo mismo: el mismo paisaje, las mismas casas? y la misma parada en la señal roja. Son solo unos segundos, pero le permiten observar a una pareja desayunando tranquilamente en su terraza. Siente que los conoce y se inventa unos nombres para ellos: Jess y Jason. Su vida es perfecta, no como la suya. Pero un día ve algo. Sucede muy deprisa, pero es suficiente. ¿Y si Jess y Jason no son tan felices como ella cree? ¿Y si nada es lo que parece?Tú no la conoces. Ella a ti, sí.«Un impresionante debut en el mundo del thriller.» The Guardian«Agárrate fuerte... Nunca sabes los horrores que acechan en la siguiente curva» USA Today«Nada como un posible asesinato para romper la monotonía de tu viaje diario en metro» Cosmopolitan', 'HAWKINS,PAULA', 'PLANETA', '20.99', '2015-06-02', 'img/2.jpg', 'FICC'),
('978-84-08-15416-7', 'EL SILENCIO DE LA CIUDAD BLANCA', 'Tasio Ortiz de Zárate, el brillante arqueólogo condenado por los extraños asesinatos que aterrorizaron la tranquila ciudad de Vitoria hace dos décadas, está a punto de salir de prisión en su primer permiso cuando los crímenes se reanudan de nuevo: en la emblemática Catedral Vieja de Vitoria, una pareja de veinte años aparece desnuda y muerta por picaduras de abeja en la garganta. Poco después, otra pareja de veinticinco años es asesinada en la Casa del Cordón, un conocido edificio medieval.El joven inspector Unai López de Ayala ?alias Kraken?, experto en perfiles criminales, está obsesionado con prevenir los crímenes antes de que ocurran, una tragedia personal aún fresca no le permite encarar el caso como uno más. Sus métodos poco ortodoxos enervan a su jefa, Alba, la subcomisaria con la que mantiene una ambigua relación marcada por los crímenes? El tiempo corre en su contra y la amenaza acecha en cualquier rincón de la ciudad. ¿Quién será el siguiente?Una novela negra absorbente que se mueve entre la mitología y las leyendas de Álava, la arqueología, los secretos de familia y la psicología criminal. Un noir elegante y complejo que demuestra cómo los errores del pasado pueden influir en el presente.', 'GARCIA SAENZ DE URTURI,EVA', 'PLANETA', '20.99', '2016-04-12', 'img/3.jpg', 'FICC'),
('978-84-08-15941-4', 'EL GRAN REGRESO AL REINO DE LA FANTASIA', 'La niebla cubre Ratonia y mil violines de plata suenan en la noche... Alguien ha abierto un hueco entre el Mundo de la Realidad y el Reino de la Fantasía. ¡Vuela conmigo en las alas del Dragón Luminar en busca del Anillo Alado, un anillo de energía pura que la reina Floridiana me ha confiado y que una noche desapareció misteriosamente ... ¡Será una superaventura! ', 'STILTON,GERONIMO', 'DESTINO INFANTIL & JUVENIL', '19.99', '2016-10-18', 'img/4.jpg', 'INF'),
('978-84-08-15976-6', 'NOCHES DE TERCIOPELO', 'Adele Lavigne, una joven dependienta de la legendaria tienda Bergdorf Goodman, no podía imaginarse que atender después del cierre a aquel hombre tan seductor y carismático cambiaría su vida para siempre.Tras años de búsqueda, Alberto Márquez se había establecido en Nueva York y en tan solo año y medio su atelier, Silk, ya era el lugar más preciado para las mujeres ricas de la gran manzana. Su atención era tan exquisita y enigmática como él. Se hablaba de algo mucho más allá que de alta costura. Sesiones exclusivas en las que solo él decidía quién, cómo, cuándo, qué y ahora reclamaba la ayuda de la joven señorita Lavigne para hacer crecer su negocio.Fascinada por la propuesta de Alberto, Adele abandona los almacenes Goodman, comienza a trabajar para él y, tratando de descubrir cuáles son los secretos que se esconden bajo ese fascinante atelier, se ve seducida y envuelta en la misma realidad tormentosa que su propio maestro. Un hombre nuevo que ha decidido esconder sus heridas, dejando a la vista únicamente su lado más oscuro y sexual.Esta novela nos desvela la verdad sobre la aparente muerte de Alberto Márquez al final de la tercera temporada de Velvet y nos introduce en su nueva vida en Nueva York, como propietario del más selecto atelier de alta costura del momento, un atelier tan exquisito y enigmático como él, donde las sesiones a media noche con sus exclusivas clientas transgreden todos los límites. ', 'PETIT,CAROL', 'PLANETA', '20.99', '2016-09-27', 'img/5.jpg', 'ERO'),
('978-84-08-16317-6', 'TODO ESTO TE DARE', 'En el escenario majestuoso de la Ribeira Sacra, Álvaro sufre un accidente que acabará con su vida. Cuando Manuel, su marido, llega a Galicia para reconocer el cadáver, descubre que la investigación sobre el caso se ha cerrado con demasiada rapidez. El rechazo de su poderosa familia política, los Muñiz de Dávila, le impulsa a huir pero le retiene el alegato contra la impunidad que Nogueira, un guardia civil jubilado, esgrime contra la familia de Álvaro, nobles mecidos en sus privilegios, y la sospecha de que ésa no es la primera muerte de su entorno que se ha enmascarado como accidental. Lucas, un sacerdote amigo de la infancia de Álvaro, se une a Manuel y a Nogueira en la reconstrucción de la vida secreta de quien creían conocer bien.La inesperada amistad de estos tres hombres sin ninguna afinidad aparente ayuda a Manuel a navegar entre el amor por quien fue su marido y el tormento de haber vivido de espaldas a la realidad, blindado tras la quimera de su mundo de escritor. Empezará así la búsqueda de la verdad, en un lugar de fuertes creencias y arraigadas costumbres en el que la lógica nunca termina de atar todos los cabos.', 'REDONDO, DOLORES', 'PLANETA', '20.99', '2016-11-03', 'img/6.jpg', 'FICC'),
('978-84-08-16318-3', 'EL ASESINATO DE SOCRATES', 'Grecia, siglo v a. C.Un oscuro oráculo vaticina la muerte de Sócrates. Un recién nacido es condenado a morir por su propio padre.Una guerra encarnizada entre Atenas y Esparta desangra Grecia.El asesinato de Sócrates recrea magistralmente la época más extraordinaria de nuestra historia. Madres que luchan por sus hijos, amores imposibles y soldados tratando de sobrevivir se entrelazan de un modo fascinante con los gobernantes, artistas y pensadores que convirtieron Grecia en la cuna de nuestra civi-lización. A lo largo de las páginas de esta absorbente novela, brilla con luz propia la figura inigualable de Sócrates, el hombre cuya vida y muerte nos inspiran desde hace siglos, el filósofo que marca un antes y un después en la historia de la humanidad. ', 'CHICOT, MARCOS', 'PLANETA', '18.99', '2016-11-03', 'img/7.jpg', 'FICC'),
('978-84-08-16325-1', 'DOS LUNAS PARA SOFIA', 'Sofía conoce el amargo sabor del desengaño e ignora que la vida volverá a darle pronto otra oportunidad.  La aparición de Álex pone su universo patas arriba. Pero las cosas rodeadas de un amor intenso que no atiende a razones jamás son fáciles. Muchas de las personas en las que ellos confían se convertirán en los peores enemigos de su relación. Y Sofía y Álex se enfrentarán a la distancia de forma muy distinta. Mientras ambos tratan de olvidar, la aparición del misterioso Mario podría cambiarlo absolutamente todo.\r\n¿Conseguirán salir del pozo del desamor y abandonar para siempre las relaciones escalón?', 'ROMAN, REGINA', 'PLANETA', '19.99', '2017-01-17', 'img/8.jpg', 'ROM'),
('978-84-08-16327-5', 'A LA CAZA DE TU AMOR', 'Noa Montalbo, alias «niñata», es rebelde, caprichosa y muy obstinada. Hija de un importantísimo empresario valenciano, está habituada a salirse siempre con la suya. Hasta que su padre, Diego Montalbo, cansado de su díscola vida, la manda a trabajar a un resort de lujo que posee en Kenia, en medio de la sabana africana.\r\n\r\nAllí conoce a Alonso Rivas, alias «Tarzán trasnochado» o en su defecto «ser unineuronal», guía y encargado del complejo hotelero. Su carácter rudo, prepotente y autoritario no hará que empiecen con muy buen pie. Para él no es más que otra niñata rica y consentida que sólo viene a darle problemas.\r\n\r\nSin embargo, y aunque no sean capaces de reconocerlo, se odian con la misma intensidad con la que se atraen, e inevitablemente vivirán una aventura de amor, atracción, pasión, celos, drama, humor e intriga, ya que nada de lo que los rodea en ese paraíso es lo que parece.\r\n\r\nPero solamente juntos podrán luchar contra todos los que intentan separarlos, para lograr al fin la felicidad.', 'EIRAS, ANTIA', 'PLANETA', '21.99', '2017-01-13', 'img/9.jpg', 'ROM'),
('978-84-08-16338-1', 'EL LABERINTO DE LOS ESPIRITUS', 'En la Barcelona de finales de los años 50, Daniel Sempere ya no es aquel niño que descubrió un libro que habría de cambiarle la vida entre los pasadizos del Cementerio de los Libros Olvidados. El misterio de la muerte de su madre Isabella ha abierto un abismo en su alma del que su esposa Bea y su fiel amigo Fermín intentan salvarle.Justo cuando Daniel cree que está a un paso de resolver el enigma, una conjura mucho más profunda y oscura de lo que nunca podría haber imaginado despliega su red desde las entrañas del Régimen. Es entonces cuando aparece Alicia Gris, un alma nacida de las sombras de la guerra, para conducirlos al corazón de las tinieblas y desvelar la historia secreta de la familia? aunque a un terrible precio.El Laberinto de los Espíritus es un relato electrizante de pasiones, intrigas y aventuras. A través de sus páginas llegaremos al gran final de la saga iniciada con La Sombra del Viento, que alcanza aquí toda su intensidad y calado, a la vez que dibuja un gran homenaje al mundo de los libros, al arte de narrar historias y al vínculo mágico entre la literatura y la vida.', 'RUIZ ZAFON, CARLOS', 'PLANETA', '22.99', '2016-11-17', 'img/10.png', 'FICC'),
('978-84-08-16343-5', 'LA SOMBRA DEL VIENTO', '«Todavía recuerdo aquel amanecer en que mi padre me llevó por primera vez a visitar el Cementerio de los Libros Olvidados.»Un amanecer de 1945, un muchacho es conducido por su padre a un misterioso lugar oculto en el corazón de la ciudad vieja: el Cementerio de los Libros Olvidados. Allí, Daniel Sempere encuentra un libro maldito que cambia el rumbo de su vida y le arrastra a un laberinto de intrigas y secretos enterrados en el alma oscura de la ciudad. La Sombra del Viento es un misterio literario ambientado en la Barcelona de la primera mitad del siglo xx, desde los últimos esplendores del Modernismo hasta las tinieblas de la posguerra.Aunando las técnicas del relato de intriga y suspense, la novela histórica y la comedia de costumbres, La Sombra del Viento es sobre todo una trágica historia de amor cuyo eco se proyecta a través del tiempo. Con gran fuerza narrativa, el autor entrelaza tramas y enigmas a modo de muñecas rusas en un inolvidable relato sobre los secretos del corazón y el embrujo de los libros cuya intriga se mantiene hasta la última página.', 'RUIZ ZAFON,CARLOS', 'BOOKET', '17.99', '2016-10-11', 'img/11.jpg', 'FICC'),
('978-84-08-16344-2', 'EL JUEGO DEL ANGEL', 'En la turbulenta Barcelona de los años 20 un joven escritor obsesionado con un amor imposible recibe la oferta de un misterioso editor para escribir un libro como no ha existido nunca, a cambio de una fortuna y, tal vez, mucho más.Con estilo deslumbrante e impecable precisión narrativa, el autor de La Sombra del Viento nos transporta de nuevo a la Barcelona del Cementerio de los Libros Olvidados para ofrecernos una gran aventura de intriga, romance y tragedia, a través de un laberinto de secretos donde el embrujo de los libros, la pasión y la amistad se conjugan en un relato magistral.', 'RUIZ ZAFON, CARLOS', 'BOOKET', '18.99', '2016-10-11', 'img/12.jpg', 'FICC'),
('978-84-08-16345-9', 'EL PRISIONERO DEL CIELO', 'Barcelona, 1957. Daniel Sempere y su amigo Fermín, los héroes de La Sombra del Viento, regresan de nuevo a la aventura para afrontar el mayor desafío de sus vidas.Justo cuando todo empezaba a sonreírles, un inquietante personaje visita la librería de Sempere y amenaza con desvelar un terrible secreto que lleva enterrado dos décadas en la oscura memoria de la ciudad. Al conocer la verdad, Daniel comprenderá que su destino le arrastra inexorablemente a enfrentarse con la mayor de las sombras: la que está creciendo en su interior.Rebosante de intriga y emoción, El Prisionero del Cielo es una novela magistral donde los hilos de La Sombra del Viento y El Juego del Ángel convergen a través del embrujo de la literatura y nos conduce hacia el enigma que se oculta en el corazón del Cementerio de los Libros Olvidados.', 'RUIZ ZAFON,CARLOS', 'BOOKET', '20.99', '2016-10-11', 'img/13.jpg', 'FICC'),
('978-84-08-16590-3', 'EL REGRESO DEL CATON', '¿Qué pueden tener en común la Ruta de la Seda, las alcantarillas de Estambul, Marco Polo, Mongolia y Tierra Santa? Eso es lo que los protagonistas de El último Catón, Ottavia Salina y Farag Boswell, tendrán que averiguar poniendo de nuevo sus vidas en peligro para resolver un misterio que arranca en el siglo I de nuestra era.Escrita con rigor, con un ritmo que mantiene en vilo a los lectores página a página y capítulo a capítulo hasta el final, El regreso del Catón es una combinación magistral de aventura e historia con la que Matilde Asensi nos atrapa de nuevo para no dejarnos escapar hasta la última palabra.', 'ASENSI, MATILDE', 'BOOKET', '21.99', '2017-01-10', 'img/14.jpg', 'FICC'),
('978-84-16261-91-8', 'ME LLAMO LUCY BARTON', 'De la autora Premio Pulitzer y nº1 del The New York Times: Una historia que ilumina nuestras relaciones más tiernas. En una habitación de hospital en pleno centro de Manhattan, delante del iluminado edifi cio Chrysler, cuyo perfil se recorta al otro lado de la ventana, dos mujeres hablan sin descanso durante cinco días y cinco noches. Hace muchos años que no se ven, pero el flujo de su conversación parece capaz de detener el tiempo y silenciar el ruido ensordecedor de todo lo que no se dice. En esa habitación de hospital, durante cinco días y cinco noches, las dos mujeres son en realidad algo muy antiguo, peligroso e intenso: una madre y una hija que recuerdan lo mucho que se aman. «Tengo una misión: lograr que miles de lectores se rindan como yo ante Elizabeth Strout.» Paolo Giordano «Strout reviste lo ordinario de una fuerza asombrosa.» The New Yorker «Una delicada joya, con una sensibilidad psicológica exquisita.» LExpress «Sus libros nos hacen mejores personas.» La Repubblica', 'STROUT, ELIZABETH', 'DUORMO EDICIONES', '17.99', '2016-08-29', 'img/15.jpg', 'FICC'),
('978-84-16588-11-4', 'UN MONSTRUO VIENE A VERME', 'Nueva edición de la novela más aclamada de Patrick Ness con prólogo de Juan Antonio Bayona, director de Un monstruo viene a verme, la película basada en el libro.Merecedora de numerosos premios y distinciones, Un monstruo viene a verme una historia emocionante y extraordinaria sobre un niño, su madre enferma y el monstruo que viene a visitarle.Siete minutos después de la medianoche, Conor despierta y se encuentra un monstruo en la ventana. Pero no es el monstruo que él esperaba, el de la pesadilla que tiene casi todas las noches desde que su madre empezó el arduo e incansable tratamiento. No, este monstruo es algo diferente, antiguo... Y quiere lo más peligroso de todo: la verdad.Maliciosa, divertida y conmovedora, Un monstruo viene a verme nos habla de nuestra dificultad para aceptar la pérdida y de los lazos frágiles pero extraordinariamente poderosos que nos unen a la vida.La crítica ha dicho...«Excepcional... He aquí cómo debería ser siempre la narrativa: desgarradora, lírica y trascendente.»Meg Rosoff«Valiente y hermoso, lleno de compasión, Un monstruo viene a verme funde lo doloroso y lo intuitivo, lo simple y lo profundo. El resultado tiembla de vida.»The Independent«Las ilustraciones de Kay, amenazadoras y llenas de energía, y la manera en que interactúan con el texto, junto a la generosidad de los materiales con que está hecho el libro, hacen que sea una verdadera alegría tan solo sostenerlo en la mano.»The Guardian«Imprescindible... Apasionante, conmovedor, brillante.»The Times«Excepcional... Destaca por su compasión.»Daily Mail', 'NESS,PATRICK', 'NUBE DE TINTA', '19.99', '2016-07-07', 'img/16.jpg', 'JUV'),
('978-84-16690-26-8', 'TORMENTA DE NIEVE Y AROMA DE ALMENDRAS', 'Descubre Fjällbacka y a los protagonistas de la serie desde otra perspectiva.Una original novela de misterio al estilo de los grandes clásicos del género que contiene los elementos más representativos de la autora.', 'LACKBERG,CAMILLA', 'MAEVA EDICIONES', '19.99', '2016-12-05', 'img/17.jpg', 'POL'),
('978-84-204-1734-9', 'EL LIBRO DE LOS BALTIMORE', '«Si encontráis este libro, por favor, leedlo. Querría que alguien supiera la historia de los Goldman-de-Baltimore.»\r\nHasta que tuvo lugar el Drama existían dos ramas de la familia Goldman: los Goldman de Baltimore y los Goldman de Montclair. Los Montclair, de los que forma parte Marcus Goldman, autor de La verdad sobre el caso Harry Quebert, es una familia de clase media que vive en una pequeña casa en el estado de Nueva Jersey. Los Baltimore, prósperos y a los que la suerte siempre ha sonreído, habitan una lujosa mansión en un barrio de la alta sociedad de Baltimore.\r\nOcho años después del Drama, Marcus Goldman pone el pasado bajo la lupa en busca de la verdad sobre el ocaso de la familia. Entre los recuerdos de su juventud revive la fascinación que sintió desde niño por los Baltimore, que encarnaban la América patricia con sus vacaciones en Miami y en los Hamptons y sus colegios elitistas. Con el paso de los años la brillante pátina de los Baltimore se desvanece al tiempo que el Drama se va perfilando. Hasta el día en el que todo cambia para siempre.\r\n ', 'DICKER,JOEL', 'ALFAGUARA', '21.99', '2016-05-24', 'img/18.jpg', 'FICC'),
('978-84-204-1968-8', 'FALCO', '«El mundo de Falcó era otro, y allí los bandos estaban perfectamente definidos: de una parte él, y de la otra todos los demás.» La Europa turbulenta de los años treinta y cuarenta del siglo XX es el escenario de las andanzas de Lorenzo Falcó, ex contrabandista de armas, espía sin escrúpulos, agente de los servicios de inteligencia. Durante el otoño de 1936, mientras la frontera entre amigos y enemigos se reduce a una línea imprecisa y peligrosa, Falcó recibe el encargo de infiltrarse en una difícil misión que podría cambiar el curso de la historia de España. Un hombre y dos mujeres -los hermanos Montero y Eva Rengel- serán sus compañeros de aventura y tal vez sus víctimas, en un tiempo en el que la vida se escribe a golpe de traiciones y nada es lo que parece. Arturo Pérez-Reverte entrelaza magistralmente realidad y ficción en esta historia protagonizada por un nuevo y fascinante personaje, comparable a los más destacados espías y aventureros de la literatura.', 'PEREZ-REVERTE,ARTURO', 'ALFAGUARA', '21.99', '2016-10-19', 'img/19.jpg', 'HIS'),
('978-84-233-5099-5', 'EL GUARDIAN INVISIBLE', '«Ainhoa Elizasu fue la segunda víctima del basajaun, aunque entonces la prensa todavía no lo llamaba así. Fue un poco más tarde cuando trascendió que alrededor de los cadáveres aparecían pelos de animal, restos de piel y rastros dudosamente humanos, unidos a una especie de fúnebre ceremonia de purificación. Una fuerza maligna, telúrica y ancestral parecía haber marcado los cuerpos de aquellas casi niñas con la ropa rasgada, el vello púbico rasurado y las manos dispuestas en actitud virginal.»En los márgenes del río Baztán, en el valle de Navarra, aparece el cuerpo desnudo de una adolescente en unas circunstancias que lo ponen en relación con un asesinato ocurrido en los alrededores un mes atrás. La inspectora de la sección de homicidios de la Policía Foral, Amaia Salazar, será la encargada de dirigir una investigación que la llevará de vuelta a Elizondo, una pequeña población de donde es originaria y de la que ha tratado de huir toda su vida. Enfrentada con las cada vez más complicadas derivaciones del caso y con sus propios fantasmas familiares, la investigación de Amaia es una carrera contrarreloj para dar con un asesino que puede mostrar el rostro más aterrador de una realidad brutal.', 'REDONDO,DOLORES', 'BOOKET', '19.99', '2016-05-24', 'img/20.jpg', 'POL'),
('978-84-233-5100-8', 'LEGADO EN LOS HUESOS', '«Amaia dio un paso adelante para ver el cuadro. Jasón Medina aparecía sentado en el retrete con la cabeza echada hacia atrás. Un corte oscuro y profundo surcaba su cuello. La sangre había empapado la pechera de la camisa como un babero rojo que hubiera resbalado entre sus piernas, tiñendo todo a su paso. El cuerpo aún emanaba calor, y el olor de la muerte reciente viciaba el aire.»Un año después de resolver los crímenes que aterrorizaron al pueblo de Baztán, la inspectora Amaia Salazar acude embarazada al juicio contra Jasón Medina, el padrastro de Johana Márquez, acusado de violar, mutilar y asesinar a la joven imitando el modus operandi del basajaun. Pero, tras el suicidio del acusado, el juicio debe cancelarse, y Amaia es reclamada por la policía porque se ha hallado una nota suicida dirigida a la inspectora, una nota que contiene un escueto e inquietante mensaje: «Tarttalo». Esa sola palabra destapará una trama terrorífica tras la búsqueda de la verdad.', 'REDONDO,DOLORES', 'BOOKET', '18.99', '2016-05-24', 'img/21.jpg', 'POL'),
('978-84-233-5101-5', 'OFRENDA A LA TORMENTA', '«El intruso retiró el muñeco y observó la carita de la niña [?]. No había ya luz en su rostro y la sensación de estar ante un receptáculo vacío se acrecentó al llevarse de nuevo el muñeco a la cara para aspirar el aroma infantil, ahora enriquecido por el aliento de un alma.»La muerte súbita de una niña en Elizondo resulta sospechosa: el bebé tiene unas marcas rojizas en el rostro que indican que ha habido presión digital, y además, su padre intenta llevarse el cadáver. La bisabuela de la pequeña sostiene que la tragedia es obra de Inguma, el demonio que inmoviliza a los durmientes, se bebe su aliento y les arrebata la vida durante el sueño. Pero serán los análisis forenses del doctor San Martín los que convencen a la inspectora Amaia Salazar de investigar otras muertes de bebés, que pronto revelarán un rastro inaudito en el valle. Berasategui muere, entonces, inexplicablemente en su celda, lo que despliega una trepidante investigación que llevará a Amaia al auténtico origen de los sucesos que han asolado el valle de Baztán. Y mientras, desde el bosque, una impresionante tormenta llega para sepultar la verdad más demoledora.', 'REDONDO, DOLORES', 'BOOKET', '17.99', '2016-05-24', 'img/22.jpg', 'POL'),
('978-84-253-5423-6', 'LOS HEREDEROS DE LA TIERRA', 'Barcelona, 1387. Las campanas de la iglesia de Santa María de la Mar siguen sonando para todos los habitantes del barrio de la Ribera, pero uno de ellos escucha su repique con especial atención... Hugo Llor, hijo de un marinero fallecido, a sus doce años trabaja en las atarazanas gracias a la generosidad de uno de los prohombres más apreciados de la ciudad: Arnau Estanyol.\r\n\r\nPero sus sueños juveniles de convertirse en constructor de barcos se darán de bruces contra una realidad dura y despiadada cuando la familia Puig, enemiga acérrima de su mentor, aproveche su posición ante el nuevo rey para ejecutar una venganza que llevaba años acariciando.\r\n\r\nA partir de ese momento, la vida de Hugo oscila entre su lealtad a Bernat, amigo y único hijo de Arnau, y la necesidad de sobrevivir en una ciudad injusta con los pobres.\r\n\r\nObligado a abandonar el barrio de la Ribera, busca trabajo junto a Mahir, un judío que le enseña los secretos del mundo del vino. Con él, entre viñedos, cubas y alambiques, el muchacho descubre la pasión por la tierra al tiempo que conoce a Dolça, la hermosa sobrina del judío, que se convertirá en su primer amor. Pero este sentimiento, prohibido por las costumbres y por la religión, será el que le proporcionará los momentos más dulces y amargos de su juventud.', 'FALCONES,ILDEFONSO', 'GRIJALBO', '21.99', '2016-08-31', 'img/23.jpg', 'HIS'),
('978-84-264-2078-7', 'LA AMIGA ESTUPENDA (DOS AMIGAS 1)', 'Con La amiga estupenda, Elena Ferrante inaugura una tetralogia deslumbrante que tiene como telón de fondo la ciudad de Nápoles a mediados del siglo pasado y como protagonistas a Lenù y Lila, dos jóvenes mujeres que están aprendiendo a gobernar su vida en un entorno donde la astucia, antes que la inteligencia, es el ingrediente de todas las salsas.\r\n\r\nLa relación a menudo tempestuosa entre Lila y Lenù viene acompañada de un coro de voces que dan cuerpo a su historia y nos muestran la realidad de un barrio pobre, habitado por gente humilde que acata sin rechistar la ley del más fuerte, pero La amiga estupenda está lejos del realismo social: lo que aquí tenemos son unos personajes de carne y hueso, que nos intrigan y nos deslumbran por la fuerza y la urgencia de sus emociones.\r\n\r\nPor primera vez Ferrante aborda una narración muy amplia, poniendo en escena un verdadero tableau vivant donde no hay espacio para el tópico: todo es vida y todo respira al hilo de la mejor literatura.', 'FERRANTE,ELENA', 'LUMEN', '20.99', '2016-05-19', 'img/24.jpg', 'FICC'),
('978-84-663-3139-5', 'YO ANTES DE TI', 'Louisa Clark sabe muchas cosas. Sabe cuántos pasos hay entre la parada del autobús y su casa. Sabe que le gusta trabajar en el café Buttered Bun y sabe que quizá no quiera a su novio Patrick.\r\n\r\nLo que Lou no sabe es que está a punto de perder su trabajo o que son sus pequeñas rutinas las que la mantienen en su sano juicio.\r\n\r\nWill Traynor sabe que un accidente de moto se llevó sus ganas de vivir. Sabe que ahora todo le parece insignificante y triste y sabe exactamente cómo va a solucionarlo.\r\n\r\nLo que Will no sabe es que Lou está a punto de irrumpir en su mundo con una explosión de color.\r\n\r\nY ninguno de los dos sabe que va a cambiar al otro para siempre.\r\n\r\nYo antes de tireúne a dos personas que no podrían tener menos en común en una novela conmovedoramente romántica con una pregunta: ¿Qué decidirías cuando hacer feliz a la persona a la que amas significa también destrozarte el corazón?', 'MOYES,JOJO', 'DEBOLSILLO', '18.99', '2005-09-15', 'img/25.jpg', 'FICC'),
('978-84-670-4773-8', 'LA HIJA DE CAYETANA', 'Un episodio asombroso y olvidado protagonizado por una de las mujeres más célebres de nuestra Historia: Cayetana de Alba, la inolvidable musa de Goya. Excéntrica, caprichosa y libre, durante más de doscientos años su poder de seducción se ha mantenido inalterable. Sin embargo, pocos saben que la duquesa adoptó a una niña negra, María Luz, a quien quiso y educó como a una hija y a la que dejó parte de su fortuna. Carmen Posadas cuenta con mano maestra la peripecia de las dos madres: la adoptiva, con sus amores y dramas en la corte de Carlos IV, un auténtico nido de intrigas, y la de la biológica, Trinidad que, esclava en España, lucha por encontrar al bebé que le fue arrebatado al nacer.', 'POSADAS,CARMEN', 'ESPASA', '9.99', '2016-10-25', 'img/26.jpg', 'HIS'),
('978-84-675-3967-7', 'CRONICAS DE LA TORRE 1. EL VALLE DE LOS LOBOS', 'Dana creció junto a sus hermanos llevando una vida normal. El día que el Maestro la llevó con él a la Torre, en el Valle de los Lobos, no se imaginaba que su vida cambiaría para siempre y que se convertiría en la depositaria de secretos tan mágicos como antiguos. ¿Qué aventuras le depara el destino a nuestra joven heroína? Fantástico libro donde nos acercamos a un mundo poblado de seres mágicos y criaturas sobrenaturales.', 'GALLEGO GARCIA, LAURA', 'EDICIONES SM', '9.99', '2010-02-17', 'img/27.jpg', 'INF'),
('978-84-8464-564-1', '¿A QUE SABE LA LUNA?', 'Hacía mucho tiempo que los animales deseaban averiguar a qué sabía la luna. ¿Sería dulce o salada? Tan solo querían probar un pedacito. Por las noches, miraban ansiosos hacia el cielo. Se estiraban e intentaban cogerla, alargando el cuello, las piernas y los brazos. ¿Quién no soñó alguna vez con darle un mordisco a la luna? Este fue precisamente el deseo de los animales de este cuento. Tan solo querían probar un pedacito pero, por más que se estiraban, no eran capaces de tocarla. Entonces, la tortuga tuvo una genial idea: ?Si te subes a mi espalda, tal vez lleguemos a la luna?, le dijo al elefante.', 'GREJNIEC, MICHAEL', 'KALANDRAKA EDITORA', '8.99', '2006-04-11', 'img/28.jpg', 'INF'),
('978-84-9066-319-6', 'PATRIA', 'El día en que ETA anuncia el abandono de las armas, Bittori se dirige al cementerio para contarle a la tumba de su marido el Txato, asesinado por los terroristas, que ha decidido volver a la casa donde vivieron. ¿Podrá convivir con quienes la acosaron antes y después del atentado que trastocó su vida y la de su familia? ¿Podrá saber quién fue el encapuchado que un día lluvioso mató a su marido, cuando volvía de su empresa de transportes? Por más que llegue a escondidas, la presencia de Bittori alterará la falsa tranquilidad del pueblo, sobre todo de su vecina Miren, amiga íntima en otro tiempo, y madre de Joxe Mari, un terrorista encarcelado y sospechoso de los peores temores de Bittori. ¿Qué pasó entre esas dos mujeres? ¿Qué ha envenenado la vida de sus hijos y sus maridos tan unidos en el pasado? Con sus desgarros disimulados y sus convicciones inquebrantables, con sus heridas y sus valentías, la historia incandescente de sus vidas antes y después del cráter que fue la muerte del Txato, nos habla de la imposibilidad de olvidar y de la necesidad de perdón en una comunidad rota por el fanatismo político.', 'ARAMBURU,FERNANDO', 'TUSQUETS EDITORES.S.A', '18.99', '2016-09-03', 'img/39.jpg', 'FICC'),
('978-84-9129-065-0', 'LA PAREJA DE AL LADO', 'Todo comenzó en una cena con los vecinos...La pareja de al lado: «El thriller del que todo el mundo habla.» (Stylist)Tu vecina te dijo que preferiría que no llevaras a tu bebé de seis meses a la cena. No es nada personal, simplemente no soporta sus llantos.Tu marido estaba de acuerdo. Después de todo, vivís en la casa de al lado. Podíais llevaros el monitor infantil y turnaros para pasar a verla cada media hora.Tu hija dormía cuando fuiste a comprobar por última vez. Sin embargo, en este momento, mientras subes corriendo las escaleras hasta su habitación envuelta en un absoluto silencio, confirmas que tu peor pesadilla se ha hecho realidad: ha desaparecido.Nunca antes habías tenido que llamar a la policía. Ahora están en tu casa y quién sabe lo que pueden llegar a descubrir.¿De qué serías capaz cuando has sobrepasado tus límites?Críticas:«Alta tensión que se mantiene hasta la última, y asombrosa, página.»The Times«Un debut demoledor y lleno de suspense.»Publishers Weekly«Por completo fascinante, totalmente realista y contado con un estilo maravillosamente sencillo y efectivo. No verás venir las sorpresas.»Daily Mail«Los giros llegan con la misma velocidad con la que puedas pasar las páginas.»People«Un arranque impactante para un thriller ejecutado con maestría, lleno de giros y repleto de culpa, drama y engaño.»Sunday Mirror«Una lectura que te atrapa con una trama que te hará pasar las páginas a toda velocidad para averiguar qué es lo siguiente que va a pasar.»Grazia«¡¿Dónde está el bebé?! Es difícil no dejar de leer hasta el final para averiguarlo, y los giros que te aguardan allí son gratamente inteligentes.»USA Today«Un lujo de thriller que avanza a un ritmo de vértigo.»Good Housekeeping«Lleno de suspense... Los giros se van revelando sutilmente y con gran aplomo, llevando a la historia a niveles cada vez más altos de impredecibilidad.»Associated Press', 'LAPENA, SHARI', 'SUMA', '19.99', '2017-12-01', 'img/30.jpg', 'FICC'),
('978-84-939877-4-9', 'EL MONSTRUO DE COLORES', 'El monstruo se ha hecho un lío con sus emociones, y habrá que buscar colores que le ayuden a identificarlas.', 'LLENAS SERRA, ANNA', 'EDITORIAL FLAMBOYANT', '8.99', '2012-11-01', 'img/31.jpg', 'INF'),
('978-84-9838-149-8', 'EL PRINCIPITO', 'Viví así, solo, sin nadie con quien hablar verdaderamente, hasta que tuve una avería en el desierto del Sahara, hace seis años. Algo se había roto en mi motor. Y como no tenía conmigo ni mecánico ni pasajeros, me dispuse a realizar, solo, una reparación difícil. Era, para mí, cuestión de vida o muerte. Tenía agua apenas para ocho días. La primera noche dormí sobre la arena a mil millas de toda tierra habitada. Estaba más aislado que un náufrago sobre una balsa en medio del océano. Imaginaos, pues, mi sorpresa cuando, al romper el día, me despertó una extraña vocecita que decía: Por favor..., ¡dibújame un cordero!', 'SAINT-EXUPERY,ANTOINE DE', 'PUBLICACIONES Y EDICIONES SALAMANDRA', '8.99', '2008-01-01', 'img/32.jpg', 'INF'),
('978-84-9838-195-5', 'LOS CUENTOS DE BEEDLE EL BARDO', 'Los cuentos de Beedle el Bardo contienen cinco cuentos de hadas muy diferentes, cada uno con su propio carácter mágico, que deleitarán al lector con su humor y la emoción del peligro de muerte. Muggles y magos por igual disfrutarán de los comentarios añadidos al final de cada relato, escritos por el profesor Albus Dumbledore, que cavila en ellos sobre las enseñanzas que nos dejan los cuentos, revelando al mismo tiempo pizcas de información sobre la vida en Hogwarts. Con ilustraciones realizadas por su autora, J.K. Rowling, este libro único y mágico perdurará como un pequeño tesoro en los años venideros.', 'ROWLING,J.K.', 'PUBLICACIONES Y EDICIONES SALAMANDRA', '9.99', '2008-10-02', 'img/33.png', 'INF'),
('978-84-9838-269-3', 'QUIDDITCH A TRAVES DE LOS TIEMPOS', 'Si alguna vez te has preguntado de dónde proviene la snitch dorada, cómo adquieren vida las bludgers o por qué los Wigtown Wanderers llevan un cuchillo de carnicero dibujado en el uniforme, entonces querrás leer Quidditch a través de los tiempos. Esta edición es una copia del ejemplar que está en la biblioteca del Colegio Hogwarts y que los jóvenes fanáticos del quidditch consultan casi a diario. Los beneficios de la venta de este libro se destinarán a Comic Relief, que utilizará tu dinero para continuar salvando y mejorando vidas, un trabajo que es aún más importante y sorprendente que los tres segundos y medio que tardó Roderick Plumpton en capturar la snitch dorada en 1921.', 'ROWLING,J.K.', 'PUBLICACIONES Y EDICIONES SALAMANDRA', '9.99', '2010-06-03', 'img/34.jpg', 'JUV'),
('978-84-9838-754-4', 'HARRY POTTER Y EL LEGADO MALDITO', 'DIECINUEVE AÑOS DESPUÉS... LA OCTAVA HISTORIA Ser Harry Potter nunca ha sido tarea fácil, menos aún desde que se ha convertido en un ocupadísimo empleado del Ministerio de Magia, un hombre casado y padre de tres hijos. Mientras Harry planta cara a un pasado que se resiste a quedar atrás, su hijo menor, Albus, ha de luchar contra el peso de una herencia familiar de la que él nunca ha querido saber nada. Cuando el destino conecte el pasado con el presente, padre e hijo deberán afrontar una verdad muy incómoda: a veces, la oscuridad surge de los lugares más insospechados. Harry Potter y el legado maldito es una obra de teatro de Jack Thorne basada en una historia original de J. K. Rowling, John Tiffany y Jack Thorne. Es la octava historia de la saga de Harry Potter y la primera que se representa oficialmente en los escenarios. Esta edición especial del texto teatral acerca a los lectores la continuación del viaje de Harry Potter, sus amigos y familiares, inmediatamente después del estreno mundial de la obra en el West End de Londres el 30 de julio de 2016. La obra de teatro Harry Potter y el legado maldito está producida por Sonia Friedman Productions, Colin Callender y Harry Potter Theatrical Productions.', 'ROWLING,J.K.', 'PUBLICACIONES Y EDICIONES SALAMANDRA', '22.99', '2016-09-28', 'img/35.jpg', 'JUV'),
('978-84-9838-790-2', 'ANIMALES FANTASTICOS Y DONDE ENCONTRARLOS', 'El explorador y magizoólogo Newt Scamander llega a Nueva York con la intención de permanecer unos pocos días. Pero cuando pierde su maleta y algunos de sus animales fantásticos se escapan de ella, una serie de acontecimientos extraordinarios se desatan, poniendo en vilo a la gran ciudad...', 'ROWLING,J.K.', 'PUBLICACIONES Y EDICIONES SALAMANDRA', '19.99', '2017-01-05', 'img/36.jpg', 'JUV'),
('9788490622858', 'DOCTOR SUEÑO', 'Ahora Danny Torrance, aquel niño aterrorizado del Hotel Overlook, es un adulto alcohólico y sin residencia fija que vive atormentado por sus visiones y por los fantasmas de su infancia, que ha aprendido a controlar pero no a eliminar de su mente. Un día se siente atraído por una ciudad de New Hampshire, de donde le llega la visión de Abra Stone, una niña que necesita su ayuda. La persigue una tribu de seres paranormales que vive del resplandor de los niños especiales, y precisamente el de Abra tiene mucha fuerza# Danny sabe que sin su ayuda nunca conseguirá escapar. Juntos emprenden una lucha épica, una batalla sangrienta entre el Bien y el Mal.', 'KING, STEPHEN', 'DEBOLSILLO', '14.99', '2016-05-24', 'img/37.png', 'TERR'),
('9788497595353', 'MISERY', 'Un escritor sufre un grave accidente y recobra el conocimiento en una apartada casa en la que vive una misteriosa mujer, corpulenta y de extraño carácter. Se trata de una antigua enfermera, involucrada en varias muertes misteriosas ocurridas en diversos hospitales. Esta mujer es capaz de los mayores horrores, y el escritor, con las piernas rotas y entre terribles dolores, tiene que luchar por su vida. ﻿', 'KING,STEPHEN', 'DEBOLSILLO', '14.99', '2014-10-22', 'img/38.jpg', 'TERR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `ID_PEDIDOS` int(10) NOT NULL,
  `FECH_PED` date DEFAULT NULL,
  `NOM_USU` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`ID_PEDIDOS`, `FECH_PED`, `NOM_USU`) VALUES
(1, '2017-01-08', 'DIEGO15'),
(2, '2017-01-12', 'DIEGO15'),
(3, '2017-01-14', 'ISMA85'),
(4, '2017-01-16', 'JUANLUS'),
(5, '2017-01-18', 'RICARD12'),
(6, '2017-01-18', 'ROBERT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `NOM_USU` varchar(15) NOT NULL,
  `PASSWORD` varchar(64) DEFAULT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `APELLIDOS` varchar(45) DEFAULT NULL,
  `DIRECCION` varchar(45) DEFAULT NULL,
  `COD_POSTAL` int(11) DEFAULT NULL,
  `LOCALIDAD` varchar(44) DEFAULT NULL,
  `PROVINCIA` varchar(44) DEFAULT NULL,
  `TLF` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(25) DEFAULT NULL,
  `TIPO_USU` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`NOM_USU`, `PASSWORD`, `NOMBRE`, `APELLIDOS`, `DIRECCION`, `COD_POSTAL`, `LOCALIDAD`, `PROVINCIA`, `TLF`, `EMAIL`, `TIPO_USU`) VALUES
('ADMIN', '81dc9bdb52d04dc20036dbd8313ed055', 'ADMINISTRADOR', 'ADMIN', 'DESCONOCIDA', 41010, 'SEVILLA', 'SEVILLA', '954798989', 'ADMIN@LIBRERIA.COM', 'A'),
('administrador', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', 'admin', 'c/tejares', 41010, 'sevilla', 'sevilla', '646883399', 'admin@gmail.com', 'A'),
('DIEGO15', '2e99bf4e42962410038bc6fa4ce40d97', 'DIEGO', 'LEON GARCIA', 'C/ESPERANZA DE TRIANA', 41010, 'SEVILLA', 'SEVILLA', '656474896', 'DIE23@YAHOO.ES', 'C'),
('ISMA85', '81dc9bdb52d04dc20036dbd8313ed055', 'ISMAEL', 'BRAVO GONZÁLEZ', 'C/TEJARES', 41010, 'SEVILLA', 'SEVILLA', '646926839', 'ismaelbg@hotmail.es', 'C'),
('ISMAEL', '81dc9bdb52d04dc20036dbd8313ed055', 'ISMA', 'BRAVO', 'C/TEJARES', 41010, 'SEVILLA', 'SEVILLA', '646926839', 'ismaelbg@gmail.com', 'C'),
('JAVI', '81dc9bdb52d04dc20036dbd8313ed055', 'JAVIER', 'CUMPLIDO', 'C/PALOMARES', 41010, 'SEVILLA', 'SEVILLA', '67688786', 'javi@gmail.es', 'C'),
('JAVIER', '81dc9bdb52d04dc20036dbd8313ed055', 'JAVI', 'CUMPLIDO', 'C/PALOMARES', 41010, 'SEVILLA', 'SEVILLA', '67688786', 'javi@gmail.com', 'C'),
('JUANLUS', '81dc9bdb52d04dc20036dbd8313ed055', 'JUAN LUIS', 'RODRIGUEZ MORENO', 'C/LUIS MONTOTO', 41009, 'SEVILLA', 'SEVILLA', '647564784', 'JUANLUS@GMAIL.COM', 'C'),
('pepe', '926e27eecdbc7a18858b3798ba99bddd', 'pepe', 'garcia', 'tejares', 41010, 'sevilla', 'sevilla', '646934578', 'pepe@hotmail.com', 'C'),
('RICARD12', '81dc9bdb52d04dc20036dbd8313ed055', 'RICARDO', 'MORENO BRAVO', 'RONDA DE TRIANA', 41010, 'SEVILLA', 'SEVILLA', '954676785', 'ROBERT12@GMAIL.COM', 'C'),
('ROBERT', '81dc9bdb52d04dc20036dbd8313ed055', 'ROBERTO', 'LINARES MARIN', 'C/LUIS MONTOTO', 41009, 'SEVILLA', 'SEVILLA', '657575654', 'ROBERT12@HOTMAIL.COM', 'C');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD PRIMARY KEY (`ISBN`,`ID_PEDIDOS`),
  ADD KEY `DETALLE_LIBROS_FK` (`ISBN`),
  ADD KEY `DETALLE_PEDIDOS_FK` (`ID_PEDIDOS`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`ID_GEN`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`ISBN`),
  ADD KEY `LIBROS_GENERO_FK` (`ID_GEN`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID_PEDIDOS`),
  ADD KEY `PEDIDOS_USUARIOS_FK` (`NOM_USU`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`NOM_USU`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ID_PEDIDOS` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD CONSTRAINT `FK_ASS_12` FOREIGN KEY (`ISBN`) REFERENCES `libros` (`ISBN`),
  ADD CONSTRAINT `FK_DETALLE_PEDIDOS` FOREIGN KEY (`ID_PEDIDOS`) REFERENCES `pedidos` (`ID_PEDIDOS`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `LIBROS_GENERO_FK` FOREIGN KEY (`ID_GEN`) REFERENCES `genero` (`ID_GEN`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `PEDIDOS_USUARIOS_FK` FOREIGN KEY (`NOM_USU`) REFERENCES `usuarios` (`NOM_USU`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
