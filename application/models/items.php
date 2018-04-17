<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Initial time model.
 *
 * Keeps a record of MAC addresses and when they were registered when passed from Icomera.
 * This allows for the situation when user has registered on the train and immediately transfered to the station
 * and still needs some Internet time to complete email validation.
 *
 * @package    Spark
 * @copyright  2003-2016 WifiSpark Limited. All rights reserved.
 * @license    http://www.wifispark.com/license/spark-1.00.txt  SPARK License 1.00
 * @version    GIT: $Id$
 */

class Items extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /* addToList()
    *
    * checks ammount in list, delete if 10 items, adds item
    */
    public function addToList($item) {

      var_dump($this->getList());

      $data = array(
       'item' => $item ,
       'time' => time()
      );

        $this->db->insert('items', $data);
        $ap_name = $tables[0];
        return $ap_name;
    }

    /* getList()
    *
    * gets list of items
    */
    public function getList() {
      $result = $this->db->query('SELECT * from items;');
      return $result;
    }
}
