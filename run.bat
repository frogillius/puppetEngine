@echo off
setlocal

REM Get the directory where the batch script is located
cd app

REM Check if Caddy exists
if not exist "caddy.exe" (
    echo Error: caddy.exe not found!
    pause
    exit /b
)

REM Start Caddy on port 6969
echo Starting Caddy server on http://localhost:6969 ...
start "" "caddy.exe" file-server --listen :6969 --browse
start http://localhost:6969/game

exit
