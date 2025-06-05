<section class="prototipo-materiales">
  <h2>Prototipo - Materiales utilizados</h2>
  <p>Selecciona un componente del sistema para visualizar su imagen y conocer su función:</p>

  <form class="material-form">
    <div class="material-option">
      <label><input type="radio" name="material" value="pvc" onclick="mostrarImagen('pvc')"> Tubo de PVC</label>
      <p class="material-desc">Transporta el agua desde el techo hasta el depósito. Es resistente y económico.</p>
    </div>
    <div class="material-option">
      <label><input type="radio" name="material" value="soporte" onclick="mostrarImagen('soporte')"> Soporte de aluminio</label>
      <p class="material-desc">Sujeta firmemente los tubos o láminas. Ideal por su resistencia a la intemperie.</p>
    </div>
    <div class="material-option">
      <label><input type="radio" name="material" value="lamina" onclick="mostrarImagen('lamina')"> Lámina galvanizada</label>
      <p class="material-desc">Superficie que capta el agua. Su recubrimiento evita corrosión.</p>
    </div>
    <div class="material-option">
      <label><input type="radio" name="material" value="union" onclick="mostrarImagen('union')"> Conexión unión de plástico</label>
      <p class="material-desc">Permite unir diferentes secciones del sistema sin fugas.</p>
    </div>
    <div class="material-option">
      <label><input type="radio" name="material" value="filtro" onclick="mostrarImagen('filtro')"> Filtro de hojas</label>
      <p class="material-desc">Evita que hojas o suciedad entren al sistema de almacenamiento.</p>
    </div>
  </form>

  <div class="imagen-container">
    <img id="img-pvc" class="material-img" src="pvc.jpg" alt="Tubo de PVC">
    <img id="img-soporte" class="material-img" src="soporte.jpg" alt="Soporte de aluminio">
    <img id="img-lamina" class="material-img" src="lamina.jpg" alt="Lámina galvanizada">
    <img id="img-union" class="material-img" src="union.jpg" alt="Conexión unión de plástico">
    <img id="img-filtro" class="material-img" src="filtro.jpg" alt="Filtro de hojas">
  </div>
</section>

<script>
  function mostrarImagen(id) {
    const imagenes = document.querySelectorAll('.material-img');
    imagenes.forEach(img => img.style.display = 'none');
    document.getElementById('img-' + id).style.display = 'block';
  }
</script>
