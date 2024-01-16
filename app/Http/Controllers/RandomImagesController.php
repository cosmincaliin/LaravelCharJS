<?php

// app/Http/Controllers/RandomImagesController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RandomImagesController extends Controller
{
    public function show()
    {
        // Lógica para obtener imágenes aleatorias y sus fuentes
        $image1 = asset('images/hawaii.jpg');
        $source1 = 'Hawai (E.E.U.U.)';
        $additionalInfo1 = "Información adicional para Hawai:<br>Precio: 200€<br>Fecha: 2022-01-01";

        $image2 = asset('images/dubai.jpg');
        $source2 = 'Dubai (UAE)';
        $additionalInfo2 = "Información adicional para Dubai:<br>Precio: 300€<br>Fecha: 2022-02-15";

        $image3 = asset('images/new_jersey.jpg');
        $source3 = 'New Jersey (E.E.U.U.)';
        $additionalInfo3 = "Información adicional para New Jersey:<br>Precio: 150€<br>Fecha: 2022-03-20";

        return view('dashboard', compact('image1', 'source1', 'additionalInfo1', 'image2', 'source2', 'additionalInfo2', 'image3', 'source3', 'additionalInfo3'));
    }

    public function getImage($imageName)
    {
        $path = resource_path('images/' . $imageName);

        if (File::exists($path)) {
            return response()->file($path);
        }

        abort(404);
    }
}
