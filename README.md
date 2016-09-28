JSON API (Entities API)
=======================

The json api module allows Backdrop websites to get the entities data into json.
The json pattern is base on each field type. This project is aiming to be a 
improve version of [Headless](https://github.com/backdrop-contrib/headless) 
module. APIs can be access either by entity with entity id and/or URL alias.

For example:
 - By entity id: http://example.dev/api/json/node/1
 - By URL alias: http://example.dev/api/json/alias/node?url=best

This project only support READ only APIs. I will provide some example compare 
JSON API with Drupal 8 but consider that this project will not allow you to
UPDATE or POST.

![alt text][logo]
[logo]: http://i.imgur.com/OglUsX1.png


#### Features: 
 - Clean API, without unnecessary data.
 - Flexible API to alter any value of a field type.
 - Node Reference recursive objects. 
 - Field Type supported: 
 	- Date fields
 	- Text field
 	- Boolean fields
 	- Tableset field
 	- Email field
 	- Node reference field
 	- File field
 	- Link field


Clean API Example
------------------
In the Headless module and Drupal 8 rest module most field show unnecessary
information for an external application. For instance, for a image field this
will provide all this unncessary information such as:
`target_id, width, height,  title, target_type, target_uuid.` In addition, this
project will remove the prefix of 'field_' to make name of objects more reable. 


### Headless Output
```
field_image: {
	und: [{
		fid: "3",
		langcode: "und",
		uid: "1",
		filename: "image.png",
		uri: "public://image.png",
		filemime: "image/png",
		filesize: "6025",
		status: "1",
		timestamp: "1474524274",
		alt: "",
		title: "",
		width: "414",
		height: "242"
	}]
}
```

### Drupal 8 - REST Output

```
field_image: [{
	target_id: "1",
	alt: "ddd",
	title: "",
	width: "836",
	height: "72",
	target_type: "file",
	target_uuid: "ee66e307-5a79-4429-bea1-763b1e982273",
	url: "http://127.0.0.1:8088/sites/default/files/2016-09/image.png"
}]
```

### JSON API Output

```
image: {
	alt: "",
	url: "/files/images.png"
}
```
JSON API will only provide you the data that you need if you need more you can 
always alter the function of that field type. 


Node Reference recursive objects 
---------------------------------
In the Headless module and Drupal 8 rest module does not provide you the
information about entity reference, or node reference. Instead what it does it 
provide you the `target_id`, which required the external application to make
another call instead of just showing the data in one API call. 


### Headless Output
```
field_reference: {
	und: [{
		nid: "1"
	}]
}
```
### Drupal 8 Output
```
field_reference: [{
	target_id: "2",
	target_type: "node",
	target_uuid: "684b5878-a284-439d-96ce-e272d31964c2",
	url: "/node/2"
}]
```
### JSON API
```
reference_post: [{
	post: {
		default_values: {
			title: "Your first post!",
			body: null
		},
		image: null,
		tags: null
	}
}]
```

JSON API module entity reference(node reference) will create an array of objects
which the object name is base on the bundle of the entity that is been load.
Also, this will create a object called `default_values`, which is will contain 
special fields like "title", "body" in the Node types.


For side-by-side comparation check out these two gist:
- Headless Gist: http://bit.ly/2dj6MQ5
- Json API Gist: http://bit.ly/2d5yly8


Installation
------------

- Install this module using the official Backdrop CMS instructions at
  https://backdropcms.org/guide/modules


Documentation (Coming Soon)
-------------

Additional documentation is located in the Wiki:
https://github.com/backdrop-contrib/json_api/wiki/Documentation

Issues (Coming Soon)
------

Bugs and Feature requests should be reported in the Issue Queue:
https://github.com/backdrop-contrib/json_api/issues

Current Maintainers
-------------------

- Darryl Norris (https://github.com/darol100/)

License
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for
complete text.

