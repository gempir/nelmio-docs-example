<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;

class ExampleController extends AbstractController {

    /**
     * 
     * @OA\Response(
     *     response=200,
     *     description="return some data",
     *     @Model(type=\App\Model\SomeResponse::class)
     * )
     */
    public function getExample() {
        $resp = new \App\Model\SomeResponse();
        $resp->message = "hello";
        $resp->someCollectionOfStuff = new \App\Model\SomeCollection(["hello", "world"]);


        return new JsonResponse($resp);
    }
}