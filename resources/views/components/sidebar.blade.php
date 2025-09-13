<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=q, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory System</title>
    
    @vite('resources/css/app.css')
</head>

<body>
    <div class="fixed top-16 left-0 w-64 h-[calc(100vh-4rem)] bg-main text-white flex flex-col border-r border-gray-300">
    <nav class="flex-1 p-4 space-y-2">
        <ul class="space-y-1">
            <li>
                <a href="/admin/dashboard" class="block px-4 py-2 rounded hover:bg-button_hover">Dashboard</a>
            </li>
            <li>
                <a href="/admin/test" class="block px-4 py-2 rounded hover:bg-button_hover">Hardware</a>
            </li>
            <li>
                <a href="/admin/software" class="block px-4 py-2 rounded hover:bg-button_hover">Software</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 rounded hover:bg-button_hover">Toners/Inks</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 rounded hover:bg-button_hover">Reports</a>
            </li>

            <!-- Settings Dropdown -->
            <li>
                <button id="settingsToggle" 
                        class="flex items-center justify-between w-full px-4 py-2 rounded hover:bg-button_hover focus:outline-none">
                    <span>Settings</span>
                    <svg id="settingsArrow" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <ul id="settingsMenu" class="ml-6 mt-1 space-y-1 hidden">
                    <li>
                        <a href="/admin/viewAccounts" class="block px-4 py-2 rounded hover:bg-button_hover">Users Management</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleBtn = document.getElementById("settingsToggle");
        const menu = document.getElementById("settingsMenu");
        const arrow = document.getElementById("settingsArrow");

        toggleBtn.addEventListener("click", function () {
            menu.classList.toggle("hidden");
            arrow.classList.toggle("rotate-180");
        });
    });
</script>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>
