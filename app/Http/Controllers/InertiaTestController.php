<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
  /** コンポーネントの指定 */
  /** inertia/indexを表示する */
  public function index() {
    return Inertia::render("Inertia/Index");
  }
  /** inertia/createを表示する */
  public function create() {
    return Inertia::render("Inertia/Create");
  }
  /** inertia/showを表示する */
  public function show($id) {
    // dd($id);
    return Inertia::render('Inertia/Show',[
        'id' => $id
    ]);
  }
  /** inputタグで入力した値を受け取る変数 */
  public function store(Request $request) {
    $inertia = new InertiaTest;
    $inertia -> title = $request->title;
    $inertia -> content = $request->content;
    $inertia -> save();
    return to_route('inertia.index');
  }
}
