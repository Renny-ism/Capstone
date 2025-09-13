<x-navigationbar />

{{-- Main Content --}}
<div class="bg-gray-50 min-h-screen flex-1 p-6 mt-0 transition-all duration-300 lg:ml-64">


  {{-- Header --}}
  <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
    <h1 class="text-2xl font-semibold">Hardware Inventory</h1>

    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 relative w-full sm:w-auto" x-data="{ open: false }">
      {{-- Category Filter --}}
      <select class="border rounded-lg px-3 py-2 w-full sm:w-auto">
        <option>All</option>
        <option>Device</option>
        <option>Peripheral</option>
      </select>

      {{-- Search --}}
      <input type="text" placeholder="Search..." class="border rounded-lg px-3 py-2 w-full sm:w-64" />

      {{-- Add Hardware Dropdown --}}
      <div class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="bg-main text-white px-4 py-2 rounded-lg hover:bg-button_hover w-full sm:w-auto">
          + Add Record
        </button>
        <div x-show="open" @click.away="open = false"
             class="absolute right-0 mt-2 w-40 bg-white border rounded-lg shadow-lg z-50"
             style="display:none"
             x-cloak
             x-transition>
          <button @click="open = false; document.getElementById('addDeviceModal').classList.remove('hidden')"
                  class="block w-full text-left px-4 py-2 hover:bg-gray-100">
            Device
          </button>
          <button @click="open = false; document.getElementById('peripheralModal').classList.remove('hidden')"
                  class="block w-full text-left px-4 py-2 hover:bg-gray-100">
            Peripheral
          </button>
        </div>
      </div>
    </div>
  </div>

  {{-- Table --}}
  <div class="bg-white rounded-lg shadow-md overflow-x-auto">
    <table class="min-w-full text-sm text-left border-collapse">
      <thead>
        <tr class="bg-button_hover text-white">
          <th class="px-4 py-3">Type</th>
          <th class="px-4 py-3">Asset Code</th>
          <th class="px-4 py-3">Brand</th>
          <th class="px-4 py-3">Processor</th>
          <th class="px-4 py-3">Memory</th>
          <th class="px-4 py-3">Storage</th>
          <th class="px-4 py-3">Building</th>
          <th class="px-4 py-3">Floor</th>
          <th class="px-4 py-3">Location/Room</th>
          <th class="px-4 py-3">Assigned To</th>
          <th class="px-4 py-3">Actions</th>
        </tr>
      </thead>
      <tbody>
        {{-- Sample static rows --}}
        <tr class="border-b hover:bg-gray-50">
          <td class="px-4 py-3">Device</td>
          <td class="px-4 py-3">D001</td>
          <td class="px-4 py-3">Dell</td>
          <td class="px-4 py-3">i5</td>
          <td class="px-4 py-3">8GB</td>
          <td class="px-4 py-3">SSD</td>
          <td class="px-4 py-3">Main Bldg</td>
          <td class="px-4 py-3">3</td>
          <td class="px-4 py-3">Room 305</td>
          <td class="px-4 py-3">John Doe</td>
          <td class="px-4 py-3">...</td>
        </tr>
        <tr class="border-b hover:bg-gray-50">
          <td class="px-4 py-3">Peripheral</td>
          <td class="px-4 py-3">P001</td>
          <td class="px-4 py-3">Logitech</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3">-</td>
          <td class="px-4 py-3">Annex Bldg</td>
          <td class="px-4 py-3">1</td>
          <td class="px-4 py-3">Room 101</td>
          <td class="px-4 py-3">Jane Smith</td>
          <td class="px-4 py-3">...</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

