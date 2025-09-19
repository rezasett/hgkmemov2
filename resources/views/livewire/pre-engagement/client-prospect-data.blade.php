<!-- Main Content -->
<div class="flex-1 bg-white p-4 pl-0.5">
 <!-- Main Content -->
<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-base font-semibold text-gray-900">Client Prospect Data</h1>
      <p class="mt-2 text-sm text-gray-700">Prospect Dashboard</p>
    </div>
    {{-- tombol add --}}
    <a href={{ route ('livewire.pre-engagement.client-prospect-data0') }}
    class="rounded-full bg-blue-700 p-2 text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
    <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
    </svg>
    </a>

    {{-- tombol add end --}}
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8 w-full"> <!-- Add w-full here -->
        <table class="max-w-full divide-y divide-gray-300 w-full align"> <!-- Add w-full here -->
          <thead>
            <tr>
              <th scope="col" class="py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">No</th>
              <th scope="col" class="min-w-sm text-left text-sm font-semibold text-gray-900">Client Name</th>
              <th scope="col" class="px-3 py-3.5 text-mid text-sm font-semibold text-gray-900">Manager Incharge</th>
              <th scope="col" class="px-3 py-3.5 text-mid text-sm font-semibold text-gray-900">Partner Incharge</th>
              <th scope="col" class="px-3 py-3.5 text-mid text-sm font-semibold text-gray-900">QCO Incharge</th>
              <th scope="col" class="px-3 py-3.5 text-mid text-sm font-semibold text-gray-900">Status</th>
              <th scope="col" class="px-3 py-3.5 text-mid text-sm font-semibold text-gray-900">Action</th>
              <th scope="col" class="relative py-3.5 pr-4 pl-3 sm:pr-0">
              </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr>
              <td class="py-4 pr-4 pl-4 text-sm font-medium whitespace-nowrap text-gray-500 sm:pl-0">1</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">PT Example 1</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500 text-center">Arif Wijaksono</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500 text-center">Aryo Wibisono</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500 text-center">Hertanto</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500"></td>
              <td class="text-center">
                <a href="{{ route('livewire.pre-engagement.client-prospect-data1') }}" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                </a>
            </td>
            </tr>
            <tr>
              <td class="py-4 pr-4 pl-4 text-sm font-medium whitespace-nowrap text-gray-500 sm:pl-0">2</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">PT Example 2</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500 text-center">Sandy Hediansyah</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500 text-center">Aryo Wibisono</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500 text-center">Bambang Karunawan</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500"></td>
              <td class="text-center">
                <a href="#" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                </a>
            </td>
            </tr>
            <tr>
              <td class="py-4 pr-4 pl-4 text-sm font-medium whitespace-nowrap text-gray-500 sm:pl-0">3</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500">PT Example 3</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500 text-center">Arif Wijaksono</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500 text-center">Aryo Wibisono</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500 text-center">Hertanto</td>
              <td class="px-3 py-4 text-sm whitespace-nowrap text-gray-500"></td>
              <td class="text-center">
                <a href="#" class="px-3 py-4 text-sm whitespace-nowrap text-blue-500 hover:text-blue-700">view
                </a>
            </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
