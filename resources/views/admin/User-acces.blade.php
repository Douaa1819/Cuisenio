<x-dashboard></x-dashboard>




<div class="flex-grow p-6 lg:pl-80">
    <div class="flex justify-center items-center h-full">
        <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md w-full max-w-4xl">
            <div class="pb-4 flex justify-between items-center">
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">User Management</h2>
                <input type="text" class="block w-1/4 text-sm py-2 px-4 rounded-lg border-2 border-gray-300 shadow-sm focus:border-blue-500" placeholder="Search users...">
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
                        <!-- Example row -->
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="py-4 px-6">John Doe</td>
                            <td class="py-4 px-6">john@example.com</td>
                            <td class="py-4 px-6">Active</td>
                            <td class="py-4 px-6 flex space-x-2">
                                <button class="text-green-600 hover:text-green-900 dark:hover:text-green-400" title="Unblock">Unblock</button>
                                <button class="text-red-600 hover:text-red-900 dark:hover:text-red-400" title="Block">Block</button>
                            </td>
                        </tr>
                        <!-- More rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


