<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carpe Diem Chatbot</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Simulación de una página de Carpe Diem -->
    <header class="navbar">
        <div class="logo">Carpe Diem</div>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Mi red</a>
            <a href="#">Empleos</a>
            <a href="#">Mensajes</a>
        </nav>
    </header>

    <main>
        <!-- Sección de perfil -->
        <section class="profile">
            <h2>Perfil de Usuario</h2>
            <img src="https://via.placeholder.com/100" alt="Foto de perfil">
            <p>Nombre del usuario</p>
            <p>Puesto actual</p>
        </section>

        <!-- Chatbot -->
        <section class="chatbot-container">
            <div id="chatbox">
                <div id="messages"></div>
                <form id="chat-form" action="chatbot.php" method="POST">
                    <input type="text" name="userMessage" id="userMessage" placeholder="Escribe tu mensaje...">
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>

    <script>
        // Capturar el envío del formulario sin recargar la página
        document.getElementById('chat-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            var userMessage = document.getElementById('userMessage').value;
            var messagesDiv = document.getElementById('messages');

            if (userMessage) {
                var userHtml = `<div class='user-message'>${userMessage}</div>`;
                messagesDiv.innerHTML += userHtml;

                fetch('chatbot.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: 'userMessage=' + encodeURIComponent(userMessage)
                })
                .then(response => response.text())
                .then(botResponse => {
                    var botHtml = `<div class='bot-message'>${botResponse}</div>`;
                    messagesDiv.innerHTML += botHtml;
                    document.getElementById('userMessage').value = ''; // Limpiar campo
                });
            }
        });
    </script>
</body>
</html>
