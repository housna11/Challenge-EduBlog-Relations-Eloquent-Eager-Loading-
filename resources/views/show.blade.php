<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service Details</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen">
  <div class="max-w-3xl mx-auto p-6">
    <a href="{{ route('services.index') }}" class="text-red-700 hover:underline">← Back to list</a>

    <div class="mt-4 bg-white p-6 rounded-lg shadow">
      <div class="flex justify-between items-center">
        <h2 class="text-xl font-semibold text-red-800">Service {{ $service->id }}</h2>
      </div>

      @if($service->image)
      <div class="mt-6 flex justify-center">
        <img src="{{ asset('storage/'. $service->image) }}" alt="Service Image" class="rounded-lg shadow-md w-64 h-64 object-cover border border-red-200">
      </div>
      @else
      <p class="mt-6 text-center text-gray-500 italic">No image available</p>
      @endif

      <dl class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="bg-red-50 p-4 rounded">
          <dt class="text-xs text-red-700 uppercase font-medium">Title</dt>
          <dd class="mt-1 text-gray-800 font-semibold">{{ $service->title }}</dd>
        </div>

        <div class="bg-red-50 p-4 rounded">
          <dt class="text-xs text-red-700 uppercase font-medium">Description</dt>
          <dd class="mt-1 text-gray-800 font-semibold">{{ $service->description }}</dd>
        </div>

        <div class="bg-red-50 p-4 rounded">
          <dt class="text-xs text-red-700 uppercase font-medium">Duration</dt>
          <dd class="mt-1 text-gray-800 font-semibold">{{ $service->duration }}</dd>
        </div>

        <div class="bg-red-50 p-4 rounded">
          <dt class="text-xs text-red-700 uppercase font-medium">Price</dt>
          <dd class="mt-1 text-gray-800 font-semibold">{{ $service->price }}</dd>
        </div>
      </dl>
    </div>
  </div>
</body>
</html>
