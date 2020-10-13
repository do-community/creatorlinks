<x-jet-form-section submit="saveLink">
    <x-slot name="title">
        {{ __('Create New Link') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Add a new link to your profile.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <!-- Link URL -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="url" value="{{ __('Link URL') }}" />
                <x-jet-input id="url" type="text" class="mt-1 block w-full" wire:model.defer="url" autocomplete="url" />
                <x-jet-input-error for="url" class="mt-2" />
            </div>

            <!-- Link Description -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="description" value="{{ __('Link Description') }}" />
                <x-jet-input id="description" type="text" class="mt-1 block w-full" wire:model.defer="description" autocomplete="description" />
                <x-jet-input-error for="description" class="mt-2" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
