<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Misiones de observación, dibujo y evidencia sobre tipos de energía.">
    <title>Misiones en Casa | Energía Kids</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/energia-favicon.svg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="site-shell homework-page">
    <header class="site-header">
        <a class="brand" href="{{ route('energia.home') }}" aria-label="Ir a la portada de Energía Kids"><span class="brand-mark" aria-hidden="true"></span><span>Energía Kids</span></a>
        <nav class="site-nav" aria-label="Navegación principal">
            <a href="{{ route('energia.home') }}">Portada</a><a href="{{ route('energia.activities') }}">Juegos</a><a href="#tarea-1">Misiones</a><a href="#evidencia">Ficha PDF</a>
        </nav>
    </header>
    <main>
        <section class="homework-hero">
            <div class="classroom-board">
                <span class="chalk-label">Aprender en familia</span>
                <h1>Misiones de energía para casa</h1>
                <p>Observa, toma una evidencia, dibuja y explica. Tu cuaderno se convierte en un laboratorio de ciencias.</p>
                <div class="chalk-row"><span>Observar</span><span>Evidencia</span><span>Dibujar</span><span>Explicar</span></div>
            </div>
            <div class="classroom-scene" aria-hidden="true"><img class="student-one explorer-homework" src="{{ asset('images/energia-explorer.png') }}" alt=""><div class="desk-card"><img src="{{ asset('images/energia-home-bulb.png') }}" alt=""><span>Cuaderno de evidencias</span></div><div class="pin-icons"><img src="{{ asset('images/energia-solar-panel.png') }}" alt=""><img src="{{ asset('images/energia-wind-fan.png') }}" alt=""><img src="{{ asset('images/energia-water-drop.png') }}" alt=""><img src="{{ asset('images/energia-battery-green.png') }}" alt=""></div></div>
        </section>
        <section class="section-heading compact"><span class="eyebrow">Misión: evidencia + dibujo</span><h2>Aprende mirando lo que ocurre a tu alrededor</h2><p>Realiza las misiones con una persona adulta. Puedes tomar una foto o hacer un dibujo como evidencia.</p></section>
        <section class="homework-grid" aria-label="Misiones de evidencia para casa">
            <article class="homework-card" id="tarea-1"><div class="homework-number">01</div><div><span class="eyebrow">Evidencia de casa</span><h2>Detective eléctrico</h2><p>Elige un objeto que use electricidad: lámpara, televisor, ventilador o cargador.</p><ul><li>Toma una foto con ayuda de un adulto o dibuja el objeto.</li><li>Escribe: “Funciona con energía eléctrica”.</li><li>Dibuja un símbolo de enchufe o batería junto a tu evidencia.</li></ul></div><div class="homework-visual"><img src="{{ asset('images/energia-plug.png') }}" alt="Enchufe"><img src="{{ asset('images/energia-battery-green.png') }}" alt="Batería"><img src="{{ asset('images/energia-home-bulb.png') }}" alt="Lámpara"></div></article>
            <article class="homework-card" id="tarea-2"><div class="homework-number">02</div><div><span class="eyebrow">Evidencia del entorno</span><h2>Cazador de sol y viento</h2><p>Observa una ventana, patio o parque durante un minuto.</p><ul><li>Toma una foto del sol, las nubes o un árbol moviéndose, si es posible.</li><li>Haz un dibujo del cielo y agrega flechas para mostrar el viento.</li><li>Completa: “Hoy puedo aprovechar la energía del…”</li></ul></div><div class="homework-visual"><img src="{{ asset('images/energia-solar-panel.png') }}" alt="Panel solar"><img src="{{ asset('images/energia-wind-fan.png') }}" alt="Turbina de viento"><img src="{{ asset('images/energia-leaf.png') }}" alt="Hoja verde"></div></article>
            <article class="homework-card" id="tarea-3"><div class="homework-number">03</div><div><span class="eyebrow">Dibujo científico</span><h2>Mi mapa de energías</h2><p>Divide una hoja en cuatro cuadros: solar, eólica, hidráulica y eléctrica.</p><ul><li>Dibuja una fuente o ejemplo en cada cuadro.</li><li>Escribe una frase corta sobre qué hace cada energía.</li><li>Marca con una estrella la energía que ves más cerca de tu casa.</li></ul></div><div class="homework-visual"><img src="{{ asset('images/energia-solar-panel.png') }}" alt="Panel solar"><img src="{{ asset('images/energia-wind-fan.png') }}" alt="Turbina"><img src="{{ asset('images/energia-water-drop.png') }}" alt="Gota de agua"></div></article>
            <article class="homework-card" id="tarea-4"><div class="homework-number">04</div><div><span class="eyebrow">Evidencia de cuidado</span><h2>Mi promesa verde</h2><p>Escoge una acción para ahorrar energía durante tres días.</p><ul><li>Dibuja tu acción: apagar una luz, desconectar un cargador o abrir una cortina.</li><li>Haz una marca cada día que la cumplas.</li><li>Trae tu dibujo y cuenta cómo ayudaste al planeta.</li></ul></div><div class="homework-visual"><img src="{{ asset('images/energia-lightning.png') }}" alt="Rayo"><img src="{{ asset('images/energia-leaf.png') }}" alt="Hoja"><img src="{{ asset('images/energia-explorer.png') }}" alt="Explorador científico"></div></article>
        </section>
        <section class="teacher-guide homework-download" id="evidencia"><div class="guide-icon" aria-hidden="true">✎</div><div><span class="eyebrow">Imprime o comparte</span><h2>Ficha de evidencias de energía</h2><p>Incluye espacios para dibujar, registrar una evidencia y escribir una idea de cuidado del planeta.</p></div><div class="guide-actions"><a class="primary-link" href="{{ asset('documents/ficha-evidencias-energia.pdf') }}" target="_blank" rel="noopener">Abrir ficha PDF</a><span>Lista para reemplazar si necesitas otra</span></div></section>
        <section class="teacher-note" id="recordatorio"><div class="mini-board"><span class="eyebrow">Para compartir</span><h2>Trae tu evidencia y tu dibujo</h2><p>En clase podrás explicar qué energía observaste, mostrar tu evidencia y contar cómo podemos usarla mejor.</p></div><a class="primary-link" href="{{ route('energia.activities') }}">Volver a los juegos</a></section>
    </main>
    @include('partials.footer')
</div>
</body>
</html>
