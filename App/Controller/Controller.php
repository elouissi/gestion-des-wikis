<?php
namespace App\Controller;

class Controller
{
    public function index(): void
    {
        // Default implementation for the index method
    }

    public function create(): void
    {
        // Default implementation for the create method
    }

    public function destroy(int $id): void
    {
        // Default implementation for the destroy method
    }

    public function update(int $id): void
    {
    }

    public function render(string $nameFolder, string $nameFile, string $title, $result = null, $data = null, $teams = null): void
    {
        include "../resources/" . $nameFolder . "/" . $nameFile . ".php";
    }
}

 
