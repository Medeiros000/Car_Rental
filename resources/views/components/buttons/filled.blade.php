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
  class="mb-2 me-2 h-12 w-60 rounded-lg border border-slate-200 bg-white px-5 py-2.5 text-sm font-medium text-slate-100 hover:bg-slate-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-slate-100 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white dark:focus:ring-slate-700">
  {{ $text }}
</button>
