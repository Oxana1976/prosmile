<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('patient.store') }}">
        @csrf

        <!-- Prénom -->
        <div>
            <x-input-label for="firstname" :value="__('Prénom')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Nom -->
        <div class="mt-4">
            <x-input-label for="lastname" :value="__('Nom')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de passe')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Langue -->
        <div class="mt-4">
            <x-input-label for="language" :value="__('Langue')" />
            <x-text-input id="language" class="block mt-1 w-full" type="text" name="language" :value="old('language')" required />
            <x-input-error :messages="$errors->get('language')" class="mt-2" />
        </div>

        <!-- Numéro de téléphone -->
        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('Numéro de téléphone')" />
            <x-text-input id="phone_number" class="block mt-1 w-full" type="tel" name="phone_number" :value="old('phone_number')" required />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <!-- Adresse -->
        <div class="mt-4">
            <x-input-label for="address" :value="__('Adresse')" />
            <textarea id="address" class="block mt-1 w-full" name="address" required>{{ old('address') }}</textarea>
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Date de naissance -->
        <div class="mt-4">
            <x-input-label for="birthdate" :value="__('Date de naissance')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>

        <!-- Genre -->
        <div class="mt-4">
            <x-input-label for="gender" :value="__('Genre')" />
            <select id="gender" name="gender" class="block mt-1 w-full" required>
                <option value="M">Homme</option>
                <option value="F">Femme</option>
            </select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="about" :value="__('Description')" />
            <x-text-input id="about" class="block mt-1 w-full" type="text" name="about" :value="old('about')" required />
            <x-input-error :messages="$errors->get('about')" class="mt-2" />
        </div>

        <!-- Contact d'urgence -->
        <div class="mt-4">
            <x-input-label for="emergency_contact_name" :value="__('Contact d\'urgence')" />
            <x-text-input id="emergency_contact_name" class="block mt-1 w-full" type="text" name="emergency_contact_name" :value="old('emergency_contact_name')" required />
            <x-input-error :messages="$errors->get('emergency_contact_name')" class="mt-2" />
        </div>

        <!-- Numéro de téléphone d'urgence -->
        <div class="mt-4">
            <x-input-label for="emergency_contact_phone" :value="__('Numéro de téléphone d\'urgence')" />
            <x-text-input id="emergency_contact_phone" class="block mt-1 w-full" type="tel" name="emergency_contact_phone" :value="old('emergency_contact_phone')" required />
            <x-input-error :messages="$errors->get('emergency_contact_phone')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Inscription') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