{{-- Device Modal --}}
<div id="addDeviceModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white rounded-lg w-full max-w-3xl shadow-lg p-6 relative max-h-[90vh] overflow-auto">
    <h2 class="text-xl font-semibold mb-4">Add Device</h2>
    <form action="" method="POST" class="space-y-4">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-3">

        <div>
          <label class="block text-sm font-medium">Device Type</label>
          <select name="device_type" class="w-full border rounded-lg p-2">
            <option>Desktop</option>
            <option>Laptop</option>
            <option>Tablet</option>
            {{-- sample device types from DB --}}
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium">Brand</label>
          <select name="brand" class="w-full border rounded-lg p-2">
            <option>Dell</option>
            <option>HP</option>
            <option>Lenovo</option>
            {{-- sample brands from DB --}}
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium">Asset Code</label>
          <input type="text" name="asset_code" class="w-full border rounded-lg p-2" />
        </div>

        <div>
          <label class="block text-sm font-medium">Processor</label>
          <select name="processor" class="w-full border rounded-lg p-2">
            <option>i3</option>
            <option>i5</option>
            <option>i7</option>
            {{-- sample processors from DB --}}
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium">Memory</label>
          <input type="text" name="memory" class="w-full border rounded-lg p-2" />
        </div>

        <div>
          <label class="block text-sm font-medium">Storage</label>
          <select name="storage" class="w-full border rounded-lg p-2">
            <option>SSD</option>
            <option>HDD</option>
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium">Building</label>
          <select name="building" class="w-full border rounded-lg p-2">
            <option>Main Bldg</option>
            <option>Annex Bldg</option>
            <option>Library</option>
            {{-- sample buildings from DB --}}
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium">Floor</label>
          <input type="text" name="floor" class="w-full border rounded-lg p-2" />
        </div>

        <div>
          <label class="block text-sm font-medium">Location/Room</label>
          <input type="text" name="location" class="w-full border rounded-lg p-2" />
        </div>

        <div>
          <label class="block text-sm font-medium">Assigned To</label>
          <input type="text" name="assigned_to" class="w-full border rounded-lg p-2" />
        </div>
      </div>

      {{-- Buttons --}}
      <div class="flex flex-col md:flex-row md:justify-end md:gap-3 mt-4 gap-2 items-center">
    <button type="button" 
            onclick="document.getElementById('addDeviceModal').classList.add('hidden')" 
            class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 w-full md:w-auto">
        Cancel
    </button>
    <button type="button" 
        class="px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover">
    Save
</button>
</div>
    </form>

    {{-- Close button --}}
    <button onclick="document.getElementById('addDeviceModal').classList.add('hidden')"
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">&times;</button>
  </div>
</div>

{{-- Peripheral Modal --}}
<div id="peripheralModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
  <div class="bg-white rounded-lg w-full max-w-3xl shadow-lg p-6 relative max-h-[90vh] overflow-auto">
    <h2 class="text-xl font-semibold mb-4">Add Peripheral</h2>
    <form action="" method="POST" class="space-y-4">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div>
          <label class="block text-sm font-medium">Peripheral Type</label>
          <select name="peripheral_type" class="w-full border rounded-lg p-2">
            <option>Mouse</option>
            <option>Keyboard</option>
            <option>Monitor</option>
            {{-- sample peripheral types from DB --}}
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium">Brand</label>
          <select name="brand" class="w-full border rounded-lg p-2">
            <option>Logitech</option>
            <option>HP</option>
            <option>Dell</option>
            {{-- sample brands from DB --}}
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium">Asset Code</label>
          <input type="text" name="asset_code" class="w-full border rounded-lg p-2" />
        </div>

        <div>
          <label class="block text-sm font-medium">Building</label>
          <select name="building" class="w-full border rounded-lg p-2">
            <option>Main Bldg</option>
            <option>Annex Bldg</option>
            <option>Library</option>
            {{-- sample buildings from DB --}}
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium">Floor</label>
          <input type="text" name="floor" class="w-full border rounded-lg p-2" />
        </div>

        <div>
          <label class="block text-sm font-medium">Location/Room</label>
          <input type="text" name="location" class="w-full border rounded-lg p-2" />
        </div>

        <div>
          <label class="block text-sm font-medium">Assigned To</label>
          <input type="text" name="assigned_to" class="w-full border rounded-lg p-2" />
        </div>
      </div>

      {{-- Buttons --}}
        <div class="flex justify-end gap-3 mt-4">

            <button type="button" onclick="document.getElementById('peripheralModal').classList.add('hidden')"
            class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400">
            Cancel
            </button>

            <button type="button" 
            class="px-4 py-2 bg-main text-white rounded-lg hover:bg-button_hover">
            Save
            </button>

        </div>

    </form>

    {{-- Close button --}}
    <button onclick="document.getElementById('peripheralModal').classList.add('hidden')"
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-800 text-lg">&times;</button>
  </div>
</div>

{{-- Alpine.js for dropdown toggle --}}
<script src="//unpkg.com/alpinejs" defer></script>
