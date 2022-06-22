<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Todo;
use \Symfony\Component\HttpFoundation\Response;
use DateTime;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {


        $todos=DB::table('todos')
            ->where('user_id', \Auth::user()->id)
            ->select('id', 'date', 'hour1','min1', 'studytime','resttime',
            'todostudy1','todostudy2','todostudy3','todostudy4','todostudy5')
            ->orderBy(DB::raw('date'),'asc')
            ->get();

            return view('todo/index',compact('todos'));

            if($todos == null) {
                return redirect('todo/no');
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todo/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $d=DB::table('todos')
            ->where('user_id', \Auth::user()->id)
            ->where('date' , $request->input('date'))
            ->get();

        if(count($d) > 0) {
            return view('todo/create');
        }


        $todo = new Todo;
        $todo->user_id = $request->user()->id;
        $todo->date=$request->input('date');
        $todo->hour1=$request->input('hour1');
        $todo->min1=$request->input('min1');
        $todo->studytime=$request->input('studytime');
        $todo->resttime=$request->input('resttime');
        $todo->todostudy1=$request->input('todostudy1');
        $todo->todostudy2=$request->input('todostudy2');
        $todo->todostudy3=$request->input('todostudy3');
        $todo->todostudy4=$request->input('todostudy4');
        $todo->todostudy5=$request->input('todostudy5');
        $todo->save();
        return redirect('todo/index');

    }

    /**
     * Display the today's resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function today()
    {

        $today = date('y-m-d');

        // $article = Todo::find($request->id);
        $todo=DB::table('todos')
            ->where('date' , $today)
            ->where('user_id', \Auth::user()->id)
            ->first();


        if($todo == null) {
            return view('todo/no');
        }

        return view('todo/today' , compact('todo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $todo = Todo::find($request->id);
        // $todo=Todo::findOrFail($id);
        return view('todo/show' , compact('todo'));

        $todo=DB::table('todos')
            ->where('date' , $today)
            ->where('user_id', \Auth::user()->id)
            ->first();




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $todo = Todo::find($request->id);
        $posts = \Auth::user()->posts;
        // $todo=Todo::findOrFail($id);
        return view('todo/edit' ,compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $todo = TODO::find($request->id);
        $todo->user_id = $request->user()->id;
        $todo->date=$request->input('date');
        $todo->hour1=$request->input('hour1');
        $todo->min1=$request->input('min1');
        $todo->studytime=$request->input('studytime');
        $todo->resttime=$request->input('resttime');
        $todo->todostudy1=$request->input('todostudy1');
        $todo->todostudy2=$request->input('todostudy2');
        $todo->todostudy3=$request->input('todostudy3');
        $todo->todostudy4=$request->input('todostudy4');
        $todo->todostudy5=$request->input('todostudy5');

        $todo->save();

        return redirect('todo/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $todo = Todo::find($request->id);
        $todo->delete();
        return redirect('todo/index');
    }
}
