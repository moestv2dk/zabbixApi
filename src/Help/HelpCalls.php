<?php

namespace ZbxApi\Help;

class HelpCalls
{
    public function action_create(): array
    {
        return array(
        "method" => "action.create",
        "params" => array(
        "name" => "string",
        "eventsource" => "integer",
        "status" => "integer",
        "esc_period" => "integer",
        "def_shortdata" => "string",
        "def_longdata" => "string",
        "recovery_msg" => "integer",
        "r_shortdata" => "string",
        "r_longdata" => "string",
        "filter" => "Array",
        "operations" => "Array",
        "recovery_operations" => "Array",
        "conditions" => "Array"
        )
        );
    }
    public function action_delete(): array
    {
        return array(
        "method" => "action.delete",
        "params" => array(
        "actionids" => "array"
        )
        );
    }
    public function action_get(): array
    {
        return array(
        "method" => "action.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function action_update(): array
    {
        return array(
        "method" => "action.update",
        "params" => array(
        "actionids" => "array",
        "action object" => "Array"
        )
        );
    }
    public function alert_get(): array
    {
        return array(
        "method" => "alert.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function alert_getacknowledges(): array
    {
        return array(
        "method" => "alert.get acknowledges",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function alert_gethistory(): array
    {
        return array(
        "method" => "alert.get history",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function alert_update(): array
    {
        return array(
        "method" => "alert.update",
        "params" => array(
        "alertid" => "integer",
        "status" => "integer"
        )
        );
    }
    public function apiinfo_version(): array
    {
        return array(
        "method" => "apiinfo.version",
        "params" => array(
        )
        );
    }
    public function application_create(): array
    {
        return array(
        "method" => "application.create",
        "params" => array(
        "applications" => "array"
        )
        );
    }
    public function application_delete(): array
    {
        return array(
        "method" => "application.delete",
        "params" => array(
        "applicationids" => "array"
        )
        );
    }
    public function application_get(): array
    {
        return array(
        "method" => "application.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function application_massadd(): array
    {
        return array(
        "method" => "application.massadd",
        "params" => array(
        "applications" => "array"
        )
        );
    }
    public function application_massremove(): array
    {
        return array(
        "method" => "application.massremove",
        "params" => array(
        "applicationids" => "array"
        )
        );
    }
    public function application_update(): array
    {
        return array(
        "method" => "application.update",
        "params" => array(
        "applications" => "array"
        )
        );
    }
    public function configuration_export(): array
    {
        return array(
        "method" => "configuration.export",
        "params" => array(
        )
        );
    }
    public function configuration_import(): array
    {
        return array(
        "method" => "configuration.import",
        "params" => array(
        "format" => "string",
        "source" => "string",
        "rules" => "object"
        )
        );
    }
    public function correlation_create(): array
    {
        return array(
        "method" => "correlation.create",
        "params" => array(
        "correlation object" => "Array"
        )
        );
    }
    public function correlation_delete(): array
    {
        return array(
        "method" => "correlation.delete",
        "params" => array(
        "correlationids" => "array"
        )
        );
    }
    public function correlation_get(): array
    {
        return array(
        "method" => "correlation.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function correlation_update(): array
    {
        return array(
        "method" => "correlation.update",
        "params" => array(
        "correlation object" => "Array"
        )
        );
    }
    public function dashboard_get(): array
    {
        return array(
        "method" => "dashboard.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function dashboard_getwidgets(): array
    {
        return array(
        "method" => "dashboard.getwidgets",
        "params" => array(
        "dashboardid" => "integer"
        )
        );
    }
    public function dashboard_update(): array
    {
        return array(
        "method" => "dashboard.update",
        "params" => array(
        "dashboardid" => "integer",
        "name" => "string",
        "widgets" => "array"
        )
        );
    }
    public function dcheck_get(): array
    {
        return array(
        "method" => "dcheck.get",
        "params" => array(
        "dcheckids" => "array"
        )
        );
    }
    public function dcheck_update(): array
    {
        return array(
        "method" => "dcheck.update",
        "params" => array(
        "dchecks" => "array"
        )
        );
    }
    public function drule_create(): array
    {
        return array(
        "method" => "drule.create",
        "params" => array(
        "drules" => "array"
        )
        );
    }
    public function drule_delete(): array
    {
        return array(
        "method" => "drule.delete",
        "params" => array(
        "druleids" => "array"
        )
        );
    }
    public function drule_get(): array
    {
        return array(
        "method" => "drule.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function drule_update(): array
    {
        return array(
        "method" => "drule.update",
        "params" => array(
        "drules" => "array"
        )
        );
    }
    public function event_acknowledge(): array
    {
        return array(
        "method" => "event.acknowledge",
        "params" => array(
        "eventids" => "array",
        "message" => "string"
        )
        );
    }
    public function event_acknowledgeids(): array
    {
        return array(
        "method" => "event.acknowledgeids",
        "params" => array(
        "eventids" => "array",
        "message" => "string"
        )
        );
    }
    public function event_get(): array
    {
        return array(
        "method" => "event.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function event_getacknowledged(): array
    {
        return array(
        "method" => "event.getacknowledged",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function event_getobjects(): array
    {
        return array(
        "method" => "event.getobjects",
        "params" => array(
        "eventids" => "array"
        )
        );
    }
    public function event_massacknowledge(): array
    {
        return array(
        "method" => "event.massacknowledge",
        "params" => array(
        "eventids" => "array",
        "message" => "string"
        )
        );
    }
    public function event_sync(): array
    {
        return array(
        "method" => "event.sync",
        "params" => array(
        "syncid" => "integer"
        )
        );
    }
    public function graph_create(): array
    {
        return array(
        "method" => "graph.create",
        "params" => array(
        "graphs" => "array"
        )
        );
    }
    public function graph_delete(): array
    {
        return array(
        "method" => "graph.delete",
        "params" => array(
        "graphids" => "array"
        )
        );
    }
    public function graph_get(): array
    {
        return array(
        "method" => "graph.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function graph_getobjects(): array
    {
        return array(
        "method" => "graph.getobjects",
        "params" => array(
        "graphids" => "array"
        )
        );
    }
    public function graph_update(): array
    {
        return array(
        "method" => "graph.update",
        "params" => array(
        "graphs" => "array"
        )
        );
    }
    public function graphitem_create(): array
    {
        return array(
        "method" => "graphitem.create",
        "params" => array(
        "graphitems" => "array"
        )
        );
    }
    public function graphitem_delete(): array
    {
        return array(
        "method" => "graphitem.delete",
        "params" => array(
        "gitemids" => "array"
        )
        );
    }
    public function graphitem_get(): array
    {
        return array(
        "method" => "graphitem.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function graphitem_update(): array
    {
        return array(
        "method" => "graphitem.update",
        "params" => array(
        "graphitems" => "array"
        )
        );
    }
    public function history_get(): array
    {
        return array(
        "method" => "history.get",
        "params" => array(
        "history object" => "Array"
        )
        );
    }
    public function host_create(): array
    {
        return array(
        "method" => "host.create",
        "params" => array(
        "hosts" => "array"
        )
        );
    }
    public function host_delete(): array
    {
        return array(
        "method" => "host.delete",
        "params" => array(
        "hostids" => "array"
        )
        );
    }
    public function host_get(): array
    {
        return array(
        "method" => "host.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function host_massadd(): array
    {
        return array(
        "method" => "host.massadd",
        "params" => array(
        "hosts" => "array"
        )
        );
    }
    public function host_massremove(): array
    {
        return array(
        "method" => "host.massremove",
        "params" => array(
        "hostids" => "array"
        )
        );
    }
    public function host_massupdate(): array
    {
        return array(
        "method" => "host.massupdate",
        "params" => array(
        "hosts" => "array"
        )
        );
    }
    public function host_update(): array
    {
        return array(
        "method" => "host.update",
        "params" => array(
        "hosts" => "array"
        )
        );
    }
    public function hostgroup_create(): array
    {
        return array(
        "method" => "hostgroup.create",
        "params" => array(
        "groups" => "array"
        )
        );
    }
    public function hostgroup_delete(): array
    {
        return array(
        "method" => "hostgroup.delete",
        "params" => array(
        "groupids" => "array"
        )
        );
    }
    public function hostgroup_get(): array
    {
        return array(
        "method" => "hostgroup.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function hostgroup_massadd(): array
    {
        return array(
        "method" => "hostgroup.massadd",
        "params" => array(
        "groups" => "array"
        )
        );
    }
    public function hostgroup_massremove(): array
    {
        return array(
        "method" => "hostgroup.massremove",
        "params" => array(
        "groupids" => "array"
        )
        );
    }
    public function hostgroup_massupdate(): array
    {
        return array(
        "method" => "hostgroup.massupdate",
        "params" => array(
        "groups" => "array"
        )
        );
    }
    public function hostgroup_update(): array
    {
        return array(
        "method" => "hostgroup.update",
        "params" => array(
        "groups" => "array"
        )
        );
    }
    public function hostinterface_create(): array
    {
        return array(
        "method" => "hostinterface.create",
        "params" => array(
        "interfaces" => "array"
        )
        );
    }
    public function hostinterface_delete(): array
    {
        return array(
        "method" => "hostinterface.delete",
        "params" => array(
        "interfaceids" => "array"
        )
        );
    }
    public function hostinterface_get(): array
    {
        return array(
        "method" => "hostinterface.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function hostinterface_massadd(): array
    {
        return array(
        "method" => "hostinterface.massadd",
        "params" => array(
        "interfaces" => "array"
        )
        );
    }
    public function hostinterface_massremove(): array
    {
        return array(
        "method" => "hostinterface.massremove",
        "params" => array(
        "interfaceids" => "array"
        )
        );
    }
    public function hostinterface_update(): array
    {
        return array(
        "method" => "hostinterface.update",
        "params" => array(
        "interfaces" => "array"
        )
        );
    }
    public function hostprototype_create(): array
    {
        return array(
        "method" => "hostprototype.create",
        "params" => array(
        "hosts" => "array"
        )
        );
    }
    public function hostprototype_delete(): array
    {
        return array(
        "method" => "hostprototype.delete",
        "params" => array(
        "hostids" => "array"
        )
        );
    }
    public function hostprototype_get(): array
    {
        return array(
        "method" => "hostprototype.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function hostprototype_massadd(): array
    {
        return array(
        "method" => "hostprototype.massadd",
        "params" => array(
        "hosts" => "array"
        )
        );
    }
    public function hostprototype_massremove(): array
    {
        return array(
        "method" => "hostprototype.massremove",
        "params" => array(
        "hostids" => "array"
        )
        );
    }
    public function hostprototype_update(): array
    {
        return array(
        "method" => "hostprototype.update",
        "params" => array(
        "hosts" => "array"
        )
        );
    }
    public function iconmap_create(): array
    {
        return array(
        "method" => "iconmap.create",
        "params" => array(
        "iconmaps" => "array"
        )
        );
    }
    public function iconmap_delete(): array
    {
        return array(
        "method" => "iconmap.delete",
        "params" => array(
        "iconmapids" => "array"
        )
        );
    }
    public function iconmap_get(): array
    {
        return array(
        "method" => "iconmap.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function iconmap_update(): array
    {
        return array(
        "method" => "iconmap.update",
        "params" => array(
        "iconmaps" => "array"
        )
        );
    }
    public function image_create(): array
    {
        return array(
        "method" => "image.create",
        "params" => array(
        "images" => "array"
        )
        );
    }
    public function image_delete(): array
    {
        return array(
        "method" => "image.delete",
        "params" => array(
        "imageids" => "array"
        )
        );
    }
    public function image_get(): array
    {
        return array(
        "method" => "image.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function image_update(): array
    {
        return array(
        "method" => "image.update",
        "params" => array(
        "images" => "array"
        )
        );
    }
    public function item_create(): array
    {
        return array(
        "method" => "item.create",
        "params" => array(
        "items" => "array"
        )
        );
    }
    public function item_delete(): array
    {
        return array(
        "method" => "item.delete",
        "params" => array(
        "itemids" => "array"
        )
        );
    }
    public function item_get(): array
    {
        return array(
        "method" => "item.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function item_update(): array
    {
        return array(
        "method" => "item.update",
        "params" => array(
        "items" => "array"
        )
        );
    }
    public function maintenance_create(): array
    {
        return array(
        "method" => "maintenance.create",
        "params" => array(
        "maintenances" => "array"
        )
        );
    }
    public function maintenance_delete(): array
    {
        return array(
        "method" => "maintenance.delete",
        "params" => array(
        "maintenanceids" => "array"
        )
        );
    }
    public function maintenance_get(): array
    {
        return array(
        "method" => "maintenance.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function maintenance_update(): array
    {
        return array(
        "method" => "maintenance.update",
        "params" => array(
        "maintenances" => "array"
        )
        );
    }
    public function map_create(): array
    {
        return array(
        "method" => "map.create",
        "params" => array(
        "maps" => "array"
        )
        );
    }
    public function map_delete(): array
    {
        return array(
        "method" => "map.delete",
        "params" => array(
        "mapids" => "array"
        )
        );
    }
    public function map_get(): array
    {
        return array(
        "method" => "map.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function map_update(): array
    {
        return array(
        "method" => "map.update",
        "params" => array(
        "maps" => "array"
        )
        );
    }
    public function mediatype_create(): array
    {
        return array(
        "method" => "mediatype.create",
        "params" => array(
        "mediatypes" => "array"
        )
        );
    }
    public function mediatype_delete(): array
    {
        return array(
        "method" => "mediatype.delete",
        "params" => array(
        "mediatypeids" => "array"
        )
        );
    }
    public function mediatype_get(): array
    {
        return array(
        "method" => "mediatype.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function mediatype_update(): array
    {
        return array(
        "method" => "mediatype.update",
        "params" => array(
        "mediatypes" => "array"
        )
        );
    }
    public function proxy_create(): array
    {
        return array(
        "method" => "proxy.create",
        "params" => array(
        "proxies" => "array"
        )
        );
    }
    public function proxy_delete(): array
    {
        return array(
        "method" => "proxy.delete",
        "params" => array(
        "proxyids" => "array"
        )
        );
    }
    public function proxy_get(): array
    {
        return array(
        "method" => "proxy.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function proxy_massadd(): array
    {
        return array(
        "method" => "proxy.massadd",
        "params" => array(
        "proxies" => "array"
        )
        );
    }
    public function proxy_massremove(): array
    {
        return array(
        "method" => "proxy.massremove",
        "params" => array(
        "proxyids" => "array"
        )
        );
    }
    public function proxy_massupdate(): array
    {
        return array(
        "method" => "proxy.massupdate",
        "params" => array(
        "proxies" => "array"
        )
        );
    }
    public function proxy_update(): array
    {
        return array(
        "method" => "proxy.update",
        "params" => array(
        "proxies" => "array"
        )
        );
    }
    public function screen_create(): array
    {
        return array(
        "method" => "screen.create",
        "params" => array(
        "screens" => "array"
        )
        );
    }
    public function screen_delete(): array
    {
        return array(
        "method" => "screen.delete",
        "params" => array(
        "screenids" => "array"
        )
        );
    }
    public function screen_get(): array
    {
        return array(
        "method" => "screen.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function screen_getitems(): array
    {
        return array(
        "method" => "screen.getitems",
        "params" => array(
        "screenids" => "array"
        )
        );
    }
    public function screen_update(): array
    {
        return array(
        "method" => "screen.update",
        "params" => array(
        "screens" => "array"
        )
        );
    }
    public function screenitem_create(): array
    {
        return array(
        "method" => "screenitem.create",
        "params" => array(
        "screenitems" => "array"
        )
        );
    }
    public function screenitem_delete(): array
    {
        return array(
        "method" => "screenitem.delete",
        "params" => array(
        "screenitemids" => "array"
        )
        );
    }
    public function screenitem_get(): array
    {
        return array(
        "method" => "screenitem.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function screenitem_update(): array
    {
        return array(
        "method" => "screenitem.update",
        "params" => array(
        "screenitems" => "array"
        )
        );
    }
    public function service_create(): array
    {
        return array(
        "method" => "service.create",
        "params" => array(
        "services" => "array"
        )
        );
    }
    public function service_delete(): array
    {
        return array(
        "method" => "service.delete",
        "params" => array(
        "serviceids" => "array"
        )
        );
    }
    public function service_get(): array
    {
        return array(
        "method" => "service.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function service_update(): array
    {
        return array(
        "method" => "service.update",
        "params" => array(
        "services" => "array"
        )
        );
    }
    public function template_create(): array
    {
        return array(
        "method" => "template.create",
        "params" => array(
        "templates" => "array"
        )
        );
    }
    public function template_delete(): array
    {
        return array(
        "method" => "template.delete",
        "params" => array(
        "templateids" => "array"
        )
        );
    }
    public function template_get(): array
    {
        return array(
        "method" => "template.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function template_massadd(): array
    {
        return array(
        "method" => "template.massadd",
        "params" => array(
        "templates" => "array"
        )
        );
    }
    public function template_massremove(): array
    {
        return array(
        "method" => "template.massremove",
        "params" => array(
        "templateids" => "array"
        )
        );
    }
    public function template_massupdate(): array
    {
        return array(
        "method" => "template.massupdate",
        "params" => array(
        "templates" => "array"
        )
        );
    }
    public function template_update(): array
    {
        return array(
        "method" => "template.update",
        "params" => array(
        "templates" => "array"
        )
        );
    }
    public function template_getobjects(): array
    {
        return array(
        "method" => "template.getobjects",
        "params" => array(
        "templateids" => "array"
        )
        );
    }
    public function trigger_adddependencies(): array
    {
        return array(
        "method" => "trigger.adddependencies",
        "params" => array(
        "triggerids" => "array",
        "dependsOnTriggerIds" => "array"
        )
        );
    }
    public function trigger_create(): array
    {
        return array(
        "method" => "trigger.create",
        "params" => array(
        "triggers" => "array"
        )
        );
    }
    public function trigger_deletedependencies(): array
    {
        return array(
        "method" => "trigger.deletedependencies",
        "params" => array(
        "triggerids" => "array",
        "dependsOnTriggerIds" => "array"
        )
        );
    }
    public function trigger_delete(): array
    {
        return array(
        "method" => "trigger.delete",
        "params" => array(
        "triggerids" => "array"
        )
        );
    }
    public function trigger_get(): array
    {
        return array(
        "method" => "trigger.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function trigger_update(): array
    {
        return array(
        "method" => "trigger.update",
        "params" => array(
        "triggers" => "array"
        )
        );
    }
    public function trigger_getobjects(): array
    {
        return array(
        "method" => "trigger.getobjects",
        "params" => array(
        "triggerids" => "array"
        )
        );
    }
    public function triggerprototype_create(): array
    {
        return array(
        "method" => "triggerprototype.create",
        "params" => array(
        "triggers" => "array"
        )
        );
    }
    public function triggerprototype_delete(): array
    {
        return array(
        "method" => "triggerprototype.delete",
        "params" => array(
        "triggerids" => "array"
        )
        );
    }
    public function triggerprototype_get(): array
    {
        return array(
        "method" => "triggerprototype.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function triggerprototype_update(): array
    {
        return array(
        "method" => "triggerprototype.update",
        "params" => array(
        "triggers" => "array"
        )
        );
    }
    public function user_addmedia(): array
    {
        return array(
        "method" => "user.addmedia",
        "params" => array(
        "users" => "array"
        )
        );
    }
    public function user_create(): array
    {
        return array(
        "method" => "user.create",
        "params" => array(
        "users" => "array"
        )
        );
    }
    public function user_delete(): array
    {
        return array(
        "method" => "user.delete",
        "params" => array(
        "userids" => "array"
        )
        );
    }
    public function user_get(): array
    {
        return array(
        "method" => "user.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function user_login(): array
    {
        return array(
        "method" => "user.login",
        "params" => array(
        "user" => "string",
        "password" => "string"
        )
        );
    }
    public function user_logout(): array
    {
        return array(
        "method" => "user.logout",
        "params" => array(
        )
        );
    }
    public function user_updatemedia(): array
    {
        return array(
        "method" => "user.updatemedia",
        "params" => array(
        "users" => "array"
        )
        );
    }
    public function user_update(): array
    {
        return array(
        "method" => "user.update",
        "params" => array(
        "users" => "array"
        )
        );
    }
    public function usergroup_create(): array
    {
        return array(
        "method" => "usergroup.create",
        "params" => array(
        "usergroups" => "array"
        )
        );
    }
    public function usergroup_delete(): array
    {
        return array(
        "method" => "usergroup.delete",
        "params" => array(
        "usrgrpids" => "array"
        )
        );
    }
    public function usergroup_get(): array
    {
        return array(
        "method" => "usergroup.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function usergroup_massadd(): array
    {
        return array(
        "method" => "usergroup.massadd",
        "params" => array(
        "usrgrps" => "array"
        )
        );
    }
    public function usergroup_massremove(): array
    {
        return array(
        "method" => "usergroup.massremove",
        "params" => array(
        "usrgrpids" => "array"
        )
        );
    }
    public function usergroup_massupdate(): array
    {
        return array(
        "method" => "usergroup.massupdate",
        "params" => array(
        "usrgrps" => "array"
        )
        );
    }
    public function usergroup_update(): array
    {
        return array(
        "method" => "usergroup.update",
        "params" => array(
        "usrgrps" => "array"
        )
        );
    }
    public function usermacro_create(): array
    {
        return array(
        "method" => "usermacro.create",
        "params" => array(
        "usermacros" => "array"
        )
        );
    }
    public function usermacro_delete(): array
    {
        return array(
        "method" => "usermacro.delete",
        "params" => array(
        "hostmacroids" => "array"
        )
        );
    }
    public function usermacro_get(): array
    {
        return array(
        "method" => "usermacro.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function usermacro_update(): array
    {
        return array(
        "method" => "usermacro.update",
        "params" => array(
        "usermacros" => "array"
        )
        );
    }
    public function valuemap_create(): array
    {
        return array(
        "method" => "valuemap.create",
        "params" => array(
        "valuemaps" => "array"
        )
        );
    }
    public function valuemap_delete(): array
    {
        return array(
        "method" => "valuemap.delete",
        "params" => array(
        "valuemapids" => "array"
        )
        );
    }
    public function valuemap_get(): array
    {
        return array(
        "method" => "valuemap.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function valuemap_update(): array
    {
        return array(
        "method" => "valuemap.update",
        "params" => array(
        "valuemaps" => "array"
        )
        );
    }
    public function vmgraph_create(): array
    {
        return array(
        "method" => "vmgraph.create",
        "params" => array(
        "graphs" => "array"
        )
        );
    }
    public function vmgraph_delete(): array
    {
        return array(
        "method" => "vmgraph.delete",
        "params" => array(
        "graphids" => "array"
        )
        );
    }
    public function vmgraph_get(): array
    {
        return array(
        "method" => "vmgraph.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function vmgraph_update(): array
    {
        return array(
        "method" => "vmgraph.update",
        "params" => array(
        "graphs" => "array"
        )
        );
    }
    public function vmtree_create(): array
    {
        return array(
        "method" => "vmtree.create",
        "params" => array(
        "maps" => "array"
        )
        );
    }
    public function vmtree_delete(): array
    {
        return array(
        "method" => "vmtree.delete",
        "params" => array(
        "mapids" => "array"
        )
        );
    }
    public function vmtree_get(): array
    {
        return array(
        "method" => "vmtree.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function vmtree_update(): array
    {
        return array(
        "method" => "vmtree.update",
        "params" => array(
        "maps" => "array"
        )
        );
    }
    public function webcheck_create(): array
    {
        return array(
        "method" => "webcheck.create",
        "params" => array(
        "httptest" => "array"
        )
        );
    }
    public function webcheck_delete(): array
    {
        return array(
        "method" => "webcheck.delete",
        "params" => array(
        "httptestids" => "array"
        )
        );
    }
    public function webcheck_get(): array
    {
        return array(
        "method" => "webcheck.get",
        "params" => array(
        "filter" => "Array"
        )
        );
    }
    public function webcheck_update(): array
    {
        return array(
        "method" => "webcheck.update",
        "params" => array(
        "httptest" => "array"
        )
        );
    }
}
