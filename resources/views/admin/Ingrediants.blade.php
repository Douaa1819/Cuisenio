<x-dashboard>
    <div class="flex-grow p-6 lg:pl-80 pt-28">
        <x-flash/>
        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md ml-10">
            <div class="pb-4 flex justify-between items-center">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Ingrediant Management</h2>
                <div class="flex items-center">
                    <input type="text" id="search"  placeholder="Search Ingrediants..."
                        class="text-sm py-2 px-4 rounded-lg border-2 border-gray-300 shadow-sm focus:border-blue-500 mr-2">
                        <div id="search-results">
                            <button type="button"
                            class="px-6 py-4 text-white text-sm font-medium hover:bg-gray-800 transition-colors rounded-md">
                            <span id="total_records"></span>Search
                        </button>
                            </div>   
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                        @if ($ingrediant->image) <!-- Check if an image exists -->
                            <td class="py-6 px-6">
                                <img src="{{ Storage::url($ingrediant->image->url) }}" alt="Ingredient Image" class ="border rounded-lg  w-32">
                            </td>
                        @endif
                        <td class="py-6 px-6">{{ $ingrediant->name }}</td>
                        <td class="py-6 px-6">
                            <button onclick="openModa('{{$ingrediant->id}}')"   onclick="return confirm('Are you sure you want to update this Ingrediant?')" class="text-green-500 hover:text-orange-300">
                                <i class="fas fa-edit"></i>Edit
                            </button>
                            <form action="{{ route('ingrediants.destroy', $ingrediant->id) }}" method="POST">
                                @csrf
                                @method('DELETE')  
                                <button type="submit"  onclick="return confirm('Are you sure?')" class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash-alt"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                    <div id="editeIngrediantModal{{$ingrediant->id}}" class="hidden fixed inset-0 z-10 overflow-auto bg-black bg-opacity-40">
                        <div class="flex items-center justify-center min-h-screen">
                            <div class="bg-white rounded-lg mx-auto p-5 relative max-w-lg w-full">
                                <span class="absolute top-0 right-0 m-3 cursor-pointer text-gray-400 hover:text-gray-600" onclick="closeModa('{{$ingrediant->id}}')">&times;</span>
                                <h2 id="modalTitle" class="text-xl mb-4">Edite Ingrediant</h2>
                               
                    
                                <form method="POST" action="{{ route('ingrediants.update', ['ingrediant' => $ingrediant->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                <input type="text" name="name" id="newThemeName" placeholder="Ingrediant name..." class="mb-4 w-full p-2 border rounded" value="{{ old('name', $ingrediant->name) }}" required>
                                <div class="font-[sans-serif] max-w-md mx-auto">
                                    <label class="text-sm text-black mb-2 block">Upload file</label>
                                    <input type="file" name="ingrediant_file"
                                    class="w-full text-black text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-2.5 file:px-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-black rounded" />
                                    <p class="text-xs text-gray-400  mb-5 mt-2">PNG, JPG SVG, WEBP, and GIF are Allowed.</p>
                                  </div>
                                  <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Save Theme</button>
                                  <button type="button" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2" onclick="closeModa('{{$ingrediant->id}}')">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                </tbody>
            </table>
            
        </div>
    </div>

    
<div id="addingrediantModal" class=" fixed hidden top-0 inset-0 z-10 overflow-auto bg-black bg-opacity-40">
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
            </form>
        </div>
    </div>
</div>
<script>
    function openModal() {
        document.getElementById('addingrediantModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('addingrediantModal').classList.add('hidden');
    }

 
    

    function openModa(id) {
        document.getElementById(`editeIngrediantModal${id}`).classList.remove('hidden');
    }

    function closeModa(id) {
        document.getElementById(`editeIngrediantModal${id}`).classList.add('hidden');
    }


    $(document).ready(function() {
        $('#search').keyup(function(event) {
            event.preventDefault();
            var query = $(this).val();
            fetch_customer_data(query);
        });

        function fetch_customer_data(query = '') {
            $.ajax({
                url: "{{ route('ingredient.search') }}",
                method: 'GET',
                data: {
                    query: query
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    renderingredients(data);
                },
                error: function() {
                    console.error('Error fetching data.');
                }
            });
        }

        function renderingredients(data) {
            let html = '';
            if (data.length > 0) {
                data.forEach(ingrediant => {
                    let imageHtml = '';
                    if (ingrediant.image) {
                        imageHtml = `<img src="/storage/${ingrediant.image.url}" class="h-24 w-24">`;
                    }

                    html += `<div class="ingrediant-item mt-4 flex space-x-4 px-3">
                        ${imageHtml}
                        <div class="flex flex-col">
                            <p class="text-black capitalize text-xl hover:underline">${ingrediant.name}</p>
                        </div>
                        <div class="border border-black dark:border-gray-500 my-2"></div>
                    </div>`;
                });
            } else {
                html = '<p class="text-center">No Data Found</p>';
            }
            $('#search-results').html(html);
        }

    });


</script>

</x-dashboard>
<div class="  ml-48">
    <footer class="w-full text-center  flex justify-center items-center p-4 text-sm text-gray-600">
        © 2024 Cuisénio. All rights reserved.
    </div>
</div>
</footer>


