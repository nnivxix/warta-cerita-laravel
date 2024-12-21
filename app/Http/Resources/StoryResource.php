<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title'        => $this->title,
            'slug'         => $this->slug,
            'content'      => $this->content,
            'published_at' => $this->published_at,
            'user'         => UserResource::make($this->whenLoaded('user')),
        ];
    }
}
