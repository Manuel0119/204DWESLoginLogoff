<div class="codigophp">
    <h1>Login</h1>
    <form name="ejercicio21" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table class="formulario">
            <tr>
                <td><label for="usuario">Usuario:</label></td>
                <td><input type="text" name="usuario" class="entradadatos" value="<?php echo $_REQUEST['usuario'] ?? ''; ?>"/></td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" name="password" class="entradadatos" value="<?php echo $_REQUEST['password'] ?? ''; ?>"/></td>
            </tr>
            <tr>
                <td style="text-align: center" colspan="3">
                    <input type="submit" id="iniciarSesion" value="Iniciar Sesion" name="iniciarSesion">
                </td>
            </tr>
            <tr>
                <td style="text-align: center" colspan="3">
                    <input type="submit" id="registro" name="registro" value="Registrarse">
                </td>
            </tr>
            <tr>
                <td style="text-align: center" colspan="3">
                    <input type="submit" id="cancelar" name="cancelar" value="Cancelar">
                </td>
            </tr>
        </table>
    </form>
</div>

