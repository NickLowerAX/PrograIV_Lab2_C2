# Sistema de Registro de Estudiantes


<h2>usuario previamente guardado en la BD:</h2>

<p>user: admin</p>
<p>contraseña: 1234</p>

<h2>Gestión del Login de Usuarios</h2>
<p>
El login se maneja validando los datos que el usuario ingresa (usuario y contraseña) 
contra los registros almacenados en la base de datos. 
Cuando el usuario envía el formulario, los datos se envían al servidor, donde se realiza 
una consulta para verificar si el usuario existe. 
Si los datos coinciden, se inicia una sesión para mantener al usuario autenticado; 
en caso contrario, se muestra un mensaje de error.
</p>

<hr>

<h2>¿Por qué usar bases de datos y no solo variables?</h2>
<p>
Las bases de datos permiten guardar información de forma permanente y organizada, 
mientras que las variables almacenan datos de forma temporal y se pierden al cerrar 
la aplicación o recargar la página.
</p>

<hr>

<h2>Uso de Base de Datos, Sesiones y Cookies</h2>
<ul>
    <li><strong>Base de datos:</strong> Se utiliza para almacenar información permanente como usuarios y registros.</li>
    <li><strong>Sesiones:</strong> Se usan para datos temporales durante la ejecución del sistema, como mantener al usuario logueado.</li>
    <li><strong>Cookies:</strong> Se utilizan para recordar información en el navegador del usuario, como preferencias.</li>
</ul>

<hr>

<h2>Descripción de Tablas y Tipos de Datos</h2>

<h3>Tabla: usuarios</h3>
<table border="1">
    <tr>
        <th>Campo</th>
        <th>Tipo de dato</th>
        <th>Justificación</th>
    </tr>
    <tr>
        <td>id</td>
        <td>INT (PK, AUTO_INCREMENT)</td>
        <td>Identificador único para cada usuario</td>
    </tr>
    <tr>
        <td>usuario</td>
        <td>VARCHAR</td>
        <td>Permite almacenar texto (nombre de usuario)</td>
    </tr>
    <tr>
        <td>correo</td>
        <td>VARCHAR</td>
        <td>Adecuado para almacenar correos electrónicos</td>
    </tr>
    <tr>
        <td>contraseña</td>
        <td>VARCHAR</td>
        <td>Permite almacenar contraseñas encriptadas</td>
    </tr>
</table>

<br>

<h3>Tabla: estudiantes</h3>
<table border="1">
    <tr>
        <th>Campo</th>
        <th>Tipo de dato</th>
        <th>Justificación</th>
    </tr>
    <tr>
        <td>id</td>
        <td>INT (PK, AUTO_INCREMENT)</td>
        <td>Identificador único para cada registro</td>
    </tr>
    <tr>
        <td>nombre</td>
        <td>VARCHAR</td>
        <td>Permite almacenar nombres con diferentes caracteres</td>
    </tr>
    <tr>
        <td>edad</td>
        <td>INT</td>
        <td>Almacena valores numéricos sin decimales</td>
    </tr>
    <tr>
        <td>carrera</td>
        <td>VARCHAR</td>
        <td>Permite almacenar texto de la carrera</td>
    </tr>
    <tr>
        <td>correo</td>
        <td>VARCHAR</td>
        <td>Adecuado para almacenar correos electrónicos</td>
    </tr>
</table>
