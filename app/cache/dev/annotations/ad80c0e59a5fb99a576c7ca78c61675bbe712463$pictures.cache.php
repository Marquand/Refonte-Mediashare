<?php return unserialize('a:3:{i:0;O:31:"Doctrine\\ORM\\Mapping\\ManyToMany":7:{s:12:"targetEntity";s:32:"PointWeb\\AdminBundle\\Entity\\File";s:8:"mappedBy";N;s:10:"inversedBy";N;s:7:"cascade";a:2:{i:0;s:7:"persist";i:1;s:6:"remove";}s:5:"fetch";s:4:"LAZY";s:13:"orphanRemoval";b:0;s:7:"indexBy";N;}i:1;O:30:"Doctrine\\ORM\\Mapping\\JoinTable":4:{s:4:"name";s:12:"product_file";s:6:"schema";N;s:11:"joinColumns";a:1:{i:0;O:31:"Doctrine\\ORM\\Mapping\\JoinColumn":7:{s:4:"name";s:10:"product_id";s:20:"referencedColumnName";s:2:"id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";N;s:16:"columnDefinition";N;s:9:"fieldName";N;}}s:18:"inverseJoinColumns";a:1:{i:0;O:31:"Doctrine\\ORM\\Mapping\\JoinColumn":7:{s:4:"name";s:7:"file_id";s:20:"referencedColumnName";s:2:"id";s:6:"unique";b:0;s:8:"nullable";b:1;s:8:"onDelete";s:7:"CASCADE";s:16:"columnDefinition";N;s:9:"fieldName";N;}}}i:2;O:28:"Doctrine\\ORM\\Mapping\\OrderBy":1:{s:5:"value";a:1:{s:8:"position";s:3:"ASC";}}}');