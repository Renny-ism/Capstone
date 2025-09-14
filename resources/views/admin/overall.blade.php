<x-navigationbar />

<!-- Main Content -->
<div class="bg-gray-50 min-h-screen flex-1 p-6 mt-0 transition-all duration-300 lg:ml-64">
    <div class="w-full">
        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
            <h1 class="text-2xl font-semibold">Laptop</h1>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <div class="overflow-y-auto" style="max-height: calc(5 * 3rem + 1rem);">
                <table class="min-w-full text-sm text-left border-collapse">
                    <thead class="sticky top-0 bg-button_hover text-white z-10">
                        <tr>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Asset Code</th>
                            <th class="px-4 py-3">Date Acquired</th>
                            <th class="px-4 py-3">Brand</th>
                            <th class="px-4 py-3">Model</th>
                            <th class="px-4 py-3">Operating System</th>
                            <th class="px-4 py-3">Processor</th>
                            <th class="px-4 py-3">RAM</th>      
                            <th class="px-4 py-3">Storage</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Row -->
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">LAP-001</td>
                            <td class="px-4 py-3">2023-05-10</td>
                            <td class="px-4 py-3">Dell</td>
                            <td class="px-4 py-3">Latitude 5420</td>
                            <td class="px-4 py-3">Windows 11 Pro</td>
                            <td class="px-4 py-3">Intel i5-1135G7</td>
                            <td class="px-4 py-3">8GB DDR4</td>
                            <td class="px-4 py-3">512GB SSD</td>
                            <td class="px-4 py-3">Under Repair</td>
                            <td class="px-4 py-3"><x-action_laptop/></td>
                        </tr>
                         <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">LAP-001</td>
                            <td class="px-4 py-3">2023-05-10</td>
                            <td class="px-4 py-3">Dell</td>
                            <td class="px-4 py-3">Latitude 5420</td>
                            <td class="px-4 py-3">Windows 11 Pro</td>
                            <td class="px-4 py-3">Intel i5-1135G7</td>
                            <td class="px-4 py-3">8GB DDR4</td>
                            <td class="px-4 py-3">512GB SSD</td>
                            <td class="px-4 py-3">Under Repair</td>
                            <td class="px-4 py-3"><x-action_laptop/></td>
                        </tr>
                         <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">LAP-001</td>
                            <td class="px-4 py-3">2023-05-10</td>
                            <td class="px-4 py-3">Dell</td>
                            <td class="px-4 py-3">Latitude 5420</td>
                            <td class="px-4 py-3">Windows 11 Pro</td>
                            <td class="px-4 py-3">Intel i5-1135G7</td>
                            <td class="px-4 py-3">8GB DDR4</td>
                            <td class="px-4 py-3">512GB SSD</td>
                            <td class="px-4 py-3">Under Repair</td>
                            <td class="px-4 py-3"><x-action_laptop/></td>
                        </tr>
                         <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">LAP-001</td>
                            <td class="px-4 py-3">2023-05-10</td>
                            <td class="px-4 py-3">Dell</td>
                            <td class="px-4 py-3">Latitude 5420</td>
                            <td class="px-4 py-3">Windows 11 Pro</td>
                            <td class="px-4 py-3">Intel i5-1135G7</td>
                            <td class="px-4 py-3">8GB DDR4</td>
                            <td class="px-4 py-3">512GB SSD</td>
                            <td class="px-4 py-3">Under Repair</td>
                            <td class="px-4 py-3"><x-action_laptop/></td>
                        </tr>
                         <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">LAP-001</td>
                            <td class="px-4 py-3">2023-05-10</td>
                            <td class="px-4 py-3">Dell</td>
                            <td class="px-4 py-3">Latitude 5420</td>
                            <td class="px-4 py-3">Windows 11 Pro</td>
                            <td class="px-4 py-3">Intel i5-1135G7</td>
                            <td class="px-4 py-3">8GB DDR4</td>
                            <td class="px-4 py-3">512GB SSD</td>
                            <td class="px-4 py-3">Under Repair</td>
                            <td class="px-4 py-3"><x-action_laptop/></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
            <h1 class="text-2xl font-semibold">Desktop</h1>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <div class="overflow-y-auto" style="max-height: calc(5 * 3rem + 1rem);">
                <table class="min-w-full text-sm text-left border-collapse">
                    <thead class="sticky top-0 bg-button_hover text-white z-10">
                        <tr class="bg-button_hover text-white">
                            <th class="px-4 py-3 ">Asset Code</th>
                            <th class="px-4 py-3">Date Acquired</th>
                            <th class="px-4 py-3 ">Brand</th>
                            <th class="px-4 py-3">Model</th>
                            <th class="px-4 py-3">Monitor</th>
                            <th class="px-4 py-3">Keyboard</th>
                            <th class="px-4 py-3">Mouse</th>
                            <th class="px-4 py-3">Operating System</th>
                            <th class="px-4 py-3">Processor</th>
                            <th class="px-4 py-3">Motherboard</th>      
                            <th class="px-4 py-3">RAM</th>
                            <th class="px-4 py-3">Storage</th>
                            <th class="px-4 py-3">Graphics</th>
                        
                            <th class="px-4 py-3">Remarks</th>
                            <td class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody> <!-- dummy data --> 
    <!-- for the actions, lagyan ng ellipses para di redundant tignan yung edit, delete, maintenance-->
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">DESK-001</td>
                            <td class="px-4 py-3">2021-08-12"></td>

                            <td class="px-4 py-3">Lenovo</td>
                            <td class="px-4 py-3">ThinkCentre M720</td>
                            <td class="px-4 py-3">Windows 10 Pro</td>
                            <td class="px-4 py-3">Intel i7-9700</td>
                            <td class="px-4 py-3">Lenovo 313C</td>
                            <td class="px-4 py-3">Lenovo 21” Monitor</td>
                            <td class="px-4 py-3">Lenovo Wired Keyboard</td>
                            <td class="px-4 py-3">Lenovo USB Mouse</td>
                            <td class="px-4 py-3">16GB DDR4</td>
                            <td class="px-4 py-3">1TB HDD + 256GB SSD</td>
                            <td class="px-4 py-3">NVIDIA GeForce GTX 1650</td>
                            <td class="px-4 py-3">Slow boot, SSD health warning</td>
                            <td class="px-4 py-3"><x-action_desktop/></td>
                        </tr>
                    <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">DESK-001</td>
                            <td class="px-4 py-3">2021-08-12"></td>

                            <td class="px-4 py-3">Lenovo</td>
                            <td class="px-4 py-3">ThinkCentre M720</td>
                            <td class="px-4 py-3">Windows 10 Pro</td>
                            <td class="px-4 py-3">Intel i7-9700</td>
                            <td class="px-4 py-3">Lenovo 313C</td>
                            <td class="px-4 py-3">Lenovo 21” Monitor</td>
                            <td class="px-4 py-3">Lenovo Wired Keyboard</td>
                            <td class="px-4 py-3">Lenovo USB Mouse</td>
                            <td class="px-4 py-3">16GB DDR4</td>
                            <td class="px-4 py-3">1TB HDD + 256GB SSD</td>
                            <td class="px-4 py-3">NVIDIA GeForce GTX 1650</td>
                            <td class="px-4 py-3">Slow boot, SSD health warning</td>
                            <td class="px-4 py-3"><x-action_desktop/></td>
                        </tr>
                         <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">DESK-001</td>
                            <td class="px-4 py-3">2021-08-12"></td>

                            <td class="px-4 py-3">Lenovo</td>
                            <td class="px-4 py-3">ThinkCentre M720</td>
                            <td class="px-4 py-3">Windows 10 Pro</td>
                            <td class="px-4 py-3">Intel i7-9700</td>
                            <td class="px-4 py-3">Lenovo 313C</td>
                            <td class="px-4 py-3">Lenovo 21” Monitor</td>
                            <td class="px-4 py-3">Lenovo Wired Keyboard</td>
                            <td class="px-4 py-3">Lenovo USB Mouse</td>
                            <td class="px-4 py-3">16GB DDR4</td>
                            <td class="px-4 py-3">1TB HDD + 256GB SSD</td>
                            <td class="px-4 py-3">NVIDIA GeForce GTX 1650</td>
                            <td class="px-4 py-3">Slow boot, SSD health warning</td>
                            <td class="px-4 py-3"><x-action_desktop/></td>
                        </tr>
                         <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">DESK-001</td>
                            <td class="px-4 py-3">2021-08-12"></td>

                            <td class="px-4 py-3">Lenovo</td>
                            <td class="px-4 py-3">ThinkCentre M720</td>
                            <td class="px-4 py-3">Windows 10 Pro</td>
                            <td class="px-4 py-3">Intel i7-9700</td>
                            <td class="px-4 py-3">Lenovo 313C</td>
                            <td class="px-4 py-3">Lenovo 21” Monitor</td>
                            <td class="px-4 py-3">Lenovo Wired Keyboard</td>
                            <td class="px-4 py-3">Lenovo USB Mouse</td>
                            <td class="px-4 py-3">16GB DDR4</td>
                            <td class="px-4 py-3">1TB HDD + 256GB SSD</td>
                            <td class="px-4 py-3">NVIDIA GeForce GTX 1650</td>
                            <td class="px-4 py-3">Slow boot, SSD health warning</td>
                            <td class="px-4 py-3"><x-action_desktop/></td>
                        </tr>
                         <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">DESK-001</td>
                            <td class="px-4 py-3">2021-08-12"></td>

                            <td class="px-4 py-3">Lenovo</td>
                            <td class="px-4 py-3">ThinkCentre M720</td>
                            <td class="px-4 py-3">Windows 10 Pro</td>
                            <td class="px-4 py-3">Intel i7-9700</td>
                            <td class="px-4 py-3">Lenovo 313C</td>
                            <td class="px-4 py-3">Lenovo 21” Monitor</td>
                            <td class="px-4 py-3">Lenovo Wired Keyboard</td>
                            <td class="px-4 py-3">Lenovo USB Mouse</td>
                            <td class="px-4 py-3">16GB DDR4</td>
                            <td class="px-4 py-3">1TB HDD + 256GB SSD</td>
                            <td class="px-4 py-3">NVIDIA GeForce GTX 1650</td>
                            <td class="px-4 py-3">Slow boot, SSD health warning</td>
                            <td class="px-4 py-3"><x-action_desktop/></td>
                        </tr>
                         <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">DESK-001</td>
                            <td class="px-4 py-3">2021-08-12"></td>

                            <td class="px-4 py-3">Lenovo</td>
                            <td class="px-4 py-3">ThinkCentre M720</td>
                            <td class="px-4 py-3">Windows 10 Pro</td>
                            <td class="px-4 py-3">Intel i7-9700</td>
                            <td class="px-4 py-3">Lenovo 313C</td>
                            <td class="px-4 py-3">Lenovo 21” Monitor</td>
                            <td class="px-4 py-3">Lenovo Wired Keyboard</td>
                            <td class="px-4 py-3">Lenovo USB Mouse</td>
                            <td class="px-4 py-3">16GB DDR4</td>
                            <td class="px-4 py-3">1TB HDD + 256GB SSD</td>
                            <td class="px-4 py-3">NVIDIA GeForce GTX 1650</td>
                            <td class="px-4 py-3">Slow boot, SSD health warning</td>
                            <td class="px-4 py-3"><x-action_desktop/></td>
                        </tr>
                         <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">DESK-001</td>
                            <td class="px-4 py-3">2021-08-12"></td>

                            <td class="px-4 py-3">Lenovo</td>
                            <td class="px-4 py-3">ThinkCentre M720</td>
                            <td class="px-4 py-3">Windows 10 Pro</td>
                            <td class="px-4 py-3">Intel i7-9700</td>
                            <td class="px-4 py-3">Lenovo 313C</td>
                            <td class="px-4 py-3">Lenovo 21” Monitor</td>
                            <td class="px-4 py-3">Lenovo Wired Keyboard</td>
                            <td class="px-4 py-3">Lenovo USB Mouse</td>
                            <td class="px-4 py-3">16GB DDR4</td>
                            <td class="px-4 py-3">1TB HDD + 256GB SSD</td>
                            <td class="px-4 py-3">NVIDIA GeForce GTX 1650</td>
                            <td class="px-4 py-3">Slow boot, SSD health warning</td>
                            <td class="px-4 py-3"><x-action_desktop/></td>
                        </tr>

                    </tbody>
                </table>
            </div>    
        </div>

        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
            <h1 class="text-2xl font-semibold">Desktop Peripherals</h1>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <div class="overflow-y-auto" style="max-height: calc(5 * 3rem + 1rem);">
                <table class="min-w-full text-sm text-left border-collapse">
                    <thead class="sticky top-0 bg-button_hover text-white z-10">
                        <tr class="bg-button_hover text-white">
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Asset Code</th>
                            <th class="px-4 py-3">Control Code</th>
                            <th class="px-4 py-3">Item Description</th>
                            <th class="px-4 py-3">Building</th>
                            <th class="px-4 py-3">Room</th>
                            <th class="px-4 py-3">Date Acquired</th>
                            <th class="px-4 py-3">Manufacturer</th>
                            <th class="px-4 py-3">Model</th>
                            <th class="px-4 py-3">Original Cost</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody> <!-- dummy data --> 
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">   KEY00001 
</td>
                            <td class="px-4 py-3">CE-00001
