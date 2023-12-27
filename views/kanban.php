<?php
require_once "../controllers/login.control.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DataWare</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="min-h-[640px] bg-[#E7E8EA]">

    <div x-data="{ open: false }" @keydown.window.escape="open = false">

      <div x-show="open" class="fixed inset-0 flex z-40 md:hidden" x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog" aria-modal="true">

        <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Off-canvas menu overlay, show/hide based on off-canvas menu state." class="fixed inset-0 bg-gray-600 bg-opacity-75" @click="open = false" aria-hidden="true">
        </div>

        <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-description="Off-canvas menu, show/hide based on off-canvas menu state." class="relative flex-1 flex flex-col max-w-xs w-full bg-indigo-700">

          <div x-show="open" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" x-description="Close button, show/hide based on off-canvas menu state." class="absolute top-0 right-0 -mr-12 pt-2">
            <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" @click="open = false">
              <span class="sr-only">Close sidebar</span>
              <svg class="h-6 w-6 text-white" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </button>
          </div>

          <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
            <div class="flex-shrink-0 flex items-center px-4">
              <img class="h-8 w-auto" src="../src/logo2.png" alt="Workflow">
            </div>
            <nav class="mt-5 px-2 space-y-1">

              <a href="#" class="bg-indigo-800 text-white group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
                <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
              </a>

              <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
                <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                Team
              </a>

              <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
                <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                </svg>
                Projects
              </a>

              <a href="#" class="text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-base font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
                <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" x-description="Heroicon name: outline/calendar" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                Calendar
              </a>
            </nav>
          </div>
          <div class="flex-shrink-0 flex border-t border-indigo-800 p-4">
            <a href="#" class="flex-shrink-0 group block">
              <div class="flex items-center">
                <div class="ml-3">
                  <p class="text-base font-medium text-white">
                    Tom Cook
                  </p>
                  <p class="text-sm font-medium text-indigo-200 group-hover:text-white">
                    View profile
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="flex-shrink-0 w-14" aria-hidden="true">
          <!-- Force sidebar to shrink to fit close icon -->
        </div>
      </div>


      <!-- Static sidebar for desktop -->
      <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
        <div class="flex-1 flex flex-col min-h-0 bg-[#0891b1]">
          <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
              <img class="h-12 w-auto" src="../src/logo.png" alt="Workflow">
            </div>
            <nav class="mt-5 flex-1 px-2 space-y-1">

              <a href="" class="bg-[#9FAABC] text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
                <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
              </a>

              <a href="#" class="  text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
                <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                Team
              </a>

              <a href="project.php" class="  text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
                <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                </svg>
                Projects
              </a>

            </nav>
          </div>
          <div class="flex-shrink-0 flex border-t border-indigo-800 p-4">
            <a href="#" class="flex-shrink-0 w-full group block">
              <div class="flex items-center">

                <div class="ml-3">
                  <p class="text-sm font-medium text-white">
                    <?php echo $_SESSION['user_name'] ?>
                  </p>
                  <p class="text-xs font-medium text-indigo-200 group-hover:text-white">
                    <?php echo $_SESSION['user_id'] ?>
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="md:pl-64 flex flex-col flex-1">
        <div class="sticky top-0 z-10 md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3 bg-gray-100">
          <button type="button" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="open = true">
            <span class="sr-only">Open sidebar</span>
            <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
        <div class="h-screen p-2">
  <div class="grid lg:grid-cols-7 md:grid-cols-4 sm:grid-cols-2 gap-5">
    <!-- To-do -->
    <div class="bg-white rounded px-2 py-2">
      <!-- board category header -->
      <div class="flex flex-row justify-between items-center mb-2 mx-1">
        <div class="flex items-center">
          <h2 class="bg-red-100 text-sm w-max px-1 rounded mr-2 text-gray-700">To-do</h2>
          <p class="text-gray-400 text-sm">3</p>
        </div>
        <div class="flex items-center text-gray-300">
          <p class="mr-2 text-2xl">---</p>
          <p class="text-2xl">+</p>
        </div>
      </div>
      <!-- board card -->
      <div class="grid grid-rows-2 gap-2">
        <div class="p-2 rounded shadow-sm border-gray-100 border-2">
          <h3 class="text-sm mb-3 text-gray-700">Social media</h3>
          <p class="bg-red-100 text-xs w-max p-1 rounded mr-2 text-gray-700">To-do</p>
          <div class="flex flex-row items-center mt-2">
            <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
            <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
          </div>
          <p class="text-xs text-gray-500 mt-2">2</p>
        </div>

      </div>
      <div class="flex flex-row items-center text-gray-300 mt-2 px-1">
        <p class="rounded mr-2 text-2xl">+</p>
        <p class="pt-1 rounded text-sm">New</p>
      </div>
    </div>

    <!-- WIP Kanban -->
    <div class="bg-white rounded px-2 py-2">
      <!-- board category header -->
      <div class="flex flex-row justify-between items-center mb-2 mx-1">
        <div class="flex items-center">
          <h2 class="bg-yellow-100 text-sm w-max px-1 rounded mr-2 text-gray-700">WIP</h2>
          <p class="text-gray-400 text-sm">2</p>
        </div>
        <div class="flex items-center text-gray-300">
          <p class="mr-2 text-2xl">---</p>
          <p class="text-2xl">+</p>
        </div>
      </div>
      <!-- board card -->
      <div class="">
        <div class="p-2 rounded shadow-sm border-gray-100 border-2">
          <h3 class="text-sm mb-3 text-gray-700">Blog post live</h3>
          <p class="bg-yellow-100 text-xs w-max p-1 rounded mr-2 text-gray-700">WIP</p>
          <div class="flex flex-row items-center mt-2">
            <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
            <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
          </div>
          <p class="text-xs text-gray-500 mt-2">Jun 21, 2019</p>
          <p class="text-xs text-gray-500 mt-2">2</p>
        </div>

      </div>
      <div class="flex flex-row items-center text-gray-300 mt-2 px-1">
        <p class="rounded mr-2 text-2xl">+</p>
        <p class="pt-1 rounded text-sm">New</p>
      </div>
    </div>

    <!-- Complete Kanban -->
    <div class="bg-white rounded px-2 py-2">
      <!-- board category header -->
      <div class="flex flex-row justify-between items-center mb-2 mx-1">
        <div class="flex items-center">
          <h2 class="bg-green-100 text-sm w-max px-1 rounded mr-2 text-gray-700">Complete</h2>
          <p class="text-gray-400 text-sm">4</p>
        </div>
        <div class="flex items-center">
          <p class="text-gray-300 mr-2 text-2xl">---</p>
          <p class="text-gray-300 text-2xl">+</p>
        </div>
      </div>
      <!-- board card -->
      <div class="grid grid-rows-2 gap-2">
        <div class="p-2 rounded shadow-sm border-gray-100 border-2">
          <h3 class="text-sm mb-3 text-gray-700">Morning emails and to-do list</h3>
          <p class="bg-green-100 text-xs w-max p-1 rounded mr-2 text-gray-700">Complete</p>
          <div class="flex flex-row items-center mt-2">
            <div class="bg-gray-300 rounded-full w-4 h-4 mr-3"></div>
            <a href="#" class="text-xs text-gray-500">Sophie Worso</a>
          </div>
          <p class="text-xs text-gray-500 mt-2">Jun 21, 2019</p>
          <p class="text-xs text-gray-500 mt-2">1</p>
        </div>

      </div>
      <div class="flex flex-row items-center text-gray-300 mt-2 px-1">
        <p class="rounded mr-2 text-2xl">+</p>
        <p class="pt-1 rounded text-sm">New</p>
      </div>
    </div>

    </div>
  </div>
</div>
      </div>
    </div>

  </div>

</body>

</html>

