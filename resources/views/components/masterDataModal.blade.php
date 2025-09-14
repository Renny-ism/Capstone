<div 
    x-show="masterModal" 
    x-cloak 
    x-data="{ tab: 'brand' }"  
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">

    <div class="bg-white rounded-lg w-full max-w-3xl shadow-lg relative flex flex-col"
         @click.away="masterModal = false">

        <form method="POST" action="#" class="flex flex-col max-h-[90vh] overflow-auto">
            @csrf

            <!-- Modal Title / Label -->
            <div class="px-6 py-3 bg-[#EDEDED] rounded-t-lg">
                <h2 class="text-lg font-semibold text-gray-800">Add New Item Option</h2>
                <p class="text-sm text-gray-600">
                    Fill out details to create a new selectable option for items.
                </p>
            </div>

            <!-- Header with navigation -->
            <div class="flex flex-wrap items-center pb-2 px-6 pt-4 flex-shrink-0 gap-2">
                <button @click.prevent="tab = 'cpu'" :class="tab === 'cpu' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-2">CPU</button>
                <button @click.prevent="tab = 'memory'" :class="tab === 'memory' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-2">Memory</button>
                <button @click.prevent="tab = 'storage'" :class="tab === 'storage' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-2">Storage</button>
                <button @click.prevent="tab = 'gpu'" :class="tab === 'gpu' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-2">GPU</button>
            </div>

            <!-- Modal Body (auto-resizing) -->
            <div 
                class="px-6 py-4 transition-all duration-300"
                :class="{
                    'max-h-[180px] overflow-hidden': ['cpu','storage','gpu','building','college'].includes(tab), 
                    'flex-1 overflow-y-auto max-h-[400px]': tab === 'memory'
                }"
            >
                <!-- CPU -->
                <div x-show="tab === 'cpu'" class="flex flex-wrap items-center gap-4">
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Brand</label>
                        <select name="cpu_brand" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Brand</option>
                            <option>Intel</option>
                            <option>AMD</option>
                        </select>
                    </div>

                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Series</label>
                        <select name="cpu_series" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Series</option>
                            <option>Core i7</option>
                            <option>Ryzen 7</option>
                        </select>
                    </div>

                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Model</label>
                        <select name="cpu_model" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Model</option>
                            <option>13700K</option>
                            <option>7700X</option>
                        </select>
                    </div>
                </div>

                <!-- Memory -->
                <div x-show="tab === 'memory'" class="flex flex-wrap gap-4">
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Brand</label>
                        <select name="memory_brand" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Brand</option>
                            <option>Corsair</option>
                            <option>G.Skill</option>
                        </select>
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Model</label>
                        <select name="memory_model" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Model</option>
                            <option>Trident Z</option>
                            <option>Vengeance</option>
                        </select>
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Type</label>
                        <select name="memory_type" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Type</option>
                            <option>DDR4</option>
                            <option>DDR5</option>
                        </select>
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Capacity</label>
                        <select name="memory_capacity" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Capacity</option>
                            <option>16GB</option>
                            <option>32GB</option>
                        </select>
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Speed</label>
                        <select name="memory_speed" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Speed</option>
                            <option>3200MT/s</option>
                            <option>6400MT/s</option>
                        </select>
                    </div>
                </div>

                <!-- Storage -->
                <div x-show="tab === 'storage'" class="flex flex-wrap gap-4">
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Brand</label>
                        <select name="storage_brand" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Brand</option>
                            <option>Samsung</option>
                            <option>WD</option>
                        </select>
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Model</label>
                        <select name="storage_model" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Model</option>
                            <option>970 EVO</option>
                            <option>Blue SN570</option>
                        </select>
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Type</label>
                        <select name="storage_type" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Type</option>
                            <option>SSD</option>
                            <option>HDD</option>
                        </select>
                    </div>
                </div>

                <!-- GPU -->
                <div x-show="tab === 'gpu'" class="flex flex-wrap gap-4">
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Brand</label>
                        <select name="gpu_brand" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Brand</option>
                            <option>NVIDIA</option>
                            <option>AMD</option>
                        </select>
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Model</label>
                        <select name="gpu_model" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Model</option>
                            <option>RTX 4090</option>
                            <option>RX 7900 XTX</option>
                        </select>
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Memory Type</label>
                        <select name="gpu_memory_type" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Memory Type</option>
                            <option>GDDR6</option>
                            <option>GDDR6X</option>
                        </select>
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Capacity</label>
                        <select name="gpu_memory_capacity" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Capacity</option>
                            <option>8GB</option>
                            <option>16GB</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex flex-col md:flex-row md:justify-end md:gap-3 px-6 py-4 gap-2 items-center">
                <button type="button" 
                        @click="masterModal = false"
                        class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 w-full md:w-auto">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover w-full md:w-auto">
                    Add
                </button>
            </div>
        </form>

        <!-- Close Button -->
        <button @click="masterModal = false" 
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">&times;</button>
    </div>
</div>
