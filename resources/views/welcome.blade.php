<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Usage of Text Completion mode of Openai GPT-3 Model</title>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>
<body>
    <h2>Basic Usage of Text Completion mode of Openai GPT-3 Model</h2>
    <div class="container">
        <div class="user-action">
            <input type="text" placeholder="Ask me something.">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40"><path d="M7.75 31.125q-.625.25-1.188-.083-.562-.334-.562-1v-6.459q0-.458.271-.791.271-.334.687-.417l9.959-2.417-9.959-2.416q-.416-.084-.687-.417Q6 16.792 6 16.333V9.958q0-.666.562-1.02.563-.355 1.188-.105l23.708 10q.75.334.75 1.167t-.75 1.125Z"/></svg>
            </button>
        </div>
        <textarea></textarea>
    </div>
    <script src="{{asset('assets/sse.js')}}"></script>
    <script src="{{asset('assets/script.js')}}"></script>
</body>
</html>
