{{-- filepath: d:\Herd\car_rental\resources\views\components\header.blade.php --}}
@props(['title', 'list'])

<header id="header"
  class="flex justify-items-center justify-center bg-slate-900 sticky top-0 left-0 right-0 w-screen z-10">
  <x-buttons.open text="☰" class="sticky top-5 left-5" />
  
  <div class="text-white w-lg mx-auto">
    <h1 class="text-3xl font-bold text-center p-6">Documentação dos Endpoints</h1>
  </div>
</header>
