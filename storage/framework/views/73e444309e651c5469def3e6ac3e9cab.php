<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Your Password</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif;">
    <div style="background-color: #f4f4f4; padding: 40px;">
        <div style="max-width: 600px; margin: auto; background: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
            <h2 style="text-align: center; color: #333333; font-size: 24px; margin-top: 0;">Password Reset Request</h2>
            <p style="font-size: 16px; color: #555; text-align: center;">
                You have requested to reset your password. Please click the button below to proceed.
            </p>

            <!-- Button -->
            <div style="text-align: center; margin-top: 25px; margin-bottom: 20px;">
                <a href="<?php echo e(route('getRsetPassword',$token)); ?>" style="font-size: 18px; font-family: Arial, sans-serif; text-decoration: none; padding: 10px 20px; color: white; background-color: rgb(255, 200, 200); border-radius: 5px; display: inline-block;">
                    Reset Password
                </a>
            </div>

            <p style="text-align: center; font-size: 14px; color: #aaaaaa; margin-top: 30px;">
                &copy; 2024 Cuisenio. All rights reserved.
            </p>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\Cuisenio\resources\views\emails\forget-password.blade.php ENDPATH**/ ?>