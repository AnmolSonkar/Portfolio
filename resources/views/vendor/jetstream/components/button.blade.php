<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md  text-xs text-white uppercase tracking-widest  active:bg-green-700 focus:outline-none disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
