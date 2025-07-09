@props(['active'])
<a class="{{ request()->is('/') ? 'bg-grray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium"
    href="{{ url('/') }}" {{ $attributes }}
    >{{ $slot }}</a>
