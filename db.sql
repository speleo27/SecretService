DELIMITER  $$
CREATE PROCEDURE createTable()

BEGIN


CREATE TABLE agent (
                       uuid varchar(255) PRIMARY KEY NOT NULL ,
                       agent_firstname varchar(255),
                       agent_lastname   varchar(255),
                       agent_birthday datetime,
                       agent_nationality_id int,
                       specialities_id int


);

CREATE TABLE target (
                        target_id int PRIMARY KEY AUTO_INCREMENT,
                        target_firstname varchar(255),
                        target_lastname varchar(255),
                        target_birthday datetime,
                        target_nationality_id int,
                        target_pseudo varchar(255)

);

CREATE TABLE contact (
                         contact_id int PRIMARY KEY AUTO_INCREMENT,
                         contact_firstname varchar(255),
                         contact_lastname varchar(255),
                         contact_birthday datetime,
                         contact_nationality_id int,
                         contact_pseudo varchar(255)

);

CREATE TABLE mission (
                         mission_id int PRIMARY KEY AUTO_INCREMENT,
                         title varchar(255),
                         description text,
                         mission_name varchar(255),
                         country_id int,
                         mission_type_id int,
                         status_id int,
                         safeHouse_id int,
                         mission_target_id int,
                         mission_contact_id int

);

create table safeHouse (
                           safeHouse_id int PRIMARY KEY AUTO_INCREMENT,
                           safeHouse_digit int(8) NOT NULL,
                           safeHouse_address text ,
                           safeHouse_country_id int,
                           safeHouse_type varchar(255)
);

CREATE TABLE specialities (
                              specialities_id int PRIMARY KEY AUTO_INCREMENT,
                              specialities_name varchar(255)
);

CREATE TABLE nationality (
                             nationality_id int PRIMARY KEY AUTO_INCREMENT,
                             nationality_name varchar(255)
);

CREATE TABLE country (
                         country_id int PRIMARY KEY AUTO_INCREMENT,
                         country_name varchar(255)
);

CREATE TABLE missionType (
                             missionType_id int PRIMARY KEY AUTO_INCREMENT,
                             type_name varchar(255)
);
CREATE TABLE agentSpecialities (
                                   agentSpecialities_id int auto_increment primary key,
                                   agent_uuid varchar(255),
                                   specialities_id int

);
CREATE TABLE status(
                       status_id int PRIMARY KEY AUTO_INCREMENT,
                       status_name varchar(255) NOT NULL
);

ALTER TABLE agentSpecialities
    ADD CONSTRAINT agentSpecialities_constraint_1  foreign key (specialities_id) REFERENCES specialities(specialities_id),
    ADD CONSTRAINT agentSpecialities_constraint_2 foreign key (agent_uuid) REFERENCES agent(uuid);

ALTER TABLE safeHouse
    ADD CONSTRAINT safeHouse_constraint_1  foreign key (safeHouse_country_id) REFERENCES country(country_id);

ALTER TABLE mission
    ADD CONSTRAINT mission_constraint_1 FOREIGN KEY (country_id) REFERENCES country(country_id),
    ADD CONSTRAINT mission_constraint_2  FOREIGN KEY (status_id) REFERENCES status(status_id),
    ADD CONSTRAINT mission_constraint_3  FOREIGN KEY (safeHouse_id) REFERENCES SafeHouse(safeHouse_id);

ALTER TABLE contact
ADD CONSTRAINT contact_constraint_1 foreign key (contact_nationality_id) REFERENCES nationality(nationality_id);

ALTER TABLE target
ADD CONSTRAINT target_constraint_1 foreign key (target_nationality_id) REFERENCES nationality(nationality_id);

ALTER TABLE agent
ADD CONSTRAINT agent_constraint_1 foreign key (agent_nationality_id) REFERENCES nationality(nationality_id),
ADD CONSTRAINT agent_constraint_2  FOREIGN KEY (specialities_id) REFERENCES agentSpecialities(agentSpecialities_id);

END $$
DELIMITER ;
