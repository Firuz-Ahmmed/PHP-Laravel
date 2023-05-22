<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="bg-gray-100">
    <div class="max-w-lg mx-auto p-4">
        <h2 class="text-2xl font-bold mb-4">Input Form</h2>
        <form action="{{ route('submit.form') }}" method="post" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block font-semibold">Name:</label>
                <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded p-2">
            </div>

            <div>
                <label for="email" class="block font-semibold">Email:</label>
                <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded p-2">
            </div>

            <div>
                <label for="password" class="block font-semibold">Password:</label>
                <input type="password" id="password" name="password" required
                    class="w-full border border-gray-300 rounded p-2">
            </div>

            <div>
                <label for="age" class="block font-semibold">Age:</label>
                <input type="number" id="age" name="age" min="18" max="100"
                    class="w-full border border-gray-300 rounded p-2">
            </div>

            <div>
                <label for="birthdate" class="block font-semibold">Birthdate:</label>
                <input type="date" id="birthdate" name="birthdate"
                    class="w-full border border-gray-300 rounded p-2">
            </div>

            <div>
                <label class="block font-semibold">Gender:</label>
                <div class="space-x-4">
                    <input type="radio" id="male" name="gender" value="male"
                        class="mr-1"><label for="male">Male</label>
                    <input type="radio" id="female" name="gender" value="female"
                        class="mr-1"><label for="female">Female</label>
                    <input type="radio" id="other" name="gender" value="other"
                        class="mr-1"><label for="other">Other</label>
                </div>
            </div>

            <div>
                <label for="country" class="block font-semibold">Country:</label>
                <select id="country" name="country" class="w-full border border-gray-300 rounded p-2">
                    <option value="us">United States</option>
                    <option value="canada">Canada</option>
                    <option value="uk">United Kingdom</option>
                    <option value="australia">Australia</option>
                </select>
            </div>

            <div>
                <label for="interests" class="block font-semibold">Interests:</label>
                <div class="space-y-2">
                    <input type="checkbox" id="music" name="interests[]" value="music"
                        class="mr-1"><label for="music">Music</label>
                    <input type="checkbox" id="sports" name="interests[]" value="sports"
                        class="mr-1"><label for="sports">Sports</label>
                    <input type="checkbox" id="books" name="interests[]" value="books"
                        class="mr-1"><label for="books">Books</label>
                </div>
            </div>

            <div>
                <label for="bio" class="block font-semibold">Bio:</label>
                <textarea id="bio" name="bio" rows="4" cols="30"
                    class="w-full border border-gray-300 rounded p-2"></textarea>
            </div>

            <div>
                <input type="submit" value="Submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded">
            </div>
        </form>
    </div>
</body>

</html>
