<x-dashboard></x-dashboard>
<div class="flex-grow p-6 lg:pl-80">
    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
        <div class="pb-4 flex justify-between items-center">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Ingrediant Management</h2>
            <div class="flex items-center">
                <input type="text" id="searchInput" onkeyup="searchIngrediant()" placeholder="Search Ingrediants..." class="text-sm py-2 px-4 rounded-lg border-2 border-gray-300 shadow-sm focus:border-blue-500 mr-2">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded text-sm flex items-center" onclick="openModal()">
                    <i class="fas fa-plus mr-2"></i>Add Ingrediant
                </button>
            </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">Ingrediant Name</th>
                    <th scope="col" class="py-3 px-6">Actions</th>
                </tr>
            </thead>
            <tbody id="IngrediantTable">
             <td>

             </td>

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-6 px-6">Sample Ingrediant</td>
                <td class="py-6 px-6">
                    <button onclick="openModal(true, 'Sample Ingrediant')" class="text-green-500 hover:text-orange-300">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button onclick="deleteIngrediant('Ingrediant ID')" class="text-red-500 hover:text-red-700">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>    
            </tr>

                            
            </tbody>
        </table>
    </div>
</div>

<!-- Modal for Adding/Editing Ingrediant -->
<div id="addIngrediantModal" class="hidden fixed inset-0 z-10 overflow-auto bg-black bg-opacity-40">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg mx-auto p-5 relative max-w-lg w-full">
            <span class="absolute top-0 right-0 m-3 cursor-pointer text-gray-400 hover:text-gray-600" onclick="closeModal()">&times;</span>
            <h2 id="modalTitle" class="text-xl mb-4">Add New Ingrediant</h2>
            <input type="text" id="newIngrediantName" placeholder="Ingrediant name..." class="mb-4 w-full p-2 border rounded">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" onclick="addOrUpdateIngrediant()">Save Ingrediant</button>
        </div>
    </div>
</div>
<script>
    function openModal() {
        document.getElementById('addIngrediantsModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('addIngrediantModal').classList.add('hidden');
    }

    function openModal(isEdit = false, IngrediantName = '') {
    document.getElementById('addIngrediantModal').classList.remove('hidden');
    document.getElementById('newIngrediantName').value = IngrediantName;
    document.getElementById('modalTitle').innerText = isEdit ? 'Edit Ingrediant' : 'Add New Ingrediant';
}

function closeModal() {
    document.getElementById('addIngrediantModal').classList.add('hidden');
}
</script>