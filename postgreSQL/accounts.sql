CREATE TABLE postgres.accounts
(
  id bigserial NOT NULL,
  username character varying(255) NOT NULL,
  firstname character varying(255) DEFAULT ''::character varying,
  lastname character varying(255) DEFAULT ''::character varying,
  email character varying(255) NOT NULL,
  password character varying(1023) NOT NULL DEFAULT ''::character varying,
  registration_date timestamp without time zone NOT NULL DEFAULT now(),
  last_login timestamp without time zone,
  login_count integer NOT NULL DEFAULT 0,
  account_type character varying(15) DEFAULT 'user'::character varying,
  account_state character varying(15) NOT NULL DEFAULT 'registered'::character varying,
  CONSTRAINT pkey_accounts PRIMARY KEY (id),
  CONSTRAINT unique_accounts_email UNIQUE (email),
  CONSTRAINT check_lower_email CHECK (email::text = lower(email::text)),
  CONSTRAINT check_account_type CHECK (account_type::text = 'user'::text OR account_type::text = 'admin'::text),
  CONSTRAINT check_accounts_account_state CHECK (account_state::text = 'active'::text OR account_state::text = 'registered'::text OR account_state::text = 'locked'::text)
)
WITH (
  OIDS=FALSE
);