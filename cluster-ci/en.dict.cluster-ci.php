
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here

	'Class:DBCluster' => 'DB Cluster',
	'Class:DBCluster+' => '',
	'Class:DBCluster/Attribute:dbnode_list' => 'DB Nodes',
	'Class:DBCluster/Attribute:dbnode_list+' => '',
	'Class:DBCluster/Attribute:dbschema_list' => 'Database Schemas',
	'Class:DBCluster/Attribute:dbschema_list+' => '',
	'Class:DBCluster/Attribute:volume_list' => 'Logical Volumes',	
	'Class:DBCluster/Attribute:volume_list+' => '',	
	'Class:DBCluster/Attribute:cluster_type' => 'Cluster Type',	
	'Class:DBCluster/Attribute:cluster_type+' => '',	

	'Class:DBServer/Attribute:dbcluster_list' => 'DB Clusters',
	'Class:DBServer/Attribute:dbcluster_list+' => '',

	'Class:DatabaseSchema/Attribute:dbcluster_id' => 'Database Cluster',
	'Class:DatabaseSchema/Attribute:dbcluster_id+' => '',
	'Class:DatabaseSchema/Attribute:webapplications_list' => 'Web Applications',
	'Class:DatabaseSchema/Attribute:webapplications_list+' => '',
    'Class:DatabaseSchema/Attribute:softwareinstance_id' => 'Database Server',
    'Class:DatabaseSchema/Attribute:softwareinstance_id+' => '',
    'Class:DatabaseSchema' => 'Database Schema',
    'Class:DatabaseSchema+' => '',

	'Class:WebServer/Attribute:webcluster_list' => 'Web Clusters',
	'Class:WebServer/Attribute:webcluster_list+' => '',

	'Class:WebCluster' => 'Web Cluster',
	'Class:WebCluster+' => '',
	'Class:WebCluster/Attribute:webnode_list' => 'Web Nodes',
	'Class:WebCluster/Attribute:webnode_list+' => '',
	'Class:WebCluster/Attribute:webapp_list' => 'Web Applications',
	'Class:WebCluster/Attribute:webapp_list+' => '',

	'Class:WebApplication/Attribute:dbschema_list' => 'Database Schemas',
	'Class:WebApplication/Attribute:dbschema_list+' => '',
    'Class:WebApplication/Attribute:softwareinstance_id' => 'Web Server',
    'Class:WebApplication/Attribute:softwareinstance_id+' => '',

	'Class:lnkDBServerToDBCluster' => 'Link DB Server / DB Cluster',
	'Class:lnkDBServerToDBCluster+' => '',

	'Class:lnkWebServerToWebCluster' => 'Link Web Server / Web Cluster',
	'Class:lnkWebServerToWebCluster+' => '',
	
    'Class:Software/Attribute:type/Value:DBCluster' => 'DB Cluster',
    'Class:Software/Attribute:type/Value:DBCluster+' => 'DB Cluster',
    'Class:Software/Attribute:type/Value:WebCluster' => 'Web Cluster',
    'Class:Software/Attribute:type/Value:WebCluster+' => 'Web Cluster',
));
?>
