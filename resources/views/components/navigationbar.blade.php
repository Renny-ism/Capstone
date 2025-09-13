<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    @vite('resources/css/app.css')
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body 
    x-data="{ profileOpen: false, sidebarOpen: window.innerWidth >= 1024, masterModal: false }"
    x-init="window.addEventListener('resize', () => { sidebarOpen = window.innerWidth >= 1024; });"
    class="bg-gray-100"
>
>
    <!-- Navbar -->
    <div class="fixed top-0 left-0 w-full h-16 bg-main text-white flex items-center justify-between px-6 shadow-md z-50">
        <div class="flex items-center space-x-3">
            <!-- Hamburger -->
            <button @click="sidebarOpen = !sidebarOpen" class="p-2 rounded-md hover:bg-button_hover focus:outline-none lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button> 
            <a href="{{ url(path: 'admin/dashboard') }}">
                <img src="{{ url(path: 'MCULOGO.png') }}" alt="Logo" class="h-8">
            </a>
        </div>

        <!-- Profile -->
        <div class="relative">
            <button @click="profileOpen = !profileOpen" class="flex items-center space-x-2 focus:outline-none">
                <span class="hidden sm:block">Admin</span>
                <img src="{{ url(path: 'PROFILE.png') }}" alt="Profile" class="w-8 h-8 rounded-full border-2 border-white">
            </button>
            <div x-cloak x-show="profileOpen" @click.away="profileOpen = false" x-transition
                class="absolute right-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-lg z-50">
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Your profile</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                <form method="POST" action="#">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Sign out</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Overlay for mobile -->
    <div 
        x-show="sidebarOpen && window.innerWidth < 1024" 
        x-transition.opacity 
        @click="sidebarOpen = false"
        class="fixed inset-0 bg-black bg-opacity-50 z-40"
    ></div>

    <!-- Sidebar -->
    <div 
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" 
        class="fixed top-16 left-0 w-64 h-[calc(100vh-4rem)] bg-main text-white flex flex-col border-r border-gray-300 transform transition-transform duration-300 z-50"
    >
        <nav class="flex-1 p-4 space-y-2">
            <ul class="space-y-1">
                <li><a href="/admin/dashboard" class="block px-4 py-2 rounded hover:bg-button_hover">Dashboard</a></li>
                <li><a href="/admin/overall" class="block px-4 py-2 rounded hover:bg-button_hover">Overall Inventory</a></li>

                <li x-data="{ hardwareOpen: false }">
    <button 
        @click="hardwareOpen = !hardwareOpen" 
        class="flex items-center justify-between w-full px-4 py-2 rounded hover:bg-button_hover focus:outline-none"> <!-- pang activate ng hardware dropdownn !-->
        <span>Hardware</span>
            <!-- Arrow icon ng dropdown -->
            <svg :class="hardwareOpen ? 'rotate-180' : ''" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>
                    <!-- Dropdown option -->
                    <ul x-show="hardwareOpen" x-cloak class="ml-6 mt-1 space-y-1">
                        <li>
                            <a href="/admin/laptop" class="block px-4 py-2 rounded hover:bg-button_hover">Laptop</a>
                        </li>
                        <li>
                            <a href="/admin/desktop" class="block px-4 py-2 rounded hover:bg-button_hover">Desktop</a>
                        </li>
                        <li>
                            <a href="/admin/ComputerEquipment" class="block px-4 py-2 rounded hover:bg-button_hover">Desktop Peripheral</a>
                        </li>
                         <li>
                            <a href="/admin/network" class="block px-4 py-2 rounded hover:bg-button_hover">Network Peripherals</a>
                        </li>
                        <li>
                            <a href="/admin/telephone" class="block px-4 py-2 rounded hover:bg-button_hover">Telephone</a>
                        </li>
                        <!-- dropdwon within a dropdown// dropdown ng printer -->
                  <li x-data="{ printerOpen: false }">

                        <button 
                        @click="printerOpen = !printerOpen" 
                        class="flex items-center justify-between w-full px-4 py-2 rounded hover:bg-button_hover focus:outline-none"> <!-- pang activate ng printer dropdownn !-->
                        <span>Printer Peripherals</span>
                            <!-- Arrow icon ng dropdown //flips upside down pag napindot -->
                            <svg :class="printerOpen ? 'rotate-180' : ''" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <ul x-show="printerOpen" x-cloak class="ml-6 mt-1 space-y-1">
                                    <li>
                                    <a href="/admin/printer" class="block px-4 py-2 rounded hover:bg-button_hover">Printer</a>
                                    </li>
                                    <li>
                                    <a href="/admin/toner" class="block px-4 py-2 rounded hover:bg-button_hover">Toner</a>
                                    </li>
                                    <li>
                                    <a href="/admin/ink" class="block px-4 py-2 rounded hover:bg-button_hover">Ink</a>
                                    </li>
                        </ul>
                    </ul>
</li>
                <li><a href="/admin/software" class="block px-4 py-2 rounded hover:bg-button_hover">Software</a></li>
                <li x-data="{ settingsOpen: false }">
                    <button @click="settingsOpen = !settingsOpen" class="flex items-center justify-between w-full px-4 py-2 rounded hover:bg-button_hover focus:outline-none">
                        <span>Settings</span>
                        <svg :class="settingsOpen ? 'rotate-180' : ''" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="settingsOpen" x-cloak class="ml-6 mt-1 space-y-1">
                        <li><a href="/admin/viewAccounts" class="block px-4 py-2 rounded hover:bg-button_hover">Users Management</a></li>
                    </ul>
                    <ul x-show="settingsOpen" x-cloak class="ml-6 mt-1 space-y-1">
                      <button 
                        @click="masterModal = true" 
                        class="block w-full text-left px-4 py-2 rounded hover:bg-button_hover">
                        Item Settings
                    </button>
                     <li x-data="{ InfoSettings: false }">
                    <button @click="InfoSettings = !InfoSettings" class="flex items-center justify-between w-full px-4 py-2 rounded hover:bg-button_hover focus:outline-none">
                        <span>Information Settings</span>
                        <svg :class="InfoSettings ? 'rotate-180' : ''" class="w-4 h-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    
                    <ul x-show="InfoSettings" x-cloak class="ml-6 mt-1 space-y-1">
                        <li>
                    <button 
                        @click="masterModal = true" 
                        class="block w-full text-left px-4 py-2 rounded hover:bg-button_hover">
                        Hardware
                    </button>
                    <button 
                        @click="masterModal = true" 
                        class="block w-full text-left px-4 py-2 rounded hover:bg-button_hover">
                        Endorsement
                    </button>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Page Content -->
    <main 
    :class="{
        'ml-64': sidebarOpen && window.innerWidth >= 1024,
        'ml-0': window.innerWidth < 1024
    }"
    class="pt-16 transition-all duration-300 flex justify-center lg:justify-start"
>
    <div class="w-full max-w-7xl px-4">
        {{ $slot }}
    </div>
</main>

    @include('components.masterDataModal')
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
