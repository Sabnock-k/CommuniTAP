<?php
// Initialize variables
$name = '';
$email = '';
$password = '';
$error = null;
$isLoading = false;

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Simulate registration logic (replace with actual logic)
    $isLoading = true;
    sleep(2); // Simulate delay for form processing

    // Simulate error condition
    if (empty($name) || empty($email) || empty($password)) {
        $error = 'Please fill in all fields.';
    } else {
        // You can add database registration logic here
        // For now, simulate a failed registration process
        $error = 'Registration failed. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex flex-col lg:flex-row">
        <!-- Left Column (Form Section) -->
        <div class="lg:w-1/2 flex justify-center items-center bg-gray-100 p-8">
            <div class="max-w-md w-full">
                <h2 class="text-3xl font-bold mb-6 text-center">Sign Up</h2>
                <form action="" method="POST">
                    <!-- Name Field -->
                    <div class="mb-4">
                        <label class="block text-gray-700">Name</label>
                        <input
                            type="text"
                            name="name"
                            value="<?php echo htmlspecialchars($name); ?>"
                            class="w-full px-4 py-2 border rounded-md"
                        />
                    </div>

                    <!-- Email Field -->
                    <div class="mb-4">
                        <label class="block text-gray-700">Email</label>
                        <input
                            type="email"
                            name="email"
                            value="<?php echo htmlspecialchars($email); ?>"
                            class="w-full px-4 py-2 border rounded-md"
                        />
                    </div>

                    <!-- Password Field -->
                    <div class="mb-4">
                        <label class="block text-gray-700">Password</label>
                        <input
                            type="password"
                            name="password"
                            value="<?php echo htmlspecialchars($password); ?>"
                            class="w-full px-4 py-2 border rounded-md"
                        />
                    </div>

                    <!-- Error Message -->
                    <?php if ($error): ?>
                        <div class="text-red-600 text-sm text-center">
                            <p><?php echo $error; ?></p>
                        </div>
                    <?php endif; ?>

                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition"
                        <?php echo $isLoading ? 'disabled' : ''; ?>
                    >
                        <?php echo $isLoading ? 'Registering...' : 'Register'; ?>
                    </button>
                </form>

                <!-- Login Link -->
                <div class="mt-4 text-center">
                    <p>
                        Already have an account?{' '}
                        <a href="login.php" class="text-blue-600 hover:underline">
                            Log in here
                        </a>
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Right Column (Additional Content or Image Section) -->
        <div class="lg:w-1/2 flex justify-center items-center bg-gray-100 p-8">
            <!-- Replace this with your image -->
            <img src="images/register-logo.png" alt="Register" class="w-full h-auto rounded-lg" />
        </div>
    </div>
</body>
</html>
