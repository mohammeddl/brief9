document.addEventListener('DOMContentLoaded', function () {
    const taskForm = document.getElementById('task-form');
    const taskInput = document.getElementById('task-input');
    const todoList = document.getElementById('todo-list');
    const inProgressList = document.getElementById('in-progress-list');
    const doneList = document.getElementById('done-list');

    // Fetch tasks on page load
    fetchTasks();

    taskForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const taskText = taskInput.value.trim();

        if (taskText !== '') {
            // Add task to the 'To Do' list
            addTask(taskText);
            taskInput.value = '';
        }
    });

    function addTask(text) {
        const task = createTaskElement(text);
        todoList.appendChild(task);

        // Save the task to the server
        saveTask(text, 'todo');
    }

    function createTaskElement(text) {
        const taskElement = document.createElement('div');
        taskElement.className = 'task bg-white p-2 mb-2 rounded';

        const taskText = document.createElement('p');
        taskText.textContent = text;

        taskElement.appendChild(taskText);

        // Add event listener for dragging tasks
        taskElement.draggable = true;
        taskElement.addEventListener('dragstart', handleDragStart);
        taskElement.addEventListener('dragend', handleDragEnd);

        return taskElement;
    }

    function handleDragStart(e) {
        e.dataTransfer.setData('text/plain', e.target.dataset.taskText);
        e.target.classList.add('opacity-50');
    }

    function handleDragEnd(e) {
        e.target.classList.remove('opacity-50');
    }

    function saveTask(text, status) {
        // Send a POST request to the server to save the task
        fetch('api/tasks.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `text=${encodeURIComponent(text)}&status=${encodeURIComponent(status)}`,
        })
            .then(response => response.json())
            .then(data => {
                console.log('Task saved:', data);
            })
            .catch(error => {
                console.error('Error saving task:', error);
            });
    }

    function fetchTasks() {
        // Fetch tasks from the server
        fetch('api/tasks.php')
            .then(response => response.json())
            .then(data => {
                // Populate the task lists with the fetched tasks
                data.forEach(task => {
                    const taskElement = createTaskElement(task.text);
                    const targetList = document.getElementById(`${task.status}-list`);
                    targetList.appendChild(taskElement);
                });
            })
            .catch(error => {
                console.error('Error fetching tasks:', error);
            });
    }
});
