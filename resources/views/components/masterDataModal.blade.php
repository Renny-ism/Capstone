<div 
    x-show="masterModal" 
    x-cloak 
    x-data="{ tab: 'brand' }"  
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">

    <div class="bg-white rounded-lg w-full max-w-3xl shadow-lg relative flex flex-col"
         @click.away="masterModal = false">

        <form method="POST" action="#" class="flex flex-col max-h-[90vh]">
            @csrf

            <!-- Header with navigation (fixed) -->
            <div class="flex flex-wrap items-center border-b pb-2 px-6 pt-6 flex-shrink-0">
                <button @click.prevent="tab = 'cpu'" :class="tab === 'cpu' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-4">CPU</button>
                <button @click.prevent="tab = 'memory'" :class="tab === 'memory' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-4">Memory</button>
                <button @click.prevent="tab = 'storage'" :class="tab === 'storage' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-4">Storage</button>
                <button @click.prevent="tab = 'gpu'" :class="tab === 'gpu' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-4">GPU</button>
             
            </div>

            <!-- Modal Body (auto-resizing) -->
            <div 
                class="px-6 py-4 transition-all duration-300"
                :class="{
                    'max-h-[180px] overflow-hidden': ['cpu','storage','gpu','building','college'].includes(tab), 
                    'flex-1 overflow-y-auto max-h-[400px]': tab === 'memory'
                }"
            >
                <!-- Brand -->
                <div x-show="tab === 'cpu'">
                    <div class="flex items-center space-x-4">                    
                        <label class="block text-sm font-medium">Brand</label>
                         <select name="#" class="w-full border rounded-lg p-2">
                                <option value="" disabled selected>Select Brand</option>
                                <option value="....">...</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                            </select>

                    <label class="block text-sm font-medium">Series</label>
                        <div class="relative w-full">
                            <select name="#" class="w-full border rounded-lg p-2">
                                <option value="" disabled selected>Select Series</option>
                                <option value="....">...</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                            </select>
                        </div>
      <label class="block text-sm font-medium">Model</label>
                        <div class="relative w-full">
                           <select name="#" class="w-full border rounded-lg p-2">
                                <option value="" disabled selected>Select Model</option>
                                <option value="....">...</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                            </select>
                        </div>

                    </div>
                    
                    
                </div>

                <!-- RAM -->
                <div x-show="tab === 'memory'" class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <label class="block text-sm font-medium">Brand</label>
                        <select name="#" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Brand</option>
                            <option value="....">...</option>
                            <option value="....">....</option>
                            <option value="....">....</option>
                            <option value="....">....</option>
                        </select>
                        <label class="block text-sm font-medium">Model</label>
                        <div class="relative w-full">
                            <select name="#" class="w-full border rounded-lg p-2">
                                <option value="" disabled selected>Select Series</option>
                                <option value="....">...</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                            </select>
                        </div>
                        <label class="block text-sm font-medium">Type</label>
                        <div class="relative w-full">
                            <select name="#" class="w-full border rounded-lg p-2">
                                <option value="" disabled selected>Select Model</option>
                                <option value="....">...</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <label class="block text-sm font-medium">Capacity</label>
                        <select name="#" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Type</option>
                            <option value="....">...</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                        </select>
                        <label class="block text-sm font-medium">Speed</label>
                        <select name="ram_capacity" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Speed</option>
                            <option value="....">...</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                        </select>
                    </div>
                </div>

                <!-- Storage -->
                <div x-show="tab === 'storage'">
                        <div class="flex items-center space-x-4">
                        <label class="block text-sm font-medium">Brand</label>
                        <select name="#" class="w-full border rounded-lg p-2">
                            <option value="" disabled selected>Select Brand</option>
                            <option value="....">...</option>
                            <option value="....">....</option>
                            <option value="....">....</option>
                            <option value="....">....</option>
                        </select>
                         <label class="block text-sm font-medium">Model</label>
                        <div class="relative w-full">
                            <select name="#" class="w-full border rounded-lg p-2">
                                <option value="" disabled selected>Select Series</option>
                                <option value="....">...</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                            </select>
                        </div>
                        <label class="block text-sm font-medium">Type</label>
                        <div class="relative w-full">
                            <select name="#" class="w-full border rounded-lg p-2">
                                <option value="" disabled selected>Select Type</option>
                                <option value="....">...</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                                <option value="....">....</option>
                            </select>
</div>
</div>                </div>

                <!-- Processor -->
<div x-show="tab === 'gpu'">
    <div class="flex items-center space-x-4 mb-4">
        <div class="w-full">
            <label class="block text-sm font-medium">Brand</label>
            <select name="gpu_brand" class="w-full border rounded-lg p-2">
                <option value="" disabled selected>Select Brand</option>
                <option value="NVIDIA">NVIDIA</option>
                <option value="AMD">AMD</option>
            </select>
        </div>
        <div class="w-full">
            <label class="block text-sm font-medium">Model</label>
            <select name="gpu_model" class="w-full border rounded-lg p-2">
                <option value="" disabled selected>Select Model</option>
                <option value="RTX 4090">RTX 4090</option>
                <option value="RX 7900 XTX">RX 7900 XTX</option>
            </select>
        </div>
    </div>

    <div class="flex items-center space-x-4">
        <div class="w-full">
            <label class="block text-sm font-medium">Memory Type</label>
            <select name="memory_type" class="w-full border rounded-lg p-2">
                <option value="" disabled selected>Select Memory Type</option>
                <option value="GDDR6">GDDR6</option>
                <option value="GDDR6X">GDDR6X</option>
            </select>
        </div>
        <div class="w-full">
            <label class="block text-sm font-medium">Capacity</label>
            <select name="memory_capacity" class="w-full border rounded-lg p-2">
                <option value="" disabled selected>Select Capacity</option>
                <option value="8GB">8GB</option>
                <option value="16GB">16GB</option>
                <option value="24GB">24GB</option>
            </select>
        </div>
    </div>
</div>

                <!-- Building -->
                <div x-show="tab === 'building'">
                    <h2 class="text-lg font-semibold mb-2">Manage Buildings</h2>
                    <input type="text" name="building_name" placeholder="Enter Building Name" class="w-full border rounded-lg p-2">
                </div>

                <!-- College -->
                <div x-show="tab === 'college'">
                    <h2 class="text-lg font-semibold mb-2">Manage College / Department</h2>
                    <input type="text" name="college_name" placeholder="Enter College/Department" class="w-full border rounded-lg p-2">
                </div>
            </div>

            <!-- Footer (fixed) -->
            <div class="flex flex-col md:flex-row md:justify-end md:gap-3 px-6 py-4 border-t flex-shrink-0 gap-2 items-center">
                <button type="button" 
                        @click="masterModal = false"
                        class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 w-full md:w-auto">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover w-full md:w-auto">
                    Save
                </button>
            </div>
        </form>

        <!-- Close Button -->
        <button @click="masterModal = false" 
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">&times;</button>
    </div>
</div>
