CREATE TABLE fertilizer (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, price FLOAT(18, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE field (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, prev_plant_id BIGINT, width BIGINT NOT NULL, length BIGINT NOT NULL, ground_type_id BIGINT, INDEX prev_plant_id_idx (prev_plant_id), INDEX ground_type_id_idx (ground_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE ground_type (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE plant (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL UNIQUE, seed_price BIGINT NOT NULL, price FLOAT(18, 2) NOT NULL, fertilizer_mass BIGINT NOT NULL, seeding_rate BIGINT NOT NULL, growing_rate BIGINT NOT NULL, fuel BIGINT NOT NULL, man_hours BIGINT NOT NULL, fertilizer_id BIGINT, INDEX fertilizer_id_idx (fertilizer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE plant_relation (id BIGINT AUTO_INCREMENT, value BIGINT NOT NULL, prev_plant_id BIGINT, next_plant_id BIGINT, INDEX prev_plant_id_idx (prev_plant_id), INDEX next_plant_id_idx (next_plant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE settings (id BIGINT AUTO_INCREMENT, name VARCHAR(255), value VARCHAR(255), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
ALTER TABLE field ADD CONSTRAINT field_prev_plant_id_plant_id FOREIGN KEY (prev_plant_id) REFERENCES plant(id);
ALTER TABLE field ADD CONSTRAINT field_ground_type_id_ground_type_id FOREIGN KEY (ground_type_id) REFERENCES ground_type(id);
ALTER TABLE plant ADD CONSTRAINT plant_fertilizer_id_fertilizer_id FOREIGN KEY (fertilizer_id) REFERENCES fertilizer(id);
ALTER TABLE plant_relation ADD CONSTRAINT plant_relation_prev_plant_id_plant_id FOREIGN KEY (prev_plant_id) REFERENCES plant(id) ON DELETE CASCADE;
ALTER TABLE plant_relation ADD CONSTRAINT plant_relation_next_plant_id_plant_id FOREIGN KEY (next_plant_id) REFERENCES plant(id) ON DELETE CASCADE;
