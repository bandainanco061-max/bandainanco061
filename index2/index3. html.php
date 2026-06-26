<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página Web del Colegio</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f4f4f4;
}

/* Pantalla de bienvenida */

#bienvenida{
    width:100%;
    height:100vh;

    background-image:
    linear-gradient(rgba(0,80,0,0.45),rgba(0,80,0,0.45)),
    url("imagenes/colegio.jpg");

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    color:white;

    display:flex;
    justify-content:center;
    align-items:center;
    flex-direction:column;

    text-align:center;
}

#bienvenida h1{
    font-size:55px;
    text-shadow:3px 3px 8px black;
}

#bienvenida p{
    margin:20px;
    font-size:22px;
    text-shadow:2px 2px 6px black;
}

button{
    padding:12px 25px;
    font-size:18px;
    background:white;
    color:#2E7D32;
    border:none;
    border-radius:8px;
    cursor:pointer;
    transition:.3s;
}

button:hover{
    background:#d9ffd9;
    transform:scale(1.05);
}

/* Página principal */

#principal{
    display:none;
}

header{
    background:#2E7D32;
    color:white;
    text-align:center;
    padding:20px;
}

nav{
    background:#1B5E20;
}

nav ul{
    list-style:none;
    display:flex;
    justify-content:center;
}

nav ul li{
    position:relative;
}

nav ul li a{
    color:white;
    text-decoration:none;
    display:block;
    padding:15px 25px;
}

nav ul li:hover{
    background:#388E3C;
}

nav ul li ul{
    display:none;
    position:absolute;
    background:#388E3C;
    min-width:180px;
}

nav ul li:hover ul{
    display:block;
}

nav ul li ul li{
    width:100%;
}

section{
    display:none;
    padding:30px;
}

.activo{
    display:block;
}

footer{
    text-align:center;
    background:#1B5E20;
    color:white;
    padding:15px;
    margin-top:20px;
}

input,textarea{
    width:100%;
    padding:10px;
    margin:10px 0;
    border:1px solid #999;
    border-radius:5px;
}

.enviar{
    background:#2E7D32;
    color:white;
}

.enviar:hover{
    background:#1B5E20;
}

</style>

</head>

<body>

<!-- Bienvenida -->

<div id="bienvenida">

<h1>¡Bienvenido!</h1>

<p>Sistema Web del Colegio</p>

<button onclick="entrar()">Ingresar</button>

</div>

<!-- Página principal -->

<div id="principal">

<header>

<h1>Unidad Educativa</h1>

</header>

<nav>

<ul>

<li><a href="#" onclick="mostrar('inicio')">Inicio</a></li>

<li>

<a href="#">Colegio ▼</a>

<ul>

<li><a href="#" onclick="mostrar('mision')">Misión</a></li>

<li><a href="#" onclick="mostrar('vision')">Visión</a></li>

</ul>

</li>

<li><a href="#" onclick="mostrar('actividades')">Actividades</a></li>

<li><a href="#" onclick="mostrar('panel')">Panel Informativo</a></li>

<li><a href="#" onclick="mostrar('formulario')">Consulta a Profesores</a></li>

</ul>

</nav>

<section id="inicio" class="activo">

<h2>Bienvenido</h2>

<p>Bienvenido al portal oficial del colegio. Desde este sitio podrás conocer nuestra institución, actividades, noticias y comunicarte con los profesores.</p>

</section>

<section id="mision">

<h2>Misión</h2>

<p>Brindar una educación integral formando estudiantes con valores, conocimientos y habilidades para afrontar los retos del futuro.</p>

</section>

<section id="vision">

<h2>Visión</h2>

<p>Ser una institución educativa reconocida por su excelencia académica, innovación y formación de ciudadanos responsables.</p>

</section>

<section id="actividades">

<h2>Actividades</h2>

<ul>

<li>📚 Feria Científica.</li>

<li>⚽ Campeonatos Deportivos.</li>

<li>🎭 Festival Cultural.</li>

<li>💻 Talleres de Tecnología.</li>

<li>🌳 Campañas de Medio Ambiente.</li>

</ul>

</section>

<section id="panel">

<h2>Panel Informativo</h2>

<ul>

<li>📅 Reunión de padres de familia: Viernes 15 de julio.</li>

<li>📝 Inscripciones abiertas para actividades deportivas.</li>

<li>📖 Exámenes finales iniciarán el próximo mes.</li>

</ul>

</section>

<section id="formulario">

<h2>Consulta a los Profesores</h2>

<form>

<label>Nombre:</label>

<input type="text" placeholder="Ingrese su nombre">

<label>Correo:</label>

<input type="email" placeholder="Ingrese su correo">

<label>Profesor:</label>

<input type="text" placeholder="Nombre del profesor">

<label>Consulta:</label>

<textarea rows="5" placeholder="Escriba su consulta"></textarea>

<input class="enviar" type="submit" value="Enviar Consulta">

</form>

</section>

<footer>

© 2026 - Página Web del Colegio

</footer>

</div>

<script>

function entrar(){

document.getElementById("bienvenida").style.display="none";
document.getElementById("principal").style.display="block";

}

function mostrar(id){

let secciones=document.querySelectorAll("section");

secciones.forEach(function(sec){
sec.classList.remove("activo");
});

document.getElementById(id).classList.add("activo");

}

</script>

</body>
</html>