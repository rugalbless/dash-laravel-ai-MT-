@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-blue-200 focus:ring-blue-400 focus:ring-2 rounded-md shadow-sm']) !!}>
