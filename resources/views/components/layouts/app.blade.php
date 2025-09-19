<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
{{--
<style>

/* -----SIDEBAR----- */
:root {
  --blue-700: #1f5d93;
  --blue-800: #1b4e7a;
  --blue-900: #163f63;
  --text: #0f172a;
  --muted: #6b7280;
  --bg: #f8fafc;
  --white: #ffffff;
  --bg        : #f8fafc;
  --card      : #ffffff;
  --ink       : #0f172a;
  --line      : rgba(15,23,42,.12);
  --line-soft : rgba(15,23,42,.08);
  --head-bg   : #ffffff;   /* abu tua */
  --head-ink  : #0f172a;   /* teks putih */
  --row-zebra : #f2f4f7;
  --row-hover : #eef6ff;
  --brand     : #3b82f6;
  --link      : #2563eb;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  scroll-behavior: smooth;
}

body {
  margin: 0;
  font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue",
    Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji";
  color: var(--text);
  background: var(--bg);
  line-height: 1.5;
}

/* Layout */
.sidebar {
  position: fixed;
  inset: 0 auto 0 0;
  width: 260px;
  background: linear-gradient(180deg, var(--blue-800), var(--blue-900));
  color: var(--white);
  padding: 20px 16px 24px;
  overflow-y: auto;
}

/* Brand */
.brand {
  display: block;
  text-decoration: none;
  margin-bottom: 16px;
}
.brand-logo {
  display: inline-block;
  font-weight: 700;
  letter-spacing: 0.5px;
  font-size: 26px;
  color: #e8f1fb;
  border-bottom: #ddbc03 4px solid;
}

/* Nav */
.nav {
  display: grid;
  gap: 6px;
}

.nav-section2 {
  display: grid;
  gap: 6px;
}

.nav-section {
  margin: 10px 0 1px;
  font-weight: 700;
  font-size: 13px;
  opacity: 0.9;
}

.nav a {
  display: block;
  padding: 7px 10px;
  border-radius: 8px;
  text-decoration: none;
  color: #e6eef8;
  font-size: 14px;
}

.nav-section2 {
  margin: 10px 0 1px;
  font-weight: 400;
  font-size: 13px;
  opacity: 0.9;
  color:var(--muted)
}

.nav a:hover,
.nav a:focus {
  background: var(--blue-700);
  outline: none;
}

.nav-section2:hover,
.nav-section2:focus {
  background: var(--blue-700);
  outline: none;
}

/* Responsif */
@media (max-width: 960px) {
  .sidebar {
    position: static;
    width: 100%;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
}

/* Homepage */
.hero {
  display: grid;
  place-content: start;
  min-height: 40vh;
  background: var(--white);
  border: 1px solid #e5e7eb;
  border-radius: 16px;
  padding: 40px;
  box-shadow: 0 10px 24px rgba(15, 23, 42, 0.05);
}

.home-h1 {
  margin: 0 0 8px;
  font-size: 300%;
}

.muted {
  color: var(--muted);
  margin-top: 0;
}

.section {
  margin-top: 48px;
  scroll-margin-top: 24px; /* agar judul tidak tertutup saat anchor */
  background: var(--white);
  border: 1px solid #e5e7eb;
  border-radius: 16px;
  box-shadow: 0 6px 18px rgba(15, 23, 42, 0.04);
}

.section h2 {
  margin: 0 0 8px;
  font-size: 20px;
}

.margin-maincontent {
  margin-left: 18rem; /* ukuran sidebar */
  padding: 1rem;
  transition: margin-left 0.3s ease;
}


/* --- CPD DASHBOARD --- */

.page-heading{
  margin:0 0 14px;
  font-weight:500;
  font-size:24px;
  letter-spacing:.02em;
  color:#111827;
}

.sheet{
  border:1px solid var(--line);
  border-radius:12px;
  overflow:hidden;
  background:var(--card);
}

.table-wrap{
  overflow:auto;
  -webkit-overflow-scrolling:touch;
  scroll-behavior:smooth;
}

.data-table{
  width:100%;
  border-collapse:separate;
  border-spacing:0;
  table-layout:fixed;
  font-size:14px;
  color:var(--ink);
}

/* Header table konsisten abu tua + teks putih */
.data-table thead th{
  position:sticky;
  top:0;
  z-index:2;
  background:var(--head-bg);
  color:var(--head-ink);
  font-weight:700;
  text-align:center;
  padding:11px 12px;
  border-bottom:1px solid var(--line);
  white-space:nowrap;
}
.data-table thead tr:first-child th:first-child{border-top-left-radius:12px}
.data-table thead tr:first-child th:last-child {border-top-right-radius:12px}

.data-table th{
  padding:9px 10px;
  border-right:1px solid var(--line-soft);
  border-top:1px solid var(--line-soft);
  white-space:nowrap;
  overflow:hidden;
  text-overflow:ellipsis;
}

.data-table td:nth-child(1){ text-align: center }



.data-table th:last-child, .data-table td:last-child{border-right:0}
.data-table td:nth-child(2){ white-space:normal; overflow:visible; }

.data-table tbody tr:nth-child(odd)  td{ background:var(--row-zebra); }
.data-table tbody tr:nth-child(even) td{ background:#fff; }
.data-table tbody tr:hover{ background:var(--row-hover); }


/* Badge */
.pill{
  display:inline-block;
  padding:4px 8px;
  border-radius:999px;
  font-size:12px;
}
.pill.ghost{
  background:#f1f5f9;
  color:#334155;
  border:1px dashed #cbd5e1;
}

/* Tombol Action */
.actions{
  display:flex;
  justify-content:center;
  align-items:center;
  gap:8px;
  min-height:36px;
}
.btn{
  display:inline-flex;
  align-items:center;
  justify-content:center;
  height:30px;
  padding:0 12px;
  border-radius:8px;
  font-size:12px;
  font-weight:700;
  text-decoration:none;
  border:1px solid rgba(15,23,42,.2);
  box-shadow:0 2px 6px rgba(15,23,42,.08);
  transition:all .2s ease;
  white-space:nowrap;
}
.btn:hover{ filter:brightness(.97); box-shadow:0 6px 14px rgba(15,23,42,.12); }
.btn:active{ transform:translateY(1px); }

.btn-edit{ background:#3b82f6; color:#fff; }
.btn-view{ background:#6b7280; color:#fff; }

.data-table a:not(.btn){
  color:var(--link);
  text-decoration:underline;
  text-underline-offset:2px;

}

@media (max-width:1024px){
  .main{ padding:16px; }
  .content{ padding:16px; }
  .data-table{ font-size:13px; }
  .btn{ height:28px; padding:0 10px; }
}

.dropdown-input{
  width: 100%;
  padding: 6px 8px;
  border: 1px solid var(--line-soft);
  border-radius: 6px;
  font-size: 13px;
  text-align:center;
  color: var(--ink);
  background: #fff;
  appearance: none;            /* hilangkan default arrow */
  background-image: url("data:image/svg+xml;charset=UTF-8,%3Csvg viewBox='0 0 20 20' fill='black' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M6 8l4 4 4-4'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right 8px center;
  background-size: 14px;
  cursor: pointer;
}
.dropdown-input:focus{
  outline: 2px solid var(--brand);
  outline-offset: 1px;
}

.col-no     { width: 50px; }    /* lebih kecil */
.col-client { width: auto; }    /* fleksibel, melebar */
.col-medium { width: 200px; }   /* cukup untuk dropdown */
.col-status { width: 200px; }
.col-action { width: 200px; }
.col-activity { width: 200px; }

/* Kolom nama klien boleh wrap */
.data-table td:nth-child(2){
  white-space: normal;
  overflow: visible;
  text-overflow: unset;
}

/* --- AUDITOR DASHBOARD --- */

.data-tableauditordashboard{
  width:100%;
  border-collapse:separate;
  border-spacing:0;
  table-layout:fixed;
  font-size:14px;
  color:var(--ink);
}

/* Header table konsisten abu tua + teks putih */
.data-tableauditordashboard thead th{
  position:sticky;
  top:0;
  z-index:2;
  background:var(--head-bg);
  color:var(--head-ink);
  font-weight:700;
  text-align:center;
  padding:11px 12px;
  border-bottom:1px solid var(--line);
  white-space:nowrap;
}
.data-tableauditordashboard thead tr:first-child th:first-child{border-top-left-radius:12px}
.data-table thead tr:first-child th:last-child {border-top-right-radius:12px}

.data-tableauditordashboard th, .data-table td{
  padding:9px 10px;
  border-right:1px solid var(--line-soft);
  border-top:1px solid var(--line-soft);
  white-space:nowrap;
  overflow:hidden;
  text-overflow:ellipsis;
}

.data-tableauditordashboard tbody tr:nth-child(odd)  td{ background:var(--row-zebra); }
.data-tableauditordashboard tbody tr:nth-child(even) td{ background:#fff}

data-table th[style*="width:70px"],
.data-tableauditordashboard td:nth-child(1),
.data-tableauditordashboard td:nth-child(3),
.data-tableauditordashboard td:nth-child(4),
.data-tableauditordashboard td:nth-child(5),
.data-tableauditordashboard td:nth-child(6),
.data-tableauditordashboard td:nth-child(7) {
  text-align: center;
}






</style> --}}
{{-- live previewe --}}
@livewireStyles
@vite(['resources/js/app.js'])
{{-- live previewe --}}
</head>

<body>
    <div >
        {{-- SIDEBAR --}}
        @include('livewire.layouts.sidebar')


            {{ $slot }}

            </div>
        </main>
    </div>
    </div>

   </div>

</body>
{{-- live previewe --}}
@livewireScripts
{{-- live previewe --}}
</html>


