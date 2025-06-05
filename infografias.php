<h2>Infografías</h2>

<section>
    <h2>¿Qué es la captación de agua pluvial?</h2>
    <p>
        La captación de agua pluvial es el proceso de recolectar, almacenar y aprovechar el agua de lluvia que cae sobre superficies como techos o patios. Esta técnica ayuda a reducir el consumo de agua potable, prevenir inundaciones urbanas y aliviar la presión sobre acuíferos naturales.
    </p>

    <h3>¿Cómo funciona?</h3>
    <p>
        Un sistema básico de captación incluye: una superficie de captación (como el techo), canaletas, filtros para hojas y tierra, un tanque de almacenamiento (tinaco o cisterna) y, opcionalmente, un sistema de distribución o tratamiento.
    </p>

    <h3>Usos del agua recolectada</h3>
    <ul>
        <li>Riego de jardines y huertos.</li>
        <li>Limpieza de patios, autos o pisos.</li>
        <li>Descarga de sanitarios.</li>
        <li>En sistemas de enfriamiento o contra incendios.</li>
        <li>Con tratamiento adecuado, incluso para consumo humano.</li>
    </ul>

    <h3>Beneficios</h3>
    <ul>
        <li><strong>Ambientales:</strong> Reduce escurrimientos, evita inundaciones y protege mantos acuíferos.</li>
        <li><strong>Económicos:</strong> Ahorra en el recibo del agua.</li>
        <li><strong>Sociales:</strong> Fortalece la conciencia ecológica y puede implementarse en escuelas o comunidades.</li>
    </ul>

    <h3>Dato útil</h3>
    <p>
        Un techo de 100 m² puede recolectar hasta 72,000 litros al año si se encuentra en una zona con 800 mm de lluvia anual. ¡Esa es agua que normalmente se desperdicia!
    </p>
</section>

<label>
    <input type="checkbox" id="mostrar-infografias">
    Mostrar infografías y video
</label>

<div class="contenedor-infografias" id="infografias" style="display: none;">
    <img src="img/info1.jpg" alt="Infografía sobre captación de agua">
    <video controls>
        <source src="vid/info2.mp4" type="video/mp4">
        Tu navegador no soporta el video.
    </video>
</div>

<script>
    const checkbox = document.getElementById('mostrar-infografias');
    const contenedor = document.getElementById('infografias');

    checkbox.addEventListener('change', function () {
        contenedor.style.display = this.checked ? 'flex' : 'none';
    });
</script>
