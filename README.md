[![Open in Visual Studio Code](https://classroom.github.com/assets/open-in-vscode-c66648af7eb3fe8bc4f294546bfd86ef473780cde1dea487d3c4ff354943c9ae.svg)](https://classroom.github.com/online_ide?assignment_repo_id=8516929&assignment_repo_type=AssignmentRepo)
# 508-fall-semester-project
Template repo CMSC 508 semester projects

**Edit this file to include A TABLE summarizing the information for each team member: name, VCU email address, and GitHub username**

| Name             | VCU email address | GitHub Username
| -----------      | ----------------- | --------------
| Sabri Anan       | anansa@vcu.edu    | Anan-10
| Gary Preston     | prestong@vcu.edu  | Gary-Preston
| Chuan Zheng      | zhengc2@vcu.edu   | chuanzheng55


**Provide a brief description of the structure of your repository. It is recommended that you organize your repository into separate areas for documentation, design diagrams, SQL scripts, etc.**

We see a lot mural arts on our cities which are not perfectly documented such as what is the name of the mural, what is the artist nama, what kind of painting is used for the mural, did the artist receive any award for it or not. So, we created a Mural Database which contains data for Murals, Artists, Locations of Mural, Images of murals, awards etc on greater Richmond area where everyone can find most of the information regarding mural they want in Richmond, Virgnia which has not been documented as a database before. 

## Relational Schema
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


## Mural Web Application  

Website- (https://www.cmsc508.com/202310/team25/)

** Here is a good guide for markdown: (https://www.markdownguide.org/)
