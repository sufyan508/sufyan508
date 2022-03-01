<?php

namespace App\Http\Controllers;

use App\Task;
use App\Testimonial;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::orderBy('order')->get();
//        dd($task);
        return view('task.index')->with([
            'task' => $task,
        ]);
    }
    public function create()
    {
        return view('task.create');
    }
    public function storeTask(Request $request)
    {
        $this->validate($request, [
            'label' => 'required',
            'icon' => 'required',
            'color' => 'required',
            'description' => 'required',
            'due_date' => 'required',
        ]);
        Task::create($request->all());

        return redirect()->back()->with('success_message', 'Task Created Successfully!');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return back()->with('success_message', 'Task Deleted Successfully.');
    }


    public function updateTaskOrder(Request $request)
    {
        $tasks = Task::get();
        foreach ($tasks as $task) {
            foreach ($request->order as $order) {
                if ($order['id'] == $task->id) {
                    $task->update(['id' => $order['position']]);
                }
            }
        }

        return response('Task Updated Successfully.');
    }
}
