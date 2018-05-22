<?php

namespace LaraDex\Http\Controllers;
use LaraDex\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view('trainers.index', compact('trainers')); //Podemospasar diferentes parametros

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
    //    return  $request->input('nombre_espacio');
    //    return $request->all(); Esto nos permite obtener todos los datos eviados d un formu

    if($request->hasFile('avatar')){//si viene img se trata de otra manera a los datos planos
        $file = $request->file('avatar');
        $name_archi = time().$file->getClientOriginalName(); //fecha actual y concatenar el nombre del archivo
        $file->move(public_path().'/images/', $name_archi); //Se mueve a la carpeta public     
    }

        $trainer = new Trainer();//la variable $trainer nos guarda la instancia del model Trainer() // return $request; //con esto podemos ver los datos enviados
        $trainer->name = $request->input('nombre_espacio'); //$trainer accedemos a una de sus propiedades ->name y va ser igual al request
        $trainer->descripcion = $request->input('descrip');
        $trainer->avatar= $name_archi;//guard name_archi porq tiene un nuevo nombre
        $trainer->save();//Se almacene un recurso en nuestra base de datos
        return "Guardado";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        //decla la var $trainer  donde nos va a buscar en el model trainer en el campo slug y sea igual al q le estoy pasando por param
        //firstOrFail Lanza una excepcion
        //  $trainer = Trainer::where('slug', '=', $slug)->firstOrFail();
        // Trainer $trainer
        // $trainer = Trainer::find($id);

        return view ('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
