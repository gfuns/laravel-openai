<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;
class TestController extends Controller
{
    public function askOpenAI(Request $request)
    {
        header('Content-type: text/event-stream');
        header('Cache-Control: no-cache');

        $openAI = new OpenAi(env('OPENAI_API_KEY'));
        
        $prompt = request()->prompt;

        $responses = $openAI->completion([
            'model' => 'text-davinci-003',
            'prompt' => $prompt,
            'temperature' => 0.7,
            'max_tokens' => 256,
            'top_p' => 1,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
            'stream' => true,
        ], function ($curl_info, $data) {
            // now we will get stream data
            echo $data;
            echo PHP_EOL; // used to find the newline character in a cross-platform-compatible way
            ob_flush(); //outputs the contents of the topmost output buffer and then clears the buffer of the contents
            flush(); //requests the server to send its currently buffered output to the browser
            return strlen($data);
        });
    }
}
