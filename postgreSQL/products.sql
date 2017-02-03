CREATE TABLE postgres.products
(
  id bigserial NOT NULL,
  name character varying(255) NOT NULL,
  description text,
  price money,
  shipping_price money,
  image_url text,
  source_url text,
  ean bigserial,
  article_number bigserial,
  brand character varying(255),
  color character varying(100),
  gender character varying(50),
  category_id bigserial,
  created_at timestamp without time zone NOT NULL DEFAULT now(),
  last_updated timestamp without time zone NOT NULL DEFAULT now(),
  CONSTRAINT pkey_products PRIMARY KEY (id),
  CONSTRAINT fkey_products_category_id FOREIGN KEY (category_id)
      REFERENCES postgres.categories (id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE SET NULL
)
WITH (
  OIDS=FALSE
);

ALTER TABLE postgres.products
  ADD CONSTRAINT pkey_products PRIMARY KEY(id);