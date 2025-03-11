@props(['text', 'color', 'background', 'class'])
@php
  if (isset($color)) {
      $color = $color;
  } else {
      $color = 'slate';
  }

  $background = $background ?? 'slate';
  $text = $text ?? 'click';
  $class = $class ?? '';
@endphp
<button type="button"
  class="h-12 w-60 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-slate-100 focus:outline-none bg-white rounded-lg border border-slate-200 hover:bg-slate-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-slate-100 dark:focus:ring-slate-700 dark:bg-slate-800 dark:text-slate-400 dark:border-slate-600 dark:hover:text-white dark:hover:bg-slate-700">
  {{ $text }}
</button>
