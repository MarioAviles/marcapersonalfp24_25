<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompetenciaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */


    public function toArray(Request $request): array
    {

        $user = User::find(1);

        foreach ($user->competencias as $competencia) {
            echo $competencia->pivot->created_at;
        }

        return parent::toArray($request);
    }
}
