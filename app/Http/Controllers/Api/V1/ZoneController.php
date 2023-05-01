<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\ZoneResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Zone;

/**
 * @group Zones
 */
class ZoneController extends Controller
{
    public function index()
    {
        return ZoneResource::collection(Zone::all());
    }
}
