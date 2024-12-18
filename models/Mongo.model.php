<?php

use MongoDB\BSON\ObjectId;
use MongoDB\BSON\UTCDateTime;

class Mongo
{

    public static function insertOne(string $collection, array $data)
    {
        global $db;
        $collection = $db->{$collection};
        $result = $collection->insertOne($data);
        return $result->getInsertedId();
    }

    public static function updateOne(string $collection, array $filter, array $update)
    {
        global $db;
        $collection = $db->{$collection};
        $result = $collection->updateOne($filter, $update);
        return $result->getModifiedCount();
    }

    public static function findOne(string $collection, array $filter)
    {
        global $db;
        $collection = $db->{$collection};
        $res = $collection->findOne(
            $filter
        );

        if (!$res) {
            return null;
        }

        $collectionName = substr($collection->getCollectionName(), 0, -1);
        return Mongo::getModel(
            ucfirst(
                $collectionName
            ),
            [$res]
        );
    }

    public static function find(string $collection, array $filter = [], array $options = [])
    {
        global $db;
        $collection = $db->{$collection};
        $result = $collection->find($filter, $options);
        $result = $result->toArray();

        $collectionName = substr($collection->getCollectionName(), 0, -1);
        return Mongo::getModel(
            ucfirst(
                $collectionName
            ),
            $result
        );
    }

    public static function deleteOne(string $collection, array $filter)
    {
        global $db;
        $collection = $db->{$collection};
        $result = $collection->deleteOne($filter);
        return $result->getDeletedCount();
    }

    public static function deleteMany(string $collection, array $filter)
    {
        global $db;
        $collection = $db->{$collection};
        $result = $collection->deleteMany($filter);
        return $result->getDeletedCount();
    }

    public static function aggregate(string $collection, array $pipeline)
    {
        global $db;
        $collection = $db->{$collection};
        $res = $collection->aggregate($pipeline)->toArray();

        $collectionName = substr($collection->getCollectionName(), 0, -1);

        return Mongo::getModel(
            ucfirst(
                $collectionName
            ),
            $res
        );
    }

    public static function count(string $collection, array $filter = [])
    {
        global $db;
        $collection = $db->{$collection};
        return $collection->count($filter);
    }

    public static function distinct(string $collection, string $field, array $filter = [])
    {
        global $db;
        $collection = $db->{$collection};
        return Mongo::getModel(
            ucfirst(
                $collection->getCollectionName()
            ),
            $collection->distinct($field, $filter)
        );
    }

    public static function bulkWrite(string $collection, array $operations)
    {
        global $db;
        $collection = $db->{$collection};
        return $collection->bulkWrite($operations);
    }

    public static function createIndex(string $collection, array $keys, array $options = [])
    {
        global $db;
        $collection = $db->{$collection};
        return $collection->createIndex($keys, $options);
    }
    public static function getModel(
        string $class,
        $data = []
    ) {

        include_once dirname(__DIR__) . '/models/' . $class . '.model.php';

        $newData = [];

        foreach ($data as $document) {
            $document['_id'] = $document['_id'] ? (new ObjectId($document['_id']))->__toString() : (new ObjectId())->__toString();

            $document  = json_decode(json_encode($document), true);

            $document['createdAt'] = new UTCDateTime($document['createdAt']["\$date"]["\$numberLong"]);
            $document['updatedAt'] = new UTCDateTime($document['updatedAt']["\$date"]["\$numberLong"]);
            $constructorParmasObjArray =  (new ReflectionClass($class))->getConstructor()->getParameters();
            $constructorArgs = [];

            foreach ($constructorParmasObjArray as $param) {
                $constructorArgs[$param->name] = $document[$param->name];
            }


            $newData[] = new $class(
                ...array_values($constructorArgs)
            );
        }

        return $newData;
    }
}
