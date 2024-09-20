<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker PHP 7.4</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg text-center" x-data="{ message: 'Si ve este archivo es porque el Docker con PHP 7.4 está funcionando correctamente en el puerto 8081' }">
        <h1 class="text-2xl font-bold mb-4">{{ message }}</h1>
        <button @click="message = '¡Mensaje cambiado con Alpine.js!'" class="bg-blue-500 text-white px-4 py-2 rounded">
            Cambiar Mensaje
        </button>
    </div>
</body>
</html>
