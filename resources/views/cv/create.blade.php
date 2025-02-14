<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create CV</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 py-10">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-gray-700 mb-6">Create Your CV</h1>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cv.store') }}" method="POST">
            @csrf

            <!-- Personal Information -->
            <div class="mb-4">
                <label class="block text-gray-600 font-medium">Full Name</label>
                <input type="text" name="name" class="w-full mt-1 p-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 font-medium">Address</label>
                <input type="text" name="address" class="w-full mt-1 p-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 font-medium">Email</label>
                <input type="email" name="email" class="w-full mt-1 p-2 border rounded-md" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 font-medium">Phone</label>
                <input type="text" name="contact" class="w-full mt-1 p-2 border rounded-md" required>
            </div>

            <!-- Summary -->
            <div class="mb-4">
                <label class="block text-gray-600 font-medium">Summary</label>
                <textarea name="summary" rows="4" class="w-full mt-1 p-2 border rounded-md" required></textarea>
            </div>

            <!-- Education -->
            <div class="mb-4">
                <label class="block text-gray-600 font-medium">Education</label>
                <textarea name="education" rows="3" class="w-full mt-1 p-2 border rounded-md" required></textarea>
            </div>

            <!-- Projects-->
            <div class="mb-4">
                <label class="block text-gray-600 font-medium">Projects</label>
                <textarea name="projects" rows="3" class="w-full mt-1 p-2 border rounded-md" required></textarea>
            </div>

            <!-- Technical Skills -->
            <div class="mb-4">
                <label class="block text-gray-600 font-medium">Technical Skills</label>
                <textarea name="technical_skills" rows="3" class="w-full mt-1 p-2 border rounded-md" required></textarea>
            </div>

            <!-- Soft Skills -->
            <div class="mb-4">
                <label class="block text-gray-600 font-medium">Soft Skills</label>
                <textarea name="soft_skills" rows="3" class="w-full mt-1 p-2 border rounded-md" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">
                    Submit CV
                </button>
            </div>
        </form>

        <div class="mt-4">
            <a href="{{ route('cv.index') }}" class="text-blue-500 hover:underline">Back to CV List</a>
        </div>
    </div>
</body>
</html>
