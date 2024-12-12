<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - E-commerce</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #121212; 
            color: #ffffff; 
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #1f1f1f; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        header h1 {
            font-size: 1.5rem;
            color: #00d1ff; 
        }
       
        
        .products-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px; 
            }
     
        footer {
            text-align: center;
            padding: 10px;
            background-color: #1f1f1f;
            color: #666666;
        }

        

.btn {
 display: inline-block;
 padding: 0.9rem 1.8rem;
 font-size: 16px;
 font-weight: 700;
 color: white;
 border: 3px solid rgb(252, 70, 100);
 cursor: pointer;
 position: relative;
 background-color: transparent;
 text-decoration: none;
 overflow: hidden;
 z-index: 1;
 font-family: inherit;
}

.btn::before {
 content: "";
 position: absolute;
 left: 0;
 top: 0;
 width: 100%;
 height: 100%;
 background-color: rgb(252, 70, 100);
 transform: translateX(-100%);
 transition: all .3s;
 z-index: -1;
}

.btn:hover::before {
 transform: translateX(0);
}
section.card {
  position: relative;
  width: 250px;
  height: 250px;
  background-color: black;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  perspective: 1000px;
  transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card svg {
  fill: #000;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  border-radius: 3px;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px #000000;
  background-color: #a5a5a5; 
  color: #ffffff; 
}

.card__content {
  color: #000000;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  padding: 20px;
  box-sizing: border-box;
  background-color: #98cfa6;
  transform: rotateX(-90deg);
  transform-origin: bottom;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card:hover .card__content {
  transform: rotateX(0deg);
}

.card__title {
  margin: 0;
  font-size: 18px;
  color: #000000;
  font-weight: 700;
}

.card__description {
  margin: 10px 0 0;
  font-size: 14px;
  color: #000000;
  line-height: 1.4;
}

.card:hover svg {
  scale: 0; 
}

    </style>
</head>
<body>
<header>
    <h1>E-commerce</h1>
    <div class="header-btns">
     <a href="../php/ligon.php" class="btn">Agregar producto</a>
      <a href="../php/login.php" class="btn">Crear cuenta</a>
    </div>
</header>

    <main>
        <div class="products-container">
        <section id="card1" class="card">
  <img src="../php/imagenes/tecladocomun.jpg" alt="teclaado">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Teclado gamer mecanico</p>
    <p class="card__description">
      <strong>Precio:</strong> $20,000<br>
      <strong>Descripción:</strong> Un teclado buenisimo,se maneja solo de lo bueno que es<br>
      <strong>Marca:</strong> XYZ teclados<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
 <img src="../php/imagenes/celu.jpg" alt="telefono">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Samsung galaxy s25</p>
    <p class="card__description">
      <strong>Precio:</strong> $2,000,000<br>
      <strong>Descripción:</strong> Un smartphone con pantalla OLED y gran rendimiento.<br>
      <strong>Marca:</strong> Samsung<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
 <img src="../php/imagenes/compu.jpg" alt="computadora">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Computadora HP</p>
    <p class="card__description">
      <strong>Precio:</strong> $1,000,000<br>
      <strong>Descripción:</strong> Una comptaora con buen rendimiento. 16 de ram y un tera de almacenamiento<br>
      <strong>Marca:</strong> HP<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
 <img src="../php/imagenes/noteboock.png" alt="computadora">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Computadora lenovo</p>
    <p class="card__description">
      <strong>Precio:</strong> $300,000<br>
      <strong>Descripción:</strong> La vendo porque no tiene buen rendimiento y es malisimo,no sirve para abrir el google<br>
      <strong>Marca:</strong>Lenovo<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>        
<section id="card1" class="card">
  <img src="../php/imagenes/setup3.png" alt="setup">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Setup gamer</p>
    <p class="card__description">
      <strong>Precio:</strong> $500,000<br>
      <strong>Descripción:</strong> Hola,vendo este setup gamer porque al cliente no le gusto :c<br>
      <strong>Marca:</strong> No se<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
 <img src="../php/imagenes/teclado.jpg" alt="teclado">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Teclado comun</p>
    <p class="card__description">
      <strong>Precio:</strong> $5,000<br>
      <strong>Descripción:</strong> Un teclado de ofinica que brilla,es re raro.<br>
      <strong>Marca:</strong> Noga<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
 <img src="../php/imagenes/silla.jpg" alt="silla">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Silla gamer </p>
    <p class="card__description">
      <strong>Precio:</strong> $500,000<br>
      <strong>Descripción:</strong> Una silla gamer bastante comoda,ahora mismo esta en oferta.<br>
      <strong>Marca:</strong>Sillas super comoda<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
 <img src="../php/imagenes/gru.webp" alt="">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Call of gruty</p>
    <p class="card__description">
      <strong>Precio:</strong> $50,00<br>
      <strong>Descripción:</strong> Vendemos call of gruty para todas las consolas.<br>
      <strong>Marca:</strong> Mundo gamer<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
 <img src="../php/imagenes/anteojo.jpg" alt="anteojo">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Anteojos con camara</p>
    <p class="card__description">
      <strong>Precio:</strong> $180,000<br>
      <strong>Descripción:</strong>Anteojos con camra,graba con una buena resolucion,amigo alto miedo da estos anteojos.<br>
      <strong>Marca:</strong> Ray-Ban Stories<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
 <img src="../php/imagenes/af.jpg" alt="dragon ball">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Dragon ball af para la playstation2</p>
    <p class="card__description">
      <strong>Precio:</strong> $5,000<br>
      <strong>Descripción:</strong> Vendo juego de dragon ball af.<br>
      <strong>Marca:</strong> No se<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
 <img src="../php/imagenes/pou.webp" alt="pou 3">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Pou 3</p>
    <p class="card__description">
      <strong>Precio:</strong> $15,000<br>
      <strong>Descripción:</strong> Vendo el pou 3 para playstation4.<br>
      <strong>Marca:</strong> Ni idea<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
  <img src="../php/imagenes/raton3.webp" alt="raton">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Ratom gamer</p>
    <p class="card__description">
      <strong>Precio:</strong> $50,000<br>
      <strong>Descripción:</strong> Un raton gamer un poquito raro,lo vendo a buen precio.<br>
      <strong>Marca:</strong> XYZ Tech<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
 <img src="../php/imagenes/pieza.jpg" alt="pieza gamer">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Pieza gamer</p>
    <p class="card__description">
      <strong>Precio:</strong> $5,000<br>
      <strong>Descripción:</strong>Alquilo pieza gamer,5k la hora.<br>
      <strong>Marca:</strong> piezas gamer<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
  <img src="../php/imagenes/escor.jpg" alt="setup scorpion">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Setup gamer en forma de scorpion</p>
    <p class="card__description">
      <strong>Precio:</strong> $5,000,000<br>
      <strong>Descripción:</strong> Vendo setup gamer en forma de scorpion,es bastatnte malo,pero mira la facha que tiene.<br>
      <strong>Marca:</strong>Cluvens <br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
  <img src="../php/imagenes/Captura de pantalla 2024-12-10 210008.png" alt="red magic">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Celular gama baja</p>
    <p class="card__description">
      <strong>Precio:</strong> $300,000<br>
      <strong>Descripción:</strong> Vendo celular que tiene pinta de ser gamer pero es malisino.<br>
      <strong>Marca:</strong> Red magic<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
  <img src="../php/imagenes/ben10.png" alt="setup ben 10">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Setup gamer de ben 10</p>
    <p class="card__description">
      <strong>Precio:</strong> $500,000<br>
      <strong>Descripción:</strong> Vendo setup de ben 10,es re potente y fachero.<br>
      <strong>Marca:</strong> Ben 110<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
  <img src="../php/imagenes/omg.png" alt="omnitrix">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre:Omnitrix</p>
    <p class="card__description">
      <strong>Precio:</strong> $20,000,000<br>
      <strong>Descripción:</strong> Vendo toda la coleccion de omnitrix que funcionan 100% real no fake.<br>
      <strong>Marca:</strong> Ben 110<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
  <img src="../php/imagenes/cocina.jpg" alt="cocina">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Cocina gamer</p>
    <p class="card__description">
      <strong>Precio:</strong> $300,000<br>
      <strong>Descripción:</strong> Es solo una cocina.<br>
      <strong>Marca:</strong> Cocina con estilo<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
  <img src="../php/imagenes/fifa.jpg" alt="fifa 25">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: FC 25</p>
    <p class="card__description">
      <strong>Precio:</strong> $20,000<br>
      <strong>Descripción:</strong> Vendo fc25,es exactamente lo mismo que el fc24.<br>
      <strong>Marca:</strong> ea fc<br>
      <strong>Stock:</strong> Disponible
    </p>
  </div>
</section>
<section id="card1" class="card">
 <img src="../php/imagenes/momo.jpg" alt="momo">
    <path
      d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"
    ></path>
  </svg>
  <div class="card__content">
    <p class="card__title">Nombre: Entrenador gamer italiano</p>
    <p class="card__description">
      <strong>Precio:</strong> $300,000<br>
      <strong>Descripción:</strong> Es un chabon que te enseña cosas de juegos,tenes que saber italiano para entenderlo.<br>
      <strong>Marca:</strong> Momo<br>
    </p>
  </div>
</section>
        </div>
        
</body>
</html>