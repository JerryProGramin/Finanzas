@livewireStyles
<div x-data="{ open: false }">
  <button @click="open = !open">Toggle</button>
  <div x-show="open">Hola</div>
</div>

@livewireScripts
