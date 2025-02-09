@echo off
title puppetEngine
 

REM Get the directory where the batch script is located
cd app

REM Check if Caddy exists
if not exist "server.exe" (
    echo Error: caddy.exe not found!
    pause
    exit /b
)

REM Start Caddy on port 6969
echo Starting Caddy server on http://localhost:6969 ...
start /B "server" "server.exe" run --config Caddyfile

cd php

if not exist "php-cgi.exe" (
    echo Error: php-cgi.exe not found!
    pause
    exit /b
)

echo Starting PHP server on http://localhost:9000 ...
start /B "php" "php-cgi.exe" -b 127.0.0.1:9000


echo Starting the game...
setlocal
set "filePath=%~dp0watermark.txt"

:: Check if the file exists
if not exist "%filepath%" (
    echo The file does not exist!
    exit /b
)

:: Read and echo each line
type "%filepath%"

endlocal
start http://localhost:6969/game

exit
