@echo off

PowerShell Expand-Archive -Path "unimed.zip" %USERPROFILE%\Downloads\Boletos\

copy rename.php %USERPROFILE%\Downloads\Boletos\

cd %USERPROFILE%\Downloads\Boletos\

rename.php
