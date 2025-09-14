<x-navigationbar />

<!-- Main Content -->
<div class="bg-gray-50 min-h-screen flex-1 p-6 mt-0 transition-all duration-300 lg:ml-64">
    <div class="w-full">
        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
            <h1 class="text-2xl font-semibold">[asset code] Maintenance</h1>
            <button onclick="document.getElementById('addLaptopModal').classList.remove('hidden')" 
                class="inline-flex items-center justify-center px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover">
                + Add Record
            </button>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <table class="min-w-full text-sm text-left border-collapse">
                <thead>
                    <tr class="bg-button_hover text-white">
                        <th class="px-4 py-3">Maintenance ID</th>
                        <th class="px-4 py-3">Date of Maintenance</th>
                        <th class="px-4 py-3">Description</th>
                        <th class="px-4 py-3">Cost</th>
                    </tr>
                </thead>
                <tbody> <!-- dummy data --> 
    <!-- for the actions, lagyan ng ellipses para di redundant tignan yung edit, delete, maintenance-->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">MT-001</td>
                        <td class="px-4 py-3">2025-03-12</td>
                        <td class="px-4 py-3">Replaced faulty keyboard</td>
                        <td class="px-4 py-3">₱1,500</td>
                    </tr>
                    </div>
                    </tr>

                </tbody>
            </table>
             
        </div>
        <h4 class="text-lg font-semibold flex items-center gap-2">
                    <span></span> Total Maintenance Cost: ₱1,500
                </h4>
    </div>
</div>
{{-- Modal --}}
<div id="addLaptopModal"
    class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">

    <div class="bg-white rounded-lg w-full max-w-3xl shadow-lg p-6 relative">
        <h2 class="text-xl font-semibold mb-4">Add Record</h2>

        <form action="" method="POST" class="space-y-4">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
       
            
                <div>
                    <label class="block text-sm font-medium">Date of Maintenance</label>
                    <input type="date" name="m_date" class="w-full border rounded-lg p-2">
    
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium">Cost</label>
                    <input type="number" name="m-cost" class="w-full border rounded-lg p-2">
                </div>
</div>
                <div>
                    <label class="block text-sm font-medium">Description</label>
                    <textarea name="m-desc" class="w-full border rounded-lg p-2"></textarea>
                </div>  

                

                
            {{-- Buttons --}}
            <div class="flex justify-end gap-3 mt-4">
                <button type="button"
                    onclick="document.getElementById('addLaptopModal').classList.add('hidden')"
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
        <button onclick="document.getElementById('addLaptopModal').classList.add('hidden')"
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">
            &times;
        </button>
    </div>
</div>
