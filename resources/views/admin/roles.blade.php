<x-navigationbar />

{{-- Main Content --}}
<div x-data="{ openModal: false, selectedUser: '' }" 
     class="bg-gray-50 min-h-screen flex-1 p-6 mt-0 transition-all duration-300 lg:ml-64">

    {{-- Header --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
        <h1 class="text-2xl font-semibold">User Access Control</h1>

        <a href="/admin/viewAccounts" 
           class="flex items-center bg-main text-white px-4 py-2 rounded-lg hover:bg-button_hover">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            Back to Accounts
        </a>
    </div>

    {{-- Roles Table --}}
    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <table class="min-w-full text-sm text-left border-collapse">
            <thead>
                <tr class="bg-button_hover text-white">
                    <th class="px-4 py-3">First Name</th>
                    <th class="px-4 py-3">Last Name</th>
                    <th class="px-4 py-3">Employee ID</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3">Jan</td>
                    <td class="px-4 py-3">Wrey</td>
                    <td class="px-4 py-3">EMP001</td>
                    <td class="px-4 py-3">jan.wrey@example.com</td>
                    <td class="px-4 py-3 text-right">
                        <button @click="selectedUser = 'Jan Wrey'; openModal = true" 
                                class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                            Edit Access
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- Modal --}}
    <div x-show="openModal" x-cloak 
         class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div @click.away="openModal = false" 
             class="bg-white rounded-lg w-full max-w-2xl shadow-lg p-6 relative">
            <h2 class="text-xl font-semibold mb-4">
                User Access Control - <span x-text="selectedUser"></span>
            </h2>

            {{-- Permissions Form --}}
            <div class="space-y-6">
                <div>
                    <label class="block font-medium text-gray-700 mb-2">Dashboard</label>
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="form-checkbox text-blue-600">
                        <span>Open Dashboard Page</span>
                    </label>
                </div>

                <div>
                    <label class="block font-medium text-gray-700 mb-2">Users</label>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="form-checkbox text-blue-600">
                            <span>Add User</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="form-checkbox text-blue-600">
                            <span>Edit User</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="form-checkbox text-blue-600">
                            <span>Delete User</span>
                        </label>
                    </div>
                </div>

                <div>
                    <label class="block font-medium text-gray-700 mb-2">Roles & Permissions</label>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="form-checkbox text-blue-600">
                            <span>Add Roles</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="form-checkbox text-blue-600">
                            <span>Edit Roles</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="form-checkbox text-blue-600">
                            <span>Delete Roles</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="form-checkbox text-blue-600">
                            <span>Update Permission</span>
                        </label>
                    </div>
                </div>
            </div>

            {{-- Actions --}}
            <div class="flex flex-col md:flex-row md:justify-end md:gap-3 mt-6 gap-2 items-center">
                <button @click="openModal = false" 
                        class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 w-full md:w-auto">
                    Cancel
                </button>
                <button class="px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover w-full md:w-auto">
                    Save
                </button>
            </div>

            {{-- Close button --}}
            <button @click="openModal = false" 
                    class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">
                &times;
            </button>
        </div>
    </div>
</div>
