<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter Réservation</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-red-50 min-h-screen flex items-center justify-center">

  <div class="w-full max-w-3xl bg-white shadow-lg rounded-xl p-8 border border-red-200">
    <h2 class="text-2xl font-bold text-center text-red-700 mb-6">Ajouter une réservation</h2>

    <form action="{{ route('bookings.store') }}" method="POST" class="space-y-5">
      @csrf

      <div>
        <label class="block text-red-700 font-medium mb-1">ID du Service</label>
        <input type="number" name="service_id" value="{{ old('service_id') }}" 
               class="w-full border border-red-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
        @error('service_id') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-red-700 font-medium mb-1">Date</label>
        <input type="date" name="date" value="{{ old('date') }}" 
               class="w-full border border-red-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
        @error('date') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-red-700 font-medium mb-1">Heure</label>
        <input type="time" name="time" value="{{ old('time') }}" 
               class="w-full border border-red-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
        @error('time') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <div>
        <label class="block text-red-700 font-medium mb-1">Statut</label>
        <select name="status" class="w-full border border-red-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
          <option value="">Sélectionner</option>
          <option value="pending" {{ old('status')=='pending' ? 'selected':'' }}>Pending</option>
          <option value="confirmed" {{ old('status')=='confirmed' ? 'selected':'' }}>Confirmed</option>
          <option value="cancelled" {{ old('status')=='cancelled' ? 'selected':'' }}>Cancelled</option>
        </select>
        @error('status') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <div class="text-center">
        <button type="submit" class="bg-red-600 text-white font-semibold px-6 py-2 rounded-lg hover:bg-red-700 transition">
          Enregistrer
        </button>
      </div>
    </form>
  </div>
</body>
</html>
