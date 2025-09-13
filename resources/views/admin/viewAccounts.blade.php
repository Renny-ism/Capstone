<x-navigationbar />

{{-- Main Content --}}
<div class="bg-gray-50 min-h-screen flex-1 p-6 mt-0 transition-all duration-300 lg:ml-64">

    {{-- Header --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
        <h1 class="text-2xl font-semibold">Users</h1>

        <div class="flex items-center gap-3">
            {{-- Add User Button --}}
            <button onclick="document.getElementById('createUserModal').classList.remove('hidden')"
                    class="bg-main text-white px-4 py-2 rounded-lg hover:bg-button_hover">
                + Create User
            </button>

            {{-- Edit Access --}}
            <a href="/admin/roles" 
               class="px-4 py-2 bg-green-700 text-white rounded-lg hover:bg-green-800">
                Edit Users Access
            </a>
        </div>
    </div>

    {{-- Users Table --}}
    <div class="bg-white rounded-lg shadow-md overflow-x-auto">
        <table class="min-w-full text-sm text-left border-collapse">
            <thead>
                <tr class="bg-button_hover text-white">
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Role</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3">Jan Wrey</td>
                    <td class="px-4 py-3">jan.wrey@example.com</td>
                    <td class="px-4 py-3">Administrator</td>
                    <td class="px-4 py-3">
                        <button class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</button>
                        <button class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- Create User Modal --}}
    <div id="createUserModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg w-full max-w-2xl shadow-lg p-6 relative">
            <h2 class="text-xl font-semibold mb-4">Create User</h2>
            <form method="POST" action="{{route('register')}}">
                @csrf
                <div>
                    <label class="block text-sm font-medium mt-4">Microsoft Email</label>
                    <input type="email" name="email" class="w-full border rounded-lg p-2" />
                </div>

                <div class="flex flex-col md:flex-row md:justify-end md:gap-3 mt-6 gap-2 items-center">
                    <button type="button" 
                            onclick="document.getElementById('createUserModal').classList.add('hidden')"
                            class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 w-full md:w-auto">
                        Cancel
                    </button>
                    <button type="submit" 
                            class="px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover w-full md:w-auto">
                        Add
                    </button>
                </div>
            </form>

            {{-- Close button --}}
            <button onclick="document.getElementById('createUserModal').classList.add('hidden')" 
                    class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">&times;</button>
        </div>
    </div>

</div>
