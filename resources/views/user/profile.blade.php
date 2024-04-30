<x-head></x-head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body {
            background: #f7f7f7;
        }

        .input-field {
            border: 2px solid #e2e8f0;
            transition: border-color .3s;
        }

        .input-field:focus {
            border-color: #f56565;
            box-shadow: 0 0 0 1px #f56565;
        }

        .form-header {
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow" style="min-height: 100vh;">
            <div class="px-8 py-4 bg-red-300 text-white text-2xl ">
                Profile Settings
            </div>
            <ul class="mt-12">
                <li>
                    <a href="#" onclick="toggleTab('profile')"
                        class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200">
                        <i class="fas fa-user-edit mr-2"></i> Edit Profile
                    </a>
                </li>
                <li>
                    <a href="#" onclick="toggleTab('password')"
                        class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-200">
                        <i class="fas fa-lock mr-2"></i> Change Password
                    </a>
                </li>
            </ul>
        </div>

        <!-- Content Area -->
        <div class="flex-1 p-10">
            <div id="profile" class="tab-content active-tab">
                <div class="form-header p-5 mb-6 rounded bg-white shadow">
                    <h3 class="text-2xl text-gray-800">Update Your Profile</h3>
                </div>
                <form id="profileUpdateForm" class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Name
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" name="name" placeholder="Enter your name"
                            value="{{ auth()->user()->name }}">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" name="email" type="email" placeholder="Enter your email"
                            value="{{ auth()->user()->email }}">
                    </div>
                   
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="profile_image">
                            Profile Image
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="profile_image" type="file" name="profile_image">
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Update Profile
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="account-change-password">

                <!-- Success Message -->
                <div id="msg"
                    class="hidden flex bg-green-100 text-green-800 pl-4 text-center pr-10 py-4 rounded relative"
                    role="alert">
                    <strong class="font-bold text-base">Success!</strong>
                    <span id="success" class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1"></span>
                </div>

                <div id="msgError"
                    class="hidden flex bg-red-100 text-red-800 pl-4 text-center pr-10 py-4 rounded relative"
                    role="alert">
                    <strong class="font-bold text-base">Error!</strong>
                    <span id="error" class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1"></span>
                </div>

            </div>
            <div id="password" class="tab-content" style="display: none;">
                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h3 class="text-2xl text-gray-800 mb-4">Change Your Password</h3>
                    <form id="changePasswordForm" class="bg-white shadow-lg rounded px-8 pt-6 pb-8 mb-4">
                        @csrf
                        @method('PATCH')
                        <div class="mb-6 relative">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="current_password">
                                Current Password
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="current_password" type="password" name="current_password"
                                placeholder="Current Password">
                            <div
                                class="absolute inset-y-0 right-0 pr-3 mt-6 text-gray-400 flex items-center text-sm leading-5">
                                <i class="fas fa-eye cursor-pointer" id="toggleCurrentPassword"></i>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="newPassword">
                                New Password
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="newPassword" name="password" type="password" placeholder="New Password">
                            <p id="newPasswordRegex" class="hidden text-red-400 text-sm">Password must contain at
                                least 8
                                characters, including uppercase letters, lowercase letters, numbers, and special
                                characters.</p>
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="reapetPassword">
                                Repeat New Password
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="reapetPassword" type="password" name="password_confirmation"
                                placeholder="Repeat New Password">
                            <p id="reapetPasswordRegex" class="hidden text-red-400 text-sm">Passwords do not match.
                            </p>
                        </div>
                        <div class="flex items-center justify-between">
                            <button onclick="changePassword(this)"
                                class="bg-gray-900 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Change Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            function toggleTab(tabName) {
                var tabs = document.querySelectorAll('.tab-content');
                tabs.forEach(tab => {
                    tab.style.display = 'none';
                });
                document.getElementById(tabName).style.display = 'block';
            }

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



            function changePassword(button) {
                var form = button.closest('form');
                console.log('hi');
                $(form).on('submit', function(event) {
                    event.preventDefault();

                    $.ajax({
                        url: "{{ route('password') }}",
                        method: 'PATCH',
                        data: jQuery(form).serialize(),
                        success: function(data) {
                            console.log(data);
                            $('#msg').removeClass('hidden')
                            $('#success').css('display', 'block');
                            jQuery('#success').html(data.success);
                            jQuery(form)[0].reset();
                            $(form).unbind();

                        },
                        error: function(xhr, status, error) {
                            $('#msgError').removeClass('hidden')
                            $('#error').css('display', 'block');
                            if (xhr.responseJSON && xhr.responseJSON.errors) {
                                var errorsHtml = '<ul>';
                                $.each(xhr.responseJSON.errors, function(key, value) {
                                    errorsHtml += '<li>' + value + '</li>';
                                });
                                errorsHtml += '</ul>';
                                jQuery('#error').html(errorsHtml);
                            } else {
                                jQuery('#error').html('An error occurred. Please try again later.');
                            }
                            jQuery(form)[0].reset();
                            $(form).unbind();

                        }


                    });
                })
            }










            function togglePasswordVisibility(inputId, toggleIconId) {
                var input = document.getElementById(inputId);
                var icon = document.getElementById(toggleIconId);
                if (input.type === "password") {
                    input.type = "text";
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                } else {
                    input.type = "password";
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('toggleCurrentPassword').addEventListener('click', function() {
                    togglePasswordVisibility('current_password', 'toggleCurrentPassword');
                });


                document.getElementById('toggleNewPassword').addEventListener('click', function() {
                    togglePasswordVisibility('newPassword', 'toggleNewPassword');
                });

                document.getElementById('toggleRepeatPassword').addEventListener('click', function() {
                    togglePasswordVisibility('reapetPassword', 'toggleRepeatPassword');
                });
            });
        </script>
