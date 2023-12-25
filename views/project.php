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
                
                  <a href="home.php" class=" text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-800 text-white&quot;, Default: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
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
                
                  <a href="#" class=" bg-[#9FAABC] text-white hover:bg-indigo-600 hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-white&quot;, undefined: &quot;text-white hover:bg-indigo-600 hover:bg-opacity-75&quot;">
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
                      <?php echo $_SESSION['user_name']?>
                    </p>
                    <p class="text-xs font-medium text-indigo-200 group-hover:text-white">
                    <?php echo $_SESSION['user_role']?>
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
          <main class="flex-1">
            <div class="">
              <div class="relative bg-[#E7E8EA] pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
                  <div class="absolute inset-0">
                    <div class="bg-[#E7E8EA] "></div>
                  </div>
                  <div class="relative max-w-7xl mx-auto">
                    <div class="text-center">
                    <div x-data="{ open: false }" @keydown.window.escape="open = false">
        <!-- Button to trigger the form pop-up -->
        <button class="inline-flex bg-[#0891b1] items-center my-5 px-4 py-2 hover:bg-indigo-600 text-white text-sm font-medium rounded-md" @click="open = true">
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
                      
                        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                          <div class="flex-shrink-0">
                            <img class="h-48 w-full object-cover" src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1679&amp;q=80" alt="">
                          </div>
                          <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                            <div class="flex-1">
                              <p class="text-sm font-medium text-indigo-600">
                                <a href="#" class="hover:underline">
                                  Article
                                </a>
                              </p>
                              <a href="#" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">
                                  Boost your conversion rate
                                </p>
                                <p class="mt-3 text-base text-gray-500">
                                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
                                </p>
                              </a>
                            </div>
                            <div class="mt-6 flex items-center">
                              <div class="flex-shrink-0">
                                <a href="#">
                                  <span class="sr-only">Roel Aufderehar</span>
                                  <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                </a>
                              </div>
                              <div class="ml-3 flex gap-3">
                                <div>
                                <p class="text-sm font-medium text-gray-900">
                                  <a href="#" class="hover:underline">
                                    Roel Aufderehar
                                  </a>
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                  <time datetime="2020-03-16">
                                    Mar 16, 2020
                                  </time>
                                  <span aria-hidden="true">
                                    ·
                                  </span>
                                  <span>
                                    6 min read
                                  </span>
                                </div>
                                </div>
                                <button class="inline-flex items px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm font-medium rounded-md">
	<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
	  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
	</svg>

	Modifier
  </button>

 
   <!-- Form pop-up container -->
   <div x-show="open" class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50" x-description="Form pop-up overlay" @click="open = false" aria-hidden="true">
            <div class="modal-content bg-white mx-auto my-8 p-8 w-1/2">
                <!-- Form content -->
                <form action="../controllers/your_form_handler.php" method="POST">
                    <div class="mb-4">
                        <span @click="open = false" class="float-right cursor-pointer">&times;</span>
                        <h2 class="text-2xl font-bold">Add Project</h2>
                    </div>
                    <label for="projectName" class="block text-sm font-medium text-gray-700">Project Name</label>
                    <input type="text" id="projectName" name="projectName" class="mt-1 p-2 border border-gray-300 rounded-md">

                    <label for="projectDescription" class="block mt-4 text-sm font-medium text-gray-700">Project Description</label>
                    <textarea id="projectDescription" name="projectDescription" rows="4" class="mt-1 p-2 border border-gray-300 rounded-md"></textarea>

                    <label for="projectTasks" class="block mt-4 text-sm font-medium text-gray-700">Project Tasks</label>
                    <input type="text" id="projectTasks" name="projectTasks" class="mt-1 p-2 border border-gray-300 rounded-md">

                    <button type="submit" class="mt-4 inline-flex bg-[#0891b1] items-center px-4 py-2 hover:bg-indigo-600 text-white text-sm font-medium rounded-md">
                        Add Project
                    </button>
                </form>
            </div>
        </div>
    </div>
                              </div>
                            </div>
                          </div>
                        </div>

          </main>
        </div>
      </div>
    
      </div>
    
</body>
</html>