</td>

                            <td class="px-4 py-3"> Keyboard</td>
                            <td class="px-4 py-3">Zurbaran Hall Dormitory</td>
                            <td class="px-4 py-3">Main Entrance</td>
                            <td class="px-4 py-3"> </td>
                            <td class="px-4 py-3">Asus</td>
                            <td class="px-4 py-3"> </td>
                            <td class="px-4 py-3">2,000</td>
                            <td class="px-4 py-3"> Serviceable/Waiting
 </td>
                            <td class="px-4 py-3"><x-action_desktopPeripheral/></td>
                        </tr>
                   <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">   KEY00001 
</td>
                            <td class="px-4 py-3">CE-00001
</td>

                            <td class="px-4 py-3"> Keyboard</td>
                            <td class="px-4 py-3">Zurbaran Hall Dormitory</td>
                            <td class="px-4 py-3">Main Entrance</td>
                            <td class="px-4 py-3"> </td>
                            <td class="px-4 py-3">Asus</td>
                            <td class="px-4 py-3"> </td>
                            <td class="px-4 py-3">2,000</td>
                            <td class="px-4 py-3"> Serviceable/Waiting
 </td>
                            <td class="px-4 py-3"><x-action_desktopPeripheral/></td>
                        </tr><tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">   KEY00001 
