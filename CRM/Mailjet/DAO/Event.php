<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.4                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2013                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/Mailjet/Event.xml
 * DO NOT EDIT.  Generated by GenCode.php
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Mailjet_DAO_Event extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   * @static
   */
  static $_tableName = 'civicrm_mailing_mailjet_event';
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   * @static
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   * @static
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   * @static
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   * @static
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   * @static
   */
  static $_log = true;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to mailing ID and customcampiang on Mailjet
   *
   * @var int unsigned
   */
  public $mailing_id;
  /**
   * Email address of recipient triggering the event
   *
   * @var string
   */
  public $email;
  /**
   *
   * @var string
   */
  public $event;
  /**
   * The mailjet campaing _id
   *
   * @var int unsigned
   */
  public $mj_campaign_id;
  /**
   * The mailjet campaing _id
   *
   * @var int unsigned
   */
  public $mj_contact_id;
  /**
   * Unix timestamp of event (free of timezone concerns)
   *
   * @var datetime
   */
  public $time;
  /**
   * Mailjet row data
   *
   * @var text
   */
  public $data;
  /**
   *
   * @var datetime
   */
  public $created_date;
  /**
   * class constructor
   *
   * @access public
   * @return civicrm_mailing_mailjet_event
   */
  function __construct()
  {
    $this->__table = 'civicrm_mailing_mailjet_event';
    parent::__construct();
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => true,
        ) ,
        'mailing_id' => array(
          'name' => 'mailing_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailing ID') ,
        ) ,
        'email' => array(
          'name' => 'email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Email') ,
          'required' => true,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'export' => true,
          'where' => 'civicrm_mailing_mailjet_event.email',
          'headerPattern' => '',
          'dataPattern' => '',
        ) ,
        'event' => array(
          'name' => 'event',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mailjet event type') ,
          'required' => true,
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'export' => true,
          'where' => 'civicrm_mailing_mailjet_event.event',
          'headerPattern' => '',
          'dataPattern' => '',
        ) ,
        'mj_campaign_id' => array(
          'name' => 'mj_campaign_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailjet Campaign ID') ,
          'export' => true,
          'where' => 'civicrm_mailing_mailjet_event.mj_campaign_id',
          'headerPattern' => '',
          'dataPattern' => '',
        ) ,
        'mj_contact_id' => array(
          'name' => 'mj_contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mailjet Contact ID') ,
          'export' => true,
          'where' => 'civicrm_mailing_mailjet_event.mj_contact_id',
          'headerPattern' => '',
          'dataPattern' => '',
        ) ,
        'time' => array(
          'name' => 'time',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Time') ,
          'required' => true,
        ) ,
        'data' => array(
          'name' => 'data',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Data') ,
          'rows' => 20,
          'cols' => 80,
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Created Date') ,
          'required' => true,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'mailing_id' => 'mailing_id',
        'email' => 'email',
        'event' => 'event',
        'mj_campaign_id' => 'mj_campaign_id',
        'mj_contact_id' => 'mj_contact_id',
        'time' => 'time',
        'data' => 'data',
        'created_date' => 'created_date',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the names of this table
   *
   * @access public
   * @static
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * returns if this table needs to be logged
   *
   * @access public
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * returns the list of fields that can be imported
   *
   * @access public
   * return array
   * @static
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['mailing_mailjet_event'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['mailing_mailjet_event'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
