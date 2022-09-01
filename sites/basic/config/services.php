<?php

return [
    'definitions' => [],
    'singletons' => [
        'rabbitmq.example.consumer' =>  \app\components\rabbitmq\ImportDataConsumer::class,
           'rabbitmq.example.consumer2' =>  \app\components\rabbitmq\MyTestConsumer::class
        
    ],
];
