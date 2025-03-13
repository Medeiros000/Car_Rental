@props(['text', 'color', 'background', 'class'])
@php
  $color = $color ?? 'slate';
  $bg = $background ?? 'slate';
  $text = $text ?? 'click';
  $class = $class ?? '';
@endphp
<button
  class="{{ $class }} h-12 w-60 rounded-md border border-slate-300 px-4 py-2 text-center text-sm text-slate-600 shadow-sm transition-all hover:border-slate-800 hover:bg-slate-600 hover:text-white hover:shadow-lg focus:border-slate-800 focus:bg-slate-800 focus:text-white active:border-slate-800 active:bg-slate-800 active:text-white disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
  type="button">
  {{ $text }}
</button>
