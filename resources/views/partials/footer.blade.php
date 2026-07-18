<footer class="site-footer site-footer-rich">
    <div class="footer-brand-block">
        <a class="brand" href="{{ route('energia.home') }}"><span class="brand-mark" aria-hidden="true"></span><span>Energía Kids</span></a>
        <p>Un rincón para observar, preguntar, crear y cuidar nuestro planeta.</p>
    </div>
    <nav aria-label="Explorar Energía Kids">
        <strong>Explora</strong>
        <a href="{{ route('energia.home') }}#tipos">Tipos de energía</a>
        <a href="{{ route('energia.home') }}#experimento">Mini experimento</a>
        <a href="{{ route('energia.activities') }}">Juegos y retos</a>
    </nav>
    <nav aria-label="Aprender en casa">
        <strong>Aprende en casa</strong>
        <a href="{{ route('energia.homework') }}">Misiones para casa</a>
        <a href="{{ route('energia.activities') }}#eco-mision">Misión planeta</a>
        <a href="{{ route('energia.home') }}#ruta">Ruta de clase</a>
    </nav>
    <div class="footer-badge" aria-label="Mensaje de cuidado del planeta">
        <span aria-hidden="true">✦</span>
        <p><strong>Pequeñas acciones, gran energía.</strong><br>Apaga, desconecta y comparte lo aprendido.</p>
    </div>
    <p class="footer-copy">Hecho para aprender jugando · {{ date('Y') }}</p>
</footer>
