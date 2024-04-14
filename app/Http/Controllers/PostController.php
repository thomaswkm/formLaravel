<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Jugador;
use App\Models\Equipo;
class PostController extends Controller
{
    public function mostrarFormulario()
    {
        return view('formulario');
    }
    public function procesarFormulario(Request $request)
    {
        // Crea un nuevo equipo con los datos recibidos del formulario
        $equipo1 = new Equipo([
            'arq' => $request->input('form1_arq'),
            'def1' => $request->input('form1_def1'),
            'def2' => $request->input('form1_def2'),
            'def3' => $request->input('form1_def3'),
            'def4' => $request->input('form1_def4'),
            'mc1' => $request->input('form1_mc1'),
            'mc2' => $request->input('form1_mc2'),
            'mc3' => $request->input('form1_mc3'),
            'del1' => $request->input('form1_del1'),
            'del2' => $request->input('form1_del2'),
            'del3' => $request->input('form1_del3'),
        ]);
    
        $equipo2 = new Equipo([
            'arq' => $request->input('form2_arq'),
            'def1' => $request->input('form2_def1'),
            'def2' => $request->input('form2_def2'),
            'def3' => $request->input('form2_def3'),
            'def4' => $request->input('form2_def4'),
            'mc1' => $request->input('form2_mc1'),
            'mc2' => $request->input('form2_mc2'),
            'mc3' => $request->input('form2_mc3'),
            'del1' => $request->input('form2_del1'),
            'del2' => $request->input('form2_del2'),
            'del3' => $request->input('form2_del3'),
        ]);
    
        // Guarda los equipos en la base de datos
        $equipo1->save();
        $equipo2->save();
    
        // Redirige a la página del formulario con un mensaje de éxito
        return redirect('formulario')->with('status', 'Datos del formulario insertados correctamente.');
    }

    public static function generarOpcionPorPosicion($posicion)
    {
        // Busca los jugadores por la posición proporcionada
        $jugadores = Jugador::join('Jugador_Posicion', 'Jugadores.numero', '=', 'Jugador_Posicion.jugador_numero')
                            ->join('Posiciones', 'Jugador_Posicion.posicion_id', '=', 'Posiciones.id')
                            ->select('Jugadores.numero', 'Jugadores.nombre', 'Jugadores.equipo')
                            ->where('Posiciones.nombre', $posicion)
                            ->get();

        // Construye las opciones para el select
        $opciones = '<option value="">Elige</option>';
        foreach ($jugadores as $jugador) {
            $opciones .= '<option value="' . $jugador->numero . '">' . $jugador->numero . '. ' . $jugador->nombre . ' - ' . $posicion . ' - ' . $jugador->equipo . '</option>';
        }

        return $opciones;
    }


}
