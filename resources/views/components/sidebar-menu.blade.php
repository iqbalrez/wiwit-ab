@props(['name' => '', 'icon' => '', 'route' => '', 'active' => false])

<li>
    <a href="{{ $route }}"
        class="flex items-center py-3 pl-6 nav-item hover:text-primary rounded-md {{ $active == true ? 'text-primary bg-dark' : 'text-dark' }}">
        <i
            class="{{ $icon }} w-4 h-4 transition duration-75  group-hover:text-dark {{ $active == true ? 'text-white' : 'text-dark' }}"></i>
        <span class="ml-3">{{ $name }}</span>
    </a>
</li>
