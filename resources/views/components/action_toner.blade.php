<div x-data="{ open: false }" class="relative inline-block text-left"
     @mouseenter="open = true" 
     @mouseleave="open = false">
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform translate-y-2"
         class="absolute top-full -mt-14 right-0 bg-white border rounded-lg shadow-lg z-10 p-2 flex gap-2">
        <button onclick="document.getElementById('editToner').classList.remove('hidden')" class="px-4 py-2 bg-main text-white rounded-lg hover:bg-blue-600">
            Edit
        </button>
        <button onclick="document.getElementById('updateToner').classList.remove('hidden')" class="px-4 py-2 bg-main text-white rounded-lg hover:bg-blue-600">
            Update
        </button>
    </div>
    
    <button class="p-2 rounded-full hover:bg-gray-200">
        ⋮
    </button>
</div>

{{-- Edit Toner Modal --}}
<div id="editToner"
    class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg w-full max-w-3xl shadow-lg p-6 relative">
        <h2 class="text-xl font-semibold mb-4">Edit Record</h2>
        <form action="" method="POST" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium">Asset Code </label>
                    <input type="text" name="asset_code" class="w-full border rounded-lg p-2">
                </div>
                <div>
                    <label class="block text-sm font-medium">Date Acquired</label>
                    <input type="date" name="date_acquired" class="w-full border rounded-lg p-2">
                </div>
                <div>
                    <label class="block text-sm font-medium">Brand</label>
                    <select name="toner_brand" class="w-full border rounded-lg p-2">
                        <option value="">...</option> 
                        <option value="Epson">Epson</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium">Model</label>
                    <input type="text" name="toner_model" class="w-full border rounded-lg p-2">
                </div>
                <div>
                    <label class="block text-sm font-medium">Type</label>
                    <input type="text" name="toner_type" class="w-full border rounded-lg p-2">
                </div>
                <div>
                    <label class="block text-sm font-medium">Color</label>
                    <select name="toner_color" class="w-full border rounded-lg p-2">
                        <option value="">...</option> 
                        <option value="Cyan">Cyan</option>
                        <option value="Magenta">Magenta</option>
                        <option value="Yellow">Yellow</option>
                        <option value="Key">Key</option> 
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium">Capacity</label>
                    <input type="text" name="toner_capacity" class="w-full border rounded-lg p-2">
                </div>
                <div>
                    <label class="block text-sm font-medium">Quantity</label>
                    <input type="number" name="toner_quantity" class="w-full border rounded-lg p-2">
                </div>
            </div> 
            
            {{-- Buttons --}}
            <div class="flex justify-end gap-3 mt-4">
                <button type="button"
                    onclick="document.getElementById('editToner').classList.add('hidden')"
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
        <button onclick="document.getElementById('editToner').classList.add('hidden')"
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">
            &times;
        </button>
    </div>
</div>


<div id="updateToner"
    class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg w-full max-w-3xl shadow-lg p-6 relative">
        <h2 class="text-xl font-semibold mb-4">Toner Issuance</h2>
        <form action="" method="POST" class="space-y-4">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium"> Date</label>
                    <input type="date" name="toner_issuance_date" class="w-full border rounded-lg p-2">
                </div> 
                <div>
                    <label class="block text-sm font-medium">Ink Issuance </label>
                    <input type="number" name="ink_issuance" class="w-full border rounded-lg p-2">
                </div>
            </div>
            
            {{-- Buttons --}}
            <div class="flex justify-end gap-3 mt-4">
                <button type="button"
                    onclick="document.getElementById('updateToner').classList.add('hidden')"
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
        <button onclick="document.getElementById('updateToner').classList.add('hidden')"
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">
            &times;
        </button>
    </div>
</div>