@props(['id'])

<label>
  <div class="absolute top-5 left-3 z-100 w-9 h-10 cursor-pointer flex flex-col items-center justify-center sm:hidden">
    <input class="hidden peer" type="checkbox" id="{{ $id }}" />
    <div
      class="w-[50%] h-[2px] bg-white rounded-sm transition-all duration-300 origin-left translate-y-[0.45rem] peer-checked:rotate-[-45deg]">
    </div>
    <div class="w-[50%] h-[2px] bg-white rounded-md transition-all duration-300 origin-center peer-checked:hidden"></div>
    <div
      class="w-[50%] h-[2px] bg-white rounded-md transition-all duration-300 origin-left -translate-y-[0.45rem] peer-checked:rotate-[45deg]">
    </div>
  </div>
</label>
