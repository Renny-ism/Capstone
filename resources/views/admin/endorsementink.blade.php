<x-navigationbar />

<!-- Main Content -->
<div class="bg-gray-50 min-h-screen flex-1 p-6 mt-0 transition-all duration-300 lg:ml-64">
    <div class="w-full">
        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
            <h1 class="text-2xl font-semibold">Ink Endorsement</h1>
            <button onclick="document.getElementById('addTonerModal').classList.remove('hidden')" 
                class="inline-flex items-center justify-center px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover">
                + Add Record
            </button>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <table class="min-w-full text-sm text-left border-collapse">
                <thead>
                   <tr class="bg-button_hover text-white">
                    <th class="px-4 py-3">Asset Code</th>
                    <th class="px-4 py-3">User</th>
                    <th class="px-4 py-3">Building</th>
                    <th class="px-4 py-3">Location</th>
                    <th class="px-4 py-3">Quantity</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
                </thead>
                <tbody> <!-- dummy data --> 
    <!-- for the actions, lagyan ng ellipses para di redundant tignan yung edit, delete, maintenance-->
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">PRN-001</td>
                        <td class="px-4 py-3">Juan Dela Cruz</td>
                        <td class="px-4 py-3">BED</td>
                        <td class="px-4 py-3">Room 401</td>
                        <td class="px-4 py-3">23</td>
                        <td class="px-4 py-3"><x-action_ink /></td> <!-- edit and update-->

                    </tr>
                 
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- Modal --}}
<div id="addTonerModal"
    class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">

    <div class="bg-white rounded-lg w-full max-w-3xl shadow-lg p-6 relative">
        <h2 class="text-xl font-semibold mb-4">Add Record</h2>

        <form action="" method="POST" class="space-y-4">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                    <label class="block text-sm font-medium">Asset Code</label>
                    <input type="text" name="toner_acquiry" class="w-full border rounded-lg p-2">
            </div>    
            <div>
                    <label class="block text-sm font-medium">User</label>
                    <input type="text" name="toner_acquiry" class="w-full border rounded-lg p-2">
            </div>                

             <div>
                     <label class="block text-sm font-medium">Building</label>
                    <select name="building" class="w-full border rounded-lg p-2">
                        <option value="" disabled selected>Select a building</option>
                        <option value="LRC">LRC Building</option>
                        <option value="BED">BED Building</option>
                        <option value="PGT">PGT Building</option>
                        <option value="GP">GP Building</option>
                    </select>
            </div>



            <div>
                    <label class="block text-sm font-medium">Location</label>
                    <select name="location" class="w-full border rounded-lg p-2">
                        <option value="" disabled selected>Select a location</option>
                        <option value="Office">.....</option>
                        <option value="Library">.....</option>
                        <option value="IT">......</option>
                        <option value="Laboratory">.....</option>
                        <option value="Other">......</option>
                    </select>
            </div>

             <div>
                      <label class="block text-sm font-medium">Quantity</label>
                      <input type="number" name="signed_agreement" accept="image/*" class="w-full border rounded-lg p-2">
            </div>

            </div>
        
            {{-- Buttons --}}
            <div class="flex justify-end gap-3 mt-4">
                <button type="button"
                    onclick="document.getElementById('addTonerModal').classList.add('hidden')"
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
        <button onclick="document.getElementById('addTonerModal').classList.add('hidden')"
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">
            &times;
        </button>
    </div>
</div>
