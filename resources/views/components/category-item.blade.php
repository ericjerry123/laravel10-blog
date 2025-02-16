@props(['label', 'active' => false])
<li><a class="{{ $active ? 'active' : '' }}">{{ $label }}</a></li>
