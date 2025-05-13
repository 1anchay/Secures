<!-- resources/views/components/button.blade.php -->
<button {{ $attributes->merge(['class' => 'px-4 py-2 text-white bg-blue-500 rounded']) }}>
    {{ $slot }}
</button>
<x-button>
    {{ __('Save Changes') }}
</x-button>
