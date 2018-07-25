<?php
namespace App\Service;

class RecipeService
{
    private $baseApiUrl = 'http://www.recipepuppy.com/api';

    public function search($search = '', $page = 1)
    {
        $apiUrl = $this->baseApiUrl;

        // Obtaining query parameters to customize api URL.
        $queryParams = [];
        if ($page > 1) {
            $queryParams['page'] = $page;
        }
        if (!empty($search)) {
            $queryParams['q'] = urlencode($search);
        }
        $apiUrl .= empty($queryParams)
            ? ''
            : '?' . http_build_query($queryParams);

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $apiUrl);
        $contents = json_decode($response->getBody()->getContents(), JSON_UNESCAPED_SLASHES);

        return [
          'code' => $response->getStatusCode(),
          'data' => json_encode($contents['results'])
        ];
    }

    public function listByCategory($category = '', $page = 1)
    {
        // TODO - Currently there appears to be no way to search recipes by a
        // certain category (vegetarian, sea-food, ...). So we're going to
        // retrieve all the recipes and filter them under this criteria.
        $apiUrl = $this->baseApiUrl;

        // Obtaining query parameters to customize api URL.
        $queryParams = [];
        if ($page > 1) {
            $queryParams['page'] = $page;
        }
        if (!empty($search)) {
            $queryParams['q'] = urlencode($category);
        }
        $apiUrl .= empty($queryParams)
            ? ''
            : '?' . http_build_query($queryParams);

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $apiUrl);
        $contents = json_decode($response->getBody()->getContents(), JSON_UNESCAPED_SLASHES);

        return [
          'code' => $response->getStatusCode(),
          'data' => [
              'category' => $category,
              'recipes' => $this->getRecipesList($contents['results'], $category)
          ]
        ];
    }

    /**************************************************************************
     * Private functions. If recipes data end up being saved to a database,
     * this funtions should be moved and adapted to be used from the model.
     *************************************************************************/
    private function getRecipesList($recipes, $category) {
        $results = [];

        foreach ($recipes as $recipe) {
            if (!$this->recipeHasCategory($category)) {
                continue;
            }

            $results[] = array_merge($recipe, [
                'traits' => $this->getTraitsFromRecipe($recipe),
                'favourite' => $this->recipeIsFavourite($recipe)
            ]);
        }

        return $results;
    }

    private function recipeHasCategory($recipe) {
        // TODO - We need more data to obtain the category for the recipe.
        // Meanwhile, we assume any recipe has any category.
        return true;
    }

    private function getTraitsFromRecipe($recipe) {
        // TODO - We need more data (from some database, probably) to obtain
        // this traits. Meanwhile, we let them take a random boolean value.
        return [
            'light' => mt_rand(0, 1),
            'vegetarian' => mt_rand(0, 1),
            'vegan' => mt_rand(0, 1),
            'gluten-free' => mt_rand(0, 1),
            'without lactose' => mt_rand(0, 1)
        ];
    }

    private function recipeIsFavourite($recipe) {
      // TODO - We need data to check if recipe is favourite.
      // Meanwhile, we assume none of the recipes is favourite.
      return false;
    }
}
