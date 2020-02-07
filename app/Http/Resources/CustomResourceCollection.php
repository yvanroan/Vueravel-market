<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Container\Container;
use Symfony\Component\Console\Output\ConsoleOutput;

abstract class CustomResourceCollection extends ResourceCollection
{

    /**
     * @var array
     */
    protected $withoutFields = [];

    public function hide(array $fields)
    {
        $this->withoutFields = $fields;

        return $this;
    }

    /**
     * Resolve the resource to an array.
     *
     * @param  \Illuminate\Http\Request|null  $request
     * @return array
     */
    public function resolve($request = null)
    {
        $request = $request ?: Container::getInstance()->make('request');

        //modify the resources of the collection to hide fields
        $this->collection = $this->collection->map(function ($resource) use ($request) {
                $class = $this->collects();
                return (new $class($resource))->hide($this->withoutFields);
        });

        $data = $this->toArray($request);

        if ($data instanceof Arrayable) {
            $data = $data->toArray();
        } elseif ($data instanceof JsonSerializable) {
            $data = $data->jsonSerialize();
        }

        return $this->filter((array) $data);
    }

}