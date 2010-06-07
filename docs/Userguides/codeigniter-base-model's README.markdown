codeigniter-base-model
=====================================

Introduction
------------

This is an extended Model class to use in CodeIgniter applications that provides a base CRUD pattern for your models. It gives you the core CRUD functionality, as well as support for before\_create and after\_create callbacks and some clever table name guessing.

Usage
-----

Drag the MY\_Model.php file into your _application/libraries_ folder. CodeIgniter will load and initialise this class automatically for you. Then all you have to do is make sure all your models extend from MY_Model and all the functionality will be baked into your models automatically!

Naming Conventions
------------------

This class will try to guess the name of the table to use, by guessing the plural of the class name. If the table name isn't the plural and you need to set it to something else, just declare the _$table_ instance variable and set it to the table name. Some of the CRUD functions also assume that your primary key ID column is called _'id'_. You can overwrite this functionality by setting the _$primary\_key_ instance variable.

Validation
----------

Validation support has been added.  To use this set the protected $validate variable to the rules array.  It uses the built in Form Validation library.  So all rules are the same.  You also use the helper functions in your views like normal.
Here is an example:

	class User_model extends MY_Model
	{
		protected $validate = array(
			array('field'   => 'username',
				  'label'   => 'Username',
				'rules'   => 'required'),
			array('field'   => 'email',
				  'label'   => 'Email',
				 'rules'   => 'required|valid_email')
		);
		// Other things here
	}

Upcoming Features
-----------------

* Support for validations
* Before and after update callbacks
* Better table name guessing
* Better support for associations and JOINs

Version History
---------------

* _1.1.1_ A limit() method, to allow limiting result sets
* _1.1.0_ Two new methods, count\_by() and count\_all(), made use of some ActiveRecord methods and optimisations
* _1.0.5_ Added support for custom primary keys
* _1.0.0_ First release