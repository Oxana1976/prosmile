<x-guest-layout>
    <!-- API CREATE USER TOKEN -->

    <select name="user_token" id="">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->email }}</option>
        @endforeach
    </select>

</x-guest-layout>
