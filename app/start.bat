@echo off
cd php
start /b php -S localhost:6969 -c server.ini -t ../
cd ..
start /b .\render\render.bat

