<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 1/12/2017
 * Time: 22:25
 */

namespace RauweBieten\PhpFakerClothing;


use Faker\Provider\Base;

class Clothing extends Base
{
    public static $clothingColors = [
        'blue', 'green', 'orange', 'red', 'purple', 'white', 'black', 'gray', 'brown', 'pink', 'yellow'
    ];

    public static $clothingSizes = [
        'XS', 'S', 'M', 'L', 'XL', 'XXL'
    ];

    protected static $clothingFabrics = [
        'wool', 'velvet', 'felt', 'suede', 'denim', 'leather'
    ];

    protected static $clothingPurposes = [
        'tennis', 'yoga', 'party',
    ];

    protected static $clothingPatterns = [
        'striped', 'dotted', 'paisley'
    ];

    protected static $clothingAdjectives = [
        'beautiful', 'cool', 'trendy', 'hip', 'urban', 'wide', 'short', 'long', 'casual',
        'stylish', 'extravagant', 'cosy', 'sexy'
    ];

    protected static $clothingTypes = [
        'pants', 'skirt', 'trousers', 't-shirt', 'socks', 'sweat shirt', 'jacket', 'polo', 'shorts',
        'sweatpants', 'dress', 'costume', 'apron', 'bathing suit', 'bathing trousers', 'bikini',
        'blouse', 'body stocking', 'bodysuit', 'coat', 'dressing gown', 'gilet', 'gloves', 'stockings',
        'jacket', 'jumper', 'jump suit', 'kimono', 'leotard', 'cloak', 'mantle', 'nightdress', 'night gown',
        'overcoat', 'overskirt', 'peignoir', 'pullover', 'pyjamas', 'sarong', 'shirt', 'swimming trunks',
    ];

    protected static $clothingFormats = [
        // yoga pants
        '{{clothingPurpose}} {{clothingType}}',
        // blue pants
        '{{clothingColor}} {{clothingType}}',
        // blue yoga pants
        '{{clothingColor}} {{clothingPurpose}} {{clothingType}}',
        // blue/red paisley pants
        '{{clothingColor}}-{{clothingColor}} {{clothingPattern}} {{clothingType}}',
        // denim pants
        '{{clothingFabric}} {{clothingType}}',
    ];

    public function clothingColor()
    {
        return static::randomElement(static::$clothingColors);
    }

    public function clothingSize()
    {
        return static::randomElement(static::$clothingSizes);
    }

    public function clothingFabric()
    {
        return static::randomElement(static::$clothingFabrics);
    }

    public function clothingPurpose()
    {
        return static::randomElement(static::$clothingPurposes);
    }

    public function clothingPattern()
    {
        return static::randomElement(static::$clothingPatterns);
    }

    public function clothingAdjective()
    {
        return static::randomElement(static::$clothingAdjectives);
    }

    public function clothingType()
    {
        return static::randomElement(static::$clothingTypes);
    }

    public function clothing()
    {
        $format = static::randomElement(self::$clothingFormats);
        return $this->generator->parse($format);
    }
}