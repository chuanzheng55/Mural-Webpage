DROP VIEW IF EXISTS awardedView;
CREATE VIEW awardedView AS
SELECT mural_id,
    artist_id,
    location_id,
    award_id,
    artist_name,
    gender,
    age,
    ethnicity,
    birth_country,
    is_studio,
    mural_name,
    year_build,
    mural_description,
    commission_by,
    is_covered,
    art_style,
    image_url,
    award_name,
    award_year,
    award_by,
    street,
    county,
    zip,
    `state`
FROM mural
    inner JOIN artist USING (artist_id)
    inner JOIN locations USING(location_id)
    LEFT JOIN award USING(mural_id);
SELECT *
FROM awardedView
ORDER BY mural_id;


-- SELECT mural_id, mural_name, mural_description, image_url FROM awardedView WHERE commission_by='G40 Summit' AND award_name LIKE '%Africa%';

-- SELECT mural_name, image_url FROM awardedView where artist_name= "Sonni Adrian";

-- SELECT mural_id, mural_name,mural_description, image_url  FROM awardedView where zip = 23220;

-- SELECT award_id, award_name, award_by FROM awardedView WHERE artist_name = "Octavi Arrizabalaga";

-- SELECT mural_id, mural_name, mural_description, image_url FROM awardedView WHERE award_by = "Richmond Mural Project";

-- SELECT mural_id, mural_name, mural_description, image_url FROM awardedView WHERE year_build BETWEEN 2012 AND 2015;

-- SELECT mural_id, mural_name, mural_description, image_url FROM awardedView WHERE year_build BETWEEN 2012 AND 2015 AND artist_name = "Aaron Martin";

-- SELECT mural_id, mural_name, mural_description, image_url FROM awardedView WHERE award_year = 2012;

-- SELECT mural_id, mural_name, mural_description, image_url FROM awardedView WHERE award_by = "G40";

-- SELECT mural_id, mural_name, mural_description, image_url FROM awardedView WHERE is_studio = "TRUE";

-- SELECT mural_id, mural_name, mural_description, image_url FROM awardedView WHERE birth_country = "Switzerland";

-- SELECT mural_id, mural_name, mural_description, image_url FROM awardedView WHERE gender = "male" OR gender = "female" ORDER BY mural_id;

-- SELECT artist_name FROM awardedView WHERE award_year = 2012 AND gender = "male";

-- SELECT mural_id, mural_name, mural_description, image_url FROM awardedView WHERE commission_by = "G40 Summit" AND award_name = "Africa's Finest";

-- SELECT artist_id, artist_name, age, gender, ethnicity FROM awardedView WHERE commission_by = "Richmond Mural Project";

-- SELECT mural_id, mural_name, mural_description, image_url FROM awardedView WHERE COUNTY = "Richmond" AND award_name = "Most Expressive";

-- SELECT artist_id, artist_name, age, gender, ethnicity, birth_country FROM awardedView WHERE (award_year BETWEEN 2012 AND 2022) and zip = 23220 GROUP BY artist_id;

-- SELECT artist_id, artist_name, age, gender, ethnicity, birth_country FROM awardedView WHERE birth_country = "United State" AND award_name = "Richmond Mural Award" GROUP BY artist_id;

-- SELECT artist_id, artist_name, age, gender, ethnicity, birth_country FROM awardedView WHERE (NOT birth_country = "United States") AND (NOT birth_country = "United State") AND is_studio = "TRUE" GROUP BY artist_id;

-- SELECT artist_id, artist_name, age, gender, ethnicity, birth_country FROM awardedView WHERE is_studio = "FALSE" GROUP BY artist_id;

-- SELECT artist_id, artist_name, age, gender, ethnicity, birth_country FROM awardedView WHERE art_style = "Graffiti" AND zip = 23223 GROUP BY artist_id;