</body>

</html>


{{-- <x-head></x-head>
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
    </style>
</head>
<x-main-layout>
    @section('douaaa')
    @endsection

</x-main-layout>
<x-header page='Home' />
<x-flash />

<body class="bg-gray-100">
    <div class="container mx-auto mt-10 max-w-4xl  mb-8 p-6 bg-white rounded-lg shadow-xl">
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-8">Update Your Profile</h2>
        <form id="profileUpdateForm" enctype="multipart/form-data">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold">Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-400"
                        placeholder="Enter your name" value="{{ auth()->user()->name }}">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-400"
                        placeholder="Enter your email" value="{{ auth()->user()->email }}">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 font-semibold">Phone</label>
                    <input type="text" id="phone" name="phone"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-400"
                        placeholder="Enter your phone number">
                </div>
                <div class="mb-4 md:col-span-2">
                    <label for="profile_image" class="block text-gray-700 font-semibold">Profile Image</label>
                    <input type="file" id="profile_image" name="profile_image"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-red-400">
                </div>
                <div class="md:col-span-2 text-center">
                    <button type="submit"
                        class="px-6 py-2 bg-red-300 text-white rounded-lg hover:bg-red-400 transition-colors duration-300">Update
                        Profile</button>
                </div>
            </div>
        </form>


        <div class="tab-pane fade" id="account-change-password">

            <div id="msgError"
                class=" hidden flex m-5 bg-red-100 text-red-800 pl-4 text-center pr-10 py-4 rounded relative"
                role="alert">
                <div class="inline-block max-sm:mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 inline mr-4" viewBox="0 0 32 32">
                        <path
                            d="M16 1a15 15 0 1 0 15 15A15 15 0 0 0 16 1zm6.36 20L21 22.36l-5-4.95-4.95 4.95L9.64 21l4.95-5-4.95-4.95 1.41-1.41L16 14.59l5-4.95 1.41 1.41-5 4.95z"
                            data-original="#ea2d3f" />
                    </svg>
                    <strong class="font-bold text-base">Error!</strong>
                </div>
                <span id="error" class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1"></span>
            </div>
            <div id="msg"
                class = " hidden flex bg-green-100 m-5 text-green-800 pl-4 text-center pr-10 py-4 rounded relative"
                role="alert">
                <div class="inline-block max-sm:mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-green-500 inline mr-4"
                        viewBox="0 0 512 512">
                        <ellipse cx="256" cy="256" fill="#32bea6" data-original="#32bea6" rx="256"
                            ry="255.832" />
                        <path fill="#fff"
                            d="m235.472 392.08-121.04-94.296 34.416-44.168 74.328 57.904 122.672-177.016 46.032 31.888z"
                            data-original="#ffffff" />
                    </svg>
                    <strong class="font-bold text-base">Success!</strong>
                </div>
                <span id="success" class="block sm:inline text-sm mx-4 max-sm:ml-0 max-sm:mt-1"></span>

            </div>
            <form id="changePassword" method="post" class="card-body pb-2">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label class="form-label">Current password</label>
                    <input name="current_password" type="password" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">New password</label>
                    <input id="newPassword" name="password" type="password" class="form-control">
                    <p id="newPasswordRegex" class="hidden text-red-400 text-sm">Password must contain at least 8
                        characters, including uppercase letters, lowercase letters, numbers, and special characters.</p>
                </div>
                <div class="form-group">
                    <label class="form-label">Repeat new password</label>
                    <input id="reapetPassword" name="password_confirmation" type="password" class="form-control">
                    <p id="reapetPasswordRegex" class="hidden text-red-400 text-sm">Passwords do not match.</p>
                </div>

                <div class="flex justify-end w-full">
                    <button onclick="changePassword(this)" 
                     
                        class="cursor-pointer  mb-2 md:mb-0 bg-gray-900 border border-gray-500 px-5 py-1 text-md shadow-sm font-medium tracking-wider text-white rounded-md hover:shadow-lg hover:bg-gray-700">Save</button>
                </div>
            </form>
        </div>
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



        function changePassword(button) {
            var form = button.closest('form');
            $(form).on('submit',function(event){
                    event.preventDefault();
                $.ajax({
                    url: "{{ route('password') }}",
                    method: 'PATCH',
                    data: jQuery(form).serialize(),
                    success: function(data) {
                        console.log(data);
                        $('#msg').removeClass('hidden')
                        $('#success').css('display', 'block');
                        jQuery('#success').html(data.success);
                        jQuery(form)[0].reset();
                        $(form).unbind();

                    },
                    error: function (xhr, status, error) {
                        $('#msgError').removeClass('hidden')
                        $('#error').css('display','block');
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            var errorsHtml = '<ul>';
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                errorsHtml += '<li>' + value + '</li>';
                            });
                            errorsHtml += '</ul>';
                            jQuery('#error').html(errorsHtml);
                        } else {
                            jQuery('#error').html('An error occurred. Please try again later.');
                        }
                        jQuery(form)[0].reset();
                        $(form).unbind();

                    }
                    

                });
            })
        }
    </script>
</body>

</html> --}}
