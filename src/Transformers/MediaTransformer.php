<?php

namespace Motor\Backend\Transformers;

use League\Fractal;
use Spatie\MediaLibrary\Models\Media;

class MediaTransformer extends Fractal\TransformerAbstract
{

    public function transform(Media $record)
    {
        return [
            'collection' => $record->collection_name,
            'name'       => $record->name,
            'file_name'  => $record->file_name,
            'size'       => (int) $record->size,
            'url'        => $record->getUrl(),
            'path'       => $record->getPath(),
            'created_at' => (string)$record->created_at,
        ];
    }
}