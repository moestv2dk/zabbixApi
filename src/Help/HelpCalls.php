<?php

namespace ZbxApi\Help;

class HelpCalls
{
    public function __construct()
    {

    }
    public function findFunction($function)
    {
        $function = str_replace(' ', '', str_replace('.', '_', $function));
        $methods = get_class_methods($this); // Get all methods of this class instance
        foreach ($methods as $method) {
            if (strpos($method, $function) !== false) {
                $bob[$method] = $this->$method();
                // return true;
            }

        }
        return $bob;
    }
    public function action_create(): array
    {
        $params["name"] = "string";
        $params["eventsource"] = "integer";
        $params["status"] = "integer";
        $params["esc_period"] = "integer";
        $params["def_shortdata"] = "string";
        $params["def_longdata"] = "string";
        $params["recovery_msg"] = "integer";
        $params["r_longdata"] = "string";
        $params["r_shortdata"] = "string";
        $params["userid"] = "string";
        $params["opconditions"]["0"] = "Array";
        $params["operations"]["0"] = "Array";
        $params["filter"]["evaltype"] = "integer";
        $params["filter"]["formula"] = "string";
        $params["filter"]["conditions"] = "Array";
        return array(
             "method" => "action.create",
             "params" => $params);
    }
    public function action_delete(): array
    {
        $params["actionids"]["0"] = "string";
        return array(
             "method" => "action.delete",
             "params" => $params);
    }
    public function action_get(): array
    {
        $params["output"] = "string";
        $params["selectOperations"] = "string";
        $params["selectRecoveryOperations"] = "string";
        $params["selectAcknowledgeOperations"] = "string";
        $params["selectFilter"] = "string";
        $params["selectRelatedObject"] = "string";
        $params["selectConditions"] = "string";
        return array(
             "method" => "action.get",
             "params" => $params);
    }
    public function action_update(): array
    {
        $params["actionid"] = "string";
        $params["name"] = "string";
        $params["eventsource"] = "integer";
        $params["status"] = "integer";
        $params["esc_period"] = "integer";
        $params["def_shortdata"] = "string";
        $params["def_longdata"] = "string";
        $params["recovery_msg"] = "integer";
        $params["r_longdata"] = "string";
        $params["r_shortdata"] = "string";
        $params["userid"] = "string";
        $params["opconditions"]["0"] = "Array";
        $params["operations"]["0"] = "Array";
        $params["filter"]["evaltype"] = "integer";
        $params["filter"]["formula"] = "string";
        $params["filter"]["conditions"] = "Array";
        return array(
             "method" => "action.update",
             "params" => $params);
    }
    public function alert_get(): array
    {
        $params["output"] = "string";
        $params["selectHosts"] = "string";
        $params["selectItems"] = "string";
        $params["selectTriggers"] = "string";
        $params["selectLastEvent"] = "string";
        $params["selectTags"] = "string";
        $params["selectMediatypes"] = "string";
        $params["selectUsers"] = "string";
        $params["selectImages"] = "string";
        $params["selectApplications"] = "string";
        $params["selectDiscoveryRule"] = "string";
        $params["selectGraphs"] = "string";
        $params["selectGroups"] = "string";
        $params["selectInterfaces"] = "string";
        $params["selectMacros"] = "string";
        $params["selectParentTemplates"] = "string";
        $params["selectScreens"] = "string";
        $params["selectScripts"] = "string";
        $params["selectTemplates"] = "string";
        $params["selectUserGroups"] = "string";
        $params["selectUserMedias"] = "string";
        $params["selectServices"] = "string";
        $params["selectDependencies"] = "string";
        $params["selectHttpTests"] = "string";
        $params["selectDiscoveries"] = "string";
        $params["selectInventory"] = "string";
        return array(
             "method" => "alert.get",
             "params" => $params);
    }
  
