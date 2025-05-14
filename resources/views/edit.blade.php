<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo list</title>

    <link rel="stylesheet" href="{{ asset('style-edit.css') }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="edit-container">
        <form action="{{ route('task.edit', ['task_id' => $task['task_id']])}}" method="POST">
            @csrf
        <div class="form-group">
          <label for=""><i class="fa-regular fa-edit"></i>Edit Task Name</label>
          <input type="text" name="task_name" id="task_name" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $task['task_name']}}" maxlength="45">
        </div>
        <button type="submit">Submit</button>
        <a href="/">Back?</a>

    </form>
    </div>


    <script src="https://kit.fontawesome.com/f19fb034db.js" crossorigin="anonymous"></script>
</body>
</html>