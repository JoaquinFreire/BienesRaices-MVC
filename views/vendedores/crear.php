<main class="contenedor seccion">
    <h1>Registrar Vendedor(a)</h1>
    <a href="/admin" class="boton boton-verde">Volver</a>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <form method="POST" action="/vendedores/crear" class="formulario">
        
        <?php include 'formulario.php'; ?>
        <input type="submit" value="Registrar Vendedor(a)" class="boton boton-verde">
    </form>
</main>