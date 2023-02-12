DROP PROCEDURE IF EXISTS mural_reset;

CREATE PROCEDURE mural_reset()

BEGIN 
drop table if exists award;
drop table if exists mural;
drop table if exists locations;
drop table if exists artist;


create table artist
(
    artist_id int not null AUTO_INCREMENT,
    artist_name varchar(255),
    gender varchar (255),
    age int not null,
    ethnicity varchar(255),
    birth_country varchar(255),
    is_studio varchar(255) null, 
    primary key (artist_id) 
) AUTO_INCREMENT = 5001;

insert into artist (artist_name, gender, age, ethnicity, birth_country, is_studio)
values
("Octavi Arrizabalaga","male",34,"Hispanic","United State","FALSE"),
("Andrew Pisacane","male",42,"Swedish","Switzerland","TRUE"),
("Franco Fasoli","male",41,"Hispanic","Argentina","FALSE"),
("Jerkface","male",41,"American","United States","FALSE"),
("Alexis Diaz","male",40,"Puerto Rican","Puerto Rico","TRUE"),
("Pixel Pancho","male",39,"Italian","Italy","FALSE"),
("ROA","male",46,"Belgian","Belgium","FALSE"),
("Donald Ross","male",37,"White","United States","FALSE"),
("Andrew Hem","male",47,"Cambodian","Cambodia","FALSE"),
("Aaron Martin","male",33,"Haiwaiian","United States","FALSE"),
("Aniekan Udofia","male",46,"Nigerian","United States","FALSE"),
("Przemek Blejzyk “Sainer”","male",33,"Polish","Poland","TRUE"),
("Nicolas Romero","male",37,"Argentinian","Argentina","FALSE"),
("Andrew Pisacane","male",34,"American","United States","FALSE"),
("Gregory Michael Mensching","male",40,"American","United States","FALSE"),
("Jonathan Hirsch","male",38,"American","United States","FALSE"),
("Natalia Rak","female",36,"Polish","Poland","FALSE"),
("Sonni Adrian","male",45,"Argentinian","Argentina","FALSE"),
("Stormie Mills","male",53,"British","United Kingdom","FALSE"),
("Daniel Kaliński","male",42,"Swedish","Sweden","FALSE"),
("David Flores","male",50,"American","United States","FALSE"),
("Ekundayo","male",39,"Hawaiian","United States","FALSE"),
("David Hookes","male",44,"Austrialian","Australia","FALSE"),
("Ron English","male",63,"American","United States","FALSE"),
("Smithe One","male",35,"Mexican","Mexico","FALSE"),
("Wes21 x ONUR","male",33,"Swiss","Switzerland","TRUE"),
("Simon Grendene ","male",46,"Swiss","Switzerland","TRUE"),
("Clogtwo"" Eman Raharno Jeman","male",35,"Singaporean","Singapore","TRUE"),
("Dean Stockton","male",44,"British","United Kingdom","FALSE"),
("Elio Mercado","male",38,"Caribbean","Dominican Republic","FALSE"),
("Nadirah Razak ","female",33,"Singaporean","Singapore","TRUE"),
("James Bullough","male",38,"American","United States","FALSE"),
("Jason Woodside","male",40,"American","United States","FALSE"),
("Patrick Moya","male",67,"French","France","FALSE"),
("Nils Westergard","male",28,"American","United States","FALSE"),
("Onur Dinc","male",43,"Swiss","Switzerland","FALSE"),
("James Thornhill","male",66,"American","United States","FALSE"),
("Taylor White","female",44,"American","United States","FALSE"),
("Vladimir Manzhos","male",41,"Ukranian","Ukraine","FALSE"),
("Ed Trask","male",48,"American","United States","FALSE"),
("Hanneke Treffers","female",41,"European","Netherlands","FALSE"),
("Jacob Eveland","male",33,"American","United States","FALSE"),
("Jade Rivera","male",39,"Peruvian ","Peru","FALSE"),
("Victor Quiñonez","male",45,"Mexican","Mexico","FALSE"),
("Lawrence Atoigue","male",40,"American","United States","FALSE"),
("Véronique Vanblaere","female",51,"Belgian","Belgium","FALSE"),
("Remi Rough","male",51,"British","United Kingdom","FALSE"),
("Jerkface","male",40,"American","United States","FALSE"),
("Juan Fernandez","male",44,"Puerto Rican","Puerto Rico","TRUE"),
("Victor Anselmi","male",45,"American","Poland","TRUE"),
("Mateusz Gapski “Bezt”","male",35,"Polish","Poland","TRUE")
;


create table locations
(
    location_id int not null AUTO_INCREMENT,
    street varchar(255),
    county varchar(255),
    zip int not null,
    `state` varchar(255),
    primary key (location_id)
) AUTO_INCREMENT = 101;

