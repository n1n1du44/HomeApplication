<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RestController extends Controller{
    const STATUS_CODE_OK = 200;
    const STATUS_CODE_CREATED = 201;
    const STATUS_CODE_ENTITY_NOT_FOUND = 204;
    const STATUS_CODE_ATTRIBUTES_NOT_FOUND = 206;
    const STATUS_CODE_TOKEN_NOT_FOUND = 418;
    const STATUS_CODE_MISSING_ARGUMENT = 226;
    const STATUS_CODE_FORBIDDEN = 403;
}
