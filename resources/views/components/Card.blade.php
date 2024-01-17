<!-- resources/views/components/Card.blade.php -->

<div class="relative">
    <img src="{{ $image }}" alt="Random Image" class="w-full h-64 object-cover mb-4">
    <div class="text-gray-900">
        <div class="font-semibold text-xl mb-2">Sitio: {{ $source }}</div>
        <div class="group">
            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" @mouseover="showDetails = true" @mouseleave="showDetails = false">
                View Details
            </button>

            <!-- Detalles que se muestran al hacer hover -->
            <div class="absolute bottom-20 left-0 p-4 bg-white border border-gray-200 shadow-md invisible group-hover:visible">
                {{-- Aquí puedes mostrar información adicional, como precio, fechas, etc. --}}
                <p>{{ $additionalInfo }}</p>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        new Vue({
            data() {
                return {
                    showDetails: false,
                };
            },
        }).$mount('.relative');
    </script>
@endpush
