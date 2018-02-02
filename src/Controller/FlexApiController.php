<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class FlexApiController extends Controller
{
    public function ulid()
    {
        return new JsonResponse([]);
    }

    public function packages($packages)
    {
        return new JsonResponse([]);
    }

    public function versions()
    {
        return new JsonResponse([]);
    }

    public function aliases()
    {
        return new JsonResponse([]);
    }
}
