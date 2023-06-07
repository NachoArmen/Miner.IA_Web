<?php
require_once('ORM/orm.php');
class Mineral
{   public $id;
    public $nombre;
    public $descripcion;
    public $imagen;
    public $precio;
   // id	Nombre	Descripcion	Precio	img	No esta guardando imagenes 

    function __construct($nombre , $descripcion , $precio , $imagen)
    {
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->precio=$precio;
        $this->imagen=$imagen;
       
    }

    public function get_nombre()
    {
        return $this->nombre;
    }

    public function set_nombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function get_descripcion()
    {
        return $this->descripcion;
    }

    public function set_descripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function get_imagen()
    {
        return $this->imagen;
    }

    public function set_imagen($imagen)
    {
        $this->descripcion = $imagen;
    }

  
    public function get_precio()
    {
        return $this->precio;
    }

    public function set_precio($precio)
    {
        $this->precio = $precio;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }
   
}

/*Creamos los objetos país
//$arg = new Pais("Argentina", " ", "imgs/argentina.jpg");
//$uru = new Pais("Uruguay", " ", "imgs/uruguay.jpg");
$chi = new Pais("Chile", " ", "imgs/chile.jpg");
$bra = new Pais("Brasil", " ", "imgs/brasil.jpg");
$per = new Pais("Perú", " ", "imgs/peru.jpg");
$mex = new Pais("México", " ", "imgs/mexico.jpg");



//Les damos sus descripciones
//$arg->set_descripcion("Argentina es un país sudamericano de gran envergadura con un terreno que incluye las montañas de los Andes, lagos glaciales y praderas en las Pampas, la tierra tradicional de pastoreo de su famoso ganado. El país es conocido por el baile y la música del tango.");
//$uru->set_descripcion("Uruguay es un país de Sudamérica conocido por su interior verde y costa bordeada de playas. La capital, Montevideo, se ubica en torno a la plaza Independencia, donde alguna vez hubo una ciudadela española. Esta lleva a la Ciudad Vieja, con edificios art deco, casas coloniales y el Mercado del Puerto con muchos restaurantes de carnes.");
$chi->set_descripcion("Chile es un país largo y angosto que se extiende por el borde occidental de Sudamérica, con más de 6,000 km de costa en el océano Pacífico. Santiago, su capital, se ubica en un valle rodeado de los Andes y la cordillera de la Costa. En la Plaza de Armas de la ciudad, bordeada de palmeras, se encuentra la catedral neoclásica y el Museo de Historia Nacional.");
$bra->set_descripcion("Brasil es un vasto país de Sudamérica que se extiende desde la Cuenca del Amazonas en el norte hasta los viñedos y las enormes cataratas del Iguazú en el sur. Río de Janeiro, simbolizado por su estatua de 38 m del Cristo Redentor sobre el cerro del Corcovado, es famoso por sus ajetreadas playas Copacabana e Ipanema, junto con su enorme y estridente festival del Carnaval, que cuenta con carros alegóricos, exuberantes disfraces y danza y música samba.");
$per->set_descripcion("Perú es un país de Sudamérica que abarca una sección del bosque del Amazonas y Machu Picchu, una antigua ciudad inca en las alturas de los Andes. La región en torno a Machu Picchu, incluido el Valle Sagrado, el Camino del Inca y la ciudad colonial de Cuzco, es rica en sitios arqueológicos. En la costa árida del Pacífico de Perú se encuentra Lima, la capital, con un centro colonial preservado e importantes colecciones de arte precolombino.");
$mex->set_descripcion("México es un país entre los Estados Unidos y América Central, conocido por las playas en el Pacífico y el golfo de México, y su diverso paisaje de montañas, desiertos y selvas. Las ruinas antiguas, como Teotihuacán y la ciudad maya de Chichén Itzá, se distribuyen por el país, al igual que las ciudades de la época colonial española.");

insertarDB($chi);
insertarDB($bra);*/