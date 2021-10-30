<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Section;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\CheckRoles;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\AssignOp\Concat;

class UserController extends Controller
{

    function __construct()
    {
        $this->middleware([
            'auth',
            'roles:admin'
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        /*  $name = $user->get('name');
        $proceedings = $user->get('proceedings'); */

        //$categories = Category::pluck('category');
         /*  $categories = DB::select(
            'SELECT categories.*,
            CONCAT(users.name) AS user_name
            FROM categories, users
            WHERE categories.id = users.category_id
            ORDER BY `user_name` DESC'

          $categories = DB::select(
            'SELECT users.*,
             CONCAT(categories.category) AS category_name
             FROM users AS u
       left JOIN roles AS r
       ON r.id = u.id;

       SELECT u.name, u.user, u.email, u.profile_photo_path, u.rol, u.`status`, r.id, r.nombre
       FROM users AS u
       left JOIN roles AS r
       ON r.id = u.id;

        ); */

        $buscar = $request->get('buscar');
        $users = DB::table('users')
            ->select('id', 'name', 'proceedings', 'category_id')
            ->where('name', 'LIKE', '%' . $buscar . '%')
            ->orWhere('proceedings', 'LIKE', '%' . $buscar . '%')
            ->orderBy('id', 'ASC')
            ->paginate(4)
            ;
        return view('tecnico.index', compact('users', 'buscar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tecnico.create', [
            'user' => new User,
            'sections' => Section::pluck('name', 'id'),
            'categories' => Category::pluck('category', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = request()->validate([
            'name' => 'required',
            'proceedings' => 'required',
            'category_id' => 'required',
            'email' => 'required|email',
            'workplace' => 'required',
            'section_id' => 'required',
            'abilities' => 'required',
            'notes' => 'required|min:5',
            'password' => 'required',
        ]);

        $user = new User();

        $user->name = $request->get('name');
        $user->proceedings = $request->get('proceedings');
        $user->category_id = $request->get('category_id');
        $user->email = $request->get('email');
        $user->workplace = $request->get('workplace');
        $user->section_id = $request->get('section_id');
        $user->abilities = $request->get('abilities');
        $user->notes = $request->get('notes');
        $user->password = Hash::make($request->get('password'));

        $user->save();

        return redirect()->route('tecnico.index');
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
    public function edit(User $user)
    {
        return view('tecnico.edit', [
            'user' => $user,
            'sections' => Section::pluck('name', 'id'),
            'categories' => Category::pluck('category', 'id')
        ]);
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
        $user =  User::find($id);

        $user->name = $request->get('name');
        $user->proceedings = $request->get('proceedings');
        $user->email = $request->get('email');
        $user->workplace = $request->get('workplace');
        $user->abilities = $request->get('abilities');
        $user->notes = $request->get('notes');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        return redirect()->route('tecnico.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
    public function category(Request $request,User $user)
    {
        $buscar = $request->get('buscar');
        /* $users = DB::select(
            'SELECT users.*,
            CONCAT(categories.category) AS category_name
            FROM users, categories
            WHERE users.category_id = categories.id
            ORDER BY `id` ASC'
        ) ; */

        /*  $categories = DB::select(
            'SELECT categories.*,
            CONCAT(users.name) AS user_name
            FROM categories, users
            WHERE categories.id = users.category_id
            ORDER BY `user_name` DESC'
        ); */
        /*  $users = DB::table('users')
            ->select('id', 'name', 'proceedings')
            ->where('name', 'LIKE', '%' . $buscar . '%')
            ->orWhere('proceedings', 'LIKE', '%' . $buscar . '%')
            ->orderBy('id', 'ASC')
            ->paginate(4); */
        return view('tecnico.category', [
            'user' => $user,
            'categories' => Category::pluck('category', 'id')
        ]);
    }
    public function category_update(Request $request, $id)
    {
        $user =  User::find($id);
        $user->category_id = $request->get('category_id');
        $user->save();
        return redirect()->route('tecnico.index');
    }
}
