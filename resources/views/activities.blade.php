<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Actividades educativas de ciencias naturales listas para conectar con juegos o enlaces externos.">
    <title>Actividades | Ciencia Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
        <a class="brand" href="{{ url('/') }}" aria-label="Ciencia Page inicio">
            <span class="brand-mark"></span>
            <span>Ciencia Page</span>
        </a>

        <nav class="site-nav" aria-label="Navegacion principal">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ url('/#ecosistemas') }}">Ecosistemas</a>
            <a href="{{ url('/#galeria') }}">Galeria</a>
            <a href="{{ route('activities') }}">Actividades</a>
        </nav>
    </header>

    <main>
        <section class="hero-section activities-hero">
            <div class="hero-content">
                <span class="eyebrow">Actividades educativas</span>
                <h1>Retos tipo juego para explorar ciencias naturales.</h1>
                <p>
                    Esta vista organiza actividades descriptivas. Cada tarjeta puede convertirse
                    luego en un juego real, una pagina interna o un enlace externo.
                </p>
                <div class="hero-actions" aria-label="Acciones principales">
                    <a class="primary-link" href="#retos">Ver retos</a>
                    <a class="secondary-link" href="{{ url('/') }}">Volver al inicio</a>
                </div>
            </div>

            <div class="activity-console" aria-label="Panel de actividades">
                <div class="console-screen">
                    <span>Modo explorador</span>
                    <strong>Selecciona una mision</strong>
                </div>
                <div class="console-options">
                    <span>Observar</span>
                    <span>Clasificar</span>
                    <span>Resolver</span>
                </div>
            </div>
        </section>

        <section class="section mission-strip" aria-label="Mensaje de actividades">
            <p>
                Mensaje sugerido: completa la actividad, observa las pistas y aprende como se
                relacionan los seres vivos con su entorno.
            </p>
            <a href="#proximamente">Link pendiente</a>
        </section>

        <section class="section" id="retos" aria-labelledby="retos-title">
            <div class="section-heading">
                <span class="section-label">Retos disponibles</span>
                <h2 id="retos-title">Actividades que luego pueden redirigir</h2>
            </div>

            <div class="activity-grid">
                <article class="activity-card">
                    <span class="activity-number">01</span>
                    <h3>Clasifica el ecosistema</h3>
                    <p>El estudiante identifica si una imagen pertenece a bosque, rio, montana o humedal.</p>
                    <a href="#proximamente">Abrir actividad</a>
                </article>
                <article class="activity-card">
                    <span class="activity-number">02</span>
                    <h3>Ruta del agua</h3>
                    <p>Un recorrido guiado para ordenar evaporacion, condensacion, lluvia y rios.</p>
                    <a href="#proximamente">Abrir actividad</a>
                </article>
                <article class="activity-card">
                    <span class="activity-number">03</span>
                    <h3>Memoria natural</h3>
                    <p>Pares de conceptos: animal, habitat, alimento, planta y funcion en el ecosistema.</p>
                    <a href="#proximamente">Abrir actividad</a>
                </article>
                <article class="activity-card">
                    <span class="activity-number">04</span>
                    <h3>Detective ambiental</h3>
                    <p>Lectura corta con pistas para reconocer un problema ambiental y una solucion.</p>
                    <a href="#proximamente">Abrir actividad</a>
                </article>
            </div>
        </section>

        <section class="section game-info" id="proximamente" aria-labelledby="proximamente-title">
            <div>
                <span class="section-label">Siguiente paso</span>
                <h2 id="proximamente-title">Zona lista para conectar enlaces</h2>
            </div>
            <p>
                Aqui puedes poner un mensaje final y decidir despues si el boton redirige a otra
                vista de Laravel, a un juego hecho en JavaScript, a YouTube o a un recurso externo.
            </p>
            <a class="primary-link" href="{{ url('/') }}">Regresar a la pagina principal</a>
        </section>
    </main>

    <footer class="site-footer" id="contacto">
        <div class="footer-main">
            <a class="brand footer-brand" href="{{ url('/') }}" aria-label="Ciencia Page inicio">
                <span class="brand-mark"></span>
                <span>Ciencia Page</span>
            </a>
            <p>Vista de actividades lista para convertir tarjetas en juegos o enlaces reales.</p>
        </div>
        <div class="footer-links" aria-label="Enlaces del sitio">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ route('activities') }}">Actividades</a>
            <a href="{{ url('/#galeria') }}">Galeria</a>
            <a href="{{ url('/#videos') }}">Videos</a>
        </div>
        <div class="footer-bottom">
            <span>Sin base de datos.</span>
            <span>Contenido estatico editable desde Blade.</span>
        </div>
    </footer>
</body>
</html>