    public function apiinfo_version(): array
    {
        return array(
             "method" => "apiinfo.version",
             "params" => $params);
    }
    public function application_create(): array
    {
        $params["name"] = "string";
        $params["hostid"] = "string";
        return array(
             "method" => "application.create",
             "params" => $params);
    }
    public function application_delete(): array
    {
        $params["applicationids"]["0"] = "string";
        return array(
             "method" => "application.delete",
             "params" => $params);
    }
    public function application_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "application.get",
             "params" => $params);
    }
    public function application_massadd(): array
    {
        $params["applications"]["0"] = "Array";
        return array(
             "method" => "application.massadd",
             "params" => $params);
    }
    public function application_massremove(): array
    {
        $params["applicationids"]["0"] = "string";
        return array(
             "method" => "application.massremove",
             "params" => $params);
    }
    public function application_update(): array
    {
        $params["applicationid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "application.update",
             "params" => $params);
    }
    public function configuration_export(): array
    {
        $params["options"]["hosts"] = "Array";
        $params["options"]["templates"] = "Array";
        $params["options"]["groupids"] = "Array";
        $params["options"]["hostids"] = "Array";
        $params["options"]["graphids"] = "Array";
        $params["options"]["triggerids"] = "Array";
        $params["options"]["items"] = "Array";
        $params["options"]["applications"] = "Array";
        $params["options"]["macros"] = "Array";
        $params["options"]["proxyids"] = "Array";
        $params["options"]["mediatypeids"] = "Array";
        $params["options"]["userids"] = "Array";
        $params["options"]["usergroups"] = "Array";
        $params["options"]["images"] = "Array";
        $params["options"]["maps"] = "Array";
        $params["options"]["screens"] = "Array";
        $params["options"]["triggers"] = "Array";
        $params["options"]["httptests"] = "Array";
        $params["options"]["discoveries"] = "Array";
        $params["options"]["valuemaps"] = "Array";
        $params["options"]["times"] = "integer";
        $params["options"]["format"] = "string";
        $params["options"]["options"] = "string";
        return array(
             "method" => "configuration.export",
             "params" => $params);
    }
    public function configuration_import(): array
    {
        $params["format"] = "string";
        $params["source"] = "string";
        $params["rules"]["groups"] = "Array";
        $params["rules"]["hosts"] = "Array";
        $params["rules"]["templates"] = "Array";
        $params["rules"]["applications"] = "Array";
        $params["rules"]["items"] = "Array";
        $params["rules"]["triggers"] = "Array";
        $params["rules"]["graphs"] = "Array";
        $params["rules"]["screens"] = "Array";
        $params["rules"]["maps"] = "Array";
        $params["rules"]["valueMaps"] = "Array";
        $params["rules"]["mediaType"] = "Array";
        $params["rules"]["proxy"] = "Array";
        $params["rules"]["user"] = "Array";
        $params["rules"]["userGroup"] = "Array";
        return array(
             "method" => "configuration.import",
             "params" => $params);
    }
    public function correlation_create(): array
    {
        $params["name"] = "string";
        $params["expression"] = "string";
        return array(
             "method" => "correlation.create",
             "params" => $params);
    }
    public function correlation_delete(): array
    {
        $params["correlationids"]["0"] = "string";
        return array(
             "method" => "correlation.delete",
             "params" => $params);
    }
    public function correlation_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "correlation.get",
             "params" => $params);
    }
    public function correlation_update(): array
    {
        $params["correlationid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "correlation.update",
             "params" => $params);
    }
    public function dashboard_get(): array
    {
        $params["output"] = "string";
        $params["editable"] = "integer";
        return array(
             "method" => "dashboard.get",
             "params" => $params);
    }
    public function dashboard_getwidgets(): array
    {
        $params["output"] = "string";
        $params["dashboardids"]["0"] = "string";
        return array(
             "method" => "dashboard.getwidgets",
             "params" => $params);
    }
    public function dashboard_update(): array
    {
        $params["dashboardid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "dashboard.update",
             "params" => $params);
    }
    public function dcheck_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "dcheck.get",
             "params" => $params);
    }
    public function dcheck_update(): array
    {
        $params["dcheckid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "dcheck.update",
             "params" => $params);
    }
    public function drule_create(): array
    {
        $params["name"] = "string";
        $params["iprange"] = "string";
        $params["delay"] = "string";
        return array(
             "method" => "drule.create",
             "params" => $params);
    }
    public function drule_delete(): array
    {
        $params["druleids"]["0"] = "string";
        return array(
             "method" => "drule.delete",
             "params" => $params);
    }
    public function drule_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "drule.get",
             "params" => $params);
    }
    public function drule_update(): array
    {
        $params["druleid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "drule.update",
             "params" => $params);
    }
    public function event_acknowledge(): array
    {
        $params["eventids"]["0"] = "string";
        $params["message"] = "string";
        return array(
             "method" => "event.acknowledge",
             "params" => $params);
    }
    public function event_acknowledgeids(): array
    {
        $params["eventids"]["0"] = "string";
        $params["message"] = "string";
        return array(
             "method" => "event.acknowledgeids",
             "params" => $params);
    }
    public function event_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "event.get",
             "params" => $params);
    }
    public function event_getacknowledged(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "event.getacknowledged",
             "params" => $params);
    }
    public function event_getobjects(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "event.getobjects",
             "params" => $params);
    }
    public function event_massacknowledge(): array
    {
        $params["eventids"]["0"] = "string";
        $params["message"] = "string";
        return array(
             "method" => "event.massacknowledge",
             "params" => $params);
    }
    public function event_sync(): array
    {
        $params["eventid"] = "string";
        return array(
             "method" => "event.sync",
             "params" => $params);
    }
    public function graph_create(): array
    {
        $params["name"] = "string";
        $params["width"] = "integer";
        $params["height"] = "integer";
        $params["gitems"]["0"] = "Array";
        return array(
             "method" => "graph.create",
             "params" => $params);
    }
    public function graph_delete(): array
    {
        $params["graphids"]["0"] = "string";
        return array(
             "method" => "graph.delete",
             "params" => $params);
    }
    public function graph_get(): array
    {
        $params["output"] = "string";
        $params["selectGraphItems"] = "string";
        $params["selectHosts"] = "string";
        $params["selectItems"] = "string";
        $params["selectTemplates"] = "string";
        $params["selectTriggers"] = "string";
        return array(
             "method" => "graph.get",
             "params" => $params);
    }
    public function graph_getobjects(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "graph.getobjects",
             "params" => $params);
    }
    public function graph_update(): array
    {
        $params["graphid"] = "string";
        $params["name"] = "string";
        $params["gitems"]["0"] = "Array";
        return array(
             "method" => "graph.update",
             "params" => $params);
    }
    public function graphitem_create(): array
    {
        $params["graphid"] = "string";
        $params["itemid"] = "string";
        $params["color"] = "string";
        $params["type"] = "integer";
        return array(
             "method" => "graphitem.create",
             "params" => $params);
    }
    public function graphitem_delete(): array
    {
        $params["gitemid"]["0"] = "string";
        return array(
             "method" => "graphitem.delete",
             "params" => $params);
    }
    public function graphitem_get(): array
    {
        $params["output"] = "string";
        $params["selectGraphs"] = "string";
        $params["selectItems"] = "string";
        return array(
             "method" => "graphitem.get",
             "params" => $params);
    }
    public function graphitem_update(): array
    {
        $params["gitemid"] = "string";
        $params["color"] = "string";
        $params["type"] = "integer";
        return array(
             "method" => "graphitem.update",
             "params" => $params);
    }
    public function history_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "history.get",
             "params" => $params);
    }
    public function host_create(): array
    {
        $params["host"] = "string";
        $params["interfaces"]["0"] = "Array";
        return array(
             "method" => "host.create",
             "params" => $params);
    }
    public function host_delete(): array
    {
        $params["hostids"]["0"] = "string";
        return array(
             "method" => "host.delete",
             "params" => $params);
    }
    public function host_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "host.get",
             "params" => $params);
    }
    public function host_massadd(): array
    {
        $params["hosts"]["0"] = "Array";
        return array(
             "method" => "host.massadd",
             "params" => $params);
    }
    public function host_massremove(): array
    {
        $params["hostids"]["0"] = "string";
        return array(
             "method" => "host.massremove",
             "params" => $params);
    }
    public function host_massupdate(): array
    {
        $params["hosts"]["0"] = "Array";
        return array(
             "method" => "host.massupdate",
             "params" => $params);
    }
    public function host_update(): array
    {
        $params["hostid"] = "string";
        $params["status"] = "integer";
        return array(
             "method" => "host.update",
             "params" => $params);
    }
    public function hostgroup_create(): array
    {
        $params["name"] = "string";
        return array(
             "method" => "hostgroup.create",
             "params" => $params);
    }
    public function hostgroup_delete(): array
    {
        $params["hostids"]["0"] = "string";
        return array(
             "method" => "hostgroup.delete",
             "params" => $params);
    }
    public function hostgroup_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "hostgroup.get",
             "params" => $params);
    }
    public function hostgroup_massadd(): array
    {
        $params["hosts"]["0"] = "Array";
        return array(
             "method" => "hostgroup.massadd",
             "params" => $params);
    }
    public function hostgroup_massremove(): array
    {
        $params["hostids"]["0"] = "string";
        return array(
             "method" => "hostgroup.massremove",
             "params" => $params);
    }
    public function hostgroup_massupdate(): array
    {
        $params["hosts"]["0"] = "Array";
        return array(
             "method" => "hostgroup.massupdate",
             "params" => $params);
    }
    public function hostgroup_update(): array
    {
        $params["groupid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "hostgroup.update",
             "params" => $params);
    }
    public function hostinterface_create(): array
    {
        $params["hostid"] = "string";
        $params["dns"] = "string";
        $params["ip"] = "string";
        $params["main"] = "integer";
        $params["port"] = "integer";
        $params["type"] = "integer";
        $params["useip"] = "integer";
        return array(
             "method" => "hostinterface.create",
             "params" => $params);
    }
    public function hostinterface_delete(): array
    {
        $params["interfaceids"]["0"] = "string";
        return array(
             "method" => "hostinterface.delete",
             "params" => $params);
    }
    public function hostinterface_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "hostinterface.get",
             "params" => $params);
    }
    public function hostinterface_massadd(): array
    {
        $params["interfaces"]["0"] = "Array";
        return array(
             "method" => "hostinterface.massadd",
             "params" => $params);
    }
    public function hostinterface_massremove(): array
    {
        $params["interfaceids"]["0"] = "string";
        return array(
             "method" => "hostinterface.massremove",
             "params" => $params);
    }
    public function hostinterface_update(): array
    {
        $params["interfaceid"] = "string";
        $params["dns"] = "string";
        $params["ip"] = "string";
        $params["main"] = "integer";
        $params["port"] = "integer";
        $params["type"] = "integer";
        $params["useip"] = "integer";
        return array(
             "method" => "hostinterface.update",
             "params" => $params);
    }
    public function hostprototype_create(): array
    {
        $params["host"] = "string";
        $params["name"] = "string";
        $params["status"] = "integer";
        $params["interfaces"]["0"] = "Array";
        return array(
             "method" => "hostprototype.create",
             "params" => $params);
    }
    public function hostprototype_delete(): array
    {
        $params["hostids"]["0"] = "string";
        return array(
             "method" => "hostprototype.delete",
             "params" => $params);
    }
    public function hostprototype_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "hostprototype.get",
             "params" => $params);
    }
    public function hostprototype_massadd(): array
    {
        $params["hosts"]["0"] = "Array";
        return array(
             "method" => "hostprototype.massadd",
             "params" => $params);
    }
    public function hostprototype_massremove(): array
    {
        $params["hostids"]["0"] = "string";
        return array(
             "method" => "hostprototype.massremove",
             "params" => $params);
    }
    public function hostprototype_update(): array
    {
        $params["hostid"] = "string";
        $params["name"] = "string";
        $params["status"] = "integer";
        return array(
             "method" => "hostprototype.update",
             "params" => $params);
    }
    public function iconmap_create(): array
    {
        $params["name"] = "string";
        $params["mappings"]["0"] = "Array";
        return array(
             "method" => "iconmap.create",
             "params" => $params);
    }
    public function iconmap_delete(): array
    {
        $params["iconmapids"]["0"] = "string";
        return array(
             "method" => "iconmap.delete",
             "params" => $params);
    }
    public function iconmap_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "iconmap.get",
             "params" => $params);
    }
    public function iconmap_update(): array
    {
        $params["iconmapid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "iconmap.update",
             "params" => $params);
    }
    public function image_create(): array
    {
        $params["name"] = "string";
        $params["imagetype"] = "integer";
        return array(
             "method" => "image.create",
             "params" => $params);
    }
    public function image_delete(): array
    {
        $params["imageids"]["0"] = "string";
        return array(
             "method" => "image.delete",
             "params" => $params);
    }
    public function image_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "image.get",
             "params" => $params);
    }
    public function image_update(): array
    {
        $params["imageid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "image.update",
             "params" => $params);
    }
    public function item_create(): array
    {
        $params["name"] = "string";
        $params["key_"] = "string";
        $params["type"] = "integer";
        $params["value_type"] = "integer";
        $params["hostid"] = "string";
        $params["delay"] = "string";
        return array(
             "method" => "item.create",
             "params" => $params);
    }
    public function item_delete(): array
    {
        $params["itemids"]["0"] = "string";
        return array(
             "method" => "item.delete",
             "params" => $params);
    }
    public function item_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "item.get",
             "params" => $params);
    }
    public function item_update(): array
    {
        $params["itemid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "item.update",
             "params" => $params);
    }
    public function maintenance_create(): array
    {
        $params["name"] = "string";
        $params["active_since"] = "integer";
        $params["active_till"] = "integer";
        $params["groupids"]["0"] = "string";
        $params["hostids"]["0"] = "string";
        $params["timeperiods"]["0"] = "Array";
        return array(
             "method" => "maintenance.create",
             "params" => $params);
    }
    public function maintenance_delete(): array
    {
        $params["maintenanceids"]["0"] = "string";
        return array(
             "method" => "maintenance.delete",
             "params" => $params);
    }
    public function maintenance_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "maintenance.get",
             "params" => $params);
    }
    public function maintenance_update(): array
    {
        $params["maintenanceid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "maintenance.update",
             "params" => $params);
    }
    public function map_create(): array
    {
        $params["name"] = "string";
        $params["width"] = "integer";
        $params["height"] = "integer";
        return array(
             "method" => "map.create",
             "params" => $params);
    }
    public function map_delete(): array
    {
        $params["graphids"]["0"] = "string";
        return array(
             "method" => "map.delete",
             "params" => $params);
    }
    public function map_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "map.get",
             "params" => $params);
    }
    public function map_update(): array
    {
        $params["mapid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "map.update",
             "params" => $params);
    }
    public function mediatype_create(): array
    {
        $params["name"] = "string";
        $params["type"] = "integer";
        $params["smtp_server"] = "string";
        $params["smtp_helo"] = "string";
        $params["smtp_email"] = "string";
        $params["exec_path"] = "string";
        $params["gsm_modem"] = "string";
        $params["username"] = "string";
        $params["passwd"] = "string";
        $params["status"] = "integer";
        return array(
             "method" => "mediatype.create",
             "params" => $params);
    }
    public function mediatype_delete(): array
    {
        $params["mediatypeids"]["0"] = "string";
        return array(
             "method" => "mediatype.delete",
             "params" => $params);
    }
    public function mediatype_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "mediatype.get",
             "params" => $params);
    }
    public function mediatype_update(): array
    {
        $params["mediatypeid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "mediatype.update",
             "params" => $params);
    }
    public function proxy_create(): array
    {
        $params["host"] = "string";
        $params["status"] = "integer";
        return array(
             "method" => "proxy.create",
             "params" => $params);
    }
    public function proxy_delete(): array
    {
        $params["proxyids"]["0"] = "string";
        return array(
             "method" => "proxy.delete",
             "params" => $params);
    }
    public function proxy_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "proxy.get",
             "params" => $params);
    }
    public function proxy_massadd(): array
    {
        $params["hosts"]["0"] = "Array";
        return array(
             "method" => "proxy.massadd",
             "params" => $params);
    }
    public function proxy_massremove(): array
    {
        $params["proxyids"]["0"] = "string";
        return array(
             "method" => "proxy.massremove",
             "params" => $params);
    }
    public function proxy_massupdate(): array
    {
        $params["proxies"]["0"] = "Array";
        return array(
             "method" => "proxy.massupdate",
             "params" => $params);
    }
    public function proxy_update(): array
    {
        $params["proxyid"] = "string";
        $params["host"] = "string";
        return array(
             "method" => "proxy.update",
             "params" => $params);
    }
    public function screen_create(): array
    {
        $params["name"] = "string";
        $params["hsize"] = "integer";
        $params["vsize"] = "integer";
        return array(
             "method" => "screen.create",
             "params" => $params);
    }
    public function screen_delete(): array
    {
        $params["screenids"]["0"] = "string";
        return array(
             "method" => "screen.delete",
             "params" => $params);
    }
    public function screen_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "screen.get",
             "params" => $params);
    }
    public function screen_getitems(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "screen.getitems",
             "params" => $params);
    }
    public function screen_update(): array
    {
        $params["screenid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "screen.update",
             "params" => $params);
    }
    public function screenitem_create(): array
    {
        $params["screenid"] = "string";
        $params["resourcetype"] = "integer";
        $params["resourceid"] = "string";
        $params["width"] = "integer";
        $params["height"] = "integer";
        $params["x"] = "integer";
        $params["y"] = "integer";
        return array(
             "method" => "screenitem.create",
             "params" => $params);
    }
    public function screenitem_delete(): array
    {
        $params["screenitemids"]["0"] = "string";
        return array(
             "method" => "screenitem.delete",
             "params" => $params);
    }
    public function screenitem_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "screenitem.get",
             "params" => $params);
    }
    public function screenitem_update(): array
    {
        $params["screenitemid"] = "string";
        $params["width"] = "integer";
        $params["height"] = "integer";
        $params["x"] = "integer";
        $params["y"] = "integer";
        return array(
             "method" => "screenitem.update",
             "params" => $params);
    }
    public function service_create(): array
    {
        $params["name"] = "string";
        $params["algorithm"] = "integer";
        $params["showsla"] = "integer";
        $params["goodsla"] = "string";
        $params["sortorder"] = "integer";
        $params["status"] = "integer";
        return array(
             "method" => "service.create",
             "params" => $params);
    }
    public function service_delete(): array
    {
        $params["serviceids"]["0"] = "string";
        return array(
             "method" => "service.delete",
             "params" => $params);
    }
    public function service_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "service.get",
             "params" => $params);
    }
    public function service_update(): array
    {
        $params["serviceid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "service.update",
             "params" => $params);
    }
    public function template_create(): array
    {
        $params["host"] = "string";
        $params["name"] = "string";
        $params["status"] = "integer";
        $params["interfaces"]["0"] = "Array";
        return array(
             "method" => "template.create",
             "params" => $params);
    }
    public function template_delete(): array
    {
        $params["templateids"]["0"] = "string";
        return array(
             "method" => "template.delete",
             "params" => $params);
    }
    public function template_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "template.get",
             "params" => $params);
    }
    public function template_massadd(): array
    {
        $params["hosts"]["0"] = "Array";
        return array(
             "method" => "template.massadd",
             "params" => $params);
    }
    public function template_massremove(): array
    {
        $params["templateids"]["0"] = "string";
        return array(
             "method" => "template.massremove",
             "params" => $params);
    }
    public function template_massupdate(): array
    {
        $params["hosts"]["0"] = "Array";
        return array(
             "method" => "template.massupdate",
             "params" => $params);
    }
    public function template_update(): array
    {
        $params["templateid"] = "string";
        $params["name"] = "string";
        $params["status"] = "integer";
        return array(
             "method" => "template.update",
             "params" => $params);
    }
    public function template_getobjects(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "template.getobjects",
             "params" => $params);
    }
    public function trigger_adddependencies(): array
    {
        $params["triggerid"] = "string";
        $params["dependsOnTriggerid"] = "string";
        return array(
             "method" => "trigger.adddependencies",
             "params" => $params);
    }
    public function trigger_create(): array
    {
        $params["description"] = "string";
        $params["expression"] = "string";
        $params["priority"] = "integer";
        $params["status"] = "integer";
        $params["type"] = "integer";
        $params["dependencies"]["0"] = "string";
        return array(
             "method" => "trigger.create",
             "params" => $params);
    }
    public function trigger_deletedependencies(): array
    {
        $params["triggerid"] = "string";
        $params["dependsOnTriggerid"] = "string";
        return array(
             "method" => "trigger.deletedependencies",
             "params" => $params);
    }
    public function trigger_delete(): array
    {
        $params["triggerids"]["0"] = "string";
        return array(
             "method" => "trigger.delete",
             "params" => $params);
    }
    public function trigger_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "trigger.get",
             "params" => $params);
    }
    public function trigger_update(): array
    {
        $params["triggerid"] = "string";
        $params["description"] = "string";
        $params["expression"] = "string";
        $params["priority"] = "integer";
        $params["status"] = "integer";
        $params["type"] = "integer";
        return array(
             "method" => "trigger.update",
             "params" => $params);
    }
    public function trigger_getobjects(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "trigger.getobjects",
             "params" => $params);
    }
    public function triggerprototype_create(): array
    {
        $params["description"] = "string";
        $params["expression"] = "string";
        $params["priority"] = "integer";
        $params["status"] = "integer";
        $params["type"] = "integer";
        return array(
             "method" => "triggerprototype.create",
             "params" => $params);
    }
    public function triggerprototype_delete(): array
    {
        $params["triggerids"]["0"] = "string";
        return array(
             "method" => "triggerprototype.delete",
             "params" => $params);
    }
    public function triggerprototype_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "triggerprototype.get",
             "params" => $params);
    }
    public function triggerprototype_update(): array
    {
        $params["triggerid"] = "string";
        $params["description"] = "string";
        $params["expression"] = "string";
        $params["priority"] = "integer";
        $params["status"] = "integer";
        $params["type"] = "integer";
        return array(
             "method" => "triggerprototype.update",
             "params" => $params);
    }
    public function user_addmedia(): array
    {
        $params["users"]["0"] = "Array";
        return array(
             "method" => "user.addmedia",
             "params" => $params);
    }
    public function user_create(): array
    {
        $params["alias"] = "string";
        $params["passwd"] = "string";
        $params["type"] = "integer";
        return array(
             "method" => "user.create",
             "params" => $params);
    }
    public function user_delete(): array
    {
        $params["userids"]["0"] = "string";
        return array(
             "method" => "user.delete",
             "params" => $params);
    }
    public function user_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "user.get",
             "params" => $params);
    }
    public function user_login(): array
    {
        $params["user"] = "string";
        $params["password"] = "string";
        return array(
             "method" => "user.login",
             "params" => $params);
    }
    public function user_logout(): array
    {
        return array(
             "method" => "user.logout",
             "params" => $params);
    }
    public function user_update(): array
    {
        $params["userid"] = "string";
        $params["passwd"] = "string";
        $params["url"] = "string";
        $params["autologin"] = "integer";
        return array(
             "method" => "user.update",
             "params" => $params);
    }
    public function user_updateMedia(): array
    {
        $params["users"]["0"] = "Array";
        return array(
             "method" => "user.updateMedia",
             "params" => $params);
    }
    public function usergroup_create(): array
    {
        $params["name"] = "string";
        $params["rights"]["permission"] = "integer";
        $params["rights"]["id"] = "string";
        return array(
             "method" => "usergroup.create",
             "params" => $params);
    }
    public function usergroup_delete(): array
    {
        $params["userids"]["0"] = "string";
        return array(
             "method" => "usergroup.delete",
             "params" => $params);
    }
    public function usergroup_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "usergroup.get",
             "params" => $params);
    }
    public function usergroup_massadd(): array
    {
        $params["groups"]["0"] = "Array";
        return array(
             "method" => "usergroup.massadd",
             "params" => $params);
    }
    public function usergroup_massremove(): array
    {
        $params["userids"]["0"] = "string";
        return array(
             "method" => "usergroup.massremove",
             "params" => $params);
    }
    public function usergroup_massupdate(): array
    {
        $params["groups"]["0"] = "Array";
        return array(
             "method" => "usergroup.massupdate",
             "params" => $params);
    }
    public function usergroup_update(): array
    {
        $params["usrgrpid"] = "string";
        $params["name"] = "string";
        $params["rights"]["permission"] = "integer";
        $params["rights"]["id"] = "string";
        return array(
             "method" => "usergroup.update",
             "params" => $params);
    }
    public function valuemap_create(): array
    {
        $params["name"] = "string";
        $params["mappings"]["0"] = "Array";
        return array(
             "method" => "valuemap.create",
             "params" => $params);
    }
    public function valuemap_delete(): array
    {
        $params["valuemapids"]["0"] = "string";
        return array(
             "method" => "valuemap.delete",
             "params" => $params);
    }
    public function valuemap_get(): array
    {
        $params["output"] = "string";
        return array(
             "method" => "valuemap.get",
             "params" => $params);
    }
    public function valuemap_update(): array
    {
        $params["valuemapid"] = "string";
        $params["name"] = "string";
        return array(
             "method" => "valuemap.update",
             "params" => $params);
    }
}