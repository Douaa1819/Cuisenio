<x-dashboard>

    <div class="flex-grow p-6 lg:pl-80  pt-28">
        <div class="flex justify-center items-center h-full">
            <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md w-full max-w-4xl">
                <div class="pb-4 flex justify-between items-center">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">User Management</h2>
                    <input type="text" id="search"
                        class="block w-1/4 text-sm py-2 px-4 rounded-lg border-2 border-gray-300 shadow-sm focus:border-blue-500"
                        placeholder="Search users...">
                        <div id="search-results"></div>
                </div>
                <div class="">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">Name</th>
                                <th scope="col" class="py-3 px-6">Email</th>
                                <th scope="col" class="py-3 px-6">Status</th>
                                <th scope="col" class="py-3 px-6">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="py-4 px-6">{{ $user->name }}</td>
                                    <td class="py-4 px-6">{{ $user->email }}</td>
                                    <td class="py-4 px-6">Active</td>
                                    <td class="py-4 px-6 flex space-x-2">
                                        @php
                                            $isBanned = $user->is_banned;
                                        @endphp

                                        <form action="{{ route('user.toggle-block', $user->id) }}" method="POST">
                                            @csrf
                                            <span class="cursor-pointer {{ $isBanned ? 'text-green-500 hover:text-green-700' : 'text-red-500 hover:text-red-700' }} hover:underline" onclick="this.closest('form').submit()">
                                                {{ $isBanned ? 'Unblock' : 'Block' }}
                                            </span>
                                            
                                        </form>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-dashboard>
<div class="  ml-48">
    <footer class="w-full text-center  flex justify-center items-center p-4 text-sm text-gray-600">
        © 2024 Cuisénio. All rights reserved.
    </div>
</div>

    <script>
    $(document).ready(function() {
        $('#search').keyup(function(event) {
            event.preventDefault();
            var query = $(this).val();
            fetch_customer_data(query);
        });

        function fetch_customer_data(query = '') {
            $.ajax({
                url: "{{ route('users') }}",
                method: 'GET',
                data: {
                    query: query
                },
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    renderUsers(data);
                },
                error: function() {
                    console.error('Error fetching data.');
                }
            });
        }

        function renderUsers(data) {
            let html = '';
            if (data.length > 0) {
                data.forEach(user => {
                    let imageHtml = '';
                   
                    html += `<div class="user-item mt-4 flex space-x-4 px-3">
                        ${imageHtml}
                        <div class="flex flex-col">
                            <p class="text-black capitalize text-xl hover:underline">${user.name}</p>
                            <p class="text-black capitalize text-xl hover:underline">${user.email}</p>
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