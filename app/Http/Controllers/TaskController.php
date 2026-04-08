<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
public function index()
{
// Simulons des tâches pour l'exemple
$tasks = [
['id' => 1, 'title' => 'Acheter du café'],
['id' => 2, 'title' => 'Coder comme un boss'],
['id' => 3, 'title' => 'Faire une pause (ou pas)'],
];

return view('tasks.index', compact('tasks'));
}
}
