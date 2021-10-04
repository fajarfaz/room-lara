
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
          class="pt-6 lg:pt-0 list-reset lg:flex justify-end flex-1 items-center"
        >
          <li class="mr-3">
            <a
              class="inline-block py-2 px-4  {{$title === 'Home' ? 'text-white no-underline' : ' text-gray-600 hover:text-gray-200 hover:text-underline'}} "
              href="/"
              @click="isOpen = false"
              >Home
            </a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block py-2 px-4 {{$title === 'About' ? 'text-white no-underline' : ' text-gray-600 hover:text-gray-200 hover:text-underline'}}"
              href="/about"
              @click="isOpen = false"
              >About
            </a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block py-2 px-4 {{$title === 'All Rooms' ? 'text-white no-underline' : ' text-gray-600 hover:text-gray-200 hover:text-underline'}}"
              href="/room"
              @click="isOpen = false"
              >Room
            </a>
          </li>
          <li class="mr-3">
            <a
              class="inline-block py-2 px-4 {{$title === 'categories' ? 'text-white no-underline' : ' text-gray-600 hover:text-gray-200 hover:text-underline'}}"
              href="/categories"
              @click="isOpen = false"
              >Categories
            </a>
          </li>
        </ul>
      </div>
    </nav>