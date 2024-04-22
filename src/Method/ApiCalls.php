<?php

namespace ZbxApi;

use ZbxApi\Api\ZbxApi;

/**
 * Class ApiCalls
 *
 * This class provides a set of methods to interact with the Zabbix API.
 *
 * @package ZbxApi
 */
class ApiCalls
{
    /**
        * @var ZbxApi An instance of the ZbxApi class.
        */
    private $ZbxApi;

    /**
     * @var string The ID of the host.
     */
    public $HostId;

    /**
     * ApiCalls constructor.
     */
    public function __construct()
    {
        $this->ZbxApi  = new  ZbxApi();
    }

    /**
        * Parses a given object and sends it to the Zabbix API.
        *
        * @param object $object The object to parse and send.
        *
        * @return mixed The result of the API call.
        */

    public function parseCall($object)
    {
        try {
            $object = json_encode($object);
            return $this->ZbxApi->SendRequest($object);
        } catch (\Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    public function findFunction($function, $object)
    {
        $function = str_replace(' ', '', str_replace('.', '_', $function));
        $methods = get_class_methods($this); // Get all methods of this class instance
        foreach ($methods as $method) {
            if (strpos($method, $function) !== false) {
                $result = $this->$method($object);

            }
        }
        return $this->parseCall($result);
    }
    /**
    * action_create function
    *
    * @param array $params
    * @return array
    */
    public function action_create(array $params): array
    {
        return array(
             "method" => "action.create",
             "params" => $params);
    }

    /**
    * action_delete function
    *
    * @param array $params
    * @return array
    */
    public function action_delete(array $params): array
    {
        return array(
             "method" => "action.delete",
             "params" => $params);
    }

    /**
    * action_get function
    *
    * @param array $params
    * @return array
    */
    public function action_get(array $params): array
    {
        return array(
             "method" => "action.get",
             "params" => $params);
    }

    /**
    * action_update function
    *
    * @param array $params
    * @return array
    */
    public function action_update(array $params): array
    {
        return array(
             "method" => "action.update",
             "params" => $params);
    }

    /**
    * alert_get function
    *
    * @param array $params
    * @return array
    */
    public function alert_get(array $params): array
    {
        return array(
             "method" => "alert.get",
             "params" => $params);
    }

    /**
    * apiinfo_version function
    *
    * @param array $params
    * @return array
    */
    public function apiinfo_version(array $params): array
    {
        return array(
             "method" => "apiinfo.version",
             "params" => $params);
    }

    /**
    * auditlog_get function
    *
    * @param array $params
    * @return array
    */
    public function auditlog_get(array $params): array
    {
        return array(
             "method" => "auditlog.get",
             "params" => $params);
    }

    /**
    * authentication_get function
    *
    * @param array $params
    * @return array
    */
    public function authentication_get(array $params): array
    {
        return array(
             "method" => "authentication.get",
             "params" => $params);
    }

    /**
    * authentication_update function
    *
    * @param array $params
    * @return array
    */
    public function authentication_update(array $params): array
    {
        return array(
             "method" => "authentication.update",
             "params" => $params);
    }

    /**
    * autoregistration_get function
    *
    * @param array $params
    * @return array
    */
    public function autoregistration_get(array $params): array
    {
        return array(
             "method" => "autoregistration.get",
             "params" => $params);
    }

    /**
    * autoregistration_update function
    *
    * @param array $params
    * @return array
    */
    public function autoregistration_update(array $params): array
    {
        return array(
             "method" => "autoregistration.update",
             "params" => $params);
    }

    /**
    * configuration_export function
    *
    * @param array $params
    * @return array
    */
    public function configuration_export(array $params): array
    {
        return array(
             "method" => "configuration.export",
             "params" => $params);
    }

    /**
    * configuration_import function
    *
    * @param array $params
    * @return array
    */
    public function configuration_import(array $params): array
    {
        return array(
             "method" => "configuration.import",
             "params" => $params);
    }

    /**
    * configuration_importcompare function
    *
    * @param array $params
    * @return array
    */
    public function configuration_importcompare(array $params): array
    {
        return array(
             "method" => "configuration.importcompare",
             "params" => $params);
    }

    /**
    * connector_create function
    *
    * @param array $params
    * @return array
    */
    public function connector_create(array $params): array
    {
        return array(
             "method" => "connector.create",
             "params" => $params);
    }

    /**
    * connector_delete function
    *
    * @param array $params
    * @return array
    */
    public function connector_delete(array $params): array
    {
        return array(
             "method" => "connector.delete",
             "params" => $params);
    }

    /**
    * connector_get function
    *
    * @param array $params
    * @return array
    */
    public function connector_get(array $params): array
    {
        return array(
             "method" => "connector.get",
             "params" => $params);
    }

    /**
    * connector_update function
    *
    * @param array $params
    * @return array
    */
    public function connector_update(array $params): array
    {
        return array(
             "method" => "connector.update",
             "params" => $params);
    }

    /**
    * correlation_create function
    *
    * @param array $params
    * @return array
    */
    public function correlation_create(array $params): array
    {
        return array(
             "method" => "correlation.create",
             "params" => $params);
    }

    /**
    * correlation_delete function
    *
    * @param array $params
    * @return array
    */
    public function correlation_delete(array $params): array
    {
        return array(
             "method" => "correlation.delete",
             "params" => $params);
    }

    /**
    * correlation_get function
    *
    * @param array $params
    * @return array
    */
    public function correlation_get(array $params): array
    {
        return array(
             "method" => "correlation.get",
             "params" => $params);
    }

    /**
    * correlation_update function
    *
    * @param array $params
    * @return array
    */
    public function correlation_update(array $params): array
    {
        return array(
             "method" => "correlation.update",
             "params" => $params);
    }

    /**
    * dashboard_create function
    *
    * @param array $params
    * @return array
    */
    public function dashboard_create(array $params): array
    {
        return array(
             "method" => "dashboard.create",
             "params" => $params);
    }

    /**
    * dashboard_delete function
    *
    * @param array $params
    * @return array
    */
    public function dashboard_delete(array $params): array
    {
        return array(
             "method" => "dashboard.delete",
             "params" => $params);
    }

    /**
    * dashboard_get function
    *
    * @param array $params
    * @return array
    */
    public function dashboard_get(array $params): array
    {
        return array(
             "method" => "dashboard.get",
             "params" => $params);
    }

    /**
    * dashboard_update function
    *
    * @param array $params
    * @return array
    */
    public function dashboard_update(array $params): array
    {
        return array(
             "method" => "dashboard.update",
             "params" => $params);
    }

    /**
    * dcheck_get function
    *
    * @param array $params
    * @return array
    */
    public function dcheck_get(array $params): array
    {
        return array(
             "method" => "dcheck.get",
             "params" => $params);
    }

    /**
    * dhost_get function
    *
    * @param array $params
    * @return array
    */
    public function dhost_get(array $params): array
    {
        return array(
             "method" => "dhost.get",
             "params" => $params);
    }

    /**
    * discoveryrule_copy function
    *
    * @param array $params
    * @return array
    */
    public function discoveryrule_copy(array $params): array
    {
        return array(
             "method" => "discoveryrule.copy",
             "params" => $params);
    }

    /**
    * discoveryrule_create function
    *
    * @param array $params
    * @return array
    */
    public function discoveryrule_create(array $params): array
    {
        return array(
             "method" => "discoveryrule.create",
             "params" => $params);
    }

    /**
    * discoveryrule_delete function
    *
    * @param array $params
    * @return array
    */
    public function discoveryrule_delete(array $params): array
    {
        return array(
             "method" => "discoveryrule.delete",
             "params" => $params);
    }

    /**
    * discoveryrule_get function
    *
    * @param array $params
    * @return array
    */
    public function discoveryrule_get(array $params): array
    {
        return array(
             "method" => "discoveryrule.get",
             "params" => $params);
    }

    /**
    * discoveryrule_update function
    *
    * @param array $params
    * @return array
    */
    public function discoveryrule_update(array $params): array
    {
        return array(
             "method" => "discoveryrule.update",
             "params" => $params);
    }

    /**
    * drule_create function
    *
    * @param array $params
    * @return array
    */
    public function drule_create(array $params): array
    {
        return array(
             "method" => "drule.create",
             "params" => $params);
    }

    /**
    * drule_delete function
    *
    * @param array $params
    * @return array
    */
    public function drule_delete(array $params): array
    {
        return array(
             "method" => "drule.delete",
             "params" => $params);
    }

    /**
    * drule_get function
    *
    * @param array $params
    * @return array
    */
    public function drule_get(array $params): array
    {
        return array(
             "method" => "drule.get",
             "params" => $params);
    }

    /**
    * drule_update function
    *
    * @param array $params
    * @return array
    */
    public function drule_update(array $params): array
    {
        return array(
             "method" => "drule.update",
             "params" => $params);
    }

    /**
    * dservice_get function
    *
    * @param array $params
    * @return array
    */
    public function dservice_get(array $params): array
    {
        return array(
             "method" => "dservice.get",
             "params" => $params);
    }

    /**
    * event_acknowledge function
    *
    * @param array $params
    * @return array
    */
    public function event_acknowledge(array $params): array
    {
        return array(
             "method" => "event.acknowledge",
             "params" => $params);
    }

    /**
    * event_get function
    *
    * @param array $params
    * @return array
    */
    public function event_get(array $params): array
    {
        return array(
             "method" => "event.get",
             "params" => $params);
    }

    /**
    * graph_create function
    *
    * @param array $params
    * @return array
    */
    public function graph_create(array $params): array
    {
        return array(
             "method" => "graph.create",
             "params" => $params);
    }

    /**
    * graph_delete function
    *
    * @param array $params
    * @return array
    */
    public function graph_delete(array $params): array
    {
        return array(
             "method" => "graph.delete",
             "params" => $params);
    }

    /**
    * graph_get function
    *
    * @param array $params
    * @return array
    */
    public function graph_get(array $params): array
    {
        return array(
             "method" => "graph.get",
             "params" => $params);
    }

    /**
    * graph_update function
    *
    * @param array $params
    * @return array
    */
    public function graph_update(array $params): array
    {
        return array(
             "method" => "graph.update",
             "params" => $params);
    }

    /**
    * graphitem_get function
    *
    * @param array $params
    * @return array
    */
    public function graphitem_get(array $params): array
    {
        return array(
             "method" => "graphitem.get",
             "params" => $params);
    }

    /**
    * graphprototype_create function
    *
    * @param array $params
    * @return array
    */
    public function graphprototype_create(array $params): array
    {
        return array(
             "method" => "graphprototype.create",
             "params" => $params);
    }

    /**
    * graphprototype_delete function
    *
    * @param array $params
    * @return array
    */
    public function graphprototype_delete(array $params): array
    {
        return array(
             "method" => "graphprototype.delete",
             "params" => $params);
    }

    /**
    * graphprototype_get function
    *
    * @param array $params
    * @return array
    */
    public function graphprototype_get(array $params): array
    {
        return array(
             "method" => "graphprototype.get",
             "params" => $params);
    }

    /**
    * graphprototype_update function
    *
    * @param array $params
    * @return array
    */
    public function graphprototype_update(array $params): array
    {
        return array(
             "method" => "graphprototype.update",
             "params" => $params);
    }

    /**
    * hanode_get function
    *
    * @param array $params
    * @return array
    */
    public function hanode_get(array $params): array
    {
        return array(
             "method" => "hanode.get",
             "params" => $params);
    }

    /**
    * history_clear function
    *
    * @param array $params
    * @return array
    */
    public function history_clear(array $params): array
    {
        return array(
             "method" => "history.clear",
             "params" => $params);
    }

    /**
    * history_get function
    *
    * @param array $params
    * @return array
    */
    public function history_get(array $params): array
    {
        return array(
             "method" => "history.get",
             "params" => $params);
    }

    /**
    * host_create function
    *
    * @param array $params
    * @return array
    */
    public function host_create(array $params): array
    {
        return array(
             "method" => "host.create",
             "params" => $params);
    }

    /**
    * host_delete function
    *
    * @param array $params
    * @return array
    */
    public function host_delete(array $params): array
    {
        return array(
             "method" => "host.delete",
             "params" => $params);
    }

    /**
    * host_get function
    *
    * @param array $params
    * @return array
    */
    public function host_get(array $params): array
    {
        return array(
             "method" => "host.get",
             "params" => $params);
    }

    /**
    * host_massadd function
    *
    * @param array $params
    * @return array
    */
    public function host_massadd(array $params): array
    {
        return array(
             "method" => "host.massadd",
             "params" => $params);
    }

    /**
    * host_massremove function
    *
    * @param array $params
    * @return array
    */
    public function host_massremove(array $params): array
    {
        return array(
             "method" => "host.massremove",
             "params" => $params);
    }

    /**
    * host_massupdate function
    *
    * @param array $params
    * @return array
    */
    public function host_massupdate(array $params): array
    {
        return array(
             "method" => "host.massupdate",
             "params" => $params);
    }

    /**
    * host_update function
    *
    * @param array $params
    * @return array
    */
    public function host_update(array $params): array
    {
        return array(
             "method" => "host.update",
             "params" => $params);
    }

    /**
    * hostgroup_create function
    *
    * @param array $params
    * @return array
    */
    public function hostgroup_create(array $params): array
    {
        return array(
             "method" => "hostgroup.create",
             "params" => $params);
    }

    /**
    * hostgroup_delete function
    *
    * @param array $params
    * @return array
    */
    public function hostgroup_delete(array $params): array
    {
        return array(
             "method" => "hostgroup.delete",
             "params" => $params);
    }

    /**
    * hostgroup_get function
    *
    * @param array $params
    * @return array
    */
    public function hostgroup_get(array $params): array
    {
        return array(
             "method" => "hostgroup.get",
             "params" => $params);
    }

    /**
    * hostgroup_massadd function
    *
    * @param array $params
    * @return array
    */
    public function hostgroup_massadd(array $params): array
    {
        return array(
             "method" => "hostgroup.massadd",
             "params" => $params);
    }

    /**
    * hostgroup_massremove function
    *
    * @param array $params
    * @return array
    */
    public function hostgroup_massremove(array $params): array
    {
        return array(
             "method" => "hostgroup.massremove",
             "params" => $params);
    }

    /**
    * hostgroup_massupdate function
    *
    * @param array $params
    * @return array
    */
    public function hostgroup_massupdate(array $params): array
    {
        return array(
             "method" => "hostgroup.massupdate",
             "params" => $params);
    }

    /**
    * hostgroup_propagate function
    *
    * @param array $params
    * @return array
    */
    public function hostgroup_propagate(array $params): array
    {
        return array(
             "method" => "hostgroup.propagate",
             "params" => $params);
    }

    /**
    * hostgroup_update function
    *
    * @param array $params
    * @return array
    */
    public function hostgroup_update(array $params): array
    {
        return array(
             "method" => "hostgroup.update",
             "params" => $params);
    }

    /**
    * hostinterface_create function
    *
    * @param array $params
    * @return array
    */
    public function hostinterface_create(array $params): array
    {
        return array(
             "method" => "hostinterface.create",
             "params" => $params);
    }

    /**
    * hostinterface_delete function
    *
    * @param array $params
    * @return array
    */
    public function hostinterface_delete(array $params): array
    {
        return array(
             "method" => "hostinterface.delete",
             "params" => $params);
    }

    /**
    * hostinterface_get function
    *
    * @param array $params
    * @return array
    */
    public function hostinterface_get(array $params): array
    {
        return array(
             "method" => "hostinterface.get",
             "params" => $params);
    }

    /**
    * hostinterface_massadd function
    *
    * @param array $params
    * @return array
    */
    public function hostinterface_massadd(array $params): array
    {
        return array(
             "method" => "hostinterface.massadd",
             "params" => $params);
    }

    /**
    * hostinterface_massremove function
    *
    * @param array $params
    * @return array
    */
    public function hostinterface_massremove(array $params): array
    {
        return array(
             "method" => "hostinterface.massremove",
             "params" => $params);
    }

    /**
    * hostinterface_replacehostinterfaces function
    *
    * @param array $params
    * @return array
    */
    public function hostinterface_replacehostinterfaces(array $params): array
    {
        return array(
             "method" => "hostinterface.replacehostinterfaces",
             "params" => $params);
    }

    /**
    * hostinterface_update function
    *
    * @param array $params
    * @return array
    */
    public function hostinterface_update(array $params): array
    {
        return array(
             "method" => "hostinterface.update",
             "params" => $params);
    }

    /**
    * hostprototype_create function
    *
    * @param array $params
    * @return array
    */
    public function hostprototype_create(array $params): array
    {
        return array(
             "method" => "hostprototype.create",
             "params" => $params);
    }

    /**
    * hostprototype_delete function
    *
    * @param array $params
    * @return array
    */
    public function hostprototype_delete(array $params): array
    {
        return array(
             "method" => "hostprototype.delete",
             "params" => $params);
    }

    /**
    * hostprototype_get function
    *
    * @param array $params
    * @return array
    */
    public function hostprototype_get(array $params): array
    {
        return array(
             "method" => "hostprototype.get",
             "params" => $params);
    }

    /**
    * hostprototype_update function
    *
    * @param array $params
    * @return array
    */
    public function hostprototype_update(array $params): array
    {
        return array(
             "method" => "hostprototype.update",
             "params" => $params);
    }

    /**
    * housekeeping_get function
    *
    * @param array $params
    * @return array
    */
    public function housekeeping_get(array $params): array
    {
        return array(
             "method" => "housekeeping.get",
             "params" => $params);
    }

    /**
    * housekeeping_update function
    *
    * @param array $params
    * @return array
    */
    public function housekeeping_update(array $params): array
    {
        return array(
             "method" => "housekeeping.update",
             "params" => $params);
    }

    /**
    * httptest_create function
    *
    * @param array $params
    * @return array
    */
    public function httptest_create(array $params): array
    {
        return array(
             "method" => "httptest.create",
             "params" => $params);
    }

    /**
    * httptest_delete function
    *
    * @param array $params
    * @return array
    */
    public function httptest_delete(array $params): array
    {
        return array(
             "method" => "httptest.delete",
             "params" => $params);
    }

    /**
    * httptest_get function
    *
    * @param array $params
    * @return array
    */
    public function httptest_get(array $params): array
    {
        return array(
             "method" => "httptest.get",
             "params" => $params);
    }

    /**
    * httptest_update function
    *
    * @param array $params
    * @return array
    */
    public function httptest_update(array $params): array
    {
        return array(
             "method" => "httptest.update",
             "params" => $params);
    }

    /**
    * iconmap_create function
    *
    * @param array $params
    * @return array
    */
    public function iconmap_create(array $params): array
    {
        return array(
             "method" => "iconmap.create",
             "params" => $params);
    }

    /**
    * iconmap_delete function
    *
    * @param array $params
    * @return array
    */
    public function iconmap_delete(array $params): array
    {
        return array(
             "method" => "iconmap.delete",
             "params" => $params);
    }

    /**
    * iconmap_get function
    *
    * @param array $params
    * @return array
    */
    public function iconmap_get(array $params): array
    {
        return array(
             "method" => "iconmap.get",
             "params" => $params);
    }

    /**
    * iconmap_update function
    *
    * @param array $params
    * @return array
    */
    public function iconmap_update(array $params): array
    {
        return array(
             "method" => "iconmap.update",
             "params" => $params);
    }

    /**
    * image_create function
    *
    * @param array $params
    * @return array
    */
    public function image_create(array $params): array
    {
        return array(
             "method" => "image.create",
             "params" => $params);
    }

    /**
    * image_delete function
    *
    * @param array $params
    * @return array
    */
    public function image_delete(array $params): array
    {
        return array(
             "method" => "image.delete",
             "params" => $params);
    }

    /**
    * image_get function
    *
    * @param array $params
    * @return array
    */
    public function image_get(array $params): array
    {
        return array(
             "method" => "image.get",
             "params" => $params);
    }

    /**
    * image_update function
    *
    * @param array $params
    * @return array
    */
    public function image_update(array $params): array
    {
        return array(
             "method" => "image.update",
             "params" => $params);
    }

    /**
    * item_create function
    *
    * @param array $params
    * @return array
    */
    public function item_create(array $params): array
    {
        return array(
             "method" => "item.create",
             "params" => $params);
    }

    /**
    * item_delete function
    *
    * @param array $params
    * @return array
    */
    public function item_delete(array $params): array
    {
        return array(
             "method" => "item.delete",
             "params" => $params);
    }

    /**
    * item_get function
    *
    * @param array $params
    * @return array
    */
    public function item_get(array $params): array
    {
        return array(
             "method" => "item.get",
             "params" => $params);
    }

    /**
    * item_update function
    *
    * @param array $params
    * @return array
    */
    public function item_update(array $params): array
    {
        return array(
             "method" => "item.update",
             "params" => $params);
    }

    /**
    * itemprototype_create function
    *
    * @param array $params
    * @return array
    */
    public function itemprototype_create(array $params): array
    {
        return array(
             "method" => "itemprototype.create",
             "params" => $params);
    }

    /**
    * itemprototype_delete function
    *
    * @param array $params
    * @return array
    */
    public function itemprototype_delete(array $params): array
    {
        return array(
             "method" => "itemprototype.delete",
             "params" => $params);
    }

    /**
    * itemprototype_get function
    *
    * @param array $params
    * @return array
    */
    public function itemprototype_get(array $params): array
    {
        return array(
             "method" => "itemprototype.get",
             "params" => $params);
    }

    /**
    * itemprototype_update function
    *
    * @param array $params
    * @return array
    */
    public function itemprototype_update(array $params): array
    {
        return array(
             "method" => "itemprototype.update",
             "params" => $params);
    }

    /**
    * maintenance_create function
    *
    * @param array $params
    * @return array
    */
    public function maintenance_create(array $params): array
    {
        return array(
             "method" => "maintenance.create",
             "params" => $params);
    }

    /**
    * maintenance_delete function
    *
    * @param array $params
    * @return array
    */
    public function maintenance_delete(array $params): array
    {
        return array(
             "method" => "maintenance.delete",
             "params" => $params);
    }

    /**
    * maintenance_get function
    *
    * @param array $params
    * @return array
    */
    public function maintenance_get(array $params): array
    {
        return array(
             "method" => "maintenance.get",
             "params" => $params);
    }

    /**
    * maintenance_update function
    *
    * @param array $params
    * @return array
    */
    public function maintenance_update(array $params): array
    {
        return array(
             "method" => "maintenance.update",
             "params" => $params);
    }

    /**
    * map_create function
    *
    * @param array $params
    * @return array
    */
    public function map_create(array $params): array
    {
        return array(
             "method" => "map.create",
             "params" => $params);
    }

    /**
    * map_delete function
    *
    * @param array $params
    * @return array
    */
    public function map_delete(array $params): array
    {
        return array(
             "method" => "map.delete",
             "params" => $params);
    }

    /**
    * map_get function
    *
    * @param array $params
    * @return array
    */
    public function map_get(array $params): array
    {
        return array(
             "method" => "map.get",
             "params" => $params);
    }

    /**
    * map_update function
    *
    * @param array $params
    * @return array
    */
    public function map_update(array $params): array
    {
        return array(
             "method" => "map.update",
             "params" => $params);
    }

    /**
    * mediatype_create function
    *
    * @param array $params
    * @return array
    */
    public function mediatype_create(array $params): array
    {
        return array(
             "method" => "mediatype.create",
             "params" => $params);
    }

    /**
    * mediatype_delete function
    *
    * @param array $params
    * @return array
    */
    public function mediatype_delete(array $params): array
    {
        return array(
             "method" => "mediatype.delete",
             "params" => $params);
    }

    /**
    * mediatype_get function
    *
    * @param array $params
    * @return array
    */
    public function mediatype_get(array $params): array
    {
        return array(
             "method" => "mediatype.get",
             "params" => $params);
    }

    /**
    * mediatype_update function
    *
    * @param array $params
    * @return array
    */
    public function mediatype_update(array $params): array
    {
        return array(
             "method" => "mediatype.update",
             "params" => $params);
    }

    /**
    * module_create function
    *
    * @param array $params
    * @return array
    */
    public function module_create(array $params): array
    {
        return array(
             "method" => "module.create",
             "params" => $params);
    }

    /**
    * module_delete function
    *
    * @param array $params
    * @return array
    */
    public function module_delete(array $params): array
    {
        return array(
             "method" => "module.delete",
             "params" => $params);
    }

    /**
    * module_get function
    *
    * @param array $params
    * @return array
    */
    public function module_get(array $params): array
    {
        return array(
             "method" => "module.get",
             "params" => $params);
    }

    /**
    * module_update function
    *
    * @param array $params
    * @return array
    */
    public function module_update(array $params): array
    {
        return array(
             "method" => "module.update",
             "params" => $params);
    }

    /**
    * problem_get function
    *
    * @param array $params
    * @return array
    */
    public function problem_get(array $params): array
    {
        return array(
             "method" => "problem.get",
             "params" => $params);
    }

    /**
    * proxy_create function
    *
    * @param array $params
    * @return array
    */
    public function proxy_create(array $params): array
    {
        return array(
             "method" => "proxy.create",
             "params" => $params);
    }

    /**
    * proxy_delete function
    *
    * @param array $params
    * @return array
    */
    public function proxy_delete(array $params): array
    {
        return array(
             "method" => "proxy.delete",
             "params" => $params);
    }

    /**
    * proxy_get function
    *
    * @param array $params
    * @return array
    */
    public function proxy_get(array $params): array
    {
        return array(
             "method" => "proxy.get",
             "params" => $params);
    }

    /**
    * proxy_update function
    *
    * @param array $params
    * @return array
    */
    public function proxy_update(array $params): array
    {
        return array(
             "method" => "proxy.update",
             "params" => $params);
    }

    /**
    * regexp_create function
    *
    * @param array $params
    * @return array
    */
    public function regexp_create(array $params): array
    {
        return array(
             "method" => "regexp.create",
             "params" => $params);
    }

    /**
    * regexp_delete function
    *
    * @param array $params
    * @return array
    */
    public function regexp_delete(array $params): array
    {
        return array(
             "method" => "regexp.delete",
             "params" => $params);
    }

    /**
    * regexp_get function
    *
    * @param array $params
    * @return array
    */
    public function regexp_get(array $params): array
    {
        return array(
             "method" => "regexp.get",
             "params" => $params);
    }

    /**
    * regexp_update function
    *
    * @param array $params
    * @return array
    */
    public function regexp_update(array $params): array
    {
        return array(
             "method" => "regexp.update",
             "params" => $params);
    }

    /**
    * report_create function
    *
    * @param array $params
    * @return array
    */
    public function report_create(array $params): array
    {
        return array(
             "method" => "report.create",
             "params" => $params);
    }

    /**
    * report_delete function
    *
    * @param array $params
    * @return array
    */
    public function report_delete(array $params): array
    {
        return array(
             "method" => "report.delete",
             "params" => $params);
    }

    /**
    * report_get function
    *
    * @param array $params
    * @return array
    */
    public function report_get(array $params): array
    {
        return array(
             "method" => "report.get",
             "params" => $params);
    }

    /**
    * report_update function
    *
    * @param array $params
    * @return array
    */
    public function report_update(array $params): array
    {
        return array(
             "method" => "report.update",
             "params" => $params);
    }

    /**
    * role_create function
    *
    * @param array $params
    * @return array
    */
    public function role_create(array $params): array
    {
        return array(
             "method" => "role.create",
             "params" => $params);
    }

    /**
    * role_delete function
    *
    * @param array $params
    * @return array
    */
    public function role_delete(array $params): array
    {
        return array(
             "method" => "role.delete",
             "params" => $params);
    }

    /**
    * role_get function
    *
    * @param array $params
    * @return array
    */
    public function role_get(array $params): array
    {
        return array(
             "method" => "role.get",
             "params" => $params);
    }

    /**
    * role_update function
    *
    * @param array $params
    * @return array
    */
    public function role_update(array $params): array
    {
        return array(
             "method" => "role.update",
             "params" => $params);
    }

    /**
    * script_create function
    *
    * @param array $params
    * @return array
    */
    public function script_create(array $params): array
    {
        return array(
             "method" => "script.create",
             "params" => $params);
    }

    /**
    * script_delete function
    *
    * @param array $params
    * @return array
    */
    public function script_delete(array $params): array
    {
        return array(
             "method" => "script.delete",
             "params" => $params);
    }

    /**
    * script_execute function
    *
    * @param array $params
    * @return array
    */
    public function script_execute(array $params): array
    {
        return array(
             "method" => "script.execute",
             "params" => $params);
    }

    /**
    * script_get function
    *
    * @param array $params
    * @return array
    */
    public function script_get(array $params): array
    {
        return array(
             "method" => "script.get",
             "params" => $params);
    }

    /**
    * script_getscriptsbyevents function
    *
    * @param array $params
    * @return array
    */
    public function script_getscriptsbyevents(array $params): array
    {
        return array(
             "method" => "script.getscriptsbyevents",
             "params" => $params);
    }

    /**
    * script_getscriptsbyhosts function
    *
    * @param array $params
    * @return array
    */
    public function script_getscriptsbyhosts(array $params): array
    {
        return array(
             "method" => "script.getscriptsbyhosts",
             "params" => $params);
    }

    /**
    * script_update function
    *
    * @param array $params
    * @return array
    */
    public function script_update(array $params): array
    {
        return array(
             "method" => "script.update",
             "params" => $params);
    }

    /**
    * service_create function
    *
    * @param array $params
    * @return array
    */
    public function service_create(array $params): array
    {
        return array(
             "method" => "service.create",
             "params" => $params);
    }

    /**
    * service_delete function
    *
    * @param array $params
    * @return array
    */
    public function service_delete(array $params): array
    {
        return array(
             "method" => "service.delete",
             "params" => $params);
    }

    /**
    * service_get function
    *
    * @param array $params
    * @return array
    */
    public function service_get(array $params): array
    {
        return array(
             "method" => "service.get",
             "params" => $params);
    }

    /**
    * service_update function
    *
    * @param array $params
    * @return array
    */
    public function service_update(array $params): array
    {
        return array(
             "method" => "service.update",
             "params" => $params);
    }

    /**
    * settings_get function
    *
    * @param array $params
    * @return array
    */
    public function settings_get(array $params): array
    {
        return array(
             "method" => "settings.get",
             "params" => $params);
    }

    /**
    * settings_update function
    *
    * @param array $params
    * @return array
    */
    public function settings_update(array $params): array
    {
        return array(
             "method" => "settings.update",
             "params" => $params);
    }

    /**
    * sla_create function
    *
    * @param array $params
    * @return array
    */
    public function sla_create(array $params): array
    {
        return array(
             "method" => "sla.create",
             "params" => $params);
    }

    /**
    * sla_delete function
    *
    * @param array $params
    * @return array
    */
    public function sla_delete(array $params): array
    {
        return array(
             "method" => "sla.delete",
             "params" => $params);
    }

    /**
    * sla_get function
    *
    * @param array $params
    * @return array
    */
    public function sla_get(array $params): array
    {
        return array(
             "method" => "sla.get",
             "params" => $params);
    }

    /**
    * sla_getsli function
    *
    * @param array $params
    * @return array
    */
    public function sla_getsli(array $params): array
    {
        return array(
             "method" => "sla.getsli",
             "params" => $params);
    }

    /**
    * sla_update function
    *
    * @param array $params
    * @return array
    */
    public function sla_update(array $params): array
    {
        return array(
             "method" => "sla.update",
             "params" => $params);
    }

    /**
    * task_create function
    *
    * @param array $params
    * @return array
    */
    public function task_create(array $params): array
    {
        return array(
             "method" => "task.create",
             "params" => $params);
    }

    /**
    * task_get function
    *
    * @param array $params
    * @return array
    */
    public function task_get(array $params): array
    {
        return array(
             "method" => "task.get",
             "params" => $params);
    }

    /**
    * template_create function
    *
    * @param array $params
    * @return array
    */
    public function template_create(array $params): array
    {
        return array(
             "method" => "template.create",
             "params" => $params);
    }

    /**
    * template_delete function
    *
    * @param array $params
    * @return array
    */
    public function template_delete(array $params): array
    {
        return array(
             "method" => "template.delete",
             "params" => $params);
    }

    /**
    * template_get function
    *
    * @param array $params
    * @return array
    */
    public function template_get(array $params): array
    {
        return array(
             "method" => "template.get",
             "params" => $params);
    }

    /**
    * template_massadd function
    *
    * @param array $params
    * @return array
    */
    public function template_massadd(array $params): array
    {
        return array(
             "method" => "template.massadd",
             "params" => $params);
    }

    /**
    * template_massremove function
    *
    * @param array $params
    * @return array
    */
    public function template_massremove(array $params): array
    {
        return array(
             "method" => "template.massremove",
             "params" => $params);
    }

    /**
    * template_massupdate function
    *
    * @param array $params
    * @return array
    */
    public function template_massupdate(array $params): array
    {
        return array(
             "method" => "template.massupdate",
             "params" => $params);
    }

    /**
    * template_update function
    *
    * @param array $params
    * @return array
    */
    public function template_update(array $params): array
    {
        return array(
             "method" => "template.update",
             "params" => $params);
    }

    /**
    * templatedashboard_create function
    *
    * @param array $params
    * @return array
    */
    public function templatedashboard_create(array $params): array
    {
        return array(
             "method" => "templatedashboard.create",
             "params" => $params);
    }

    /**
    * templatedashboard_delete function
    *
    * @param array $params
    * @return array
    */
    public function templatedashboard_delete(array $params): array
    {
        return array(
             "method" => "templatedashboard.delete",
             "params" => $params);
    }

    /**
    * templatedashboard_get function
    *
    * @param array $params
    * @return array
    */
    public function templatedashboard_get(array $params): array
    {
        return array(
             "method" => "templatedashboard.get",
             "params" => $params);
    }

    /**
    * templatedashboard_update function
    *
    * @param array $params
    * @return array
    */
    public function templatedashboard_update(array $params): array
    {
        return array(
             "method" => "templatedashboard.update",
             "params" => $params);
    }

    /**
    * templategroup_create function
    *
    * @param array $params
    * @return array
    */
    public function templategroup_create(array $params): array
    {
        return array(
             "method" => "templategroup.create",
             "params" => $params);
    }

    /**
    * templategroup_delete function
    *
    * @param array $params
    * @return array
    */
    public function templategroup_delete(array $params): array
    {
        return array(
             "method" => "templategroup.delete",
             "params" => $params);
    }

    /**
    * templategroup_get function
    *
    * @param array $params
    * @return array
    */
    public function templategroup_get(array $params): array
    {
        return array(
             "method" => "templategroup.get",
             "params" => $params);
    }

    /**
    * templategroup_massadd function
    *
    * @param array $params
    * @return array
    */
    public function templategroup_massadd(array $params): array
    {
        return array(
             "method" => "templategroup.massadd",
             "params" => $params);
    }

    /**
    * templategroup_massremove function
    *
    * @param array $params
    * @return array
    */
    public function templategroup_massremove(array $params): array
    {
        return array(
             "method" => "templategroup.massremove",
             "params" => $params);
    }

    /**
    * templategroup_massupdate function
    *
    * @param array $params
    * @return array
    */
    public function templategroup_massupdate(array $params): array
    {
        return array(
             "method" => "templategroup.massupdate",
             "params" => $params);
    }

    /**
    * templategroup_propagate function
    *
    * @param array $params
    * @return array
    */
    public function templategroup_propagate(array $params): array
    {
        return array(
             "method" => "templategroup.propagate",
             "params" => $params);
    }

    /**
    * templategroup_update function
    *
    * @param array $params
    * @return array
    */
    public function templategroup_update(array $params): array
    {
        return array(
             "method" => "templategroup.update",
             "params" => $params);
    }

    /**
    * token_create function
    *
    * @param array $params
    * @return array
    */
    public function token_create(array $params): array
    {
        return array(
             "method" => "token.create",
             "params" => $params);
    }

    /**
    * token_delete function
    *
    * @param array $params
    * @return array
    */
    public function token_delete(array $params): array
    {
        return array(
             "method" => "token.delete",
             "params" => $params);
    }

    /**
    * token_generate function
    *
    * @param array $params
    * @return array
    */
    public function token_generate(array $params): array
    {
        return array(
             "method" => "token.generate",
             "params" => $params);
    }

    /**
    * token_get function
    *
    * @param array $params
    * @return array
    */
    public function token_get(array $params): array
    {
        return array(
             "method" => "token.get",
             "params" => $params);
    }

    /**
    * token_update function
    *
    * @param array $params
    * @return array
    */
    public function token_update(array $params): array
    {
        return array(
             "method" => "token.update",
             "params" => $params);
    }

    /**
    * trend_get function
    *
    * @param array $params
    * @return array
    */
    public function trend_get(array $params): array
    {
        return array(
             "method" => "trend.get",
             "params" => $params);
    }

    /**
    * trigger_create function
    *
    * @param array $params
    * @return array
    */
    public function trigger_create(array $params): array
    {
        return array(
             "method" => "trigger.create",
             "params" => $params);
    }

    /**
    * trigger_delete function
    *
    * @param array $params
    * @return array
    */
    public function trigger_delete(array $params): array
    {
        return array(
             "method" => "trigger.delete",
             "params" => $params);
    }

    /**
    * trigger_get function
    *
    * @param array $params
    * @return array
    */
    public function trigger_get(array $params): array
    {
        return array(
             "method" => "trigger.get",
             "params" => $params);
    }

    /**
    * trigger_update function
    *
    * @param array $params
    * @return array
    */
    public function trigger_update(array $params): array
    {
        return array(
             "method" => "trigger.update",
             "params" => $params);
    }

    /**
    * triggerprototype_create function
    *
    * @param array $params
    * @return array
    */
    public function triggerprototype_create(array $params): array
    {
        return array(
             "method" => "triggerprototype.create",
             "params" => $params);
    }

    /**
    * triggerprototype_delete function
    *
    * @param array $params
    * @return array
    */
    public function triggerprototype_delete(array $params): array
    {
        return array(
             "method" => "triggerprototype.delete",
             "params" => $params);
    }

    /**
    * triggerprototype_get function
    *
    * @param array $params
    * @return array
    */
    public function triggerprototype_get(array $params): array
    {
        return array(
             "method" => "triggerprototype.get",
             "params" => $params);
    }

    /**
    * triggerprototype_update function
    *
    * @param array $params
    * @return array
    */
    public function triggerprototype_update(array $params): array
    {
        return array(
             "method" => "triggerprototype.update",
             "params" => $params);
    }

    /**
    * user_checkAuthentication function
    *
    * @param array $params
    * @return array
    */
    public function user_checkAuthentication(array $params): array
    {
        return array(
             "method" => "user.checkAuthentication",
             "params" => $params);
    }

    /**
    * user_create function
    *
    * @param array $params
    * @return array
    */
    public function user_create(array $params): array
    {
        return array(
             "method" => "user.create",
             "params" => $params);
    }

    /**
    * user_delete function
    *
    * @param array $params
    * @return array
    */
    public function user_delete(array $params): array
    {
        return array(
             "method" => "user.delete",
             "params" => $params);
    }

    /**
    * user_get function
    *
    * @param array $params
    * @return array
    */
    public function user_get(array $params): array
    {
        return array(
             "method" => "user.get",
             "params" => $params);
    }

    /**
    * user_login function
    *
    * @param array $params
    * @return array
    */
    public function user_login(array $params): array
    {
        return array(
             "method" => "user.login",
             "params" => $params);
    }

    /**
    * user_logout function
    *
    * @param array $params
    * @return array
    */
    public function user_logout(array $params): array
    {
        return array(
             "method" => "user.logout",
             "params" => $params);
    }

    /**
    * user_provision function
    *
    * @param array $params
    * @return array
    */
    public function user_provision(array $params): array
    {
        return array(
             "method" => "user.provision",
             "params" => $params);
    }

    /**
    * user_unblock function
    *
    * @param array $params
    * @return array
    */
    public function user_unblock(array $params): array
    {
        return array(
             "method" => "user.unblock",
             "params" => $params);
    }

    /**
    * user_update function
    *
    * @param array $params
    * @return array
    */
    public function user_update(array $params): array
    {
        return array(
             "method" => "user.update",
             "params" => $params);
    }

    /**
    * userdirectory_create function
    *
    * @param array $params
    * @return array
    */
    public function userdirectory_create(array $params): array
    {
        return array(
             "method" => "userdirectory.create",
             "params" => $params);
    }

    /**
    * userdirectory_delete function
    *
    * @param array $params
    * @return array
    */
    public function userdirectory_delete(array $params): array
    {
        return array(
             "method" => "userdirectory.delete",
             "params" => $params);
    }

    /**
    * userdirectory_get function
    *
    * @param array $params
    * @return array
    */
    public function userdirectory_get(array $params): array
    {
        return array(
             "method" => "userdirectory.get",
             "params" => $params);
    }

    /**
    * userdirectory_test function
    *
    * @param array $params
    * @return array
    */
    public function userdirectory_test(array $params): array
    {
        return array(
             "method" => "userdirectory.test",
             "params" => $params);
    }

    /**
    * userdirectory_update function
    *
    * @param array $params
    * @return array
    */
    public function userdirectory_update(array $params): array
    {
        return array(
             "method" => "userdirectory.update",
             "params" => $params);
    }

    /**
    * usergroup_create function
    *
    * @param array $params
    * @return array
    */
    public function usergroup_create(array $params): array
    {
        return array(
             "method" => "usergroup.create",
             "params" => $params);
    }

    /**
    * usergroup_delete function
    *
    * @param array $params
    * @return array
    */
    public function usergroup_delete(array $params): array
    {
        return array(
             "method" => "usergroup.delete",
             "params" => $params);
    }

    /**
    * usergroup_get function
    *
    * @param array $params
    * @return array
    */
    public function usergroup_get(array $params): array
    {
        return array(
             "method" => "usergroup.get",
             "params" => $params);
    }

    /**
    * usergroup_update function
    *
    * @param array $params
    * @return array
    */
    public function usergroup_update(array $params): array
    {
        return array(
             "method" => "usergroup.update",
             "params" => $params);
    }

    /**
    * usermacro_create function
    *
    * @param array $params
    * @return array
    */
    public function usermacro_create(array $params): array
    {
        return array(
             "method" => "usermacro.create",
             "params" => $params);
    }

    /**
    * usermacro_createglobal function
    *
    * @param array $params
    * @return array
    */
    public function usermacro_createglobal(array $params): array
    {
        return array(
             "method" => "usermacro.createglobal",
             "params" => $params);
    }

    /**
    * usermacro_delete function
    *
    * @param array $params
    * @return array
    */
    public function usermacro_delete(array $params): array
    {
        return array(
             "method" => "usermacro.delete",
             "params" => $params);
    }

    /**
    * usermacro_deleteglobal function
    *
    * @param array $params
    * @return array
    */
    public function usermacro_deleteglobal(array $params): array
    {
        return array(
             "method" => "usermacro.deleteglobal",
             "params" => $params);
    }

    /**
    * usermacro_get function
    *
    * @param array $params
    * @return array
    */
    public function usermacro_get(array $params): array
    {
        return array(
             "method" => "usermacro.get",
             "params" => $params);
    }

    /**
    * usermacro_update function
    *
    * @param array $params
    * @return array
    */
    public function usermacro_update(array $params): array
    {
        return array(
             "method" => "usermacro.update",
             "params" => $params);
    }

    /**
    * usermacro_updateglobal function
    *
    * @param array $params
    * @return array
    */
    public function usermacro_updateglobal(array $params): array
    {
        return array(
             "method" => "usermacro.updateglobal",
             "params" => $params);
    }

    /**
    * valuemap_create function
    *
    * @param array $params
    * @return array
    */
    public function valuemap_create(array $params): array
    {
        return array(
             "method" => "valuemap.create",
             "params" => $params);
    }

    /**
    * valuemap_delete function
    *
    * @param array $params
    * @return array
    */
    public function valuemap_delete(array $params): array
    {
        return array(
             "method" => "valuemap.delete",
             "params" => $params);
    }

    /**
    * valuemap_get function
    *
    * @param array $params
    * @return array
    */
    public function valuemap_get(array $params): array
    {
        return array(
             "method" => "valuemap.get",
             "params" => $params);
    }

    /**
    * valuemap_update function
    *
    * @param array $params
    * @return array
    */
    public function valuemap_update(array $params): array
    {
        return array(
             "method" => "valuemap.update",
             "params" => $params);
    }
}