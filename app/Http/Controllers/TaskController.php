<?php

namespace App\Http\Controllers;

use App\Models\TaskModel;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class TaskController extends Controller
{
    public function Home()
    {
        $task = TaskModel::where('status', 'pending')->orderBy('created_at', 'asc')->get();
        $pending = $task->count();

        $data = [
            'task' => $task,
            'pending' => $pending
        ];

        return view('index', $data);
    }

    public function completed()
    {
        $task = TaskModel::where('status', 'completed')->orderBy('completed_at', 'asc')->get();
        $completed = $task->count();

        $data = [
            'task' => $task,
            'completed' => $completed
        ];

        return view('index2', $data);
    }

    public function update_status($task_id)
    {
        TaskModel::where('task_id', $task_id)->update(['status' => 'completed', 'completed_at' => now()]);

        return redirect()->back()->with('success', 'Task marked as completed');
    }

    public function update_status2($task_id)
    {
        TaskModel::where('task_id', $task_id)->update(['status' => 'pending', 'completed_at' => null]);

        return redirect()->back();
    }

    public function add(Request $request)
    {
        $data = [
            'task_name' => $request->input('task_name'),
            'status' => 'pending',
            'created_at' => now(),
            'completed_at' => null
        ];

        TaskModel::create($data);

        return redirect()->back();
    }

    public function edit($task_id)
    {
        $task = TaskModel::find($task_id);

        $data = [
            'task' => $task
        ];

        return view('edit', $data);
    }

    public function task_edit($task_id, Request $request)
    {

        $data = [
            'task_name' => $request->input('task_name'),
            'completed_at' => null
        ];

        TaskModel::find($task_id)->update($data);

        return redirect()->route('Home');
    }

    public function delete($task_id)
    {
        TaskModel::find($task_id)->delete();

        return redirect()->back();
    }
}
