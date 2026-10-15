<?php

$imagenpelis = [
    "imagenes/imagenpelicula1.jpg",
    "imagenes/imagenpelicula2.jpg",
    "imagenes/imagenpelicula3.jpg",
    "imagenes/imagenpelicula4.jpg",
    "imagenes/imagenpelicula5.jpg",
    "imagenes/imagenpelicula6.jpg",
    "imagenes/imagenpelicula7.jpg",
    "imagenes/imagenpelicula8.jpg",
    "imagenes/imagenpelicula9.jpg",
    "imagenes/imagenpelicula10.jpg"
];

$horarios = ["16:00", "17:50", "18:15", "18:35", "20:30", "22:00" ];

$peliculas = [ 
    [
        "nom"=>'Doraemon: aventuras en el mundo del arte',
        "fotopelicula"=>$imagenpelis[0],
        "descripcio"=>'Doraemon, Nobita y sus amigos entran dentro de 
        una pintura que los transporta a Artelia, un mundo ilustrado 
        inspirado en la Europa medieval. Junto a Claire y sus amigos 
        Milo y Chai, se embarcan en una gran aventura para recuperar 
        una misteriosa piedra azul.',
        'Duracio' => "104'",
        'Director'=> "Yukiyo Teramoto",
        'Clasificacio'=>"Apta",
        'Genere'=>"Animacion",
        'Trailer' => "https://www.youtube.com/embed/DgmGALXIsgA",
        'Opciones'=> ["hoy 9 de Octubre", "sábado 10 de Octubre", "domingo 11 de Octubre",
        "lunes 12 de Octubre", "martes 13 de Octubre", "miercoles 14 de Octubre", "Jueves 15 de Octubre"],

    ],
    [
        "nom"=>'Tadeo Jones y la lámpara maravillosa',
        "fotopelicula"=>$imagenpelis[1],
        "descripcio"=>'Tadeo y Sara son ahora padres de Olimpia (Oli), una adorable e 
        intrépida niña de dos años. Y Momia no lleva nada bien haber dejado de ser el 
        centro de atención. Mientras están de vacaciones en Londres, Sara sigue la pista 
        hacia un objeto único: la lámpara maravillosa de Las mil y una noches. Y Momia, 
        presa de los celos, pide un deseo: viajar en el tiempo hasta el momento en que 
        era joven y todos le querían. Tadeo y Sara tienen que unir fuerzas para evitar
         que Momia cambie el curso de la historia y traer al grupo (Jeff, Belzoni y 
         Ramona incluidos) de vuelta a casa, a su época. Esta nueva aventura los llevará
          a cruzar el Océano Atlántico desde la mítica ciudad perdida de Paititi hasta 
          Grecia, y de allí a lo más profundo de Oriente Medio, hasta la misma cueva de 
          Ali Babá y los cuarenta ladrones.',
        'Duracio' => "94'",
        'Director'=> "Enrique Gato",
        'Clasificacio'=>"Apta",
        'Genere'=>"Animacion",
        'Trailer' => "https://www.youtube.com/embed/a7IDTIIFNSo",
        'Opciones'=> ["hoy 9 de Octubre", "sábado 10 de Octubre", "domingo 11 de Octubre",
        "lunes 12 de Octubre", "martes 13 de Octubre", "miercoles 14 de Octubre", "Jueves 15 de Octubre"],
    ],
    [
        "nom"=>'DIGGER',
        "fotopelicula"=>$imagenpelis[2],
        "descripcio"=>'El hombre más poderoso del mundo se embarca en una misión 
        frenética para demostrar que es el salvador de la humanidad antes de que 
        el desastre que ha desatado lo destruya todo.',
        'Duracio' => "128'",
        'Director'=> "Alejandro Gonzalez Iñarritu",
        'Actores'=> "Tom Cruise, John Goodman, Sandra Hüller",
        'Clasificacio'=>"16 años",
        'Genere'=>"Aventuras",
        'Trailer'=>"https://www.youtube.com/embed/4jNrucYsh4A",
        'Opciones'=> ["hoy 9 de Octubre", "sábado 10 de Octubre", "domingo 11 de Octubre",
        "lunes 12 de Octubre", "martes 13 de Octubre", "miercoles 14 de Octubre", "Jueves 15 de Octubre"],
    ],
    [
        "nom"=>'Insidious: Fuera del más allá',
        "fotopelicula"=>$imagenpelis[3],
        "descripcio"=>'La saga de terror vuelve a sus raíces sobrenaturales. 
        Una nueva protagonista se enfrenta a misteriosas apariciones que van mucho 
        más allá de los fenómenos de embrujamiento clásicos. El mal encuentra nuevos 
        caminos en la realidad. Un trío de acechadores se infiltra en un tranquilo 
        suburbio obligando a una nueva familia a entrar en el plano astral, 
        donde descubren una aterradora verdad: el Más Allá está sangrando en 
        el mundo real.',
        'Duracio' => "105'",
        'Director'=> "Jacob Chase",
        'Actores'=> "Brandon Perea, Sam Spruell, Amelia Eve, Lin Shaye",
        'Clasificacio'=>"16 años",
        'Genere'=>"Terror",
        'Trailer' => "https://www.youtube.com/embed/qAv9sb9DmJQ",
        'Opciones'=> ["hoy 9 de Octubre", "sábado 10 de Octubre", "domingo 11 de Octubre",
        "lunes 12 de Octubre", "martes 13 de Octubre", "miercoles 14 de Octubre", "Jueves 15 de Octubre"],    
    ],
    [
        "nom"=>'CARS (20 ANIVERSARIO)',
        "fotopelicula"=> $imagenpelis[4],
        "descripcio"=>'Hace 20 años, una parada en Radiador Springs nos enseñó que el 
        viaje importa tanto como cruzar la línea de meta.

        ‘Cars’ vuelve a los cines este octubre.',
        'Duracio' => "117'",
        'Director'=> "John Lasseter",
        'Clasificacio'=>"Apta",
        'Genere'=>"Animación",
        'Trailer' => "https://www.youtube.com/embed/bqkirDzqnSQ",
        'Opciones'=> ["hoy 9 de Octubre", "sábado 10 de Octubre", "domingo 11 de Octubre",
        "lunes 12 de Octubre", "martes 13 de Octubre", "miercoles 14 de Octubre", "Jueves 15 de Octubre"],    
    ],
    [
        "nom"=>'Resident Evil',
        "fotopelicula"=>$imagenpelis[5],
        "descripcio"=>'Basada en la saga de videojuegos de Capcom del mismo nombre. 
        En una reinvención totalmente nueva, el mensajero médico Bryan se ve inmerso
         en una carrera de acción sin descanso por la supervivencia, mientras el caos
          se desata a su alrededor.',
        'Duracio' => "95'",
        'Director'=> "Zach Cregger",
        'Actores'=> "Austin Abrams, Zach Cherry, Kali Reis, Paul Walter Hauser",
        'Clasificacio'=>"16 años",
        'Genere'=>"Terror",
        'Trailer' => "https://www.youtube.com/embed/wUUW5zTCPM0",
        'Opciones'=> ["hoy 9 de Octubre", "sábado 10 de Octubre", "domingo 11 de Octubre",
        "lunes 12 de Octubre", "martes 13 de Octubre", "miercoles 14 de Octubre", "Jueves 15 de Octubre"],       
    ],
    [
        "nom"=>'La Bola Negra',
        "fotopelicula"=>$imagenpelis[6],
        "descripcio"=>'Las vidas interconectadas de tres hombres en tres épocas 
        distintas. Tres existencias íntimamente ligadas por la sexualidad y el deseo,
        el dolor y la herencia; y una de las últimas obras, inacabada,
        de Federico García Lorca.',
        'Duracio' => "155'",
        'Director'=> "Javier Calvo",
        'Actores'=> "Guitarricadelafuente, Miguel Bernardeau, Carlos González, Penélope Cruz",
        'Clasificacio'=>"16 años",
        'Genere'=>"Drama",
        'Trailer' => "https://www.youtube.com/embed/nXkdGP4VVWI",
        'Opciones'=> ["hoy 9 de Octubre", "sábado 10 de Octubre", "domingo 11 de Octubre",
        "lunes 12 de Octubre", "martes 13 de Octubre", "miercoles 14 de Octubre", "Jueves 15 de Octubre"],       
    ],
    [
        "nom"=>'Escape room 2',
        "fotopelicula"=>$imagenpelis[7],
        "descripcio"=>'Cinco años después, Edu, Marina, Viky y Rai vuelven a coincidir 
        misteriosamente en un nuevo local de moda situado en lo alto de la montaña de 
        Montjuïc, donde antiguamente se encontraba el parque de atracciones. 
        No tardarán en darse cuenta de que aquel establecimiento no es lo que parece. 
        Pronto irán a parar a una antigua atracción, un túnel del terror que había 
        quedado sepultado, donde aparece un contador acompañado de un mensaje amenazador
        que les resulta inquietantemente familiar: tienen 60 minutos para salir o 
        morirán.',
        'Duracio' => "88'",
        'Director'=> "Hèctor Claramunt",
        'Actores'=> "Joel Joan, Ivan Massagué, Paula Vives, Mònica Pérez",
        'Clasificacio'=>"12 años",
        'Genere'=>"Comedia",
        'Trailer' => "https://www.youtube.com/embed/LKipBN8bSwk",
        'Opciones'=> ["hoy 9 de Octubre", "sábado 10 de Octubre", "domingo 11 de Octubre",
        "lunes 12 de Octubre", "martes 13 de Octubre", "miercoles 14 de Octubre", "Jueves 15 de Octubre"],      
    ],
    [
        "nom"=>'La maleta',
        "fotopelicula"=>$imagenpelis[8],
        "descripcio"=>'Laura y Nacho se han conocido en un vuelo, pero una vez que
        recojan sus maletas, su breve encuentro habrá terminado. Laura no quiere eso,
        así que propone un juego: si la primera maleta que sale es la de ella, esa 
        misma noche tendrán una cita. Nacho acepta y, para salirse con la suya, ella 
        coge la primera maleta que ve... sin saber que pertenece a unos terroristas.',
        'Duracio' => "107'",
        'Actores'=> "Alejandro Speitzer, David Lorente, Lucia Caraballo, Leonor Watling",
        'Clasificacio'=>"12 años",
        'Genere'=>"Comedia",
        'Trailer' => "https://www.youtube.com/embed/irSBaadK2qM",
        'Opciones'=> ["hoy 9 de Octubre", "sábado 10 de Octubre", "domingo 11 de Octubre",
        "lunes 12 de Octubre", "martes 13 de Octubre", "miercoles 14 de Octubre", "Jueves 15 de Octubre"],
    ],
    [
        "nom"=>'Spider-man: Brand New Day',
        "fotopelicula" => $imagenpelis[9],
        "descripcio"=>'Han pasado cuatro años desde los acontecimientos de No Way Home,
        y Peter Parker ahora es un adulto que vive completamente solo, ha desaparecido
        voluntariamente de las vidas y recuerdos de quienes ama. Combatiendo el crimen
        en una Nueva York que ya no conoce su nombre, se ha dedicado por completo a
        proteger su ciudad—un Spider-Man a tiempo completo—, pero a medida que aumentan
        las exigencias sobre él, la presión desencadena una evolución física que amenaza
        su existencia, al mismo tiempo que un extraño nuevo patrón de crímenes da lugar
        a una de las amenazas más poderosas a las que se ha enfrentado.',
        'Duracio' => "144'",
        'Director'=> "Destin Cretton",
        'Actores'=> "Tom Holland, Jacob Batalon, Zendaya, Sadie Sink",
        'Clasificacio'=>"12 años",
        'Genere'=>"Acción",
        'Trailer' => "https://www.youtube.com/embed/owfWVJoxXR4",
        'Opciones'=> ["hoy 9 de Octubre", "sábado 10 de Octubre", "domingo 11 de Octubre",
        "lunes 12 de Octubre", "martes 13 de Octubre", "miercoles 14 de Octubre", "Jueves 15 de Octubre"],
    ]

];








?>