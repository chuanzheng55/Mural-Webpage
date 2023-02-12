Mural
| mural\_id(PK) | mural\_name                    | artist\_id(FK) | location\_id(FK) | year\_built | description                                                                                           | commission\_by         | canvas\_type | art\_style |
| ------------- | ------------------------------ | -------------- | ---------------- | ----------- | ----------------------------------------------------------------------------------------------------- | ---------------------- | ------------ | ---------- |
| 1             | Warrior                        | 1              | 1                | 2012        | monochromatic Black, White, Red, Pink<br><br>                                                         | G40 Summit             | building     | graffiti   |
| 2             | Angry Woebot                   | 2              | 3                | 2012        | Pandas that represent the story of struggle, humble beginnings and rolling with the punches<br><br>   | Richmond Mural Project | wall         | graffiti   |
| 3             | Fruits and Veggies<br><br><br> | 3              | 4                | 2012        | A mural commissioned for the Richmond Mural Project that sits next to a local farmer’s market<br><br> | Richmond Mural Project | building     | fresco     |

Location
| location\_id(PK) | street                | county   | zip   | state    |
| ---------------- | --------------------- | -------- | ----- | -------- |
| 1                | 11 south 18th street  | Richmond | 23223 | Virginia |
| 2                | 927 west grace street | Richmond | 23220 | Virginia |
| 3                | 311 west broad street | Richmond | 23220 | Virginia |
| 4                | 109 north 17th street | Richmond | 23223 | Virginia |

Artist
| artist\_id(PK) | artist\_name        | gender | age | ethic    | birth\_country | is\_studio |
| -------------- | ------------------- | ------ | --- | -------- | -------------- | ---------- |
| 1              | Jacopa Cerrarelli   | male   | 41  | Italian  | Italy          | FALSE      |
| 2              | Aaron Martin        | male   | 29  | Hawaiian | United State   | FALSE      |
| 3              | Octavi Arrizabalaga | male   | 34  | Hispanic | United State   | FALSE      |
| 4              | Daniel Kaliński     | male   | 42  | Swedish  | Switzerland    | TRUE       |

Award
| award\_id(PK) | award\_name          | mural\_id(FK) | award\_year | award\_by              |
| ------------- | -------------------- | ------------- | ----------- | ---------------------- |
| 1             | Richmond Mural Award | 1             | 2012        | Richmond Mural Project |
| 2             | Most Expressive      | 4             | 2012        | Richmond Mural Project |
| 3             | Africa's Finest      | 3             | 2013        | G40                    |
| 4             | Richmond Mural Award | 2             | 2013        | Richmond Mural Project |