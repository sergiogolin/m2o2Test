<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Service\RecipeService;

class RecipeController extends Controller
{
    private $recipeService;

    public function __construct(RecipeService $recipeService)
    {
        $this->recipeService = $recipeService;
    }

    /**
     * @Route("/recipes/search/{search}", name="recipes_search")
     */
    public function searchAction($search = "")
    {
        return $this->json($this->recipeService->search($search));
    }

    /**
     * @Route("/recipes/category/{category}", name="recipes_by_category")
     */
    public function findByCategoryAction($category = "")
    {
        return $this->json($this->recipeService->listByCategory($category));
    }
}
