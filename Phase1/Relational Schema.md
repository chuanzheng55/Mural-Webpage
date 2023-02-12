**Relational Schema**

mural(mural_id(PK), artist_id(FK), mural_name, location_id, year_build, mural_description,commision_by, is_covered,art_style, image_url)

    mural_id(PK): Integer: Primary key 
    artist_id (FK): Integer: Foreign key 
    location_id (FK): Integer: Foreign key
    mural_name : String
    year_build: Integer
    mural_description: String   	
    commision_by : String
    is_covered: String
    art_style : String
    image_url : String

location (location_id (PK), street, county, zip, state)

    location_id (PK): Integer: Primary key 
    street: String
    county: String
    zip: Integer
    state: String
	
artist (artist_id(PK),  artist_name, gender,age,ethnicity, birth_country, is_studio)

    artist_id(PK):  Integer: Primary key
    Artist_name: String
    Age: Integer 
    Gender: String
    Ethnicity: String
    Birth_country: String
    Is_studio: String

Award (award_id(PK), mural_id(FK), award_name,award_year, award_by)

    award_id(PK): Integer: Primary Key
    mural_id(FK): Integer: Foregin Key
    Award_name: String
    Award_year: Integer
    award_by:String
