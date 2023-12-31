<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
  <!-- Primary Navigation Menu -->
  <div class="container">
    <div class="flex justify-between h-16">
      <div class="flex justify-between">

        <!-- Logo -->
        <div class="shrink-0 flex items-center">
          <a href="{{ route('top') }}">
            東京旅館
          </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

          <!-- Gateで処理する場合 -->
          {{-- @can('adminGate')
          <x-nav-link :href="route('top')" :active="request()->routeIs('top')">
            TOP
          </x-nav-link>
          @endcan --}}

          <x-nav-link :href="route('top')" :active="request()->routeIs('top')">
            TOP
          </x-nav-link>

          <x-nav-link :href="route('access')" :active="request()->routeIs('access')">
            アクセス案内
          </x-nav-link>

          <x-nav-link :href="route('plan.index')" :active="request()->routeIs('plan.index')">
            宿泊プラン
          </x-nav-link>

          <x-nav-link :href="route('room')" :active="request()->routeIs('room')">
            客室紹介ページ
          </x-nav-link>

          @auth
          {{-- <x-nav-link :href="route('plan.edit')" :active="request()->routeIs('plan.edit')">
            宿泊プラン管理
          </x-nav-link> --}}

          <x-nav-link :href="route('contact.index')" :active="request()->routeIs('contact.index')">
            お問い合わせ一覧管理
          </x-nav-link>
          @endauth

        </div>

        
      </div>

      <!-- Settings Dropdown -->
      <div class="hidden sm:flex sm:items-center sm:ml-6">
        <!-- Navigation Links -->

        <div class="mr-5">
          <a class="btn btn-primary" href="{{ route('contact.create') }}">
            お問い合わせ
          </a>
        </div>

        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button
              class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">

              <!-- ログイン時 -->
              @auth
              <div>{{ Auth::user()->name }}</div>
              @endauth

              <!-- ログアウト時 -->
              @guest
              <div>匿名</div>
              @endguest

              <div class="ml-1">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </div>
            </button>
          </x-slot>

          <!-- ログイン時 -->
          @auth
          <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
              {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                          this.closest('form').submit();">
                {{ __('Log Out') }}
              </x-dropdown-link>
            </form>
          </x-slot>
          @endauth

          <!-- ログアウト時 -->
          @guest
          <x-slot name="content">
            <x-dropdown-link :href="route('login')">
              {{ __('Login') }}
            </x-dropdown-link>

            <x-dropdown-link :href="route('register')">
              {{ __('新規登録') }}
            </x-dropdown-link>
            
          </x-slot>
          @endguest

        </x-dropdown>
      </div>

      <!-- Hamburger -->
      <div class="-mr-2 flex items-center sm:hidden">
        <button @click="open = ! open"
          class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
          <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
      <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        {{ __('Dashboard') }}
      </x-responsive-nav-link>
    </div>

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200">

      @auth
      <div class="px-4">
        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
      </div>
      @endauth

      <div class="mt-3 space-y-1">

        <!-- ログイン時 -->
        @auth
        <x-responsive-nav-link :href="route('profile.edit')">
          {{ __('Profile') }}
        </x-responsive-nav-link>

        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf

          <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>
        @endauth

        <!-- ログアウト時 -->
        @guest
        <x-responsive-nav-link :href="route('login')">
          {{ __('Login') }}
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('register')">
          {{ __('新規登録') }}
        </x-responsive-nav-link>
        @endguest

      </div>
    </div>
  </div>
</nav>