<h4>PHP PDO Class Wrapper</h4>
<h5>[A Wrapper Class of PDO]</h5>
*Version 1.2 (Beta)*

This is a fork from neerajsinghsonu/PDO_Class_Wrapper, please see the original: https://github.com/neerajsinghsonu/PDO_Class_Wrapper


 The class was change to fit my custom needs somes changes are:
 
* Added setter to property paValidOperation to admit more operators other than  'SELECT', 'INSERT', 'UPDATE', 'DELETE'
* Changed constructor to pass dns as string, user, password and custom attrs as array 
* Remove duplicated block for binded params on method pdoQuery
* Removed die statement when error instead exception is triggered  on PDOHelper


