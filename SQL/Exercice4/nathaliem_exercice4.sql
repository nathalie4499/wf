ALTER TABLE person_address ADD CONSTRAINT a FOREIGN KEY(Personid) REFERENCES person(id);
ALTER TABLE person_address ADD CONSTRAINT b FOREIGN KEY(Addressid) REFERENCES address(id);
ALTER TABLE person_address ADD CONSTRAINT c FOREIGN KEY(Address_typeid) REFERENCES address_type(id);
ALTER TABLE town ADD CONSTRAINT Countryid FOREIGN KEY(Countryid) REFERENCES country(id);
ALTER TABLE address ADD CONSTRAINT Townid FOREIGN KEY(Townid) REFERENCES town(id);

    
    
