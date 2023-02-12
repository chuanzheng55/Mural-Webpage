DROP TABLE IF EXISTS artist_insert_backup;
CREATE TABLE artist_insert_backup (
    artist_id int,
    artist_name varchar(976),
    gender varchar(10),
    age int,
    ethnicity varchar(100),
    birth_country varchar(100),
    is_studio varchar(100)
);
DROP TRIGGER if EXISTS after_artist_insert;
CREATE TRIGGER after_artist_insert
AFTER
INSERT ON artist FOR EACH ROW BEGIN IF (NEW.artist_name IS NOT NULL) THEN
INSERT INTO artist_insert_backup (
        artist_id,
        artist_name,
        gender,
        age,
        ethnicity,
        birth_country,
        is_studio
    )
VALUES (
    NEW.artist_id,
        NEW.artist_name,
        NEW.gender,
        NEW.age,
        NEW.ethnicity,
        NEW.birth_country,
        NEW.is_studio
    );
END IF;
END;
DROP TABLE IF EXISTS artist_update_backup;
CREATE TABLE artist_update_backup (
    artist_id int,
    artist_name varchar(976),
    gender varchar(10),
    age int,
    ethnicity varchar(100),
    birth_country varchar(100),
    is_studio varchar(100)
);
DROP TRIGGER if EXISTS after_artist_update;
CREATE TRIGGER after_artist_update
AFTER
UPDATE ON artist FOR EACH ROW BEGIN IF OLD.artist_name <> new.artist_name
    OR OLD.gender <> NEW.gender
    OR OLD.age <> NEW.age
    OR OLD.ethnicity <> NEW.ethnicity
    OR OLD.birth_country <> NEW.birth_country
    OR OLD.is_studio <> NEW.is_studio THEN
INSERT INTO artist_update_backup (
        artist_id,
        artist_name,
        gender,
        age,
        ethnicity,
        birth_country,
        is_studio
    )
VALUES (
        old.artist_id,
        new.artist_name,
        new.gender,
        new.age,
        new.ethnicity,
        new.birth_country,
        new.is_studio
    );
END IF;
END;






-- location
DROP TABLE IF EXISTS location_insert_backup;
CREATE TABLE location_insert_backup (
    location_id int,
    street varchar(976),
    county varchar(10),
    zip int,
    `state` varchar(100)
);
DROP TRIGGER if EXISTS after_locations_insert;
CREATE TRIGGER after_locations_insert
AFTER
INSERT ON locations FOR EACH ROW BEGIN IF (NEW.street IS NOT NULL) THEN
INSERT INTO location_insert_backup (location_id, street, county, zip, `state`)
VALUES (
        NEW.location_id,
        NEW.street,
        NEW.county,
        NEW.zip,
        NEW.`state`
    );
END IF;
END;
DROP TABLE IF EXISTS locations_update_backup;
CREATE TABLE locations_update_backup (
    location_id int,
    street varchar(976),
    county varchar(10),
    zip int,
    `state` varchar(100)
);
DROP TRIGGER if EXISTS after_locations_update;
CREATE TRIGGER after_locations_update
AFTER
UPDATE ON locations FOR EACH ROW BEGIN IF OLD.street <> new.street
    OR OLD.county <> NEW.county
    OR OLD.zip <> NEW.zip
    OR OLD.`state` <> NEW.`state` THEN
INSERT INTO locations_update_backup (location_id, street, county, zip, `state`)
VALUES (
        old.location_id,
        new.street,
        new.county,
        new.zip,
        new.`state`
    );
END IF;
END;





-- Mural
DROP TABLE IF EXISTS mural_insert_backup;
CREATE TABLE mural_insert_backup (
    mural_id int,
    mural_name varchar(976),
    artist_id int,
    location_id int,
    year_build int,
    mural_description varchar(976),
    commission_by varchar(100),
    is_covered varchar(100),
    art_style varchar(100),
    image_url varchar(500)
);
DROP TRIGGER if EXISTS after_mural_insert;
CREATE TRIGGER after_mural_insert
AFTER
INSERT ON mural FOR EACH ROW BEGIN IF (NEW.mural_name IS NOT NULL) THEN
INSERT INTO mural_insert_backup (
    mural_id,
        mural_name,
        artist_id,
        location_id,
        year_build,
        mural_description,
        commission_by,
        is_covered,
        art_style,
        image_url
    )
VALUES (
    NEW.mural_id,
        NEW.mural_name,
        NEW.artist_id,
        NEW.location_id,
        NEW.year_build,
        NEW.mural_description,
        NEW.commission_by,
        NEW.is_covered,
        NEW.art_style,
        NEW.image_url
    );
END IF;
END;
DROP TABLE IF EXISTS mural_update_backup;
CREATE TABLE mural_update_backup (
    mural_id int,
    mural_name varchar(976),
    artist_id int,
    location_id int,
    year_build int,
    mural_description varchar(976),
    commission_by varchar(100),
    is_covered varchar(100),
    art_style varchar(100),
    image_url varchar(500)
);
DROP TRIGGER if EXISTS after_mural_update;
CREATE TRIGGER after_mural_update
AFTER
UPDATE ON mural FOR EACH ROW BEGIN IF OLD.mural_name <> new.mural_name
    OR OLD.artist_id <> NEW.artist_id
    OR OLD.location_id <> NEW.location_id
    OR OLD.year_build <> NEW.year_build
    OR OLD.mural_description <> NEW.mural_description
    OR OLD.commission_by <> NEW.commission_by
    OR OLD.is_covered <> NEW.is_covered
    OR OLD.art_style <> NEW.art_style
    OR OLD.image_url <> NEW.image_url THEN
INSERT INTO mural_update_backup (
        mural_id,
        mural_name,
        artist_id,
        location_id,
        year_build,
        mural_description,
        commission_by,
        is_covered,
        art_style,
        image_url
    )
VALUES (
        old.mural_id,
        new.mural_name,
        new.artist_id,
        new.location_id,
        new.year_build,
        new.mural_description,
        new.commission_by,
        new.is_covered,
        new.art_style,
        new.image_url
    );
END IF;
END;



-- awards 
DROP TABLE IF EXISTS award_insert_backup;
CREATE TABLE award_insert_backup (
    award_id int,
    award_name varchar(976),
    mural_id int,
    award_year int,
    award_by varchar(100)
);
DROP TRIGGER if EXISTS after_award_insert;
CREATE TRIGGER after_award_insert
AFTER
INSERT ON award FOR EACH ROW BEGIN IF (NEW.award_id IS NOT NULL) THEN
INSERT INTO award_insert_backup (award_id, award_name, mural_id, award_year, award_by)
VALUES (
        NEW.award_id,
        NEW.award_name,
        NEW.mural_id,
        NEW.award_year,
        NEW.award_by
    );
END IF;
END;
DROP TABLE IF EXISTS award_update_backup;
CREATE TABLE award_update_backup (
    award_id int,
    award_name varchar(976),
    mural_id int,
    award_year int,
    award_by varchar(100)
);
DROP TRIGGER if EXISTS after_award_update;
CREATE TRIGGER after_award_update
AFTER
UPDATE ON award FOR EACH ROW BEGIN IF OLD.award_name <> new.award_name
    OR OLD.award_year <> NEW.award_year
    OR OLD.award_by<> NEW.award_by THEN
INSERT INTO award_update_backup (award_id, award_name, mural_id, award_year, award_by)
VALUES (
        old.award_id,
        new.award_name,
        old.mural_id,
        new.award_year,
        new.award_by
    );
END IF;
END;
