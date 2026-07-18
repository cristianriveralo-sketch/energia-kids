<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página infantil sobre tipos de energía con explicaciones, imágenes y actividades interactivas.">
    <title>Energía Kids | Tipos de Energía</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/energia-favicon.svg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="site-shell">
    <header class="site-header">
        <a class="brand" href="{{ route('energia.home') }}" aria-label="Ir a la portada de Energía Kids">
            <span class="brand-mark" aria-hidden="true"></span>
            <span>Energía Kids</span>
        </a>
        <nav class="site-nav" aria-label="Navegación principal">
            <a href="#tipos">Tipos</a>
            <a href="#experimento">Experimento</a>
            <a href="#video">Video</a>
            <a href="#guia-docente">Guía PDF</a>
            <a href="#ruta">Ruta</a>
            <a href="{{ route('energia.activities') }}">Actividades</a>
            <a href="{{ route('energia.homework') }}">Tareas</a>
        </nav>
    </header>

    <main>
        <section class="hero-section">
            <div class="hero-copy">
                <span class="eyebrow">Ciencias para niños</span>
                <div class="teacher-banner" aria-label="Información del docente y la temática">
                    <span class="teacher-banner-icon" aria-hidden="true">★</span>
                    <div><strong>Tema de hoy: Tipos de energías</strong><span>Explora, juega y aprende con el Profe Oscar</span></div>
                </div>
                <h1>Descubre cómo la energía mueve el mundo.</h1>
                <p class="hero-topic">Aprende con el Profe Oscar</p>
                <p>
                    Aprende con imágenes, ejemplos cortos y retos sobre la energía solar, eólica,
                    hidráulica y eléctrica.
                </p>
                <div class="hero-actions">
                    <a class="primary-link" href="#tipos">Ver tipos de energía</a>
                    <a class="secondary-link" href="{{ route('energia.activities') }}">Jugar ahora</a>
                </div>
                <div class="hero-facts" aria-label="Datos rápidos">
                    <span><strong>4</strong> fuentes</span>
                    <span><strong>12</strong> retos</span>
                    <span><strong>1</strong> misión</span>
                </div>
            </div>
            <div class="hero-picture" aria-label="Paisaje con sol, viento, agua y electricidad">
                <img src="{{ asset('images/energia-hero-renovada.png') }}" alt="Paisaje infantil con sol, turbinas eólicas, paneles solares, río y batería">
            </div>
        </section>

        <section class="intro-strip" aria-label="Idea principal">
            <article>
                <img src="{{ asset('images/energia-lightning.png') }}" alt="Rayo de energía">
                <div>
                    <h2>¿Qué es la energía?</h2>
                    <p>Es la fuerza que permite iluminar, calentar, mover objetos y hacer funcionar aparatos.</p>
                </div>
            </article>
            <article>
                <img src="{{ asset('images/energia-leaf.png') }}" alt="Hoja verde">
                <div>
                    <h2>¿Por qué cuidarla?</h2>
                    <p>Usarla bien ayuda al planeta y nos enseña a aprovechar mejor la naturaleza.</p>
                </div>
            </article>
        </section>

        <section class="section-heading" id="tipos">
            <span class="eyebrow">Explora</span>
            <h2>Tipos de energía</h2>
            <p>Cada tarjeta muestra de dónde viene, qué hace y un ejemplo fácil de recordar.</p>
        </section>

        <section class="energy-grid" aria-label="Tipos de energía">
            <article class="energy-card energy-solar">
                <div class="card-image"><img src="{{ asset('images/energia-solar.png') }}" alt="Escena de energía solar con paneles"></div>
                <span class="energy-label">Solar</span>
                <h3>Llega desde el sol</h3>
                <p>Los paneles solares capturan la luz y la convierten en electricidad o calor.</p>
                <ul>
                    <li>Ejemplo: una lámpara solar del jardín.</li>
                    <li>Clave: luz + panel = energía.</li>
                </ul>
            </article>
            <article class="energy-card energy-wind">
                <div class="card-image"><img src="{{ asset('images/energia-wind.png') }}" alt="Escena de energía eólica con turbinas"></div>
                <span class="energy-label">Eólica</span>
                <h3>Nace con el viento</h3>
                <p>El aire mueve turbinas gigantes, como molinillos, para producir electricidad.</p>
                <ul>
                    <li>Ejemplo: parques de molinos.</li>
                    <li>Clave: viento + giro = energía.</li>
                </ul>
            </article>
            <article class="energy-card energy-water">
                <div class="card-image"><img src="{{ asset('images/energia-water.png') }}" alt="Escena de energía hidráulica con agua"></div>
                <span class="energy-label">Hidráulica</span>
                <h3>Usa agua en movimiento</h3>
                <p>Ríos, cascadas y represas pueden mover máquinas que generan electricidad.</p>
                <ul>
                    <li>Ejemplo: una represa.</li>
                    <li>Clave: agua + movimiento = energía.</li>
                </ul>
            </article>
            <article class="energy-card energy-electric">
                <div class="card-image"><img src="{{ asset('images/energia-battery.png') }}" alt="Batería que almacena energía"></div>
                <span class="energy-label">Eléctrica</span>
                <h3>Enciende aparatos</h3>
                <p>Viaja por cables, baterías y enchufes para prender luces, pantallas y juguetes.</p>
                <ul>
                    <li>Ejemplo: una linterna.</li>
                    <li>Clave: corriente + circuito = energía.</li>
                </ul>
            </article>
        </section>

        <section class="video-lab" id="video" aria-labelledby="video-title">
            <div class="video-copy">
                <span class="eyebrow">Mira y conversa</span>
                <h2 id="video-title">El laboratorio de las energías</h2>
                <p>Este espacio está listo para añadir un video de clase. Antes de reproducirlo, observa la imagen y nombra las cuatro energías que aparecen.</p>
                <ul class="video-checklist">
                    <li><span>1</span> Busca el panel solar.</li>
                    <li><span>2</span> Encuentra el viento en movimiento.</li>
                    <li><span>3</span> Descubre cómo el agua mueve la rueda.</li>
                </ul>
                <p class="video-note">Sugerencia para el docente: aquí puedes pegar después el enlace o archivo de tu video educativo. <a href="https://www.youtube.com/watch?v=y0yaGEygqFA" target="_blank" rel="noopener">Ver video de ejemplo ↗</a></p>
            </div>
            <div class="video-frame video-frame-embed">
                <iframe src="https://www.youtube-nocookie.com/embed/y0yaGEygqFA?rel=0" title="Video educativo de ejemplo sobre energía hidráulica para niños" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <p class="video-status">Ejemplo: energía hidráulica para niños - puedes reemplazar la URL por tu video</p>
            </div>
        </section>

        <section class="teacher-guide" id="guia-docente" aria-labelledby="guide-title">
            <div class="guide-icon" aria-hidden="true">▤</div>
            <div>
                <span class="eyebrow">Recurso para el docente</span>
                <h2 id="guide-title">Guía de clase: tipos de energías</h2>
                <p>Una ficha lista para el Profesor Oscar con objetivos, ruta de 35 minutos, preguntas para conversar y un cierre creativo.</p>
            </div>
            <div class="guide-actions">
                <a class="primary-link" href="{{ asset('documents/guia-docente-tipos-de-energia.pdf') }}" target="_blank" rel="noopener">Ver guía PDF</a>
                <span>Material de apoyo para clase</span>
            </div>
        </section>

        <section class="learning-band" id="experimento">
            <div class="learning-copy">
                <span class="eyebrow">Observa y aprende</span>
                <h2>Una misma casa puede usar varias energías.</h2>
                <p>
                    El sol carga un panel, el viento mueve turbinas, el agua produce electricidad y
                    la batería guarda energía para usarla después.
                </p>
                <div class="learning-list">
                    <div><img src="{{ asset('images/energia-home-bulb.png') }}" alt="Casa iluminada"><span>La luz necesita electricidad.</span></div>
                    <div><img src="{{ asset('images/energia-plug.png') }}" alt="Enchufe"><span>Los enchufes conectan aparatos.</span></div>
                    <div><img src="{{ asset('images/energia-leaf.png') }}" alt="Hoja"><span>Ahorrar energía cuida la naturaleza.</span></div>
                </div>
            </div>
            <div class="experiment-board">
                <h3>Mini experimento</h3>
                <p>Toca cada pista y responde en voz alta:</p>
                <div class="clue-grid">
                    <button type="button" data-clue="El sol puede calentar agua y alimentar paneles."><img src="{{ asset('images/energia-solar-panel.png') }}" alt=""><span>Sol</span></button>
                    <button type="button" data-clue="El viento mueve aspas como un molinillo."><img src="{{ asset('images/energia-wind-fan.png') }}" alt=""><span>Viento</span></button>
                    <button type="button" data-clue="El agua en movimiento puede encender ciudades."><img src="{{ asset('images/energia-water-drop.png') }}" alt=""><span>Agua</span></button>
                    <button type="button" data-clue="Una batería guarda energía para usarla después."><img src="{{ asset('images/energia-battery-green.png') }}" alt=""><span>Batería</span></button>
                </div>
                <p class="clue-output" data-clue-output>Elige una imagen para descubrir una pista.</p>
            </div>
        </section>

        <section class="mission-section" aria-labelledby="mission-title">
            <div class="mission-explorer">
                <span class="mission-bubble">¡Hola! Soy Lumen.<br>¿Aceptas la misión?</span>
                <img src="{{ asset('images/energia-explorer.png') }}" alt="Lumen, un niño explorador científico con una lupa y un rayo de energía">
            </div>
            <div class="mission-copy">
                <span class="eyebrow">Misión del día</span>
                <h2 id="mission-title">Conviértete en guardián de la energía</h2>
                <p>La energía es valiosa: antes de usarla, piensa si realmente la necesitas. Elige una acción y descubre tu poder verde.</p>
                <div class="mission-choices" data-home-mission>
                    <button type="button" data-mission-choice="Apago la luz al salir de una habitación.">Apago la luz al salir</button>
                    <button type="button" data-mission-choice="Desconecto el cargador cuando ya no carga.">Desconecto el cargador</button>
                    <button type="button" data-mission-choice="Aprovecho la luz del día para leer.">Aprovecho la luz del día</button>
                </div>
                <p class="mission-result" data-mission-result>Elige una acción para activar tu insignia verde.</p>
            </div>
        </section>

        <section class="route-section" id="ruta">
            <div class="section-heading compact">
                <span class="eyebrow">Ruta de clase</span>
                <h2>Aprende en cuatro pasos</h2>
            </div>
            <div class="route-grid">
                <article><span>1</span><h3>Observa</h3><p>Mira la imagen y nombra lo que ves.</p></article>
                <article><span>2</span><h3>Compara</h3><p>Une cada fuente con su energía.</p></article>
                <article><span>3</span><h3>Responde</h3><p>Completa frases cortas con las palabras correctas.</p></article>
                <article><span>4</span><h3>Explica</h3><p>Cuenta dónde has visto esa energía en tu casa o escuela.</p></article>
            </div>
        </section>

        <section class="activity-callout">
            <div>
                <span class="eyebrow">Ahora practica</span>
                <h2>Ve a las actividades interactivas.</h2>
                <p>Hay preguntas, pistas, imágenes y una barra de progreso para saber cuánto falta.</p>
                <a class="primary-link" href="{{ route('energia.activities') }}">Abrir actividades</a>
                <a class="secondary-link" href="{{ route('energia.homework') }}">Ver tareas</a>
            </div>
            <div class="clean-icon-board" aria-hidden="true">
                <img src="{{ asset('images/energia-solar-panel.png') }}" alt="">
                <img src="{{ asset('images/energia-wind-fan.png') }}" alt="">
                <img src="{{ asset('images/energia-water-drop.png') }}" alt="">
                <img src="{{ asset('images/energia-battery-green.png') }}" alt="">
                <img src="{{ asset('images/energia-plug.png') }}" alt="">
                <img src="{{ asset('images/energia-lightning.png') }}" alt="">
            </div>
        </section>
    </main>

    @include('partials.footer')
</div>
</body>
</html>

