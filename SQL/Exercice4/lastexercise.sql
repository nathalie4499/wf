USE test;
INSERT INTO country(`name`) VALUE("Luxembourg");

INSERT INTO town(`name`, postal_code, Countryid)
	SELECT 'Luxembourg City', 'L-1480', id 
	FROM country WHERE `name` = "Luxembourg"; 
    
INSERT INTO address(address_field_1, Townid)
	SELECT 'Rue du moulin', id
    FROM town WHERE `name` = "Luxembourg City";
    
INSERT INTO address_type(label) VALUE("invoice");

INSERT INTO person(firstname, lastname) VALUE("Eric", "Benedetti");

INSERT INTO person_address VALUE(1, 1, 1);

SELECT person.firstname, person.lastname, country.name FROM 
person, 
person_address, 
address, 
town,
country
WHERE person.id = person_address.Personid AND 
				  person_address.Addressid = address.id AND
				  address.Townid = town.id AND
				  town.Countryid = country.id;
                  
SELECT person.firstname, person.lastname, country.name FROM 
person
JOIN person_address ON person.id = person_address.Personid
JOIN address ON address.id = person_address.Addressid
JOIN town ON town.id= address.Townid
JOIN country on country.id = town.Countryid;

SELECT human.firstname, human.lastname, country.name AS 'the name of the country' FROM 
person AS human;
SELECT COUNT(human.id) AS humanCount FROM 
person AS human;