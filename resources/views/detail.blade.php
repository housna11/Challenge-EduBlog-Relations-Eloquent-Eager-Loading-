<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md bg-white shadow-lg rounded-lg border border-red-200 p-6">
    <h2 class="text-2xl font-semibold text-red-800 mb-4 text-center">Réservation{{ $booking->id }}</h2>

    <div class="space-y-3">
      <p><strong>Service ID:</strong> {{ $booking->service_id }}</p>
      <p><strong>Date:</strong> {{ $booking->date }}</p>
      <p><strong>Heure:</strong> {{ $booking->time }}</p>
      <p><strong>Statuts:</strong> {{ $booking->status }}</p>
    </div>

    <div class="mt-6 text-center">
      <a href="{{ route('bookings.index') }}" class="text-red-700 hover:underline font-medium">← Retour à la liste</a>
    </div>
  </div>
</div>

</body>
</html>