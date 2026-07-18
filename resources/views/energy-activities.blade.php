<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Actividades infantiles sobre energía solar, eólica, hidráulica y eléctrica.">
    <title>Actividades | Energía Kids</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/energia-favicon.svg') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="site-shell activity-page">
    <header class="site-header">
        <a class="brand" href="{{ route('energia.home') }}" aria-label="Ir a la portada de Energía Kids">
            <span class="brand-mark" aria-hidden="true"></span>
            <span>Energía Kids</span>
        </a>
        <nav class="site-nav" aria-label="Navegación principal">
            <a href="{{ route('energia.home') }}">Portada</a>
            <a href="#retos">Retos</a>
            <a href="#mapa">Mapa</a>
            <a href="#clasifica">Clasifica</a>
            <a href="#crucigrama">Crucigrama</a>
            <a href="#eco-mision">Misión verde</a>
            <a href="#laboratorio">Laboratorio</a>
            <a href="#relaciona">Relaciona</a>
            <a href="{{ route('energia.homework') }}">Tareas</a>
            <a href="#cierre">Cierre</a>
        </nav>
    </header>

    <main>
        <section class="activity-hero">
            <div class="activity-copy">
                <span class="eyebrow">Laboratorio de energía</span>
                <h1>Completa los retos y gana chispas de conocimiento.</h1>
                <p>Lee, observa la imagen y toca la respuesta correcta. Cada acierto llena tu progreso.</p>
                <div class="progress-panel" aria-label="Progreso de respuestas correctas">
                    <div class="progress-top"><strong data-quiz-summary>0/8 respuestas correctas</strong><span>Meta: 8</span></div>
                    <div class="progress-track"><span data-progress-bar></span></div>
                </div>
                <div class="hero-actions">
                    <a class="primary-link" href="#retos">Empezar</a>
                    <button type="button" class="secondary-link button-link" data-reset-quiz>Reiniciar</button>
                </div>
            </div>
            <div class="activity-scene">
                <img class="scene-bg" src="{{ asset('images/energia-hero.png') }}" alt="Paisaje de energías renovables">
                <div class="scene-icon-stack" aria-hidden="true">
                    <img src="{{ asset('images/energia-solar-panel.png') }}" alt="">
                    <img src="{{ asset('images/energia-wind-fan.png') }}" alt="">
                    <img src="{{ asset('images/energia-water-drop.png') }}" alt="">
                    <img src="{{ asset('images/energia-battery-green.png') }}" alt="">
                </div>
            </div>
        </section>

        <section class="section-heading" id="retos">
            <span class="eyebrow">Retos rápidos</span>
            <h2>Elige la palabra correcta</h2>
            <p>Las respuestas correctas se quedan marcadas y las pistas te ayudan a intentarlo otra vez.</p>
        </section>

        <section class="quiz-grid" aria-label="Preguntas sobre energía">
            <article class="quiz-card" data-energy-question data-success-text="Correcto. La energía solar viene del sol." data-hint-text="Mira el panel: necesita luz del sol.">
                <span class="activity-tag">Reto 01</span>
                <img class="quiz-icon" src="{{ asset('images/energia-solar-panel.png') }}" alt="Panel solar">
                <h3>El panel usa energía...</h3>
                <p class="quiz-statement">Un panel solar trabaja con energía <span class="fill-slot" data-fill-slot>____</span>.</p>
                <div class="quiz-options">
                    <button type="button" data-answer-option data-answer-text="solar" data-correct="true">Solar</button>
                    <button type="button" data-answer-option data-answer-text="eólica" data-correct="false">Eólica</button>
                    <button type="button" data-answer-option data-answer-text="hidráulica" data-correct="false">Hidráulica</button>
                </div>
                <p class="quiz-feedback" data-feedback>Elige una opción.</p>
            </article>

            <article class="quiz-card" data-energy-question data-success-text="Muy bien. El viento mueve las turbinas." data-hint-text="Piensa en aire fuerte moviendo aspas.">
                <span class="activity-tag">Reto 02</span>
                <img class="quiz-icon" src="{{ asset('images/energia-wind-fan.png') }}" alt="Turbina eólica">
                <h3>La turbina gira con...</h3>
                <p class="quiz-statement">La energía del viento se llama <span class="fill-slot" data-fill-slot>____</span>.</p>
                <div class="quiz-options">
                    <button type="button" data-answer-option data-answer-text="eléctrica" data-correct="false">Eléctrica</button>
                    <button type="button" data-answer-option data-answer-text="eólica" data-correct="true">Eólica</button>
                    <button type="button" data-answer-option data-answer-text="solar" data-correct="false">Solar</button>
                </div>
                <p class="quiz-feedback" data-feedback>Elige una opción.</p>
            </article>

            <article class="quiz-card" data-energy-question data-success-text="Correcto. El agua en movimiento produce energía hidráulica." data-hint-text="Recuerda ríos, cascadas y represas.">
                <span class="activity-tag">Reto 03</span>
                <img class="quiz-icon" src="{{ asset('images/energia-water-drop.png') }}" alt="Gota de agua">
                <h3>La energía del agua es...</h3>
                <p class="quiz-statement">Una represa puede producir energía <span class="fill-slot" data-fill-slot>____</span>.</p>
                <div class="quiz-options">
                    <button type="button" data-answer-option data-answer-text="hidráulica" data-correct="true">Hidráulica</button>
                    <button type="button" data-answer-option data-answer-text="eólica" data-correct="false">Eólica</button>
                    <button type="button" data-answer-option data-answer-text="química" data-correct="false">Química</button>
                </div>
                <p class="quiz-feedback" data-feedback>Elige una opción.</p>
            </article>

            <article class="quiz-card" data-energy-question data-success-text="Bien. Las luces y muchos aparatos usan electricidad." data-hint-text="Piensa en enchufes, cables y bombillos.">
                <span class="activity-tag">Reto 04</span>
                <img class="quiz-icon" src="{{ asset('images/energia-home-bulb.png') }}" alt="Casa con bombillo">
                <h3>Las luces necesitan...</h3>
                <p class="quiz-statement">Una lámpara se enciende con energía <span class="fill-slot" data-fill-slot>____</span>.</p>
                <div class="quiz-options">
                    <button type="button" data-answer-option data-answer-text="eléctrica" data-correct="true">Eléctrica</button>
                    <button type="button" data-answer-option data-answer-text="solar" data-correct="false">Solar</button>
                    <button type="button" data-answer-option data-answer-text="viento" data-correct="false">Viento</button>
                </div>
                <p class="quiz-feedback" data-feedback>Elige una opción.</p>
            </article>

            <article class="quiz-card" data-energy-question data-success-text="Correcto. La batería almacena energía." data-hint-text="Observa el símbolo de carga.">
                <span class="activity-tag">Reto 05</span>
                <img class="quiz-icon" src="{{ asset('images/energia-battery-green.png') }}" alt="Batería">
                <h3>La batería sirve para...</h3>
                <p class="quiz-statement">Una batería puede <span class="fill-slot" data-fill-slot>____</span> energía.</p>
                <div class="quiz-options">
                    <button type="button" data-answer-option data-answer-text="guardar" data-correct="true">Guardar</button>
                    <button type="button" data-answer-option data-answer-text="apagar" data-correct="false">Apagar</button>
                    <button type="button" data-answer-option data-answer-text="romper" data-correct="false">Romper</button>
                </div>
                <p class="quiz-feedback" data-feedback>Elige una opción.</p>
            </article>

            <article class="quiz-card" data-energy-question data-success-text="Muy bien. El enchufe conecta la electricidad." data-hint-text="Los aparatos se conectan para recibir energía.">
                <span class="activity-tag">Reto 06</span>
                <img class="quiz-icon" src="{{ asset('images/energia-plug.png') }}" alt="Enchufe">
                <h3>El enchufe conecta...</h3>
                <p class="quiz-statement">El enchufe lleva energía <span class="fill-slot" data-fill-slot>____</span>.</p>
                <div class="quiz-options">
                    <button type="button" data-answer-option data-answer-text="eléctrica" data-correct="true">Eléctrica</button>
                    <button type="button" data-answer-option data-answer-text="hidráulica" data-correct="false">Hidráulica</button>
                    <button type="button" data-answer-option data-answer-text="eólica" data-correct="false">Eólica</button>
                </div>
                <p class="quiz-feedback" data-feedback>Elige una opción.</p>
            </article>

            <article class="quiz-card" data-energy-question data-success-text="Correcto. Ahorrar energía ayuda al planeta." data-hint-text="La hoja recuerda el cuidado de la naturaleza.">
                <span class="activity-tag">Reto 07</span>
                <img class="quiz-icon" src="{{ asset('images/energia-leaf.png') }}" alt="Hoja verde">
                <h3>Cuidar energía ayuda al...</h3>
                <p class="quiz-statement">Ahorrar energía cuida el <span class="fill-slot" data-fill-slot>____</span>.</p>
                <div class="quiz-options">
                    <button type="button" data-answer-option data-answer-text="planeta" data-correct="true">Planeta</button>
                    <button type="button" data-answer-option data-answer-text="ruido" data-correct="false">Ruido</button>
                    <button type="button" data-answer-option data-answer-text="color" data-correct="false">Color</button>
                </div>
                <p class="quiz-feedback" data-feedback>Elige una opción.</p>
            </article>

            <article class="quiz-card" data-energy-question data-success-text="Excelente. El rayo representa electricidad y movimiento." data-hint-text="El rayo es un símbolo de energía rápida.">
                <span class="activity-tag">Reto 08</span>
                <img class="quiz-icon" src="{{ asset('images/energia-lightning.png') }}" alt="Rayo">
                <h3>El rayo representa...</h3>
                <p class="quiz-statement">El rayo nos recuerda energía y <span class="fill-slot" data-fill-slot>____</span>.</p>
                <div class="quiz-options">
                    <button type="button" data-answer-option data-answer-text="movimiento" data-correct="true">Movimiento</button>
                    <button type="button" data-answer-option data-answer-text="sombra" data-correct="false">Sombra</button>
                    <button type="button" data-answer-option data-answer-text="silencio" data-correct="false">Silencio</button>
                </div>
                <p class="quiz-feedback" data-feedback>Elige una opción.</p>
            </article>
        </section>

        <section class="concept-section" id="mapa">
            <div class="section-heading compact">
                <span class="eyebrow">Mapa conceptual</span>
                <h2>Completa las ramas de energía</h2>
                <p>Toca una palabra del banco y luego toca el espacio correcto del mapa.</p>
            </div>

            <div class="concept-game" data-concept-game>
                <div class="word-bank" aria-label="Banco de palabras del mapa conceptual">
                    <button type="button" data-word-choice="solar">Solar</button>
                    <button type="button" data-word-choice="eólica">Eólica</button>
                    <button type="button" data-word-choice="hidráulica">Hidráulica</button>
                    <button type="button" data-word-choice="eléctrica">Eléctrica</button>
                </div>

                <div class="concept-map" aria-label="Mapa conceptual para completar">
                    <div class="concept-center">
                        <img src="{{ asset('images/energia-lightning.png') }}" alt="">
                        <strong>Tipos de energía</strong>
                    </div>
                    <button type="button" class="concept-node node-solar" data-concept-slot="solar">
                        <img src="{{ asset('images/energia-solar-panel.png') }}" alt="">
                        <span>Sol + panel</span>
                        <strong data-concept-label>____</strong>
                    </button>
                    <button type="button" class="concept-node node-wind" data-concept-slot="eólica">
                        <img src="{{ asset('images/energia-wind-fan.png') }}" alt="">
                        <span>Viento + turbina</span>
                        <strong data-concept-label>____</strong>
                    </button>
                    <button type="button" class="concept-node node-water" data-concept-slot="hidráulica">
                        <img src="{{ asset('images/energia-water-drop.png') }}" alt="">
                        <span>Agua + movimiento</span>
                        <strong data-concept-label>____</strong>
                    </button>
                    <button type="button" class="concept-node node-electric" data-concept-slot="eléctrica">
                        <img src="{{ asset('images/energia-battery-green.png') }}" alt="">
                        <span>Cables + aparatos</span>
                        <strong data-concept-label>____</strong>
                    </button>
                </div>

                <p class="game-feedback" data-concept-feedback>Elige una palabra para empezar el mapa.</p>
            </div>
        </section>

        <section class="sort-section" id="clasifica">
            <div class="section-heading compact">
                <span class="eyebrow">Juego de clasificación</span>
                <h2>¿Renovable o de uso eléctrico?</h2>
                <p>Selecciona una tarjeta y decide si es una fuente renovable o un objeto que usa electricidad.</p>
            </div>

            <div class="sort-game" data-sort-game>
                <div class="sort-cards" aria-label="Tarjetas para clasificar">
                    <button type="button" data-sort-card data-kind="uso" data-label="Batería"><img src="{{ asset('images/energia-battery-green.png') }}" alt=""><span>Batería</span></button>
                    <button type="button" data-sort-card data-kind="renovable" data-label="Sol"><img src="{{ asset('images/energia-solar-panel.png') }}" alt=""><span>Sol</span></button>
                    <button type="button" data-sort-card data-kind="uso" data-label="Enchufe"><img src="{{ asset('images/energia-plug.png') }}" alt=""><span>Enchufe</span></button>
                    <button type="button" data-sort-card data-kind="renovable" data-label="Agua"><img src="{{ asset('images/energia-water-drop.png') }}" alt=""><span>Agua</span></button>
                    <button type="button" data-sort-card data-kind="uso" data-label="Lámpara"><img src="{{ asset('images/energia-home-bulb.png') }}" alt=""><span>Lámpara</span></button>
                    <button type="button" data-sort-card data-kind="renovable" data-label="Viento"><img src="{{ asset('images/energia-wind-fan.png') }}" alt=""><span>Viento</span></button>
                </div>

                <div class="sort-zones">
                    <button type="button" data-sort-zone="renovable">
                        <strong>Fuente renovable</strong>
                        <span>Sol, viento o agua</span>
                    </button>
                    <button type="button" data-sort-zone="uso">
                        <strong>Usa electricidad</strong>
                        <span>Batería, enchufe o luz</span>
                    </button>
                </div>

                <p class="game-feedback" data-sort-feedback>Elige una tarjeta y luego una categoría.</p>
            </div>
        </section>

        <section class="crossword-section" id="crucigrama">
            <div class="section-heading compact">
                <span class="eyebrow">Crucigrama</span>
                <h2>Completa palabras de energía</h2>
                <p>Elige una palabra y toca la pista correcta. Las letras aparecerán en el tablero.</p>
            </div>

            <div class="crossword-game" data-crossword-game>
                <div class="crossword-board" aria-label="Crucigrama de tipos de energía">
                    <span class="cross-cell" style="--col:4; --row:1" data-cross-eolica="0"></span>
                    <span class="cross-cell" style="--col:7; --row:1" data-cross-panel="0"></span>
                    <span class="cross-cell" style="--col:8; --row:1" data-cross-panel="1"></span>
                    <span class="cross-cell" style="--col:9; --row:1" data-cross-panel="2"></span>
                    <span class="cross-cell" style="--col:10; --row:1" data-cross-panel="3"></span>
                    <span class="cross-cell" style="--col:11; --row:1" data-cross-panel="4"></span>

                    <span class="cross-cell" style="--col:4; --row:2" data-cross-eolica="1"></span>

                    <span class="cross-cell" style="--col:2; --row:3" data-cross-solar="0" data-cross-sol="0"></span>
                    <span class="cross-cell" style="--col:3; --row:3" data-cross-solar="1"></span>
                    <span class="cross-cell" style="--col:4; --row:3" data-cross-solar="2" data-cross-eolica="2"></span>
                    <span class="cross-cell" style="--col:5; --row:3" data-cross-solar="3"></span>
                    <span class="cross-cell" style="--col:6; --row:3" data-cross-solar="4"></span>

                    <span class="cross-cell" style="--col:2; --row:4" data-cross-sol="1"></span>
                    <span class="cross-cell" style="--col:3; --row:4" data-cross-viento="0"></span>
                    <span class="cross-cell" style="--col:4; --row:4" data-cross-eolica="3" data-cross-viento="1"></span>
                    <span class="cross-cell" style="--col:5; --row:4" data-cross-viento="2"></span>
                    <span class="cross-cell" style="--col:6; --row:4" data-cross-viento="3"></span>
                    <span class="cross-cell" style="--col:7; --row:4" data-cross-viento="4"></span>
                    <span class="cross-cell" style="--col:8; --row:4" data-cross-viento="5"></span>

                    <span class="cross-cell" style="--col:2; --row:5" data-cross-sol="2"></span>
                    <span class="cross-cell" style="--col:4; --row:5" data-cross-eolica="4"></span>

                    <span class="cross-cell" style="--col:4; --row:6" data-cross-eolica="5" data-cross-agua="0"></span>
                    <span class="cross-cell" style="--col:5; --row:6" data-cross-agua="1"></span>
                    <span class="cross-cell" style="--col:6; --row:6" data-cross-agua="2" data-cross-uso="0"></span>
                    <span class="cross-cell" style="--col:7; --row:6" data-cross-agua="3"></span>

                    <span class="cross-cell" style="--col:6; --row:7" data-cross-uso="1"></span>

                    <span class="cross-cell" style="--col:6; --row:8" data-cross-uso="2"></span>
                    <span class="cross-cell" style="--col:8; --row:8" data-cross-luz="0"></span>
                    <span class="cross-cell" style="--col:9; --row:8" data-cross-luz="1"></span>
                    <span class="cross-cell" style="--col:10; --row:8" data-cross-luz="2"></span>

                    <span class="cross-cell" style="--col:2; --row:10" data-cross-bateria="0"></span>
                    <span class="cross-cell" style="--col:3; --row:10" data-cross-bateria="1"></span>
                    <span class="cross-cell" style="--col:4; --row:10" data-cross-bateria="2"></span>
                    <span class="cross-cell" style="--col:5; --row:10" data-cross-bateria="3"></span>
                    <span class="cross-cell" style="--col:6; --row:10" data-cross-bateria="4"></span>
                    <span class="cross-cell" style="--col:7; --row:10" data-cross-bateria="5"></span>
                    <span class="cross-cell" style="--col:8; --row:10" data-cross-bateria="6"></span>
                </div>

                <div class="crossword-side">
                    <div class="crossword-bank" aria-label="Palabras disponibles">
                        <button type="button" data-cross-word="solar">Solar</button>
                        <button type="button" data-cross-word="eolica">Eólica</button>
                        <button type="button" data-cross-word="agua">Agua</button>
                        <button type="button" data-cross-word="luz">Luz</button>
                        <button type="button" data-cross-word="viento">Viento</button>
                        <button type="button" data-cross-word="uso">Uso</button>
                        <button type="button" data-cross-word="sol">Sol</button>
                        <button type="button" data-cross-word="panel">Panel</button>
                        <button type="button" data-cross-word="bateria">Batería</button>
                    </div>
                    <div class="crossword-clues">
                        <button type="button" data-cross-clue="solar"><strong>1</strong><span>Viene del sol y puede cargar paneles.</span></button>
                        <button type="button" data-cross-clue="eolica"><strong>2</strong><span>La produce el viento al mover turbinas.</span></button>
                        <button type="button" data-cross-clue="agua"><strong>3</strong><span>Se mueve en ríos, cascadas y represas.</span></button>
                        <button type="button" data-cross-clue="luz"><strong>4</strong><span>Lo que enciende una lámpara.</span></button>
                        <button type="button" data-cross-clue="viento"><strong>5</strong><span>Aire en movimiento que puede producir energía.</span></button>
                        <button type="button" data-cross-clue="uso"><strong>6</strong><span>Lo que hacemos con la energía en casa y escuela.</span></button>
                        <button type="button" data-cross-clue="sol"><strong>7</strong><span>Estrella que nos da luz y calor.</span></button>
                        <button type="button" data-cross-clue="panel"><strong>8</strong><span>Placa que recibe luz solar.</span></button>
                        <button type="button" data-cross-clue="bateria"><strong>9</strong><span>Objeto que guarda energía eléctrica.</span></button>
                    </div>
                    <p class="game-feedback" data-cross-feedback>Elige una palabra para empezar el crucigrama.</p>
                </div>
            </div>
        </section>

        <section class="match-section" id="relaciona">
            <div class="section-heading compact">
                <span class="eyebrow">Relaciona</span>
                <h2>Une imagen, fuente y uso</h2>
                <p>Toca una tarjeta para descubrir por qué forman una pareja.</p>
            </div>
            <div class="match-game" data-match-game>
                <div class="match-grid">
                    <button type="button" data-match-card data-match-text="El panel recibe la luz del sol y la transforma en energía útil."><img src="{{ asset('images/energia-solar-panel.png') }}" alt="Panel solar"><strong>Sol</strong><span>Panel solar</span></button>
                    <button type="button" data-match-card data-match-text="El viento hace girar las aspas de una turbina."><img src="{{ asset('images/energia-wind-fan.png') }}" alt="Turbina"><strong>Viento</strong><span>Turbina</span></button>
                    <button type="button" data-match-card data-match-text="El agua en movimiento puede ayudar a producir electricidad en una represa."><img src="{{ asset('images/energia-water-drop.png') }}" alt="Agua"><strong>Agua</strong><span>Represa</span></button>
                    <button type="button" data-match-card data-match-text="Una batería guarda electricidad para usarla después."><img src="{{ asset('images/energia-battery-green.png') }}" alt="Batería"><strong>Electricidad</strong><span>Batería</span></button>
                </div>
                <p class="match-feedback" data-match-feedback>Elige una tarjeta para ver la explicación.</p>
            </div>
        </section>

        <section class="eco-mission" id="eco-mision" data-eco-mission>
            <div class="eco-mission-intro">
                <span class="eyebrow">Actividad nueva</span>
                <h2>Detective de decisiones</h2>
                <p>En cada situación, elige la decisión que ayuda a cuidar la energía. No se trata de hacerlo perfecto: se trata de aprender a mirar con atención.</p>
                <img src="{{ asset('images/energia-explorer.png') }}" alt="Explorador científico Lumen invitando a resolver una misión">
            </div>
            <div class="eco-challenges">
                <article data-eco-question>
                    <span>01 · Al salir del salón</span><h3>¿Qué haces con la luz?</h3>
                    <div><button type="button" data-eco-choice="false">La dejo encendida</button><button type="button" data-eco-choice="true">La apago</button></div>
                </article>
                <article data-eco-question>
                    <span>02 · El celular ya cargó</span><h3>¿Qué haces con el cargador?</h3>
                    <div><button type="button" data-eco-choice="true">Lo desconecto</button><button type="button" data-eco-choice="false">Lo dejo conectado</button></div>
                </article>
                <article data-eco-question>
                    <span>03 · Es un día soleado</span><h3>Para dibujar, ¿qué eliges?</h3>
                    <div><button type="button" data-eco-choice="true">Luz de la ventana</button><button type="button" data-eco-choice="false">Prender todas las luces</button></div>
                </article>
                <p class="eco-feedback" data-eco-feedback>Resuelve las tres situaciones para ganar tu insignia.</p>
            </div>
        </section>

        <section class="power-lab" id="laboratorio" data-power-lab aria-labelledby="power-lab-title">
            <div class="power-lab-copy">
                <span class="eyebrow">Actividad nueva</span>
                <h2 id="power-lab-title">Laboratorio: cambia la fuente</h2>
                <p>Toca una fuente de energía y mira qué podría activar. Cada una tiene su propia forma de ayudar.</p>
                <div class="power-source-buttons" role="group" aria-label="Fuentes de energía">
                    <button type="button" data-power-source="solar">☀️ Solar</button>
                    <button type="button" data-power-source="eolica">🌬️ Eólica</button>
                    <button type="button" data-power-source="hidraulica">💧 Hidráulica</button>
                    <button type="button" data-power-source="electrica">⚡ Eléctrica</button>
                </div>
            </div>
            <div class="power-lab-screen" data-power-screen>
                <span class="power-symbol" data-power-symbol>☀️</span>
                <h3 data-power-title>La luz del sol puede cargar</h3>
                <p data-power-text>Un panel transforma la luz en electricidad para encender una lámpara o cargar una batería.</p>
                <div class="power-meter"><span data-power-meter></span></div>
                <strong data-power-label>ENERGÍA SOLAR</strong>
            </div>
        </section>

        <section class="closing-section" id="cierre">
            <div class="closing-icons" aria-hidden="true">
                <img src="{{ asset('images/energia-solar-panel.png') }}" alt="">
                <img src="{{ asset('images/energia-wind-fan.png') }}" alt="">
                <img src="{{ asset('images/energia-water-drop.png') }}" alt="">
                <img src="{{ asset('images/energia-battery-green.png') }}" alt="">
            </div>
            <div>
                <span class="eyebrow">Cierre</span>
                <h2>Pregunta final</h2>
                <p>¿Qué energía viste hoy cerca de tu casa o escuela? Di el nombre y explica para qué sirve.</p>
                <a class="primary-link" href="{{ route('energia.homework') }}">Ver tareas en casa</a>
                <a class="secondary-link" href="{{ route('energia.home') }}">Volver a aprender</a>
            </div>
        </section>
    </main>

    @include('partials.footer')
</div>
</body>
</html>

