<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NodeProxyController extends Controller
{
    /**
     * Muestra el contenido de la aplicación Node.js.
     *
     * @return \Illuminate\Http\Response
     */
    public function showContent()
    {
        // URL de la aplicación Node.js, incluyendo el endpoint específico
        $nodeUrl = 'http://localhost:4001/qr.png'; // Asegúrate de incluir /qr.png

        // Realiza una solicitud GET al servidor Node.js
        $response = Http::get($nodeUrl);

        // Verifica si la respuesta es exitosa
        if ($response->successful()) {
            // Devuelve el contenido recibido
            return response($response->body(), $response->status())
                ->header('Content-Type', 'image/png'); // Asegúrate de que el Content-Type sea correcto
        } else {
            // Manejo de errores
            return response('No se pudo obtener el contenido', $response->status());
        }
    }
}
