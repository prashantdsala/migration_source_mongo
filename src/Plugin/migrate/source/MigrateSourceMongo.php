<?php declare(strict_types = 1);

namespace Drupal\migrate_source_mongo\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\SourcePluginBase;
use Drupal\migrate\Row;
use MongoDB\Client as Mongo;

/**
 * The 'migrate_source_mongo' source plugin.
 *
 * @MigrateSource(
 *   id = "migrate_source_mongo",
 *   source_module = "migrate_source_mongo",
 * )
 */
final class MigrateSourceMongo extends SourcePluginBase {

   /**
   * {@inheritdoc}
   */
  public function query() {
    // Set source.
    // $db_string = 'mongodb://localhost:27017/test';
    // $mongo = new \MongoDB\Driver\Manager($db_string);

    // //Set Query filters & Options
    // $id           = new \MongoDB\BSON\ObjectId("53fd690a7f8b9a181da5134e");
    // $filter      = ['_id' => $id];
    // //$filter      = [];
    // $options = [];

    // // Query mongo database
    // $query = new \MongoDB\Driver\Query($filter, $options);
    // $rows   = $mongo->executeQuery('test.PostCollection', $query)->toArray();
    // return $rows;
  }

  /**
   * Returns the Posts fields to be migrated.
   *
   * @return array
   *   Associative array having field name as key and description as value.
   */
  protected function postFields() {
    // $fields = array(
    //   '_id' => $this->t('Post ID'),
    //   'title' => $this->t('Title'),
    //   'Description' => $this->t('Description'),
    // );
    // return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    // $fields = $this->postFields();
    // return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function prepareRow(Row $row) {
    // $title = $row->getSourceProperty('title');
    // $node_title = $title == '' ? 'Posts' : 'Posts';
    // $row->setSourceProperty('title', $node_title);

    // return parent::prepareRow($row);
  }

  /**
   * {@inheritdoc}
   */
  public function bundleMigrationRequired() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function entityTypeId() {
    return 'node';
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    $source_key = array(
      '_id' => array(
        'type' => 'varchar',
        'length' => 24,
        'not null' => TRUE,
        'description' => 'MongoDB ID field.',
      ),
    );

    return $source_key;
  }

  /**
   * Get Mongo DB Connection.
  */
  // public function getDatabaseConnection() {
  //   // Get connection to db.
  //   $mongo = new Mongo("mongodb://".$user.":".$password."@".$ip.":".$port."/".$database_name);
  //   $database = $mongo->{$database_name};
  //   return $database;
  // }


}