</td>
                            <td class="px-4 py-3">CE-00001
</td>

                            <td class="px-4 py-3"> Keyboard</td>
                            <td class="px-4 py-3">Zurbaran Hall Dormitory</td>
                            <td class="px-4 py-3">Main Entrance</td>
                            <td class="px-4 py-3"> </td>
                            <td class="px-4 py-3">Asus</td>
                            <td class="px-4 py-3"> </td>
                            <td class="px-4 py-3">2,000</td>
                            <td class="px-4 py-3"> Serviceable/Waiting
 </td>
                            <td class="px-4 py-3"><x-action_desktopPeripheral/></td>
                        </tr><tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">   KEY00001 
</td>
                            <td class="px-4 py-3">CE-00001
</td>

                            <td class="px-4 py-3"> Keyboard</td>
                            <td class="px-4 py-3">Zurbaran Hall Dormitory</td>
                            <td class="px-4 py-3">Main Entrance</td>
                            <td class="px-4 py-3"> </td>
                            <td class="px-4 py-3">Asus</td>
                            <td class="px-4 py-3"> </td>
                            <td class="px-4 py-3">2,000</td>
                            <td class="px-4 py-3"> Serviceable/Waiting
 </td>
                            <td class="px-4 py-3"><x-action_desktopPeripheral/></td>
                        </tr>
                    </tbody>
                </table>
            </div>    
        </div>

        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
            <h1 class="text-2xl font-semibold">Network Peripherals</h1>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <div class="overflow-y-auto" style="max-height: calc(5 * 3rem + 1rem);">
                <table class="min-w-full text-sm text-left border-collapse">
                    <thead class="sticky top-0 bg-button_hover text-white z-10">
                        <tr class="bg-button_hover text-white">
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Asset Code</th>
                            <th class="px-4 py-3">Aquired Date</th>
                            <th class="px-4 py-3">Brand</th>
                            <th class="px-4 py-3">Model</th>
                            <th class="px-4 py-3">Item Description</th>
                            <th class="px-4 py-3">Building</th>
                            <th class="px-4 py-3">Location</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody> <!-- dummy data --> 
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">   KEY00001 
</td>
                            <td class="px-4 py-3">10/9/20
