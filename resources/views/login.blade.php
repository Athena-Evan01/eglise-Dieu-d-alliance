<!-- Tailwind CSS v4 -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }
  </style>
<body class="min-h-screen bg-gradient-to-br from-blue-900 via-blue-800 to-blue-950 flex items-center justify-center px-4">

  <div class="w-full max-w-md text-center text-white">

    <!-- Logo -->
    <div class="flex justify-center mb-6">
      <div class="w-20 h-20 bg-white rounded-xl flex items-center justify-center shadow-lg">
        <img src="logo.png" alt="Logo Église" class="w-14 h-14 object-contain">
      </div>
    </div>

    <!-- Titre -->
    <h1 class="text-2xl font-bold mb-1">Système de Gestion d'Église</h1>
    <p class="text-blue-200 mb-8">
      Connectez-vous pour la gestiom
    </p>

    <!-- Carte Login -->
    <div class="bg-white rounded-2xl shadow-xl p-8 text-gray-700">

      <!-- Email -->
      <div class="mb-4 text-left">
        <label class="block text-sm font-medium mb-1">Adresse email</label>
        <div class="relative">
          <input
            type="email"
            placeholder="Email-Admin"
            class="w-full border rounded-lg px-10 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600"
          />
          <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
            
          </span>
        </div>
      </div>

      <!-- Mot de passe -->
      <div class="mb-4 text-left">
        <label class="block text-sm font-medium mb-1">Mot de passe</label>
        <div class="relative">
          <input
            type="password"
            placeholder="Mot de passe Admin"
            class="w-full border rounded-lg px-10 py-2 focus:outline-none focus:ring-2 focus:ring-blue-600"
          />
          <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 cursor-pointer">
            👁
          </span>
        </div>
      </div>

      <!-- Options -->
      <div class="flex items-center justify-between text-sm mb-6">
        <label class="flex items-center gap-2">
          <input type="checkbox" class="rounded border-gray-300">
          Se souvenir de moi
        </label>
        <a href="#" class="text-blue-600 hover:underline">
          Mot de passe oublié ?
        </a>
      </div>

      <!-- Bouton -->
      <button
        class="w-full bg-blue-700 hover:bg-blue-800 text-white py-3 rounded-lg font-semibold transition">
        Se connecter
      </button>

      <!-- Aide -->
      <p class="text-sm mt-6 text-gray-500">
        Besoin d'aide ?
        <a href="#" class="text-blue-600 font-medium hover:underline">
          Contactez l'administrateur
        </a>
      </p>
    </div>

    <!-- Footer -->
    <p class="text-sm text-blue-200 mt-6">
      © 2025 Système de Gestion d'Église. Tous droits réservés.
    </p>
  </div>

</body>
</html>
