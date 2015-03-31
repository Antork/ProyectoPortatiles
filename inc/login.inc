<div id="usuario">
    <form id="login">
        <label for="user_log">Usuario:</label>
        <input id="user_log" class="form_log" type="email" name="usuario" placeholder="algo@ejemplo.com" maxlength="25" size="25" required>
        <label for="clave_log">Contraseña:</label>
        <input id="clave_log" class="form_log" type="password" name="clave" maxlength="10" size="25" required>  
        <!--
        <input class="botones_log" type="submit" name="enviar" value="Entrar">
        <input class="botones_log" type="button" name="entrar" value="Entrar">
        -->
        <input class="botones_log" type="button" name="entrar" value="Entrar" onclick="location.href='registro.php'">
        <input class="botones_log" type="button" name="registrarse" value="Registrarse" onclick="location.href='registro.php'">
        <!--
        <a class="botones_log" href="registro.php">Entrar</a>   
        <a class="botones_log" href="registro.php">Registrarse</a>  
        <a href="registro.php"><input class="botones_log" type="button" name="registrarse" value="Registrarse"></a> 
        <a href="registro.php"><input class="botones_log" type="button" name="registrarse" value="Registrarse"></a> 
        -->
    </form>
</div>