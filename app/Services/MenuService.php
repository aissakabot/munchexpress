<?php



namespace App\Services;

use App\Models\Menu;

class MenuService
{
    public function getMenuWithCategories(array $restoIds)
    {
        $menuItems = Menu::whereIn('resto_id', $restoIds)
            ->get()
            ->groupBy('category.name');

        return $menuItems;
    }
}
