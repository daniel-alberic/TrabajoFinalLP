<?php
// Verificamos si los datos han sido enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Capturamos los datos usando los atributos 'name' del HTML
    $name = $_POST['name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $address_1 = $_POST['address_1'];
    $address_2 = $_POST['address_2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cursos_previos = $_POST['cursos_previos'];
    $company = $_POST['company'];
    $courses = $_POST['courses'];
    $comments = $_POST['comments'];

    // Imprimir el mensaje de éxito y todos los datos capturados
    echo "<h1>¡Inscripción Registrada con Éxito!</h1>";

    // Información del alumno
    echo "<h2>Datos Personales</h2>";
    echo "<p><strong>Nombre completo:</strong> " . $name . " " . $middle_name . " " . $last_name . "</p>";
    echo "<p><strong>Fecha de nacimiento:</strong> " . $birthdate . "</p>";
    echo "<p><strong>Género:</strong> " . $gender . "</p>";

    // Dirección
    echo "<h2>Dirección</h2>";
    echo "<p><strong>Dirección línea 1:</strong> " . $address_1 . "</p>";
    echo "<p><strong>Dirección línea 2:</strong> " . $address_2 . "</p>";
    echo "<p><strong>Ciudad:</strong> " . $city . "</p>";
    echo "<p><strong>Estado / Provincia:</strong> " . $state . "</p>";
    echo "<p><strong>Código Postal:</strong> " . $zip_code . "</p>";

    // Contacto
    echo "<h2>Contacto</h2>";
    echo "<p><strong>Correo electrónico:</strong> " . $email . "</p>";
    echo "<p><strong>Teléfono:</strong> " . $phone . "</p>";

    // Información académica / Cursos
    echo "<h2>Detalles del Curso</h2>";
    echo "<p><strong>¿Ha recibido cursos anteriormente?:</strong> " . $cursos_previos . "</p>";
    echo "<p><strong>Empresa / Company:</strong> " . $company . "</p>";
    echo "<p><strong>Curso seleccionado:</strong> " . $courses . "</p>";

    // Comentarios
    echo "<h2>Comentarios Adicionales</h2>";
    echo "<p><strong>Comentarios:</strong> " . $comments . "</p>";
}
