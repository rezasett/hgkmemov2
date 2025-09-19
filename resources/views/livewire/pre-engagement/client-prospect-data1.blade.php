<div class="flex-1 bg-white p-4 pl-0.5">
 <!-- Main Content -->
<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-base font-semibold text-gray-900">Client Prospect Data</h1>
      <p class="mt-2 text-sm text-gray-700">PT Example 1</p>
    </div>
    <div class="px-5 py-1 italic text-blue-900">
    status
    </div>
    <div class="mt- sm:mt-0 sm:ml-4">
       <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
        <el-dropdown class="inline-block">
          <button class="inline-flex items-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 hover:bg-gray-50">
            Action
            <svg viewBox="0 0 20 20" fill="currentColor" class="-mr-1 size-5 text-gray-400">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"/>
            </svg>
          </button>
          <el-menu anchor="bottom end" popover
            class="w-56 origin-top-right rounded-md bg-white shadow-lg outline-1 outline-black/5 transition data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
            <div class="py-1">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Save</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Validated</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Reviewed</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Approved</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">QC Passed</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Revised</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Reverse</a>
            </div>
          </el-menu>
        </el-dropdown>
    </div>
</div>

<div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
  <div class="px-4 py-5 sm:p-6">
    <div class="grid grid-flow-col grid-rows-3 gap-4">
        <div class="row-span-3 border-2 flex items-center justify-center text-4xl">H/L</div>
        <div class="col-span-2 border-2 flex items-center justify-center text-white bg-blue-500">
        <a href="{{route ('livewire.pre-engagement.client-prospect-data2') }}"" class="w-full h-full flex items-center justify-center">
            Questionare Form
        </a>
        </div>

        <div class="col-span-2 border-2 flex items-center justify-center text-white bg-blue-500">
        <a href="#" class="w-full h-full flex items-center justify-center">
            Personnel Allocation
        </a>
        </div>

        <div class="col-span-2 border-2 flex items-center justify-center text-white bg-blue-500">
        <a href="#" class="w-full h-full flex items-center justify-center">
            Cost Allocation
        </a>
        </div>
    </div>
  </div>
</div>

 <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 w-full">

        <!-- Heading dengan jarak ke tabel -->
        <div class="mb-4 text-base font-semibold text-gray-900">
        Engagement Data
      </div>

      <!-- Tabel dengan border -->
      <table class="w-full border border-gray-300 divide-y divide-gray-300">
      <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead class="bg-gray-50 border border-gray-300">
        <tr>
            <th scope="col"
                class="min-w-xs px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                Information
            </th>
            <th scope="col"
                class="min-w-xs px-4 py-2 text-left text-sm font-semibold text-gray-900">
                Value
            </th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Engagement Type</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300">New</td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Audit Standard</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Manager Incharge</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Partner Incharge</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">QCO Incharge</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
        </tbody>

    {{-- Add New Table --}}

      </table>
        <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 w-full">

      <div class="mb-4 text-base font-semibold text-gray-900">
        Corporate Identity
      </div>

        <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <table class="w-full border border-gray-300 divide-y divide-gray-300">
            <thead class="bg-gray-50 border border-gray-300">
            <tr>
                <th scope="col"
                class="min-w-xs px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                Information
            </th>
            <th scope="col"
                class="min-w-xs px-4 py-2 text-left text-sm font-semibold text-gray-900">
                Value
            </th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Client Name</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Year Established</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Ownership Status</td>
            <td class="px-4 py-2 text-sm  text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Industry Sector</td>
            <td class="px-4 py-2 text-sm  text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Financing Status</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Accounting Standard</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Engagement Period</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Engagement Services</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Client Address</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">City</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Province</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Postal Code</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Country</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Telephone Number</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Email</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
        </tbody>
      </table>
      {{-- End New Table --}}

      {{-- Add New Table --}}

      </table>
        <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 w-full">

      <div class="mb-4 text-base font-semibold text-gray-900">
        Contact Person
      </div>

        <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <table class="w-full border border-gray-300 divide-y divide-gray-300">
            <thead class="bg-gray-50 border border-gray-300">
            <tr>
                <th scope="col"
                class="min-w-xs px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                Information
            </th>
            <th scope="col"
                class="min-w-xs px-4 py-2 text-left text-sm font-semibold text-gray-900">
                Value
            </th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">PIC Name</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Telephone Number</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">PIC Email</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
        </tbody>
      </table>
      {{-- End New Table --}}

      {{-- Add New Table --}}

      </table>
        <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 w-full">

      <div class="mb-4 text-base font-semibold text-gray-900">
        Current Financial Data
      </div>

        <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <table class="w-full border border-gray-300 divide-y divide-gray-300">
            <thead class="bg-gray-50 border border-gray-300">
            <tr>
                <th scope="col"
                class="min-w-xs px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                Information
            </th>
            <th scope="col"
                class="min-w-xs px-4 py-2 text-left text-sm font-semibold text-gray-900">
                Value
            </th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total Current Asset</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total Non Current Assets</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total Short Term Liability</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total Long Term Liability</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total Equity</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total Revenue</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Total Expenses</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300"></td>
          </tr>
        </tbody>
      </table>
      {{-- End New Table --}}

    </div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
