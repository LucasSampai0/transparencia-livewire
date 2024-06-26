@props(['name','title','style', 'body'])

<div
    x-data="{ show: false , id: '{{ $name }}'}"
    x-show="show"
    x-on:open-modal.window="show = ($event.detail.id == id)"
    x-on:close-modal.window="show = false"
    x-on:keydown.escape.window="show = false"
    x-on:click.away="show = false"
    style="display: none"
    class="fixed inset-0 z-50 flex items-center justify-center px-4 py-6 sm:px-0 sm:py-0 sm:items-top sm:justify-center"
    xmlns:x-transition="http://www.w3.org/1999/xhtml">
    {{--  Background  --}}
    <div x-on:click="show = false" class="fixed inset-0 bg-gray-300 opacity-40"></div>
    {{--  Modal  --}}
        <div
            class="mx-auto bg-white rounded-lg m-auto inset-x-0 fixed max-w-md border border-1"
            x-show="show"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-90"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-90"
        >
            {{--  Header  --}}
            <div
                @class([
                    'bg-green-500 rounded-t-lg p-4' => $style === 'success',
                    'bg-red-400 rounded-t-lg p-4' => $style === 'danger',
                    'bg-yellow-400 rounded-t-lg p-4' => $style === 'warning',
                    'bg-gray-200 rounded-t-lg p-4' => $style !== 'success' && $style !== 'danger' && $style !== 'warning',
                ])>
                <div class="flex justify-between">
                    <h2 class="text-md font-semibold">
                        @if(isset($title))
                            {{ $title }}
                        @endif
                    </h2>
                    <button
                        x-on:click="show = false"
                        class="text-black-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            {{--  Content  --}}
            @if(isset($body))
                <div>
                    {{ $body }}
                </div>
            @endif
            @if(isset($footer))
                <div>
                    {{$footer}}
                </div>
            @endif
        </div>
</div>
