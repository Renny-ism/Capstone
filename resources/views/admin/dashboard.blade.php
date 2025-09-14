<x-navigationbar />

{{-- Main Content --}}
<div class="bg-gray-50 min-h-screen flex-1 p-6 mt-0 transition-all duration-300 lg:ml-64">

    {{-- Top Stats --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-purple-800 text-white rounded-xl p-6 shadow-md flex flex-col items-center justify-center">
            <h2 class="text-lg font-semibold">Active Software Licenses</h2>
            <p class="text-3xl font-bold mt-2">76</p>
        </div>
        <div class="bg-purple-800 text-white rounded-xl p-6 shadow-md flex flex-col items-center justify-center">
            <h2 class="text-lg font-semibold">Toners Low in Stock</h2>
            <p class="text-3xl font-bold mt-2">5</p>
        </div>
        <div class="bg-purple-800 text-white rounded-xl p-6 shadow-md flex flex-col items-center justify-center">
            <h2 class="text-lg font-semibold">Expiring Software Licenses</h2>
            <p class="text-3xl font-bold mt-2">3</p>
        </div>
    </div>

    {{-- Middle Section --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">

        {{-- Hardware Under Repair --}}
<div class="bg-white rounded-xl shadow-md p-6 relative" x-data="{ open: false }">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold flex items-center gap-2">
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                <path fill-rule="evenodd" d="M14.5 10a4.5 4.5 0 0 0 4.284-5.882c-.105-.324-.51-.391-.752-.15L15.34 6.66a.454.454 0 0 1-.493.11 3.01 3.01 0 0 1-1.618-1.616.455.455 0 0 1 .11-.494l2.694-2.692c.24-.241.174-.647-.15-.752a4.5 4.5 0 0 0-5.873 4.575c.055.873-.128 1.808-.8 2.368l-7.23 6.024a2.724 2.724 0 1 0 3.837 3.837l6.024-7.23c.56-.672 1.495-.855 2.368-.8.096.007.193.01.291.01ZM5 16a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" clip-rule="evenodd" />
                <path d="M14.5 11.5c.173 0 .345-.007.514-.022l3.754 3.754a2.5 2.5 0 0 1-3.536 3.536l-4.41-4.41 2.172-2.607c.052-.063.147-.138.342-.196.202-.06.469-.087.777-.067.128.008.257.012.387.012ZM6 4.586l2.33 2.33a.452.452 0 0 1-.08.09L6.8 8.214 4.586 6H3.309a.5.5 0 0 1-.447-.276l-1.7-3.402a.5.5 0 0 1 .093-.577l.49-.49a.5.5 0 0 1 .577-.094l3.402 1.7A.5.5 0 0 1 6 3.31v1.277Z" />
            </svg>

            Hardware Under Repair
        </h3>
    </div>


            {{-- Dummy Data --}}
            @php
                $hardwareRepairs = [
                    (object)['name' => 'HP Laptop', 'category' => 'Laptop', 'asset_code' => 'LAP-HP-001', 'status' => 'Under Repair'],
                    (object)['name' => 'Epson Printer', 'category' => 'Printer', 'asset_code' => 'PRN-EPS-004', 'status' => 'Under Repair'],
                    (object)['name' => 'Cisco Router', 'category' => 'Network Device', 'asset_code' => 'NET-CIS-007', 'status' => 'Under Repair'],
                    (object)['name' => 'Dell Desktop', 'category' => 'Desktop', 'asset_code' => 'DES-DEL-009', 'status' => 'Under Repair'],
                ];
            @endphp

            <ul class="space-y-3">
                @forelse($hardwareRepairs as $repair)
                    @if ($loop->index < 3)
                        <li>
                            <p class="font-medium text-blue-600">{{ $repair->name }}</p>
                            <p class="text-sm text-gray-600">Category: {{ $repair->category }} | Asset Code: {{ $repair->asset_code }}</p>
                            <span class="inline-block bg-yellow-700 text-white text-xs px-3 py-1 rounded-md mt-1">{{ $repair->status }}</span>
                        </li>
                    @endif
                @empty
                    <li class="text-gray-500 text-sm">No hardware currently under repair.</li>
                @endforelse
            </ul>

            {{-- View More --}}
            <button @click="open = true" class="text-sm text-blue-600 hover:underline mt-4 inline-block">View More →</button>

            {{-- Modal --}}
<div 
    x-show="open" 
    x-cloak 
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
>
    <div class="bg-white rounded-xl shadow-lg w-full max-w-2xl relative">
        
        <!-- Header -->
        <div class="bg-purple-800 text-white rounded-t-xl px-6 py-3">
            <h2 class="text-xl font-semibold">All Hardware Under Repair</h2>
        </div>

        <!-- Body -->
        <div class="p-6">
            <ul class="space-y-3 max-h-80 overflow-y-auto">
                @foreach($hardwareRepairs as $repair)
                    <li class="border-b pb-2">
                        <p class="font-medium text-blue-600">{{ $repair->name }}</p>
                        <p class="text-sm text-gray-600">
                            Category: {{ $repair->category }} | Asset Code: {{ $repair->asset_code }}
                        </p>
                        <span class="inline-block bg-yellow-700 text-white text-xs px-3 py-1 rounded-md mt-1">
                            {{ $repair->status }}
                        </span>
                    </li>
                @endforeach
            </ul>

            <div class="flex justify-end gap-3 mt-6">
                <button 
                    @click="open = false" 
                    class="px-4 py-2 rounded-lg bg-gray-300 hover:bg-gray-400 text-sm"
                >
                    Close
                </button>
            </div>
        </div>

    </div>
</div>
</div>

        {{-- Upcoming License Expirations --}}
        <div class="bg-white rounded-xl shadow-md p-6 relative" x-data="{ open: false }">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold flex items-center gap-2">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="M5.75 2a.75.75 0 0 1 .75.75V4h7V2.75a.75.75 0 0 1 1.5 0V4h.25A2.75 2.75 0 0 1 18 6.75v8.5A2.75 2.75 0 0 1 15.25 18H4.75A2.75 2.75 0 0 1 2 15.25v-8.5A2.75 2.75 0 0 1 4.75 4H5V2.75A.75.75 0 0 1 5.75 2Zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75Z" clip-rule="evenodd" />
                    </svg>

                    
                    Upcoming License Expirations</h3>
            </div>

            {{-- Dummy Data --}}
            @php
                $upcomingLicenses = [
                    (object)['software' => 'Microsoft Office 365', 'pc' => 'Admin-PC', 'version' => '2021', 'type' => 'Enterprise', 'expiry' => 'May 6, 2025'],
                    (object)['software' => 'Adobe Creative Cloud', 'pc' => 'Graphics-01', 'version' => '2023', 'type' => 'Annual', 'expiry' => 'May 13, 2025'],
                    (object)['software' => 'AutoCAD', 'pc' => 'Eng-PC01', 'version' => '2022', 'type' => 'Professional', 'expiry' => 'May 19, 2025'],
                    (object)['software' => 'Zoom Pro', 'pc' => 'ConfRoom-01', 'version' => '2024', 'type' => 'Annual', 'expiry' => 'June 2, 2025'],
                ];
            @endphp

            <ul class="space-y-3">
                @forelse($upcomingLicenses as $license)
                    @if ($loop->index < 3)
                        <li>
                            <p class="font-medium text-purple-800">{{ $license->software }}</p>
                            <p class="text-sm text-gray-600">Installed on: {{ $license->pc }} | Version: {{ $license->version }} | Type: {{ $license->type }}</p>
                            <span class="inline-block bg-yellow-600 text-white text-xs px-3 py-1 rounded-md mt-1">Expires on {{ $license->expiry }}</span>
                        </li>
                    @endif
                @empty
                    <li class="text-gray-500 text-sm">No upcoming license expirations.</li>
                @endforelse
            </ul>

            {{-- View More --}}
            <button @click="open = true" class="text-sm text-blue-600 hover:underline mt-4 inline-block">View More →</button>

            {{-- Modal --}}
<div 
    x-show="open" 
    x-cloak 
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
>
    <div class="bg-white rounded-xl shadow-lg w-full max-w-2xl relative">
        
        <!-- Header -->
        <div class="bg-purple-800 text-white rounded-t-xl px-6 py-3">
            <h2 class="text-xl font-semibold">All Upcoming License Expirations</h2>
        </div>

        <!-- Body -->
        <div class="p-6">
            <ul class="space-y-3 max-h-80 overflow-y-auto">
                @foreach($upcomingLicenses as $license)
                    <li class="border-b pb-2">
                        <p class="font-medium text-purple-800">{{ $license->software }}</p>
                        <p class="text-sm text-gray-600">
                            Installed on: {{ $license->pc }} | Version: {{ $license->version }} | Type: {{ $license->type }}
                        </p>
                        <span class="inline-block bg-yellow-600 text-white text-xs px-3 py-1 rounded-md mt-1">
                            Expires on {{ $license->expiry }}
                        </span>
                    </li>
                @endforeach
            </ul>

            <div class="flex justify-end gap-3 mt-6">
                <button 
                    @click="open = false" 
                    class="px-4 py-2 rounded-lg bg-gray-300 hover:bg-gray-400 text-sm"
                >
                    Close
                </button>
            </div>
        </div>

    </div>
</div>
</div>
</div>


    {{-- Bottom Section --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        {{-- Toner Stock Availability --}}
        <div class="bg-white rounded-xl shadow-md p-6 relative" x-data="{ open: false }">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold flex items-center gap-2">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="M5 2.75C5 1.784 5.784 1 6.75 1h6.5c.966 0 1.75.784 1.75 1.75v3.552c.377.046.752.097 1.126.153A2.212 2.212 0 0 1 18 8.653v4.097A2.25 2.25 0 0 1 15.75 15h-.241l.305 1.984A1.75 1.75 0 0 1 14.084 19H5.915a1.75 1.75 0 0 1-1.73-2.016L4.492 15H4.25A2.25 2.25 0 0 1 2 12.75V8.653c0-1.082.775-2.034 1.874-2.198.374-.056.75-.107 1.127-.153L5 6.25v-3.5Zm8.5 3.397a41.533 41.533 0 0 0-7 0V2.75a.25.25 0 0 1 .25-.25h6.5a.25.25 0 0 1 .25.25v3.397ZM6.608 12.5a.25.25 0 0 0-.247.212l-.693 4.5a.25.25 0 0 0 .247.288h8.17a.25.25 0 0 0 .246-.288l-.692-4.5a.25.25 0 0 0-.247-.212H6.608Z" clip-rule="evenodd" />
                    </svg>

                    
                    Toner Stock Availability</h3>
            </div>

            {{-- Dummy Data --}}
            @php
                $tonerStocks = [
                    (object)['brand' => 'Black Toner', 'quantity' => 10],
                    (object)['brand' => 'Cyan Toner', 'quantity' => 2],
                    (object)['brand' => 'Magenta Toner', 'quantity' => 15],
                    (object)['brand' => 'Yellow Toner', 'quantity' => 0],
                ];
            @endphp

            <ul class="space-y-3">
                @forelse($tonerStocks as $toner)
                    @if ($loop->index < 3)
                        <li class="flex justify-between">
                            <span class="font-medium text-purple-800">{{ $toner->brand }}</span>
                            <span class="bg-{{ $toner->quantity == 0 ? 'red' : ($toner->quantity <= 2 ? 'yellow' : 'green') }}-600 text-white text-xs px-3 py-1 rounded-md">
                                {{ $toner->quantity }} in Stock
                            </span>
                        </li>
                    @endif
                @empty
                    <li class="text-gray-500 text-sm">No toner stock records.</li>
                @endforelse
            </ul>

            {{-- View More --}}
            <button @click="open = true" class="text-sm text-blue-600 hover:underline mt-4 inline-block">View More →</button>

            {{-- Modal --}}
<div 
    x-show="open" 
    x-cloak 
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
>
    <div class="bg-white rounded-xl shadow-lg w-full max-w-2xl relative">
        
        <!-- Header -->
        <div class="bg-purple-800 text-white rounded-t-xl px-6 py-3">
            <h2 class="text-xl font-semibold">All Toner Stock Availability</h2>
        </div>

        <!-- Body -->
        <div class="p-6">
            <ul class="space-y-3 max-h-80 overflow-y-auto">
                @foreach($tonerStocks as $toner)
                    <li class="border-b pb-2 flex justify-between">
                        <span class="font-medium text-purple-800">{{ $toner->brand }}</span>
                        <span class="bg-{{ $toner->quantity == 0 ? 'red' : ($toner->quantity <= 2 ? 'yellow' : 'green') }}-600 text-white text-xs px-3 py-1 rounded-md">
                            {{ $toner->quantity }} in Stock
                        </span>
                    </li>
                @endforeach
            </ul>

            <div class="flex justify-end gap-3 mt-6">
                <button 
                    @click="open = false" 
                    class="px-4 py-2 rounded-lg bg-gray-300 hover:bg-gray-400 text-sm"
                >
                    Close
                </button>
            </div>
        </div>

    </div>
</div>
        </div>

        {{-- Low Stock Items --}}
        <div class="bg-white rounded-xl shadow-md p-6 relative" x-data="{ open: false }">
            <h3 class="text-lg font-semibold flex items-center gap-2 mb-4">
                
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                <path fill-rule="evenodd" d="M1.22 5.222a.75.75 0 0 1 1.06 0L7 9.942l3.768-3.769a.75.75 0 0 1 1.113.058 20.908 20.908 0 0 1 3.813 7.254l1.574-2.727a.75.75 0 0 1 1.3.75l-2.475 4.286a.75.75 0 0 1-1.025.275l-4.287-2.475a.75.75 0 0 1 .75-1.3l2.71 1.565a19.422 19.422 0 0 0-3.013-6.024L7.53 11.533a.75.75 0 0 1-1.06 0l-5.25-5.25a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>

                
                Low Stock Items</h3>

            {{-- Dummy Data --}}
            @php
                $lowStockItems = [
                    (object)['item' => 'Cyan Toner', 'status' => 'Low'],
                    (object)['item' => 'Black Toner', 'status' => 'Out'],
                    (object)['item' => 'USB Keyboards', 'status' => 'Low'],
                    (object)['item' => 'HDMI Cables', 'status' => 'Low'],
                ];
            @endphp

            <ul class="space-y-3">
                @forelse($lowStockItems as $lowStock)
                    @if ($loop->index < 3)
                        <li class="flex justify-between">
                            <span class="font-medium text-blue-600">{{ $lowStock->item }}</span>
                            <span class="bg-{{ $lowStock->status == 'Out' ? 'red' : 'yellow' }}-600 text-white text-xs px-3 py-1 rounded-md">{{ $lowStock->status }}</span>
                        </li>
                    @endif
                @empty
                    <li class="text-gray-500 text-sm">No low stock items.</li>
                @endforelse
            </ul>

            {{-- View More --}}
            <button @click="open = true" class="text-sm text-blue-600 hover:underline mt-4 inline-block">View More →</button>

            {{-- Modal --}}
<div 
    x-show="open" 
    x-cloak 
    class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50"
>
    <div class="bg-white rounded-xl shadow-lg w-full max-w-2xl relative">
        
        <!-- Header -->
        <div class="bg-purple-800 text-white rounded-t-xl px-6 py-3">
            <h2 class="text-xl font-semibold">All Low Stock Items</h2>
        </div>

        <!-- Body -->
        <div class="p-6">
            <ul class="space-y-3 max-h-80 overflow-y-auto">
                @foreach($lowStockItems as $lowStock)
                    <li class="border-b pb-2 flex justify-between">
                        <span class="font-medium text-blue-600">{{ $lowStock->item }}</span>
                        <span class="bg-{{ $lowStock->status == 'Out' ? 'red' : 'yellow' }}-600 text-white text-xs px-3 py-1 rounded-md">
                            {{ $lowStock->status }}
                        </span>
                    </li>
                @endforeach
            </ul>

            <div class="flex justify-end gap-3 mt-6">
                <button 
                    @click="open = false" 
                    class="px-4 py-2 rounded-lg bg-gray-300 hover:bg-gray-400 text-sm"
                >
                    Close
                </button>
            </div>
        </div>

