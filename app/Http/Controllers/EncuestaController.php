<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\encuesta;
class EncuestaController extends Controller
{
    //
    public function recibirFoto(request $request)
    {

    // move_uploaded_file($_FILES['photo']['tmp_name'], './photos/' . $_FILES['photo']['name']);
          if($request->hasFile('photo'))
            {
                $file = $request->file('photo');
                $name = $file->getClientOriginalName();
                // print_r($file->getClientOriginalName());
                $file->move(public_path().'/fotos/uploads/',$name);
                echo "subido";
            }
            else
            {
                echo "error";
            }

    }

    public function recieve(request $request)
    {
        $data = $request->getContent();
        $data = json_decode($data);

        foreach ($data as $key => $encuesta)
        {
            $array = ((array)$encuesta);
            $e = new Encuesta();
            // print_r($array);
            foreach ($array as $key => $value)
            {
                $e[$key] = $value;
                $ne = $key;

               switch ($key) {
                   case 'foto_area_elaboracion':
                   case 'foto_bebedero':
                   case 'foto_comedor':
                   case 'foto_menu':
                   case 'foto_plato_almuerzo':
                   case 'foto_plato_desayuno':
                   case 'foto_plato_merienda':
                   case 'foto_servicio_alimentos':
                    if($e[$key])
                    {
                        $temp = explode("/",$value);
                        $filename =end($temp) ;
                        $e[$key] = $filename;
                    }
                    break;
                }
            }
            $e->hash = $e->userid.$e->timestamp;

            if(encuesta::where('hash','=',$e->hash)->exists())
            {
                echo "Ya existe";
            }
            else
            {
                $e->save();
            }
        }

        return "ok";
    }
}
