# TUGAS2 Laravel Project Server
Write-Host "========================================" -ForegroundColor Cyan
Write-Host "       TUGAS2 Laravel Project Server" -ForegroundColor Cyan
Write-Host "========================================" -ForegroundColor Cyan
Write-Host ""

Write-Host "Stopping any existing PHP servers..." -ForegroundColor Yellow
Get-Process -Name "php" -ErrorAction SilentlyContinue | Stop-Process -Force -ErrorAction SilentlyContinue
Start-Sleep -Seconds 2

Write-Host "Navigating to project directory..." -ForegroundColor Yellow
Set-Location "C:\laragon\www\tugas2"

Write-Host "Checking if we're in the correct Laravel project..." -ForegroundColor Yellow
if (!(Test-Path "artisan")) {
    Write-Host "ERROR: artisan file not found!" -ForegroundColor Red
    Write-Host "Make sure you're in the correct Laravel project directory." -ForegroundColor Red
    Read-Host "Press Enter to exit"
    exit 1
}

Write-Host "Starting Laravel development server..." -ForegroundColor Green
Write-Host ""
Write-Host "Your project will be available at: http://127.0.0.1:8000" -ForegroundColor Green
Write-Host "Press Ctrl+C to stop the server" -ForegroundColor Yellow
Write-Host ""

php artisan serve --host=127.0.0.1 --port=8000
