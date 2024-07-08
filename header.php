<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Event Planning Application</title>
  <link rel="stylesheet" href="../../dist/output.css" />
  <style>
    html, body {
      height: 100%;
      overflow: hidden; /* Disable scrolling on the entire page */
    }
  </style>  
</head>
<body>
  <div class="navbar bg-base-100 sticky top-0 z-10 flex gap-2">
    <div class="flex-none">
      <div class="drawer md:hidden block">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">
          <!-- Page content here -->
          <label for="my-drawer" class="btn drawer-button">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              class="inline-block h-5 w-5 stroke-current"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"
              ></path>
            </svg>
          </label>
        </div>
        <div class="drawer-side z-10">
          <label for="my-drawer" class="drawer-overlay"></label>
          <ul class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
            <li>
              <div class="flex-1 justify-between">
                <a class="p-2 text-xl font-bold">daisyUI</a>
                <div>
                  <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                  <div class="drawer-content">
                    <!-- Page content here -->
                    <label for="my-drawer" class="drawer-button">
                      <svg
                        class="swap-on fill-current"
                        xmlns="http://www.w3.org/2000/svg"
                        width="32"
                        height="32"
                        viewBox="0 0 512 512"
                      >
                        <polygon
                          points="400 145.49 366.51 112 256 222.51 145.49 112 112 145.49 222.51 256 112 366.51 145.49 400 256 289.49 366.51 400 400 366.51 289.49 256 400 145.49"
                        />
                      </svg>
                    </label>
                  </div>
                </div>
              </div>
            </li>
            <!-- Sidebar content here -->
            <div class="max-h-screen overflow-y-auto">
              <ul class="menu text-base-content min-h-full p-4">
                <li><a>Dashboard</a></li>
                <li><a>Data Event</a></li>
                <li><a>Data Lembaga</a></li>
                <li><a>Data Peserta</a></li>
                <li><a>Data Pemateri</a></li>
                <li><a>Data Panitia</a></li>
                <li><a>Data Logistik</a></li>
                <li><a>Kegiatan Marketing</a></li>
                <li><a>Kegiatan Logistik</a></li>
                <li><a>Keuangan Event</a></li>
                <li><a>Status Logistik</a></li>
                <li><a>Pengaturan Jenis Event</a></li>
                <li><a>Pengaturan Tugas Panitia</a></li>
                <li>
                  <details>
                    <summary>Laporan</summary>
                    <ul>
                      <li><a>Submenu 1</a></li>
                      <li><a>Submenu 2</a></li>
                    </ul>
                  </details>
                </li>
                <li>
                  <details>
                    <summary>User Management</summary>
                    <ul>
                      <li><a>Roles</a></li>
                      <li><a>User</a></li>
                    </ul>
                  </details>
                </li>
                <li><a>Setting</a></li>
                <li><a>Logout</a></li>
              </ul>
            </div>
          </ul>
        </div>
      </div>
    </div>
    <div class="flex-1">
      <a class="btn btn-ghost text-xl">Planning Event</a>
    </div>

    <div class="btn btn-square btn-ghost">
      <label class="swap swap-rotate">
        <!-- this hidden checkbox controls the state -->
        <input type="checkbox" onclick="handleClick()" id="theme-toggle" />

        <!-- sun icon -->
        <svg
          id="sun-icon"
          class="swap-on h-8 w-8 fill-current"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24">
          <path
            d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
        </svg>

        <!-- moon icon -->
        <svg
          id="moon-icon"
          class="swap-off h-8 w-8 fill-current"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24">
          <path
            d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
        </svg>
      </label>
    </div>
    <div class="flex-none">
      <div class="avatar online placeholder">
        <div class="bg-neutral text-neutral-content w-10 rounded-full">
          <span>A</span>
        </div>
      </div>
    </div>
  </div>
  <div class="flex h-screen">
    <div class="bg-base-100 sticky top-20 max-h-screen overflow-y-auto md:block hidden">
      <ul class="menu text-base-content min-h-full w-80 p-4">
        <li><a>Dashboard</a></li>
        <li><a>Data Event</a></li>
        <li><a>Data Lembaga</a></li>
        <li><a>Data Peserta</a></li>
        <li><a>Data Pemateri</a></li>
        <li><a>Data Panitia</a></li>
        <li><a>Data Logistik</a></li>
        <li><a>Kegiatan Marketing</a></li>
        <li><a>Kegiatan Logistik</a></li>
        <li><a>Keuangan Event</a></li>
        <li><a>Status Logistik</a></li>
        <li><a>Pengaturan Jenis Event</a></li>
        <li><a>Pengaturan Tugas Panitia</a></li>
        <li>
          <details>
            <summary>Laporan</summary>
            <ul>
              <li><a>Submenu 1</a></li>
              <li><a>Submenu 2</a></li>
            </ul>
          </details>
        </li>
        <li>
          <details>
            <summary>User Management</summary>
            <ul>
              <li><a>Roles</a></li>
              <li><a>User</a></li>
            </ul>
          </details>
        </li>
        <li><a>Setting</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
    <div class="overflow-y-auto flex-1 p-4">

    