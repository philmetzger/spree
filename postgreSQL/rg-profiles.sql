-- Table: core.profiles

-- DROP TABLE core.profiles;

CREATE TABLE core.profiles
(
  account_id integer NOT NULL,
  lastupdate timestamp without time zone NOT NULL DEFAULT now(),
  birthday date,
  degree character varying(255),
  professional_institution character varying(255),
  professional_department character varying(255),
  professional_street character varying(255),
  professional_zip character varying(50),
  professional_city character varying(255),
  professional_state character varying(255),
  professional_country character varying(255),
  professional_phone character varying(255),
  professional_fax character varying(255),
  professional_mobile character varying(255),
  professional_email character varying(255),
  professional_website character varying(255),
  private_street character varying(255),
  private_zip character varying(255),
  private_city character varying(255),
  private_state character varying(255),
  private_country character varying(255),
  private_phone character varying(255),
  private_fax character varying(255),
  private_mobile character varying(255),
  private_email character varying(255),
  private_instant_messenger character varying(255),
  private_skype character varying(255),
  private_twitter character varying(255),
  private_website character varying(255),
  about_me text,
  journal_referee text,
  scientific_society_memberships text,
  languages text,
  spf_sum numeric(8,2) NOT NULL DEFAULT 0,
  spf_cnt integer NOT NULL DEFAULT 0,
  spf_avg numeric(8,2) NOT NULL DEFAULT 0,
  professional_institution_id integer,
  image_crop_x integer,
  image_crop_y integer,
  image_crop_width integer,
  image_crop_height integer,
  quality_score integer NOT NULL DEFAULT 0,
  image_key character varying(50),
  professional_department_id integer,
  last_messages_seen_date timestamp without time zone NOT NULL DEFAULT now(),
  other_interests text,
  professional_position character varying(255),
  professional_position_id integer,
  last_subscriptions_seen_date timestamp without time zone NOT NULL DEFAULT now(),
  last_requests_seen_date timestamp without time zone NOT NULL DEFAULT now(),
  career_level character varying(255),
  career_level_id integer,
  career_level_source character varying(30),
  degree_id integer,
  orcid character varying(255),
  image_asset_key character varying(50),
  image_cropped_asset_key character varying(50),
  career_level_calculated character varying(255),
  career_level_user character varying(255),
  CONSTRAINT pkey_profiles PRIMARY KEY (account_id),
  CONSTRAINT fkey_profiles_account_id FOREIGN KEY (account_id)
      REFERENCES core.accounts (account_id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT fkey_profiles_career_level_id FOREIGN KEY (career_level_id)
      REFERENCES researchgate.career_levels (career_level_id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE SET NULL,
  CONSTRAINT fkey_profiles_private_country FOREIGN KEY (private_country)
      REFERENCES researchgate.countries (country_name) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE RESTRICT,
  CONSTRAINT fkey_profiles_professional_country FOREIGN KEY (professional_country)
      REFERENCES researchgate.countries (country_name) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE RESTRICT,
  CONSTRAINT fkey_profiles_professional_department_id FOREIGN KEY (professional_department_id)
      REFERENCES institutions.departments (department_id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE SET NULL,
  CONSTRAINT fkey_profiles_professional_institution_id FOREIGN KEY (professional_institution_id)
      REFERENCES institutions.institutions (institution_id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE SET NULL
)
WITH (
  OIDS=FALSE
);
ALTER TABLE core.profiles
  OWNER TO rg_www;
GRANT ALL ON TABLE core.profiles TO rg_www;
GRANT SELECT ON TABLE core.profiles TO repscore_www;
GRANT SELECT ON TABLE core.profiles TO hadoop_www;
GRANT SELECT ON TABLE core.profiles TO rg_ro;

-- Index: core.fki_fkey_profiles_career_level_id

-- DROP INDEX core.fki_fkey_profiles_career_level_id;

CREATE INDEX fki_fkey_profiles_career_level_id
  ON core.profiles
  USING btree
  (career_level_id);

-- Index: core.fki_fkey_profiles_degree_id

-- DROP INDEX core.fki_fkey_profiles_degree_id;

CREATE INDEX fki_fkey_profiles_degree_id
  ON core.profiles
  USING btree
  (degree_id);

-- Index: core.index_profiles_professional_country

-- DROP INDEX core.index_profiles_professional_country;

CREATE INDEX index_profiles_professional_country
  ON core.profiles
  USING btree
  (professional_country COLLATE pg_catalog."default");

-- Index: core.index_profiles_professional_department

-- DROP INDEX core.index_profiles_professional_department;

CREATE INDEX index_profiles_professional_department
  ON core.profiles
  USING btree
  (professional_department COLLATE pg_catalog."default");

-- Index: core.index_profiles_professional_department_id

-- DROP INDEX core.index_profiles_professional_department_id;

CREATE INDEX index_profiles_professional_department_id
  ON core.profiles
  USING btree
  (professional_department_id);

-- Index: core.index_profiles_professional_institution_id

-- DROP INDEX core.index_profiles_professional_institution_id;

CREATE INDEX index_profiles_professional_institution_id
  ON core.profiles
  USING btree
  (professional_institution_id);

-- Index: core.index_profiles_quality_score

-- DROP INDEX core.index_profiles_quality_score;

CREATE INDEX index_profiles_quality_score
  ON core.profiles
  USING btree
  (quality_score);

-- Index: core.profiles_career_level_idx

-- DROP INDEX core.profiles_career_level_idx;

CREATE INDEX profiles_career_level_idx
  ON core.profiles
  USING btree
  (career_level COLLATE pg_catalog."default");


-- Trigger: profiles_update_trigger on core.profiles

-- DROP TRIGGER profiles_update_trigger ON core.profiles;

CREATE TRIGGER profiles_update_trigger
  BEFORE UPDATE
  ON core.profiles
  FOR EACH ROW
  EXECUTE PROCEDURE core.profile_update_trigger();
