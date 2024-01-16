<!-- resources/views/components/Card.blade.php -->

<div>
    <img src="{{ $image }}" alt="Random Image" class="w-full h-64 object-cover mb-4">
    <div class="text-gray-900">
        <div class="font-semibold text-xl mb-2">Fuente: {{ $source }}</div>
        <a href="{{ $source }}" class="text-blue-500 hover:underline" target="_blank">Ver más</a>
    </div>
</div>
