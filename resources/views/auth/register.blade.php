<x-guest-layout>
    <header>
        <a href="/">アイウエオ</a>
    </header>
    <x-auth-card>
        <x-slot name="logo">
            <h2 class="text-3xl">会員登録</h2>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="名前" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="メールアドレス" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="パスワード"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation"
                                placeholder="確認用パスワード" 
                                required />
            </div>
            
            <!--会員登録ボタン-->
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold block mt-8 w-full py-2 rounded">
                会員登録
            </button>

            <!--下部-->
            <div class="text-center mt-4">
            <p class="text-gray-400 text-sm font-light">アカウントをお持ちの方はこちらから</p>
            <a class="text-blue-800" href="{{ route('login') }}" >ログイン</a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
