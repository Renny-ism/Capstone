<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MCU</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-900 min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-6xl flex flex-col md:flex-row items-center md:space-x-12">

        
        <div class="w-full md:w-1/2 flex justify-center mb-8 md:mb-0">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" 
                 alt="Illustration" 
                 class="w-3/4 sm:w-2/3 md:w-full max-w-sm md:max-w-md">
        </div>

    
        <div class="w-full md:w-1/2 bg-white/10 rounded-2xl shadow-lg p-8 sm:p-10 text-white">
            <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-center">Sign in</h2>

            <!-- Microsoft Teams Button -->
            <a href="/login/microsoft"
               class="w-full flex items-center justify-center space-x-2 bg-blue-600 hover:bg-blue-700 text-white py-3 sm:py-4 rounded-lg shadow transition text-sm sm:text-base">
                <img src="https://cdn.iconscout.com/icon/free/png-256/free-microsoft-teams-21-761688.png" 
                     alt="Teams" class="w-6 h-6 sm:w-7 sm:h-7">
                <span>Sign in with Microsoft Teams</span>
            </a>
        </div>
    </div>
</body>
</html>
