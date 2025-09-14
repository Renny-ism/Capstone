<x-navigationbar />

<div class="bg-gray-50 min-h-screen flex-1 p-6 mt-0 transition-all duration-300 lg:ml-64">
    <div class="w-full">
        {{-- Header with Search, Button, and Dropdown --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
            <h1 class="text-2xl font-semibold">Inks</h1>
            <div class="flex flex-col md:flex-row items-center gap-2 w-full md:w-auto">
                <div class="relative w-full">
                    <input type="text" placeholder="Search inks..." class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-main transition-colors">
                    <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                {{-- New Search Button --}}
                <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover focus:outline-none w-full md:w-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    <span class="ml-2">Search</span>
                </button>
                
                {{-- Dropdown Menu for Actions --}}
                <div x-data="{ open: false }" class="relative w-full md:w-auto">
                    <button @click="open = !open" type="button" class="inline-flex items-center justify-center px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover focus:outline-none w-full md:w-auto">
                        Other
                        <svg class="ml-2 -mr-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50">
                        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                            <a href="#" onclick="event.preventDefault(); document.getElementById('addink').classList.remove('hidden'); open = false;" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
                                </svg>
                                <span>Add Record</span>
                            </a>
                            <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path d="M3.375 3C2.339 3 1.5 3.84 1.5 4.875v.75c0 1.036.84 1.875 1.875 1.875h17.25c1.035 0 1.875-.84 1.875-1.875v-.75C22.5 3.839 21.66 3 20.625 3H3.375Z" />
                                    <path fill-rule="evenodd" d="m3.087 9 .54 9.176A3 3 0 0 0 6.62 21h10.757a3 3 0 0 0 2.995-2.824L20.913 9H3.087Zm6.163 3.75A.75.75 0 0 1 10 12h4a.75.75 0 0 1 0 1.5h-4a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                                </svg>
                                Archive
                            </a>
                             <a href="#" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 0 0 3 3h.27l-.155 1.705A1.875 1.875 0 0 0 7.232 22.5h9.536a1.875 1.875 0 0 0 1.867-2.045l-.155-1.705h.27a3 3 0 0 0 3-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0 0 18 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM16.5 6.205v-2.83A.375.375 0 0 0 16.125 3h-8.25a.375.375 0 0 0-.375.375v2.83a49.353 49.353 0 0 1 9 0Zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 0 1-.374.409H7.232a.375.375 0 0 1-.374-.409l.526-5.784a.373.373 0 0 1 .333-.337 41.741 41.741 0 0 1 8.566 0Zm.967-3.97a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H18a.75.75 0 0 1-.75-.75V10.5ZM15 9.75a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V10.5a.75.75 0 0 0-.75-.75H15Z" clip-rule="evenodd" />
            </svg>
            <span>Generate reports</span>
        </a>
        <a href="/endorsements/ink" class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625Z" />
                <path d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z" />
            </svg>
            <span>Endorsement Log</span>
        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <table class="min-w-full text-sm text-left border-collapse">
                <thead>
                    <tr class="bg-button_hover text-white">
                        {{-- New checkbox column header --}}
                        <th id="checkboxHeader" class="px-4 py-3 hidden">
                            <input type="checkbox" id="selectAll">
                        </th>
                        <th class="px-4 py-3">Asset Code</th>
                        <th class="px-4 py-3">Date Acquired</th>
                        <th class="px-4 py-3">Expiry Date</th>
                        <th class="px-4 py-3">Brand</th>
                        <th class="px-4 py-3">Model</th>
                        <th class="px-4 py-3">Type</th>
                        <th class="px-4 py-3">Color</th>
                        <th class="px-4 py-3">Capacity/Volume</th>
                        <th class="px-4 py-3">Quantity</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        {{-- New checkbox column for each row, hidden by default --}}
                        <td class="px-4 py-3 checkbox-cell hidden">
                            <input type="checkbox" class="row-checkbox">
                        </td>
                        <td class="px-4 py-3">TN-001</td>
                        <td class="px-4 py-3">2022-05-10</td>
                        <td class="px-4 py-3">2022-06-30</td>
                        <td class="px-4 py-3">HP</td>
                        <td class="px-4 py-3">CF226A</td>
                        <td class="px-4 py-3">LaserJet Toner</td>
                        <td class="px-4 py-3">Black</td>
                        <td class="px-4 py-3">70 ml</td>
                        <td class="px-4 py-3">10</td>
                        <td class="px-4 py-3">Available</td>
                        <td class="px-4 py-3"><x-action_ink /></td>
                    </tr>
                </tbody>
            </table>
</div>
            <div class="flex items-center justify-end gap-2 p-4">
                <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">Previous</button>
                <button class="px-3 py-1 text-white bg-main rounded-lg">1</button>
                <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">2</button>
                <button class="px-3 py-1 text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">Next</button>
            </div>
        </div>
    </div>
</div>
{{-- Modal --}}
<div id="addink"
    class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">

    <div class="bg-white rounded-lg w-full max-w-3xl shadow-lg p-6 relative">
        <h2 class="text-xl font-semibold mb-4">Add Ink Record</h2>

        <form action="" method="POST" class="space-y-4">
            @csrf

            <div class="flex flex-wrap gap-4">
                {{-- Asset Code --}}
                <div class="flex-1 min-w-[150px]">
                    <label class="block text-sm font-medium">Asset Code</label>
                    <input type="text" name="ink_asset_code" class="w-full border rounded-lg p-2">
                </div>

                {{-- Acquired Date --}}
                <div class="flex-1 min-w-[150px]">
                    <label class="block text-sm font-medium">Acquired Date</label>
                    <input type="date" name="ink_acquired" class="w-full border rounded-lg p-2">
                </div>

                {{-- Expiry Date --}}
                <div class="flex-1 min-w-[150px]">
                    <label class="block text-sm font-medium">Expiry Date</label>
                    <input type="date" name="ink_expiry" class="w-full border rounded-lg p-2">
                </div>

                {{-- Brand --}}
                <div class="flex-1 min-w-[150px]">
                    <label class="block text-sm font-medium">Brand</label>
                    <select name="ink_brand" class="w-full border rounded-lg p-2">
                        <option value="">Select Brand</option>
                        <option value="HP">HP</option>
                        <option value="Canon">Canon</option>
                        <option value="Epson">Epson</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                {{-- Model --}}
                <div class="flex-1 min-w-[150px]">
                    <label class="block text-sm font-medium">Model</label>
                    <input type="text" name="ink_model" class="w-full border rounded-lg p-2">
                </div>

                {{-- Type --}}
                <div class="flex-1 min-w-[150px]">
                    <label class="block text-sm font-medium">Type</label>
                    <input type="text" name="ink_type" class="w-full border rounded-lg p-2">
                </div>

                {{-- Color --}}
                <div class="flex-1 min-w-[150px]">
                    <label class="block text-sm font-medium">Color</label>
                    <input type="text" name="ink_color" class="w-full border rounded-lg p-2">
                </div>

                {{-- Capacity/Volume --}}
                <div class="flex-1 min-w-[150px]">
                    <label class="block text-sm font-medium">Capacity/Volume</label>
                    <input type="text" name="ink_capacity" class="w-full border rounded-lg p-2">
                </div>

                {{-- Quantity --}}
                <div class="flex-1 min-w-[150px]">
                    <label class="block text-sm font-medium">Quantity</label>
                    <input type="number" name="ink_quantity" class="w-full border rounded-lg p-2">
                </div>
            </div>

            {{-- Buttons --}}
            <div class="flex justify-end gap-3 mt-4 flex-wrap">
                <button type="button"
                    onclick="document.getElementById('addink').classList.add('hidden')"
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
        <button onclick="document.getElementById('addink').classList.add('hidden')"
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">
            &times;
        </button>
    </div>
</div>
