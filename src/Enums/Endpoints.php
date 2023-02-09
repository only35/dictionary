<?php
namespace Only35\Minimalism\Library\Dictionary\Enums;

use CarloNicora\Minimalism\Interfaces\DictionaryInterface;

enum Endpoints: string implements DictionaryInterface
{
    case User='user';
    case Roll='roll';
    case Stock='stock';
    case Manufacturer='manufacturer';
    case Photograph='photograph';
    case Tag='tag';

    /**
     * @return string
     */
    public function getIdKey(
    ): string
    {
        return match ($this) {
            self::User => 'userId',
            self::Stock => 'stockId',
            self::Roll => 'rollId',
            self::Manufacturer => 'manufacturerId',
            self::Photograph => 'photographId',
            self::Tag => 'tagId',
        };
    }

    /**
     * @return string
     */
    public function getEndpoint(
    ): string
    {
        return match ($this) {
            self::User => 'users',
            self::Stock => 'stocks',
            self::Roll => 'rolls',
            self::Manufacturer => 'manufacturers',
            self::Photograph => 'photographs',
            self::Tag => 'tags',
        };
    }
}