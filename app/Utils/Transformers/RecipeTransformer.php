<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/27/17 3:10 PM
 */

namespace App\Utils\Transformers;
use App\Item;
use App\Recipe;
use League\Fractal;

class RecipeTransformer extends Fractal\TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        'for', 'components'
    ];

    public function transform(Recipe $recipe)
    {
        return [
            'id'         => $recipe->id,
            'item_id'    => $recipe->item_id,
            'created_at' => $recipe->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $recipe->updated_at->format('Y-m-d H:i:s')
        ];
    }

    protected function includeFor(Recipe $recipe)
    {
        return $this->item($recipe->for, new SimpleItemTransformer());
    }

    protected function includeComponents(Recipe $recipe)
    {
        return $this->collection($recipe->components, new SimpleItemTransformer());
    }
}