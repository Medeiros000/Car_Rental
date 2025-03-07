@props(['text', 'color', 'background', 'class'])
@php
  $color = $color ?? 'slate';
  $bg = $background ?? 'slate';
  $text = $text ?? 'click';
  $class = $class ?? '';
@endphp
<button
  class="{{ $class }} text-{{ $color }}-600 hover:text-white hover:bg-{{ $bg }}-600 hover:border-{{ $bg }}-800 focus:text-white focus:bg-{{ $bg }}-800 focus:border-{{ $bg }}-800 active:border-{{ $bg }}-800 active:text-white active:bg-{{ $bg }}-800 rounded-md border border-{{ $bg }}-300 py-2 px-4 text-center text-sm transition-all shadow-sm hover:shadow-lg disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
  type="button">
  {{ $text }}
</button>