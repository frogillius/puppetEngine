::[Bat To Exe Converter]
::
::YAwzoRdxOk+EWAjk
::fBw5plQjdD+DJF6F+UcjFDZtDCOjEU6JOqYM6ev+vtaFt0QRUN44eYLelL2NL4A=
::YAwzuBVtJxjWCl3EqQJgSA==
::ZR4luwNxJguZRRnk
::Yhs/ulQjdF+5
::cxAkpRVqdFKZSjk=
::cBs/ulQjdF+5
::ZR41oxFsdFKZSDk=
::eBoioBt6dFKZSDk=
::cRo6pxp7LAbNWATEpCI=
::egkzugNsPRvcWATEpCI=
::dAsiuh18IRvcCxnZtBJQ
::cRYluBh/LU+EWAnk
::YxY4rhs+aU+JeA==
::cxY6rQJ7JhzQF1fEqQJQ
::ZQ05rAF9IBncCkqN+0xwdVs0
::ZQ05rAF9IAHYFVzEqQJQ
::eg0/rx1wNQPfEVWB+kM9LVsJDGQ=
::fBEirQZwNQPfEVWB+kM9LVsJDGQ=
::cRolqwZ3JBvQF1fEqQJQ
::dhA7uBVwLU+EWDk=
::YQ03rBFzNR3SWATElA==
::dhAmsQZ3MwfNWATElA==
::ZQ0/vhVqMQ3MEVWAtB9wSA==
::Zg8zqx1/OA3MEVWAtB9wSA==
::dhA7pRFwIByZRRnk
::Zh4grVQjdD+DJF6F+UcjFDZtDCOjEU6JOqYM6ev+vtaAo0AYGucnfe8=
::YB416Ek+ZG8=
::
::
::978f952a14a936cc963da21a135fa983
@echo off
title puppetEngine
set "filePath=%~dp0watermark.txt"

:: Check if the file exists
if not exist "%filepath%" (
    echo The file does not exist!
    exit /b
)

:: Read and echo each line
type "%filepath%"
 

REM Get the directory where the batch script is located
cd app

echo Starting server...
start start.bat


echo Starting the game...
