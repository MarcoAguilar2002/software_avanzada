<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Importar Auth
use OpenAI\Laravel\Facades\OpenAI;

class ChatBotController extends Controller
{

    public function index(){
        return view('admin.consulta.consultar');
    }

    public function rpta(Request $request){
        $request->validate([
            'question' => 'required',
        ]);
    
        // Recuperar el historial de la conversación de la sesión
        $chatHistory = session()->get('chat_history', []);
    
        // Añadir la nueva pregunta al historial
        $chatHistory[] = ['role' => 'user', 'content' => $request->input('question')];
    
        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => array_merge([
                ['role' => 'system', 'content' => 'You are a virtual assistant at the City of God Medical Center. Your role is to help patients by recommending the appropriate medical specialty based on their symptoms or complaints. Our center offers the following specialties: Pediatrics, Psychology, Nutrition, Physiotherapy, Dentistry, Ophthalmology, Cardiology, Dermatology, General Medicine, and Gynecology. When a patient describes their symptoms, suggest the most relevant specialty for their condition. Do not offer to help book appointments. If a patient asks for advice on medications or home remedies for their ailments, respond kindly and gently, offering general suggestions and encouraging them to seek professional medical advice. Always provide your answers in a kind and precise manner, and avoid being too redundant in your response.']
            ], $chatHistory),
        ]);
    
        $answer = $response['choices'][0]['message']['content'];
        
        // Personalizar la respuesta si es un saludo
        if (stripos($request->input('question'), 'hola') !== false) {
            $answer = "Hola ". Auth::user()->name.", bienvenido al Centro Médico Ciudad de Dios. ¿En qué puedo ayudarte hoy?";
        }

        $chatHistory[] = ['role' => 'assistant', 'content' => $answer];
    
        session()->put('chat_history', $chatHistory);
    
        return response()->json([
            'question' => $request->input('question'),
            'answer' => $answer,
        ]);
    }
    
}