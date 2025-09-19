<!-- Main Content -->
<div class="flex-1 bg-white p-4 pl-2">
  <div class="px-4 sm:px-6 lg:px-4 border-l-4 border-gray-600">
    <!-- Header dengan judul + tombol kanan -->
    <div class="flex items-center justify-between">

      <!-- Kiri: Judul -->
      <div>
        <h1 class="text-base font-semibold text-gray-900">Welcome to HGK Memo</h1>
        <p class="mt-2 text-sm text-gray-700">
          Select the menu on the left side to open related content.
        </p>
      </div>

      <!-- Kanan: Tombol Dropdown -->
      <div>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
        <el-dropdown class="inline-block">
          <button
            class="inline-flex items-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 hover:bg-gray-50">
            Login As Auditor
            <svg viewBox="0 0 20 20" fill="currentColor" class="-mr-1 size-5 text-gray-400">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"/>
            </svg>
          </button>

          <el-menu anchor="bottom end" popover
            class="w-56 origin-top-right rounded-md bg-white shadow-lg outline-1 outline-black/5 transition
                   data-closed:scale-95 data-closed:transform data-closed:opacity-0
                   data-enter:duration-100 data-enter:ease-out
                   data-leave:duration-75 data-leave:ease-in">
            <div class="py-1">
              <a href="#"
                 class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Account Setting</a>
              <form action="#" method="POST">
                <button type="submit"
                        class="block w-full px-4 py-2 text-left text-sm text-gray-700 hover:bg-gray-100">
                  Sign out
                </button>
              </form>
            </div>
          </el-menu>
        </el-dropdown>
      </div>
    </div>
  </div>
</div>
