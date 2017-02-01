CREATE TABLE postgres.products
(
  id bigserial NOT NULL,
  category_id bigserial,
  CONSTRAINT categories_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);