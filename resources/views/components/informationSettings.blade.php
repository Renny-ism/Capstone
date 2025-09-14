<div 
    x-show="informationModal" 
    x-cloak 
    x-data="{ tab: 'brand' }"  
    class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">

    <div class="bg-white rounded-lg w-full max-w-3xl shadow-lg relative flex flex-col"
         @click.away="informationModal = false">

        <form method="POST" action="#" class="flex flex-col max-h-[90vh] overflow-auto">
            @csrf

            <!-- Modal Title -->
            <div class="px-6 py-3 rounded-t-lg bg-[#EDEDED]">
                <h2 class="text-xl font-semibold text-gray-800">
                    Add New Information Record
                </h2>
                <p class="text-sm text-gray-500">
                    Add brands, models, or details not yet in the system.
                </p>
            </div>

            <!-- Header with navigation -->
            <div class="flex flex-wrap items-center pb-2 px-6 mt-4 flex-shrink-0 gap-2">
                <button @click.prevent="tab = 'cpu'" :class="tab === 'cpu' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-2">CPU</button>
                <button @click.prevent="tab = 'memory'" :class="tab === 'memory' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-2">Memory</button>
                <button @click.prevent="tab = 'storage'" :class="tab === 'storage' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-2">Storage</button>
                <button @click.prevent="tab = 'gpu'" :class="tab === 'gpu' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-2">GPU</button>
                <button @click.prevent="tab = 'building'" :class="tab === 'building' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-2">Building</button>
                <button @click.prevent="tab = 'college'" :class="tab === 'college' ? 'font-semibold underline text-main' : 'text-gray-600'" class="mr-2">College</button>
            </div>

            <!-- Modal Body -->
            <div 
                class="px-6 py-4 transition-all duration-300"
                :class="{
                    'max-h-[180px] overflow-hidden': ['cpu','storage','gpu','building','college'].includes(tab), 
                    'flex-1 overflow-y-auto max-h-[400px]': tab === 'memory'
                }"
            >
                <!-- CPU -->
                <div x-show="tab === 'cpu'" class="flex flex-wrap gap-4">
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Brand</label>
                        <input type="text" name="cpu_brand" placeholder="Enter CPU Brand" class="w-full border rounded-lg p-2">
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Series</label>
                        <input type="text" name="cpu_series" placeholder="Enter CPU Series" class="w-full border rounded-lg p-2">
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Model</label>
                        <input type="text" name="cpu_model" placeholder="Enter CPU Model" class="w-full border rounded-lg p-2">
                    </div>
                </div>

                <!-- Memory -->
                <div x-show="tab === 'memory'" class="flex flex-wrap gap-4">
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Brand</label>
                        <input type="text" name="memory_brand" placeholder="Enter Memory Brand" class="w-full border rounded-lg p-2">
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Model</label>
                        <input type="text" name="memory_model" placeholder="Enter Memory Model" class="w-full border rounded-lg p-2">
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Type</label>
                        <input type="text" name="memory_type" placeholder="Enter Memory Type" class="w-full border rounded-lg p-2">
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Capacity</label>
                        <input type="text" name="memory_capacity" placeholder="Enter Capacity (e.g. 16GB)" class="w-full border rounded-lg p-2">
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Speed</label>
                        <input type="text" name="memory_speed" placeholder="Enter Speed (e.g. 3200MHz)" class="w-full border rounded-lg p-2">
                    </div>
                </div>

                <!-- Storage -->
                <div x-show="tab === 'storage'" class="flex flex-wrap gap-4">
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Brand</label>
                        <input type="text" name="storage_brand" placeholder="Enter Storage Brand" class="w-full border rounded-lg p-2">
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Model</label>
                        <input type="text" name="storage_model" placeholder="Enter Storage Model" class="w-full border rounded-lg p-2">
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Type</label>
                        <input type="text" name="storage_type" placeholder="Enter Storage Type (SSD/HDD)" class="w-full border rounded-lg p-2">
                    </div>
                </div>

                <!-- GPU -->
                <div x-show="tab === 'gpu'" class="flex flex-wrap gap-4">
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Brand</label>
                        <input type="text" name="gpu_brand" placeholder="Enter GPU Brand" class="w-full border rounded-lg p-2">
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Model</label>
                        <input type="text" name="gpu_model" placeholder="Enter GPU Model" class="w-full border rounded-lg p-2">
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Memory Type</label>
                        <input type="text" name="gpu_memory_type" placeholder="Enter GPU Memory Type" class="w-full border rounded-lg p-2">
                    </div>
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Capacity</label>
                        <input type="text" name="gpu_memory_capacity" placeholder="Enter GPU Memory Capacity" class="w-full border rounded-lg p-2">
                    </div>
                </div>

                <!-- Building -->
                <div x-show="tab === 'building'" class="flex flex-wrap gap-4">
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">Building Name</label>
                        <input type="text" name="building_name" placeholder="Enter Building Name" class="w-full border rounded-lg p-2">
                    </div>
                </div>

                <!-- College -->
                <div x-show="tab === 'college'" class="flex flex-wrap gap-4">
                    <div class="flex-1 min-w-[120px]">
                        <label class="block text-sm font-medium">College/Department</label>
                        <input type="text" name="college_name" placeholder="Enter College/Department" class="w-full border rounded-lg p-2">
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex flex-col md:flex-row md:justify-end md:gap-3 px-6 py-4 gap-2 items-center">
                <button type="button" 
                        @click="informationModal = false"
                        class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 w-full md:w-auto">
                    Cancel
                </button>
                <button type="submit" 
                        class="px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover w-full md:w-auto">
                     Add Record
                </button>
            </div>
        </form>

        <!-- Close Button -->
        <button @click="informationModal = false" 
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">&times;</button>
    </div>
</div>
