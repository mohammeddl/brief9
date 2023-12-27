<?php
require_once "../controllers/project.control.php";

$project = new Project();
$displayProjet = $project->getAllProjects($_SESSION['user_id']);
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

              <a href="home.php" class=" text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
                <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
              </a>

              <a href="stats.php" class="  text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
                <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" x-description="Heroicon name: outline/users" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
                Stats
              </a>

              <a href="#" class=" bg-[#9FAABC] text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
                <svg class="mr-3 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512">
                  <path fill="#608fe2" d="M304 240V16.6c0-9 7-16.6 16-16.6C443.7 0 544 100.3 544 224c0 9-7.6 16-16.6 16H304zM32 272C32 150.7 122.1 50.3 239 34.3c9.2-1.3 17 6.1 17 15.4V288L412.5 444.5c6.7 6.7 6.2 17.7-1.5 23.1C371.8 495.6 323.8 512 272 512C139.5 512 32 404.6 32 272zm526.4 16c9.3 0 16.6 7.8 15.4 17c-7.7 55.9-34.6 105.6-73.9 142.3c-6 5.6-15.4 5.2-21.2-.7L320 288H558.4z" />
                </svg>
                Projects
              </a>

            </nav>
          </div>
          <div class="flex justify-between border-t border-indigo-800 p-4">
            <div class="flex items-center">
              <div class="ml-3">
                <p class="text-sm font-medium text-white">
                  <?php echo $_SESSION['user_name'] ?>
                </p>
                <p class="text-xs font-medium text-indigo-200 group-hover:text-white">
                  <?php echo $_SESSION['user_role'] ?>
                </p>
              </div>
              <div>
                
              </div>
            </div>
            <a href="../controllers/logout.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
              <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><path d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
              </a>
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

        <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
          <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
          </div>
          <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
              <button onclick="clickHidden()" class="inline-flex bg-[#0891b1] items-center my-5 px-4 py-2 hover:bg-indigo-600 text-white text-sm font-medium rounded-md">
                Ajout project
              </button>
              <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                From the blog
              </h2>
              <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa libero labore natus atque, ducimus sed.
              </p>
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
              <?php foreach ($displayProjet as $display) { ?>
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                  <div class="flex-shrink-0">
                    <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
                  </div>
                  <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                    <div class="flex-1">
                      <a href="#" class="block mt-2">
                        <input id="projectId<?= $display['id'] ?>" type="hidden" value="<?= $display['id'] ?>">
                        <p id="projectName<?= $display['id'] ?>" class="text-xl font-semibold text-gray-900">
                          <?= $display['name'] ?>
                        </p>
                        <p id="projectDesc<?= $display['id'] ?>" class="mt-3 text-base text-gray-500">
                          <?= $display['description'] ?>
                        </p>
                      </a>
                    </div>
                    <div class="mt-6 flex items-center ">
                      <div class="flex-shrink-0">
                        <a href="#">
                          <div>
                            <span class="sr-only">Roel Aufderehar</span>
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        </a>
                      </div>
                      <div class="ml-3 ">
                        <p class="text-sm font-medium text-gray-900">
                          <a id="endDate<?= $display['id'] ?>" href="#" class="hover:underline">
                            <?= $display['end_date'] ?>
                          </a>
                        </p>
                        <div class="flex justify-around w-[350px] space-x-1 text-sm text-gray-500">
                          <time id="startDate<?= $display['id'] ?>" datetime="2020-03-16">
                            <?= $display['start_date'] ?>
                          </time>
                          <span aria-hidden="true">
                            ·
                          </span>
                          <span>
                            6 min read
                          </span>

                          <form action="../controllers/project.control.php" method="POST">
                            <input type="hidden" name="project_id<?= $display['id'] ?>" value="<?= $display['id'] ?>">
                            <button type="submit" name="delete_project">
                              <svg xmlns="http://www.w3.org/2000/svg" name="delete" height="16" width="14" viewBox="0 0 448 512">
                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                              </svg>
                          </form>
                          <button onclick="clickHiddenProject(<?= $display['id'] ?>)">
                            <svg xmlns="http://www.w3.org/2000/svg" name="modify" height="16" width="16" viewBox="0 0 512 512">
                              <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                            </svg>
                          </button>
                          <button>
                            <a href="tasks.php?id=<?= $display['id'] ?>" class="inline-flex items-center px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm font-medium rounded-md">
                              add task
                            </a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
            </div>

          <?php
              }
          ?>
          </div>
        </div>
      </div>

      <div class="relative bg-[#E7E8EA] pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
      </div>
      <div class="text-center">
        <div>
          <div class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50" id="fromHidden" style="display: none;">
            <div class="modal-content bg-white mx-auto my-8 p-8 w-1/2">
              <!-- Form pop up-->
              <form action="../controllers/project.control.php" method="POST">
                <div class="mb-4">
                  <span onclick="hidePopup()" class="float-right cursor-pointer">&times;</span>
                  <h2 class="text-2xl font-bold">Add Project</h2>
                </div>
                <input type="text" id="id" type="hidden" name="id">

                <label for="projectName" class="block text-sm font-medium text-gray-700">Project Name</label>
                <input type="text" id="projectName" name="projectName" class="mt-1 p-2 border border-gray-300 rounded-md">

                <label for="projectDescription" class="block mt-4 text-sm font-medium text-gray-700">Project Description</label>
                <textarea id="projectDescription" name="projectDescription" rows="4" class="mt-1 p-2 border border-gray-300 rounded-md"></textarea>

                <label for="projectTasks" class="block mt-4 text-sm font-medium text-gray-700">Start Date</label>
                <input type="date" id="start_date" name="start_date" class="mt-1 p-2 border border-gray-300 rounded-md">

                <label for="projectTasks" class="block mt-4 text-sm font-medium text-gray-700">End Date</label>
                <input type="date" id="end_date" name="end_date" class="mt-1 p-2 border border-gray-300 rounded-md">
                <button type="submitProjet" name="submitProjet" class="mt-4 inline-flex bg-[#0891b1] items-center px-4 py-2 hover:bg-indigo-600 text-white text-sm font-medium rounded-md">
                  Add Project
                </button>
              </form>
            </div>
          </div>
        </div>

        <!-- form edit -->
        <div class="relative bg-[#E7E8EA] pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        </div>
        <div class="text-center">
          <div>
            <div class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50" id="modifi" style="display: none;">
              <div class="modal-content bg-white mx-auto my-8 p-8 w-1/2">
                <!-- Form pop up-->
                <form action="../controllers/project.control.php" method="POST">
                  <div class="mb-4">
                    <span onclick="hidePopupEdit()" class="float-right cursor-pointer">&times;</span>
                    <h2 class="text-2xl font-bold">Add Project</h2>
                  </div>
                  <input type="hidden" id="project_id2" name="project_id" value="">

                  <label for="projectName2" class="block text-sm font-medium text-gray-700">Project Name</label>
                  <input type="text" id="projectNamee2" name="projectName" class="mt-1 p-2 border border-gray-300 rounded-md" value="">

                  <label for="projectDescription2" class="block mt-4 text-sm font-medium text-gray-700">Project Description</label>
                  <textarea id="projectDescription2" name="projectDescription" rows="4" class="mt-1 p-2 border border-gray-300 rounded-md"></textarea>

                  <label for="start_date2" class="block mt-4 text-sm font-medium text-gray-700">Start Date</label>
                  <input type="date" id="start_date2" name="start_date" class="mt-1 p-2 border border-gray-300 rounded-md">

                  <label for="end_date2" class="block mt-4 text-sm font-medium text-gray-700">End Date</label>
                  <input type="date" id="end_date2" name="end_date" class="mt-1 p-2 border border-gray-300 rounded-md">
                  <button type="submitProjet" name="submitProjet" class="mt-4 inline-flex bg-[#0891b1] items-center px-4 py-2 hover:bg-indigo-600 text-white text-sm font-medium rounded-md">
                    modify Project
                  </button>
                </form>
              </div>
            </div>
          </div>

          <script>
            function clickHidden() {
              formHidden = document.getElementById("fromHidden");
              if (formHidden.style.display === 'none') {
                formHidden.style.display = "block";
              }
            }

            function hidePopup() {
              formHidden = document.getElementById("fromHidden");
              if (formHidden.style.display === 'block') {
                formHidden.style.display = "none";
              }
            }
          </script>
          <script src="../js/modify.js"></script>
</body>

</html>