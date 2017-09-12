<?php

namespace Faker\Provider\es_CL;

class Address extends \Faker\Provider\es_ES\Address
{
    protected static $cityPrefix = array('Villa', 'Puerto', 'San');
    protected static $citySuffix = array('Alto', 'Bajo', 'Norte', 'Este', ' Sur', ' Oeste');
    protected static $buildingNumber = array('#####', '####', '###', '##', '#');
    protected static $streetPrefix = array('Calle', 'Avenida','Pasaje', 'Cl.','Av.','Pje.');
    protected static $streetSuffix = array('');
    protected static $postcode = array('####');
    protected static $state = array(
        'Arica y Parinacota','Tarapacá','Antofagasta','Atacama','Coquimbo','Valparaíso','Libertador General Bernardo O\'Higgins',
        'Maule','Bío Bío','Araucanía','Los Ríos','Los Lagos','Aisén del General Carlos Ibañez del Campo',
        'Magallanes y Antártica Chilena','Metropolitana de Santiago'
    );
    protected static $cityFormats = array(
        '{{cityPrefix}} {{firstName}} {{lastName}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{firstName}} {{lastName}}',
    );
    protected static $streetAddressFormats = array(
        '{{streetName}} # {{buildingNumber}} ',
        '{{streetName}} # {{buildingNumber}} {{secondaryAddress}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}\n{{city}}, {{state}}",
    );
    protected static $secondaryAddressFormats = array('Dpto. ###', 'Hab. ###', 'Piso #', 'Piso ##');

    /**
     * @example ''
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'Jr.'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'Dpto. 402'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Lima'
     */
    public static function state()
    {
        return static::randomElement(static::$state);
    }
}
