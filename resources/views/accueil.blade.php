<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des Réservations</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-red-50 min-h-screen p-6">

  <div class="max-w-5xl mx-auto">
    <h1 class="text-2xl font-bold text-red-800 mb-6">Liste des Réservations</h1>

    <a href="{{ route('bookings.create') }}" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg mb-4 inline-block">
       Ajouter une réservation
    </a>

    @if(session('success'))
      <div class="bg-green-100 text-green-800 p-3 rounded-lg mb-4">
        {{ session('success') }}
      </div>
    @endif

    <table class="w-full bg-white shadow rounded-lg border border-red-100">
      <thead class="bg-red-100">
        <tr>
          <th class="px-4 py-3 text-left text-red-800">ID</th>
          <th class="px-4 py-3 text-left text-red-800">Service ID</th>
          <th class="px-4 py-3 text-left text-red-800">Date</th>
          <th class="px-4 py-3 text-left text-red-800">Time</th>
          <th class="px-4 py-3 text-left text-red-800">Statuts</th>
          <th class="px-4 py-3 text-right text-red-800">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        @foreach($bookings as $booking)
        <tr>
          <td class="px-4 py-3">{{ $booking->id }}</td>
          <td class="px-4 py-3">{{ $booking->service_id }}</td>
          <td class="px-4 py-3">{{ $booking->date }}</td>
          <td class="px-4 py-3">{{ $booking->time }}</td>
          <td class="px-4 py-3">{{ $booking->status }}</td>
          <td class="px-4 py-3 text-right">
            <div class="flex justify-end space-x-2">
              <a href="{{ route('bookings.show', $booking->id) }}" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg font-semibold">Voir</a>
              <a href="{{ route('bookings.edit', $booking->id) }}" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg font-semibold">Modifier</a>
              <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-lg font-semibold">
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
