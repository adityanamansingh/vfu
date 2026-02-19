@props(['items' => []])
@if(count($items))
<nav aria-label="Breadcrumb" class="mb-4">
  <ol class="inline-flex items-center bg-white/60 backdrop-blur-sm rounded-full px-3 py-1 shadow-sm text-sm">
    @foreach($items as $idx => $item)
      @php $isLast = $idx === array_key_last($items); @endphp
      <li class="inline-flex items-center">
        @if(isset($item['url']) && !$isLast)
          <a href="{{ $item['url'] }}" class="text-brand-blue hover:underline">{{ $item['label'] }}</a>
        @else
          <span class="text-gray-700 font-medium">{{ $item['label'] }}</span>
        @endif
      </li>
      @if(!$isLast)
        <li class="mx-2 text-gray-300">›</li>
      @endif
    @endforeach
  </ol>
</nav>
@endif

