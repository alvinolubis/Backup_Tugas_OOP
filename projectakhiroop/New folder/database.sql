/*Create Database*/
Create Database project_akhir_OOP;

use project_akhir_OOP;

CREATE TABLE `service` (
`order_id` int(11) NOT NULL auto_increment,
	`customer` varchar(100),
	`contact` int(12),
	`date_of_order` date,
	`type_of_service` varchar(20),
	`action` varchar(150),
	`cost` int(10),
	PRIMARY KEY (`order_id`)
);