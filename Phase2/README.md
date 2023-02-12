# Phase 2 documentation
This folder contains individual artifacts for successful completion of Phase 2 submission.

This file contains the overall submission, with embedded images or links to relevant files, either within this folder or not.


| Name             | VCU email address | GitHub Username
| -----------      | ----------------- | --------------
| Sabri Anan       | anansa@vcu.edu    | Anan-10
| Gary Preston     | prestong@vcu.edu  | Gary-Preston
| Chuan Zheng      | zhengc2@vcu.edu   | chuanzheng55




### Updated descripon of the real world problem providing a context, scope of system.

We see a lot murals street art within our cities which are not perfectly documented such as what is the name of the mural, what is the artist nama, what kind of painting is used for the mural, did the artist receive any award and much. With those questions in mind we created a Mural Database which contains data for Murals, Artists, Locations of Mural, Images of murals, awards etc within the Greater Richmond area where everyone can find most of the information regarding mural they want in Richmond, Virgnia with updated and relevant information. 

## Describes the users of the system

This database will serve mainly the people who loves art and the vision of artists, where artists have expressed their language through Murals.

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

## Provide an updated ER diagram as appropriate.

ER Diagram - (https://lucid.app/lucidchart/89e38cba-de75-448d-aeaa-1309309ae344/view?page=0_0&invitationId=inv_29418614-4702-4c81-be68-dc919578202b#)

## Describe lessons learned and what you'd do differently next time.

The use of Github for version control would've been incredibly helpful for version control and seeing which team member submitted changes along with being able to see what files were deleted or created. Another lesson we learned from this project is time management and resource allocation such as not giving people a large workload they may not be able to handle and running into last minute glitches. Initially we started out with code that wasn't dynamic and had to be pasted in each page which originally allowed us the ability to control what the code did but eventually we had to change it into a functionality so when the code is updated every instance of that code is updated without manually having to go back through and change each reference of that code. 

## Describe how the semester project can be improved.

There could be better error handling for user input along with settling internal conflict regarding a proper interface. The project could benefit from an expanded data set but the scope would grow exponentially larger.

## Web Application 

Website- (https://www.cmsc508.com/202310/team25/)

Video Demonstration of Website
Video - https://drive.google.com/file/d/1EpiyXmVLJIjjsa2etpxh7z7KZWwLBHyc/view?usp=sharing
