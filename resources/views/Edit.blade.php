<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Service</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
 
<body class=" min-h-screen flex items-center justify-center">

  <div class="w-full max-w-3xl bg-white shadow-lg rounded-xl p-8 border border-red-200">
    <h2 class="text-2xl font-bold text-center text-red-700 mb-6">Modifier Service</h2>

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
      @csrf
      @method('PUT')

      <div>
        <label for="title" class="block text-red-700 font-medium mb-1">Title</label>
        <input type="text" id="title" name="title" value="{{ $service->title }}" placeholder="Enter service title"
               class="w-full border border-red-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
      </div>

      <div>
        <label for="description" class="block text-red-700 font-medium mb-1">Description</label>
        <textarea id="description" name="description" rows="4" placeholder="Enter service description"
                  class="w-full border border-red-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">{{ $service->description }}</textarea>
      </div>

      <div>
        <label for="duration" class="block text-red-700 font-medium mb-1">Duration</label>
        <input type="number" id="duration" name="duration" value="{{ $service->duration }}" placeholder="e.g. 60"
               class="w-full border border-red-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
      </div>

      <div>
        <label for="price" class="block text-red-700 font-medium mb-1">Price</label>
        <input type="number" step="0.01" id="price" name="price" value="{{ $service->price }}" placeholder="e.g. 49.99"
               class="w-full border border-red-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
      </div>

      <div>
        <label for="image" class="block text-red-700 font-medium mb-1">Image</label>
        <input type="file" id="image" name="image"
          class="w-full border border-red-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400 bg-white">
      </div>

      <div class="text-center">
        <button type="submit"
          class="bg-red-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-red-700 transition">
          Save Changes
        </button>
      </div>
    </form>
  </div>
</body>
</html>
