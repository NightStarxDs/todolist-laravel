# ToDoList Laravel Application

A simple Laravel-based To-Do List application that allows users to manage tasks by adding, editing, marking as completed, or deleting them.

## Features
- **Add Tasks**: Input a task name and submit it.
- **View Tasks**: View pending tasks on the main page and completed tasks on a separate page.
- **Edit Tasks**: Modify task names.
- **Delete Tasks**: Remove tasks from the list.
- **Mark as Completed/Pending**: Toggle task status between completed and pending.
- **Counters**: Display the number of pending and completed tasks.

## Database Table
Run the migration to create the tasks table. The table includes:

- **Task_Id**: Unique identifier for each task.
- **Task_Name**: Name of the task.
- **Created_At**: Timestamp when the task was created.
- **Completed_At**: Timestamp when the task was marked as completed

## Troubleshooting
- **CSS Not Loading**: Ensure style-index.css is in the public directory.
- **Database Errors**: Verify .env database credentials and run php artisan migrate.
- **Icons Not Displaying**: Ensure an active internet connection for Font Awesom

## Video Demo
**https://drive.google.com/file/d/1uDb9-_JY6qd67HsGvjdHzit0WJKPWf7S/view?usp=sharing**
