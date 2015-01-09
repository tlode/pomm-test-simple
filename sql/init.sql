BEGIN;

CREATE TABLE public.nested_nodes
(
   "id" serial NOT NULL,
   "lft" int NOT NULL,
   "rgt" int NOT NULL,
   "level" int NOT NULL,
   PRIMARY KEY ("id")
);

COMMIT;

