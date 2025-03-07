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
<button onclick="openNav()"
  class="{{ $class }} text-{{ $color }}-200 focus:text-{{ $background }}-700 active:text-{{ $background }}-700 hover:text-{{ $background }}-600 rounded-md h-12 w-12 border border-transparent text-center text-sm transition-all shadow-md hover:text-lg focus:shadow-none active:shadow-none cursor-pointer"
  type="button">
  {{ $text }}
</button>