</td>

                            <td class="px-4 py-3"> Dell</td>
                            <td class="px-4 py-3">Asus</td>
                            <td class="px-4 py-3">Yes</td>
                            <td class="px-4 py-3">yes</td>
                            <td class="px-4 py-3">Manila</td>
                            <td class="px-4 py-3">idk</td>
                            <td class="px-4 py-3"><x-action_desktopPeripheral/></td>
                        </tr>
                    <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">   KEY00001 
</td>
                            <td class="px-4 py-3">10/9/20
</td>

                            <td class="px-4 py-3"> Dell</td>
                            <td class="px-4 py-3">Asus</td>
                            <td class="px-4 py-3">Yes</td>
                            <td class="px-4 py-3">yes</td>
                            <td class="px-4 py-3">Manila</td>
                            <td class="px-4 py-3">idk</td>
                            <td class="px-4 py-3"><x-action_desktopPeripheral/></td>
                        </tr>
                         <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">   KEY00001 
</td>
                            <td class="px-4 py-3">10/9/20
</td>

                            <td class="px-4 py-3"> Dell</td>
                            <td class="px-4 py-3">Asus</td>
                            <td class="px-4 py-3">Yes</td>
                            <td class="px-4 py-3">yes</td>
                            <td class="px-4 py-3">Manila</td>
                            <td class="px-4 py-3">idk</td>
                            <td class="px-4 py-3"><x-action_desktopPeripheral/></td>
                        </tr>
                         <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">   KEY00001 
