<?php if (isset($component)) { $__componentOriginal0f509fab02c45445826003a1e50db506 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f509fab02c45445826003a1e50db506 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.head','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f509fab02c45445826003a1e50db506)): ?>
<?php $attributes = $__attributesOriginal0f509fab02c45445826003a1e50db506; ?>
<?php unset($__attributesOriginal0f509fab02c45445826003a1e50db506); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f509fab02c45445826003a1e50db506)): ?>
<?php $component = $__componentOriginal0f509fab02c45445826003a1e50db506; ?>
<?php unset($__componentOriginal0f509fab02c45445826003a1e50db506); ?>
<?php endif; ?>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
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
                            value="<?php echo e(auth()->user()->name); ?>">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" name="email" type="email" placeholder="Enter your email"
                            value="<?php echo e(auth()->user()->email); ?>">
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
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
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
                        url: '<?php echo e(route('update.profile')); ?>',
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
                        url: "<?php echo e(route('password')); ?>",
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



<?php /**PATH C:\laragon\www\Cuisenio\resources\views\user\profile.blade.php ENDPATH**/ ?>