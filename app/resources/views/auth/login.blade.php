<x-guest-layout >



    <x-jet-authentication-card  style="background-color:black !important">
  

        <x-slot name="logo">

        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div><h2 class="center"> <b>Welcome to PMS</b> </h2></div>

            <div>
                <x-jet-label for="email"  />
                <x-jet-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password"  />
                <x-jet-input id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <!-- <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label> -->
            </div>

            <div class="flex items-center justify-end mt-4">
                <!-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif -->

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
<style>
        .bg-gray-100{

           background-image: url('images/hotelmsat.jpg');
           background-size: cover;

        }

        .element-style{
            color:red;
        }

        .center {
            margin: auto;
            width: 50%;
            padding: 20px;
            }
</style>