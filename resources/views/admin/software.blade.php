<x-navigationbar />

<!-- Main Content -->
<div class="bg-gray-50 min-h-screen flex-1 p-6 mt-0 transition-all duration-300 lg:ml-64">
    <div class="w-full">
        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
            <h1 class="text-2xl font-semibold">Software Inventory</h1>
            <button onclick="document.getElementById('addSoftwareModal').classList.remove('hidden')" 
                class="inline-flex items-center justify-center px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover">
                + Add Record
            </button>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <table class="min-w-full text-sm text-left border-collapse">
                <thead>
                    <tr class="bg-button_hover text-white">
                        <th class="px-4 py-3">Software Name</th>
                        <th class="px-4 py-3">Version</th>
                        <th class="px-4 py-3">License Key</th>
                        <th class="px-4 py-3">Licensed To</th>
                        <th class="px-4 py-3">Installation Date</th>
                        <th class="px-4 py-3">Expiration Date</th>
                        <th class="px-4 py-3">Device Type</th>
                        <th class="px-4 py-3">Device Asset Code</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">Microsoft Office 365</td>
                        <td class="px-4 py-3">2021</td>
                        <td class="px-4 py-3">XXXXX-XXXXX-XXXXX-XXXXX</td>
                        <td class="px-4 py-3">John Doe</td>
                        <td class="px-4 py-3">2024-01-15</td>
                        <td class="px-4 py-3">2025-12-31</td>
                        <td class="px-4 py-3">Desktop</td>
                        <td class="px-4 py-3">DESK-00123</td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 text-xs font-semibold text-white bg-green-600 rounded">Active</span>
                        </td>
                        <td class="px-4 py-3">...</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- Modal --}}
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
