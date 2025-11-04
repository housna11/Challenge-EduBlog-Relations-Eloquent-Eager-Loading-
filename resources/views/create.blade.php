<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Créer un Service</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class=" min-h-screen flex items-center justify-center">

  <div class="w-full max-w-3xl bg-white shadow-lg rounded-xl p-8 border border-red-200">
    <h2 class="text-2xl font-bold text-center text-red-700 mb-6">Créer un nouveau Service</h2>

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
      @csrf

      <div>
        <label for="title" class="block text-red-700 font-medium mb-1">Titre</label>
        <input type="text" id="title" name="title" placeholder="Entrez le titre du service"
               class="w-full border border-red-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
      </div>

      <div>
        <label for="description" class="block text-red-700 font-medium mb-1">Description</label>
        <textarea id="description" name="description" rows="4" placeholder="Entrez la description du service"
                  class="w-full border border-red-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400"></textarea>
      </div>

      <div>
        <label for="duration" class="block text-red-700 font-medium mb-1">Durée</label>
        <input type="number" id="duration" name="duration" placeholder="Ex: 60"
               class="w-full border border-red-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-400">
      </div>

      <div>
        <label for="price" class="block text-red-700 font-medium mb-1">Prix</label>
        <input type="number" step="0.01" id="price" name="price" placeholder="Ex: 49.99"
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
          Enregistrer le Service
        </button>
      </div>
    </form>
  </div>
</body>
</html>
