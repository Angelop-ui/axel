<section class="bienvenida">
    <h2>Bienvenido al Proyecto de Captación de Agua Pluvial</h2>

    <p>
        El agua pluvial —es decir, el agua que proviene de la lluvia— es uno de los recursos más abundantes y desaprovechados en muchas regiones del mundo. A pesar de su enorme potencial, millones de litros se pierden cada año al escurrir por calles, drenajes o suelos sin aprovecharse adecuadamente.
    </p>

    <p>
        Este proyecto tiene como objetivo fomentar la conciencia, el conocimiento y la acción en torno a la captación de agua de lluvia como una <strong>alternativa sustentable, económica y accesible</strong> frente al uso excesivo de agua potable. Recolectar el agua que cae naturalmente sobre nuestras viviendas, escuelas o espacios comunitarios es una forma sencilla y efectiva de cuidar el medio ambiente y mejorar nuestra calidad de vida.
    </p>

    <div class="carrusel">
        <div class="carrusel-contenedor" style="display: flex; transition: transform 0.5s ease;">
            <div class="carrusel-item" style="min-width: 100%;"><img src="imagen1.jpg" alt="Imagen 1" style="width: 100%;"></div>
            <div class="carrusel-item" style="min-width: 100%;"><img src="imagen2.jpg" alt="Imagen 2" style="width: 100%;"></div>
            <div class="carrusel-item" style="min-width: 100%;"><img src="imagen3.jpg" alt="Imagen 3" style="width: 100%;"></div>
        </div>
        <button class="carrusel-anterior" style="position: absolute; top: 50%; left: 10px;">&#10094;</button>
        <button class="carrusel-siguiente" style="position: absolute; top: 50%; right: 10px;">&#10095;</button>
    </div>

    <h3>¿Por qué es importante la captación de agua pluvial?</h3>
    <ul>
        <li>💧 <strong>Reducción del consumo de agua potable:</strong> Ideal para usos no potables como riego, limpieza y descarga de sanitarios.</li>
        <li>🌎 <strong>Protección ambiental:</strong> Disminuye la sobreexplotación de acuíferos y reduce el riesgo de inundaciones urbanas.</li>
        <li>🏡 <strong>Autosuficiencia hídrica:</strong> Permite a hogares y comunidades gestionar mejor su disponibilidad de agua.</li>
        <li>💸 <strong>Ahorro económico:</strong> Reduce significativamente la factura del agua en el mediano y largo plazo.</li>
    </ul>

    <h3>¿Cómo se puede usar el agua de lluvia?</h3>
    <p>
        El agua captada puede usarse para regar jardines, limpiar pisos y vehículos, recargar sanitarios, e incluso, con tratamiento adecuado, para beber. La captación pluvial es especialmente útil en zonas donde el suministro de agua es irregular, costoso o inexistente.
    </p>

    <h3>Una solución ancestral, una respuesta moderna</h3>
    <p>
        Culturas ancestrales de todo el mundo ya recolectaban el agua de lluvia para su supervivencia. Hoy, con la crisis climática y el crecimiento urbano, esta práctica cobra una nueva relevancia como parte de una estrategia integral de sustentabilidad y adaptación.
    </p>

    <div class="imagenes-bienvenida">
        <img src="1.jpg" alt="Agua pluvial siendo recolectada desde el techo">
        <img src="2.jpg" alt="Uso de agua de lluvia para regar jardines">
        <img src="3.jpg" alt="Niños aprendiendo sobre captación de agua">
    </div>

    <p>
        Te invitamos a explorar esta plataforma, conocer los beneficios de la captación pluvial y descubrir cómo tú también puedes implementar soluciones sostenibles en tu hogar, escuela o comunidad.
    </p>

    <a href="?page=cuidados"><button>Explorar el proyecto</button></a>
</section>

<script>
    const contenedor = document.querySelector('.carrusel-contenedor');
    const items = document.querySelectorAll('.carrusel-item');
    const btnAnterior = document.querySelector('.carrusel-anterior');
    const btnSiguiente = document.querySelector('.carrusel-siguiente');
    let index = 0;

    function mostrarImagen(i) {
        const total = items.length;
        index = (i + total) % total;
        contenedor.style.transform = `translateX(-${index * 100}%)`;
    }

    btnAnterior.addEventListener('click', () => mostrarImagen(index - 1));
    btnSiguiente.addEventListener('click', () => mostrarImagen(index + 1));

    
    setInterval(() => {
        mostrarImagen(index + 1);
    }, 2000); 
</script>