insert into locations (street, county, zip, `state`)
values
("111 south 18th street","Richmond",23223,"Virginia"),
("927 west grace street","Richmond",23220,"Virginia"),
("311 west broad street","Richmond",23220,"Virginia"),
("109 north 17th street","Richmond",23223,"Virginia"),
("1506-west-main-street","Richmond",23220,"Virginia"),
("11 West Grace Street","Richmond",23220,"Virginia"),
("212-west-broad-street","Richmond",23220,"Virginia"),
("309-north-laurel-street","Richmond",23220,"Virginia"),
("2400-west-main-street","Richmond",23220,"Virginia"),
("301 S Pine Street","Richmond",23220,"Virginia"),
("west-marshall-street","Richmond",23220,"Virginia"),
("9-west-grace-street","Richmond",23220,"Virginia"),
("112-north-18th-street","Richmond",23223,"Virginia"),
("1821-east-main-street","Richmond",23223,"Virginia"),
("11-south-18th-street","Richmond",23223,"Virginia"),
("1501-west-main-street","Richmond",23220,"Virginia"),
("140-west-clay-street","Richmond",23220,"Virginia"),
("315-west-broad-street","Richmond",23220,"Virginia"),
("14-s-15th-street","Richmond",23219,"Virginia"),
("2416-w-cary-street","Richmond",23220,"Virginia"),
("2416-w-cary-street","Richmond",23220,"Virginia"),
("205-e-marshall-street","Richmond",23219,"Virginia"),
("535-n-second-street","Richmond",23219,"Virginia"),
("1011-w-grace-st","Richmond",23220,"Virginia"),
("2416-w-cary-street","Richmond",23220,"Virginia"),
("534 N. Harrison St., north wall of Mansion","Richmond",23220,"Virginia"),
("2-n-rowland-street","Richmond",23220,"Virginia"),
("821-w-cary-st","Richmond",23220,"Virginia"),
("2600-w-main-st","Richmond",23220,"Virginia"),
("Fan District","Richmond",23220,"Virginia"),
("2103-w-main-st","Richmond",23220,"Virginia"),
("2907-w-cary-street","Richmond",23221,"Virginia"),
("100-s-addison-street","Richmond",23220,"Virginia"),
("300-w-broad-street","Richmond",23220,"Virginia"),
("825-w-cary-st","Richmond",23220,"Virginia"),
("918 W Grace St","Richmond",23220,"Virginia"),
("12 South Sheppard Street","Richmond",23221,"Virginia"),
("3006 Meadowbridge Road, Richmond","Richmond",23222,"Virginia"),
("646 N 7th Street Wall 1","Richmond",23219,"Virginia"),
("E Franklin Street","Richmond",23223,"Virginia"),
("Oregon Hill RIchmond va","Richmond",23284,"Virginia"),
("2053 West Broad Street","Richmond",23220,"Virginia"),
("2 N Meadow Street","Richmond",23220,"Virginia"),
("646 N 7th St Wall 2","Richmond",23219,"Virginia"),
("104 S Colonial St","Richmond",23221,"Virginia"),
("501 East Grace Street","Richmond",23219,"Virginia"),
("501 East Grace Street","Richmond",23219,"Virginia"),
("2315-W-Main-St","Richmond",23220,"Virginia"),
("600-N-Sheppard-Street","Richmond",23221,"Virginia"),
("108-N-7th-Street","Richmond",23219,"Virginia"),
("727-W-Clay-Street","Richmond",23220,"Virginia"),
("2007-W-Broad-St","Richmond",23220,"Virginia"),
("2400-W-Main-St","Richmond",23220,"Virginia"),
("620-N-Lombardy-St","Richmond",23220,"Virginia"),
("646-N-7th-St","Richmond",23219,"Virginia"),
("807-1-2-w-Clay-street","Richmond",23220,"Virginia"),
("1613-W-Main-Street","Richmond",23220,"Virginia"),
("1-E-Cary-St","Richmond",23219,"Virginia"),
("1533-Floyd-Ave","Richmond",23220,"Virginia"),
("1601-W-MainSt","Richmond",23220,"Virginia"),
("North 1st and East Marshall Streets","Richmond",23220,"Virginia"),
("19-South-BelmontAve","Richmond",23221,"Virginia"),
("100-S-Addison-St","Richmond",23220,"Virginia"),
("115-E-Main-St","Richmond",23219,"Virginia"),
("2100 East Main Street","Richmond",23223,"Virginia"),
("168-S-15th-St","Richmond",23219,"Virginia"),
("8-N-Plum","Richmond",23220,"Virginia"),
("414 2nd Street","Richmond",23219,"Virginia"),
("609-Idlewood-Ave","Richmond",23220,"Virginia"),
("6-W-Cary-St","Richmond",23220,"Virginia"),
("11-S-Foushee-Street","Richmond",23220,"Virginia"),
("934-W-Grace-St","Richmond",23220,"Virginia"),
("VCU Honors College Building","Richmond",23220,"Virginia")
;

create table mural
(
    mural_id int not null AUTO_INCREMENT,
    primary key (mural_id),
    mural_name varchar(255),
    artist_id int not null,
    location_id int not null,
    year_build int not null,
    mural_description varchar (768),
    commission_by varchar (255),
    is_covered varchar(255),
    art_style varchar(255),
    image_url varchar(255),
    foreign key (artist_id) References artist(artist_id) ON UPDATE CASCADE ON DELETE CASCADE ,
    foreign key (location_id) References locations(location_id) ON UPDATE CASCADE ON DELETE CASCADE 

); 

insert INTO mural (mural_name,artist_id,location_id, year_build, mural_description, commission_by, is_covered, art_style, image_url)
values 
    ("Warrior",5001,101,2012," monochromatic Black, White, Red, Pink","G40 Summit","Yes","Arcylic","https://lh3.googleusercontent.com/pw/AL9nZEV4u_mUW_afJ102uX4WKDXI0OXhLmFl04-A4Phz9GuHnHzOs2UNSN23knTIfkXCtR7iiNj70hLQi0aWfU11e6uI3ktXuhNIBxMz4jWYlBmAQPHGf6jg8ta84Ch_UoInqp0E--__kwjQ0S_g94w5pjW6=w1000-h638-no?authuser=0"),
