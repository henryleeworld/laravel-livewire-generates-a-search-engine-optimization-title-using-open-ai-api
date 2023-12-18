<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form wire:submit="save">
                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input wire:model.live.debounce.250ms="title" type="text" id="title" class="mt-1 block w-full" required />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />

                            <x-secondary-button wire:click="suggestTitles" class="mt-1">
                                {{ __('Alternative title suggestions') }}
                            </x-secondary-button>

                            @if($suggestedTitles)
                                <div class="mt-2">
                                    @foreach($suggestedTitles as $key => $suggestedTitle)
                                    <div class="hover:underline hover:cursor-pointer" wire:click="useTitle({{ $key }});setInterval(() => {document.getElementById('title').value = $wire.title;}, 1000)">{{ $suggestedTitle }}</div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div wire:loading wire:target="suggestTitles">
                            {{ __('Loading') }}
                        </div>
                        <div class="mt-4">
                            <x-input-label for="content" :value="__('Content')" />
                            <textarea wire:model="content" id="content" class="mt-1 block w-full rounded-md border-gray-300" rows="4" cols="50" required /></textarea>
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-primary-button>
                                {{ __('Save') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
