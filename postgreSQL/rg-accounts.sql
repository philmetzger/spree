CREATE TABLE core.accounts
(
  account_id integer NOT NULL DEFAULT nextval('core.accounts_account_id_seq'::regclass),
  firstname character varying(255) NOT NULL DEFAULT ''::character varying,
  lastname character varying(255) NOT NULL DEFAULT ''::character varying,
  login character varying(255) NOT NULL,
  password character varying(255) NOT NULL DEFAULT ''::character varying,
  gender character varying(255) NOT NULL DEFAULT 'unknown'::character varying,
  marker character varying(255),
  firstlogin timestamp without time zone,
  lastlogin timestamp without time zone,
  logincount integer NOT NULL DEFAULT 0,
  account_state character varying(255) NOT NULL DEFAULT 'active'::character varying,
  account_key character varying NOT NULL DEFAULT md5((now())::text),
  firstregistration timestamp without time zone NOT NULL DEFAULT now(),
  middlename character varying(255) NOT NULL DEFAULT ''::character varying,
  next_to_last_login timestamp without time zone,
  formername character varying(255) DEFAULT ''::character varying,
  former_firstname character varying(255) DEFAULT ''::character varying,
  former_lastname character varying(255) DEFAULT ''::character varying,
  former_middlename character varying(255) DEFAULT ''::character varying,
  first_activation_date timestamp without time zone,
  lastlogin_country_alpha_2_code character varying(2) DEFAULT NULL::character varying,
  lastlogin_ip inet,
  firstregistration_ip inet,
  account_type character varying(255) DEFAULT 'scientist'::character varying,
  CONSTRAINT pkey_accounts PRIMARY KEY (account_id),
  CONSTRAINT unique_accounts_account_key UNIQUE (account_key),
  CONSTRAINT check_account_type CHECK (account_type::text = 'scientist'::text OR account_type::text = 'business'::text OR account_type::text = 'subscriber'::text),
  CONSTRAINT check_accounts_account_state CHECK (account_state::text = 'active'::text OR account_state::text = 'locked'::text OR account_state::text = 'auto_locked'::text OR account_state::text = 'registered'::text OR account_state::text = 'registered_reminded_01'::text OR account_state::text = 'registered_reminded_02'::text OR account_state::text = 'registered_reminded_03'::text OR account_state::text = 'requested_unverified'::text OR account_state::text = 'requested'::text OR account_state::text = 'requested_approved'::text OR account_state::text = 'requested_rejected'::text OR account_state::text = 'requested_approved_reminded_01'::text OR account_state::text = 'requested_approved_reminded_02'::text OR account_state::text = 'expired'::text OR account_state::text = 'revoked'::text OR account_state::text = 'deceased'::text),
  CONSTRAINT check_accounts_login CHECK (login::text <> 'public'::text AND login::text <> ''::text),
  CONSTRAINT check_lower_login CHECK (login::text = lower(login::text))
)
WITH (
  OIDS=FALSE
);
ALTER TABLE core.accounts
  OWNER TO rg_dev;
GRANT ALL ON TABLE core.accounts TO rg_dev;
GRANT SELECT ON TABLE core.accounts TO hadoop_dev;
GRANT SELECT ON TABLE core.accounts TO rg_ro;
GRANT SELECT ON TABLE core.accounts TO repscore_dev;

-- Index: core.accounts_lastname_firstname

-- DROP INDEX core.accounts_lastname_firstname;

CREATE INDEX accounts_lastname_firstname
  ON core.accounts
  USING btree
  (lastname COLLATE pg_catalog."default", firstname COLLATE pg_catalog."default");

-- Index: core.index_accounts_account_id_account_state

-- DROP INDEX core.index_accounts_account_id_account_state;

CREATE INDEX index_accounts_account_id_account_state
  ON core.accounts
  USING btree
  (account_id, account_state COLLATE pg_catalog."default");

