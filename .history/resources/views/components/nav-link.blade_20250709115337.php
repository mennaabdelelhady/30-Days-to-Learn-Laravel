@props(['active'=>false,'type'=>'a'])

<?php if ($type === 'button') {
    $attributes->merge(['type' => 'button']);
} else {
    $attributes->merge(['href' => '#']);
} ?>
<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium"
    aria-current="{{$active? 'page':'false'}}" 
    {{ $attributes }}
    >{{ $slot }}</a>
