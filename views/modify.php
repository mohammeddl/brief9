<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- form edit -->
    <div class="relative bg-[#E7E8EA] pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
                </div>
                    <div class="text-center">
                    <div >
    <div  class="fixed inset-0 z-50 overflow-auto bg-black bg-opacity-50" id="modifi" >
            <div class="modal-content bg-white mx-auto my-8 p-8 w-1/2">
                <!-- Form pop up-->
                <form action="../controllers/project.control.php" method="POST">
                    <div class="mb-4">
                        <span onclick="clickHiddenProject()" class="float-right cursor-pointer">&times;</span>
                        <h2 class="text-2xl font-bold">Add Project</h2>
                    </div>
                    <input type="hidden" name="project_id" value="<?= $display['id'] ?>">

                    <label for="projectName" class="block text-sm font-medium text-gray-700">Project Name</label>
                    <input type="text" id="projectName" name="projectName" class="mt-1 p-2 border border-gray-300 rounded-md">

                    <label for="projectDescription" class="block mt-4 text-sm font-medium text-gray-700">Project Description</label>
                    <textarea id="projectDescription" name="projectDescription" rows="4" class="mt-1 p-2 border border-gray-300 rounded-md"></textarea>

                    <label for="projectTasks" class="block mt-4 text-sm font-medium text-gray-700">Start Date</label>
                    <input type="date" id="start_date" name="start_date" class="mt-1 p-2 border border-gray-300 rounded-md">

                    <label for="projectTasks" class="block mt-4 text-sm font-medium text-gray-700">End Date</label>
                    <input type="date" id="end_date" name="end_date" class="mt-1 p-2 border border-gray-300 rounded-md">
                    <button type="submitProjet" name="submitProjet" class="mt-4 inline-flex bg-[#0891b1] items-center px-4 py-2 hover:bg-indigo-600 text-white text-sm font-medium rounded-md">
                        modify Project
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>