<?php

namespace ZbxApi;

use ZbxApi\Api\ZbxApi;

class CustomCall
{
  private $ZbxApi;
  public $HostId;

  public function __construct()
  {
    $this->ZbxApi  = new  ZbxApi();
  }

  public function action_create(string $name = '',integer $eventsource = '',integer $status = '',integer $esc_period = '',string $def_shortdata = '',string $def_longdata = '',integer $recovery_msg = '',string $r_shortdata = '',string $r_longdata = '',Array $filter = '',Array $operations = '',Array $recovery_operations = '',Array $conditions = '') : array{
    return array(
      "method" => "action.create",
      "params" => $params);
  }
  public function action_delete(array $actionids = '') : array{
    return array(
      "method" => "action.delete",
      "params" => $params);
  }
  public function action_get(Array $filter = '') : array{
    return array(
      "method" => "action.get",
      "params" => $params);
  }
  public function action_update(array $actionids = '',Array $action object = '') : array{
    return array(
      "method" => "action.update",
      "params" => $params);
  }
  public function alert_get(Array $filter = '') : array{
    return array(
      "method" => "alert.get",
      "params" => $params);
  }
  public function alert_getacknowledges(Array $filter = '') : array{
    return array(
      "method" => "alert.get acknowledges",
      "params" => $params);
  }
  public function alert_gethistory(Array $filter = '') : array{
    return array(
      "method" => "alert.get history",
      "params" => $params);
  }
  public function alert_update(integer $alertid = '',integer $status = '') : array{
    return array(
      "method" => "alert.update",
      "params" => $params);
  }
  public function apiinfo_version() : array{
    return array(
      "method" => "apiinfo.version",
      "params" => $params);
  }
  public function application_create(array $applications = '') : array{
    return array(
      "method" => "application.create",
      "params" => $params);
  }
  public function application_delete(array $applicationids = '') : array{
    return array(
      "method" => "application.delete",
      "params" => $params);
  }
  public function application_get(Array $filter = '') : array{
    return array(
      "method" => "application.get",
      "params" => $params);
  }
  public function application_massadd(array $applications = '') : array{
    return array(
      "method" => "application.massadd",
      "params" => $params);
  }
  public function application_massremove(array $applicationids = '') : array{
    return array(
      "method" => "application.massremove",
      "params" => $params);
  }
  public function application_update(array $applications = '') : array{
    return array(
      "method" => "application.update",
      "params" => $params);
  }
  public function configuration_export() : array{
    return array(
      "method" => "configuration.export",
      "params" => $params);
  }
  public function configuration_import(string $format = '',string $source = '',object $rules = '') : array{
    return array(
      "method" => "configuration.import",
      "params" => $params);
  }
  public function correlation_create(Array $correlation object = '') : array{
    return array(
      "method" => "correlation.create",
      "params" => $params);
  }
  public function correlation_delete(array $correlationids = '') : array{
    return array(
      "method" => "correlation.delete",
      "params" => $params);
  }
  public function correlation_get(Array $filter = '') : array{
    return array(
      "method" => "correlation.get",
      "params" => $params);
  }
  public function correlation_update(Array $correlation object = '') : array{
    return array(
      "method" => "correlation.update",
      "params" => $params);
  }
  public function dashboard_get(Array $filter = '') : array{
    return array(
      "method" => "dashboard.get",
      "params" => $params);
  }
  public function dashboard_getwidgets(integer $dashboardid = '') : array{
    return array(
      "method" => "dashboard.getwidgets",
      "params" => $params);
  }
  public function dashboard_update(integer $dashboardid = '',string $name = '',array $widgets = '') : array{
    return array(
      "method" => "dashboard.update",
      "params" => $params);
  }
  public function dcheck_get(array $dcheckids = '') : array{
    return array(
      "method" => "dcheck.get",
      "params" => $params);
  }
  public function dcheck_update(array $dchecks = '') : array{
    return array(
      "method" => "dcheck.update",
      "params" => $params);
  }
  public function drule_create(array $drules = '') : array{
    return array(
      "method" => "drule.create",
      "params" => $params);
  }
  public function drule_delete(array $druleids = '') : array{
    return array(
      "method" => "drule.delete",
      "params" => $params);
  }
  public function drule_get(Array $filter = '') : array{
    return array(
      "method" => "drule.get",
      "params" => $params);
  }
  public function drule_update(array $drules = '') : array{
    return array(
      "method" => "drule.update",
      "params" => $params);
  }
  public function event_acknowledge(array $eventids = '',string $message = '') : array{
    return array(
      "method" => "event.acknowledge",
      "params" => $params);
  }
  public function event_acknowledgeids(array $eventids = '',string $message = '') : array{
    return array(
      "method" => "event.acknowledgeids",
      "params" => $params);
  }
  public function event_get(Array $filter = '') : array{
    return array(
      "method" => "event.get",
      "params" => $params);
  }
  public function event_getacknowledged(Array $filter = '') : array{
    return array(
      "method" => "event.getacknowledged",
      "params" => $params);
  }
  public function event_getobjects(array $eventids = '') : array{
    return array(
      "method" => "event.getobjects",
      "params" => $params);
  }
  public function event_massacknowledge(array $eventids = '',string $message = '') : array{
    return array(
      "method" => "event.massacknowledge",
      "params" => $params);
  }
  public function event_sync(integer $syncid = '') : array{
    return array(
      "method" => "event.sync",
      "params" => $params);
  }
  public function graph_create(array $graphs = '') : array{
    return array(
      "method" => "graph.create",
      "params" => $params);
  }
  public function graph_delete(array $graphids = '') : array{
    return array(
      "method" => "graph.delete",
      "params" => $params);
  }
  public function graph_get(Array $filter = '') : array{
    return array(
      "method" => "graph.get",
      "params" => $params);
  }
  public function graph_getobjects(array $graphids = '') : array{
    return array(
      "method" => "graph.getobjects",
      "params" => $params);
  }
  public function graph_update(array $graphs = '') : array{
    return array(
      "method" => "graph.update",
      "params" => $params);
  }
  public function graphitem_create(array $graphitems = '') : array{
    return array(
      "method" => "graphitem.create",
      "params" => $params);
  }
  public function graphitem_delete(array $gitemids = '') : array{
    return array(
      "method" => "graphitem.delete",
      "params" => $params);
  }
  public function graphitem_get(Array $filter = '') : array{
    return array(
      "method" => "graphitem.get",
      "params" => $params);
  }
  public function graphitem_update(array $graphitems = '') : array{
    return array(
      "method" => "graphitem.update",
      "params" => $params);
  }
  public function history_get(Array $history object = '') : array{
    return array(
      "method" => "history.get",
      "params" => $params);
  }
  public function host_create(array $hosts = '') : array{
    return array(
      "method" => "host.create",
      "params" => $params);
  }
  public function host_delete(array $hostids = '') : array{
    return array(
      "method" => "host.delete",
      "params" => $params);
  }
  public function host_get(Array $filter = '') : array{
    return array(
      "method" => "host.get",
      "params" => $params);
  }
  public function host_massadd(array $hosts = '') : array{
    return array(
      "method" => "host.massadd",
      "params" => $params);
  }
  public function host_massremove(array $hostids = '') : array{
    return array(
      "method" => "host.massremove",
      "params" => $params);
  }
  public function host_massupdate(array $hosts = '') : array{
    return array(
      "method" => "host.massupdate",
      "params" => $params);
  }
  public function host_update(array $hosts = '') : array{
    return array(
      "method" => "host.update",
      "params" => $params);
  }
  public function hostgroup_create(array $groups = '') : array{
    return array(
      "method" => "hostgroup.create",
      "params" => $params);
  }
  public function hostgroup_delete(array $groupids = '') : array{
    return array(
      "method" => "hostgroup.delete",
      "params" => $params);
  }
  public function hostgroup_get(Array $filter = '') : array{
    return array(
      "method" => "hostgroup.get",
      "params" => $params);
  }
  public function hostgroup_massadd(array $groups = '') : array{
    return array(
      "method" => "hostgroup.massadd",
      "params" => $params);
  }
  public function hostgroup_massremove(array $groupids = '') : array{
    return array(
      "method" => "hostgroup.massremove",
      "params" => $params);
  }
  public function hostgroup_massupdate(array $groups = '') : array{
    return array(
      "method" => "hostgroup.massupdate",
      "params" => $params);
  }
  public function hostgroup_update(array $groups = '') : array{
    return array(
      "method" => "hostgroup.update",
      "params" => $params);
  }
  public function hostinterface_create(array $interfaces = '') : array{
    return array(
      "method" => "hostinterface.create",
      "params" => $params);
  }
  public function hostinterface_delete(array $interfaceids = '') : array{
    return array(
      "method" => "hostinterface.delete",
      "params" => $params);
  }
  public function hostinterface_get(Array $filter = '') : array{
    return array(
      "method" => "hostinterface.get",
      "params" => $params);
  }
  public function hostinterface_massadd(array $interfaces = '') : array{
    return array(
      "method" => "hostinterface.massadd",
      "params" => $params);
  }
  public function hostinterface_massremove(array $interfaceids = '') : array{
    return array(
      "method" => "hostinterface.massremove",
      "params" => $params);
  }
  public function hostinterface_update(array $interfaces = '') : array{
    return array(
      "method" => "hostinterface.update",
      "params" => $params);
  }
  public function hostprototype_create(array $hosts = '') : array{
    return array(
      "method" => "hostprototype.create",
      "params" => $params);
  }
  public function hostprototype_delete(array $hostids = '') : array{
    return array(
      "method" => "hostprototype.delete",
      "params" => $params);
  }
  public function hostprototype_get(Array $filter = '') : array{
    return array(
      "method" => "hostprototype.get",
      "params" => $params);
  }
  public function hostprototype_massadd(array $hosts = '') : array{
    return array(
      "method" => "hostprototype.massadd",
      "params" => $params);
  }
  public function hostprototype_massremove(array $hostids = '') : array{
    return array(
      "method" => "hostprototype.massremove",
      "params" => $params);
  }
  public function hostprototype_update(array $hosts = '') : array{
    return array(
      "method" => "hostprototype.update",
      "params" => $params);
  }
  public function iconmap_create(array $iconmaps = '') : array{
    return array(
      "method" => "iconmap.create",
      "params" => $params);
  }
  public function iconmap_delete(array $iconmapids = '') : array{
    return array(
      "method" => "iconmap.delete",
      "params" => $params);
  }
  public function iconmap_get(Array $filter = '') : array{
    return array(
      "method" => "iconmap.get",
      "params" => $params);
  }
  public function iconmap_update(array $iconmaps = '') : array{
    return array(
      "method" => "iconmap.update",
      "params" => $params);
  }
  public function image_create(array $images = '') : array{
    return array(
      "method" => "image.create",
      "params" => $params);
  }
  public function image_delete(array $imageids = '') : array{
    return array(
      "method" => "image.delete",
      "params" => $params);
  }
  public function image_get(Array $filter = '') : array{
    return array(
      "method" => "image.get",
      "params" => $params);
  }
  public function image_update(array $images = '') : array{
    return array(
      "method" => "image.update",
      "params" => $params);
  }
  public function item_create(array $items = '') : array{
    return array(
      "method" => "item.create",
      "params" => $params);
  }
  public function item_delete(array $itemids = '') : array{
    return array(
      "method" => "item.delete",
      "params" => $params);
  }
  public function item_get(Array $filter = '') : array{
    return array(
      "method" => "item.get",
      "params" => $params);
  }
  public function item_update(array $items = '') : array{
    return array(
      "method" => "item.update",
      "params" => $params);
  }
  public function maintenance_create(array $maintenances = '') : array{
    return array(
      "method" => "maintenance.create",
      "params" => $params);
  }
  public function maintenance_delete(array $maintenanceids = '') : array{
    return array(
      "method" => "maintenance.delete",
      "params" => $params);
  }
  public function maintenance_get(Array $filter = '') : array{
    return array(
      "method" => "maintenance.get",
      "params" => $params);
  }
  public function maintenance_update(array $maintenances = '') : array{
    return array(
      "method" => "maintenance.update",
      "params" => $params);
  }
  public function map_create(array $maps = '') : array{
    return array(
      "method" => "map.create",
      "params" => $params);
  }
  public function map_delete(array $mapids = '') : array{
    return array(
      "method" => "map.delete",
      "params" => $params);
  }
  public function map_get(Array $filter = '') : array{
    return array(
      "method" => "map.get",
      "params" => $params);
  }
  public function map_update(array $maps = '') : array{
    return array(
      "method" => "map.update",
      "params" => $params);
  }
  public function mediatype_create(array $mediatypes = '') : array{
    return array(
      "method" => "mediatype.create",
      "params" => $params);
  }
  public function mediatype_delete(array $mediatypeids = '') : array{
    return array(
      "method" => "mediatype.delete",
      "params" => $params);
  }
  public function mediatype_get(Array $filter = '') : array{
    return array(
      "method" => "mediatype.get",
      "params" => $params);
  }
  public function mediatype_update(array $mediatypes = '') : array{
    return array(
      "method" => "mediatype.update",
      "params" => $params);
  }
  public function proxy_create(array $proxies = '') : array{
    return array(
      "method" => "proxy.create",
      "params" => $params);
  }
  public function proxy_delete(array $proxyids = '') : array{
    return array(
      "method" => "proxy.delete",
      "params" => $params);
  }
  public function proxy_get(Array $filter = '') : array{
    return array(
      "method" => "proxy.get",
      "params" => $params);
  }
  public function proxy_massadd(array $proxies = '') : array{
    return array(
      "method" => "proxy.massadd",
      "params" => $params);
  }
  public function proxy_massremove(array $proxyids = '') : array{
    return array(
      "method" => "proxy.massremove",
      "params" => $params);
  }
  public function proxy_massupdate(array $proxies = '') : array{
    return array(
      "method" => "proxy.massupdate",
      "params" => $params);
  }
  public function proxy_update(array $proxies = '') : array{
    return array(
      "method" => "proxy.update",
      "params" => $params);
  }
  public function screen_create(array $screens = '') : array{
    return array(
      "method" => "screen.create",
      "params" => $params);
  }
  public function screen_delete(array $screenids = '') : array{
    return array(
      "method" => "screen.delete",
      "params" => $params);
  }
  public function screen_get(Array $filter = '') : array{
    return array(
      "method" => "screen.get",
      "params" => $params);
  }
  public function screen_getitems(array $screenids = '') : array{
    return array(
      "method" => "screen.getitems",
      "params" => $params);
  }
  public function screen_update(array $screens = '') : array{
    return array(
      "method" => "screen.update",
      "params" => $params);
  }
  public function screenitem_create(array $screenitems = '') : array{
    return array(
      "method" => "screenitem.create",
      "params" => $params);
  }
  public function screenitem_delete(array $screenitemids = '') : array{
    return array(
      "method" => "screenitem.delete",
      "params" => $params);
  }
  public function screenitem_get(Array $filter = '') : array{
    return array(
      "method" => "screenitem.get",
      "params" => $params);
  }
  public function screenitem_update(array $screenitems = '') : array{
    return array(
      "method" => "screenitem.update",
      "params" => $params);
  }
  public function service_create(array $services = '') : array{
    return array(
      "method" => "service.create",
      "params" => $params);
  }
  public function service_delete(array $serviceids = '') : array{
    return array(
      "method" => "service.delete",
      "params" => $params);
  }
  public function service_get(Array $filter = '') : array{
    return array(
      "method" => "service.get",
      "params" => $params);
  }
  public function service_update(array $services = '') : array{
    return array(
      "method" => "service.update",
      "params" => $params);
  }
  public function template_create(array $templates = '') : array{
    return array(
      "method" => "template.create",
      "params" => $params);
  }
  public function template_delete(array $templateids = '') : array{
    return array(
      "method" => "template.delete",
      "params" => $params);
  }
  public function template_get(Array $filter = '') : array{
    return array(
      "method" => "template.get",
      "params" => $params);
  }
  public function template_massadd(array $templates = '') : array{
    return array(
      "method" => "template.massadd",
      "params" => $params);
  }
  public function template_massremove(array $templateids = '') : array{
    return array(
      "method" => "template.massremove",
      "params" => $params);
  }
  public function template_massupdate(array $templates = '') : array{
    return array(
      "method" => "template.massupdate",
      "params" => $params);
  }
  public function template_update(array $templates = '') : array{
    return array(
      "method" => "template.update",
      "params" => $params);
  }
  public function template_getobjects(array $templateids = '') : array{
    return array(
      "method" => "template.getobjects",
      "params" => $params);
  }
  public function trigger_adddependencies(array $triggerids = '',array $dependsOnTriggerIds = '') : array{
    return array(
      "method" => "trigger.adddependencies",
      "params" => $params);
  }
  public function trigger_create(array $triggers = '') : array{
    return array(
      "method" => "trigger.create",
      "params" => $params);
  }
  public function trigger_deletedependencies(array $triggerids = '',array $dependsOnTriggerIds = '') : array{
    return array(
      "method" => "trigger.deletedependencies",
      "params" => $params);
  }
  public function trigger_delete(array $triggerids = '') : array{
    return array(
      "method" => "trigger.delete",
      "params" => $params);
  }
  public function trigger_get(Array $filter = '') : array{
    return array(
      "method" => "trigger.get",
      "params" => $params);
  }
  public function trigger_update(array $triggers = '') : array{
    return array(
      "method" => "trigger.update",
      "params" => $params);
  }
  public function trigger_getobjects(array $triggerids = '') : array{
    return array(
      "method" => "trigger.getobjects",
      "params" => $params);
  }
  public function triggerprototype_create(array $triggers = '') : array{
    return array(
      "method" => "triggerprototype.create",
      "params" => $params);
  }
  public function triggerprototype_delete(array $triggerids = '') : array{
    return array(
      "method" => "triggerprototype.delete",
      "params" => $params);
  }
  public function triggerprototype_get(Array $filter = '') : array{
    return array(
      "method" => "triggerprototype.get",
      "params" => $params);
  }
  public function triggerprototype_update(array $triggers = '') : array{
    return array(
      "method" => "triggerprototype.update",
      "params" => $params);
  }
  public function user_addmedia(array $users = '') : array{
    return array(
      "method" => "user.addmedia",
      "params" => $params);
  }
  public function user_create(array $users = '') : array{
    return array(
      "method" => "user.create",
      "params" => $params);
  }
  public function user_delete(array $userids = '') : array{
    return array(
      "method" => "user.delete",
      "params" => $params);
  }
  public function user_get(Array $filter = '') : array{
    return array(
      "method" => "user.get",
      "params" => $params);
  }
  public function user_login(string $user = '',string $password = '') : array{
    return array(
      "method" => "user.login",
      "params" => $params);
  }
  public function user_logout() : array{
    return array(
      "method" => "user.logout",
      "params" => $params);
  }
  public function user_updatemedia(array $users = '') : array{
    return array(
      "method" => "user.updatemedia",
      "params" => $params);
  }
  public function user_update(array $users = '') : array{
    return array(
      "method" => "user.update",
      "params" => $params);
  }
  public function usergroup_create(array $usergroups = '') : array{
    return array(
      "method" => "usergroup.create",
      "params" => $params);
  }
  public function usergroup_delete(array $usrgrpids = '') : array{
    return array(
      "method" => "usergroup.delete",
      "params" => $params);
  }
  public function usergroup_get(Array $filter = '') : array{
    return array(
      "method" => "usergroup.get",
      "params" => $params);
  }
  public function usergroup_massadd(array $usrgrps = '') : array{
    return array(
      "method" => "usergroup.massadd",
      "params" => $params);
  }
  public function usergroup_massremove(array $usrgrpids = '') : array{
    return array(
      "method" => "usergroup.massremove",
      "params" => $params);
  }
  public function usergroup_massupdate(array $usrgrps = '') : array{
    return array(
      "method" => "usergroup.massupdate",
      "params" => $params);
  }
  public function usergroup_update(array $usrgrps = '') : array{
    return array(
      "method" => "usergroup.update",
      "params" => $params);
  }
  public function usermacro_create(array $usermacros = '') : array{
    return array(
      "method" => "usermacro.create",
      "params" => $params);
  }
  public function usermacro_delete(array $hostmacroids = '') : array{
    return array(
      "method" => "usermacro.delete",
      "params" => $params);
  }
  public function usermacro_get(Array $filter = '') : array{
    return array(
      "method" => "usermacro.get",
      "params" => $params);
  }
  public function usermacro_update(array $usermacros = '') : array{
    return array(
      "method" => "usermacro.update",
      "params" => $params);
  }
  public function valuemap_create(array $valuemaps = '') : array{
    return array(
      "method" => "valuemap.create",
      "params" => $params);
  }
  public function valuemap_delete(array $valuemapids = '') : array{
    return array(
      "method" => "valuemap.delete",
      "params" => $params);
  }
  public function valuemap_get(Array $filter = '') : array{
    return array(
      "method" => "valuemap.get",
      "params" => $params);
  }
  public function valuemap_update(array $valuemaps = '') : array{
    return array(
      "method" => "valuemap.update",
      "params" => $params);
  }
  public function vmgraph_create(array $graphs = '') : array{
    return array(
      "method" => "vmgraph.create",
      "params" => $params);
  }
  public function vmgraph_delete(array $graphids = '') : array{
    return array(
      "method" => "vmgraph.delete",
      "params" => $params);
  }
  public function vmgraph_get(Array $filter = '') : array{
    return array(
      "method" => "vmgraph.get",
      "params" => $params);
  }
  public function vmgraph_update(array $graphs = '') : array{
    return array(
      "method" => "vmgraph.update",
      "params" => $params);
  }
  public function vmtree_create(array $maps = '') : array{
    return array(
      "method" => "vmtree.create",
      "params" => $params);
  }
  public function vmtree_delete(array $mapids = '') : array{
    return array(
      "method" => "vmtree.delete",
      "params" => $params);
  }
  public function vmtree_get(Array $filter = '') : array{
    return array(
      "method" => "vmtree.get",
      "params" => $params);
  }
  public function vmtree_update(array $maps = '') : array{
    return array(
      "method" => "vmtree.update",
      "params" => $params);
  }
  public function webcheck_create(array $httptest = '') : array{
    return array(
      "method" => "webcheck.create",
      "params" => $params);
  }
  public function webcheck_delete(array $httptestids = '') : array{
    return array(
      "method" => "webcheck.delete",
      "params" => $params);
  }
  public function webcheck_get(Array $filter = '') : array{
    return array(
      "method" => "webcheck.get",
      "params" => $params);
  }
  public function webcheck_update(array $httptest = '') : array{
    return array(
      "method" => "webcheck.update",
      "params" => $params);
  }
}
