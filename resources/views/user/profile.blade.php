<x-head></x-head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            background-image: url('https://images.pexels.com/photos/1640773/pexels-photo-1640773.jpeg');
            background-size: cover;
            background-attachment: fixed;
        }
    </style></head>
<x-main-layout>
    @section('douaaa')
    @endsection

</x-main-layout>
<x-header page='Home' />


<body class="bg-gray-100">
    <div class="container mx-auto mt-10 max-w-4xl  mb-8 p-6 bg-white rounded-lg shadow-xl">
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-8">Update Your Profile</h2>
        <form id="profileUpdateForm" enctype="multipart/form-data">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold">Name</label>
                    <input type="text" id="name" name="name" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-400" placeholder="Enter your name" value="{{auth()->user()->name}}">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-400" placeholder="Enter your email" value="{{auth()->user()->email }}">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 font-semibold">Phone</label>
                    <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-400" placeholder="Enter your phone number">
                </div>
                <div class="mb-4 md:col-span-2">
                    <label for="profile_image" class="block text-gray-700 font-semibold">Profile Image</label>
                    <input type="file" id="profile_image" name="profile_image" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-400">
                </div>
                <div class="md:col-span-2 text-center">
                    <button type="submit" class="px-6 py-2 bg-red-300 text-white rounded-lg hover:bg-red-400 transition-colors duration-300">Update Profile</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            $('#profileUpdateForm').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{ route('update.profile') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data && data.msg) {
                            alert(data.msg);
                        } else {
                            alert('Success but no message returned');
                        }
                    },
                    error: function(data) {
                        if (data.responseJSON && data.responseJSON.msg) {
                            alert(data.responseJSON.msg);
                        } else {
                            alert('Error occurred without a specific message');
                        }
                    }

                });
                console.log([...formData]);
            });
        });
    </script>
</body>

</html>
