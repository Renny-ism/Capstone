<div x-data="{ open: false }" class="relative inline-block text-left"
     @mouseenter="open = true" 
     @mouseleave="open = false">
     
    <!-- Dropdown Menu -->
    <div x-show="open"
       x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform translate-y-2"
         x-transition:enter-end="opacity-100 transform translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform translate-y-0"
         x-transition:leave-end="opacity-0 transform translate-y-2"
         class="absolute top-full -mt-14 right-0 bg-white border rounded-lg shadow-lg z-10 p-2 flex gap-2">
        <button onclick="document.getElementById('editPrinter').classList.remove('hidden')" class="px-4 py-2 bg-main text-white rounded-lg hover:bg-blue-600">
            Edit
        </button>
        <a href="/maintenance/m_printer" 
             class="px-4 py-2 bg-gray-300 text-black rounded-lg hover:bg-gray-400">
         Maintenance
        </a>
        <a href="/transfer/computer_peripheral" 
        class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">
        Transfer
        </a>
    </div>
    
    <button class="p-2 rounded-full hover:bg-gray-200">
        ⋮
    </button>
</div>

{{-- Modal --}}
<div id="editPrinter"
    class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">

    <div class="bg-white rounded-lg w-full max-w-3xl shadow-lg p-6 relative">
        <h2 class="text-xl font-semibold mb-4">Edit Record</h2>

        <form action="" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium">Acquired Year </label>
                <input type="date" name="printer_acquired" class="w-full border rounded-lg p-2">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                {{-- Software Name --}}
                <div>
                    <label class="block text-sm font-medium">Asset Code </label>
                    <input type="text" name="printer_asset_code" class="w-full border rounded-lg p-2">
                </div>

                <div>
                    <label class="block text-sm font-medium">Brand</label>
                    <select name="printer_brand" class="w-full border rounded-lg p-2">
                         <option value="Laptop">...</option>     
                        <option value="Laptop">Epson</option>     
                         <option value="Laptop">HP</option>  
                         <option value="Laptop">Canon</option>     
                         <option value="Laptop">BrOther</option>   

                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium">Model</label>
                    <input type="text" name="printer_model" class="w-full border rounded-lg p-2">
                </div>

                <div>
                    <label class="block text-sm font-medium">Type</label>
                    <input type="text" name="printer_type" class="w-full border rounded-lg p-2">
                </div>

                <div>
                    <label class="block text-sm font-medium">Building</label>
                    <select name="dt_building" class="w-full border rounded-lg p-2">
                        <option value="">...</option>
                        <option value="FDT">FDT</option>
                        <option value="PGT">PGT</option>
                        <option value="LRC">LRC</option>
                        <option value="BEdD">BEdD</option>
                    </select>
                </div>
 
                <div>
                    <label class="block text-sm font-medium">Location</label>
                    <input type="text" name="printer_location" class="w-full border rounded-lg p-2">
                </div>
             
               
            </div>

            {{-- Buttons --}}
            <div class="flex justify-end gap-3 mt-4">
                <button type="button"
                    onclick="document.getElementById('editPrinter').classList.add('hidden')"
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
        <button onclick="document.getElementById('editPrinter').classList.add('hidden')"
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">
            &times;
        </button>
    </div>
</div>
