<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo list</title>

    <link rel="stylesheet" href="{{ asset('style-index.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h2 class="title">ToDoList Laravel</h2>

    <div class="card">
        <div class="form">
            <form action="/add" method="POST">
                @csrf
            <input type="text" placeholder="Input your task here..." name="task_name">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="counter">
                <p style="color: red">Pending: <?= $pending; ?></p>
                <a href="/completed" class="completed">Completed</a>
            </div>
        </div>
        <div class="data">
            <ul>
                <?php $no = 1 ?>
                @foreach ($task as $t)
                <li>
                    <div class="text">
                        <p><?= $no++?>. <?= $t['task_name']?> <span>{{ date('d-M-Y', strtotime($t['created_at']))}}</span></p>
                    </div> 
                    <div class="icons">
                        <a href="{{ route('delete', ['task_id' => $t['task_id']]) }}"><i class="fa-regular  fa-trash-can" style="color: red"></i></a>
                        <a href="{{ route('edit', ['task_id' => $t['task_id']]) }}"><i class="fa-regular  fa-edit" style="color:yellow;"></i></a>
                        <a href="{{ route('update.status', ['task_id' => $t['task_id']]) }}"><i class="fa-regular fa-circle-check" style="color: lime"></i></a>        
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>


    <script src="https://kit.fontawesome.com/f19fb034db.js" crossorigin="anonymous"></script>
</body>
</html>