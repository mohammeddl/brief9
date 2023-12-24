<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Kanban Board</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div id="app" class="container mx-auto mt-8">
        <div class="flex">
            <div class="w-1/3">
                <div class="bg-gray-200 p-4">
                    <h2 class="text-lg font-bold mb-4">To Do</h2>
                    <div id="todo-list" class="task-list" data-status="todo"></div>
                </div>
            </div>
            <div class="w-1/3">
                <div class="bg-gray-200 p-4">
                    <h2 class="text-lg font-bold mb-4">In Progress</h2>
                    <div id="in-progress-list" class="task-list" data-status="in-progress"></div>
                </div>
            </div>
            <div class="w-1/3">
                <div class="bg-gray-200 p-4">
                    <h2 class="text-lg font-bold mb-4">Done</h2>
                    <div id="done-list" class="task-list" data-status="done"></div>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <form id="task-form" class="flex">
                <input type="text" id="task-input" class="flex-1 mr-2 p-2" placeholder="Add a new task" required>
                <button type="submit" class="bg-blue-500 text-white p-2">Add Task</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
