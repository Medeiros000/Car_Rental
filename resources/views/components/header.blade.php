@props(['title'])
{{-- filepath: d:\Herd\car_rental\resources\views\components\buttons\open.blade.php --}}
<x-buttons.openmenu id="menu-toggle" />

{{-- filepath: d:\Herd\car_rental\resources\views\components\buttons\openmenu.blade.php --}}
<div class="absolute top-0 left-0 right-0 col-span-5 bg-green-600">
  <div id="header" class="flex justify-items-center justify-center bg-slate-900">
    <div class="text-white w-lg mx-auto">
      <h1 class="text-3xl font-bold text-center p-6">{{ $title }}</h1>
    </div>
  </div>
</div>
