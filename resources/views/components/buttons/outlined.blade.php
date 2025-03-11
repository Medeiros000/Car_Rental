@props(['text', 'color', 'background', 'class'])
@php
  $color = $color ?? 'slate';
  $bg = $background ?? 'slate';
  $text = $text ?? 'click';
  $class = $class ?? '';
@endphp
<button
  class="{{ $class }} h-12 w-60 text-slate-600 hover:text-white hover:bg-slate-600 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 rounded-md border border-slate-300 py-2 px-4 text-center text-sm transition-all shadow-sm hover:shadow-lg disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
  type="button">
  {{ $text }}
</button>