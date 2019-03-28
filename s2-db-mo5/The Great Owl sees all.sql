Select 
	tblEvent.EventName,
	tblEvent.EventDate,
	FORMAT (EventDate, 'd', 'en-gb') AS 'Using Format',
	CONVERT( varChar, EventDate, 103)

FROM 
	[dbo].[tblEvent]

where 
	tblEvent.EventDate = '2002'