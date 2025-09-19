<div class="flex-1 bg-white p-4 pl-0.5">
  <!-- Main Content -->
  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-base font-semibold text-gray-900">Client Prospect Data</h1>
        <p class="mt-2 text-sm text-gray-700">Questionare Form</p>
      </div>
      <div class="px-5 py-1 italic text-blue-900">
        status
      </div>
      <div class="mt-4 sm:mt-0 sm:ml-4">
        <!-- Dropdown -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
        <el-dropdown class="inline-block">
          <button
            class="inline-flex items-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 hover:bg-gray-50">
            Action
            <svg viewBox="0 0 20 20" fill="currentColor" class="-mr-1 size-5 text-gray-400">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" />
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

    <!-- Card dengan margin top -->
    <div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
      <div class="px-4 py-5 sm:p-6">

    <!-- Content goes here -->

     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead class="bg-gray-50 border border-gray-300">
        <tr>
            <th scope="col"
                class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                Previous Financial Reporting Issues
            </th>
            <th scope="col"
                class="min-w-3 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r bg-yellow-400 border-gray-300">
                H/L
            </th>
            <th scope="col"
                class="min-w-xs px-4 py-2 text-center text-sm font-semibold text-gray-900">
                Notes
            </th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Existence of going concern issues</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Existence of financial restructuring</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Existence of recurring losses</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Existence of restatements</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Prior audit opinion other than unqualified</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
        </tbody>
    </table>
    </div>
  </div>
  <!-- Card dengan margin top -->
    <div class="mt-6 border-8 overflow-hidden rounded-lg bg-white shadow-sm">
      <div class="px-4 py-5 sm:p-6">

    <!-- Content goes here -->

     <table class="w-full border border-gray-300 divide-y divide-gray-300">
        <thead class="bg-gray-50 border border-gray-300">
        <tr>
            <th scope="col"
                class="w-150 px-4 py-2 text-left text-sm font-semibold text-gray-900 border-r border-gray-300">
                Management Integrity
            </th>
            <th scope="col"
                class="min-w-3 px-4 py-2 text-center text-sm font-semibold text-gray-900 border-r bg-yellow-400 border-gray-300">
                H/L
            </th>
            <th scope="col"
                class="min-w-xs px-4 py-2 text-center text-sm font-semibold text-gray-900">
                Notes
            </th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Adverse reputation issues concerning management and the clients business</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Presence of irregularities in business operations</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Aggressive interpretation of accounting standards and the control environment</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Litigation risk with potential financial loss</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Indications of undue pressure on audit fee</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Indications of unreasonable limitations on audit scope</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Poor reputation of related parties with special relationships</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
          <tr>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">Unreasonable grounds for auditor replacement</td>
            <td class="px-4 py-2 text-sm text-black bg-gray-300 flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                <select class="w-full text-sm text-gray-700 text-center">
                    <option>Yes</option>
                    <option>No</option>
                </select>
                </div>
            </td>
            <td class="px-4 py-2 text-sm text-gray-700 border-r border-gray-300">
                <input type="text"
                        class="w-full text-black text-sm border-0 focus:ring-0"
                        value="New">
            </td>
          </tr>
        </tbody>
    </table>
    </div>
  </div>


</div>
