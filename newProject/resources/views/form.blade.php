<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Include Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Single Input Form</title>
</head>
<body>
  <div class="container mx-auto py-8">
    <form class="max-w-md mx-auto p-6 bg-white shadow-md rounded" action="{{route("indexPage.submit")}}" method="POST">
        @csrf
      <div class="mb-4">
        <label for="inputField" class="block text-gray-700 font-semibold mb-2">Input:</label>
        <input type="text" id="inputField" name="inputField" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:border-blue-300" placeholder="Enter something">
      </div>
      <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Submit</button>
    </form>
  </div>
</body>
</html>
