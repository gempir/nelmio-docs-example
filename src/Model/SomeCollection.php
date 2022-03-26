<?php 

namespace App\Model;
use OpenApi\Annotations as OA;
use Nelmio\ApiDocBundle\Annotation\Model;

/**
 * @OA\Schema (
 *     type="array",
 *     @OA\Items(ref=@Model(type=SomeData::class))
 * )
 */
class SomeCollection implements \JsonSerializable {
    private $items = [];

    public function __construct(array $items) {
        $this->items = $items;
    }

    public function jsonSerialize(): mixed
    {
        return $this->items;
    }
}