CREATE TABLE postgres.products
(
  id bigserial NOT NULL,
  name character varying(255) NOT NULL,
  description text,
  price float,
  source_url text,
  image_url_primary text,
  image_url_secondary text,
  brand character varying(255),
  color character varying(100),
  gender character varying(50),
  size character varying(50),
  main_category_id bigserial,
  main_category character varying(255),
  sub_category_id bigserial,
  sub_category character varying(255),
  created_at timestamp without time zone NOT NULL DEFAULT now(),
  last_updated timestamp without time zone NOT NULL DEFAULT now(),
  CONSTRAINT pkey_product_id PRIMARY KEY (id),
  CONSTRAINT fkey_products_main_category_id FOREIGN KEY (main_category_id)
      REFERENCES postgres.categories (id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE SET NULL,
  CONSTRAINT fkey_products_sub_category_id FOREIGN KEY (sub_category_id)
      REFERENCES postgres.categories (id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE SET NULL
)
WITH (
  OIDS=FALSE
);