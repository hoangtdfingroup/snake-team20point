<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 8/18/2018
 * Time: 2:21 PM
 */
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class SnakeController extends BaseController
{

    protected $map;

    public function snakegame(){

    }

    public function createMap(){
        $this->map = [][];
    }
}