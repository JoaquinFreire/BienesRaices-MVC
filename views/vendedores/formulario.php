<fieldset>
    <legend>Información General</legend>

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="vendedor[nombre]" placeholder="Nombre Vendedor(a)" value="<?php echo s($vendedor->nombre); ?>">

    <label for="apellido">Apellido:</label>
    <input type="text" id="titulo" name="vendedor[apellido]" placeholder="Apellido Vendedor(a)" value="<?php echo s($vendedor->apellido); ?>">

</fieldset>

<fieldset>
    <legend>Información Extra</legend>
    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="vendedor[telefono]" minlength="10" maxlength="10" placeholder="Teléfono Vendedor(a)" value="<?php echo s($vendedor->telefono); ?>">
</fieldset>