<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Información del perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">

        <x-jet-action-message on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div class="mb-3" x-data="{photoName: null, photoPreview: null}">
                <!-- Profile Photo File Input -->
                <input type="file" hidden
                       wire:model="photo"
                       x-ref="photo"
                       x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" class="rounded-circle" height="80px" width="80px">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <img x-bind:src="photoPreview" class="rounded-circle" width="80px" height="80px">
                </div>

                <x-jet-secondary-button class="mt-2 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
				</x-jet-secondary-button>
				
				@if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        <div wire:loading wire:target="deleteProfilePhoto" class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>

                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <div class="w-md-75">
            <!-- Name -->
            <div class="mb-3">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }}" wire:model.defer="state.name" autocomplete="name" />
                <x-jet-input-error for="name" />
            </div>

            <!-- Email -->
            <div class="mb-3">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }}" wire:model.defer="state.email" />
                <x-jet-input-error for="email" />
            </div>

             <!-- Category -->
             <div class="mb-3">
                <x-jet-label for="category" value="{{ __('Categoría') }}" />
                <x-jet-input id="category" type="category" class="{{ $errors->has('category') ? 'is-invalid' : '' }}" wire:model.defer="state.category" />
                <x-jet-input-error for="category" />
            </div>

            <!-- Expediente -->
            <div class="mb-3">
                <x-jet-label for="proceedings" value="{{ __('Expediente') }}" />
                <x-jet-input id="proceedings" type="proceedings" class="{{ $errors->has('proceedings') ? 'is-invalid' : '' }}" wire:model.defer="state.proceedings" />
                <x-jet-input-error for="category" />
            </div>
            <!-- Sección -->
            <div class="mb-3">
                <x-jet-label for="section" value="{{ __('Sección') }}" />
                <x-jet-input id="section" type="section" class="{{ $errors->has('section') ? 'is-invalid' : '' }}" wire:model.defer="state.proceedings" />
                <x-jet-input-error for="section" />
            </div>

            <!-- Numero de sesiones iniciadas -->
            <div class="mb-3">
                <x-jet-label for="nsession" value="{{ __('Numero de sesiones iniciadas') }}" />
                <x-jet-input id="nsession" type="nsession" class="{{ $errors->has('nsession') ? 'is-invalid' : '' }}" wire:model.defer="state.proceedings" />
                <x-jet-input-error for="category" />
            </div>

            <!-- Centro de trabajo -->
            <div class="mb-3">
                <x-jet-label for="workplace" value="{{ __('Centro de trabajo') }}" />
                <x-jet-input id="workplace" type="workplace" class="{{ $errors->has('workplace') ? 'is-invalid' : '' }}" wire:model.defer="state.proceedings" />
                <x-jet-input-error for="workplace" />
            </div>

            <!-- Habilidades-->
            <div class="mb-3">
                <x-jet-label for="abilities" value="{{ __('Habilidades') }}" />
                <x-jet-input id="abilities" type="abilities" class="{{ $errors->has('abilities') ? 'is-invalid' : '' }}" wire:model.defer="state.proceedings" />
                <x-jet-input-error for="abilities" />
            </div>

            <!-- Notas -->
            <div class="mb-3">
                <x-jet-label for="notes" value="{{ __('Notas') }}" />
                <x-jet-input id="notes" type="notes" class="{{ $errors->has('notes') ? 'is-invalid' : '' }}" wire:model.defer="state.proceedings" />
                <x-jet-input-error for="notes" />
            </div>

        </div>
    </x-slot>

    <x-slot name="actions">
		<div class="d-flex align-items-baseline">
			<x-jet-button>
                <div wire:loading class="spinner-border spinner-border-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>

				{{ __('Guardar') }}
			</x-jet-button>
		</div>
    </x-slot>
</x-jet-form-section>