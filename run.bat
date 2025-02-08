@echo off
setlocal

REM Get the directory where the batch script is located
cd /d "%~dp0"

REM Check if Caddy exists
if not exist "caddy.exe" (
    echo Error: caddy.exe not found!
    pause
    exit /b
)

REM Start Caddy on port 6969
echo Starting Caddy server on http://localhost:6969 ...
start "" "%CD%\caddy.exe" file-server --listen :6969 --browse
start http://localhost:6969/game

REM Keep the window open until user presses a key
echo Caddy is running. Press any key to stop.
pause

REM Stop Caddy when the user presses a key
taskkill /IM caddy.exe /F
exit
