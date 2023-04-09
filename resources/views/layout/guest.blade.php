<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  @livewireStyles
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#0F172A] text-white font-mono" x-data="{dark:false, light:true}" :class="dark ? 'dark' : ''">
    @yield('content')

    <footer class="border-t-2  mx-40 border-white">
        <p>© Copyright {{ now()->format('Y') }} by Vitor Maia.</p>
    </footer>
    <div class="fixed bottom-5 left-5">
        <button
          aria-hidden="true"
          class="p-2 transition-colors duration-200 rounded-full shadow-md bg-primary hover:bg-primary-darker "
        >
        <template x-if="dark">
          <span @click="dark=false, light=true" class="material-symbols-rounded">
            dark_mode
          </span>
        </template>
        <template x-if="light">
          <span @click="dark=true, light=false" class="material-symbols-rounded">
            light_mode
          </span>
        </template>


        </button>
      </div>
    @livewireScripts
</body>
</html>
