<h2>Presupuesto de Materiales</h2>
<form id="formulario" style="display: flex; flex-wrap: wrap; gap: 20px;">

    
    <div style="border: 1px solid #ccc; padding: 15px; border-radius: 10px; width: 300px; background: #f9f9f9;">
        <h3>Tubo de PVC</h3>
        <label>Precio: $607</label><br>
        <label>Cantidad: <input type="number" name="pvc" value="0" min="0"></label><br>
        <label>Diámetro:
            <select name="pvc_diametro">
                <option value="2 pulgadas">2 pulgadas</option>
                <option value="3 pulgadas">3 pulgadas</option>
                <option value="4 pulgadas">4 pulgadas</option>
            </select>
        </label>
    </div>

    
    <div style="border: 1px solid #ccc; padding: 15px; border-radius: 10px; width: 300px; background: #f9f9f9;">
        <h3>Lámina Galvanizada</h3>
        <label>Precio: $600</label><br>
        <label>Cantidad: <input type="number" name="lamina" value="0" min="0"></label><br>
        <label>Medida:
            <select name="lamina_medida">
                <option value="2x1 m">2x1 m</option>
                <option value="3x1 m">3x1 m</option>
                <option value="4x1 m">4x1 m</option>
            </select>
        </label>
    </div>


    <div style="border: 1px solid #ccc; padding: 15px; border-radius: 10px; width: 300px; background: #f9f9f9;">
        <h3>Soporte de Aluminio</h3>
        <label>Precio: $100</label><br>
        <label>Cantidad: <input type="number" name="soporte" value="0" min="0"></label><br>
        <label>Tamaño:
            <select name="soporte_tam">
                <option value="Chico">Chico</option>
                <option value="Mediano">Mediano</option>
                <option value="Grande">Grande</option>
            </select>
        </label>
    </div>

  
    <div style="border: 1px solid #ccc; padding: 15px; border-radius: 10px; width: 300px; background: #f9f9f9;">
        <h3>Unión Plástica</h3>
        <label>Precio: $25</label><br>
        <label>Cantidad: <input type="number" name="union" value="0" min="0"></label><br>
        <label>Tipo:
            <select name="union_tipo">
                <option value="T">Tipo T</option>
                <option value="Codo">Codo</option>
                <option value="Recta">Recta</option>
            </select>
        </label>
    </div>


    <div style="border: 1px solid #ccc; padding: 15px; border-radius: 10px; width: 300px; background: #f9f9f9;">
        <h3>Filtro de Agua</h3>
        <label>Precio: $350</label><br>
        <label>Cantidad: <input type="number" name="filtro" value="0" min="0"></label><br>
        <label>Tipo:
            <select name="filtro_tipo">
                <option value="Malla metálica">Malla metálica</option>
                <option value="Carbón activado">Carbón activado</option>
                <option value="Filtro de bolsa">Filtro de bolsa</option>
            </select>
        </label>
    </div>


    <div style="border: 1px solid #ccc; padding: 15px; border-radius: 10px; width: 300px; background: #f9f9f9;">
        <h3>Tinaco</h3>
        <label>Precio: $1800</label><br>
        <label>Cantidad: <input type="number" name="tinaco" value="0" min="0"></label><br>
        <label>Capacidad:
            <select name="tinaco_cap">
                <option value="450 L">450 L</option>
                <option value="750 L">750 L</option>
                <option value="1100 L">1100 L</option>
            </select>
        </label>
    </div>

  
    
    <div style="border: 1px solid #ccc; padding: 15px; border-radius: 10px; width: 300px; background: #f9f9f9;">
        <h3>Manguera</h3>
        <label>Precio: $80</label><br>
        <label>Cantidad (metros): <input type="number" name="manguera" value="0" min="0"></label><br>
        <label>Diámetro:
            <select name="manguera_diametro">
                <option value="1/2 pulgada">1/2 pulgada</option>
                <option value="3/4 pulgada">3/4 pulgada</option>
                <option value="1 pulgada">1 pulgada</option>
            </select>
        </label>
    </div>

   
    <div style="border: 1px solid #ccc; padding: 15px; border-radius: 10px; width: 300px; background: #f9f9f9;">
        <h3>Bomba de Agua</h3>
        <label>Precio: $950</label><br>
        <label>Cantidad: <input type="number" name="bomba" value="0" min="0"></label><br>
        <label>Tipo:
            <select name="bomba_tipo">
                <option value="Manual">Manual</option>
                <option value="Eléctrica">Eléctrica</option>
            </select>
        </label>
    </div>

</form>

<div style="margin-top: 20px;">
    <button type="button" onclick="calcular()">Calcular total</button>
    <button type="button" onclick="borrar()">Borrar</button>
</div>

<div id="recibo" style="display:none; margin-top:20px;"></div>
<button id="descargar" style="display:none;" onclick="descargarPDF()">Descargar recibo</button>

<script>
    function calcular() {
        const precios = {
            pvc: 607, lamina: 600, soporte: 100, union: 25,
            filtro: 350, tinaco: 1800, manguera: 80, bomba: 950
        };
        const form = document.forms["formulario"];
        let total = 0;
        let recibo = "<h3>Recibo de compra:</h3><ul>";

        for (let item in precios) {
            const cantidad = parseInt(form[item].value) || 0;
            if (cantidad > 0) {
                const opcion = form[item + "_diametro"] || form[item + "_medida"] ||
                               form[item + "_tam"] || form[item + "_tipo"] ||
                               form[item + "_cap"];
                const detalle = opcion ? ` (${opcion.value})` : "";
                const subtotal = cantidad * precios[item];
                total += subtotal;
                recibo += `<li>${cantidad} x ${item}${detalle} = $${subtotal}</li>`;
            }
        }

        recibo += `</ul><strong>Total: $${total}</strong>`;
        document.getElementById("recibo").innerHTML = recibo;
        document.getElementById("recibo").style.display = "block";
        document.getElementById("descargar").style.display = "inline-block";
    }

    function borrar() {
        const form = document.forms["formulario"];
        form.reset();
        document.getElementById("recibo").innerHTML = "";
        document.getElementById("recibo").style.display = "none";
        document.getElementById("descargar").style.display = "none";
    }

    function descargarPDF() {
        const contenido = document.getElementById("recibo").innerHTML;
        const ventana = window.open("", "_blank");
        ventana.document.write(`<html><head><title>Recibo</title></head><body>${contenido}</body></html>`);
        ventana.document.close();
        ventana.focus();
        ventana.print();
    }
</script>
