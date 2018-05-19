<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario13
 * Date: 12/05/2018
 * Time: 15:59
 */

namespace Infrastructure\Service;


use JMS\Serializer\Serializer;

class SerializerService{

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * SerializerService constructor.
     * @param Serializer $serialize
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    public function converter($json, $tipo){

        try{
            return $this->serializer->deserialize($json, $tipo, 'json');
        }catch (\ErrorException  $exception){
            dump($exception->getMessage()); die;
        }
    }



}