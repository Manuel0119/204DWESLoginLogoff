<div class="codigophp">
    <table>
        <tr>
            <td>
                <?php
                //Damos la bienvenida al usuario
                echo"Bienvenido " . $_SESSION['User204DWESLoginLogoff']->T01_DescUsuario . "<br>";
                echo "Esta es la " . $_SESSION['User204DWESLoginLogoff']->T01_NumConexiones . " vez que te conectas" . "<br/>";
                if (($_SESSION['User204DWESLoginLogoff']->T01_NumConexiones) > 1) {
                    echo "Usted se conectó por última vez " . $_SESSION['User204DWESLoginLogoff']->T01_FechaHoraUltimaConexion . "<br>";
                } else {
                    
                }
                ?>
            </td>
        </tr>
    </table>
    <form name = "ejercicio21" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
        <table class = "formulario">
            <tr>
                <td colspan = "2"><input type = "submit" id = "detalle" value = "Detalle" name = "detalle"></td>
            </tr>
            <tr>
                <td colspan = "2"><input type = "submit" id = "salir" value = "Salir" name = "salir"></td>
            </tr>
        </table>
    </form>
</div>

