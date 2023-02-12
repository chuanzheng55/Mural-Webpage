# Phase 1 documentation

Anan Sabri, Chuan Zheng, Gary Preston 
Introduction into Database
Professor Leonard
10/13/22

Semester Project: Richmond Mural Database

A mural is a piece of graphic artwork that is generally painted or applied directly to a wall, ceiling, floor, or building using techniques such as fresco, mosaic, graffiti, marouflage and many more. Richmond Virginia has seen an increase in tourist over the years and to beautify the city even more the city commissioned several art projects throughout the years where artists from all over the earth would travel to Richmond, Virginia to leave their mark on the city. The purpose of this project is to identify the painted art pieces scattered around the Richmond Virginia area on many different structures and index the information into this Mural Database. Because the current source of information on murals located in the Richmond Virginia area is becoming outdated and decentralized due to time our goal is to revitalize the data and extend onto existing data by now including, in depth mural information along with artist’s information and personal background, triangulation of murals within a set distance, art pieces that have won awards and much more. 

To create the datasets for the Mural Project and its attributes there are an assortment of programs that will be utilized in the design of this project. MySQL will be the program of choice to handle the database infrastructure and will contain all the preceding information while Python and its extended libraries and Flask will handle the web framework. Photoshop is an essential part of the current toolkit because it will be resized and index information on the murals such as color code file manipulation for easy storing locally or server-side. Finally, GitHub will be the program that will deal with version control and implementation of new features across different IDEs. To begin getting data and implementing new features the data needs to be defined.

The mural currently contains four tables, Mural, Artist, Location and Awards. The Mural contains the entities “mural_id” as the primary key, “location_id” and “artist_id” as the foreign keys and finally “year”, “color”, “description”, “commission”, “canvas_type”, and “art_style”. The location table contains location_id as the primary key, and street, county, zip and state as the entities. The artist table contains artist_id as the primary key, artist_name and artist tag as the foreign keys, and gender, age, ethnicity, is_studio, artist_name and their professional tags as the entities. Finally, we have award which contains award_id as the primary key, mural_id as the foreign key, and artist_name, award_year, and award_by, as the entities. The initial set of data before the data contained a lot of duplicate fields and caused a lot of redundancy and reduced logic so by trimming the data down into tables and then sub attributes and entities the new dataset conformed to first, second, third, BCNF and fourth normal form since it no longer contained different datatypes cells, no partial dependencies of data, no transitive dependencies, primary keys in table and lacks non-trivial multivalued dependencies. 

Because there is a large expansive set of data within this project there are many queries that can be written to ask the database to return a result. Location has a relation to mural and mural is created by artist along with award being connected by relation to both artist and mural. By having the table relation and non-dependent data there are a lot of successful queries that can have even more depth such as if two artists are apart of a studio, who are international and if they have the same art style. By utilizing the toolsets and data listed above and implementing the steps previously explained this database should give deeper insight into how much more a mural can tell outside of art.

Queries:
1.	Find all murals by the Sonni Adrian;
2.	Find all murals located in 23224.
3.	Find all the all the award by this Sonni Adrian;
4.	Find all the mural that is awarded by Richmond Mural Project;
5.	Find all the mural in year range or 2012-2015;
6.	Find all the murals in year range of 2012-2015 by Aaron Martin;
7.	Find all the murals awarded in year in 2012;
8.	Find all the murals that is awarded by G40 art summit;
9.	Find all the murals that is created by studio not individually;
10.	Find all the murals that is created by artist who is living in Richmond;
11.	Find all the murals that is created by male or female artist;
12.	Find all the artist name that was awarded in 2012 and who is also female or male;
13.	Find all the murals that is commissioned by G40 art Summit and also award_by Africa’s Finest;
14.	Find all the artist that is commissioned by Richmond Mural Project;
15.	Find all the murals in Richmond and was awarded_by Most expressive;
16.	Find all the artist who is awarded in year from 2012-2022 and also located in Richmond; 
17.	Find all the artist who is born in Italy and won the  Richmond Mural Award;
18.	Find all artists who are not born in the United States and are a part of a studio.
19.	Find all artists who collaborated on a mural who are not a part of a studio.
20.	Find all artists who use graffiti on a mural and who painted on a building in 23223.

