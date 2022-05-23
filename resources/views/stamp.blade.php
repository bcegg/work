{{-- コメントアウト
  <x-guest-layout>
  <!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <div class="">konnitiha</div>
  <a href="/" class="stamp">
    <button class="box">勤務開始</button>
    <button class="box">勤務終了</button>
  </a>
  <a href="/" class="stamp">
    <button class="box">休憩開始</button>
    <button class="box">休憩終了</button>
  </a>

  <div class="stamp">
    <button class="begin" type="submit">勤務開始</button>
    <button class="finish" type="submit">勤務終了</button>
  </div>

  <div class="stamp">
    <button class="" type="submit"></button>
    <button class="" type="submit"></button>
  </div>
  </body>
  </html>
</x-guest-layout> --}}


<x-guest-layout>
  <header class="header bg-gray-300 h-20">
    <h2 class="items-center ml-10 text-2xl">Atte</h2>
    <nav class="header-nav mr-10">
    <ul class="header-nav-list">
      <li class="header-nav-item"><a href="/">ホーム</a></li>
      <li class="header-nav-item"><a href="/">日付一覧</a></li>
      <li class="header-nav-item">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
            {{ __('ログアウト') }}
          </a>
        </form>
      </li>
    </ul>
  </nav>
  </header>

  <body>
    <div class="">
      <div class="text-center text-2xl font-medium mt-12">
        @if (Auth::check())
          <p>{{ Auth::user()->name }}さんお疲れ様です！</p>
        @endif
      </div>
      <div class="stamp">
        <form action="/stamp/begin" method="POST">
          @csrf
          <button class="box" onclick="location.href=''">勤務開始</button>
        </form>
        <form action="/stamp/finish" method="POST">
          @csrf
          <button class="box" onclick="location.href=''">勤務終了</button>
        </form>
      </div>
      <div class="stamp">
        <form action="/restin" method="POST">
          @csrf
          <button class="box" onclick="location.href=''">休憩開始</button>
        </form>
        <form action="/restout" method="POST">
          @csrf
          <button class="box" onclick="location.href=''">休憩終了</button>
        </form>
      </div>
    </div>
  </body>

  <div class="absolute bottom-0">
    <footer class="bg-gray-300 w-screen">
      <p class="text-center p-3">Atte,inc</p>
    </footer>
  </div>
</x-guest-layout>

  <style>
  .stamp{
    display: flex;
    justify-content: center;
    margin-top: 50px;
  }
  .box {
    background-color: red;
    margin-right: 30px;
    margin-left: 30px;
    font-size: 20px;
    width: 450px;
    height: 150px;
    padding: 50px;
  }
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .header-nav-list {
  display: flex;
  }
  .header-nav-item:not(:last-child) {
    margin-right: 30px;
  }
</style>