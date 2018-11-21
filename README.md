# ACL Module
Simple implementation of Zend Framework Permissions ACL Component.  Originally crafted as a tutorial showing a minimalist use of the component, it has recently been upgraded to be compatible with Zend Framework 3.  

## Getting Started

### Prerequisties

- An Authentication Service. Our User Module includes a similar minimalistic approach to the component, and includes an authentication service integration.

### Installation

- Add zendframework/zend-permissions-acl to composer.json dependencies.
- Add 'Acl' to your modules.config.php

### Configuration

To this, or any additional module, an 'acl' array needs to be added to the module.config.php.  This array controls which roles have access to what resources.  The resources are defined as the route names.  Be sure to have different routes for those pages you want to segregate access.

	'acl' => [
		'role' => [
			'routeName' => ['action', 'action'],
		],
	],
	
By default, users are denied access, and only those routes that match acl rules are allowed.  To simplifying allowing access to a large number pages, match high level routes to rules.