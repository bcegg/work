<x-guest-layout>
        <header>
            <a href="/">アイウエオ</a>
        </header>
    <x-auth-card>
        
        <x-slot name="logo">
            <h2 class="text-3xl">ログイン</h2>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="メールアドレス" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="パスワード" required autocomplete="current-password" />
            </div>

            <!--ログインボタン-->
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold block mt-8 w-full py-2 rounded">
                ログイン
            </button>

            <!--下部-->
            <div class="text-center mt-4">
            <p class="text-gray-400 text-sm font-light">アカウントをお持ちでない方はこちらから</p>
            <a class="text-blue-800" href="{{ route('register') }}" >会員登録</a>
            </div>
        </form>
    </x-auth-card>
    <footer>かきくけこ</footer>
</x-guest-layout>
