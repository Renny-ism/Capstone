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
        <div class="bg-white rounded-xl shadow-md p-6 relative">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
  <path fill-rule="evenodd" d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
  <path d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
  <path fill-rule="evenodd" d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
                Hardware Under Repair
                </h3>
            
            </div>

            <ul class="space-y-3">
                <li>
                    <p class="font-medium text-blue-600">HP Laptop</p>
                    <p class="text-sm text-gray-600">Category: Laptop | Asset Code: LAP-HP-001</p>
                    <span
                        class="inline-block bg-yellow-700 text-white text-xs px-3 py-1 rounded-md mt-1">Under Repair</span>
                </li>
                <li>
                    <p class="font-medium text-purple-600">Epson Printer</p>
                    <p class="text-sm text-gray-600">Category: Printer | Asset Code: PRN-EPS-004</p>
                    <span
                        class="inline-block bg-yellow-700 text-white text-xs px-3 py-1 rounded-md mt-1">Under Repair</span>
                </li>
                <li>
                    <p class="font-medium text-blue-500">Cisco Router</p>
                    <p class="text-sm text-gray-600">Category: Network Device | Asset Code: NET-CIS-007</p>
                    <span
                        class="inline-block bg-yellow-700 text-white text-xs px-3 py-1 rounded-md mt-1">Under Repair</span>
                </li>
            </ul>

            <a href="#" class="text-sm text-blue-600 hover:underline mt-4 inline-block">View More →</a>
        </div>

        {{-- Upcoming License Expirations --}}
        <div class="bg-white rounded-xl shadow-md p-6 relative">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
                    </svg>
                     Upcoming License Expirations
                </h3>

            </div>

            <ul class="space-y-4">
                <li>
                    <p class="font-medium text-purple-800">Microsoft Office 365</p>
                    <p class="text-sm text-gray-600">Installed on: Admin-PC | Version: 2021 | Type: Enterprise</p>
                    <span
                        class="inline-block bg-yellow-600 text-white text-xs px-3 py-1 rounded-md mt-1">Expires on May
                        6, 2025</span>
                </li>
                <li>
                    <p class="font-medium text-purple-800">Adobe Creative Cloud</p>
                    <p class="text-sm text-gray-600">Installed on: Graphics-01 | Version: 2023 | Type: Annual</p>
                    <span
                        class="inline-block bg-yellow-600 text-white text-xs px-3 py-1 rounded-md mt-1">Expires on May
                        13, 2025</span>
                </li>
                <li>
                    <p class="font-medium text-purple-800">AutoCAD</p>
                    <p class="text-sm text-gray-600">Installed on: Eng-PC01 | Version: 2022 | Type: Professional</p>
                    <span
                        class="inline-block bg-yellow-600 text-white text-xs px-3 py-1 rounded-md mt-1">Expires on May
                        19, 2025</span>
                </li>
            </ul>

            <a href="#" class="text-sm text-blue-600 hover:underline mt-4 inline-block">View More →</a>
        </div>
    </div>

    {{-- Bottom Section --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        {{-- Toner Stock --}}
        <div class="bg-white rounded-xl shadow-md p-6 relative">
            <div class="flex justify-between items-center mb-4">
    <h3 class="text-lg font-semibold flex items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" 
         class="w-6 h-6 text-gray-700">
        <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 0 0 3 3h.27l-.155 1.705A1.875 1.875 0 0 0 7.232 22.5h9.536a1.875 1.875 0 0 0 1.867-2.045l-.155-1.705h.27a3 3 0 0 0 3-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0 0 18 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM16.5 6.205v-2.83A.375.375 0 0 0 16.125 3h-8.25a.375.375 0 0 0-.375.375v2.83a49.353 49.353 0 0 1 9 0Zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 0 1-.374.409H7.232a.375.375 0 0 1-.374-.409l.526-5.784a.373.373 0 0 1 .333-.337 41.741 41.741 0 0 1 8.566 0Zm.967-3.97a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H18a.75.75 0 0 1-.75-.75V10.5ZM15 9.75a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V10.5a.75.75 0 0 0-.75-.75H15Z" clip-rule="evenodd" />
    </svg>
    Toner Stock Availability
    </h3>

                <button class="bg-purple-800 text-white px-4 py-2 rounded-lg hover:bg-purple-900">
                    Add Toner/Ink
                </button>
            </div>

            <ul class="space-y-2">
                <li class="flex justify-between">
                    <span class="font-medium text-purple-800">Black Toner</span>
                    <span class="bg-green-600 text-white text-xs px-3 py-1 rounded-md">10 in Stock</span>
                </li>
                <li class="flex justify-between">
                    <span class="font-medium text-blue-600">Cyan Toner</span>
                    <span class="bg-yellow-600 text-white text-xs px-3 py-1 rounded-md">2 in Stock</span>
                </li>
                <li class="flex justify-between">
                    <span class="font-medium text-pink-600">Magenta Toner</span>
                    <span class="bg-green-600 text-white text-xs px-3 py-1 rounded-md">15 in Stock</span>
                </li>
                <li class="flex justify-between">
                    <span class="font-medium text-yellow-600">Yellow Toner</span>
                    <span class="bg-red-600 text-white text-xs px-3 py-1 rounded-md">0 in Stock</span>
                </li>
            </ul>
        </div>

        {{-- Low Stock Items --}}
        <div class="bg-white rounded-xl shadow-md p-6 relative">
            <h3 class="text-lg font-semibold flex items-center gap-2 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M12.378 1.602a.75.75 0 0 0-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03ZM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 0 0 .372-.648V7.93ZM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 0 0 .372.648l8.628 5.033Z" />
                </svg>
                Low Stock Items
            </h3>

            <ul class="space-y-3">
                <li class="flex justify-between">
                    <span class="font-medium text-blue-600">Cyan Toner</span>
                    <span class="bg-yellow-600 text-white text-xs px-3 py-1 rounded-md">Low</span>
                </li>
                <li class="flex justify-between">
                    <span class="font-medium text-purple-800">Black Toner</span>
                    <span class="bg-red-600 text-white text-xs px-3 py-1 rounded-md">Out</span>
                </li>
                <li class="flex justify-between">
                    <span class="font-medium text-gray-800">USB Keyboards</span>
                    <span class="bg-yellow-600 text-white text-xs px-3 py-1 rounded-md">Low</span>
                </li>
            </ul>

            <a href="#" class="text-sm text-blue-600 hover:underline mt-4 inline-block">View More →</a>
        </div>
    </div>
</div>

{{-- Add Software Modal --}}
<div id="addSoftwareModal"
    class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg w-full max-w-3xl shadow-lg p-6 relative">
        <h2 class="text-xl font-semibold mb-4">Add Record</h2>

        <form action="" method="POST" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                {{-- Software Name --}}
                <div>
                    <label class="block text-sm font-medium">Software Name</label>
                    <input type="text" name="software_name" class="w-full border rounded-lg p-2">
                </div>

                {{-- Version --}}
                <div>
                    <label class="block text-sm font-medium">Version</label>
                    <input type="text" name="version" class="w-full border rounded-lg p-2">
                </div>

                {{-- License Key --}}
                <div>
                    <label class="block text-sm font-medium">License Key</label>
                    <input type="text" name="license_key" class="w-full border rounded-lg p-2">
                </div>

                {{-- Licensed To --}}
                <div>
                    <label class="block text-sm font-medium">Licensed To</label>
                    <input type="text" name="licensed_to" class="w-full border rounded-lg p-2">
                </div>

                {{-- Installation Date --}}
                <div>
                    <label class="block text-sm font-medium">Installation Date</label>
                    <input type="date" name="installation_date" class="w-full border rounded-lg p-2">
                </div>

                {{-- Expiration Date --}}
                <div>
                    <label class="block text-sm font-medium">Expiration Date</label>
                    <input type="date" name="expiration_date" class="w-full border rounded-lg p-2">
                </div>

                {{-- Device Type --}}
                <div>
                    <label class="block text-sm font-medium">Device Type</label>
                    <select name="device_type" class="w-full border rounded-lg p-2">
                        <option value="Laptop">Laptop</option>
                        <option value="Desktop">Desktop</option>
                        <option value="Tablet">Tablet</option>
                        <option value="Not Installed">Not Installed</option>
                    </select>
                </div>

                {{-- Device Asset Code --}}
                <div>
                    <label class="block text-sm font-medium">Device Asset Code</label>
                    <input type="text" name="device_asset_code" class="w-full border rounded-lg p-2">
                </div>

                {{-- Status --}}
                <div>
                    <label class="block text-sm font-medium">Status</label>
                    <select name="status" class="w-full border rounded-lg p-2">
                        <option value="Active">Active</option>
                        <option value="In Stock">In Stock</option>
                    </select>
                </div>
            </div>

            {{-- Buttons --}}
            <div class="flex justify-end gap-3 mt-4">
                <button type="button"
                    onclick="document.getElementById('addSoftwareModal').classList.add('hidden')"
                    class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400">
                    Cancel
                </button>
                <button type="submit"
                    class="px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover">
                    Save
                </button>
            </div>
        </form>

        {{-- Close button --}}
        <button onclick="document.getElementById('addSoftwareModal').classList.add('hidden')"
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">
            &times;
        </button>
    </div>
</div>
