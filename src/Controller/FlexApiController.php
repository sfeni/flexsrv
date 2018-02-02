<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class FlexApiController extends Controller
{
    public function ulid()
    {
        // TODO create a ulid like https://symfony.sh/ulid
        return new JsonResponse([]);
    }

    public function packages($packages)
    {
        // TODO create correct response for https://symfony.sh/p/...
        return new JsonResponse([]);
    }

    public function versions()
    {
        // TODO create correct response for https://symfony.sh/versions.json
        return new JsonResponse([]);
    }

    public function aliases()
    {
        // TODO create correct response for https://symfony.sh/aliases.json
        return new JsonResponse([]);
    }
}
