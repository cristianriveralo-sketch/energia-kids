<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina estatica de ciencias naturales con informacion educativa, imagenes, videos y actividades.">
    <title>Ciencia Page | Ciencias Naturales</title>
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
            <a href="#ecosistemas">Ecosistemas</a>
            <a href="#galeria">Galeria</a>
            <a href="#videos">Videos</a>
            <a href="{{ route('activities') }}">Actividades</a>
        </nav>
    </header>

    <main id="inicio">
        <section class="hero-section hero-home">
            <div class="hero-content">
                <span class="eyebrow">Ciencias naturales</span>
                <h1>Aprende sobre la vida, el agua, la tierra y los ecosistemas.</h1>
                <p>
                    Una pagina estatica en Laravel para presentar contenidos educativos,
                    recursos visuales y actividades de ciencias naturales.
                </p>
                <div class="hero-actions" aria-label="Acciones principales">
                    <a class="primary-link" href="{{ route('activities') }}">Ver actividades</a>
                    <a class="secondary-link" href="#galeria">Explorar recursos</a>
                </div>
            </div>

            <div class="hero-media" aria-label="Imagen principal simulada">
                <div class="science-board">
                    <div class="board-top">
                        <span>Laboratorio natural</span>
                        <strong>4 modulos</strong>
                    </div>
                    <div class="specimen-grid">
                        <div><span></span><p>Flora</p></div>
                        <div><span></span><p>Agua</p></div>
                        <div><span></span><p>Suelo</p></div>
                        <div><span></span><p>Clima</p></div>
                    </div>
                </div>
                <div class="fact-panel">
                    <strong>Dato natural</strong>
                    <p>Los ecosistemas conectan plantas, animales, agua, suelo y clima.</p>
                </div>
            </div>
        </section>

        <section class="section stats-band" aria-label="Resumen de contenido">
            <article>
                <strong>12</strong>
                <span>temas para explicar</span>
            </article>
            <article>
                <strong>4</strong>
                <span>espacios de galeria</span>
            </article>
            <article>
                <strong>1</strong>
                <span>vista de actividades</span>
            </article>
        </section>

        <section class="section intro-band" aria-labelledby="resumen-title">
            <div>
                <span class="section-label">Aprendizaje visual</span>
                <h2 id="resumen-title">Contenido listo para imagenes, videos y fichas educativas</h2>
            </div>
            <p>
                La pagina esta preparada para reemplazar los espacios simulados por fotos,
                infografias o clips educativos cuando tengas los archivos finales.
            </p>
        </section>

        <section class="section" id="ecosistemas" aria-labelledby="ecosistemas-title">
            <div class="section-heading">
                <span class="section-label">Temas principales</span>
                <h2 id="ecosistemas-title">Areas de ciencias naturales</h2>
            </div>

            <div class="topic-grid">
                <article class="topic-card">
                    <div class="card-icon leaf-icon"></div>
                    <h3>Biodiversidad</h3>
                    <p>Especies, habitats y la importancia de conservar la vida del planeta.</p>
                </article>
                <article class="topic-card">
                    <div class="card-icon water-icon"></div>
                    <h3>Ciclo del agua</h3>
                    <p>Evaporacion, condensacion, precipitacion y cuidado de fuentes hidricas.</p>
                </article>
                <article class="topic-card">
                    <div class="card-icon soil-icon"></div>
                    <h3>Ecosistemas</h3>
                    <p>Bosques, rios, montanas y relaciones entre seres vivos y ambiente.</p>
                </article>
            </div>
        </section>

        <section class="split-section">
            <div class="text-block">
                <span class="section-label">Naturaleza en contexto</span>
                <h2>Un diseno mas completo para mostrar informacion escolar o institucional</h2>
                <p>
                    Puedes usar esta base para publicar articulos cortos, fichas educativas,
                    galerias de campo, videos de laboratorio o material de apoyo para clases.
                </p>
                <a class="inline-link" href="{{ route('activities') }}">Entrar a actividades</a>
            </div>
            <div class="image-stack" aria-label="Imagenes secundarias simuladas">
                <div class="placeholder-photo photo-forest"><span>Imagen bosque</span></div>
                <div class="placeholder-photo photo-lab"><span>Imagen laboratorio</span></div>
            </div>
        </section>

        <section class="section gallery-section" id="galeria" aria-labelledby="galeria-title">
            <div class="section-heading">
                <span class="section-label">Galeria</span>
                <h2 id="galeria-title">Espacios para imagenes y recursos</h2>
            </div>

            <div class="gallery-grid">
                <figure>
                    <div class="placeholder-photo photo-flora"></div>
                    <figcaption>Flora nativa</figcaption>
                </figure>
                <figure>
                    <div class="placeholder-photo photo-water"></div>
                    <figcaption>Fuentes de agua</figcaption>
                </figure>
                <figure>
                    <div class="placeholder-photo photo-wild"></div>
                    <figcaption>Vida silvestre</figcaption>
                </figure>
                <figure>
                    <div class="placeholder-photo photo-field"></div>
                    <figcaption>Practica de campo</figcaption>
                </figure>
            </div>
        </section>

        <section class="section activity-preview" aria-labelledby="actividad-preview-title">
            <div>
                <span class="section-label">Nueva vista</span>
                <h2 id="actividad-preview-title">Actividades tipo juego para reforzar temas</h2>
                <p>
                    Incluye tarjetas descriptivas para retos, observacion, clasificacion y
                    exploracion. Los botones quedan listos para redirigir cuando definas el destino.
                </p>
            </div>
            <a class="primary-link" href="{{ route('activities') }}">Abrir actividades</a>
        </section>

        <section class="section video-section" id="videos" aria-labelledby="videos-title">
            <div class="video-copy">
                <span class="section-label">Video educativo</span>
                <h2 id="videos-title">Bloque preparado para insertar videos</h2>
                <p>
                    Cambia este recuadro por un video local, un enlace de YouTube o un
                    recurso multimedia sobre ciencias naturales.
                </p>
            </div>
            <div class="video-placeholder" aria-label="Video simulado">
                <span class="play-symbol">Play</span>
                <span>Video de ciencias naturales</span>
            </div>
        </section>
    </main>

    <footer class="site-footer" id="contacto">
        <div class="footer-main">
            <a class="brand footer-brand" href="{{ url('/') }}" aria-label="Ciencia Page inicio">
                <span class="brand-mark"></span>
                <span>Ciencia Page</span>
            </a>
            <p>Proyecto estatico en Laravel para ciencias naturales, imagenes, videos y actividades.</p>
        </div>
        <div class="footer-links" aria-label="Enlaces del sitio">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ route('activities') }}">Actividades</a>
            <a href="#galeria">Galeria</a>
            <a href="#videos">Videos</a>
        </div>
        <div class="footer-bottom">
            <span>Diseno verde claro, oscuro y blanco.</span>
            <span>Listo para reemplazar recursos simulados.</span>
        </div>
    </footer>
</body>
</html>
