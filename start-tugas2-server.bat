@echo off
echo ========================================
echo       TUGAS2 Laravel Project Server
echo ========================================
echo.
echo Stopping any existing PHP servers...
taskkill /f /im php.exe 2>nul
timeout /t 2 /nobreak >nul

echo Navigating to project directory...
cd /d "C:\laragon\www\tugas2"

echo Checking if we're in the correct Laravel project...
if not exist "artisan" (
    echo ERROR: artisan file not found!
    echo Make sure you're in the correct Laravel project directory.
    pause
    exit /b 1
)

echo Starting Laravel development server...
echo.
echo Your project will be available at: http://127.0.0.1:8000
echo Press Ctrl+C to stop the server
echo.
php artisan serve --host=127.0.0.1 --port=8000

pause
