<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HGK Memo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom Styles */
    .sidebar {
      min-height: 100vh;
    }
  </style>
</head>
<body class="bg-gray-100">

  <div class="flex h-auto min-h-screen">
    <!-- Sidebar -->
    <div class="w-52 bg-gray-400 text-white p-1 flex flex-col sidebar">
      <div class="flex h-16 items-center">
        <a href="{{ route('livewire.home') }}">
            <h2 class="text-xl font-semibold">HGK MEMO</h2>
        </a>
      </div>
      <nav class="flex-1 flex flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-4">
        <li>
        <div>
            <a href={{ route('livewire.auditor-dashboard.auditor-dashboard') }}
            class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm font-semibold text-gray-900 hover:bg-gray-50">
            Auditor Dashboard
            </a>
        </div>
        </li>
          <li>
            <div>
              <button type="button" class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm font-semibold text-gray-900 hover:bg-gray-50" aria-controls="sub-menu-1" aria-expanded="false">
                Pre Engagement
              </button>
              <ul class="mt-1 px-2 hidden" id="sub-menu-1">
                <li><a href="{{ route('livewire.pre-engagement.client-prospect-data') }}" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Client Prospect Data</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Client Prospect Result</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">PMPJ</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">List Ongoing Client</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div>
              <button type="button" class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm font-semibold text-gray-900 hover:bg-gray-50" aria-controls="sub-menu-2" aria-expanded="false">
                Risk Assessment
              </button>
              <ul class="mt-1 px-2 hidden" id="sub-menu-2">
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Materiality</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Analytical Procedures</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Inherent Risk</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Control Risk</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">RoMM</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Audit Strategy Memorandum</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div>
              <button type="button" class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm font-semibold text-gray-900 hover:bg-gray-50" aria-controls="sub-menu-3" aria-expanded="false">
                Risk Responses
              </button>
              <ul class="mt-1 px-2 hidden" id="sub-menu-3">
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Lead & Sublead</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Subsequent Event</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Related Party Transaction</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Accounting Estimate</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Management Expert</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Auditor's Expert</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">List Adjusment</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Trial Balance</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">Summary Unajusted Difference</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div>
              <button type="button" class="flex w-full items-center gap-x-3 rounded-md p-2 text-left text-sm font-semibold text-gray-900 hover:bg-gray-50" aria-controls="sub-menu-4" aria-expanded="false">
                Completing & Reporting
              </button>
              <ul class="mt-1 px-2 hidden" id="sub-menu-4">
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">QC Review</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">IAR Review</a></li>
                <li><a href="#" class="block rounded-md py-2 pl-2 text-sm text-gray-700 hover:bg-gray-50">IAR Final</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </div>

<script>
  // Toggle Submenu
  const menuButton = document.querySelectorAll('[aria-controls]');
  menuButton.forEach(button => {
    button.addEventListener('click', () => {
      const submenu = document.getElementById(button.getAttribute('aria-controls'));
      submenu.classList.toggle('hidden');
    });
  });
</script>
