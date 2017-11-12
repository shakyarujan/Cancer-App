<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Menu;

class MenuController extends Controller
{
    /**
 * Create a new controller instance.
 *
 * @return void
 */
    public function __construct()
    {
        // if(! Auth::user()){echo "not logged in"; exit();}
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $getMenu = Menu::all()->toarray();
        return view('admin.menu.displayMenu', compact('getMenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menu.addEditMenu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new Menu([
          'name' => $request->get('name'),
          'linksrc' => $request->get('link'),
          'parentOf' => $request->get('parent'),
          'type' => $request->get('type'),
          'status' => $request->get('status'),
        ]);

        $menu->save();

        return redirect('/admin/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editMenu = Menu::find($id);
        return view('admin.menu.addEditMenu', compact('editMenu','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editMenu = Menu::find($id);
        
        $editMenu->name = $request->get('name');
        $editMenu->linksrc = $request->get('link');
        $editMenu->type = $request->get('type');
        $editMenu->parentOf = $request->get('parent');
        $editMenu->status = $request->get('status');

        $editMenu->save();
        return redirect('/admin/menu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        return redirect('/admin/menu');
    }


    /*----------------------------------- AJAX Controller ---------------------------*/

    public function AllMenuAction()
    {
        $request = $_REQUEST['type'];

        if($request == "getMenu"){
            $menuList = Menu::all();
            return response()->json($menuList);
        }
    }
        
}
