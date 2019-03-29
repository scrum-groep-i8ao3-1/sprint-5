SELECT
	tblCountry.CountryName
	,CASE
            WHEN LOWER(LEFT(tblCountry.ContinentID,1)) IN ('1','3') 
                THEN 'Eurasia'
            WHEN LOWER(LEFT(tblCountry.ContinentID,1)) IN ('2','4') 
                THEN 'Somewhere hot'
			WHEN LOWER(LEFT(tblCountry.ContinentID,1)) IN ('5','6') 
                THEN 'Americas'
			WHEN LOWER(LEFT(tblCountry.ContinentID,1)) IN ('7') 
                THEN 'Somewhere cold'
			WHEN LOWER(LEFT(tblCountry.ContinentID,1)) != ('7') 
                THEN 'Somewhere else'
				end as [CountryLocation]

From 
	tblCountry

Order BY 
		CountryLocation Desc
