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
  CONSTRAINT pkey_categories PRIMARY KEY (id),
  CONSTRAINT fkey_categories_category_id FOREIGN KEY (category_id)
      REFERENCES postgres.categories (id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE SET NULL,
)
WITH (
  OIDS=FALSE
);