<x-dashboard>
    <div class="flex-grow p-6 lg:pl-80 pt-28">
        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md ml-10">
            <div class="pb-4 flex justify-between items-center">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Ingrediant Management</h2>
                <div class="flex items-center">
                    <input type="text" id="searchInput" onkeyup="searchIngrediant()" placeholder="Search Ingrediants..."
                        class="text-sm py-2 px-4 rounded-lg border-2 border-gray-300 shadow-sm focus:border-blue-500 mr-2">
                        
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded text-sm flex items-center"
                        onclick="openModal()">
                        <i class="fas fa-plus mr-2"></i>Add Ingrediant
                    </button>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">Image</th>
                        <th scope="col" class="py-3 px-6">Ingrediant Name</th>
                        <th scope="col" class="py-3 px-6">Actions</th>
                    </tr>
                </thead>
                <tbody id="IngrediantTable">
                    @foreach ($ingrediants as $ingrediant)
                    @if ($ingrediant->images->isNotEmpty()) 
                        @foreach ($ingrediant->images as $image)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="py-6 px-6">
                            <img src="{{ Storage::url($image->url) }}" alt="Ingrediant Image" style="width: 100px; height: auto;">

                        <td class="py-6 px-6">{{ $ingrediant->name }}</td>

                        <td class="py-6 px-6">
                            <button onclick="openModal(true, '{{ $ingrediant->name }}')" class="text-green-500 hover:text-orange-300">
                                <i class="fas fa-edit"></i>
                            </button>
                            <form action="{{ route('ingrediants.destroy', $ingrediant->id) }}" method="POST">
                                @csrf
                                @method('DELETE')  {{-- Specify the method as DELETE --}}
                                <button type="submit"  onclick="return confirm('Are you sure?')" class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash-alt"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                @endforeach
                </tbody>
            </table>
            
        </div>
    </div>

    <!-- Modal for Adding/Editing Ingrediant -->
    <div id="addThemeModal" class="hidden fixed inset-0 z-10 overflow-auto bg-black bg-opacity-40">
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white rounded-lg mx-auto p-5 relative max-w-lg w-full">
                <span class="absolute top-0 right-0 m-3 cursor-pointer text-gray-400 hover:text-gray-600" onclick="closeModal()">&times;</span>
                <h2 id="modalTitle" class="text-xl mb-4">Add New Ingrediant</h2>
                @if (session('success'))
                    <div class="p-3 bg-green-300 text-green-800 rounded shadow-sm mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="p-3 bg-red-300 text-red-800 rounded shadow-sm mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
    
                <form method="POST" action="{{route('ingrediants.store')}}" enctype="multipart/form-data">
                    @csrf
                <input type="text" name="name" id="newThemeName" placeholder="Ingrediant name..." class="mb-4 w-full p-2 border rounded">
                <div class="font-[sans-serif] max-w-md mx-auto">
                    <label class="text-sm text-black mb-2 block">Upload file</label>
                    <input type="file" name="ingrediant_file"
                      class="w-full text-black text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-2.5 file:px-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-black rounded" />
                    <p class="text-xs text-gray-400  mb-5 mt-2">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
                  </div>
                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Save Ingrediant</button>
                  <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2" onclick="closeModal()">Close</button>
            </div>
        </div>
    </div>
    </form>
</x-dashboard>
<script>
    function openModal() {
        document.getElementById('addThemeModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('addThemeModal').classList.add('hidden');
    }

    function openModal(isEdit = false, themeName = '') {
    document.getElementById('addThemeModal').classList.remove('hidden');
    document.getElementById('newThemeName').value = themeName;
    document.getElementById('modalTitle').innerText = isEdit ? 'Edit Theme' : 'Add New Theme';
}

function closeModal() {
    document.getElementById('addThemeModal').classList.add('hidden');
}
</script>

