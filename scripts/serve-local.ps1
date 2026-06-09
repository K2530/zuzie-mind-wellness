$ErrorActionPreference = 'Continue'

$ProjectRoot = Split-Path -Parent $PSScriptRoot
Set-Location -LiteralPath $ProjectRoot

$env:PHPRC = $ProjectRoot
php -S 127.0.0.1:8000 -t public scripts\router.php *> storage\logs\artisan-serve.combined.log
