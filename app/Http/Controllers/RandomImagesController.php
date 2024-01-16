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

        $image2 = asset('images/dubai.jpg');
        $source2 = 'Dubai (UAE)';

        $image3 = asset('images/new_jersey.jpg');
        $source3 = 'New Jersey (E.E.U.U.)';

        return view('dashboard', compact('image1', 'source1', 'image2', 'source2', 'image3', 'source3'));
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
