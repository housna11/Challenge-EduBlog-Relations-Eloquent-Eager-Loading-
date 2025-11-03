<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-red-50 min-h-screen">
  <div class="max-w-5xl mx-auto p-6">
    <header class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold text-red-800">Services</h1>
      <a href="{{ route('services.create') }}" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
        New Service
      </a>
    </header>

    <table class="w-full bg-white shadow rounded-lg border border-red-100">
      <thead class="bg-red-100">
        <tr>
          <th class="px-4 py-3 text-left text-red-800">ID</th>
          <th class="px-4 py-3 text-left text-red-800">Title</th>
          <th class="px-4 py-3 text-left text-red-800">Duration</th>
          <th class="px-4 py-3 text-left text-red-800">Price</th>
          <th class="px-4 py-3 text-right text-red-800">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        @foreach ($services as $service)
        <tr>
          <td class="px-4 py-3">{{ $service->id }}</td>
          <td class="px-4 py-3">{{ $service->title }}</td>
          <td class="px-4 py-3">{{ $service->duration }} min</td>
          <td class="px-4 py-3">{{ $service->price }}</td>
          <td class="px-4 py-3 text-right">
            <div class="flex justify-end space-x-2">

              <a href="{{ route('services.show', $service->id) }}"
                 class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg font-semibold transition">
                Show
              </a>

              <a href="{{ route('services.edit', $service->id) }}"
                 class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg font-semibold transition">
                Modifier
              </a>

              <form action="{{ route('services.destroy', $service->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit"
                  class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg font-semibold transition">
                  Supprimer
                </button>
              </form>

            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
