<nav
      class="flex items-center justify-between flex-wrap p-6 fixed w-full z-10 top-0 bg-gray-800"
      x-data="{ isOpen: false }"
      @keydown.escape="isOpen = false"
      :class="{ 'shadow-lg bg-indigo-900' : isOpen , 'bg-gray-800' : !isOpen}"
    >
      <!--Logo etc-->
      <div class="flex items-center flex-shrink-0 text-white mr-6">
        <a
          class="text-white no-underline hover:text-white hover:no-underline"
          href="#"
        >
          <span class="text-2xl pl-2"
            ><i class="em em-grinning"></i> LARA - Room Book</span
          >
        </a>
      </div>

      <!--Toggle button (hidden on large screens)-->
      <button
        @click="isOpen = !isOpen"
        type="button"
        class="block lg:hidden px-2 text-gray-500 hover:text-white focus:outline-none focus:text-white"
        :class="{ 'transition transform-180': isOpen }"
      >
        <svg
          class="h-6 w-6 fill-current"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
        >
          <path
            x-show="isOpen"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
          />
          <path
            x-show="!isOpen"
            fill-rule="evenodd"
            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
          />
        </svg>
      </button>

      <!--Menu-->
      <div
        class="w-full flex-grow lg:flex lg:items-center lg:w-auto"
        :class="{ 'block shadow-3xl': isOpen, 'hidden': !isOpen }"
        @click.away="isOpen = false"
        x-show.transition="true"
      >
        <ul
          class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center tracking-wide"
        >
          <li class="mr-3">
            <a
              class="inline-block py-2 px-4  {{$active === 'home' ? 'text-white no-underline' : ' text-gray-300 hover:text-gray-200 hover:text-underline'}} "
              href="/"
              @click="isOpen = false"
              >Home
            </a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block py-2 px-4 {{$active === 'about' ? 'text-white no-underline' : ' text-gray-300 hover:text-gray-200 hover:text-underline'}}"
              href="/about"
              @click="isOpen = false"
              >About
            </a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block py-2 px-4 {{$active === 'room' ? 'text-white no-underline' : ' text-gray-300 hover:text-gray-200 hover:text-underline'}}"
              href="/room"
              @click="isOpen = false"
              >Room
            </a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block py-2 px-4 {{$active === 'categories' ? 'text-white no-underline' : ' text-gray-300 hover:text-gray-200 hover:text-underline'}}"
              href="/categories"
              @click="isOpen = false"
              >Categories
            </a>
          </li>
          @auth

              <li class="mr-3">
            <div class="relative" x-data="{ isOpen: false}">
                    <button 
                            @click="isOpen = !isOpen" 
                            @keydown.escape="isOpen = false" 
                            class="flex items-center">
                        <img src="http://www.gravatar.com/avatar?d=mm" alt="avatar" class="w-8 h-8 rounded-full">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" class="heroicon-ui"></path></svg>
                    </button>
                    <ul x-show="isOpen"
                        @click.away="isOpen = false"
                        class="absolute font-normal bg-white shadow overflow-hidden rounded w-48 border mt-2 py-1 right-0 z-20"
                    > 
                    <li>
                      <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">                        
                        <div class="ml-2 flex flex-col leading-tight tracking-wide">
                          <label class="text-sm font-semibold">{{auth()->user()->name}}</label>  
                          <label class="text-sm text-gray-400">{{auth()->user()->username}}</label>
                        </div>
                      </a>
                    </li>
                        <li>
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="text-gray-600"><path d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" class="heroicon-ui"></path></svg>
                                <span class="ml-2">Account</span>
                            </a>
                        </li>
                        <li class="border-b border-gray-400">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="text-gray-600"><path d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" class="heroicon-ui"></path></svg>
                                <span class="ml-2">Settings</span>
                            </a>
                        </li>
                        <li>
                          <form method="POST" action="/logout" class="px-3 py-3 hover:bg-gray-200">
                            @csrf
                            <button type="submit" class="flex items-center">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-gray-600"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path></svg><span class="ml-2">Logout</span>
                            </button>
                            </form>
                        </li>
                    </ul>
                </div>
          </li>

          @else

              <li class="mr-3">
            <a
              class="inline-block py-2 px-4 text-white bg-green-500 rounded-md  hover:text-gray-200 hover:bg-green-600 hover:text-underline shadow-md font-semibold"
              href="/login"
              @click="isOpen = false"
              >Sign In
            </a>
          </li>

          @endauth
         
        </ul>
      </div>
    </nav>