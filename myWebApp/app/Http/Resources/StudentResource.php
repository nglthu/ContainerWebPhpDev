<?php

namespace App\Http\Resources;
use App\Models\Student;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function index(Request $request){
        //$content = Request::all();
        //$content1 = $request->getBody();

        $content = $request->getContent();
        return $content;

        
    }
    }

;