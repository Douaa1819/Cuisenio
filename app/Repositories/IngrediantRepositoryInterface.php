<?php 

namespace App\Repositories;
//hadi hiya la liste dyal les fonctions li ghadi tkoun m3awda f koul classe li katimplimenti had l'interface
interface IngrediantRepositoryInterface
{
    public function all();
    public function find($id);
    public function create($attributes);
    public function update($id, $attributes);
    public function delete($id);
}
