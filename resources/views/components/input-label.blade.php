@props(['value'])

<label {{ $attributes->merge(['class' => ' instrument-sans-custom font-semibold block text-slate-800 text-lg dark:text-white']) }}>
    {{ $value ?? $slot }}
</label>
