<?php

namespace Ekremogul\FilamentGrapesjs;

use Filament\Facades\Filament;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentGrapesjsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-grapesjs')
            ->hasConfigFile()
            ->hasViews()
            ->hasAssets();
    }
    public function packageBooted()
    {
        if (class_exists(\Filament\FilamentServiceProvider::class)) {
            Filament::serving(function() {
                Filament::registerScripts($this->getScripts(), true);
                Filament::registerStyles($this->getStyles());
            });
        }
    }

    public function getScripts(): array
    {
        return [
            'grapesjs' => __DIR__ . '/../resources/dist/js/grapes.min.js',
            'filament-grapesjs-tailwindcss' => __DIR__ . '/../resources/dist/js/grapesjs-tailwind.min.js',
            'filament-grapesjs' => __DIR__ . '/../resources/dist/js/grapes.js',
        ];
    }
    public function getStyles(): array
    {
        return  [
            'grapesjs' => __DIR__ . '/../resources/dist/css/grapes.min.css',
            'filament-grapesjs' => __DIR__ . '/../resources/dist/css/grapes.css'
        ];
    }
}