</td>
                            <td class="px-4 py-3">10/9/20
</td>

                            <td class="px-4 py-3"> Dell</td>
                            <td class="px-4 py-3">Asus</td>
                            <td class="px-4 py-3">Yes</td>
                            <td class="px-4 py-3">yes</td>
                            <td class="px-4 py-3">Manila</td>
                            <td class="px-4 py-3">idk</td>
                            <td class="px-4 py-3"><x-action_desktopPeripheral/></td>
                        </tr>
                         <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">   KEY00001 
</td>
                            <td class="px-4 py-3">10/9/20
</td>

                            <td class="px-4 py-3"> Dell</td>
                            <td class="px-4 py-3">Asus</td>
                            <td class="px-4 py-3">Yes</td>
                            <td class="px-4 py-3">yes</td>
                            <td class="px-4 py-3">Manila</td>
                            <td class="px-4 py-3">idk</td>
                            <td class="px-4 py-3"><x-action_desktopPeripheral/></td>
                        </tr>
                    </tbody>
                </table>
            </div>    
        </div>

        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
            <h1 class="text-2xl font-semibold">Printer</h1>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <div class="overflow-y-auto" style="max-height: calc(5 * 3rem + 1rem);">
                <table class="min-w-full text-sm text-left border-collapse">
                    <thead class="sticky top-0 bg-button_hover text-white z-10">
                        <tr class="bg-button_hover text-white">
                            <th class="px-4 py-4"></th>
                            <th class="px-4 py-3">Asset Code</th>
                            <th class="px-4 py-3">Acquired Year</th>

                            <th class="px-4 py-3">Brand</th>
                            <th class="px-4 py-3">Model</th>
                            <th class="px-4 py-3">Type</th>
                            <th class="px-4 py-3">Building</th>
                            <th class="px-4 py-3">Location</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody> <!-- dummy data --> 
    <!-- for the actions, lagyan ng ellipses para di redundant tignan yung edit, delete, maintenance-->
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">
                                <input type="checkbox" class="w-4 h-4 text-purple-600 border-gray-300 rounded focus:ring-purple-500">
                            </td>
                            <td class="px-4 py-3">PRN-001</td>
                            <td class="px-4 py-3">2023-04-12</td>
                            <td class="px-4 py-3">HP</td>
                            <td class="px-4 py-3">LaserJet Pro M404dn</td>
                            <td class="px-4 py-3">Laser</td>
                            <td class="px-4 py-3">LRC</td>
                            <td class="px-4 py-3">Room 403</td>
                            <td class="px-4 py-3">In Use</td>
                            <td class="px-4 py-3"><x-action_printer/></td>
                        </tr>

               
                    </tbody>
                </table>
            </div>    
        </div>

        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
            <h1 class="text-2xl font-semibold">Toner</h1>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <div class="overflow-y-auto" style="max-height: calc(5 * 3rem + 1rem);">
                <table class="min-w-full text-sm text-left border-collapse">
                    <thead class="sticky top-0 bg-button_hover text-white z-10">
                        <tr class="bg-button_hover text-white">
                            <th class="px-4 py-3">Asset Code</th>
                            <th class="px-4 py-3">Brand</th>
                            <th class="px-4 py-3">Model</th>
                            <th class="px-4 py-3">Type</th>
                            <th class="px-4 py-3">Color</th>
                            <th class="px-4 py-3">Quantity</th>  
                            <th class="px-4 py-3">Status</th>

                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody> <!-- dummy data --> 
    <!-- for the actions, lagyan ng ellipses para di redundant tignan yung edit, delete, maintenance-->
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">TN-001</td>
                            <td class="px-4 py-3">HP</td>
                            <td class="px-4 py-3">CF226A</td>
                            <td class="px-4 py-3">LaserJet Toner</td>
                            <td class="px-4 py-3">Black</td>
                            <td class="px-4 py-3">10</td>
                            <td class="px-4 py-3">Available</td>
                            <td class="px-4 py-3"><x-action_toner/></td>
                        </tr>
                 
                    </tbody>
                </table>
            </div>    
        </div>

        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
            <h1 class="text-2xl font-semibold">Ink</h1>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <div class="overflow-y-auto" style="max-height: calc(5 * 3rem + 1rem);">
                <table class="min-w-full text-sm text-left border-collapse">
                    <thead class="sticky top-0 bg-button_hover text-white z-10">
                        <tr class="bg-button_hover text-white">
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
                    <tbody> <!-- dummy data --> 
    <!-- for the actions, lagyan ng ellipses para di redundant tignan yung edit, delete, maintenance-->
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-3">TN-001</td>
                            <td class="px-4 py-3">2022-05-10</td>
                            <td class="px-4 py-3">2022-06-30</td>
                            <td class="px-4 py-3">HP</td>
                            <td class="px-4 py-3">CF226A</td>
                            <td class="px-4 py-3">LaserJet Toner</td>
                            <td class="px-4 py-3">Black</td>
                            <td class="px-4 py-3">70 ml </td>
                            <td class="px-4 py-3">10</td>
                            <td class="px-4 py-3">Available</td>
                            <td class="px-4 py-3"><x-action_ink /></td> <!-- edit and update-->
                        </tr>
                 
                    </tbody>
                </table>
            </div>    
        </div>

        {{-- Header --}}
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4 gap-3">
            <h1 class="text-2xl font-semibold">Software Inventory</h1>
        </div>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow-md overflow-x-auto">
            <div class="overflow-y-auto" style="max-height: calc(5 * 3rem + 1rem);">
                <table class="min-w-full text-sm text-left border-collapse">
                    <thead class="sticky top-0 bg-button_hover text-white z-10">
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
</div>
