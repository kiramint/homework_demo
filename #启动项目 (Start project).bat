@ECHO OFF
echo Please wait...
cd .\server\php-8.1.19-Win32
start /B runserver.bat
explorer http://localhost:8080
cls
echo Project launched!
echo Press any key to kill the project
pause
taskkill /F /IM php.exe
exit