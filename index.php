<?php
require_once 'vendor/autoload.php';

try {
  $client = new MongoDB\Client('mongodb://127.0.0.1:27017');

  // use nic_db
  $coll = $client->nic_db->inventory;

  // Insert documents
  // $result = $db->inventory->insertOne([
  //   'name' => 'Bob',
  //   'age' => 23,
  //   'is_alive' => FALSE,
  //   'pets' => NULL
  // ]);
  // var_dump($result);
  // echo $result->getInsertedId();

  // Query documents
  // $docs = $db->inventory->find(['name' => 'Bob'], 
  // [
  //   'projection' => ['_id' => 0]
  // ]);
  // $docs = $db->inventory->find(['name' => ['$regex' => '^B', '$options' => 'i']], 
  // [
  //   'projection' => ['_id' => 0],
  //   'sort' => ['item' => 1, 'qty' => -1]
  // ]);
  // foreach ($docs as $doc) {
  //   print_r($doc);
  // }
  // Update documents
  // $res = $coll->updateMany(
  //   ['name' => ['$regex' => '^B', '$options' => 'i']],
  //   ['$set' => ['age' => 10]]
  // );
  // print($res->getMatchedCount());
  // print($res->getModifiedCount());
  // $res = $coll->replaceOne(
  //   ['_id' => new MongoDB\BSON\ObjectId('5ec4acfa633f00005c003c22')],
  //   [
  //     'name' => 'John',
  //     'age' => 29,
  //     'is_alive' => TRUE
  //   ]
  // );
  // Delete documents
  // $res = $coll->deleteMany(
  //   ['name' => 'Bob'],
  // );
  // print($res->getDeletedCount());

  // Count
  echo $coll->countDocuments([
    // ['$or' => [['item' => 'paper'], ['status' => 'A']]]

    // '$and' => [
    //   ['status' => 'A'],
    //   ['qty' => ['$gt' => 10]]
    // ]
    // 'tags' => ['$elemMatch' => 'red']
    // 'tags' => ['$size' => 3]

    []

  ]);

}
catch (\Exception $ex) {
  echo $ex->getMessage();
}