("G40",5001,102,2012,"monochromatic  Black, White, Red","G40 Summit","No","Oil","https://lh3.googleusercontent.com/pw/AL9nZEWNcMNhs_kZ9I2FI0t9H5LneLuHkBOUBetkj4cTWgrqpzSYEfPdGc4jeX_yAEtMAribnL8PV7379CZ5pIcflN3PyNcUcfX52FdbJmRSAu7Ce7H7PIUA4qArsvEsL8A6XVkOD3h7fdvhoI6Gur9rEnfK=w1000-h601-no?authuser=0"),
("Angry Woebots",5002,103,2012,"Pandas that represent the story of struggle, humble beginnings and rolling with the punches","G40 Summit","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWtgNxmLcUv4iMjPXxJoGLmMQiUKk8rXwPqpOEBKmxMyhIpxTcNzE39qbzy0G5A4ZQ0Gi9wUCwdtUpDHt941Oa1k1Pwi-7CvoNOkEGwWh2c6aFqXE7PBxA1y_EHIESIYzUTjC5R4CNyHQeiqyYLDpdj=w1000-h534-no?authuser=0"),
("Fruits and Veggies",5003,104,2012,"Project that sits next to a local farmer’s mar","Richmond Mural Project","Yes","Fresco","https://lh3.googleusercontent.com/pw/AL9nZEXvPAhp2nCkMCcvJl9cmuVsgS1oxQ6UByhC6F-nKrSg9_QLxWBlR-2Cw3fnB5vJWLYJCQJDK3him1O6M9_U6XwM9iFCS_Uc-x_YxAcP3Xmce04A91NkshElCHpXGgZ8KZtPasctYD78UCrynv5wlHxR=w1278-h853-no?authuser=0"),
("Eat mor chikin?",5003,105,2012,"Technicolor","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXYG2_4gtMJPamMejjh34aiJSazDMngv6A-o4TvWNBudoK7EOJi2jnN_hT30QWLirK7eBzyZT3jjiDVst6ZictNlkxQhP0hTlbXn5Wo1z9MPHPlSOBsmzPEBMLg8WH0yM48Ww5cx-YJ-893em8h9VWG=w600-h906-no?authuser=0"),
("Dove",5004,106,2012,"White, Blue, Pink, Red","G40 Summit","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXwjMrlVzzrzoAsZ2NZWWnc1tz2fn2dN43yE7B7Ahf48cFep7cEyMNa85VPSRiuVSHyjtAILOkIN8NuaZ7PJK1uEiUabPuU5VBf_isQXtm8FS8Y3rrx9bzjfmgkq9PRUBIavQ9L7pUNQSvNy--4Ykfk=w960-h540-no?authuser=0"),
("El Nosotros",5005,107,2012,"","G40 Summit","No","Mosaic","https://lh3.googleusercontent.com/pw/AL9nZEVNgp3bJjqaVPar_EvlHSYQzPWqsE5Iw_jzTJa1pbs8OEfiOQbBMGJ_d1SjcW1abQtMTKc3I7MKBrXfCZWVpTDyp19DNBMFtIVOxd52A1qq2AyLx5Q56fExTEUeMH8sQnjxC8zLzH7Su3mTQlQhzGBJ=w965-h1286-no?authuser=0"),
("Nil Parana",5005,108,2012,"","RVA Mural Project","No","Marouflage","https://lh3.googleusercontent.com/pw/AL9nZEWRWWBDTslupFqc5R23WRfjqj5QYifkpmiNqO7ULCrF7GM5Btsx-LojtsjgeEH_g_Cka5Shqr3y41ZQGlD0K3k0xVzPA8ovxc2N0uAj0UrKaeFvT4rcFk8SH_vr8A0us2Ml6ZjTeHNfgJeEHoiS1O7J=w1000-h747-no?authuser=0"),
("MY|You",5005,109,2012,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXhw8rrvcWZx1WIxLJh7xwEdylAMND1MyM9Ka0r-YrUxb-PWhrIHBouKJmdIZl_a6lGRRD8HdzJT_i78zyFbNi58kuznyKlgNQ-kjD44_tA2UkukefLwOUf5NO6gNBVgD-2dQz3qB_xK6_uL9hNFKIV=w1000-h666-no?authuser=0"),
("Roger Rabbit",5006,110,2012,"","RVA Mural Project","Yes","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWhlpEvvo4PjG-yihoZ_A4__3n5DUJ1uAXISBqOtAvsgTvh828f359Zr9_-iCGIG3azrnyPzhCrvjxZhSS2injHOEMCMNvUHJWTxP8wcwxZT5rb7HP021wgflk4TkM_HSZgebOKZaVIVwv8YuzePRwM=w1278-h852-no?authuser=0"),
("G40",5007,111,2012,"was built by art Duo “La Pandillla” that featured the heavy us eof Chinese Ink on thin brushes to create a detailed mural. The project took 3 days to complete.","G40 Summit","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEUsB9HgHvcVJslE_BnP7ot9kELEsn2BFOgxqFZCM57ktrmrMrHaqF7JMHP1LW1sNjF6tBbw13d00PU9rS6THaGLlVd-B73Gr8NfobRolhPHYpmLZpGtDB6GmZc5tjSFTvhkUghYw1RiwNqohWLZ0IAu=w1000-h802-no?authuser=0"),
("Kiss From Space",5008,112,2012,"","RVA Mural Project","Yes","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEVN78qudXPHDXMQYpmoHiJi3tL8I1borqdBhpHPDWWNvQpW0gzgsN12T5izro_xhCocNhCWOg8BBHUVEQkIfsd4pJacYmBiuHrZAMTJD30a6XUhm-0PJFVib5AQU1NhKQYd0J-tLCze3lKWSwsztLem=w1000-h750-no?authuser=0"),
("Robotic Hyena",5008,113,2012,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEW4HQ59MPKYo6XhpUU_d_t4Ou650e9p6MXVoJ0UOhDRvT0qNas_vM5UBvjRD9qe3QipgvVaP6mbLQvWKrczndM09PWsYuX_ZGPE9DVfMMDKvBUrPxdseU_tiWLsfJFDIoWSwQkoh9KL9GoRxXYFvcxJ=w1000-h650-no?authuser=0"),
("Captain",5008,114,2012,"depicting Captain America’s head in Pixel’s Iconic decaying robot style","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWi5qmRcThk4Ef73glkysHR98ZE6LXiDgofNOFH38rmfedeMDg574foRT1g95eDKwo7M89zXyTFvX7LUG9EXXiisOm_b44NlgxtSvXH8qZ459wPrMM66GXKcufNi-Ulj1yY2He84XtWQJknK5cAn--H=w1000-h664-no?authuser=0"),
("Shell Game",5009,115,2012,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEV00hCQA2ecw2aNQvkROhsBs2KEAENeTZe58Atw39RUWYYSlQuOQwxV-LC_WBQriey-iYB5zmhsKSgAF3u9d8_8xoXXZLHNpmFDeWJg51kclpPv19sh9YCqmeMEsnXTZBSlAd1CXunm1A14uQ_8p76I=w1000-h800-no?authuser=0"),
("Majestic Struggle",5009,116,2012,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEVJufWaOKR650zllZTAgR0ZlZ_653S6ir1TcmMlcIMV4KPxtqZfDdZzFVNh7jg6Kz_wsMqMjvw1aYhinpbGy2ztT461snsQklpZsewJ0iKQhVCrA4Tho-7cedN5Ty3JK7P6M_9DgXvZCOIBufAtONCc=w1278-h852-no?authuser=0"),
("Morning Walk",5010,117,2012,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWEyQN_X-uGHNUFDynlbSrmricKOC6M_roeH-ZTD-vo20S80x3N0bsgDXA2xJt7tpLh_usmJS9cThiOkIfl0pJfLyjDu3F9mG6ZR3uogQTN6BNL1RwR_wwBTXmRQ90xZgKKikb9NhaHIzKcv-dhQpX9=w1030-h1287-no?authuser=0"),
("Flow",5010,118,2012,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEX_bJFHy668Fq7nK6eSrRvdZtDXx2B1iI59BE9bqWWu9lDpsJO-ymVkvOGYQngLF9JwXBhJD08nO2kh-HwDuwHqd0LqARcTj2jJBvc4kGa5LusnZRYJs-iUvf9g8KWAPgKjwTIe-TEDkZUvhmegs1FL=w1000-h664-no?authuser=0"),
("Woman in Blue",5011,119,2013,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEUSqqdIM5GMiGwK5A3mrVk-QY1oXvMf7T6Uc_-MEGhZ5WVbhG0w_DNkm2KoCxLjst1METC_BzwHKxaisRB1-MKjzxlVwtGKpD0eTHgTJ0G3D5n7BK_Qc9WNGLB4YIXhH3bzEo-172ZGQ_JIDFvrrzp0=w1000-h668-no?authuser=0"),
("Angry Woebots",5012,120,2013,"Displays Pandas that represent the story of struggle, humble beginnings and rolling with the punches","Richmond Mural Project","Yes","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEVWoUhIykq8_wYzj7i4M6yBkZzPk5fBTHwCgRpRUf6Em6MwPD0sBiNvAK85wA-waCxkzAkInWQj2zntB_-hUdlw2YkAYUPRMEdz_z7yov2xXAkdQ-2Je9HwbLwcTpQb0as2emaalANXtzt-E6ORaXfj=w760-h508-no?authuser=0"),
("Angry Woebots",5012,121,2013,"Displays Bear that represent the story of struggle, humble beginnings and rolling with the punches","Richmond Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWRteXahIlPna5WM9h7sO5YLswn5L7dzuPQiGx4AYAe2nytACkOjB2wguCX--5iOgyprqo5DWBBXg3MiyFWpBgmVydOToF4d-DfuBvY8l0iX_MA6Ll8j5qdND0cegodh5Ryfhh-e83W4vCqCSK7WSqB=w498-h720-no?authuser=0"),
("Bill “Bojangles” Robinson",5013,122,2013,"Displays Aniekan’s love for Black culture and original tap dancing","G40 Summit","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXYglJASTL8TWoJ_jf3zspjOK79PYi61fjIjw3KIsH07iytklq8tH9QxcsAJO08oCtxJljy35wBUasQXONqOX1TkLwUvmr__zrNObhxwRvaKA75IjsoOyL1j8w1hcAkbBqaNcVIE5qfi-FxtvjeuwmQ=w760-h508-no?authuser=0"),
("Hot Jazz",5013,123,2013,"Displays Aniekan’s love for Black culture and traditional music","G40 Summit","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEW_89BkhA3V7rDtwyFvssNZ7TshEIF3h7X1exuNH-wsB7ZZjvasBmdLWn11J6oor7g3CpBNVxQZDT2vWjrd4yKYIi-YhAHsx9ai-8mDN33tQbCegcX9tWBPErNOUl7ISFFjqdaTG8155d7IWJ_x16_k=w760-h508-no?authuser=0"),
("In a Jam - Moonshine",5014,124,2013,"Shows a stylized snow white sitting in a jar of strawberry moonshine","RVA Mural Project","No","Marouflage","https://lh3.googleusercontent.com/pw/AL9nZEV23QTzj8GeYvOuc9BUiOLVOb_NxZc_PlHIxoJZcxv8T_97Xt76OSHnSkXj2n4BFbXV_SXyYt8QROVs1FLLYISTXVJU3dPNmmlFKnNYqHLWcnTKPr9pyImJF0ho43yvyQ0hGok5H8QTKvgEr39jBFVy=w600-h842-no?authuser=0"),
("Pachamama",5015,125,2013,"done with Spray Paint and roller brushes","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXWOX1a13LWVFy-nnoLQxWpVxUit_SdkWUPjozqF0GyjvxzyiLTJZVTAvNssplEvean-bY2-ZidvCkZ0jGVEJGHQxi8-5y-_3K45BbNfZc1eA8y19tO2pzdkLct39h4auNIC-cW_UUjJfYrOLW2BROj=w1000-h668-no?authuser=0"),
("Connecting Force - Flow",5015,126,2013,"Project done with Spray paint and roller brushes","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEUKEOuPj9iZsQz_uAhhEGNcrVU8LYXy7pDmv0hDVVmbRW-mhsraUB6jykYdFaMfbopKJAeWi1oSq-ZTIvj7tmkgvQmnAPSWtkqhcJ8em9EBQwJOd40li_rX6Ej-YWk4uCZvMs54nWqEf_E2jkxXuBt3=w1278-h789-no?authuser=0"),
("Endless frontier of John Smith",5016,127,2013,"features John Smith and his Ship","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEUW8aKzXtFTztlJlXjXl3djUD-7MygC1Cma-fspzHHzsKApA-gcIy1B7-MpojCE5NbCmb61qmS5TL8nUZeh2Sh86Qm6zCtIrSgo3KEUeezI4BxwsSjjNPXsKzZLvVGF4eipesCrDGT2tUYSxh_zBmmS=w760-h508-no?authuser=0"),
("Untitled",5017,128,2013,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWTU9yy9ccBKLLDJqYV-zmy_hgcGfE8q9Z1XZeEDkczIHKZjUNWcxOJziPrJJ8REyEZ168qlvIipE_m6kWE-vShIWTD4iix80Q8x2BrvcosjQ86XV-Xh42LT5BdwnwhNPKht8fMmxRZd7a-j0jp7IhH=w700-h719-no?authuser=0"),
("Star Lite",5017,129,2013,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWKYKBZrh3MBDJi6cwoRRH0cTw9NrYih1_JI9Tm4gUdgzn0eGvceqljQRP78r5tpzl780dtBNL281ostDBHsD95nSkaT2xwWGuTakRFoEnkwth5BiQk8HtDJa2TdnZYa4LT3hRbbrTJQFpNv1ryn494=w760-h508-no?authuser=0"),
("Paint Happy",5018,130,2013,"features iconic painter Bob Ross and his famous “Happy Tree” details.","RVA Street Art Festival","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXotKV4qu3VpLTQkTwoFHh99PIPubbluEvhlJawjC8J_Bm2Tp2XdoU5pze-UiF8_UThXDywKCmYCX_-TqvNAnIv49aRk1_SA9q_lcuBlNG2IAJSEM2uZoDUIlr5E3Ejs8XcGRchWWnAQTkWozx8qKzB=s300-no?authuser=0"),
("Catch The Light",5019,131,2013,"using Acrylic paint, Ironlak, and took 5 days to complete","RVA Street Art Festival","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXugZFoVTXMybJ4sx2HOf5cI5Q07AbUYPvHmOCyVNflWf0lwQ-JDM8vVEyAoThjHj96Q52fksylTEN0xiOBP1MtVsmoc0SprsHc5YZW8FnFvsN94-Lnpx-cQi9ePBH-s6kE49D0XeQdBTKswHaC5gKA=w1278-h962-no?authuser=0"),
("Side-up",5020,132,2013,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXWtAZ2DEj0oaOQuipV_eXrWhC0y4rWRrGSpwRuZhbez29kseVHxQN4_W9CXXT917aJhuzQ22ZcahgPSHucBLVI7dM8Nhw0_YnH3_tclezlkPLzJQytNxMT0ktv5Hpd_UGDylnpkSXh4uQ-C_TFBoCI=w853-h1280-no?authuser=0"),
("Introverted",5021,133,2013,"","RVA Mural Project","Yes","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWN5DjuAwWvFmYhQavECsf_nDxWBBAIosB390fFpTUHq1LeWQwLRrTfqDfrubhSWsxKZjEVmti1QcTqWBMMSBzqCXV3pihtNCWvs942l6lQU2jWMl6cgD13GEtG-VsHFK6tpTtlkaLF-obMHMPFZqRp=w760-h508-no?authuser=0"),
("Dracula",5021,134,2013,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWvEG1sqiUhX1a9EjH5YPmujIH6iuZN6Ulxes9F0H63Qg80kZ0w8sU43rHSwP4DmNvQK3qU4axqsDzk5Cziw9o_NidkqfexoziA8O1eZwzh9Q708sJ1w4i6S8lrtXMJqSvdfvqos6oV2TCSIYCW2DaT=w760-h508-no?authuser=0"),
("Fistifcuffs",5021,135,2013,"","RVA Mural Project","No","Marouflage","https://lh3.googleusercontent.com/pw/AL9nZEVI20RSf8BuwyMh5Yd6jn2Nhc21Np_lwSFcsAaL-EZa5d-ijZsv5m5WcebRLoXqlpdlh0jv2dSoajeAWU4AN1ntp36LnB0S_gxRooujnJD5t_XJtQLTXyt1uiu6NyETZZFRR-3kU1lCU20YpJPjuzEX=w760-h508-no?authuser=0"),
("Crash Test Dummies",5022,136,2014,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXcBf-AIOzWaJqLP7qljJZn1uk_c5aA6pPPTeWlH7DHpeJLrHMkAV_lfBxBvtYPLxLRJd1eVPgBUlKkMhoNF1VAW_qHhEKmuIpm6of_hyAAxb3P-90EFOKC3OIZGM_xke7HX5Zo2PGyet4tbofw39Va=w960-h658-no?authuser=0"),
("Woodstock and Feathered Friend",5023,137,2014,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEUqsprNm9zWawkowLAFALZ4yXBHvTRbMc8_YrFnO02plwfyfuuEqP8AVxcrW2448FcaEW4-spuRizrE7H4PJ1n3lAImybouCAGMxsUKOwfNkAKn6xZik1mryI2AAVPCDArXeIMNLx9pSh-thyNip-nq=w1278-h852-no?authuser=0"),
("Woodstock",5023,138,2014,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWIkkGSmrXuoc1a_P1yOgpA5exZ9lHsbV-Z96DOPD7mI_1be2fJs4_YRatt2AZkdSTH0kKKC-zjT8k0OpR85Nf9oa_PUFbalJYpqJbePVHVPto2z68PFTBLSvuG0oes54PGO-QjKyZxuXR6dWt0jbGA=w1278-h959-no?authuser=0"),
("Woodstock and Snoopy",5023,139,2014,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEU1dMwxWgdahrOChE_BJk7a-jT_YDBVtrcIqa8v1wXyERjXH1d2S1Y6UaSkuGzQ1iV2eVue5j9iTEmSAUd08ZWyubxovn3qNdWGvQ7JOMQrlFOYKf13XgmrYh90gf8m5Cg8NoOqxLMvCcWdCYsNgSyA=s960-no?authuser=0"),
("Fun Guy or Dead guy Fungi",5024,140,2014,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWVYasuEKPO73_dQXAfs8VkYDO_wc1ubH9HHkR9MqUPvhD_6wV42lCQ4-ElgZe3Igdq49Fq7Odhash-v2laAPeY4FrvFCS4GYKadICGcjmyEhPQFofClO0n1BRhq_0lmFDwLGZBL9qo2saulyDND6Si=w1278-h569-no?authuser=0"),
("The Traveler",5024,141,2014,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWntFbKu-XYnTFATKSo_dymuzTeKrV1awf0vFZfMuFAVzSwQKx-TTp6-tyFgO0ATotV9A7UNEfUUzAC_OZYCmGA42EFRcRiUnE00XleLk4ZFDTDvSgZ4BjHjP6sWjUt7brEYKKl-POz3h7dhEh_zEFL=w1845-h1230-no?authuser=0"),
("Untitled",5025,142,2014,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEWyIAv_aNsWqyzRi99U8WRfLI2Oh29XVJ5ZtewNgm48vHJcUedvv7s2SsBHYDVdNY75WmDJlyQ7CDHB5Pucj5uo4yoxaguosIA1uWbRIwoo0Ek0J8VRb_myr0hOniqZvr7uEhYoZNm_U9jEI7RrPZfm=w1845-h1230-no?authuser=0"),
("Minotaur",5025,143,2014,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEUCSBMTd-R9VClEU1OVDeIrbSYbPfX4SxgNC8emF0IxDamnOOBvF1lQzsnB0XKVD4F7mLIeeLANJsnMeviHur7HLByEpVrYKF8paJManKp42G45XneHVppnTL3TcWIVaK_oQpKXkjVNnyxCe9PkXbuD=w1962-h1094-no?authuser=0"),
("Smiley amid Doom and gloom",5026,144,2014,"","RVA Mural Project","No","Oil","https://lh3.googleusercontent.com/pw/AL9nZEVSeDz0h2JNHsKTFk3qmXD5KcXYRChn8Z2c36aZ9uVs_fR7he-u-f4Z4lvhxsSnNcqQmS8iDft_S2wMX2vMJKYy7UmvEgk8Kwt5SDuTO2kAtXr5OT5oGsI_P6Tq-Pbn3iz0Bpgh-A12a9-s_zYVbwVR=w1845-h1230-no?authuser=0"),
("Skeleton Dance",5027,145,2014,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXFcbGuIYbMMmf9TYAMj2KDmCiGL8kgG3La4abwxcGRL7i5yUeY9iYBgOgGUi4V_P56dOByOThhFK5NaNZ3HLXjUvO1dan5VRlJwvtXKJRWN4ZEgSg4ILYjJxMxvisbFXfVEt9v4Kzl4zn5PeIw7TQR=s1262-no?authuser=0"),
("Doom Loop",5028,146,2014,"","RVA Mural Project","No","Fresco","https://lh3.googleusercontent.com/pw/AL9nZEV6W4FuThcZDWp0SFYP4oCkBEsbmzkXlzxDmi0OWbKgrHya8dX4CUkrtSG4uy8rGSfMVo5K6tCvun42ut6Qp5QfkWUQa1mPIy_ExY4dLif965GSXRc8bx8pdvGguXxKLfQ9A706tY3SvSI6MV2oMmPa=w1962-h1196-no?authuser=0"),
("Make Your Own Luck: “Ladybug”",5029,148,2015,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEV6W4FuThcZDWp0SFYP4oCkBEsbmzkXlzxDmi0OWbKgrHya8dX4CUkrtSG4uy8rGSfMVo5K6tCvun42ut6Qp5QfkWUQa1mPIy_ExY4dLif965GSXRc8bx8pdvGguXxKLfQ9A706tY3SvSI6MV2oMmPa=w1962-h1196-no?authuser=0"),
("Dance with Uncle Sam",5028,147,2014,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEU_jhknWlaa3LDOZF1B2nxPFswb-cjW-YRoHoHDn-l3aWwg1A7c90huvsoT4vcIzlVqAu9u7tmSrjmdoHkj3rqmfogRNDO5tSs2LsmyMlENCB1Xo-BQinHoyrf4T1XpyKS_JZ7FugPoGi1rzuNqXXO7=w1845-h1230-no?authuser=0"),
("Depths",5030,149,2015,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEUr2M8BFfsEbEuPHbe-YG8clsLeS5oTD2oQXERvm9_2wkLr_qoFXVRJiVTVBbtODq5AqFGHyqZ7Pki1L52d6ho_KK8qILI2YNB7Sctuut58om4is5R05gTmmGzpDVzBq6k00AbEwbra4T2l6uaiOq3I=w2048-h685-no?authuser=0"),
("Nothing Lasts Forever",5031,150,2015,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEUoB2oVxALecB39GBoPmoBQGJLKK_UkuxLjfZUnH41dsQv2AGHdU6ZGJxhwyuB9dIRz4kCAW1_4YRW2V3RNBl6bx1ybpkYOsb5Xonv8m7Zrl_2EqqNFIL7fE-uyZdFsb57dZwwU4kwBD5vjNC2STETt=w1895-h1262-no?authuser=0"),
("Glory",5032,151,2015,"","RVA Mural Project","No","Marouflage","https://lh3.googleusercontent.com/pw/AL9nZEUoLs1kOraStgletbIfOzPt-1xuLOf-uhLyPnem5h5VqcNS_VtVPlG4KwKiR4tvIT_cEHOeoM2d9kDsukilkZ77B8p1x3fItHrByn-ULkioHWokBr9IKvT8nE2hq1jqI-VXOZXqIU_ZFG8dk7FQ9xD-=w697-h1000-no?authuser=0"),
("Divine Protector",5033,152,2015,"","RVA Mural Project","Yes","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEVFsIEzwXFdqE4kfCM4xLeqY8iyQVZkZrytYDhkOBTWneFm9567Grppz7GNS-AiQ3vheGyV2nbrDVhvm9kHyrFOmwkCnKsz3IKLrLlc-7uC9U_4WdVxvH2AkJ6F951aFzPez6eK_lo0m9gqW9Mn5lTM=w1000-h598-no?authuser=0"),
("The Migration",5033,153,2015,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEUcmtT7kp8yg1Vlycsh3E7e-ZUIhL-jRb7FoHdvVdJ-w9Y_Asf07n7_H1fveL-XXJA8iRpP3mGsUjDquf2of2yT9ahu_X8vfmlskLeCexV7gx2qNs16GjAeL6RdBW0toh86T1AfO7Dsqq-t63N_4DaE=w763-h1000-no?authuser=0"),
("Fractured",5034,154,2015,"“It’s actually funny how my pieces now are very much about movement and motion, but it’s actually started from a desire to get my models into more awkward poses.”","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXTcEZY8SYrqud7UwyBwXGZtY67SMD2lSZyDuvDr6bHhuJq0hEc95tFghfFLHK194bW9M_v_zbIzcYeMtfHHSktIBQloIGdPkiRWG6vv3n2wQwT3fOJN7THKiGHGWp9xEL0rTVvgSFjpz9u46jgbU1k=w1080-h618-no?authuser=0"),
("Candy Butler",5050,156,2015,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXhN_NH8rUiCP26qglWvhZN_WNr4x-mGF5g01dNq6xk0Ex0k7cm2ki8O1mTeyfe7hnzIHSlAs3e5fA08HYlWQsydfGt4okFvcPA2wUaoAEcR4gyXCqT_D8xUO0qINprg_0KMuNPYDhHHwclKX_Fcz5f=w736-h1000-no?authuser=0"),
("Mickey",5050,157,2015,"","RVA Mural Project","No","Fresco","https://lh3.googleusercontent.com/pw/AL9nZEWCGhXK5ydIbLk1FFGBm-Qr7VI_AF5g6sgVdQAoR8xmTJAgYD08WHjGMRsYTs0_dCLetJ04H3GGyF12H-hyvah3XkX--LhXK4Z0ERXbmeSQs_py9MkEAFpC3XyTSRCQd4b1bH8khc8sAdualkqv7jZz=s1262-no?authuser=0"),
("Phoenix and Koi Fish and Dragon",5036,158,2015,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXgh2lxGh2qIT1KTrCLJq7qFC-HNG6SqnDlnbNnbKsTxfySbraNthgErjv0uUc__coexZ27w0j8HW9repb_nxGxtQyG2NAKy_iPl9ocaQrrzJbYkIr_BxiK1kqvEjkWX-niA1cPSIWj-D9XWU6lvgem=w1890-h1262-no?authuser=0"),
("Within",5037,159,2015,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXIJLX2YlH1Uoggrn_kRLrLWOqOwWy3tLcpIfTHh1wtxwFW1X-BcA5q8htWZXBx7fNv-0VIh_CvrxFVFweIfRwMULcaJ0yDVTYlboiZj3E4qOeFYXSCihcyBtPgEWHueJM3SUXoeDA2cjVrE2WkZKMZ=w843-h1262-no?authuser=0"),
("Excedrin headache",5038,160,2015,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEVyu7fFH9HmtpUgpou8S0Ldrwex2xazCZJuvGEmncB44b2IDVqV28zSqfSz483iSWpvwYqwQNSsuVvzAKjME_2Z0Gd_NAV3XUg1PjddBtUvrC8wSvvCA-CWkimg-MR9fHejBAE0dQGKaUED6immZE3q=w843-h1262-no?authuser=0"),
("Major Taylor, The Black Cyclone",5039,161,2015,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEU0OJDvC7ZpK42hmxpbyaRUkj1FV1NBkQd14i_7VmaaqoQf4-X-Uh11tAuIg_sjJMxNRMkSu3ogRwM4Pddmyl5_KWbi-Nq5_izZcgqQFgy_hEW75kmuiYtCGqGBsoW3Ohtg1c-VzXu8Uga4ERryuH_E=w1280-h853-no?authuser=0"),
("Dancer",5040,162,2015,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEVel8Np8n2mnEPpX4ZQ8wzyvWRoz49DKcKh2lWXJCO5VuFi_VnmqMdX2jkH2w2ocFH7g8agwuScnOmu_omIB16N3aYbh-zhLmNZzBfmyIZQQBHVfRv5tfmt-Rx73jiqSoExJkX-ZwYAhiWjVUV2oX5p=w842-h1262-no?authuser=0"),
("Struggle",5040,163,2015,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEVRMRdmEKzpTlP0tgOpDVF-eH2dX2hQk8rwmmdp4k3kQT6c05ptg-sddvG4ESI3OyGSZegbHhi_Uxx6pWxte7UvVNAYhiLOXPpIV28Txbk8fvCookVbl87THdDbey2WlQTVxXPYS7c7tXzYsZK6jpe3=w1280-h853-no?authuser=0"),
("Chasing Tigerman",5041,164,2015,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEUtTtdnOlEDtTjynnUCbanBqJJ--JdWkLoXhFiJs6imK55refQeCYg0KA41ZKBmcrhi2yvNtpaWJVXeYK8WMBu-uponcIRTYG03xWRT9YSrlJInYnoqLuFZMDmncmhbwf4JNSlcO2DCj0w_Ed58Sa35=w2500-h1232-no?authuser=0"),
("Nina Simon",5042,165,2016,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEV_Sq1EKokCtMSfP1kVPy6hFo7fIQKZpdMepKYMMl7PKHiFV8n4U_E9XdZ1bPwpGnUPMXQqeTkUXyo6pb3lQYOGUiBggmYTWMu4F2Se5qRWGXvcx3w-0MJoWBgt_Cmw1R2eeOenr563KR2uctv_djal=w1114-h768-no?authuser=0"),
("Odin",5044,167,2016,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEW_YmclnXI5dhvL2CqzHn21CIBz4eMvUXc5krJkbfjqpDmSLdhPguOweSzWDm_SaiXzFZPGWKREvZGPSpJ_K858Nbq1cHRt2_67XJao2GCSKnP-RU2ZGoHZKi5bjEgDFIPDAKCH2lMuDbc05EBmoCwl=w842-h1262-no?authuser=0"),
("The United",5043,166,2016,"","RVA Mural Project","Yes","Marouflage","https://lh3.googleusercontent.com/pw/AL9nZEV7wzF0X5nlo_k9PniQCkMnmM38LM9IFb-vv9DsXZ_D-Uj9Q4HhxklE_LDNhQhqQA4e1BYbwX-kxWw_MIrriHNxm5YSJ1HNvYQRjIK_XqR8qOui08sfUD0bbsCDXYmX3-YnxmX4cmHC9aiBCPPgDJF6=w1114-h768-no?authuser=0"),
("Heron",5044,168,2016,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEXc4eTrZ1azdjzGApdv_bjPcx2urg_Q0hzPFiAAfK-V2VTeFHOd45aRivo8r-7tTKAfTmTB7eWrxO6FElwhrl9HnlhZw5beCZj-UCy3O1z85zeEmJkEbdAyahk9zusqeezS21XXGjcZklFbuTFcHXW1=s1080-no?authuser=0"),
("LA Espera (As to Wait)",5045,169,2016,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEUxHkAdeAhELma-IYNmoqpt7KZiQ2qmehje1cZV8FbA7vXtGihZOc3OuKvTJDjRAlOoU9pO0-m6swOL0ujbXGboJebtG8IjEYibpBJ6gePVfFRo67P6wKEk-ikV1Lel0lAFZMktvTo5-jhk2ZF3J_3L=w1683-h1262-no?authuser=0"),
("G.O.D.S Givers of Devine Sound",5046,170,2016,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEUheXHfU4lrokTqJNavuSxvp2pzRIHT5vtPlkLy1TVrHeiNGQhIoxs0S9GKdighnXG2QrtQSZkYcPGQQCtpMmBfNvUJ9o0K8VCgIHzD2qXI6VVKbwZB6Iulc8g-Z-Du1m5CBSaMG0THnfYPYEzGNPxl=w1280-h853-no?authuser=0"),
("The World is Yours",5047,171,2016,"","RVA Mural Project","No","Marouflage","https://lh3.googleusercontent.com/pw/AL9nZEVir4MadZDTxOxlHk0Tslvbwwc76MKhV0a1Yuh2KhGI0Fy2s-2ESSZBn2MxiwheaRWBA8qQ-v5ia-UCTjh3Mxk35Jp8sgBRorCaVKVzWN3IkVho6InuwQC72Z412o-sBwGIla05jnVCpu3Yu4u2RVKV=w947-h1262-no?authuser=0"),
("Abstract Flower",5048,172,2016,"","RVA Mural Project","No","Graffiti","https://lh3.googleusercontent.com/pw/AL9nZEVsKM2-DyK5nYogCbCS13YfxZERtN2uc06olzH8FVl1db0gn8YsyT7Wv_LEyhZKv1gfQgtk4nJjTwDPbUlNEro6VF1gPMPjKzfn8exM453oXK4dcSx7J60NP2jHhVIKR_w0CEAO933qwxjR14hY8QV6=w1683-h1262-no?authuser=0"),
("VCU",5049,173,2017,"","RVA Mural Project","No","Marouflage","https://lh3.googleusercontent.com/pw/AL9nZEWaauHfoihw97c6wrkG3s54-S424oFF0TDQvubQtcnMnDiiwGYHP-952oiFTdJsK1Sne5XG3lYbpzLSLNebWXugQ6vmcw8w1t0MV0uwdtpgYAU9Bun1rlP2_1_V6MfkB6yex3wnB8u9TQ7Qvkp59fy5=w1893-h1262-no?authuser=0")
;








create table award
(
    award_id int not null AUTO_INCREMENT,
    award_name varchar(255),
    mural_id int not null,
    award_year int not null,
    award_by varchar(255),
    primary key (award_id),
    foreign key (mural_id) References mural(mural_id) ON UPDATE CASCADE ON DELETE CASCADE 
);


insert into award (award_name, mural_id, award_year, award_by)
value 
("Richmond Mural Award",1,2012,"Richmond Mural Project"),
("Most Expressive",4,2012,"Richmond Mural Project"),
("Africa's Finest",3,2013,"G40"),
("Richmond Mural Award",2,2013,"Richmond Mural Project")
;
END





-- CALL mural_reset();