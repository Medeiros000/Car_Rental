@props(['text', 'color', 'background', 'class'])
@php
if(isset($color)) {
  $color = $color;
} else {
  $color = 'slate';
}
  
  $background = $background ?? 'slate';
  $text = $text ?? 'click';
  $class = $class ?? '';
@endphp
<button
  class="{{ $class }} text-{{ $color }}-200 bg-{{ $background }}-800 focus:bg-{{ $background }}-700 active:bg-{{ $background }}-700 hover:bg-{{ $background }}-600 rounded-md py-2 px-4 border border-transparent text-center text-sm transition-all shadow-md hover:shadow-lgfocus:shadow-none active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
  type="button">
  {{ $text }}
</button>
