<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $permissions = $this->permissions ?? [];
        return [
            "id" => $this->id,
            "name" => $this->name,
            "permissions" => $permissions

        ];
    }
}