-- Index: core.index_accounts_account_state

-- DROP INDEX core.index_accounts_account_state;

CREATE INDEX index_accounts_account_state
  ON core.accounts
  USING btree
  (account_state COLLATE pg_catalog."default");

-- Index: core.index_accounts_firstlogin

-- DROP INDEX core.index_accounts_firstlogin;

CREATE INDEX index_accounts_firstlogin
  ON core.accounts
  USING btree
  (firstlogin DESC);

-- Index: core.index_accounts_firstname

-- DROP INDEX core.index_accounts_firstname;

CREATE INDEX index_accounts_firstname
  ON core.accounts
  USING btree
  (lower(firstname::text) COLLATE pg_catalog."default" varchar_pattern_ops);

-- Index: core.index_accounts_firstregistration

-- DROP INDEX core.index_accounts_firstregistration;

CREATE INDEX index_accounts_firstregistration
  ON core.accounts
  USING btree
  (firstregistration);

-- Index: core.index_accounts_lastlogin_country_alpha_2_code

-- DROP INDEX core.index_accounts_lastlogin_country_alpha_2_code;

CREATE INDEX index_accounts_lastlogin_country_alpha_2_code
  ON core.accounts
  USING btree
  (lastlogin_country_alpha_2_code COLLATE pg_catalog."default");

-- Index: core.index_accounts_lastname

-- DROP INDEX core.index_accounts_lastname;

CREATE INDEX index_accounts_lastname
  ON core.accounts
  USING btree
  (lower(lastname::text) COLLATE pg_catalog."default" varchar_pattern_ops);

-- Index: core.index_accounts_login

-- DROP INDEX core.index_accounts_login;

CREATE UNIQUE INDEX index_accounts_login
  ON core.accounts
  USING btree
  (login COLLATE pg_catalog."default");

-- Index: core.index_accounts_logincount_condition

-- DROP INDEX core.index_accounts_logincount_condition;

CREATE INDEX index_accounts_logincount_condition
  ON core.accounts
  USING btree
  ((logincount > 1));

-- Index: core.unique_accounts_lower_account_key

-- DROP INDEX core.unique_accounts_lower_account_key;

CREATE UNIQUE INDEX unique_accounts_lower_account_key
  ON core.accounts
  USING btree
  (lower(account_key::text) COLLATE pg_catalog."default");


-- Trigger: accounts_insert on core.accounts

-- DROP TRIGGER accounts_insert ON core.accounts;

CREATE TRIGGER accounts_insert
  AFTER INSERT
  ON core.accounts
  FOR EACH ROW
  EXECUTE PROCEDURE core.accounts_trigger();

-- Trigger: accounts_insert_or_update_unique_email on core.accounts

-- DROP TRIGGER accounts_insert_or_update_unique_email ON core.accounts;

CREATE TRIGGER accounts_insert_or_update_unique_email
  BEFORE INSERT OR UPDATE
  ON core.accounts
  FOR EACH ROW
  EXECUTE PROCEDURE core.accounts_unique_email_trigger();








-- Constraint: core.pkey_accounts

-- ALTER TABLE core.accounts DROP CONSTRAINT pkey_accounts;

ALTER TABLE core.accounts
  ADD CONSTRAINT pkey_accounts PRIMARY KEY(account_id);

-- Constraint: core.unique_accounts_account_key

-- ALTER TABLE core.accounts DROP CONSTRAINT unique_accounts_account_key;

ALTER TABLE core.accounts
  ADD CONSTRAINT unique_accounts_account_key UNIQUE(account_key);


-- Check: core.check_account_type

-- ALTER TABLE core.accounts DROP CONSTRAINT check_account_type;

ALTER TABLE core.accounts
  ADD CONSTRAINT check_account_type CHECK (account_type::text = 'scientist'::text OR account_type::text = 'business'::text OR account_type::text = 'subscriber'::text);