-- Create database and set basic determinants
CREATE DATABASE LocationDB;

CREATE USER 'viewer'@'%' IDENTIFIED BY '$MUs8ints1';
CREATE USER 'Cerberus'@'127.0.0.1' IDENTIFIED BY 'R3GZ*Z3tA*Plu5';
GRANT SELECT ON LocationDB.* TO 'Cerberus'@'127.0.0.1';
GRANT INSERT ON LocationDB.* TO 'Cerberus'@'127.0.0.1';
GRANT UPDATE ON LocationDB.* TO 'Cerberus'@'127.0.0.1';
GRANT DELETE ON LocationDB.* TO 'Cerberus'@'127.0.0.1';
GRANT SELECT ON LocationDB.* TO 'viewer'@'%';
FLUSH PRIVILEGES;


-- Select it
USE LocationDB;


-- Create each individual printer table!
CREATE TABLE LocationDB.building (
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
	name VARCHAR(255),
	address VARCHAR(255),
    latitude DOUBLE PRECISION,
    longitude DOUBLE PRECISION,
    purpose VARCHAR(255),
    PRIMARY KEY (id)
);
-- (NULL, '$name', '$add', $lat, $long, '$purpose'),
INSERT INTO building VALUES
(NULL, 'Old Main', '5000 Abbey Wy.', 47.040700, -122.815400, 'Administration, classes, labs'),
(NULL, "O'Grady Library", '5000 Abbey Wy.', 47.041028039927255, -122.81644401829115, 'Library, Center for Student Success, ITS.'),
(NULL, 'Harned Hall', '5000 Abbey Wy.', 47.040208993889685, -122.81671221715227, 'Classrooms and the largest lecture hall on campus!'),
(NULL, 'Cebula Hall', '5000 Abbey Wy.', 47.03933233049236, -122.81654477387843, 'Engineering and occasionally CS/IT classes.'),
(NULL, 'Kreielsheimer Hall (Arts Education)', '5000 Abbey Wy.', 47.04035205296114, -122.8177538796822, 'Music building and performances!'),
(NULL, 'Panowicz Foundry (Engineering)', '5000 Abbey Wy.', 47.041251362401674, -122.8186121865059, 'Computer science and mechanical engineering classrooms!'),
(NULL, 'Charneski Recreation Center', '5000 Abbey Wy.', 47.039175646907466, -122.81843324177868, 'AKA the REC, this is the student gym. Some clubs meet here, otherwise make some gains!'),
(NULL, 'Ernsdorff Center (Mathematics)', '5000 Abbey Wy.', 47.04164694682293, -122.81908091806486, 'Mathematics, natural sciences, and physical sciences. Make sure to check out the posters on the walls!'),
(NULL, 'Old Cebula Hall (Engineering)', '5000 Abbey Wy.', 47.039500040461725, -122.81655310321464, 'Old engineering building, now abandoned and used for storage.'),
(NULL, 'Trautman Student Union Building', '5000 Abbey Wy.', 47.039338094890454, -122.81737764115579, 'Student union building used for student body meetings and general hanging out. It has a PS4!'),
(NULL, 'Marcus Pavilion', '5000 Abbey Wy.', 47.0379381553391, -122.81731461442438, 'Used for sports games and other events!'),
(NULL, 'Baran Hall', '5000 Abbey Wy.', 47.04088630165792, -122.81967280489508, 'Residence hall.'),
(NULL, 'Burton Hall', '5000 Abbey Wy.', 47.040417814994, -122.81923738993326, 'Residence hall. Has a gaming lab!'),
(NULL, 'Spangler Hall', '5000 Abbey Wy.', 47.040537819566204, -122.8202446813863, 'Residence hall. Second largest I think.'),
(NULL, 'Parsons Hall', '5000 Abbey Wy.', 47.03958000510115, -122.8207650299286, "Residence hall. Has a snack shop that's open sometimes."),
(NULL, 'Heider Hall', '5000 Abbey Wy.', 47.04415700453479, -122.80735183427004, 'Finance and facilities off campus site.'),
(NULL, 'JBLM Campus', '851 Lincoln Bl.', 47.122444120879386, -122.50408046508258, 'Off campus site on Joint Base Lewis-McChord.');