CREATE TABLE postgres.categories
(
  id bigserial NOT NULL,
  name character varying(255) NOT NULL,
  description character varying(255) NOT NULL,
  parent_id bigserial,
  CONSTRAINT categories_pkey PRIMARY KEY (id),
  CONSTRAINT unique_categories_name UNIQUE (name)
)
WITH (
  OIDS=FALSE
);