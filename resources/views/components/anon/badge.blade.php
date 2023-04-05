@props([
    'slot' => null
])
<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <span class="px-2 rounded-lg bg-yellow-200 text-gray-700">{{ $slot }}</span>
</div>