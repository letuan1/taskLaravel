<?php

namespace App\Http\Controllers;

use App\Model\Task;
use Illuminate\Http\Request;

class ManagementController extends Controller
{

    public function lists() {
        $lists = Task::all();
        return view('list', [ 'lists' => $lists]);
    }

    public function delete($id) {
        $delete = Task::find($id);
        $delete->delete();

        return redirect()->route('list');
    }

    public function edit() {

    }
}
