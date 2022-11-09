ALTER TABLE customer
    ADD CONSTRAINT CHECK (contractType="Part-Time" OR contractType="Permanent" OR contractType="Internship" OR contractType="Seasonal");